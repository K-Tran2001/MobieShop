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

                


                <div class="row ">
                    <div class="col-lg-12 col-md-12">
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title">Customer</h4>
                                <p class="category">Duong dan toi / back ve doashboard</p>
                            </div>
                            <!-- Button trigger modal -->


                            <!--Modal add--> 
                            <div class="modal fade" id="New" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-success">
                                        <h5 class="modal-title " id="exampleModalLabel">Add a new Customer</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        
                                    <form class="row g-3" method="" action="" enctype="multipart/form-data" >
                                                <div class="col-auto">
                                                    <label for="maKH_insert" class="visually-hidden">Ma KH</label>
                                                    <input type="text"  class="form-control" id="maKH_insert" name="maKH_insert" placeholder="Ma KH" >
                                                </div>

                                                <div class="col-auto">
                                                    <label for="tenKH_insert" class="visually-hidden">Ten KH</label>
                                                    <input type="text"  class="form-control" id="tenKH_insert" name="tenKH_insert" placeholder="Ten KH" >
                                                </div>

                                                <div class="col-auto">
                                                    <label for="ngaySinh_insert" class="visually-hidden">Ngay Sinh</label>
                                                    <input type="date"  class="form-control" id="ngaySinh_insert" name="ngaySinh_insert" placeholder="Ngay Sinh" >
                                                </div>

                                                <div class="col-auto">
                                                    <label for="gioiTinh_insert" class="visually-hidden">Gioi Tinh</label>
                                                    <input type="number"  class="form-control" id="gioiTinh_insert" name="gioiTinh_insert" placeholder="Gioi Tinh" >
                                                </div>

                                                <div class="col-auto">
                                                    <label for="diaChi_insert" class="visually-hidden">Dia Chi</label>
                                                    <input type="text"  class="form-control" id="diaChi_insert" name="diaChi_insert" placeholder="Dia Chi" >
                                                </div>

                                                <div class="col-auto">
                                                    <label for="dienThoai_insert" class="visually-hidden">Dien Thoai</label>
                                                    <input type="text"  class="form-control" id="dienThoai_insert" name="dienThoai_insert" placeholder="SDT" >
                                                </div>

                                                

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" onclick="addcustomer()">Save</button>
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
                                        <h5 class="modal-title " id="exampleModalLabel">Update Customer</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        
                                    <form class="row g-3" method="" action="" enctype="multipart/form-data" >
                                                <div class="col-auto">
                                                    <label for="maKH_update" class="visually-hidden">Ma KH</label>
                                                    <input readonly="readonly" type="text"  class="form-control" id="maKH_update" name="maKH_update" placeholder="Ma KH" >
                                                </div>

                                                <div class="col-auto">
                                                    <label for="tenKH_update" class="visually-hidden">Ten KH</label>
                                                    <input type="text"  class="form-control" id="tenKH_update" name="tenKH_update" placeholder="Ten KH" >
                                                </div>

                                                <div class="col-auto">
                                                    <label for="ngaySinh_update" class="visually-hidden">Ngay Sinh</label>
                                                    <input type="date"  class="form-control" id="ngaySinh_update" name="ngaySinh_update" placeholder="Ngay Sinh" >
                                                </div>

                                                <div class="col-auto">
                                                    <label for="gioiTinh_update" class="visually-hidden">Gioi Tinh</label>
                                                    <input type="number"  class="form-control" id="gioiTinh_update" name="gioiTinh_update" placeholder="Gioi Tinh" >
                                                </div>

                                                <div class="col-auto">
                                                    <label for="diaChi_update" class="visually-hidden">Dia Chi</label>
                                                    <input type="text"  class="form-control" id="diaChi_update" name="diaChi_update" placeholder="Dia Chi" >
                                                </div>

                                                <div class="col-auto">
                                                    <label for="dienThoai_update" class="visually-hidden">Dien Thoai</label>
                                                    <input type="text"  class="form-control" id="dienThoai_update" name="dienThoai_update" placeholder="SDT" >
                                                </div>

                                                

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" onclick="updateDetails()">Save</button>
                                                </div>
                                            </form>
                                            
                                            
                                            
                                    </div>
                                    
                                </div>
                            </div>
                            </div>
                            <div class="card-content table-responsive">
                                <button type="button" class="btn btn-primary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#New">ADD</button>
                                <div id="sample_data_filter" class="dataTables_filter "><label>Search:<input id="live_search"type="search" class="form-control form-control-sm" placeholder="" aria-controls="sample_data"></label></div>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            
                                            <th scope="col">Ma KH</th>
                                            <th scope="col">Ten KH</th>
                                            <th scope="col">Ngay Sinh</th>
                                            <th scope="col">Gioi Tinh</th>
                                            <th scope="col">Dia Chi</th>
                                            <th scope="col">Dien Thoai</th>
                                            <th scope="col">Sua</th>
                                            <th scope="col">Xoa</th>
                                        </tr>
                                    </thead>
                                    <tbody id="displayDataTable">
                                    
                                        
                                    
                                    </tbody>
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
                        url:"cus-search.php",
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
            
            
            $.post("cus-getdataById.php",{updateid:id},function(data,status){
                var customer_id =JSON.parse(data);
                $('#maKH_update').val(customer_id.maKH);
                $('#tenKH_update').val(customer_id.tenKH);
                $('#ngaySinh_update').val(customer_id.ngaySinh);
                $('#gioiTinh_update').val(customer_id.gioiTinh);
                $('#diaChi_update').val(customer_id.diaChi);
                $('#dienThoai_update').val(customer_id.dienThoai);
                //$('#avatar_update').val(userid.avatar);

            });
            
            $('#Edit').modal('show');
            //mai code
        }
        
        function updateDetails(){
            var maKH=$('#maKH_update').val();
            var tenKH=$('#tenKH_update').val();
            var ngaySinh=$('#ngaySinh_update').val();
            var gioiTinh=$('#gioiTinh_update').val();
            var diaChi=$('#diaChi_update').val();
            var dienThoai=$('#dienThoai_update').val();
            
            console.log(1);
            $.post("cus-update.php",{
                maKH:maKH,
                tenKH:tenKH,
                ngaySinh:ngaySinh,
                gioiTinh:gioiTinh,
                diaChi:diaChi,
                dienThoai:dienThoai
                
            },function(data,status){
                
                
                $('#maKH_update').val('');
                $('#tenKH_update').val('');
                $('#ngaySinh_update').val('');
                $('#gioiTinh_update').val('');
                $('#diaChi_update').val('');
                $('#dienThoai_update').val('');
                $('#Edit').modal('hide');
                displayData();
                

            });

        }
        function deletecustomer(id){
        //mai code
        $.ajax({
            
            url:"cus-delete.php",
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
                url:"cus-getdataAll.php",
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


        function addcustomer(){
            try{
                

                var maKH=$('#maKH_insert').val();
                var tenKH=$('#tenKH_insert').val();
                var ngaySinh=$('#ngaySinh_insert').val();
                var gioiTinh=$('#gioiTinh_insert').val();
                var diaChi=$('#diaChi_insert').val();
                var dienThoai=$('#dienThoai_insert').val();                
                $.ajax({
                    url:"cus-insert.php",
                    type:"post",
                    data:{
                        maKH:maKH,
                        tenKH:tenKH,
                        ngaySinh:ngaySinh,
                        gioiTinh:gioiTinh,
                        diaChi:diaChi,
                        dienThoai:dienThoai
                    },
                    success:function(data,status){
                        console.log(data)
                        

                        $('#maKH_insert').val('');
                        $('#tenKH_insert').val('');
                        $('#ngaySinh_insert').val('');
                        $('#gioiTinh_insert').val('');
                        $('#diaChi_insert').val('');
                        $('#dienThoai_insert').val('');
                        
                        $('#New').modal('hide');
                        displayData();
                        console.log('3')
                    }

                })

            }catch{
                
            }
            
        }

    </script>


    




</body>

</html>