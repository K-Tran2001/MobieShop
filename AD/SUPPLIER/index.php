<?php include '../../includes/top.php'?>
<?php include '../../forms/sup-modal.php'?>
<!--=========================================================================================-->
                        <div class="card" style="min-height: 485px;">        
                            <div class="card-header card-header-text">
                                <h4 class="card-title">Accounts</h4>
                                <p class="category">Duong dan toi / back ve doashboard</p>
                            </div>
                            <!-- Button trigger modal -->

                            <div class="col col-md-6 text-right">
			<button type="button" id="export_button" class="btn btn-success btn-sm">Export</button>
		</div>
                            
                            <div class="card-content table-responsive">
                                <button type="button" class="btn btn-outline-primary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#New">ADD</button>
                                
                                

                                <table class="table table-hover" id="myTable">
                                    <thead class="text-primary">
                                        <tr>
                                            
                                            <th scope="col">COMPANY NAME</th>
                                            <th scope="col">LOCATION ID</th>
                                            <th scope="col">PHONE NUMBER</th>
                                            
                                            <th scope="col">UPDATE</th>
                                            <th scope="col">DELETE</th>
                                        </tr>
                                    </thead>
                                </table>
                                
                            </div>
                        </div>        
 <!--=========================================================================================-->                               
 <script src="index.js"></script>
 <?php include '../../includes/bot.php'?>