<?php
////////////////////---------FETCH-VERSION1--------///////////
//     include_once './config.php';

// //Check connection was successful
 
//   $dbdata = array();

//   if($_GET['page']=='account'){
//         //Fetch 3 rows from actor table
//         $sql='select * from taikhoan';
//         $result = mysqli_query($conn,$sql);

//         //Initialize array variable
        
    
//         //Fetch into associative array
//         while ( $row = mysqli_fetch_assoc($result))  {
//           $sub_array = array();
//           $sub_array[] = $row['username'];
//           $sub_array[] = $row['password'];
//           $sub_array[] = '<img src="UserPage/img/'.$row['avatar'].'" style="width: 50px;height: 50px;">';
//           if($row['active']==0)
//             $sub_array[] ='<input type="checkbox" class"changestate"  onchange="changeState(`'.$row['username'].'`,1)">';
//           else  
//             $sub_array[] ='<input type="checkbox" class"changestate"   checked="checked" onchange="changeState(`'.$row['username'].'`,0)">';
        
//           $sub_array[] = '<a onclick="getDetails(`'.$row['username'].'`)" class="btn btn-warning">Sua</a>';
//           $sub_array[] = '<a  class="btn btn-danger delete" id="'.$row['username'].'">Xoa</a>';

//           $data[] = $sub_array;
//         }
//   }else if($_GET['page']=='product'){
//         $sql='select * from sanpham';
//         $result = mysqli_query($conn,$sql);

//         //Initialize array variable
        
    
//         //Fetch into associative array
//         while ( $row = mysqli_fetch_assoc($result))  {
//           $sub_array = array();
//           $sub_array[] = $row['maSP'];
//           $sub_array[] = $row['tenSP'];
//           $sub_array[] = '<img src="UserPage/img/'.$row['hinhAnh'].'" style="width: 50px;height: 50px;">';
//           $sub_array[] = $row['moTa'];
//           $sub_array[] = $row['gia'];
//           if($row['hienThi']==0)
//             $sub_array[] ='<input type="checkbox" style="color : orange" onchange="changeState(`'.$row['maSP'].'`,1)">';
//           else  
//             $sub_array[] ='<input type="checkbox" style="color : orange" style="color:#20c997" checked="checked" onchange="changeState(`'.$row['maSP'].'`,0)">';
          
//           $sub_array[] = '<a onclick="getDetails_view(`'.$row['maSP'].'`)" class="btn btn-info">Xem</a>';
//           $sub_array[] = '<a onclick="getDetails(`'.$row['maSP'].'`)" class="btn btn-warning">Sua</a>';
//           $sub_array[] = '<a  class="btn btn-danger delete" id="'.$row['maSP'].'">Xoa</a>';

//           $data[] = $sub_array;
//         }
    
//   }else if($_GET['page']=='supplier'){
//         $sql='select * from ncc';
//         $result = mysqli_query($conn,$sql);

//         //Initialize array variable
        
    
//         //Fetch into associative array
//         while ( $row = mysqli_fetch_assoc($result))  {
//           $sub_array = array();
//           $sub_array[] = $row['maCty'];
//           $sub_array[] = $row['tenCty'];
          
//           $sub_array[] = $row['tinh'];
//           $sub_array[] = $row['dienThoai'];
          
//           $sub_array[] = '<a onclick="getDetails(`'.$row['maCty'].'`)" class="btn btn-warning">Sua</a>';
//           $sub_array[] = '<a  class="btn btn-danger delete" id="'.$row['maCty'].'">Xoa</a>';

//           $data[] = $sub_array;
//         }
    
//   }else if($_GET['page']=='customer'){
//       $sql='select * from khachhang';
//         $result = mysqli_query($conn,$sql);

//         //Initialize array variable
        
    
//         //Fetch into associative array
//         while ( $row = mysqli_fetch_assoc($result))  {
//           $sub_array = array();
//           $sub_array[] = $row['maKH'];
//           $sub_array[] = $row['tenKH'];
//           $sub_array[] = $row['ngaySinh'];
//           $sub_array[] = $row['diaChi'];
          
//           $sub_array[] = $row['dienThoai'];
//           $sub_array[] = $row['gioiTinh'];
          
//           $sub_array[] = '<a onclick="getDetails(`'.$row['maKH'].'`)" class="btn btn-warning">Sua</a>';
//           $sub_array[] = '<a  class="btn btn-danger delete" id="'.$row['maKH'].'">Xoa</a>';

//           $data[] = $sub_array;
//         }

    
//   }else if($_GET['page']=='category'){
//     $sql='select * from category';
//     $result = mysqli_query($conn,$sql);

//     //Initialize array variable
    

