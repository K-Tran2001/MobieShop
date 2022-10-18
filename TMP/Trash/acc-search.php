<?php
    include_once './config.php';//$conn

    if(isset($_POST['displaySend']  )){
        $key=$_POST['input'];
        $table='';
        $sql="select * from taikhoan where `username` like '{$key}%'  or `password` like '{$key}%' or `avatar` like '{%key}%'";
        $ds=mysqli_query($conn,$sql);
        while($dong=mysqli_fetch_assoc($ds)){
            $username='';
            $username=$dong['username'];
            $password=$dong['password'];
            $avatar=$dong['avatar'];
            $table.='<tr>
            <td>'.$username.'</td>
            <td> '.$password.'</td>
            <td ><img src="./img/'.$avatar.'" style="width: 50px;height: 50px;"> </td>
            <td><a onclick="getDetails(`'.$username.'`)" class="btn btn-warning">Sua</a></td>
            <td><a onclick="deleteuser(`'.$username.'`)"  class="btn btn-danger">Xoa</a></td>
        </tr>';
            
        }
        
        
        echo $table;


    }
?>