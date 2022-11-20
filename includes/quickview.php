<?php
    include '../../config2.php';
    $orders=0;
    $revenue=0;
    $follow=0;
    /////
    $sql="select COUNT(*) as COUNT from transaction ";
    $item=mysqli_query($conn,$sql);
    $response=array();
    $row=mysqli_fetch_assoc($item);
    $orders=$row['COUNT'];
    /////
    $sql="select sum(GRANDTOTAL) as SUM from transaction ";
    $item=mysqli_query($conn,$sql);
    $response=array();
    $row=mysqli_fetch_assoc($item);
    $revenue=$row['SUM'];
    /////
    $sql="select COUNT(*) as COUNT from users ";
    $item=mysqli_query($conn,$sql);
    $response=array();
    $row=mysqli_fetch_assoc($item);
    $follow=$row['COUNT'];
?>
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header">
                <div class="icon icon-warning">
                    <span class="material-icons">equalizer</span>
                </div>
            </div>
            <div class="card-content">
                <p class="category"><strong>Visits</strong></p>
                <h3 class="card-title">340</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons text-info">info</i>
                    <a href="#pablo">See detailed report</a>
                </div>
            </div>
            
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header">
                <div class="icon icon-rose">
                    <span class="material-icons">shopping_cart</span>

                </div>
            </div>
            <div class="card-content">
                <p class="category"><strong>Orders</strong></p>
                <h3 class="card-title"><?php echo $orders ?></h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">local_offer</i> Product-wise sales
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header">
                <div class="icon icon-success">
                    <span class="material-icons">
                    attach_money
                    </span>

                </div>
            </div>
            <div class="card-content">
                <p class="category"><strong>Revenue</strong></p>
                <h3 class="card-title">$<?php echo $revenue ?></h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">date_range</i> Weekly sales
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header">
                <div class="icon icon-info">

                    <span class="material-icons">
                    follow_the_signs
                    </span>
                </div>
            </div>
            <div class="card-content">
                <p class="category"><strong>Followers</strong></p>
                <h3 class="card-title">+<?php echo $follow ?></h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                </div>
            </div>
        </div>
    </div>
</div>