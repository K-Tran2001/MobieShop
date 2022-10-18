<?php include './loadFK.php'?>
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
                    <label for="first_name_insert" >F Name</label>
                    <input type="text"  class="form-control" id="first_name_insert" name="first_name_insert" placeholder="F Name" >
                </div>
                <div class="col-auto">
                    <label for="last_name_insert" >L Name</label>
                    <input type="text"  class="form-control" id="last_name_insert" name="last_name_insert" placeholder="L Name" >
                </div>

                

                <div class="col-auto">
                    <label for="location_id_insert" >Address</label>
                    <select id="location_id_insert" name="location_id_insert" class="form-control">
                        <?php 
                        loadLocation();
                        ?>
                    </select>
                </div>

                <div class="col-auto">
                    <label for="phone_number_insert" >Phone Number</label>
                    <input type="text"  class="form-control" id="phone_number_insert" name="phone_number_insert" placeholder="Phone Number" >
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
            <h5 class="modal-title " id="exampleModalLabel">Update Customer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
            <form class="row g-3" method="" action="" enctype="multipart/form-data" >
                <div class="col-auto">
                    <label for="cust_id_update" >Customer ID</label>
                    <input type="text"  class="form-control" id="cust_id_update" name="cust_id_update" placeholder="Customer ID" >
                </div>

                <div class="col-auto">
                    <label for="first_name_update" >F Name</label>
                    <input type="text"  class="form-control" id="first_name_update" name="first_name_update" placeholder="F Name" >
                </div>
                <div class="col-auto">
                    <label for="last_name_update" >L Name</label>
                    <input type="text"  class="form-control" id="last_name_update" name="last_name_update" placeholder="L Name" >
                </div>

                

                <div class="col-auto">
                    <label for="location_id_update" >Address</label>
                    <select id="location_id_update" name="location_id_update" class="form-control">
                        <?php 
                        loadLocation();
                        ?>
                    </select>
                </div>
                <div class="col-auto">
                    <label for="phone_number_update" >Phone Number</label>
                    <input type="text"  class="form-control" id="phone_number_update" name="phone_number_update" placeholder="Phone Number" >
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