<?php
    include_once '../includes/config.php';//$conn

    if(isset($_POST['displaySend']  )){
        $table='';
        $sql="select * from ncc";
        $ds=mysqli_query($conn,$sql);
        while($dong=mysqli_fetch_assoc($ds)){
            
            $maCty=$dong['maCty'];
            $tenCty=$dong['tenCty'];
            $tinh=$dong['tinh'];
            $dienThoai=$dong['dienThoai'];
            

            $table.='<tr>
            <td>'.$maCty.'</td>
            <td> '.$tenCty.'</td>
            <td> '.$tinh.'</td>
            <td> '.$dienThoai.'</td>
           
            
            <td><a onclick="getDetails(`'.$maCty.'`)" class="btn btn-warning">Sua</a></td>
            <td><a onclick="deletesupplier(`'.$maCty.'`)"  class="btn btn-danger">Xoa</a></td>
            </tr>';
            
        }
        
        
        echo $table;


            }
            

?>