$(document).ready(function () {
    var dataTable = $('#myTable').DataTable({
        "ajax": "../../fetchdata.php?page=product",
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
        }, {
            "data": "6"
        }, {
            "data": "7"
        }, {
            "data": "8"
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
    //             url:"pro-func.php?action=search-product",
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

        addproduct(dataTable);


    });
    $(document).on('click', '#Update', function () {

        updateDetails(dataTable);



    });
    $(document).on('click', '#Import', function () {

        //updateDetails(dataTable);
        //  console.log('import')
        Import();



    });
    $(document).on('click', '.delete', function () {
        var user_id = $(this).attr("id");


        deleteproduct(user_id, dataTable);


    });
    $(document).on('change', '#img_update', function (e) {
        showImg(e, 'avatar_show_u');
    });
    $(document).on('change', '#img_insert', function (e) {
        showImg(e, 'avatar_show_i');
    });
    $('#btn-import').on('click', () => {
        //document.getElementById("form-import").classList.toggle("visually-hidden");
        $('#form-import').toggleClass("visually-hidden");
    })
    // $(document).on('click', '#img_insert', function (e) {
    //     showImg(e);
    // });



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


    $.post("pro-func.php?action=getdataById", { updateid: id }, function (data, status) {


        var productid = JSON.parse(data);
        console.log(productid);
        $('#product_id_update').val(productid.PRODUCT_ID);
        $('#product_code_update').val(productid.PRODUCT_CODE);
        $('#name_update').val(productid.NAME);
        //$('#img_update').val(productid.IMG);
        $('#description_update').val(productid.DESCRIPTION);
        $('#qty_stock_update').val(productid.QTY_STOCK);
        $('#on_hand_update').val(productid.ON_HAND);
        $('#price_update').val(productid.PRICE);
        $('#category_id_update').val(productid.CATEGORY_ID);
        $('#supplier_id_update').val(productid.SUPPLIER_ID);
        $('#date_stock_in_update').val(productid.DATE_STOCK_IN);
        $('#state_update').val(productid.STATE);
        document.getElementById('avatar_show_u').src = "../../UserPage/img/" + productid.IMG;


        //$('#avatar_update').val(userid.avatar);

    });

    $('#Edit').modal('show');
    //mai code
}
function getDetails_view(id) {


    $.post("pro-func.php?action=getdataById", { updateid: id }, function (data, status) {


        var productid = JSON.parse(data);
        console.log(productid);
        $('#produc_id_view').val(productid.PRODUCT_ID);
        $('#product_code_view').val(productid.PRODUCT_CODE);
        $('#name_view').val(productid.NAME);
        $('#description_view').val(productid.DESCRIPTION);
        $('#qty_stock_view').val(productid.QTY_STOCK);
        $('#on_hand_view').val(productid.ON_HAND);
        $('#price_view').val(productid.PRICE);
        $('#category_id_view').val(productid.CATEGORY_ID);
        $('#supplier_id_view').val(productid.SUPPLIER_ID);
        $('#date_stock_in_view').val(productid.DATE_STOCK_IN);
        $('#state_view').val(productid.STATE);
        $('#view_number_view').val(productid.VIEW_NUMBER);
        $('#buy_number_view').val(productid.BUY_NUMBER);
        document.getElementById('avatar_show_v').src = "../../UserPage/img/" + productid.IMG;


        //$('#avatar_update').val(userid.avatar);

    });

    $('#View').modal('show');
    //mai code
}

function updateDetails(dataTable) {
    try {
        var file_data = $('#img_update').prop('files')[0];    //Fetch the file
        filename = file_data['name'];

        var product_id = $('#product_id_update').val();
        var product_code = $('#product_code_update').val();
        var name = $('#name_update').val();
        var img = filename;
        var description = $('#description_update').val();
        var qty_stock = $('#qty_stock_update').val();
        var on_hand = $('#on_hand_update').val();
        var price = $('#price_update').val();
        var category_id = $('#category_id_update').val();
        var supplier_id = $('#supplier_id_update').val();
        var date_stock_in = $('#date_stock_in_update').val();
        var state = $('#state_update').val();

        //console.log(img);
        $.post("pro-func.php?action=update", {
            product_id: product_id,
            product_code: product_code,
            name: name,
            img: img,
            description: description,
            qty_stock: qty_stock,
            on_hand: on_hand,
            price: price,
            category_id: category_id,
            supplier_id: supplier_id,
            date_stock_in: date_stock_in,
            state: state

        }, function (data, status) {
            console.log(data);
            dataTable.ajax.reload();
            uploadfile_for_update();


            $('#product_id_update').val('');
            $('#product_code_update').val('');
            $('#img_update').val('');
            $('#description_update').val('');
            $('#qty_stock_update').val('');
            $('#on_hand_update').val('');
            $('#price_update').val('');
            $('#category_id_update').val('');
            $('#supplier_id_update').val('');
            $('#date_stock_in_update').val('');
            $('#state_update').val('');

            $('#Edit').modal('hide');
            //displayData();
            showSuccessMsg('Thanh Cong', 'Sua DL thanh cong', 'info')


        });
    } catch {


        var product_id = $('#product_id_update').val();
        var product_code = $('#product_code_update').val();
        var name = $('#name_update').val();
        var img = '';
        var description = $('#description_update').val();
        var qty_stock = $('#qty_stock_update').val();
        var on_hand = $('#on_hand_update').val();
        var price = $('#price_update').val();
        var category_id = $('#category_id_update').val();
        var supplier_id = $('#supplier_id_update').val();
        var date_stock_in = $('#date_stock_in_update').val();
        var state = $('#state_update').val();

        //console.log(img);
        $.post("pro-func.php?action=update", {
            product_id: product_id,
            product_code: product_code,
            name: name,
            img: img,
            description: description,
            qty_stock: qty_stock,
            on_hand: on_hand,
            price: price,
            category_id: category_id,
            supplier_id: supplier_id,
            date_stock_in: date_stock_in,
            state: state

        }, function (data, status) {
            console.log(data);
            dataTable.ajax.reload();

            $('#product_id_update').val('');
            $('#product_code_update').val('');
            $('#img_update').val('');
            $('#description_update').val('');
            $('#qty_stock_update').val('');
            $('#on_hand_update').val('');
            $('#price_update').val('');
            $('#category_id_update').val('');
            $('#supplier_id_update').val('');
            $('#date_stock_in_update').val('');
            $('#state_update').val('');

            $('#Edit').modal('hide');
            //displayData();
            showSuccessMsg('Thanh Cong', 'Sua DL thanh cong', 'info')


        });
    }

}
function changeState(id, state) {
    $.post("pro-func.php?action=updateState", {
        product_id: id,
        state: state


    }, function (data, status) {

        showSuccessMsg('Thanh Cong', 'Sua DL thanh cong', 'info')
        setInterval(() => { location.href = "../../AD/DEMO-PRO"; }, 500);


    });

}
function deleteproduct(id, dataTable) {
    //mai code
    if (confirm('Ban co thuc su muon xoa ' + id)) {
        $.ajax({

            url: "pro-func.php?action=delete",
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
        url: "pro-func.php?action=getdataAll",
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


function addproduct(dataTable) {
    try {
        var file_data = $('#img_insert').prop('files')[0];    //Fetch the file
        filename = file_data['name'];

        var product_code = $('#product_code_insert').val();
        var name = $('#name_insert').val();
        var img = filename;
        var description = $('#description_insert').val();
        var qty_stock = $('#qty_stock_insert').val();
        var on_hand = $('#on_hand_insert').val();
        var price = $('#price_insert').val();
        var category_id = $('#category_id_insert').val();
        var supplier_id = $('#supplier_id_insert').val();
        var date_stock_in = $('#date_stock_in_insert').val();
        console.log(filename, product_code, name, description, qty_stock, on_hand, price, category_id, supplier_id, date_stock_in)

        $.ajax({
            url: "pro-func.php?action=insert",
            type: "post",
            data: {
                product_code: product_code,
                name: name,
                img: img,
                description: description,
                qty_stock: qty_stock,
                on_hand: on_hand,
                price: price,
                category_id: category_id,
                supplier_id: supplier_id,
                date_stock_in: date_stock_in,


            },
            success: function (data, status) {
                console.log(data);
                dataTable.ajax.reload();
                uploadfile_for_insert();

                $('#product_code_insert').val('');
                $('#name_insert').val('');
                $('#description_insert').val('');
                $('#qty_stock_insert').val('');
                $('#on_hand_insert').val('');
                $('#price_insert').val('');
                $('#category_id_insert').val('');
                $('#supplier_id_insert').val('');
                $('#date_stock_in_insert').val('');

                $('#New').modal('hide');
                //displayData();
                showSuccessMsg('Thanh Cong', 'Them DL thanh cong', 'success')
            }, error: function (data, status) {
                console.error("Loi");
            }

        })

    } catch {
        console.log('Loi')

    }


}
function showImg(event, avatar_show) {

    //console.log(event);
    const f = event.target.files[0];
    const link = URL.createObjectURL(f)
    console.log(link)
    document.getElementById(avatar_show).src = link;

}
function Import() {


    console.log('Import data')
}