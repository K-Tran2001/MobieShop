<?php include '../../includes/top.php'?>
<?php include '../../forms/acc-modal.php'?>
<!--=========================================================================================-->
                        <div class="card" style="min-height: 485px;">        
                            <div class="card-header card-header-text">
                                <h4 class="card-title">Account</h4>
                                <p class="category">ADMIN/Account</p>
                            </div>
                            <!-- Button trigger modal -->

                            
                            
                            <div class="card-content table-responsive">
                                <button type="button" class="btn btn-outline-success btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#New">ADD</button>
                                
                                

                                <table class="table table-hover" id="myTable">
                                    <thead class="text-primary">
                                        <tr>
                                            <th scope="col">Username</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">Avatar</th>
                                            <th scope="col">Active</th>
                                            <th scope="col">Update</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                </table>
                                
                            </div>
                        </div>        
 <!--=========================================================================================-->                               
 <script src="index.js"></script>
 <?php include '../../includes/bot.php'?>