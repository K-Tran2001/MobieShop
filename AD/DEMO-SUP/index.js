$(document).ready(function () {
    var dataTable = $('#myTable').DataTable({
        "ajax": "../../fetchdata.php?page=supplier",
        "columns": [{
            "data": "0"
        }, {
            "data": "1"
        }, {
            "data": "2"
        }, {
            "data": "3"
        }, {
            "data": "4"
        }]
    });
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $('#content').toggleClass('active');
    });

    $('.more-button,.body-overlay').on('click', function () {
        $('#sidebar,.body-overlay').toggleClass('show-nav');
    });
    //displayData();
    // $("#live_search").keyup(function(){
    //     var input = $(this).val();

    //     if(input!=''){
    //         $.ajax({
    //             url:"sup-func.php?action=search-suppier",
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
        addsupplier(dataTable);

    });
    $(document).on('click', '#Update', function () {
        updateDetails(dataTable);

    });
    $(document).on('click', '.delete', function () {
        var user_id = $(this).attr("id");

        deletesupplier(user_id, dataTable);

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
    $.post("sup-func.php?action=getdataById", { updateid: id }, function (data, status) {
        var supplier_id = JSON.parse(data);
        console.log(supplier_id);
        $('#supplier_id_update').val(supplier_id.SUPPLIER_ID);
        $('#company_name_update').val(supplier_id.COMPANY_NAME);
        $('#location_id_update').val(supplier_id.LOCATION_ID);
        $('#phone_number_update').val(supplier_id.PHONE_NUMBER);

        //$('#avatar_update').val(userid.avatar);

    });

    $('#Edit').modal('show');
    //mai code
}

function updateDetails(dataTable) {
    var supplier_id = $('#supplier_id_update').val();
    var company_name = $('#company_name_update').val();
    var location_id = $('#location_id_update').val();
    var phone_number = $('#phone_number_update').val();


    $.post("sup-func.php?action=update", {
        supplier_id: supplier_id,
        company_name: company_name,
        location_id: location_id,
        phone_number: phone_number,

    }, function (data, status) {

        dataTable.ajax.reload();
        $('#supplier_id').val('');
        $('#company_name').val('');
        $('#location_id').val('');
        $('#phone_number').val('');

        $('#Edit').modal('hide');
        displayData();
        showSuccessMsg('Thanh Cong', 'Sua DL thanh cong', 'info')


    });

}
function deletesupplier(id, dataTable) {
    //mai code
    if (confirm('Ban co thuc su muon xoa ' + id)) {
        $.ajax({

            url: "sup-func.php?action=delete",
            type: "post",
            data: {
                deleteid: id
            },
            success: function (data, status) {
                //Toast success
                dataTable.ajax.reload();
                showSuccessMsg('Thanh Cong', 'Xoa DL thanh cong', 'success')
                displayData();
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
        url: "sup-func.php?action=getdataAll",
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


function addsupplier(dataTable) {
    try {

        var company_name = $('#company_name_insert').val();
        var location_id = $('#location_id_insert').val();
        var phone_number = $('#phone_number_insert').val();
        $.ajax({
            url: "sup-func.php?action=insert",
            type: "post",
            data: {
                company_name: company_name,
                location_id: location_id,
                phone_number: phone_number,
            },
            success: function (data, status) {
                //console.log(data)
                dataTable.ajax.reload();

                $('#company_name_insert').val('');
                $('#location_id_insert').val('');
                $('#phone_number_insert').val('');


                $('#New').modal('hide');
                displayData();
                showSuccessMsg('Thanh Cong', 'Them DL thanh cong', 'success')
            }

        })

    } catch {

    }

}