$(document).ready(function () {
    var dataTable = $('#myTable').DataTable({
        "ajax": "../../fetchdata.php?page=location",
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
    //             url:"category-func.php?action=search-suppier",
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
        addlocation(dataTable);

    });
    $(document).on('click', '#Update', function () {
        updateDetails(dataTable);

    });
    $(document).on('click', '.delete', function () {
        var user_id = $(this).attr("id");

        deletelocation(user_id, dataTable);

    });

});


function getDetails(id) {


    $.post("location-func.php?action=getdataById", { updateid: id }, function (data, status) {
        var location_id = JSON.parse(data);
        console.log(data);
        $('#location_id_update').val(location_id.LOCATION_ID);
        $('#province_update').val(location_id.PROVINCE);
        $('#city_update').val(location_id.CITY);


        //$('#avatar_update').val(userid.avatar);

    });

    $('#Edit').modal('show');
    //mai code
}

function updateDetails(dataTable) {
    var location_id = $('#location_id_update').val();
    var province = $('#province_update').val();
    var city = $('#city_update').val();


    $.post("location-func.php?action=update", {
        location_id: location_id,
        province: province,
        city: city


    }, function (data, status) {

        dataTable.ajax.reload();
        $('#location_id_update').val('');
        $('#province_update').val('');
        $('#city_update').val('');

        $('#Edit').modal('hide');
        displayData();
        showSuccessMsg('Thanh Cong', 'Sua DL thanh cong', 'info')


    });

}
function deletelocation(id, dataTable) {
    //mai code
    if (confirm('Ban co thuc su muon xoa ' + id)) {
        $.ajax({

            url: "location-func.php?action=delete",
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
        url: "location-func.php?action=getdataAll",
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


function addlocation(dataTable) {
    try {


        var province = $('#province_insert').val();
        var city = $('#city_insert').val();

        $.ajax({
            url: "location-func.php?action=insert",
            type: "post",
            data: {
                province: province,
                city: city,

            },
            success: function (data, status) {
                //console.log(data)
                dataTable.ajax.reload();

                $('#province_insert').val('');
                $('#city_insert').val('');


                $('#New').modal('hide');
                displayData();
                showSuccessMsg('Thanh Cong', 'Them DL thanh cong', 'success')
            }

        })

    } catch {

    }

}