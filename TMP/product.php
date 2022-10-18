<!doctype html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>cms dashboard
    </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--JQUERY-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!--JQUERY-->
    <!----css3---->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="./css/msg-custom.css">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">




    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="./table.css">
    <!--FontAsome 5.15.2-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    
</head>

<body>




    <div class="wrapper">


        <div class="body-overlay"></div>


        <!-- Sidebar  -->
        <?php include_once './includes/slidebar.php'?>



        <!-- Page Content  -->
        <div id="content">

            <?php include './includes/topbar.php'?>


            <div class="main-content">

                


                <div class="row ">
                    <div class="col-lg-12 col-md-12">
                        <div id="msg"></div>
                        <script src="./js/msg.js"></script>

                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title">Product</h4>
                                <p class="category">Duong dan toi / back ve doashboard</p>
                            </div>
                            <!-- Button trigger modal -->


                           <?php include 'forms/pro-modal.php'?>
                            <div class="card-content table-responsive">
                                <button type="button" class="btn btn-primary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#New">ADD</button>
                                
                                <table class="table table-hover" id="myTable">
                                    <thead class="text-primary">
                                        <tr>
                                            
                                            <th scope="col">Product Code</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Img</th>
                                            <th scope="col">Description</th>
                                            
                                            <th scope="col">Price</th>
                                            <th scope="col">Publish</th>
                                            <th scope="col">Details</th>
                                            <th scope="col">Update</th>
                                            <th scope="col">Delete</th>
                                            
                                        </tr>
                                    </thead>
                                    <!-- <tbody id="displayDataTable">
                                    
                                    </tbody> -->
                                </table>
                            </div>
                        </div>
                    </div>

                    
                </div>



                <?php include './includes/footer.php'?>

            </div>



        </div>
    </div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>


    <script type="text/javascript">
            $(document).ready(function() {
                var dataTable=$('#myTable').DataTable({
                "ajax": "fetchdata.php?page=product",
                "columns": [{
                    "data": "0"
                }, {
                    "data": "1"
                }, {
                    "data": "2"
                }, {
                    "data": "3"
                },  {
                    "data": "4"
                },{
                    "data": "5"
                },{
                    "data": "6"
                },{
                    "data": "7"
                },{
                    "data": "8"
                }]
            });
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });

            $('.more-button,.body-overlay').on('click', function() {
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
            $(document).on('click','#Add',function(){
                
                addproduct(dataTable);
                
                
            });
            $(document).on('click','#Update',function(){
                
                updateDetails(dataTable);
                
                

            });
            $(document).on('click','.delete',function(){
                var user_id = $(this).attr("id");
                
                
                deleteproduct(user_id,dataTable);
                
                
            });

        });
        function reloaddataTable(){
            
            // var refreshedDataFromTheServer = getDataFromServer();

            // var myTable = $('#maTable').DataTable();
            // myTable.clear().rows.add(refreshedDataFromTheServer).draw();
            var myTable = $('#myTable').DataTable();
            myTable.clear().rows.add(myTable.data).draw();
            console.log($("#myTable").DataTable().rows().data())
        }
        function uploadfile_for_insert(){
                            //To save file with this name
                            var file_data = $('#img_insert').prop('files')[0];    //Fetch the file
                            filename=file_data['name'];
                            console.log(filename);
                            var form_data = new FormData();
                            form_data.append("file",file_data);
                            form_data.append("filename",filename);

                            //Ajax to send file to upload
                            $.ajax({
                                url: "upload.php",                      //Server api to receive the file
                                        type: "POST",
                                        dataType: 'script',
                                        cache: false,
                                        contentType: false,
                                        processData: false,
                                        data: form_data,

                                    success:function(dat2){
                                        if(dat2==1) alert("Successful");
                                        else alert("Unable to Upload");
                                    }
                                });
                            }
                            function uploadfile_for_update(){
                            //To save file with this name
                            var file_data = $('#img_update').prop('files')[0];    //Fetch the file
                            filename=file_data['name'];
                            console.log(filename);
                            var form_data = new FormData();
                            form_data.append("file",file_data);
                            form_data.append("filename",filename);

                            //Ajax to send file to upload
                            $.ajax({
                                url: "upload.php",                      //Server api to receive the file
                                        type: "POST",
                                        dataType: 'script',
                                        cache: false,
                                        contentType: false,
                                        processData: false,
                                        data: form_data,

                                    success:function(dat2){
                                        if(dat2==1) alert("Successful");
                                        else alert("Unable to Upload");
                                    }
                                });
                            }
                            function getDetails(id){
                                
                                
                                $.post("pro-func.php?action=getdataById",{updateid:id},function(data,status){
                                    
                                    
                                    var productid =JSON.parse(data);
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
                                    
                                    
                                    //$('#avatar_update').val(userid.avatar);

                                });
                               
                                $('#Edit').modal('show');
                                //mai code
                            }
                            function getDetails_view(id){
                                
                                
                                $.post("pro-func.php?action=getdataById",{updateid:id},function(data,status){
                                    
                                    
                                    var productid =JSON.parse(data);
                                    console.log(productid);
                                    $('#produc_id_view').val(productid.PRODUCT_ID);
                                    $('#product_code_view').val(productid.PRODUCT_CODE);
                                    $('#name_view').val(productid.NAME);
                                    //$('#img_view').val(productid.IMG);
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

                                    
                                    //$('#avatar_update').val(userid.avatar);

                                });
                               
                                $('#View').modal('show');
                                //mai code
                            }
                            
                            function updateDetails(dataTable){
                                try{
                                    var file_data = $('#img_update').prop('files')[0];    //Fetch the file
                                    filename=file_data['name'];

                                    var product_id=$('#product_id_update').val();
                                    var product_code=$('#product_code_update').val();
                                    var name=$('#name_update').val();
                                    var img=filename;
                                    var description=$('#description_update').val();
                                    var qty_stock=$('#qty_stock_update').val();
                                    var on_hand=$('#on_hand_update').val();
                                    var price=$('#price_update').val();
                                    var category_id=$('#category_id_update').val();
                                    var supplier_id=$('#supplier_id_update').val();
                                    var date_stock_in=$('#date_stock_in_update').val();
                                    var state=$('#state_update').val();
                                    
                                    //console.log(img);
                                    $.post("pro-func.php?action=update",{
                                        product_id:product_id,
                                        product_code:product_code,
                                        name:name,
                                        img:img,
                                        description:description,
                                        qty_stock:qty_stock,
                                        on_hand:on_hand,
                                        price:price,
                                        category_id:category_id,
                                        supplier_id:supplier_id,
                                        date_stock_in:date_stock_in,
                                        state:state

                                    },function(data,status){
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
                                        showSuccessMsg('Thanh Cong','Sua DL thanh cong','info')
                                        

                                    });
                                }catch{
                                    

                                    var product_id=$('#product_id_update').val();
                                    var product_code=$('#product_code_update').val();
                                    var name=$('#name_update').val();
                                    var img='';
                                    var description=$('#description_update').val();
                                    var qty_stock=$('#qty_stock_update').val();
                                    var on_hand=$('#on_hand_update').val();
                                    var price=$('#price_update').val();
                                    var category_id=$('#category_id_update').val();
                                    var supplier_id=$('#supplier_id_update').val();
                                    var date_stock_in=$('#date_stock_in_update').val();
                                    var state=$('#state_update').val();
                                    
                                    //console.log(img);
                                    $.post("pro-func.php?action=update",{
                                        product_id:product_id,
                                        product_code:product_code,
                                        name:name,
                                        img:img,
                                        description:description,
                                        qty_stock:qty_stock,
                                        on_hand:on_hand,
                                        price:price,
                                        category_id:category_id,
                                        supplier_id:supplier_id,
                                        date_stock_in:date_stock_in,
                                        state:state

                                    },function(data,status){
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
                                        showSuccessMsg('Thanh Cong','Sua DL thanh cong','info')
                                        

                                    });
                                }

                            }
                            function changeState(id,state){
                                $.post("pro-func.php?action=updateState",{
                                        product_id:id,
                                        state:state
                        
                                        
                                    },function(data,status){
                                        setInterval(()=>{},1000)
                                        
                                        ////displayData();
                                        showSuccessMsg('Thanh Cong','Sua DL thanh cong','info')
                                        

                                    });

                            }
                            function deleteproduct(id,dataTable){
                                //mai code
                                if(confirm('Ban co thuc su muon xoa '+id)){
                                    $.ajax({
                                    
                                        url:"pro-func.php?action=delete",
                                        type:"post",
                                        data:{
                                            deleteid:id
                                        },
                                        success:function(data,status){
                                            //Toast success
                                            dataTable.ajax.reload();
                                            showSuccessMsg('Thanh Cong','Xoa DL thanh cong','success')
                                            //displayData();
                                        },
                                        error:function(){
                                            //Toast error
                                        }
                                    })

                                }
                            }

                            function displayData(){
                                var displayData="true";
                                $.ajax({
                                    url:"pro-func.php?action=getdataAll",
                                    type:"post",
                                    data:{
                                        displaySend:displayData
                                    },
                                    success:function(data,status){
                                        $("#displayDataTable").html(data);
                                    }
                                })

                            }
                            function showMessage(message){

                            }


                            function addproduct(dataTable){
                                try{
                                    var file_data = $('#img_insert').prop('files')[0];    //Fetch the file
                                    filename=file_data['name'];

                                    var product_code=$('#product_code_insert').val();
                                    var name=$('#name_insert').val();
                                    var img=filename;
                                    var description=$('#description_insert').val();
                                    var qty_stock=$('#qty_stock_insert').val();
                                    var on_hand=$('#on_hand_insert').val();
                                    var price=$('#price_insert').val();
                                    var category_id=$('#category_id_insert').val();
                                    var supplier_id=$('#supplier_id_insert').val();
                                    var date_stock_in=$('#date_stock_in_insert').val();
                                    console.log(filename,product_code,name,description,qty_stock,on_hand,price,category_id,supplier_id,date_stock_in)

                                    $.ajax({
                                        url:"pro-func.php?action=insert",
                                        type:"post",
                                        data:{
                                            product_code:product_code,
                                            name:name,
                                            img:img,
                                            description:description,
                                            qty_stock:qty_stock,
                                            on_hand:on_hand,
                                            price:price,
                                            category_id:category_id,
                                            supplier_id:supplier_id,
                                            date_stock_in:date_stock_in,

                                            
                                        },
                                        success:function(data,status){
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
                                            showSuccessMsg('Thanh Cong','Them DL thanh cong','success')
                                        },error:function(data,status){
                                            console.error("Loi");
                                        }

                                    })

                                }catch{
                                    console.log('Loi')
                                    
                                }
                                
                            }

    </script>





</body>

</html>