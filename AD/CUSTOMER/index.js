$(document).ready(function () {
    var dataTable = $('#myTable').DataTable({
        "ajax": "../../fetchdata.php?page=customer",
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
        }, {
            "data": "5"
        }]
    });
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $('#content').toggleClass('active');
    });

    $('.more-button,.body-overlay').on('click', function () {
        $('#sidebar,.body-overlay').toggleClass('show-nav');
    });
    displayData();
    // $("#live_search").keyup(function(){
    //     var input = $(this).val();

    //     if(input!=''){
    //         $.ajax({
    //             url:"cus-func.php?action=search-customer",
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

        addcustomer(dataTable);

    });
    $(document).on('click', '#Update', function () {

        updateDetails(dataTable);

    });
    $(document).on('click', '.delete', function () {
        var user_id = $(this).attr("id");


        deletecustomer(user_id, dataTable);

    });

});
function reloaddataTable() {

    // var refreshedDataFromTheServer = getDataFromServer();

    // var myTable = $('#maTable').DataTable();
    // myTable.clear().rows.add(refreshedDataFromTheServer).draw();
    var myTable = $('#myTable').DataTable();
    myTable.clear().rows.add(myTable.data).draw();
    console.log($("#myTable").DataTable().rows().data())
}
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


    $.post("cus-func.php?action=getdataById", { updateid: id }, function (data, status) {
        var customer_id = JSON.parse(data);
        console.log(customer_id);
        $('#cust_id_update').val(customer_id.CUST_ID);
        $('#first_name_update').val(customer_id.FIRST_NAME);
        $('#last_name_update').val(customer_id.LAST_NAME);

        $('#location_id_update').val(customer_id.LOCATION_ID);
        $('#phone_number_update').val(customer_id.PHONE_NUMBER);
        //$('#avatar_update').val(userid.avatar);

    });

    $('#Edit').modal('show');
    //mai code
}

function updateDetails(dataTable) {
    var cust_id = $('#cust_id_update').val();
    var first_name = $('#first_name_update').val();
    var last_name = $('#last_name_update').val();

    var location_id = $('#location_id_update').val();
    var phone_number = $('#phone_number_update').val();

    console.log(cust_id, "   ", first_name, "   ", last_name, "   ", location_id, "   ", phone_number)
    $.post("cus-func.php?action=update", {
        cust_id: cust_id,
        first_name: first_name,
        last_name: last_name,

        location_id: location_id,
        phone_number: phone_number

    }, function (data, status) {
        dataTable.ajax.reload();
        $('#cust_id_update').val('');
        $('#first_name_update').val('');
        $('#last_name_update').val('');

        $('#location_id_update').val('');
        $('#phone_number_update').val('');
        $('#Edit').modal('hide');
        displayData();
        showSuccessMsg('Thanh Cong', 'Sua DL thanh cong', 'info')


    });

}
function deletecustomer(id, dataTable) {
    //mai code
    if (confirm('Ban co thuc su muon xoa ' + id)) {
        $.ajax({

            url: "cus-func.php?action=delete",
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
        url: "cus-func.php?action=getdataAll",
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


function addcustomer(dataTable) {
    try {



        var first_name = $('#first_name_insert').val();
        var last_name = $('#last_name_insert').val();

        var location_id = $('#location_id_insert').val();
        var phone_number = $('#phone_number_insert').val();
        $.ajax({
            url: "cus-func.php?action=insert",
            type: "post",
            data: {

                first_name: first_name,
                last_name: last_name,

                location_id: location_id,
                phone_number: phone_number
            },
            success: function (data, status) {
                //console.log(data)
                dataTable.ajax.reload();

                $('#first_name_insert').val('');
                $('#last_name_insert').val('');
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