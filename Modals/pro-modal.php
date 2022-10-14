<?php include './loadFK.php' ?>
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
                        <label for="maSP_insert" >Ma SP</label>
                        <input type="text"  class="form-control" id="maSP_insert" name="maSP_insert" placeholder="Ma SP" >
                    </div>

                    <div class="col-auto">
                        <label for="tenSP_insert" >Ten SP</label>
                        <input type="text"  class="form-control" id="tenSP_insert" name="tenSP_insert" placeholder="Ten SP" >
                    </div>

                    <div class="col-auto">
                        <label for="hinhAnh_insert" >Hinh Anh</label>
                        <input type="file"  class="form-control" id="hinhAnh_insert" name="hinhAnh_insert" placeholder="Hinh Anh" >
                    </div>

                    <div class="col-auto">
                        <label for="mota_insert" >Mo Ta</label>
                        <input type="text"  class="form-control" id="mota_insert" name="mota_insert" placeholder="Mo Ta" >
                    </div>

                    <div class="col-auto">
                        <label for="chatLuong_insert" >Chat Luonng</label>
                        <input type="number"  class="form-control" id="chatLuong_insert" name="chatLuong_insert" placeholder="Chat Luong" >
                    </div>

                    <div class="col-auto">
                        <label for="trangThai_insert" >Trang Thai</label>
                        <input type="text"  class="form-control" id="trangThai_insert" name="trangThai_insert" placeholder="Trang Thai" >
                    </div>

                    <div class="col-auto">
                        <label for="gia_insert" >Gia</label>
                        <input type="number"  class="form-control" id="gia_insert" name="gia_insert" placeholder="Gia" >
                    </div>

                    <div class="col-auto">
                        <label for="nhomSP_insert" >Nhom SP</label>
                        <select id="nhomSP_insert" name="nhomSP_insert" class="form-control">
                            <?php 
                            
                            loadCategory();
                            ?>
                        </select>
                    </div>

                    <div class="col-auto">
                        <label for="NCC_insert" >NCC</label>
                        <select id="NCC_insert" name="NCC_insert" class="form-control">
                            <?php 
                            loadSupplier();
                            ?>
                        </select>
                    </div>

                    <div class="col-auto">
                        <label for="ngayNhap_insert" >ngay Nhap</label>
                        <input type="date"  class="form-control" id="ngayNhap_insert" name="ngayNhap_insert" placeholder="ngay Nhap" >
                    </div>
                    


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="Add">Save</button>
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
                <label for="maSP_update" >Ma SP</label> <!---->
                <input type="text"  class="form-control" id="maSP_update" name="maSP_update" placeholder="Ma SP" readonly="readonly">
            </div>

            <div class="col-auto">
                <label for="tenSP_update" >Ten SP</label>
                <input type="text"  class="form-control" id="tenSP_update" name="tenSP_update" placeholder="Ten SP" >
            </div>

            <div class="col-auto">
                <label for="hinhAnh_update" >Hinh Anh</label>
                <input type="file"  class="form-control" id="hinhAnh_update" name="hinhAnh_update" placeholder="Hinh Anh" >
            </div>

            <div class="col-auto">
                <label for="mota_update" >Mo Ta</label>
                <input type="text"  class="form-control" id="mota_update" name="mota_update" placeholder="Mo Ta" >
            </div>

            <div class="col-auto">
                <label for="chatLuong_update" >Chat Luonng</label>
                <input type="number"  class="form-control" id="chatLuong_update" name="chatLuong_update" placeholder="Chat Luong" >
            </div>

            <div class="col-auto">
                <label for="trangThai_update" >Trang Thai</label>
                <input type="text"  class="form-control" id="trangThai_update" name="trangThai_update" placeholder="Trang Thai" >
            </div>

            <div class="col-auto">
                <label for="gia_update" >Gia</label>
                <input type="number"  class="form-control" id="gia_update" name="gia_update" placeholder="Gia" >
            </div>

            <div class="col-auto">
                <label for="nhomSP_update" >Nhom SP</label>
                <select id="nhomSP_update" name="nhomSP_update" class="form-control" value="" >
                    <?php 
                    
                    loadCategory();//code selected co trong TH1 
                    ?>
                </select>
            </div>

            <div class="col-auto">
                <label for="NCC_update" >NCC</label>
                <select id="NCC_update" name="NCC_update" class="form-control">
                    <?php 
                    loadSupplier();
                    ?>
                </select>
            </div>

            <div class="col-auto">
                <label for="ngayNhap_update" >ngay Nhap</label>
                <input type="date"  class="form-control" id="ngayNhap_update" name="ngayNhap_update" placeholder="ngay Nhap" >
            </div>
            <div class="col-auto">
                <label for="hienThi_update" >Ẩn / hiện</label>
                <!-- <input type="number"  class="form-control" id="hienThi_update" name="hienThi_update" placeholder="Ẩn hiện" > -->
                <select class="form-control" id="hienThi_update" name="hienThi_update" placeholder="Ẩn hiện">
                    <option value="1">Hiển thị</option>
                    <option value="0">Ẩn</option>
                </select>
            </div>
            

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="Update">Save Changes</button>
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
                        <label for="maSP_view"  >Ma SP</label>
                        <input readonly="readonly" type="text"  class="form-control" id="maSP_view"  name="maSP_view"  placeholder="Ma SP" >
                    </div>

                    <div class="col-auto">
                        <label for="tenSP_view"  >Ten SP</label>
                        <input readonly="readonly" type="text"  class="form-control" id="tenSP_view"  name="tenSP_view"  placeholder="Ten SP" >
                    </div>

                    <div class="col-auto">
                        <label for="hinhAnh_view"  >Hinh Anh</label>
                        <input readonly="readonly" type="file"  class="form-control" id="hinhAnh_view"  name="hinhAnh_view"  placeholder="Hinh Anh" >
                    </div>

                

                    <div class="col-auto">
                        <label for="mota_view"  >Mo Ta</label>
                        <input readonly="readonly" type="text"  class="form-control" id="mota_view"  name="mota_view"  placeholder="Mo Ta" >
                    </div>

                    <div class="col-auto">
                        <label for="chatLuong_view"  >Chat Luonng</label>
                        <input readonly="readonly" type="number"  class="form-control" id="chatLuong_view"  name="chatLuong_view"  placeholder="Chat Luong" >
                    </div>

                    <div class="col-auto">
                        <label for="trangThai_view"  >Trang Thai</label>
                        <input readonly="readonly" type="text"  class="form-control" id="trangThai_view"  name="trangThai_view"  placeholder="Trang Thai" >
                    </div>

                    <div class="col-auto">
                        <label for="gia_view"  >Gia</label>
                        <input readonly="readonly" type="number"  class="form-control" id="gia_view"  name="gia_view"  placeholder="Gia" >
                    </div>

                    <div class="col-auto">
                        <label for="nhomSP_view"  >Nhom SP</label>
                        <select readonly="readonly" disabled id="ncc_view" name="ncc_view" class="form-control">
                            <?php 
                            loadCategory();
                            ?>
                        </select>
                    </div>

                    <div class="col-auto">
                        <label for="NCC_view"  >NCC</label>
                        <select readonly="readonly" disabled id="NCC_view" name="NCC_view" class="form-control">
                            <?php 
                            loadSupplier();
                            ?>
                        </select>
                    </div>

                    <div class="col-auto">
                        <label for="ngayNhap_view"  >ngay Nhap</label>
                        <input readonly="readonly" type="date"  class="form-control" id="ngayNhap_view"  name="ngayNhap_view"  placeholder="ngay Nhap" >
                    </div>
                    <div class="col-auto">
                        <label for="hienThi_view" >Ẩn / hiện</label>
                        <input readonly="readonly"  type="number"  class="form-control" id="hienThi_view" name="hienThi_view" placeholder="Ẩn hiện" >
                    </div>
                    
                    

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        
                    </div>
                </form>
                
                
                
        </div>
        
    </div>
</div>
</div>