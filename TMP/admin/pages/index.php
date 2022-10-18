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
    <link rel="stylesheet" href="../Slidebar/style.css">
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

        <?php include '../includes/slidebar.php'?>


        <div id="content ">
            <div class="content-border">


                <nav class="navbar navbar-expand-lg navbar-light p-0 bg-info">
                    <div class="container-fluid bg-light " style="border-radius: 20px 0 0 0;">
                        <button type="button" id="sidebarCollapse" class="btn  btn-info mt-3">
                            <i class="fas fa-align-left"></i>
                            <span>Toggle Sidebar</span>
                        </button>
                    </div>
                </nav>
                <h1>Khung search - cbo so dong - phan trang - khoa ngaoi - post co hinh anh - thong bao khi thao tac DL - reset DL</h1>
                
                
                

                <div class="row p-4" id="panel">
                    <h1>Day la trang index</h1>
                     
                       
                </div>

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


    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="New" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title " id="exampleModalLabel">Add a new account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                        <form class="row g-3" method="POST" action="taikhoan-them-xuly.php" enctype="multipart/form-data" >
                            <div class="col-auto">
                                <label for="staticEmail2" class="visually-hidden">Username</label>
                                <input type="text"  class="form-control" id="staticEmail2" name="username" placeholder="Usename" >
                            </div>

                            <div class="col-auto">
                                <label for="inputPassword2" class="visually-hidden">Password</label>
                                <input type="password" class="form-control" id="inputPassword2" name="password" placeholder="Password">
                            </div>

                            <div class="col-auto">
                                <label for="staticEmail2" class="visually-hidden">Avatar</label>
                                <input type="file"  class="form-control" id="staticEmail2" name="avatar" placeholder="Password">
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                        
                </div>
                
            </div>
        </div>
    </div>

    


</body>

</html>