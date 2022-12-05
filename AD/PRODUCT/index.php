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
                                <button type="button" class="btn btn-outline-success btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#New">ADD</button>
                                <button type="button" class="btn btn-outline-success btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#Import-modal">IMPORT</button>
                                <a href="export.php" class="btn btn-outline-success btn-sm mb-2">EXPORT</a>


                                <form class="" action="import/index.php" method="post" enctype="multipart/form-data">
                                    <input type="file" name="excel" required value="">
                                    <button type="submit" name="import">Import</button>
                                </form>

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