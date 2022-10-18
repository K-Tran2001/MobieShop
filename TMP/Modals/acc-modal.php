
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>
<!---Modal end-->

<!--Modal add--> 
<div class="modal fade" id="New" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title " id="exampleModalLabel">Add a new account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
            <form class="row g-3" method="" action="" enctype="multipart/form-data" >
                        <div class="col-auto">
                            <label for="username_insert" >Username</label>
                            <input type="text"  class="form-control" id="username_insert" name="username_insert" placeholder="Usename" >
                        </div>

                        <div class="col-auto">
                            <label for="password_insert" >Password</label>
                            <input type="password" class="form-control" id="password_insert" name="password_insert" placeholder="Password">
                        </div>

                        <div class="col-auto">
                            <label for="avatar_insert" >Avatar</label>
                            <input type="file"  class="form-control" id="avatar_insert" name="avatar_insert" placeholder="Password">
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
                <h5 class="modal-title " id="exampleModalLabel">Edit account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
            <form class="row g-3" method="" action="" enctype="multipart/form-data" >
                        <div class="col-auto">
                            <label for="username_update" >Username_update</label>
                            <input type="text"  class="form-control"  id="username_update" name="username_update" placeholder="Usename" readonly="readonly">
                        </div>

                        <div class="col-auto">
                            <label for="password_update" >Password_update</label>
                            <input type="password_update" class="form-control" id="password_update" name="password_update" placeholder="Password">
                        </div>

                        <div class="col-auto">
                            <label for="avatar_update" >Avatar_update</label>
                            <input type="file"  class="form-control" id="avatar_update" name="avatar_update" placeholder="Password">
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