//     //Fetch into associative array
//     while ( $row = mysqli_fetch_assoc($result))  {
//       $sub_array = array();
//       $sub_array[] = $row['CATEGORY_ID'];
//       $sub_array[] = $row['CNAME'];

//       $sub_array[] = '<a onclick="getDetails(`'.$row['CATEGORY_ID'].'`)" class="btn btn-warning">Sua</a>';
//       $sub_array[] = '<a  class="btn btn-danger delete" id="'.$row['CATEGORY_ID'].'">Xoa</a>';

//       $data[] = $sub_array;
//     }
//   }else if($_GET['page']=='location'){
//     $sql='select * from location';
//         $result = mysqli_query($conn,$sql);

//         //Initialize array variable
        
    
//         //Fetch into associative array
//         while ( $row = mysqli_fetch_assoc($result))  {
//           $sub_array = array();
//           $sub_array[] = $row['LOCATION_ID'];
//           $sub_array[] = $row['PROVINCE'];
          
//           $sub_array[] = $row['CITY'];
          
//           $sub_array[] = '<a onclick="getDetails(`'.$row['LOCATION_ID'].'`)" class="btn btn-warning">Sua</a>';
//           $sub_array[] = '<a  class="btn btn-danger delete" id="'.$row['LOCATION_ID'].'">Xoa</a>';

//           $data[] = $sub_array;
//         }
//   }else if($_GET['page']=='type'){
//     $sql='select * from `type`';
//         $result = mysqli_query($conn,$sql);

//         //Initialize array variable
        
    
//         //Fetch into associative array
//         while ( $row = mysqli_fetch_assoc($result))  {
//           $sub_array = array();
//           $sub_array[] = $row['TYPE_ID'];
//           $sub_array[] = $row['TYPE'];
          
          
//           $sub_array[] = '<a onclick="getDetails(`'.$row['TYPE_ID'].'`)" class="btn btn-warning">Sua</a>';
//           $sub_array[] = '<a  class="btn btn-danger delete" id="'.$row['TYPE_ID'].'">Xoa</a>';

//           $data[] = $sub_array;
//         }
//   }else if($_GET['page']=='banner'){
    
//   }else if($_GET['page']=='blog'){
    
//   }



//         $output=array(
//           'data'=>$data,
//         );
// //Print array in JSON format
//  echo json_encode($output);

////////////////////---------FETCH-VERSION2--------///////////

