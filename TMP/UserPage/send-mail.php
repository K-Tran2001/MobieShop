
<?php
    use PHPMailer\PHPMailer\PHPMailer;

    require './Mailer/PHPMailer.php';
    require './Mailer/SMTP.php';
    require './Mailer/Exception.php';

    include '../config.php';
   
    $email_content='';
    $total=$_POST['total'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $sql='select * from `giohang`';
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
        <p>Voucher: -15000</p><br>
        <p>Ship: 30000</p><br>
        <p>Tong cong: ".($total+15000)." </p><br>
        <hr>
        <p>Quí khách có hài lòng với dịch vụ của bên SHOP?</p>

    </div>
    </div>

    </div>
    ";
    

    $mail= new PHPMailer(true);
    echo "Hello";
    $mail->isSMTP();            
    //Set SMTP host name                          
    $mail->Host = "smtp.gmail.com";
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;                          
    //Provide username and password     
    $mail->Username = "tvkhoa_20th@student.agu.edu.vn";                 
    $mail->Password = "ylawcnlfaqvvxsub";                           
    //If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = "tls";                           
    //Set TCP port to connect to
    $mail->Port = 587;                                   

    $mail->From = "k-shop.67ag@gmail.com";
    $mail->FromName = "KHOA TRAN";

    $mail->addAddress("k-shop.67ag@gmail.com", "Recepient Name");

    $mail->isHTML(true);

    $mail->Subject = "Subject Text";
    $mail->Body = $header.$email_content.$footer;
    $mail->AltBody = "This is the plain text version of the email content";
    
    try {
        $mail->send();
        echo "Message has been sent successfully";
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
?>