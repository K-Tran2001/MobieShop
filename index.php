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
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">




    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
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

                <?php include_once './includes/quickview.php'?>


                <div class="row ">
                    <div class="col-lg-7 col-md-12">
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title">Accounts</h4>
                                <p class="category">Duong dan toi / back ve doashboard</p>
                            </div>
                            <!-- Button trigger modal -->
  
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12">

                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title">Activities</h4>
                                <span>hoat dong vua moi dien ra</span>
                            </div>
                            <div class="card-content">
                                <div class="streamline">
                                    <div class="sl-item sl-primary">
                                        <div class="sl-content">
                                            <small class="text-muted">5 mins ago</small>
                                            <p>Williams has just joined Project X</p>
                                        </div>
                                    </div>
                                    <div class="sl-item sl-danger">
                                        <div class="sl-content">
                                            <small class="text-muted">25 mins ago</small>
                                            <p>Jane has sent a request for access to the project folder</p>
                                        </div>
                                    </div>
                                    <div class="sl-item sl-success">
                                        <div class="sl-content">
                                            <small class="text-muted">40 mins ago</small>
                                            <p>Kate added you to her team</p>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-content">
                                            <small class="text-muted">45 minutes ago</small>
                                            <p>John has finished his task</p>
                                        </div>
                                    </div>
                                    <div class="sl-item sl-warning">
                                        <div class="sl-content">
                                            <small class="text-muted">55 mins ago</small>
                                            <p>Jim shared a folder with you</p>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-content">
                                            <small class="text-muted">60 minutes ago</small>
                                            <p>John has finished his task</p>
                                        </div>
                                    </div>
                                </div>
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


    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });

            $('.more-button,.body-overlay').on('click', function() {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });
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





</body>

</html>