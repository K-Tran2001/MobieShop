$(document).ready(function () {
    var dataTable = $('#myTable').DataTable({
        "ajax": "../../fetchdata.php?page=category",
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
        addcategory(dataTable);

    });
    $(document).on('click', '#Update', function () {
        updateDetails(dataTable);

    });
    $(document).on('click', '.delete', function () {
        var user_id = $(this).attr("id");

        deletecategory(user_id, dataTable);

    });

});


function getDetails(id) {

    console.log(id);
    $.post("category-func.php?action=getdataById", { updateid: id }, function (data, status) {
        var category = JSON.parse(data);
        console.log(data);
        $('#category_id_update').val(category.CATEGORY_ID);
        $('#cname_update').val(category.CNAME);


        //$('#avatar_update').val(userid.avatar);

    });

    $('#Edit').modal('show');
    //mai code
}

function updateDetails(dataTable) {
    var category_id = $('#category_id_update').val();
    var cname = $('#cname_update').val();


    $.post("category-func.php?action=update", {
        category_id: category_id,
        cname: cname,


    }, function (data, status) {

        dataTable.ajax.reload();
        $('#category_id_update').val('');
        $('#cname_update').val('');


        $('#Edit').modal('hide');
        displayData();
        showSuccessMsg('Thanh Cong', 'Sua DL thanh cong', 'info')


    });

}
function deletecategory(id, dataTable) {
    //mai code
    if (confirm('Ban co thuc su muon xoa ' + id)) {
        $.ajax({

            url: "category-func.php?action=delete",
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
        url: "category-func.php?action=getdataAll",
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


function addcategory(dataTable) {
    try {



        var cname = $('#cname_insert').val();

        $.ajax({
            url: "category-func.php?action=insert",
            type: "post",
            data: {

                cname: cname,

            },
            success: function (data, status) {
                //console.log(data)
                dataTable.ajax.reload();

                $('#category_id_insert').val('');
                $('#cname_insert').val('');


                $('#New').modal('hide');
                displayData();
                showSuccessMsg('Thanh Cong', 'Them DL thanh cong', 'success')
            }

        })

    } catch {

    }

}