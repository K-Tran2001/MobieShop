<?php include '../../includes/top.php'?>
<?php include '../../forms/type-modal.php'?>
<!--=========================================================================================-->
                        <div class="card" style="min-height: 485px;">        
                            <div class="card-header card-header-text">
                                <h4 class="card-title">Type</h4>
                                <p class="category">ADMIN/Type</p>
                            </div>
                            <!-- Button trigger modal -->

                            
                            
                            <div class="card-content table-responsive">
                                <button type="button" class="btn btn-outline-primary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#New">ADD</button>
                                
                                

                                <table class="table table-hover" id="myTable">
                                    <thead class="text-primary">
                                        <tr>
                                            
                                            <th scope="col">TYPE_ID</th>
                                            <th scope="col">TYPE</th>
                                            
                                            <th scope="col">Sua</th>
                                            <th scope="col">Xoa</th>
                                        </tr>
                                    </thead>
                                </table>
                                
                            </div>
                        </div>        
 <!--=========================================================================================-->                               
 <script src="index.js"></script>
 <?php include '../../includes/bot.php'?>