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
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!--JQUERY-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!--JQUERY-->
    <!----css3---->
    <link rel="stylesheet" href="../../css/custom.css">
    <link rel="stylesheet" href="../../css/msg-custom.css">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">




    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="../../table.css">
</head>

<body>




    <div class="wrapper">


        <div class="body-overlay"></div>


        <!-- Sidebar  -->
        <?php include_once '../../includes/slidebar.php'?>



        <!-- Page Content  -->
        <div id="content">

            <?php include '../../includes/topbar.php'?>


            <div class="main-content">
                

                <!---Thay doi-
                select *
                from (`transaction` trans inner join `customer` cust on trans.CUST_ID=cust.CUST_ID) 
                INNER JOIN location lo on lo.LOCATION_ID=cust.LOCATION_ID-->

                <div class="row ">
                    <div class="col-lg-12 col-md-12">            
                        <div id="msg"></div>
                        <script src="../../js/msg.js"></script>
                        <!--================================-->
                        <div class="card" style="min-height: 485px;">        
                            <div class="card-header card-header-text">
                                <h4 class="card-title">Transaction Detail</h4>
                                <p class="category">Duong dan toi / back ve doashboard</p>
                                
                            </div>
                            <?php
                                include '../../config2.php';
                                $transaction_d_id=$_GET['transaction_d_id'];
                                $transaction_id=$_GET['transaction_id'];
                                $sql="select *
                                from (`transaction` trans inner join `customer` cust on trans.CUST_ID=cust.CUST_ID) 
                                INNER JOIN location lo on lo.LOCATION_ID=cust.LOCATION_ID where TRANS_ID='$transaction_id'";
                                $list=mysqli_query($conn,$sql);
                                $row=mysqli_fetch_assoc($list);
                                //print_r($row);
                                $subtotal=$row['GRANDTOTAL'];
                                $addVAT=+($row['GRANDTOTAL'])*0.1;
                                $total=$subtotal+$addVAT;
                                //echo json_encode($row)
                            ?>
 
                            <div class="card-content table-responsive">
                                
                                <div class="row">
                                    <div class="col-sm-9"></div>
                                    <div class="col-sm-3">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <a href="./" class="btn btn-primary btn-sm mb-2">Back</a>
                                                <a href="../../PDF/index.php?transaction_d_id=<?php echo $transaction_d_id?>&transaction_id=<?php echo $transaction_id?>" class="btn btn-success btn-sm mb-2">Export Bill</a>
                                            </div>
                                        </div>
                                        Date:<?php echo $row['DATE']?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-4">
                                        Customer name:<?php echo $row['FIRST_NAME'].' '.$row['LAST_NAME']?>  <br>
                                        Adress:<?php echo $row['PROVINCE'].' '.$row['CITY']?> <br>
                                        Phone:<?php echo $row['PHONE_NUMBER']?>
                                    </div>
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4">
                                        Transaction ID:#<?php echo $transaction_id?>
                                    </div>
                                </div>
                                <div class="row">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql="select * from `transaction_details` where TRANS_D_ID='$transaction_d_id'";
                                            $list=mysqli_query($conn,$sql);
                                            $i=0;
                                            while($row=mysqli_fetch_assoc($list)){
                                                $i++;
                                                echo "
                                                    <tr>
                                                        <td>".$i."</td>
                                                        <td>".$row['PRODUCTS']."</td>
                                                        <td>".$row['QTY']."</td>
                                                        <td>".$row['PRICE']."</td>
                                                        <td>".$row['QTY']*$row['PRICE']."</td>
                                                    </tr>
                                                ";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-sm-7"></div>
                                    <div class="col-sm-4 py-1">
                                        payment methods: <br>&emsp;&emsp;&emsp;Payment on delivery
                                        <hr>
                                        <table width="100%">
                                            <tbody><tr>
                                            <td class="font-weight-bold">Subtotal</td>
                                            <td class="text-right">$ <?php echo $subtotal?></td>
                                            </tr>
                                            
                                            
                                            <tr>
                                            <td class="font-weight-bold">Add VAT</td>
                                            <td class="text-right">$<?php echo $addVAT ?></td>
                                            </tr>
                                            <tr>
                                            <td class="font-weight-bold">Total</td>
                                            <td class="font-weight-bold text-right text-primary">$ <?php echo $total?></td>
                                            </tr>
                                        </tbody></table>
                                    </div>
                                    <div class="col-sm-1"></div>
                                </div>
                               
                                
                            </div>
                        </div>
                    </div>

                    <!---Thay doi-->
                    
                </div>



                <?php include '../../includes/footer.php'?>

            </div>



        </div>
    </div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/jquery-3.3.1.min.js"></script>
    <script src="../../js/jquery.dataTables.min.js"></script>
    
    


    <script type="text/javascript">
        $(document).ready(function() {
            
            var dataTable=$('#myTable').DataTable({
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
            
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });

            $('.more-button,.body-overlay').on('click', function() {
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

            $(document).on('click','#Add',function(){
                
                
                adduser(dataTable);
                // 

            });
            
            $(document).on('click','#Update',function(){
                
                
                updateDetails(dataTable);
                // 
     
            });

            $(document).on('click','.delete',function(){
                var user_id = $(this).attr("id");
  
                deleteuser(user_id,dataTable);
                // 
 
                
            });
            

            

            

        });
        
        function uploadfile_for_insert(){
                            //To save file with this name
                            var file_data = $('#avatar_insert').prop('files')[0];    //Fetch the file
                            filename=file_data['name'];
                            console.log(filename);
                            var form_data = new FormData();
                            form_data.append("file",file_data);
                            form_data.append("filename",filename);

                            //Ajax to send file to upload
                            $.ajax({
                                url: "../../upload.php",                      //Server api to receive the file
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
                            var file_data = $('#avatar_update').prop('files')[0];    //Fetch the file
                            filename=file_data['name'];
                            console.log(filename);
                            var form_data = new FormData();
                            form_data.append("file",file_data);
                            form_data.append("filename",filename);

                            //Ajax to send file to upload
                            $.ajax({
                                url: "../../upload.php",                      //Server api to receive the file
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
                                
                                console.log(id);
                                $.post("acc-func.php?action=getdataById",{updateid:id},function(data,status){
                                    var userid =JSON.parse(data);
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
                            function viewDetail(transaction_id){
                                
                            }
                            
                            function updateDetails(dataTable){
                                try{
                                    var file_data = $('#avatar_update').prop('files')[0];    //Fetch the file
                                    filename=file_data['name'];

                                    var id=$('#id_update').val();
                                    var username=$('#username_update').val();
                                    var password=$('#password_update').val();
                                    var avatar=filename;
                                    var type_id=$('#type_id_update').val();
                                    var customer_id=$('#customer_id_update').val();
                                    var state=$('#state_update').val();

                                    console.log(1);
                                    $.post("acc-func.php?action=update",{
                                        id:id,
                                        username:username,
                                        password:password,
                                        avatar:avatar,
                                        type_id:type_id,
                                        customer_id:customer_id,
                                        state:state,

                                    },function(data,status){
                                        
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
                                        showSuccessMsg('Thanh Cong','Sua DL thanh cong','info')
                                        

                                    });

                                }catch{

                                    

                                    var id=$('#id_update').val();
                                    var username=$('#username_update').val();
                                    var password=$('#password_update').val();
                                    var avatar='';
                                    var type_id=$('#type_id_update').val();
                                    var customer_id=$('#customer_id_update').val();
                                    var state=$('#state_update').val();

                                    console.log(1);
                                    $.post("acc-func.php?action=update",{
                                        id:id,
                                        username:username,
                                        password:password,
                                        avatar:avatar,
                                        type_id:type_id,
                                        customer_id:customer_id,
                                        state:state,

                                    },
                                    function(data,status){
                                        
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
                                        showSuccessMsg('Thanh Cong','Sua DL thanh cong','info')
                                    });

                                }
                            

                            }
                            
                            function changeState(id,state){
                                $.post("acc-func.php?action=updateState",{
                                        id:id,
                                        state:state
                        
                                        
                                    },function(data,status){
                                        console.log(data)
                                        setInterval(()=>{},1000)
                                        
                                        ////displayData();
                                        showSuccessMsg('Thanh Cong','Sua DL thanh cong','info')
                                        

                                });

                            }
                            function deleteuser(id, dataTable){
                                //mai code
                                if(confirm('Ban co thuc su muon xoa '+id)){
                                    $.ajax({
                                    
                                        url:"acc-func.php?action=delete",
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
                                    url:"acc-func.php?action=getdataAll",
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


                            function adduser(dataTable){
                                try{
                                    var file_data = $('#avatar_insert').prop('files')[0];    //Fetch the file
                                    filename=file_data['name'];

                                    var username=$('#username_insert').val();
                                    var password=$('#password_insert').val();
                                    var avatar=filename;
                                    var type_id=$('#type_id_insert').val();
                                    var customer_id=$('#customer_id_insert').val();
                                    

                                    console.log(username,password,avatar);
                                    
                                    $.ajax({
                                        url:"acc-func.php?action=insert",
                                        type:"post",
                                        data:{
                                            username:username,
                                            password:password,
                                            avatar:avatar,
                                            type_id:type_id,
                                            customer_id:customer_id,
                                        },
                                        success:function(data,status){
                                            dataTable.ajax.reload();
                                            uploadfile_for_insert();

                                            $('#username_insert').val('');
                                            $('#password_insert').val('');
                                            $('#avatar_insert').val('');
                                            $('#type_id_insert').val('');
                                            $('#customer_id_insert').val('');
                                            $('#New').modal('hide');
                                            //displayData();
                                            showSuccessMsg('Thanh Cong','Them DL thanh cong','success')
                                            
                                        },
                                        error:function(){
                                            //confilm
                                            showErrorMsg('Thanh Cong','Them DL that bai','error')
                                            //Error toast
                                        }


                                    })

                                }catch{
                                    alert("Chua chon file")
                                }
                                
                            }
                            
                                                        

    </script>
   
    
    
    
    





</body>

</html>