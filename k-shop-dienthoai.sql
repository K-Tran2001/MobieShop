-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 20, 2022 lúc 06:55 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `k-shop-dienthoai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `BANNER_ID` int(11) NOT NULL,
  `IMG` varchar(100) NOT NULL,
  `PRODUCT_ID` int(11) NOT NULL,
  `STATE` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`BANNER_ID`, `IMG`, `PRODUCT_ID`, `STATE`) VALUES
(3, 'banner-1.jpg', 31, 0),
(4, 'BANNER-5.png', 31, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `BLOG_ID` int(11) NOT NULL,
  `IMG` varchar(100) NOT NULL,
  `CATEGORY_ID` int(11) NOT NULL,
  `TITLE` longtext NOT NULL,
  `AUTHOR` varchar(100) NOT NULL,
  `DATE` date NOT NULL,
  `STATE` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`BLOG_ID`, `IMG`, `CATEGORY_ID`, `TITLE`, `AUTHOR`, `DATE`, `STATE`) VALUES
(1, 'th.jpg', 1, 'Demo', 'Khoa tran', '2022-11-02', 1),
(2, 'hinh-anh-ong-gia-Noel-cuoi-tuoi-cung-chu-tuan-loc-removebg-preview.png', 0, 'kkkkkkkkkk', 'khoa', '2022-11-22', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `CATEGORY_ID` int(11) NOT NULL,
  `CNAME` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`CATEGORY_ID`, `CNAME`) VALUES
(17, 'Samsung'),
(18, 'Apple'),
(19, 'Oppo'),
(24, 'Vivo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `CUST_ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(50) DEFAULT NULL,
  `LAST_NAME` varchar(50) DEFAULT NULL,
  `PHONE_NUMBER` varchar(11) DEFAULT NULL,
  `LOCATION_ID` int(11) NOT NULL DEFAULT 111
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`CUST_ID`, `FIRST_NAME`, `LAST_NAME`, `PHONE_NUMBER`, `LOCATION_ID`) VALUES
(1, 'ADMINSTRATOR', '', '567', 111),
(9, 'Hailee', 'Steinfield', '09394566543', 111),
(11, 'A Walk in Customer', NULL, NULL, 111),
(14, 'Chuchay', 'Jusay', '09781633451', 111),
(15, 'Kimbert', 'Duyag', '09956288467', 111),
(16, 'Dieqcohr', 'Rufino', '09891344576', 111),
(20, 'Tran', 'Van Khoa', '123', 164);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `favorite`
--

