<!DOCTYPE html>
<html>

<head>
    <title>Collapse sidebar in Bootstrap 4</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    

    <style>
        .cards:hover {
            box-shadow: 20px 20px 100px -50px #000;
            transition: 0.3s;
        }
    </style>
   
    <script src="../js/jquery.js"></script>
</head>

<body>
    <?php include '../includes/navbar.php'?>

    <div class="wrapper">

        <?php include '../includes/slidebar2.php'?>


        <div id="content ">
            <div class="content-border">


                <?php include '../includes/toggle.php'?>
                


                <div class="row p-4" id="panel">
                    
                    
                <button type="button" class="btn btn-primary btn-sm " data-bs-toggle="modal" data-bs-target="#New">New_module</button>
                <div id="sample_data_filter" class="dataTables_filter "><label>Search:<input id="live_search"type="search" class="form-control form-control-sm" placeholder="" aria-controls="sample_data"></label></div>
              
                <table class="table table-striped table-hover">
                
                    <thead class="">
                        <tr>
                            
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Avatar</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody id="displayDataTable">
                    
                        
                    
                    </tbody>
                </table>
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




                <script>
                    $(document).ready(function(){
                                displayData();
                                $("#live_search").keyup(function(){
                                    var input = $(this).val();

                                    if(input!=''){
                                        $.ajax({
                                            url:"acc-search.php",
                                            method:"post",
                                            data:{
                                                input:input,
                                                displaySend:"true"
                                            },
                                            success:function(data){
                                                $('#displayDataTable').html(data);
                                                //$('#displayDataTable').css("dispaly","block");
                                            }
                                        })
                                    }else{
                                        displayData();
                                    }
                                })
                            })
                            

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
                                $.post("acc-getdataById.php",{updateid:id},function(data,status){
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
                                    $.post("acc-update.php",{
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
                                        

                                    });

                                }catch{

                                    var username_update=$('#username_update').val();
                                    var password_update=$('#password_update').val();
                                    var avatar_update='';
                                    console.log(1);
                                    $.post("acc-update.php",{
                                        username_update:username_update,
                                        password_update:password_update,
                                        avatar_update:avatar_update
                                    },function(data,status){
                                        
                                        $('#username_update').val('');
                                        $('#password_update').val('');
                                        
                                        $('#Edit').modal('hide');
                                        displayData();
                                        

                                    });
                                    

                                }

                            }
                            function deleteuser(id){
                            //mai code
                            $.ajax({
                                
                                url:"acc-delete.php",
                                type:"post",
                                data:{
                                    deleteid:id
                                },
                                success:function(data,status){
                                    
                                    displayData();

                                }
                            })
                            }

                            function displayData(){
                                var displayData="true";
                                $.ajax({
                                    url:"acc-getdataAll.php",
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
                                        url:"acc-insert.php",
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
                                        }

                                    })

                                }catch{
                                    alert("Chua chon file")
                                }
                                
                            }
                    
                </script>

                <?php  include'../includes/product_user_pages.php'?>
                                

                </div>
            </div>


        </div>


    </div>












    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>

    


</body>

</html>