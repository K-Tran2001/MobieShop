<?php
        session_start();
        include '../config2.php';
        if(!empty($_SESSION['user'][0]['CUST_ID']))
            $cust_id=$_SESSION['user'][0]['CUST_ID'];
        else
            $cust_id='null';
       
        $email_content='';
        $total=$_POST['total'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $sql="SELECT * FROM `shopping` WHERE `shopping`.`cust_id`=$cust_id";
        $i=0;

        $header="
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>

        <div class='container'>
        <p>Mã đơn hàng: HSIM0075Z </p>
        <p>Họ tên người nhận:".$name." </p>
        <p>Địa chỉ:".$address." </p>
        <p>Điện thoại:".$phone."</p>
        <h1>Chi tiết đơn hàng:</h1>

            <div class='modal-dialog'>
        ";

        $list=mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($list)){
            $i++;
            $email_content.="
            <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title'>San Pham ".$i."</h5>

            </div>
            <div class='modal-body'>

                <p>Tên sản phẩm: ".$row['title']."</p>
                <p>Giá:".$row['price']." </p>
            </div>

        </div>
            ";
        }
        $footer="
            <hr>
            <div class='modal-body'>
            <p style='font-weight:boid'>Tong tien :".$total."</p><br>
            <p>Voucher: -10$</p><br>
            <p>Ship: 5$</p><br>
            <p>Tong cong: ".($total+5)." </p><br>
            <hr>
            <p>Quí khách có hài lòng với dịch vụ của bên SHOP?</p>

        </div>
        </div>

        </div>
        ";


        require "PHPMailer/src/PHPMailer.php";  //nhúng thư viện vào để dùng, sửa lại đường dẫn cho đúng nếu bạn lưu vào chỗ khác
        require "PHPMailer/src/SMTP.php"; //nhúng thư viện vào để dùng
        require 'PHPMailer/src/Exception.php'; //nhúng thư viện vào để dùng
          $mail = new PHPMailer\PHPMailer\PHPMailer(true);  //true: enables exceptions
            try {
                $mail->SMTPDebug = 2;  // 0,1,2: chế độ debug. khi mọi cấu hình đều tớt thì chỉnh lại 0 nhé
                $mail->isSMTP();  
                $mail->CharSet  = "utf-8";
                $mail->Host = 'smtp.gmail.com';  //SMTP servers
                $mail->SMTPAuth = true; // Enable authentication
                $nguoigui = 'khoatran135.246@gmail.com';
                $matkhau = 'ndygykwwxfhsxlat';
                $tennguoigui = 'K-Shop';
                $mail->Username = $nguoigui; // SMTP username
                $mail->Password = $matkhau;   // SMTP password
                $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
                $mail->Port = 465;  // port to connect to                
                $mail->setFrom($nguoigui, $tennguoigui ); 
                $to = $email;
                $to_name = $name;
                
                $mail->addAddress($to, $to_name); //mail và tên người nhận  
                $mail->isHTML(true);  // Set email format to HTML
                $mail->Subject = 'Chi tiết đơn hàng';      

                $noidungthu = $header.$email_content.$footer;


                $mail->Body = $noidungthu;
                $mail->smtpConnect( array(
                    "ssl" => array(
                        "verify_peer" => false,
                        "verify_peer_name" => false,
                        "allow_self_signed" => true
                    )
                ));
                $mail->send();
                echo 'Đã gửi mail xong';
            } catch (Exception $e) {
                echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
            }

?>