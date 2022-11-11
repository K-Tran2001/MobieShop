<link rel="stylesheet" href="../../css/bootstrap.min.css">
<!--JQUERY-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<!--JQUERY-->
<!----css3---->
<link rel="stylesheet" href="../../css/custom.css">
<link rel="stylesheet" href="../../css/msg-custom.css">
<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">




<!--google material icon-->
<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
<link rel="stylesheet" href="../../table.css">
<div class="container ">
    <div class="card-content table-responsive">
        
        <div class="row">
            <div class="col-sm-9"></div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="./" class="btn btn-primary btn-sm mb-2">Back</a>
                        <a href="./" class="btn btn-success btn-sm mb-2">Export Bill</a>
                    </div>
                </div>
                Date:<?php echo $row['DATE']?>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-4">
                Customer name:<?php echo $row['FIRST_NAME'].' '.$row['LAST_NAME']?>  <br>
                Adress:<?php echo $row['PROVINCE'].' '.$row['CITY']?> <br>
                Phone:<?php echo $row['PHONE_NUMBER']?>
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                Transaction ID:#<?php echo $transaction_id?>
            </div>
        </div>
        <div class="row m-0">
            <table class="table ">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <!--===========================-->
                    <?php
                    $sql="select * from `transaction_details` where TRANS_D_ID='$transaction_d_id'";
                    $list=mysqli_query($conn,$sql);
                    $i=0;
                    while($row=mysqli_fetch_assoc($list)){
                        $i++;
                        echo "
                            <tr>
                                <td>".$i."</td>
                                <td>".$row['PRODUCTS']."</td>
                                <td>".$row['QTY']."</td>
                                <td>".$row['PRICE']."</td>
                                <td>".$row['QTY']*$row['PRICE']."</td>
                            </tr>
                        ";
                    }
                    ?>
                    <!--===========================-->
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-sm-7"></div>
            <div class="col-sm-4 py-1">
                payment methods: <br>&emsp;&emsp;&emsp;Payment on delivery
                <hr>
                <table width="100%">
                    <tbody><tr>
                    <td class="font-weight-bold">Subtotal</td>
                    <td class="text-right">$ <?php echo $subtotal?></td>
                    </tr>
                    
                    
                    <tr>
                    <td class="font-weight-bold">Add VAT</td>
                    <td class="text-right">$<?php echo $addVAT ?></td>
                    </tr>
                    <tr>
                    <td class="font-weight-bold">Total</td>
                    <td class="font-weight-bold text-right text-primary">$ <?php echo $total?></td>
                    </tr>
                </tbody></table>
            </div>
            <div class="col-sm-1"></div>
        </div>
        
        
    </div>
</div>