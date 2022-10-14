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


                <?php include '../includes/toggle.php'?>
                


                <div class="row p-4" id="panel">
                    
                    
                <button type="button" class="btn btn-primary btn-sm " data-bs-toggle="modal" data-bs-target="#New">New_module</button>

                <table class="table table-striped table-hover">
                    <input type="text" id="live_search" placeholder="Search...">
                    <thead>
                        <tr>
                            
                            <th scope="col">Ma SP</th>
                            <th scope="col">Ten SP</th>
                            <th scope="col">Hinh Anh</th>
                            <th scope="col">Mo Ta</th>
                            
                            <th scope="col">Gia</th>
                            <th scope="col">Chi Tiet</th>
                            <th scope="col">Sua</th>
                            <th scope="col">Xoa</th>
                            
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
                            <h5 class="modal-title " id="exampleModalLabel">Add a new Product</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                        <form class="row g-3" method="" action="" enctype="multipart/form-data" >
                                    <div class="col-auto">
                                        <label for="maSP_insert" class="visually-hidden">Ma SP</label>
                                        <input type="text"  class="form-control" id="maSP_insert" name="maSP_insert" placeholder="Ma SP" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="tenSP_insert" class="visually-hidden">Ten SP</label>
                                        <input type="text"  class="form-control" id="tenSP_insert" name="tenSP_insert" placeholder="Ten SP" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="hinhAnh_insert" class="visually-hidden">Hinh Anh</label>
                                        <input type="file"  class="form-control" id="hinhAnh_insert" name="hinhAnh_insert" placeholder="Hinh Anh" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="mota_insert" class="visually-hidden">Mo Ta</label>
                                        <input type="text"  class="form-control" id="mota_insert" name="mota_insert" placeholder="Mo Ta" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="chatLuong_insert" class="visually-hidden">Chat Luonng</label>
                                        <input type="number"  class="form-control" id="chatLuong_insert" name="chatLuong_insert" placeholder="Chat Luong" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="trangThai_insert" class="visually-hidden">Trang Thai</label>
                                        <input type="text"  class="form-control" id="trangThai_insert" name="trangThai_insert" placeholder="Trang Thai" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="gia_insert" class="visually-hidden">Gia</label>
                                        <input type="number"  class="form-control" id="gia_insert" name="gia_insert" placeholder="Gia" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="nhomSP_insert" class="visually-hidden">Nhom SP</label>
                                        <input type="text"  class="form-control" id="nhomSP_insert" name="nhomSP_insert" placeholder="Nhom SP" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="NCC_insert" class="visually-hidden">NCC</label>
                                        <input type="text"  class="form-control" id="NCC_insert" name="NCC_insert" placeholder="NCC" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="ngayNhap_insert" class="visually-hidden">ngay Nhap</label>
                                        <input type="date"  class="form-control" id="ngayNhap_insert" name="ngayNhap_insert" placeholder="ngay Nhap" >
                                    </div>


                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" onclick="addproduct()">Save</button>
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
                            <h5 class="modal-title " id="exampleModalLabel">Update Product</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                        <form class="row g-3" method="" action="" enctype="multipart/form-data" >
                        <div class="col-auto">
                                        <label for="maSP_update" class="visually-hidden">Ma SP</label>
                                        <input type="text"  class="form-control" id="maSP_update" name="maSP_update" placeholder="Ma SP" readonly="readonly">
                                    </div>

                                    <div class="col-auto">
                                        <label for="tenSP_update" class="visually-hidden">Ten SP</label>
                                        <input type="text"  class="form-control" id="tenSP_update" name="tenSP_update" placeholder="Ten SP" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="hinhAnh_update" class="visually-hidden">Hinh Anh</label>
                                        <input type="file"  class="form-control" id="hinhAnh_update" name="hinhAnh_update" placeholder="Hinh Anh" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="mota_update" class="visually-hidden">Mo Ta</label>
                                        <input type="text"  class="form-control" id="mota_update" name="mota_update" placeholder="Mo Ta" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="chatLuong_update" class="visually-hidden">Chat Luonng</label>
                                        <input type="number"  class="form-control" id="chatLuong_update" name="chatLuong_update" placeholder="Chat Luong" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="trangThai_update" class="visually-hidden">Trang Thai</label>
                                        <input type="text"  class="form-control" id="trangThai_update" name="trangThai_update" placeholder="Trang Thai" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="gia_update" class="visually-hidden">Gia</label>
                                        <input type="number"  class="form-control" id="gia_update" name="gia_update" placeholder="Gia" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="nhomSP_update" class="visually-hidden">Nhom SP</label>
                                        <input type="text"  class="form-control" id="nhomSP_update" name="nhomSP_update" placeholder="Nhom SP" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="NCC_update" class="visually-hidden">NCC</label>
                                        <input type="text"  class="form-control" id="NCC_update" name="NCC_update" placeholder="NCC" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="ngayNhap_update" class="visually-hidden">ngay Nhap</label>
                                        <input type="date"  class="form-control" id="ngayNhap_update" name="ngayNhap_update" placeholder="ngay Nhap" >
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

                <!--Modal View-->
                <div class="modal fade" id="View" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h5 class="modal-title " id="exampleModalLabel">View Product</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                        <form class="row g-3" method="" action="" enctype="multipart/form-data" >
                        <div class="col-auto">
                                        <label for="maSP_view"  class="visually-hidden">Ma SP</label>
                                        <input readonly="readonly" type="text"  class="form-control" id="maSP_view"  name="maSP_view"  placeholder="Ma SP" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="tenSP_view"  class="visually-hidden">Ten SP</label>
                                        <input readonly="readonly" type="text"  class="form-control" id="tenSP_view"  name="tenSP_view"  placeholder="Ten SP" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="hinhAnh_view"  class="visually-hidden">Hinh Anh</label>
                                        <input readonly="readonly" type="file"  class="form-control" id="hinhAnh_view"  name="hinhAnh_view"  placeholder="Hinh Anh" >
                                    </div>

                                   

                                    <div class="col-auto">
                                        <label for="mota_view"  class="visually-hidden">Mo Ta</label>
                                        <input readonly="readonly" type="text"  class="form-control" id="mota_view"  name="mota_view"  placeholder="Mo Ta" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="chatLuong_view"  class="visually-hidden">Chat Luonng</label>
                                        <input readonly="readonly" type="number"  class="form-control" id="chatLuong_view"  name="chatLuong_view"  placeholder="Chat Luong" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="trangThai_view"  class="visually-hidden">Trang Thai</label>
                                        <input readonly="readonly" type="text"  class="form-control" id="trangThai_view"  name="trangThai_view"  placeholder="Trang Thai" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="gia_view"  class="visually-hidden">Gia</label>
                                        <input readonly="readonly" type="number"  class="form-control" id="gia_view"  name="gia_view"  placeholder="Gia" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="nhomSP_view"  class="visually-hidden">Nhom SP</label>
                                        <input readonly="readonly" type="text"  class="form-control" id="nhomSP_view"  name="nhomSP_view"  placeholder="Nhom SP" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="NCC_view"  class="visually-hidden">NCC</label>
                                        <input readonly="readonly" type="text"  class="form-control" id="NCC_view"  name="NCC_view"  placeholder="NCC" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="ngayNhap_view"  class="visually-hidden">ngay Nhap</label>
                                        <input readonly="readonly" type="date"  class="form-control" id="ngayNhap_view"  name="ngayNhap_view"  placeholder="ngay Nhap" >
                                    </div>
                                    

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        
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
                                            url:"pro-search.php",
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
                            var file_data = $('#hinhAnh_insert').prop('files')[0];    //Fetch the file
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
                            var file_data = $('#hinhAnh_update').prop('files')[0];    //Fetch the file
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
                                
                                
                                $.post("pro-getdataById.php",{updateid:id},function(data,status){
                                    
                                    
                                    var productid =JSON.parse(data);
                                    console.log(productid);
                                    $('#maSP_update').val(productid.maSP);
                                    $('#tenSP_update').val(productid.tenSP);
                                    $('#mota_update').val(productid.moTa);
                                    $('#chatLuong_update').val(productid.chatLuong);
                                    $('#trangThai_update').val(productid.trangThai);
                                    $('#gia_update').val(productid.gia);
                                    $('#nhomSP_update').val(productid.nhomSP);
                                    $('#NCC_update').val(productid.NCC);
                                    $('#ngayNhap_update').val(productid.ngayNhap);
                                    
                                    //$('#avatar_update').val(userid.avatar);

                                });
                               
                                $('#Edit').modal('show');
                                //mai code
                            }
                            function getDetails_view(id){
                                
                                
                                $.post("pro-getdataById.php",{updateid:id},function(data,status){
                                    
                                    
                                    var productid =JSON.parse(data);
                                    console.log(productid);
                                    $('#maSP_view').val(productid.maSP);
                                    $('#tenSP_view').val(productid.tenSP);
                                    $('#mota_view').val(productid.moTa);
                                    $('#chatLuong_view').val(productid.chatLuong);
                                    $('#trangThai_view').val(productid.trangThai);
                                    $('#gia_view').val(productid.gia);
                                    $('#nhomSP_view').val(productid.nhomSP);
                                    $('#NCC_view').val(productid.NCC);
                                    $('#ngayNhap_view').val(productid.ngayNhap);
                                    
                                    //$('#avatar_update').val(userid.avatar);

                                });
                               
                                $('#View').modal('show');
                                //mai code
                            }
                            
                            function updateDetails(){
                                try{
                                    var file_data = $('#hinhAnh_update').prop('files')[0];    //Fetch the file
                                    filename=file_data['name'];

                                    var maSP=$('#maSP_update').val();
                                    var tenSP=$('#tenSP_update').val();
                                    var hinhAnh=filename;
                                    var mota=$('#mota_update').val();
                                    var chatLuong=$('#chatLuong_update').val();
                                    var trangThai=$('#trangThai_update').val();
                                    var gia=$('#gia_update').val();
                                    var nhomSP=$('#nhomSP_update').val();
                                    var nCC=$('#NCC_update').val();
                                    var ngayNhap=$('#ngayNhap_update').val();
                                    
                                    console.log(hinhAnh);
                                    $.post("pro-update.php",{
                                        maSP:maSP,
                                        tenSP:tenSP,
                                        hinhAnh:hinhAnh,
                                        mota:mota,
                                        chatLuong:chatLuong,
                                        trangThai:trangThai,
                                        gia:gia,
                                        nhomSP:nhomSP,
                                        nCC:nCC,
                                        ngayNhap:ngayNhap
                        
                                        
                                    },function(data,status){
                                        uploadfile_for_update();
                                        
                                        
                                        $('#maSP_update').val('');
                                        $('#tenSP_update').val('');
                                        $('#mota_update').val('');
                                        $('#chatLuong_update').val('');
                                        $('#trangThai_update').val('');
                                        $('#gia_update').val('');
                                        $('#nhomSP_update').val('');
                                        $('#NCC_update').val('');
                                        $('#ngayNhap_update').val('');

                                        $('#Edit').modal('hide');
                                        displayData();
                                        

                                    });
                                }catch{
                                    

                                    var maSP=$('#maSP_update').val();
                                    var tenSP=$('#tenSP_update').val();
                                    var hinhAnh='';
                                    var mota=$('#mota_update').val();
                                    var chatLuong=$('#chatLuong_update').val();
                                    var trangThai=$('#trangThai_update').val();
                                    var gia=$('#gia_update').val();
                                    var nhomSP=$('#nhomSP_update').val();
                                    var nCC=$('#NCC_update').val();
                                    var ngayNhap=$('#ngayNhap_update').val();
                                    
                                    console.log(hinhAnh);
                                    $.post("pro-update.php",{
                                        maSP:maSP,
                                        tenSP:tenSP,
                                        hinhAnh:hinhAnh,
                                        mota:mota,
                                        chatLuong:chatLuong,
                                        trangThai:trangThai,
                                        gia:gia,
                                        nhomSP:nhomSP,
                                        nCC:nCC,
                                        ngayNhap:ngayNhap
                        
                                        
                                    },function(data,status){
                                        
                                        
                                        
                                        $('#maSP_update').val('');
                                        $('#tenSP_update').val('');
                                        $('#mota_update').val('');
                                        $('#chatLuong_update').val('');
                                        $('#trangThai_update').val('');
                                        $('#gia_update').val('');
                                        $('#nhomSP_update').val('');
                                        $('#NCC_update').val('');
                                        $('#ngayNhap_update').val('');

                                        $('#Edit').modal('hide');
                                        displayData();
                                        

                                    });
                                }

                            }
                            function deleteproduct(id){
                            //mai code
                            $.ajax({
                                
                                url:"pro-delete.php",
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
                                    url:"pro-getdataAll.php",
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


                            function addproduct(){
                                try{
                                    var file_data = $('#hinhAnh_insert').prop('files')[0];    //Fetch the file
                                    filename=file_data['name'];

                                    var maSP=$('#maSP_insert').val();
                                    var tenSP=$('#tenSP_insert').val();
                                    var hinhAnh=filename;
                                    var mota=$('#mota_insert').val();
                                    var chatLuong=$('#chatLuong_insert').val();
                                    var trangThai=$('#trangThai_insert').val();
                                    var gia=$('#gia_insert').val();
                                    var nhomSP=$('#nhomSP_insert').val();
                                    var nCC=$('#NCC_insert').val();
                                    var ngayNhap=$('#ngayNhap_insert').val();
                                    

                                    $.ajax({
                                        url:"pro-insert.php",
                                        type:"post",
                                        data:{
                                            maSP:maSP,
                                            tenSP:tenSP,
                                            hinhAnh:hinhAnh,
                                            mota:mota,
                                            chatLuong:chatLuong,
                                            trangThai:trangThai,
                                            gia:gia,
                                            nhomSP:nhomSP,
                                            nCC:nCC,
                                            ngayNhap:ngayNhap
                                        },
                                        success:function(data,status){
                                            uploadfile_for_insert();
                                            
                                            $('#maSP_insert').val('');
                                            $('#tenSP_insert').val('');
                                            $('#mota_insert').val('');
                                            $('#chatLuong_insert').val('');
                                            $('#trangThai_insert').val('');
                                            $('#gia_insert').val('');
                                            $('#nhomSP_insert').val('');
                                            $('#NCC_insert').val('');
                                            $('#ngayNhap_insert').val('');
                                            
                                            $('#New').modal('hide');
                                            displayData();
                                            console.log('3')
                                        }

                                    })

                                }catch{
                                    console.log('Loi')
                                    
                                }
                                
                            }
                    
                </script>

                
                                

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