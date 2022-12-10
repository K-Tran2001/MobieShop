<?php session_start();?>
<?php include 'Components/top2.php'?>
 

    <main>

        <!--
      - BANNER
    -->

        

            



        <!--
      - CATEGORY
    -->

        
    <div id="toast"></div>




        <!--
      - PRODUCT
    -->
<?php
    include '../config2.php'; 
if(!empty($_SESSION['user']))
    
    $acc=$_SESSION['user'][0];
    $cust_id=$acc['CUST_ID'];
    
    $sql="select * from `customer` where `customer`.CUST_ID=$cust_id ";
    $cus=mysqli_fetch_assoc(mysqli_query($conn,$sql));
    $location_id=$cus['LOCATION_ID'];
    $sql="select * from `location` where `location`.LOCATION_ID=$location_id ";
    $location=mysqli_fetch_assoc(mysqli_query($conn,$sql));


    // print_r($cus);
    // print_r($location);
    
 foreach($_SESSION['user'] as $key => $value){

?>        
        <div class="product-container">
            

            <div class="container "  >
            <div id="msg"></div>
                    <script src="../js/msg.js"></script>
                
                <div class="row mt-3" style="width: 100%;">
                    
                    <div class="col-lg-8 col-sm-12 ">
                        <div class="card">
            
                            <div class="card-content text-center p-3">
                                <center><img src="img/<?php echo $value['IMG']  ?>"
                                    class="img-fluid rounded-circle" width="300" height="300"></center>
                                <h3 class="display-4 "><?php echo $value['USERNAME']  ?></h3>
                                <div class="row">
                                    <div class="col-sm-6 ">
                                        <button class="btn-back w-50 justify-content-center" onclick="returnHome()">
                                            Back
                                        </button>

                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <button class="btn-buy w-50 justify-content-center" onclick="logout()">
                                            Logout
                                        </button>
                                        

                                    </div>
                                    
                                    
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-4 col-sm-12 ">
                        <div class="d-flex justify-content-center ">
                            <!--Post trang update =>cap nhat session-->
                            <div class="card w-450 p-3" >
                                

                                <h4 class="display-4  fs-1">Edit Profile</h4><br>
                                <!-- error -->
                                <?php if(isset($_GET['error'])){ ?>
                                <div class="alert alert-danger" role="alert">
                                <?php echo $_GET['error']; ?>
                                </div>
                                <?php } ?>
                                
                                <!-- success -->
                                <?php if(isset($_GET['success'])){ ?>
                                <div class="alert alert-success" role="alert">
                                <?php echo $_GET['success']; ?>
                                </div>
                                <?php } ?>
                                <div class="mb-3 ">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" 
                                        class="form-control"
                                        name="fname"
                                        readonly="readonly"
                                        value="<?php echo $cus['FIRST_NAME'].'  '.$cus['LAST_NAME']?>">
                                </div>
                                <!-- <input type="text" id="user_id" value="<?php echo $value['ID']  ?>" >     -->
                                <div class="mb-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" 
                                        class="form-control "
                                        id="username_update"
                                        name="uname"
                                        readonly="readonly"
                                        value="<?php echo $value['USERNAME']  ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="text" 
                                        class="form-control "
                                        id="password_update"
                                        name="uname"
                                        placeholder="New Password...."
                                        value="">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" 
                                        class="form-control"
                                        id="phone_number_update"
                                        name="uname"
                                        value="<?php echo $cus['PHONE_NUMBER']?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <input type="text" 
                                        class="form-control"
                                        name="uname"
                                        value="<?php echo $location['PROVINCE'].'   '.$location['CITY']?>"
                                    >
                                </div>
                                

                                <div class="mb-3">
                                    <label class="form-label">Profile Picture</label>
                                    <input type="file" 
                                        class="form-control"
                                        id="avatar_update"
                                        name="pp"
                                        onchange="showImg(event)"
                                        >
                                    <img src="./img/<?php echo $value['IMG']  ?>"
                                        class="rounded-circle"
                                        
                                        style="width: 70px ;height: 70px;" id="avatar_show">
                                    
                                </div>
                                
                                
                                
                                
                                
                                <button  class="btn-update w-50 justify-content-center" id="Update">Update </button>
                                
                                </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
                
        </div>

 <?php } ?>           
            
 <script>
                        $(document).ready(()=>{
                            $(document).on('click','#Update',function(){
                
                
                            updateDetails();
                            

                        });
                        })
                        function returnHome(){
                            window.location.href='index.php';
                        }
                        function logout(){
                            window.location.href='logout-excute.php';
                        }
                        function uploadfile(){
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
                        function updateDetails(){
                            try{
                                var file_data = $('#avatar_update').prop('files')[0];    //Fetch the file
                                    filename=file_data['name'];
                                    var user_id=$('#user_id').val();
                                    var username_update=$('#username_update').val();
                                    var password_update=$('#password_update').val();
                                    var avatar_update=filename;
                                    var phone_number_update=$('#phone_number_update').val();
                                    //name+address
                                    console.log(username_update,password_update,avatar_update,phone_number_update,user_id);
                                $.post("profile-edit-func.php",{
                                    user_id:user_id,
                                    username_update:username_update,
                                    password_update:password_update,
                                    avatar_update:avatar_update,
                                    phone_number_update:phone_number_update
                                    },function(data,status){
                                        
                                        console.log(data);
                                        //sconsole.log('OK')
                                        uploadfile();
                                        
                                        //displayData();
                                        showSuccessMsg('Thanh Cong','Sua DL thanh cong','info')
                                        window.location.href='profile-edit.php';

                                    });
                                    // $.post("session.php",{
                                    //     user_id:user_id,
                                    //     username_update:username_update,
                                    //     password_update:password_update,
                                    //     avatar_update:avatar_update,
                                    //     phone_number_update:phone_number_update
                                    // },function(data,status){
                                    //     window.location.href='profile-edit.php';
                                    // });


                            }catch{
                                var user_id=$('#user_id').val();
                                var username_update=$('#username_update').val();
                                var password_update=$('#password_update').val();
                                var avatar_update='';
                                var phone_number_update=$('#phone_number_update').val();
                                //name+address
                                console.log(username_update,password_update,user_id);
                                $.post("profile-edit-func.php",{
                                    user_id:user_id,
                                    username_update:username_update,
                                    password_update:password_update,
                                    avatar_update:avatar_update,
                                    phone_number_update:phone_number_update
                                },function(data,status){
                                    console.log(data);
                                    //console.log('OK')
                                    //displayData();
                                    showSuccessMsg('Thanh Cong','Sua DL thanh cong','info')
                                    window.location.href='profile-edit.php';


                                });
                                
                                

                            }

                        }
                        function showImg(event) {

                        console.log(event);
                        const f = event.target.files[0];
                        const link = URL.createObjectURL(f)
                        
                        document.getElementById('avatar_show').src = link;
                        console.log(link)

                        }
                    </script>

        </div>


   <?php include 'Components/bot.php'?>