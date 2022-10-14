
<!--Modal add--> 
<div class="modal fade" id="New" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header bg-success">
            <h5 class="modal-title " id="exampleModalLabel">Add a new Banner</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
            <form class="row g-3" method="" action="" enctype="multipart/form-data" >
                <div class="col-auto">
                    <label for="img_insert" >Banner Img</label>
                    <input type="file"  class="form-control" id="img_insert" name="img_insert" placeholder="Product Img" >
                </div>
                <div class="col-auto">
                    <label for="cname_insert" >Category Name</label>
                    <select id="product_id_insert" name="product_id_insert" class="form-control">
                        <?php 
                        include './loadFK.php';
                        loadProduct();
                        ?>
                    </select>
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
            <h5 class="modal-title " id="exampleModalLabel">Update Banner</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
            <form class="row g-3" method="" action="" enctype="multipart/form-data" >
                <div class="col-auto">
                    <label for="banner_id_update" >Banner ID</label>
                    <input readonly="readonly" type="text"  class="form-control" id="banner_id_update" name="banner_id_update" placeholder="Mã nhóm sản phẩm" >
                </div>

                <div class="col-auto">
                    <label for="img_update" >Banner Img</label>
                    <input type="file"  class="form-control" id="img_update" name="img_update" placeholder="Product Img" >
                </div>
                <div class="col-auto">
                    <label for="cname_update" >Category Name</label>
                    <select id="product_id_update" name="product_id_update" class="form-control">
                        <?php 
                        loadProduct();
                        ?>
                    </select>
                </div>
                <div class="col-auto">
                    <label for="state_update" >State</label>
                    <select id="state_update" name="state_update" class="form-control">
                        <option value="0">Unpublish</option>
                        <option value="1">Publish</option>
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