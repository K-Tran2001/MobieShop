<!--Modal add--> 
<div class="modal fade" id="New" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header bg-success">
            <h5 class="modal-title " id="exampleModalLabel">Add a new Location</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
        <form class="row g-3" method="" action="" enctype="multipart/form-data" >
                    <div class="col-auto">
                        <label for="province_insert" >Province</label>
                        <input type="text"  class="form-control" id="province_insert" name="province_insert" placeholder="Tên địa điểm" >
                    </div>
                    <div class="col-auto">
                        <label for="city_insert" >City</label>
                        <input type="text"  class="form-control" id="city_insert" name="city_insert" placeholder="Tên thành phố" >
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
            <h5 class="modal-title " id="exampleModalLabel">Update Type</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
            <form class="row g-3" method="" action="" enctype="multipart/form-data" >
                <div class="col-auto">
                    <label for="location_id_update" >Location_ID</label>
                    <input readonly="readonly" type="text"  class="form-control" id="location_id_update" name="location_id_update" placeholder="Mã địa điểm" >
                </div>    
                <div class="col-auto">
                    <label for="province_update" >Province</label>
                    <input type="text"  class="form-control" id="province_update" name="province_update" placeholder="Tên địa điểm" >
                </div>
                <div class="col-auto">
                    <label for="city_update" >City</label>
                    <input type="text"  class="form-control" id="city_update" name="city_update" placeholder="Tên thành phố" >
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