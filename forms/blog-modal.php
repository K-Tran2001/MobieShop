
<!--Modal add--> 
<div class="modal fade" id="New" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header bg-success">
            <h5 class="modal-title " id="exampleModalLabel">Add a new Blog</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
            <form class="row g-3" method="" action="" enctype="multipart/form-data" >
                <div class="col-auto">
                    <label for="img_insert" >Blog Img</label>
                    <input type="file"  class="form-control" id="img_insert" name="img_insert" placeholder="Blog Img" >
                </div>
                <div class="col-auto">
                    <label for="cname_insert" >Category Name</label>
                    <select id="category_id_insert" name="category_id_insert" class="form-control">
                        <?php 
                        include './loadFK.php';
                        loadCategory();
                        ?>
                    </select>
                </div>
                <div class="col-auto">
                    <label for="title_insert" >Title</label>
                    <textarea row="3" type="text"  class="form-control" id="title_insert" name="title_insert" placeholder="Title" ></textarea>
                </div>

                <div class="col-auto">
                    <label for="author_insert" >Author</label>
                    <input type="text"  class="form-control" id="author_insert" name="author_insert" placeholder="Author" >
                </div>
                <div class="col-auto">
                    <label for="date_insert" >date</label>
                    <input type="date"  class="form-control" id="date_insert" name="date_insert" placeholder="date" >
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
                    <label for="blog_id_update" >Blog ID</label>
                    <input readonly="readonly" type="text"  class="form-control" id="blog_id_update" name="blog_id_update" placeholder="Mã blog" >
                </div>

                <div class="col-auto">
                    <label for="img_update" >Blog Img</label>
                    <input type="file"  class="form-control" id="img_update" name="img_update" placeholder="Product Img" >
                </div>
                <div class="col-auto">
                    <label for="cname_update" >Category Name</label>
                    <select id="category_id_update" name="category_id_update" class="form-control">
                        <?php 
                        loadCategory();
                        ?>
                    </select>
                </div>
                <div class="col-auto">
                    <label for="title_update" >Title</label>
                    <textarea row="3" type="text"  class="form-control" id="title_update" name="title_update" placeholder="Title" ></textarea>
                </div>

                <div class="col-auto">
                    <label for="author_update" >Author</label>
                    <input type="text"  class="form-control" id="author_update" name="author_update" placeholder="Author" >
                </div>
                <div class="col-auto">
                    <label for="date_update" >date</label>
                    <input type="date"  class="form-control" id="date_update" name="date_update" placeholder="date" >
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