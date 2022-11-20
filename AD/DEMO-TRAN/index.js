$(document).ready(function () {

    var dataTable = $('#myTable').DataTable({
        "ajax": "../../fetchdata.php?page=transaction",
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


        adduser(dataTable);
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
    var file_data = $('#avatar_insert').prop('files')[0];    //Fetch the file
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
    var file_data = $('#avatar_update').prop('files')[0];    //Fetch the file
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
    $.post("acc-func.php?action=getdataById", { updateid: id }, function (data, status) {
        var userid = JSON.parse(data);
        console.log(userid);

        $('#id_update').val(userid.ID);
        $('#username_update').val(userid.USERNAME);
        $('#password_update').val(userid.PASSWORD);
        $('#img_update').val(userid.IMG);
        $('#type_id_update').val(userid.TYPE_ID);
        $('#customer_id_update').val(userid.CUSTOMER_ID);
        $('#state_update').val(userid.STATE);
        //$('#avatar_update').val(userid.avatar);

    });

    $('#Edit').modal('show');
    //mai code
}
function viewDetail(transaction_id, transaction_d_id) {
    window.location.href = 'transaction-detail.php?transaction_id=' + transaction_id + '&transaction_d_id=' + transaction_d_id;
}

function updateDetails(dataTable) {
    try {
        var file_data = $('#avatar_update').prop('files')[0];    //Fetch the file
        filename = file_data['name'];

        var id = $('#id_update').val();
        var username = $('#username_update').val();
        var password = $('#password_update').val();
        var avatar = filename;
        var type_id = $('#type_id_update').val();
        var customer_id = $('#customer_id_update').val();
        var state = $('#state_update').val();

        console.log(1);
        $.post("acc-func.php?action=update", {
            id: id,
            username: username,
            password: password,
            avatar: avatar,
            type_id: type_id,
            customer_id: customer_id,
            state: state,

        }, function (data, status) {

            dataTable.ajax.reload();

            uploadfile_for_update();
            $('#id_update').val('');
            $('#username_update').val('');
            $('#password_update').val('');
            $('#avatar_update').val('');
            $('#type_id_update').val('');
            $('#customer_id_update').val('');
            $('#state_update').val('');


            $('#Edit').modal('hide');

            //displayData();
            showSuccessMsg('Thanh Cong', 'Sua DL thanh cong', 'info')


        });

    } catch {



        var id = $('#id_update').val();
        var username = $('#username_update').val();
        var password = $('#password_update').val();
        var avatar = '';
        var type_id = $('#type_id_update').val();
        var customer_id = $('#customer_id_update').val();
        var state = $('#state_update').val();

        console.log(1);
        $.post("acc-func.php?action=update", {
            id: id,
            username: username,
            password: password,
            avatar: avatar,
            type_id: type_id,
            customer_id: customer_id,
            state: state,

        },
            function (data, status) {

                dataTable.ajax.reload();

                //uploadfile_for_update();

                $('#id_update').val('');
                $('#username_update').val('');
                $('#password_update').val('');
                $('#avatar_update').val('');
                $('#type_id_update').val('');
                $('#customer_id_update').val('');
                $('#state_update').val('');


                $('#Edit').modal('hide');

                //displayData();
                showSuccessMsg('Thanh Cong', 'Sua DL thanh cong', 'info')
            });

    }


}

function changeState(id, state) {
    $.post("acc-func.php?action=updateState", {
        id: id,
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

            url: "acc-func.php?action=delete",
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


function adduser(dataTable) {
    try {
        var file_data = $('#avatar_insert').prop('files')[0];    //Fetch the file
        filename = file_data['name'];

        var username = $('#username_insert').val();
        var password = $('#password_insert').val();
        var avatar = filename;
        var type_id = $('#type_id_insert').val();
        var customer_id = $('#customer_id_insert').val();


        console.log(username, password, avatar);

        $.ajax({
            url: "acc-func.php?action=insert",
            type: "post",
            data: {
                username: username,
                password: password,
                avatar: avatar,
                type_id: type_id,
                customer_id: customer_id,
            },
            success: function (data, status) {
                dataTable.ajax.reload();
                uploadfile_for_insert();

                $('#username_insert').val('');
                $('#password_insert').val('');
                $('#avatar_insert').val('');
                $('#type_id_insert').val('');
                $('#customer_id_insert').val('');
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
