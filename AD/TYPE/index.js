$(document).ready(function () {
    var dataTable = $('#myTable').DataTable({
        "ajax": "../../fetchdata.php?page=type",
        "columns": [{
            "data": "0"
        }, {
            "data": "1"
        }, {
            "data": "2"
        }, {
            "data": "3"
        },]
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
        addtype(dataTable);

    });
    $(document).on('click', '#Update', function () {
        updateDetails(dataTable);

    });
    $(document).on('click', '.delete', function () {
        var type_id = $(this).attr("id");

        deletetype(type_id, dataTable);

    });

});



function getDetails(id) {


    $.post("type-func.php?action=getdataById", { updateid: id }, function (data, status) {
        var type_id = JSON.parse(data);
        console.log(type_id);
        $('#type_id_update').val(type_id.TYPE_ID);
        $('#type_update').val(type_id.TYPE);


        //$('#avatar_update').val(userid.avatar);

    });

    $('#Edit').modal('show');
    //mai code
}

function updateDetails(dataTable) {
    var type_id = $('#type_id_update').val();
    var type = $('#type_update').val();


    $.post("type-func.php?action=update", {
        type_id: type_id,
        type: type,

    }, function (data, status) {

        dataTable.ajax.reload();
        $('#type_id_update').val('');
        $('#type_update').val('');


        $('#Edit').modal('hide');
        displayData();
        showSuccessMsg('Thanh Cong', 'Sua DL thanh cong', 'info')


    });

}
function deletetype(id, dataTable) {
    //mai code
    if (confirm('Ban co thuc su muon xoa ' + id)) {
        $.ajax({

            url: "type-func.php?action=delete",
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
        url: "type-func.php?action=getdataAll",
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


function addtype(dataTable) {
    var type = $('#type_insert').val();

    $.ajax({
        url: "type-func.php?action=insert",
        type: "post",
        data: {
            type: type

        },
        success: function (data, status) {
            //console.log(data)
            dataTable.ajax.reload();

            $('#type_id_insert').val('');
            $('#type_insert').val('');

            $('#New').modal('hide');
            displayData();
            showSuccessMsg('Thanh Cong', 'Them DL thanh cong', 'success')
        }

    })

}