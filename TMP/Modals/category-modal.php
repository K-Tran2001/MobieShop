<!--Modal add--> 
<div class="modal fade" id="New" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header bg-success">
            <h5 class="modal-title " id="exampleModalLabel">Add a new Category</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
            <form class="row g-3" method="" action="" enctype="multipart/form-data" >
                <div class="col-auto">
                    <label for="cname_insert" >Category_ID</label>
                    <input type="text"  class="form-control" id="category_id_insert" name="category_id_insert" placeholder="Tên nhóm sản phẩm" >
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
            <h5 class="modal-title " id="exampleModalLabel">Update Category</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
            <form class="row g-3" method="" action="" enctype="multipart/form-data" >
                <div class="col-auto">
                    <label for="category_id_update" >Category_ID</label>
                    <input readonly="readonly" type="text"  class="form-control" id="category_id_update" name="category_id_update" placeholder="Mã nhóm sản phẩm" >
                </div>

                <div class="col-auto">
                    <label for="cname_update" >Category_NAME</label>
                    <input type="text"  class="form-control" id="cname_update" name="cname_update" placeholder="Tên nhóm sản phẩm" >
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