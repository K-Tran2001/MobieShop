<?php session_start();
    $cust_id=$_SESSION['user'][0]['CUST_ID'];
?>
 <?php include 'Components/top2.php'?>
    <div id="toast"></div>

    <main>
        <div class="container">
        <table class="table table-hover" id="myTable">
            <thead class="text-primary">
                <tr>
                    
                    
                    <th scope="col">Transaction number</th>
                    <th scope="col">Customer</th>
                    <th scope="col"># of Items</th>
                    <th scope="col">Action</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    include '../config2.php';
                    $sql='select TRANS_ID,FIRST_NAME,LAST_NAME,NUMOFITEMS,TRANS_D_ID  
                    from `transaction` trans inner join `customer` cust on trans.CUST_ID=cust.CUST_ID where trans.CUST_ID='.$cust_id;
                    $result = mysqli_query($conn,$sql);
                    $i=0;
                    while($row=mysqli_fetch_assoc($result)){
                        $i++;
                        echo "
                            <tr>
                                <td>#".$row['TRANS_D_ID']."</td>
                                <td>".$row['FIRST_NAME']." ".$row['LAST_NAME']."</td>
                                <td>".$row['NUMOFITEMS']."</td>
                                <td>".'<button onclick="view_trans_Detail(`'.$row['TRANS_ID'].'`,`'.$row['TRANS_D_ID'].'`)" class="btn-update">View</button>'."</td>
                            </tr>
                        ";
                    }
                    if($i==0){
                        echo "
                            <tr>
                                <td colspan='3' class='text-center'> There is no item in your shopping cart...  <a href='./index.php' >SHOPPING NOW</a> </td>
                                
                            </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
        </div>

  

    </main>
    <script>
        function view_trans_Detail(transaction_id,transaction_d_id){
            console.log(transaction_id,transaction_d_id)
            window.location.href='purchase-history-detail.php?transaction_id='+transaction_id+'&transaction_d_id='+transaction_d_id;
        }
    </script>

   <?php include 'Components/bot.php'?>