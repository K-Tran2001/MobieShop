<?php
    session_start();
    include 'config2.php';


    if(isset($_POST['username'])&&isset($_POST['password'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $password=md5($password,false);


        //Add session
        $sql='select * from `users` u inner join `customer` c on u.CUSTOMER_ID= c.CUST_ID inner join `location` l on c.LOCATION_ID=l.LOCATION_ID';
        $list=mysqli_query($conn,$sql);
        $res=0;
        $type_id=0;
        while($row=mysqli_fetch_assoc($list)){
            if($row['USERNAME']==$username&&$row['PASSWORD']==$password){
                $type_id=$row['TYPE_ID'];
                $session_array=array(
                    'ID'=>$row['ID'],
                    'USERNAME'=>$row['USERNAME'],
                    'IMG'=>$row['IMG'],
                    'PASSWORD'=>$row['PASSWORD'],
                    'CUST_ID'=>$row['CUSTOMER_ID'],
                    'FIRST_NAME'=>$row['FIRST_NAME'],
                    'LAST_NAME'=>$row['LAST_NAME'],
                    'PHONE_NUMBER'=>$row['PHONE_NUMBER'],
                    'PROVINCE'=>$row['PROVINCE'],
                    'CITY'=>$row['CITY'],
                    
                    
                );
                //$_SESSION['user'][]=$session_array;
                //$_SESSION['admin'][]=$session_array;

                if($type_id==1){
                    $_SESSION['admin'][]=$session_array;
                    $res=1;
                    echo $res;

                }else{
                    $_SESSION['user'][]=$session_array;
                    $res=2;
                    echo $res;
                    //session arr => list shopping cart or shopping heart
                    //session profile

                }
                break;

            }
            echo $res;
        }




        // if($emai=='ad@gmail.com'&&$password=='123'){
        //     echo "
        //     <script>

        //         window.location.href='index.php';

        //     </script>

        //     ";
        // }
        // if($emai=='user@gmail.com'&&$pswd=='123'){
        //     echo "
        //     <script>

        //         window.location.href='./PHP-PROJECT-COMPONENT/index.php';

        //     </script>

        //     ";
        // }

    }


?>