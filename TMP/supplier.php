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
                                <h4 class="card-title">Customer</h4>
                                <p class="category">Duong dan toi / back ve doashboard</p>
                            </div>
                            <!-- Button trigger modal -->


                           <?php include './forms/sup-modal.php'?>
                            <div class="card-content table-responsive">
                                <button type="button" class="btn btn-primary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#New">ADD</button>
                                
                                <table class="table table-hover" id="myTable">
                                    <thead class="text-primary">
                                        <tr>
                                            
                                            <th scope="col">COMPANY NAME</th>
                                            <th scope="col">LOCATION ID</th>
                                            <th scope="col">PHONE NUMBER</th>
                                            
                                            <th scope="col">UPDATE</th>
                                            <th scope="col">DELETE</th>
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
    <script src="js/jquery.dataTables.min.js"></script>


    <script type="text/javascript">
       $(document).ready(function() {
            var dataTable=$('#myTable').DataTable({
                "ajax": "fetchdata.php?page=supplier",
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
            $(document).on('click','#Add',function(){
                addsupplier(dataTable);
                
            });
            $(document).on('click','#Update',function(){
                updateDetails(dataTable);
                
            });
            $(document).on('click','.delete',function(){
                var user_id = $(this).attr("id");
                
                deletesupplier(user_id,dataTable);
                
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
                            var file_data = $('#avatar_update').prop('files')[0];    //Fetch the file
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
                                
                                console.log(id);
                                $.post("sup-func.php?action=getdataById",{updateid:id},function(data,status){
                                    var supplier_id =JSON.parse(data);
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
                            
                            function updateDetails(dataTable){
                                var supplier_id=$('#supplier_id_update').val();
                                var company_name=$('#company_name_update').val();
                                var location_id=$('#location_id_update').val();
                                var phone_number=$('#phone_number_update').val();
                                

                                $.post("sup-func.php?action=update",{
                                    supplier_id:supplier_id,
                                    company_name:company_name,
                                    location_id:location_id,
                                    phone_number:phone_number,
                                    
                                },function(data,status){
                                    
                                    dataTable.ajax.reload();
                                    $('#supplier_id').val('');
                                    $('#company_name').val('');
                                    $('#location_id').val('');
                                    $('#phone_number').val('');
                                    
                                    $('#Edit').modal('hide');
                                    displayData();
                                    showSuccessMsg('Thanh Cong','Sua DL thanh cong','info')
                                    

                                });

                            }
                            function deletesupplier(id,dataTable){
                                //mai code
                                if(confirm('Ban co thuc su muon xoa '+id)){
                                    $.ajax({
                                    
                                        url:"sup-func.php?action=delete",
                                        type:"post",
                                        data:{
                                            deleteid:id
                                        },
                                        success:function(data,status){
                                            //Toast success
                                            dataTable.ajax.reload();
                                            showSuccessMsg('Thanh Cong','Xoa DL thanh cong','success')
                                            displayData();
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
                                    url:"sup-func.php?action=getdataAll",
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


                            function addsupplier(dataTable){
                                try{

                                    var company_name=$('#company_name_insert').val();
                                    var location_id=$('#location_id_insert').val();
                                    var phone_number=$('#phone_number_insert').val();           
                                    $.ajax({
                                        url:"sup-func.php?action=insert",
                                        type:"post",
                                        data:{
                                            company_name:company_name,
                                            location_id:location_id,
                                            phone_number:phone_number,
                                        },
                                        success:function(data,status){
                                            //console.log(data)
                                            dataTable.ajax.reload();

                                            $('#company_name_insert').val('');
                                            $('#location_id_insert').val('');
                                            $('#phone_number_insert').val('');
                                            
                                            
                                            $('#New').modal('hide');
                                            displayData();
                                            showSuccessMsg('Thanh Cong','Them DL thanh cong','success')
                                        }

                                    })

                                }catch{
                                    
                                }
                                
                            }

    </script>





</body>

</html>