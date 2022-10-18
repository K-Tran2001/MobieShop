<?php

    include_once './config2.php';

//Check connection was successful
 
  $dbdata = array();

  if($_GET['page']=='account'){
        //Fetch 3 rows from actor table
        $sql='select * from users';
        $result = mysqli_query($conn,$sql);

        //Initialize array variable
        
    
        //Fetch into associative array
        while ( $row = mysqli_fetch_assoc($result))  {
          $sub_array = array();
          $sub_array[] = $row['username'];
          $sub_array[] = $row['password'];
          $sub_array[] = '<img src="UserPage/img/'.$row['img'].'" style="width: 50px;height: 50px;">';
          if($row['state']==0)
            $sub_array[] ='<input type="checkbox" class"changestate"  onchange="changeState(`'.$row['username'].'`,1)">';
          else  
            $sub_array[] ='<input type="checkbox" class"changestate"   checked="checked" onchange="changeState(`'.$row['username'].'`,0)">';
        
          $sub_array[] = '<a onclick="getDetails(`'.$row['username'].'`)" class="btn btn-warning">Update</a>';
          $sub_array[] = '<a  class="btn btn-danger delete" id="'.$row['username'].'">Delete</a>';

          $data[] = $sub_array;
        }
  }else if($_GET['page']=='product'){
        $sql='select * from product';
        $result = mysqli_query($conn,$sql);

        //Initialize array variable
        
    
        //Fetch into associative array
        while ( $row = mysqli_fetch_assoc($result))  {
          $sub_array = array();
          $sub_array[] = $row['product_code'];
          $sub_array[] = $row['name'];
          $sub_array[] = '<img src="UserPage/img/'.$row['img'].'" style="width: 50px;height: 50px;">';
          $sub_array[] = $row['discription'];
          $sub_array[] = $row['price'];
          if($row['state']==0)
            $sub_array[] ='<input type="checkbox" style="color : orange" onchange="changeState(`'.$row['product_id'].'`,1)">';
          else  
            $sub_array[] ='<input type="checkbox" style="color : orange" style="color:#20c997" checked="checked" onchange="changeState(`'.$row['product_id'].'`,0)">';
          
          $sub_array[] = '<a onclick="getDetails_view(`'.$row['product_id'].'`)" class="btn btn-info">View</a>';
          $sub_array[] = '<a onclick="getDetails(`'.$row['product_id'].'`)" class="btn btn-warning">Update</a>';
          $sub_array[] = '<a  class="btn btn-danger delete" id="'.$row['product_id'].'">Delete</a>';

          $data[] = $sub_array;
        }
    
  }else if($_GET['page']=='supplier'){
        $sql='select * from supplier';
        $result = mysqli_query($conn,$sql);

        //Initialize array variable
        
    
        //Fetch into associative array
        while ( $row = mysqli_fetch_assoc($result))  {
          $sub_array = array();
          $sub_array[] = $row['company_name'];
          $sub_array[] = $row['location_id'];
          
          $sub_array[] = $row['phone_number'];
          
          
          $sub_array[] = '<a onclick="getDetails(`'.$row['supplier_id'].'`)" class="btn btn-warning">Update</a>';
          $sub_array[] = '<a  class="btn btn-danger delete" id="'.$row['supplier_id'].'">Delete</a>';

          $data[] = $sub_array;
        }
    
  }else if($_GET['page']=='customer'){
      $sql='select * from customer';
        $result = mysqli_query($conn,$sql);

        //Initialize array variable
        
    
        //Fetch into associative array
        while ( $row = mysqli_fetch_assoc($result))  {
          $sub_array = array();
          $sub_array[] = $row['first_name'];
          $sub_array[] = $row['last_name'];
          $sub_array[] = $row['phone_number'];
          $sub_array[] = $row['location_id'];

          $sub_array[] = '<a onclick="getDetails(`'.$row['cust_id'].'`)" class="btn btn-warning">Update</a>';
          $sub_array[] = '<a  class="btn btn-danger delete" id="'.$row['cust_id'].'">Delete</a>';

          $data[] = $sub_array;
        }

    
  }else if($_GET['page']=='category'){
    $sql='select * from category';
    $result = mysqli_query($conn,$sql);

    //Initialize array variable
    

    //Fetch into associative array
    while ( $row = mysqli_fetch_assoc($result))  {
      $sub_array = array();
      $sub_array[] = $row['CATEGORY_ID'];
      $sub_array[] = $row['CNAME'];

      $sub_array[] = '<a onclick="getDetails(`'.$row['CATEGORY_ID'].'`)" class="btn btn-warning">Update</a>';
      $sub_array[] = '<a  class="btn btn-danger delete" id="'.$row['CATEGORY_ID'].'">Delete</a>';

      $data[] = $sub_array;
    }
  }else if($_GET['page']=='location'){
    $sql='select * from location';
        $result = mysqli_query($conn,$sql);

        //Initialize array variable
        
    
        //Fetch into associative array
        while ( $row = mysqli_fetch_assoc($result))  {
          $sub_array = array();
          $sub_array[] = $row['LOCATION_ID'];
          $sub_array[] = $row['PROVINCE'];
          
          $sub_array[] = $row['CITY'];
          
          $sub_array[] = '<a onclick="getDetails(`'.$row['LOCATION_ID'].'`)" class="btn btn-warning">Update</a>';
          $sub_array[] = '<a  class="btn btn-danger delete" id="'.$row['LOCATION_ID'].'">Delete</a>';

          $data[] = $sub_array;
        }
  }else if($_GET['page']=='type'){
    $sql='select * from `type`';
        $result = mysqli_query($conn,$sql);

        //Initialize array variable
        
    
        //Fetch into associative array
        while ( $row = mysqli_fetch_assoc($result))  {
          $sub_array = array();
          $sub_array[] = $row['TYPE_ID'];
          $sub_array[] = $row['TYPE'];
          
          
          $sub_array[] = '<a onclick="getDetails(`'.$row['TYPE_ID'].'`)" class="btn btn-warning">Update</a>';
          $sub_array[] = '<a  class="btn btn-danger delete" id="'.$row['TYPE_ID'].'">Delete</a>';

          $data[] = $sub_array;
        }
  }else if($_GET['page']=='banner'){
    
  }else if($_GET['page']=='blog'){
    
  }
  $output=array(
    'data'=>$data,
  );
//Print array in JSON format
 echo json_encode($output);
 
?>