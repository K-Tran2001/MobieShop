$(document).ready(function () {

    var dataTable = $('#myTable').DataTable({
        "ajax": "../../fetchdata.php?page=banner",
        "columns": [{
            "data": "0"
        }, {
            "data": "1"
        }, {
            "data": "2"
        }, {
            "data": "3"
        }]
    });

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $('#content').toggleClass('active');
    });

    $('.more-button,.body-overlay').on('click', function () {
        $('#sidebar,.body-overlay').toggleClass('show-nav');
    });

    // $("#live_search").keyup(function(){
    //     var input = $(this).val();

    //     if(input!=''){
    //         $.ajax({
    //             url:"acc-func.php?action=search",
    //             method:"post",
    //             data:{
    //                 input:input,
    //                 displaySend:"true"
    //             },
    //             success:function(data){
    //                 $('#displayDataTable').html(data);
    //                 //$('#displayDataTable').css("dispaly","block");
    //             }
    //         })
    //     }else{
    //         displayData();
    //     }
    // })

    $(document).on('click', '#Add', function () {


        addbanner(dataTable);
        // 

    });

    $(document).on('click', '#Update', function () {


        updateDetails(dataTable);
        // 

    });

    $(document).on('click', '.delete', function () {
        var user_id = $(this).attr("id");

        deleteuser(user_id, dataTable);
        // 


    });






});

function uploadfile_for_insert() {
    //To save file with this name
    var file_data = $('#img_insert').prop('files')[0];    //Fetch the file
    filename = file_data['name'];
    console.log(filename);
    var form_data = new FormData();
    form_data.append("file", file_data);
    form_data.append("filename", filename);

    //Ajax to send file to upload
    $.ajax({
        url: "../../upload.php",                      //Server api to receive the file
        type: "POST",
        dataType: 'script',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,

        success: function (dat2) {
            if (dat2 == 1) alert("Successful");
            else alert("Unable to Upload");
        }
    });
}
function uploadfile_for_update() {
    //To save file with this name
    var file_data = $('#img_update').prop('files')[0];    //Fetch the file
    filename = file_data['name'];
    console.log(filename);
    var form_data = new FormData();
    form_data.append("file", file_data);
    form_data.append("filename", filename);

    //Ajax to send file to upload
    $.ajax({
        url: "../../upload.php",                      //Server api to receive the file
        type: "POST",
        dataType: 'script',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,

        success: function (dat2) {
            if (dat2 == 1) alert("Successful");
            else alert("Unable to Upload");
        }
    });
}
function getDetails(id) {

    console.log(id);
    $.post("banner-func.php?action=getdataById", { updateid: id }, function (data, status) {
        var bannerid = JSON.parse(data);
        console.log(bannerid);

        $('#banner_id_update').val(bannerid.BANNER_ID);


        $('#product_id_update').val(bannerid.PRODUCT_ID);

        $('#state_update').val(bannerid.STATE);
        //$('#avatar_update').val(bannerid.avatar);

    });

    $('#Edit').modal('show');
    //mai code
}

function updateDetails(dataTable) {
    try {
        var file_data = $('#img_update').prop('files')[0];    //Fetch the file
        filename = file_data['name'];

        var banner_id = $('#banner_id_update').val();
        var img = filename;
        var product_id = $('#product_id_update').val();
        var state = $('#state_update').val();

        console.log(1);
        $.post("banner-func.php?action=update", {
            banner_id: banner_id,
            img: img,
            product_id: product_id,
            state: state


        }, function (data, status) {
            console.log(data)
            dataTable.ajax.reload();

            uploadfile_for_update();
            $('#banner_id_update').val('');
            $('#img_update').val('');
            $('#product_id_update').val('');
            $('#state_update').val('');


            $('#Edit').modal('hide');

            //displayData();
            showSuccessMsg('Thanh Cong', 'Sua DL thanh cong', 'info')


        });

    } catch {



        var banner_id = $('#banner_id_update').val();
        var img = '';
        var product_id = $('#product_id_update').val();
        var state = $('#state_update').val();

        console.log(1);
        $.post("banner-func.php?action=update", {
            banner_id: banner_id,
            img: img,
            product_id: product_id,
            state: state


        }, function (data, status) {
            console.log(data)
            dataTable.ajax.reload();

            //uploadfile_for_update();
            $('#banner_id_update').val('');
            $('#img_update').val('');
            $('#product_id_update').val('');
            $('#state_update').val('');


            $('#Edit').modal('hide');

            //displayData();
            showSuccessMsg('Thanh Cong', 'Sua DL thanh cong', 'info')


        });

    }


}

function changeState(banner_id, state) {
    $.post("banner-func.php?action=updateState", {
        banner_id: banner_id,
        state: state


    }, function (data, status) {
        console.log(data)
        setInterval(() => { }, 1000)

        ////displayData();
        showSuccessMsg('Thanh Cong', 'Sua DL thanh cong', 'info')


    });

}
function deleteuser(id, dataTable) {
    //mai code
    if (confirm('Ban co thuc su muon xoa ' + id)) {
        $.ajax({

            url: "banner-func.php?action=delete",
            type: "post",
            data: {
                deleteid: id
            },
            success: function (data, status) {
                //Toast success
                dataTable.ajax.reload();
                showSuccessMsg('Thanh Cong', 'Xoa DL thanh cong', 'success')
                //displayData();
            },
            error: function () {
                //Toast error
            }
        })

    }

}

function displayData() {
    var displayData = "true";
    $.ajax({
        url: "acc-func.php?action=getdataAll",
        type: "post",
        data: {
            displaySend: displayData
        },
        success: function (data, status) {
            $("#displayDataTable").html(data);
        }
    })



}
function showMessage(message) {

}


function addbanner(dataTable) {
    try {
        var file_data = $('#img_insert').prop('files')[0];    //Fetch the file
        filename = file_data['name'];


        var img = filename;

        var product_id = $('#product_id_insert').val();


        //console.log(username,password,avatar);

        $.ajax({
            url: "banner-func.php?action=insert",
            type: "post",
            data: {
                img: img,
                product_id: product_id,
            },
            success: function (data, status) {
                dataTable.ajax.reload();
                uploadfile_for_insert();

                $('#img_insert').val('');
                $('#product_id_insert').val('');

                $('#New').modal('hide');
                //displayData();
                showSuccessMsg('Thanh Cong', 'Them DL thanh cong', 'success')

            },
            error: function () {
                //confilm
                showErrorMsg('Thanh Cong', 'Them DL that bai', 'error')
                //Error toast
            }


        })

    } catch {
        alert("Chua chon file")
    }

}


