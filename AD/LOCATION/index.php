<?php include '../../includes/top.php'?>
<?php include '../../forms/location-modal.php'?>
<!--=========================================================================================-->
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title">Location</h4>
                                <p class="category">ADMIN/Location</p>
                            </div>
                            <!-- Button trigger modal -->


                           
                            <div class="card-content table-responsive">
                                <button type="button" class="btn btn-outline-primary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#New">ADD</button>
                                
                                <table class="table table-hover" id="myTable">
                                    <thead class="text-primary">
                                        <tr>
                                            
                                            <th scope="col">LOCATION_ID</th>
                                            <th scope="col">PROVINCE</th>
                                            <th scope="col">CITY</th>
                                            <th scope="col">Sua</th>
                                            <th scope="col">Xoa</th>
                                        </tr>
                                    </thead>
                                    <!-- <tbody id="displayDataTable">
                                    
                                        
                                    
                                    </tbody> -->
                                </table>
                                <script src="./index.js"></script>
                            </div>
                        </div>  
 <!--=========================================================================================-->                               
 
 <?php include '../../includes/bot.php'?>