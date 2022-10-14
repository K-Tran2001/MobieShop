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
                            
                            <th scope="col">Ma Cty</th>
                            <th scope="col">Ten Cty</th>
                            <th scope="col">Tinh</th>
                            <th scope="col">Dien Thoai</th>
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
                            <h5 class="modal-title " id="exampleModalLabel">Add a new Supplier</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                        <form class="row g-3" method="" action="" enctype="multipart/form-data" >
                                    <div class="col-auto">
                                        <label for="dienThoai_insert" class="visually-hidden">Ma Cong ty</label>
                                        <input type="text"  class="form-control" id="maCty_insert" name="maCty_insert" placeholder="Ma Cong ty" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="tinh_insert" class="visually-hidden">Ten Cong ty</label>
                                        <input type="text"  class="form-control" id="tenCty_insert" name="tenCty_insert" placeholder="Ten Cong ty" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="tinh_insert" class="visually-hidden">Tinh</label>
                                        <input type="text"  class="form-control" id="tinh_insert" name="tinh_insert" placeholder="Tinh" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="dienThoai_insert" class="visually-hidden">Dien Thoai</label>
                                        <input type="text"  class="form-control" id="dienThoai_insert" name="dienThoai_insert" placeholder="Dien Thoai" >
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" onclick="addsupplier()">Save</button>
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
                            <h5 class="modal-title " id="exampleModalLabel">Update Supplier</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                        <form class="row g-3" method="" action="" enctype="multipart/form-data" >
                                    <div class="col-auto">
                                        <label for="maCty_update" class="visually-hidden">Ma Cong ty</label>
                                        <input type="text"  class="form-control" id="maCty_update" name="maCty_update" placeholder="Ma Cong ty" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="tenCty_update" class="visually-hidden">Ten Cong ty</label>
                                        <input type="text"  class="form-control" id="tenCty_update" name="tenCty_update" placeholder="Ten Cong ty" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="tinh_update" class="visually-hidden">Tinh</label>
                                        <input type="text"  class="form-control" id="tinh_update" name="tinh_update" placeholder="Tinh" >
                                    </div>

                                    <div class="col-auto">
                                        <label for="dienThoai_update" class="visually-hidden">Dien Thoai</label>
                                        <input type="text"  class="form-control" id="dienThoai_update" name="dienThoai_update" placeholder="Dien Thoai" >
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
                                            url:"sup-search.php",
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
                                
                                
                                $.post("sup-getdataById.php",{updateid:id},function(data,status){
                                    var supplier_id =JSON.parse(data);
                                    console.log(supplier_id);
                                    $('#maCty_update').val(supplier_id.maCty);
                                    $('#tenCty_update').val(supplier_id.tenCty);
                                    $('#tinh_update').val(supplier_id.tinh);
                                    $('#dienThoai_update').val(supplier_id.dienThoai);
                                    
                                    //$('#avatar_update').val(userid.avatar);

                                });
                               
                                $('#Edit').modal('show');
                                //mai code
                            }
                            
                            function updateDetails(){
                                var maCty=$('#maCty_update').val();
                                var tenCty=$('#tenCty_update').val();
                                var tinh=$('#tinh_update').val();
                                var dienThoai=$('#dienThoai_update').val();
                                console.log(dienThoai)
                                console.log(maCty)
                                console.log(tenCty)
                                console.log(tinh)

                                $.post("sup-update.php",{
                                    maCty:maCty,
                                    tenCty:tenCty,
                                    tinh:tinh,
                                    dienThoai:dienThoai,
                                    
                                },function(data,status){
                                    
                                    
                                    $('#maCty_update').val('');
                                    $('#tenCty_update').val('');
                                    $('#tinh_update').val('');
                                    $('#dienThoai_update').val('');
                                    
                                    $('#Edit').modal('hide');
                                    displayData();
                                    

                                });

                            }
                            function deletesupplier(id){
                            //mai code
                            $.ajax({
                                
                                url:"sup-delete.php",
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
                                    url:"sup-getdataAll.php",
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


                            function addsupplier(){
                                try{
                                   

                                    var maCty=$('#maCty_insert').val();
                                    var tenCty=$('#tenCty_insert').val();
                                    var tinh=$('#tinh_insert').val();
                                    var dienThoai=$('#dienThoai_insert').val();           
                                    $.ajax({
                                        url:"sup-insert.php",
                                        type:"post",
                                        data:{
                                            maCty:maCty,
                                            tenCty:tenCty,
                                            tinh:tinh,
                                            dienThoai:dienThoai
                                        },
                                        success:function(data,status){
                                            console.log(data)
                                            

                                            $('#maCty_insert').val('');
                                            $('#tenCty_insert').val('');
                                            $('#tinh_insert').val('');
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