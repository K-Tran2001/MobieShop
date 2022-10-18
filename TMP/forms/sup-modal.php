<?php include './loadFK.php'?>
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
                    <label for="company_name_insert" >COMPANY NAME</label>
                    <input type="text"  class="form-control" id="company_name_insert" name="company_name_insert" placeholder="COMPANY NAME" >
                </div>

                <div class="col-auto">
                    <label for="location_id_insert" >ADDRESS</label>
                    <select id="location_id_insert" name="location_id_insert" class="form-control">
                        <?php 
                        loadLocation();
                        ?>
                    </select>
                </div>

                <div class="col-auto">
                    <label for="phone_number_insert" >PHONE NUMBER</label>
                    <input type="text"  class="form-control" id="phone_number_insert" name="phone_number_insert" placeholder="PHONE NUMBER" >
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
            <h5 class="modal-title " id="exampleModalLabel">Update Supplier</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
            <form class="row g-3" method="" action="" enctype="multipart/form-data" >
                <div class="col-auto">
                    <label for="supplier_id_update" >SUPPLIER ID</label>
                    <input type="text"  class="form-control" id="supplier_id_update" name="supplier_id_update" placeholder="SUPPLIER ID" >
                </div>
                <div class="col-auto">
                    <label for="company_name_update" >COMPANY NAME</label>
                    <input type="text"  class="form-control" id="company_name_update" name="company_name_update" placeholder="COMPANY NAME" >
                </div>

                <div class="col-auto">
                    <label for="location_id_update" >ADDRESS</label>
                    <select id="location_id_update" name="location_id_update" class="form-control">
                        <?php 
                        loadLocation();
                        ?>
                    </select>
                </div>

                <div class="col-auto">
                    <label for="phone_number_update" >PHONE NUMBER</label>
                    <input type="text"  class="form-control" id="phone_number_update" name="phone_number_update" placeholder="PHONE NUMBER" >
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