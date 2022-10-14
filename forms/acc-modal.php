
<?php include './loadFK.php' ?>
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
                    <div class="col-auto">
                        <label for="type_id_insert" >Type ID</label>
                        <select  id="type_id_insert" name="type_id_insert" class="form-control">
                            <?php 
                            loadType();
                            ?>
                        </select>
                    </div>
                    <div class="col-auto">
                        <label for="customer_id_insert" >Customer ID</label>
                        <select id="customer_id_insert" name="customer_id_insert" class="form-control">
                            <?php 
                            loadCustomer();
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
                <h5 class="modal-title " id="exampleModalLabel">Edit account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <form class="row g-3" method="" action="" enctype="multipart/form-data" >
                    <div class="col-auto">
                        <label for="id_update" >ID</label>
                        <input type="text"  class="form-control"  id="id_update" name="id_update" placeholder="ID" readonly="readonly">
                    </div>
                    <div class="col-auto">
                        <label for="username_update" >USERNAME</label>
                        <input type="text"  class="form-control"  id="username_update" name="username_update" placeholder="USERNAME" readonly="readonly">
                    </div>

                    <div class="col-auto">
                        <label for="password_update" >PASSWORD</label>
                        <input type="password_update" class="form-control" id="password_update" name="password_update" placeholder="PASSWORD">
                    </div>

                    <div class="col-auto">
                        <label for="avatar_update" >IMG</label>
                        <input type="file"  class="form-control" id="avatar_update" name="avatar_update" placeholder="IMG">
                    </div>
                    <div class="col-auto">
                        <label for="type_id_update" >TYPE ID</label>
                        <select  id="type_id_update" name="type_id_update" class="form-control">
                            <?php 
                            loadType();
                            ?>
                        </select>
                    </div>
                    <div class="col-auto">
                        <label for="customer_id_update" >CUSTOMER ID</label>
                        <select id="customer_id_update" name="customer_id_update" class="form-control">
                            <?php 
                            loadCustomer();
                            ?>
                        </select>
                    </div>
                    <div class="col-auto">
                        <label for="state_update" >STATE</label>
                        <select class="form-control" id="state_update" name="state_update" placeholder="">
                            <option value="1">Publish</option>
                            <option value="0">Unpublish</option>
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