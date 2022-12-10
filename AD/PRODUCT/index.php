<?php include '../../includes/top.php'?>
<?php include '../../forms/pro-modal.php'?>
<!--=========================================================================================-->
                        <div class="card" style="min-height: 485px;">        
                            <div class="card-header card-header-text">
                                <h4 class="card-title">Accounts</h4>
                                <p class="category">Duong dan toi / back ve doashboard</p>
                            </div>
                            <!-- Button trigger modal -->

                            
                            <div class="card-content table-responsive">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <button type="button" class="btn btn-outline-success btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#New">ADD</button>

                                    </div>
                                    
                                    <div class="col-sm-10">
                                            
                                        <button type="button" class="btn btn-outline-success btn-sm mb-2" id="btn-import">IMPORT</button>
                                        <a href="export.php" class="btn btn-outline-success btn-sm mb-2">EXPORT</a>
                                        <form class="" action="import/index.php" method="post" enctype="multipart/form-data">
                                            <!--excel import-->
                                            <div class="input-group w-50 visually-hidden" id="form-import">
                                                <input type="file" name="excel" required value="" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                                <button class="btn btn-outline-success" type="submit" name="import" id="inputGroupFileAddon04">Import</button>
                                            </div>
                                            
                                            
                                        </form>
                                    </div>
                                </div>



                                <table class="table table-hover" id="myTable">
                                    <thead class="text-primary">
                                        <tr>
                                            
                                            <th scope="col">Product Code</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Img</th>
                                            <th scope="col">Description</th>
                                            
                                            <th scope="col">Price</th>
                                            <th scope="col">Publish</th>
                                            <th scope="col">Details</th>
                                            <th scope="col">Update</th>
                                            <th scope="col">Delete</th>
                                            
                                        </tr>
                                    </thead>
                                </table>
                                
                                
                            </div>
                        </div>        
 <!--=========================================================================================-->    

 
<!--=========================================================================================-->  
 <script src="index.js"></script>
 <?php include '../../includes/bot.php'?>