include './config2.php';

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
          $sub_array[] = $row['USERNAME'];
          $sub_array[] = $row['PASSWORD'];
          $sub_array[] = '<img src="UserPage/img/'.$row['IMG'].'" style="width: 50px;height: 50px;">';
          if($row['STATE']==0)
            $sub_array[] ='<input type="checkbox" class"changestate"  onchange="changeState(`'.$row['ID'].'`,1)">';
          else  
            $sub_array[] ='<input type="checkbox" class"changestate"   checked="checked" onchange="changeState(`'.$row['ID'].'`,0)">';
        
          $sub_array[] = '<a onclick="getDetails(`'.$row['ID'].'`)" class="btn btn-warning">Update</a>';
          $sub_array[] = '<a  class="btn btn-danger delete" id="'.$row['ID'].'">Delete</a>';

          $data[] = $sub_array;
        }
  }else if($_GET['page']=='product'){
        $sql='select * from `product`';
        $result = mysqli_query($conn,$sql);
        //Initialize array variable
        //Fetch into associative array
        while ( $row = mysqli_fetch_assoc($result))  {
          $sub_array = array();
          $sub_array[] = $row['PRODUCT_CODE'];
          $sub_array[] = $row['NAME'];
          $sub_array[] = '<img src="UserPage/img/'.$row['IMG'].'" style="width: 50px;height: 50px;">';
          $sub_array[] = $row['DESCRIPTION'];
          $sub_array[] = $row['PRICE'];
          if($row['STATE']==0)
            $sub_array[] ='<input type="checkbox" style="color : orange" onchange="changeState(`'.$row['PRODUCT_ID'].'`,1)">';
          else  
            $sub_array[] ='<input type="checkbox" style="color : orange" style="color:#20c997" checked="checked" onchange="changeState(`'.$row['PRODUCT_ID'].'`,0)">';
          
          $sub_array[] = '<a onclick="getDetails_view(`'.$row['PRODUCT_ID'].'`)" class="btn btn-info">View</a>';
          $sub_array[] = '<a onclick="getDetails(`'.$row['PRODUCT_ID'].'`)" class="btn btn-warning">Update</a>';
          $sub_array[] = '<a  class="btn btn-danger delete" id="'.$row['PRODUCT_ID'].'">Delete</a>';

          $data[] = $sub_array;
        }
    
  }else if($_GET['page']=='supplier'){
        $sql='select * from supplier';
        $result = mysqli_query($conn,$sql);

        //Initialize array variable
        
    
        //Fetch into associative array
        while ( $row = mysqli_fetch_assoc($result))  {
          $sub_array = array();
          $sub_array[] = $row['COMPANY_NAME'];
          $sub_array[] = $row['LOCATION_ID'];
          
          $sub_array[] = $row['PHONE_NUMBER'];
          
          
          $sub_array[] = '<a onclick="getDetails(`'.$row['SUPPLIER_ID'].'`)" class="btn btn-warning">Update</a>';
          $sub_array[] = '<a  class="btn btn-danger delete" id="'.$row['SUPPLIER_ID'].'">Delete</a>';

          $data[] = $sub_array;
        }
    
  }else if($_GET['page']=='customer'){
      $sql='select * from customer';
        $result = mysqli_query($conn,$sql);

        //Initialize array variable
        
    
        //Fetch into associative array
        while ( $row = mysqli_fetch_assoc($result))  {
          $sub_array = array();
          $sub_array[] = $row['FIRST_NAME'];
          $sub_array[] = $row['LAST_NAME'];
          $sub_array[] = $row['PHONE_NUMBER'];
          $sub_array[] = $row['LOCATION_ID'];

          $sub_array[] = '<a onclick="getDetails(`'.$row['CUST_ID'].'`)" class="btn btn-warning">Update</a>';
          $sub_array[] = '<a  class="btn btn-danger delete" id="'.$row['CUST_ID'].'">Delete</a>';

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
  }else if($_GET['page']=='transaction'){
    $sql='select TRANS_ID,FIRST_NAME,LAST_NAME,NUMOFITEMS,TRANS_D_ID  
    from `transaction` trans inner join `customer` cust on trans.CUST_ID=cust.CUST_ID';
        $result = mysqli_query($conn,$sql);

        //Initialize array variable
        
    
        //Fetch into associative array
        while ( $row = mysqli_fetch_assoc($result))  {
          $sub_array = array();
          $sub_array[] = "#".$row['TRANS_D_ID'];
          $sub_array[] = $row['FIRST_NAME']." ".$row['LAST_NAME'];
          $sub_array[] = $row['NUMOFITEMS'];
          
          
          $sub_array[] = '<a onclick="viewDetail(`'.$row['TRANS_ID'].'`,`'.$row['TRANS_D_ID'].'`)" class="btn btn-warning">View</a>';
          

          $data[] = $sub_array;
        }
  }else if($_GET['page']=='banner'){
    $sql='select * from `banner`';
        $result = mysqli_query($conn,$sql);

        //Initialize array variable
        
    
        //Fetch into associative array
        while ( $row = mysqli_fetch_assoc($result))  {
          $sub_array = array();
          
          $sub_array[] = '<img src="UserPage/img/'.$row['IMG'].'" style="width: 250px;height: 250px;">';
          if($row['STATE']==0)
            $sub_array[] ='<input type="checkbox" class"changestate"  onchange="changeState(`'.$row['BANNER_ID'].'`,1)">';
          else  
            $sub_array[] ='<input type="checkbox" class"changestate"   checked="checked" onchange="changeState(`'.$row['BANNER_ID'].'`,0)">';
          
          $sub_array[] = '<a onclick="getDetails(`'.$row['BANNER_ID'].'`)" class="btn btn-warning">Update</a>';
          $sub_array[] = '<a  class="btn btn-danger delete" id="'.$row['BANNER_ID'].'">Delete</a>';
          

          $data[] = $sub_array;
        }
  }else if($_GET['page']=='blog'){
    $sql='select * from `blog`';
        $result = mysqli_query($conn,$sql);

        //Initialize array variable
        
    
        //Fetch into associative array
        while ( $row = mysqli_fetch_assoc($result))  {
          $sub_array = array();
          $sub_array[] = '<img src="UserPage/img/'.$row['IMG'].'" style="width: 250px;height: 250px;">';
          $sub_array[] = $row['AUTHOR'];
          $sub_array[] = $row['DATE'];
          if($row['STATE']==0)
            $sub_array[] ='<input type="checkbox" class"changestate"  onchange="changeState(`'.$row['BLOG_ID'].'`,1)">';
          else  
            $sub_array[] ='<input type="checkbox" class"changestate"   checked="checked" onchange="changeState(`'.$row['BLOG_ID'].'`,0)">';
          
          $sub_array[] = '<a onclick="getDetails(`'.$row['BLOG_ID'].'`)" class="btn btn-warning">Update</a>';
          $sub_array[] = '<a  class="btn btn-danger delete" id="'.$row['BLOG_ID'].'">Delete</a>';
          

          $data[] = $sub_array;
        }
  }
  $output=array(
    'data'=>$data,
  );
//Print array in JSON format
 echo json_encode($output);
 
?>