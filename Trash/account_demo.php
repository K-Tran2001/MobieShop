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

                        <div class="card" style="min-height: 485px;">        
                            <div class="card-header card-header-text">
                                <h4 class="card-title">Accounts</h4>
                                <p class="category">Duong dan toi / back ve doashboard</p>
                            </div>
                            <!-- Button trigger modal -->


                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Understood</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---Modal end-->

                            <!--Modal add--> 
                            <div class="modal fade" id="New" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-success">
                                        <h5 class="modal-title " id="exampleModalLabel">Add a new account</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        
                                    <form class="row g-3" method="" action="" enctype="multipart/form-data" >
                                                <div class="col-auto">
                                                    <label for="username_insert" class="visually-hidden">Username</label>
                                                    <input type="text"  class="form-control" id="username_insert" name="username_insert" placeholder="Usename" >
                                                </div>

                                                <div class="col-auto">
                                                    <label for="password_insert" class="visually-hidden">Password</label>
                                                    <input type="password" class="form-control" id="password_insert" name="password_insert" placeholder="Password">
                                                </div>

                                                <div class="col-auto">
                                                    <label for="avatar_insert" class="visually-hidden">Avatar</label>
                                                    <input type="file"  class="form-control" id="avatar_insert" name="avatar_insert" placeholder="Password">
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" onclick="adduser()">Save</button>
                                                </div>
                                            </form>
                                            
                                            
                                            
                                    </div>
                                    
                                </div>
                            </div>
                            </div>
                            <!--Modal Edit-->
                            <div class="modal fade" id="Edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-warning">
                                        <h5 class="modal-title " id="exampleModalLabel">Edit account</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        
                                    <form class="row g-3" method="" action="" enctype="multipart/form-data" >
                                                <div class="col-auto">
                                                    <label for="username_update" class="visually-hidden">Username_update</label>
                                                    <input type="text"  class="form-control"  id="username_update" name="username_update" placeholder="Usename" readonly="readonly">
                                                </div>

                                                <div class="col-auto">
                                                    <label for="password_update" class="visually-hidden">Password_update</label>
                                                    <input type="password_update" class="form-control" id="password_update" name="password_update" placeholder="Password">
                                                </div>

                                                <div class="col-auto">
                                                    <label for="avatar_update" class="visually-hidden">Avatar_update</label>
                                                    <input type="file"  class="form-control" id="avatar_update" name="avatar_update" placeholder="Password">
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" onclick="updateDetails()">Save Changes</button>
                                                </div>
                                            </form>
                                            
                                            
                                            
                                    </div>
                                    
                                </div>
                            </div>
                            </div>
                            <div class="card-content table-responsive">
                                <button type="button" class="btn btn-primary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#New">ADD</button>
                                <div id="sample_data_filter" class="dataTables_filter "><label>Search:<input id="live_search"type="search" class="form-control form-control-sm" placeholder="" aria-controls="sample_data"></label></div>
                                

                                <table class="table table-hover" id="myTable">
                                    <thead class="text-primary">
                                        <tr>
                                            <th scope="col">Username</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">Avatar</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <!-- <tbody id="displayDataTable">
                                        <tr>
                                            <td>Khoa</td>
                                            <td>123</td>
                                            <td>khoa.png</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Hoi</td>
                                            <td>123</td>
                                            <td>khoa.png</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Ly</td>
                                            <td>123</td>
                                            <td>khoa.png</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Khoa</td>
                                            <td>123</td>
                                            <td>khoa.png</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Hoi</td>
                                            <td>123</td>
                                            <td>khoa.png</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Ly</td>
                                            <td>123</td>
                                            <td>khoa.png</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Khoa</td>
                                            <td>123</td>
                                            <td>khoa.png</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Hoi</td>
                                            <td>123</td>
                                            <td>khoa.png</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Ly</td>
                                            <td>123</td>
                                            <td>khoa.png</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Khoa</td>
                                            <td>123</td>
                                            <td>khoa.png</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Hoi</td>
                                            <td>123</td>
                                            <td>khoa.png</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Ly</td>
                                            <td>123</td>
                                            <td>khoa.png</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Khoa</td>
                                            <td>123</td>
                                            <td>khoa.png</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Hoi</td>
                                            <td>123</td>
                                            <td>khoa.png</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Ly</td>
                                            <td>123</td>
                                            <td>khoa.png</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Khoa</td>
                                            <td>123</td>
                                            <td>khoa.png</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Hoi</td>
                                            <td>123</td>
                                            <td>khoa.png</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Ly</td>
                                            <td>123</td>
                                            <td>khoa.png</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Khoa</td>
                                            <td>123</td>
                                            <td>khoa.png</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Hoi</td>
                                            <td>123</td>
                                            <td>khoa.png</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Ly</td>
                                            <td>123</td>
                                            <td>khoa.png</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Khoa</td>
                                            <td>123</td>
                                            <td>khoa.png</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Hoi</td>
                                            <td>123</td>
                                            <td>khoa.png</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Ly</td>
                                            <td>123</td>
                                            <td>khoa.png</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        
                                        
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
            
            
            
            //displayData2();
            var dataTable=$('#myTable').DataTable({
                "ajax": "fetchdata.php",
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
                                $.post("acc-func.php?action=getdataById",{updateid:id},function(data,status){
                                    var userid =JSON.parse(data);
                                    console.log(userid);
                                    $('#username_update').val(userid.username);
                                    $('#password_update').val(userid.password);
                                    //$('#avatar_update').val(userid.avatar);

                                });
                               
                                $('#Edit').modal('show');
                                //mai code
                            }
                            
                            function updateDetails(){
                                try{
                                    var file_data = $('#avatar_update').prop('files')[0];    //Fetch the file
                                    filename=file_data['name'];

                                    var username_update=$('#username_update').val();
                                    var password_update=$('#password_update').val();
                                    var avatar_update=filename;
                                    console.log(1);
                                    $.post("acc-func.php?action=update",{
                                        username_update:username_update,
                                        password_update:password_update,
                                        avatar_update:avatar_update
                                    },function(data,status){
                                        
                                        uploadfile_for_update();

                                        $('#username_update').val('');
                                        $('#password_update').val('');
                                        $('#avatar_update').val('');
                                        
                                        
                                        $('#Edit').modal('hide');
                                        
                                        displayData();
                                        showSuccessMsg('Thanh Cong','Sua DL thanh cong','info')
                                        

                                    });

                                }catch{

                                    var username_update=$('#username_update').val();
                                    var password_update=$('#password_update').val();
                                    var avatar_update='';
                                    console.log(1);
                                    $.post("acc-func.php?action=update",{
                                        username_update:username_update,
                                        password_update:password_update,
                                        avatar_update:avatar_update
                                    },function(data,status){
                                        
                                        $('#username_update').val('');
                                        $('#password_update').val('');
                                        
                                        $('#Edit').modal('hide');
                                        displayData();
                                        showSuccessMsg('Thanh Cong','Sua DL thanh cong','info')
                                        

                                    });
                                    

                                }

                            }
                            function deleteuser(id){
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


                            function adduser(){
                                try{
                                    var file_data = $('#avatar_insert').prop('files')[0];    //Fetch the file
                                    filename=file_data['name'];

                                    var username=$('#username_insert').val();
                                    var password=$('#password_insert').val();
                                    var avatar=filename;

                                    
                                    $.ajax({
                                        url:"acc-func.php?action=insert",
                                        type:"post",
                                        data:{
                                            username_send:username,
                                            password_send:password,
                                            avatar_send:filename
                                        },
                                        success:function(data,status){
                                            
                                            uploadfile_for_insert();

                                            $('#username_insert').val('');
                                            $('#password_insert').val('');
                                            $('#avatar_insert').val('');
                                            $('#New').modal('hide');
                                            displayData();
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