<?php require '../../../config2.php'; ?>

		<?php
		if(isset($_POST["import"])){
			$fileName = $_FILES["excel"]["name"];
			$fileExtension = explode('.', $fileName);
      		$fileExtension = strtolower(end($fileExtension));
			$newFileName = "product - ".date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;

			$targetDirectory = "uploads/" . $newFileName;
			move_uploaded_file($_FILES['excel']['tmp_name'], $targetDirectory);

			error_reporting(0);
			ini_set('display_errors', 0);

			require 'excelReader/excel_reader2.php';
			require 'excelReader/SpreadsheetReader.php';

			$reader = new SpreadsheetReader($targetDirectory);
			
			foreach($reader as $key => $row){
				//continue;
				// $name = $row[0];
				// $age = $row[1];
				// $country = $row[2];
				// mysqli_query($conn, "INSERT INTO tb_data VALUES('', '$name', '$age', '$country')");


				
				
				$product_code = $row[0];
                $name = $row[1];
                $img = $row[2];
                $description = $row[3];
                $qty_stock = $row[4];
                $on_hand = $row[5];
                $price = $row[6];
                $category_id = $row[7];
                $supplier_id = $row[8];
                $date_stock_in = $row[9];

				// $kq.=( $product_code."	".$name."	".$img."	
				// ".$description."	".$qty_stock."	".$on_hand."	".$price."	
				// ".$date_stock_in);

                $sql="INSERT INTO `product` (`PRODUCT_ID`, `PRODUCT_CODE`, `NAME`, `IMG`, `DESCRIPTION`, `QTY_STOCK`, `ON_HAND`, `PRICE`, `CATEGORY_ID`, `SUPPLIER_ID`, `DATE_STOCK_IN`, `STATE`, `VIEW_NUMBER`, `BUY_NUMBER`)
                 VALUES (NULL, '$product_code', '$name', '$img', '$description', $qty_stock, $on_hand, $price, $category_id, $supplier_id, '$date_stock_in', 0, 0, 0);";
				mysqli_query($conn,$sql);
				// print_r('jbsdf');

				//$sql="INSERT INTO `product` (`PRODUCT_ID`, `PRODUCT_CODE`, `NAME`, `IMG`, `DESCRIPTION`, `QTY_STOCK`, `ON_HAND`, `PRICE`, `CATEGORY_ID`, `SUPPLIER_ID`, `DATE_STOCK_IN`, `STATE`, `VIEW_NUMBER`, `BUY_NUMBER`)
            	//VALUES (NULL, '$emapData[1]', '$emapData[2]', '$emapData[3]', '', 1, 2, 400, 24, 15, '10/13/2022', 0, 0, 0);";
			}
		
			echo "
			<script>
			alert('Succesfully Imported');
			document.location.href = '../';
			</script>
			";
		}
		?>
	