CREATE TABLE `favorite` (
  `id` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `productImg` varchar(50) NOT NULL,
  `cust_id` int(11) NOT NULL DEFAULT 20
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `favorite`
--

INSERT INTO `favorite` (`id`, `title`, `price`, `productImg`, `cust_id`) VALUES
('12', 'Fantech EG1', 895, 'http://localhost:8080/DA-PHP/UserPage/img/h1.jpg', 20),
('12', 'Fantech EG1', 895, 'http://localhost:8888/DA-PHP%20Git/UserPage/img/h1', 14),
('1', 'Lenovo Ideapad 20059', 999, 'http://localhost:8888/DA-PHP%20Git/UserPage/img/sz', 14),
('31', 'Demo 2', 19999, 'http://localhost:8888/DA-PHP%20Git/UserPage/img/Vi', 14);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `location`
--

CREATE TABLE `location` (
  `LOCATION_ID` int(11) NOT NULL,
  `PROVINCE` varchar(100) DEFAULT NULL,
  `CITY` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `location`
--

INSERT INTO `location` (`LOCATION_ID`, `PROVINCE`, `CITY`) VALUES
(111, 'Negros Occidental ', 'Bacolod City'),
(112, 'Negros Occidental', 'Bacolod City'),
(113, 'Negros Occidental', 'Binalbagan'),
(114, 'Negros Occidental', 'Himamaylan'),
(115, 'Negros Oriental', 'Dumaguette City'),
(116, 'Negros Occidental', 'Isabella'),
(126, 'Negros Occidental', 'Binalbagan'),
(130, 'Cebu', 'Bogo City'),
(131, 'Negros Occidental', 'Himamaylan'),
(132, 'Negros', 'Jupiter'),
(133, 'Aincrad', 'Floor 91'),
(134, 'negros', 'binalbagan'),
(135, 'hehe', 'tehee'),
(136, 'PLANET YEKOK', 'KOKEY'),
(137, 'Camiguin', 'Catarman'),
(138, 'Camiguin', 'Catarman'),
(139, 'Negros Occidental', 'Binalbagan'),
(140, 'Batangas', 'Lemery'),
(141, 'Capiz', 'Panay'),
(142, 'Camarines Norte', 'Labo'),
(143, 'Camarines Norte', 'Labo'),
(144, 'Camarines Norte', 'Labo'),
(145, 'Camarines Norte', 'Labo'),
(146, 'Capiz', 'Pilar'),
(147, 'Negros Occidental', 'Moises Padilla'),
(148, 'a', 'a'),
(149, '1', '1'),
(150, 'Negros Occidental', 'Himamaylan'),
(151, 'Masbate', 'Mandaon'),
(152, 'Aklanas', 'Madalagsasa'),
(153, 'Batangas', 'Mabini'),
(154, 'Bataan', 'Morong'),
(155, 'Capiz', 'Pillar'),
(156, 'Negros Occidental', 'Bacolod'),
(157, 'Camarines Norte', 'Labo'),
(158, 'Negros Occidental', 'Binalbagan'),
(159, 'nskngk', 'sfgsgs'),
(160, 'fdbhdfhgd', 'dgdhgdhd'),
(161, 'lmldmsg', 'sfsdojfo'),
(163, 'fgsgdg', 'dhgdh'),
(164, 'Cho Moi', 'An Giang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `PRODUCT_ID` int(11) NOT NULL,
  `PRODUCT_CODE` varchar(20) NOT NULL,
  `NAME` varchar(50) DEFAULT NULL,
  `IMG` varchar(100) NOT NULL DEFAULT 'h1.jpg',
  `DESCRIPTION` longtext NOT NULL,
  `QTY_STOCK` int(50) DEFAULT NULL,
  `ON_HAND` int(250) NOT NULL,
  `PRICE` int(50) DEFAULT NULL,
  `CATEGORY_ID` int(11) DEFAULT NULL,
  `SUPPLIER_ID` int(11) DEFAULT NULL,
  `DATE_STOCK_IN` date NOT NULL,
  `STATE` int(1) NOT NULL DEFAULT 0,
  `VIEW_NUMBER` int(5) NOT NULL DEFAULT 0,
  `BUY_NUMBER` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`PRODUCT_ID`, `PRODUCT_CODE`, `NAME`, `IMG`, `DESCRIPTION`, `QTY_STOCK`, `ON_HAND`, `PRICE`, `CATEGORY_ID`, `SUPPLIER_ID`, `DATE_STOCK_IN`, `STATE`, `VIEW_NUMBER`, `BUY_NUMBER`) VALUES
(1, '0000111', 'Vivo V25', 'vivo-v25-5g-vang-thumb-1-1-600x600.png', 'Vivo V25 possesses very youthful and modern colors, not only bringing more choices to users, but also giving a fresh and dynamic look when holding and using.\n\nA unique feature on this version is the ability to change colors from light to darker tones when', 5, 1, 399, 24, 15, '2022-10-13', 1, 0, 0),
(9, '20191002', 'Vivo X80', 'vivo-x80-xanh-thumb-600x600.png', 'The first impression when I got my hands on the Vivo X80 is that the machine has a relatively large overall size, in my opinion it is approximately the length of a hand.\n\nLarge machine size - Vivo X80\n\nWith such a large size can make it difficult to perform tasks that open the toolbar by swiping from the top edge, I feel a bit stuck in one-handed use situations. For women, users should use the device with two hands to provide a better using experience.', 1, 1, 749, 24, 11, '2019-03-04', 1, 0, 0),
(10, '20191004', 'Samsung Galaxy ZFold4 5G', 'samsung-galaxy-z-fold4-kem-512gb-600x600.png', 'Galaxy Z Fold4 (2022) launched with an almost unchanged appearance when compared to the  Galaxy Z Fold3 , if you just look at it, you will have a hard time distinguishing these two products. The device still uses a durable Armor Aluminum frame, the secondary screen glass is Corning Gorilla Glass Victus +, the main screen glass is Ultra Thin Glass.\n\nMake a difference with the folding and unfolding screen - Samsung Galaxy Z Fold4 256GB\n\nAnd this is also the most durable folding phone in the smartphone world when combined with IPX8 water resistance, capable of being immersed in fresh water at a depth of up to 1.5 meters for up to 30 minutes* (the device is not capable of being submerged in water). dust resistance).', 1, 1, 1449, 17, 13, '2019-03-06', 0, 0, 0),
(24, '20191001', 'Samsung Galaxy ZFlip4', 'samsung-galaxy-z-flip4-5g-256gb-thumb-vang-600x600.png', 'Samsung Galaxy Z Flip4 uses a square design language when shaped with flat beveled edges and sides. With a shiny frame and youthful colors on the back, you can stand out more in crowded places when holding it in your hand.\n\nSquare appearance - Samsung Galaxy Z Flip4 512GB - EXCLUSIVE\n\nIn this version of Galaxy Z Flip4 there will be 4 different color versions to help users freely choose, because of its neutral color tone, this is considered a product line suitable for all ages or any. whatever gender.\n\nGalaxy Z Flip4 is one of the most durable folding smartphones ever thanks to the back and screen both equipped with high-grade Corning Gorilla Glass Victus+. This is considered an extremely durable screen that helps users minimize damage in the event of accidental drops of the device.\n\n', 1, 1, 999, 17, 12, '2019-03-20', 0, 0, 0),
(29, '2425400', 'Oppo Reno 8', 'oppo-reno8-4g-thumb-vang-600x600.png', 'My first impression when in hand with the OPPO Reno8 Z 5G is that the device has a very beautiful design, from the color to the way it is shaped, I am satisfied. In this launch, the device has 2 color versions that are copper gold and black, in my hand this is the copper gold version.', 1, 1, 549, 19, 18, '2022-09-15', 1, 0, 0),
(31, '0000000', 'Iphone 14 Pro Max', 'iphone-14-pro-max-den-thumb-600x600.png', 'The product has an eye-catching appearance thanks to the square shape that catches the trend similar to the  iPhone 13 series generation , this is considered a very successful design on previous generations before creating a global fever in style. phone l', 5, 1, 1499, 18, 11, '2022-10-15', 1, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shopping`
--

CREATE TABLE `shopping` (
  `shopping_id` int(11) NOT NULL,
  `id` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `productImg` varchar(100) NOT NULL,
  `number` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL DEFAULT 20
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `shopping`
--

INSERT INTO `shopping` (`shopping_id`, `id`, `title`, `price`, `productImg`, `number`, `cust_id`) VALUES
(14, '24', 'Lenovo Ideapad 20059', 32999, 'http://localhost:8888/DA-PHP%20Git/UserPage/img/h1.jpg', 2, 14),
(16, '30', 'gsdgdgd', 999, 'http://localhost:8888/DA-PHP%20Git/UserPage/img/tainghe.jpg', 1, 14);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `supplier`
--

CREATE TABLE `supplier` (
  `SUPPLIER_ID` int(11) NOT NULL,
  `COMPANY_NAME` varchar(50) DEFAULT NULL,
  `LOCATION_ID` int(11) NOT NULL,
  `PHONE_NUMBER` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `supplier`
--

INSERT INTO `supplier` (`SUPPLIER_ID`, `COMPANY_NAME`, `LOCATION_ID`, `PHONE_NUMBER`) VALUES
(11, 'HoangHa Mobie', 114, '09457488521'),
(12, 'FPT Store', 115, '0963587741'),
(13, 'Razer Co.', 111, '09587855685'),
(15, 'Strategic Technology Co.', 116, '09124033805'),
(18, 'CellPhoneS', 114, '1234232412');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transaction`
--

CREATE TABLE `transaction` (
  `TRANS_ID` int(50) NOT NULL,
  `CUST_ID` int(11) DEFAULT NULL,
  `NUMOFITEMS` varchar(250) NOT NULL,
  `GRANDTOTAL` varchar(250) NOT NULL,
  `DATE` varchar(50) NOT NULL,
  `TRANS_D_ID` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `transaction`
--

INSERT INTO `transaction` (`TRANS_ID`, `CUST_ID`, `NUMOFITEMS`, `GRANDTOTAL`, `DATE`, `TRANS_D_ID`) VALUES
(3, 16, '3', '456,982.00', '2019-03-18', '0318160336'),
(4, 11, '2', '1,967.00', '2019-03-18', '0318160622'),
(5, 14, '1', '550.00', '2019-03-18', '0318170309'),
(6, 15, '1', '77,850.00', '2019-03-18', '0318170352'),
(7, 16, '1', '1,718.00', '2019-03-18', '0318170511'),
(8, 16, '1', '1,718.00', '2019-03-18', '0318170524'),
(9, 14, '1', '1,718.00', '2019-03-18', '0318170551'),
(10, 11, '1', '289.00', '2019-03-18', '0318170624'),
(11, 9, '2', '1,148.00', '2019-03-18', '0318170825'),
(12, 9, '1', '5,500.00', '2019-03-18 19:40 pm', '0318194016'),
(13, 14, '1', '33894', '2022-10', '20221113-121226'),
(14, 14, '1', '33894', '2022-10', '20221113-122139'),
(15, 14, '2', '19999', '2022-10', '20221113-125519');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transaction_details`
--

CREATE TABLE `transaction_details` (
  `ID` int(11) NOT NULL,
  `TRANS_D_ID` varchar(250) NOT NULL,
  `PRODUCTS` varchar(250) NOT NULL,
  `QTY` varchar(250) NOT NULL,
  `PRICE` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `transaction_details`
--

INSERT INTO `transaction_details` (`ID`, `TRANS_D_ID`, `PRODUCTS`, `QTY`, `PRICE`) VALUES
(7, '0318160336', 'Lenovo ideapad 20059', '2', '32999'),
(8, '0318160336', 'Predator Helios 300 Gaming Laptop', '5', '77850'),
(9, '0318160336', 'A4tech OP-720', '6', '289'),
(10, '0318160622', 'Newmen E120', '2', '550'),
(11, '0318160622', 'A4tech OP-720', '3', '289'),
(12, '0318170309', 'Newmen E120', '1', '550'),
(13, '0318170352', 'Predator Helios 300 Gaming Laptop', '1', '77850'),
(14, '0318170511', 'Fantech EG1', '2', '859'),
(15, '0318170524', 'Fantech EG1', '2', '859'),
(16, '0318170551', 'Fantech EG1', '2', '859'),
(17, '0318170624', 'A4tech OP-720', '1', '289'),
(18, '0318170825', 'A4tech OP-720', '1', '289'),
(19, '0318170825', 'Fantech EG1', '1', '859'),
(20, '0318194016', 'Newmen E120', '10', '550'),
(21, '20221113-115542', 'Lenovo Ideapad 20059', '1', '999'),
(22, '20221113-115542', 'Fantech EG1', '1', '895'),
(23, '20221113-115542', 'Gsdgdgd', '1', '999'),
(24, '20221113-115950', 'Demo 2', '1', '19999'),
(25, '20221113-115950', 'Lenovo Ideapad 20059', '1', '999'),
(26, '20221113-115950', 'Fantech EG1', '1', '895'),
(27, '20221113-115950', 'Lenovo Ideapad 20059', '1', '32999'),
(28, '20221113-120804', 'Lenovo Ideapad 20059', '1', '32999'),
(29, '20221113-120804', 'Fantech EG1', '1', '895'),
(30, '20221113-121226', 'Lenovo Ideapad 20059', '1', '32999'),
(31, '20221113-121226', 'Fantech EG1', '1', '895'),
(32, '20221113-122139', 'Lenovo Ideapad 20059', '1', '32999'),
(33, '20221113-122139', 'Fantech EG1', '1', '895'),
(34, '20221113-125519', 'Demo 2', '2', '19999');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type`
--

CREATE TABLE `type` (
  `TYPE_ID` int(11) NOT NULL,
  `TYPE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `type`
--

INSERT INTO `type` (`TYPE_ID`, `TYPE`) VALUES
(1, 'Admin'),
(2, 'User'),
(7, 'Trial');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_user`
--

CREATE TABLE `type_user` (
  `type_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `type_user`
--

INSERT INTO `type_user` (`type_id`, `type`) VALUES
(1, 'AdminStator'),
(2, 'User'),
(4, 'oTher'),
(5, 'fsgdsg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `CUSTOMER_ID` int(11) DEFAULT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `TYPE_ID` int(11) DEFAULT NULL,
  `IMG` varchar(100) NOT NULL DEFAULT 'h1.jpg',
  `STATE` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`ID`, `CUSTOMER_ID`, `USERNAME`, `PASSWORD`, `TYPE_ID`, `IMG`, `STATE`) VALUES
(1, 1, 'admin', '202cb962ac59075b964b07152d234b70', 1, 'h1.jpg', 0),
(10, 20, 'khoa', 'd41d8cd98f00b204e9800998ecf8427e', 2, 'h1.jpg', 1),
(12, 9, 'khoa@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 7, 'ipx.jpg', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`BANNER_ID`),
  ADD KEY `PRODUCT_ID` (`PRODUCT_ID`);

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`BLOG_ID`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CATEGORY_ID`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CUST_ID`),
  ADD KEY `LOCATION_ID` (`LOCATION_ID`);

--
-- Chỉ mục cho bảng `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`LOCATION_ID`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PRODUCT_ID`),
  ADD KEY `CATEGORY_ID` (`CATEGORY_ID`),
  ADD KEY `SUPPLIER_ID` (`SUPPLIER_ID`);

--
-- Chỉ mục cho bảng `shopping`
--
ALTER TABLE `shopping`
  ADD PRIMARY KEY (`shopping_id`);

--
-- Chỉ mục cho bảng `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`SUPPLIER_ID`),
  ADD KEY `LOCATION_ID` (`LOCATION_ID`);

--
-- Chỉ mục cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`TRANS_ID`),
  ADD KEY `TRANS_DETAIL_ID` (`TRANS_D_ID`),
  ADD KEY `CUST_ID` (`CUST_ID`);

--
-- Chỉ mục cho bảng `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TRANS_D_ID` (`TRANS_D_ID`) USING BTREE;

--
-- Chỉ mục cho bảng `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`TYPE_ID`);

--
-- Chỉ mục cho bảng `type_user`
--
ALTER TABLE `type_user`
  ADD PRIMARY KEY (`type_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TYPE_ID` (`TYPE_ID`),
  ADD KEY `EMPLOYEE_ID` (`CUSTOMER_ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `BANNER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `BLOG_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `CATEGORY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `CUST_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `location`
--
ALTER TABLE `location`
  MODIFY `LOCATION_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `PRODUCT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `shopping`
--
ALTER TABLE `shopping`
  MODIFY `shopping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `supplier`
--
ALTER TABLE `supplier`
  MODIFY `SUPPLIER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `transaction`
--
ALTER TABLE `transaction`
  MODIFY `TRANS_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `type`
--
ALTER TABLE `type`
  MODIFY `TYPE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `type_user`
--
ALTER TABLE `type_user`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `banner`
--
ALTER TABLE `banner`
  ADD CONSTRAINT `banner_ibfk_1` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `product` (`PRODUCT_ID`);

--
-- Các ràng buộc cho bảng `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`LOCATION_ID`) REFERENCES `location` (`LOCATION_ID`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`CATEGORY_ID`) REFERENCES `category` (`CATEGORY_ID`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`SUPPLIER_ID`) REFERENCES `supplier` (`SUPPLIER_ID`);

--
-- Các ràng buộc cho bảng `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `supplier_ibfk_1` FOREIGN KEY (`LOCATION_ID`) REFERENCES `location` (`LOCATION_ID`);

--
-- Các ràng buộc cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_3` FOREIGN KEY (`CUST_ID`) REFERENCES `customer` (`CUST_ID`),
  ADD CONSTRAINT `transaction_ibfk_4` FOREIGN KEY (`TRANS_D_ID`) REFERENCES `transaction_details` (`TRANS_D_ID`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk-user-cus` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `customer` (`CUST_ID`),
  ADD CONSTRAINT `fk-user-type` FOREIGN KEY (`TYPE_ID`) REFERENCES `type` (`TYPE_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
