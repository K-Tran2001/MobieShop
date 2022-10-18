
<?php
///////////OFFICIAL//////////////////id19659798_kshop	id19659798_khoatran	localhost
$server="localhost";
$user="root";
$pass="";
$db="k-shop";
$conn=mysqli_connect($server,$user,$pass,$db);
if(!$conn){
    die("Loi ".mysqli_connect_error());
    exit();
}

//////////////OnLile/////////////

// $server="localhost";
// $user="id19659798_khoatranvan";
// $pass="Tvk160401*khoakhoa";
// $db="id19659798_shop";
// $conn=mysqli_connect($server,$user,$pass,$db);
// if(!$conn){
//     die("Loi ".mysqli_connect_error());
//     exit();
// }


/*
CREATE TABLE `favorite` (
  `id` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `productImg` varchar(50) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`id`, `title`, `price`, `productImg`, `number`) VALUES
('SP001', 'IPhone 13 Pro Max', 1199, 'http://localhost:8080/PHP-PROJECT/DA2/img/ip13prom', 0),
('SP0010', 'Sony Xperia2353565', 199, 'http://localhost:8080/PHP-PROJECT/DA2/img/iphone12', 0);



CREATE TABLE `shopping` (
  `id` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `productImg` varchar(100) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shopping`
--

INSERT INTO `shopping` (`id`, `title`, `price`, `productImg`, `number`) VALUES
('12', 'Fantech EG1', 895, 'http://localhost:8080/DA-PHP/UserPage/img/h1.jpg', 1);
*/


?>