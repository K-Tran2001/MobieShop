<?php include '../../includes/top.php'?>
<?php include '../../forms/pro-modal.php'?>
<!--=========================================================================================-->
                        <div class="card" style="min-height: 485px;">        
                            
                            <!-- Button trigger modal -->
                            <!-- <div class="col col-md-6 text-right">
                                <button type="button" id="export_button" class="btn btn-success btn-sm">Export</button>
                            </div> -->

                            
                            <div class="card-content table-responsive">
                               
                                
                                

                                <table class="table table-hover" id="myTable">
                                    <thead class="text-primary">
                                        <tr>
                                            
                                            <th scope="col">Product Code</th>
                                            <th scope="col">Name</th>
                                            
                                            <th scope="col">Img</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">qty Stock</th>
                                            <th scope="col">On Hand</th>
                                            


                                            <th scope="col">Price</th>                               
                                            <th scope="col">Category</th>
                                            <th scope="col">Supplier</th>
                                            <th scope="col">Date Stock In</th>
                                            <th scope="col">Buy Number</th>
                                            <th scope="col">Vew Number</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include '../../config2.php';
                                            $sql="select * from product";
                                            $res=mysqli_query($conn,$sql);
                                            while($row= mysqli_fetch_assoc($res)){
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['PRODUCT_CODE']?></td>
                                                    <td><?php echo $row['NAME']?></td>
                                                    <td><?php echo $row['IMG']?></td>
                                                    <td><?php echo $row['DESCRIPTION']?></td>
                                                    <td><?php echo $row['QTY_STOCK']?></td>
                                                    <td><?php echo $row['ON_HAND']?></td>
                                                    
                                                    <td><?php echo $row['PRICE']?></td>
                                                    
                                                    <td><?php echo $row['CATEGORY_ID']?></td>
                                                    <td><?php echo $row['SUPPLIER_ID']?></td>
                                                    <td><?php echo $row['DATE_STOCK_IN']?></td>
                                                    <td><?php echo $row['BUY_NUMBER']?></td>
                                                    <td><?php echo $row['VIEW_NUMBER']?></td>
                                                </tr>
                                               
                                               
                                               <?php
                                            }
                                        
                                        ?>
                                    </tbody>
                                </table>
                                
                                
                            </div>
                        </div>        
 <!--=========================================================================================-->    
 <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
	<script>
        $(document).ready(function () {
            function html_table_to_excel(type) {
			var data =document.getElementById('myTable');
			console.log(data)
			var file = XLSX.utils.table_to_book(data, {
				sheet: "sheet1"
			});

			XLSX.write(file, {
				bookType: type,
				bookSST: true,
				type: 'base64'
			});

			XLSX.writeFile(file, 'file.' + type);
		}
        html_table_to_excel('xlsx');
        window.location.href="./"
		const export_button = document.getElementById('export_button');

		export_button.addEventListener('click', () => {
			html_table_to_excel('xlsx');
		});
        });
		
	</script>
 
<!--=========================================================================================-->  

 <?php include '../../includes/bot.php'?>