-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2017 at 09:04 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myecom_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'MAK', 'mylink.me@gmail.com', 'ec52ea0805621f838389c6f859168158bfbedaab4f093c6a63046383c3496fc0'),
(2, 'Ali', 'k152347@nu.edu.pk', 'f890de374a6d035a2ca69afa946da7c0aa5b5f27215e0b18d87db9ee4f4aa9f1'),
(3, 'Hammy', 'k153619@nu.edu.pk', '350dc2744a6039067fad717530c25530dd4792a59923f72b600d56f8db687670');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'Dell'),
(4, 'HTC'),
(5, 'HP'),
(6, 'Huawei'),
(7, 'Kingston'),
(8, 'Sony'),
(9, 'Transcend'),
(10, 'Microsoft'),
(11, 'ASUS'),
(12, 'Lenovo');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Laptops'),
(2, 'Mobiles'),
(3, 'Laptop Accessories'),
(4, 'Mobile Accessories'),
(5, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(4) NOT NULL,
  `cust_fname` varchar(50) NOT NULL,
  `cust_lname` varchar(50) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  `cust_address` varchar(50) NOT NULL,
  `cust_city` varchar(50) NOT NULL,
  `cust_country` varchar(50) DEFAULT NULL,
  `cust_zipcode` varchar(50) DEFAULT NULL,
  `cust_phoneno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_fname`, `cust_lname`, `cust_email`, `cust_address`, `cust_city`, `cust_country`, `cust_zipcode`, `cust_phoneno`) VALUES
(1, 'ali', 'haider', 'ali.idrees@gmail.com', 'House no. x abc street', 'karachi', 'pakistan', '75010', 900),
(2, 'Ahmad', 'Khan', 'mylink.me@gmail.com', 'House no.  abc , xyz street', 'karachi', 'pakistan', '75607', 313);

-- --------------------------------------------------------

--
-- Table structure for table `offline_orders`
--

CREATE TABLE `offline_orders` (
  `offline_order_id` int(11) NOT NULL,
  `order_cust_id` int(4) NOT NULL,
  `offline_order_amount` float NOT NULL,
  `offline_order_status` varchar(225) NOT NULL,
  `offline_order_instruction` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offline_orders`
--

INSERT INTO `offline_orders` (`offline_order_id`, `order_cust_id`, `offline_order_amount`, `offline_order_status`, `offline_order_instruction`) VALUES
(1, 2, 1358.99, 'Need to Deliver!', 'CASH on DEliVeRy'),
(2, 2, 1358.99, 'Need to Deliver!', 'CASH on DEliVeRy'),
(3, 2, 1358.99, 'Need to Deliver!', 'CASH on DEliVeRy');

-- --------------------------------------------------------

--
-- Table structure for table `offline_payment_reports`
--

CREATE TABLE `offline_payment_reports` (
  `offline_report_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `offline_order_id` int(11) NOT NULL,
  `product_title` varchar(225) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offline_payment_reports`
--

INSERT INTO `offline_payment_reports` (`offline_report_id`, `product_id`, `offline_order_id`, `product_title`, `product_price`, `product_quantity`) VALUES
(1, 8, 1, 'ASUS Zenbook', 1069.99, 1),
(2, 18, 2, 'Samsung Fast charger', 100, 1),
(3, 17, 3, 'HP Pavillion Series Laptop Charger', 189, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_amount` float NOT NULL,
  `order_transaction_id` int(25) NOT NULL,
  `order_status` varchar(225) NOT NULL,
  `order_currency` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_reports`
--

CREATE TABLE `payment_reports` (
  `report_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_title` varchar(225) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(225) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(225) NOT NULL,
  `product_img_s1` varchar(225) NOT NULL,
  `product_img_s2` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `cat_id`, `brand_id`, `product_price`, `product_quantity`, `product_description`, `product_image`, `product_img_s1`, `product_img_s2`) VALUES
(1, 'Apple macbook pro 2017', 1, 1, 2579.99, 3, '2.9GHz quad-core Intel Core i7 processor with Turbo Boost up to 3.9GHz\r\n16GB 2133MHz LPDDR3 memory\r\n512GB SSD storage\r\nRadeon Pro 560 with 4GB memory\r\nTouch Bar and Touch ID', 'macbook-pro-touchbar-3.jpg', 'macbook-pro-touchbar-3.jpg', 'p1_s1.jpg'),
(2, 'Dell Inspiron 17', 1, 3, 1399.99, 3, '17.3\" Touch-Screen FHD IPS Laptop I7779-7045GRY-PUS, Intel Core i7-7500U, 16GB DDR4 RAM, NVIDIA GeForce 940MX 2GB, 512GB SSD, BT, HDMI, Backlit keyboard, Win10', 'dellinspiron177000.jpg', 'dellinspiron172.jpg', 'dellinspiron173.jpg'),
(3, 'Asus Zog Zephyrus', 1, 11, 999.99, 2, 'ASUS ROG Zephyrus GX501VI-XS74 (i7-7700HQ, 16GB RAM, 512GB NVMe SSD, NVIDIA GTX 1080 8GB, 15.6\" Full HD, 120Hz, G-Sync, Windows 10 Pro) Gaming Notebook', 'asus.jpg', 'asus2.jpg', 'asus3.jpg'),
(4, 'Microsoft Surface Pro 4', 1, 10, 2499.99, 4, '2-in-1 Convertible Flagship High Performance 12.3 Inch Touchscreen Tablet PC, Intel Core i5, 128GB SSD, WIFI, Windows 10 Pro, Silver, Included Black Surface Type Cover', 'surfacepro4.jpg', 'pro2.jpg', 'pro3.jpg'),
(5, 'Lenovo Yoga Book', 1, 12, 1299.99, 6, '10.1\" FHD Touch IPS 2-in-1 Convertible Tablet PC, Intel Atom x5-Z8550 1.44GHz, 4GB RAM, 64GB SSD, Bluetooth, HD Graphics, Android 6.0.1 Marshmallow OS- Gunmetal Grey', 'yogabook.jpg\r\n', 'yoga2.jpg', 'yoga3.jpg'),
(6, 'Dell XPS 13', 1, 3, 1784.99, 3, '13.3\" IPS 3200x1800 Quad HD+ Touchscreen Notebook Computer Intel Core i5-6200U 2.3GHz, 8GB RAM, 256GB SSD, 802.11ac dual band, Bluetooth, 720p Webcam, Windows 10 Home 64-bit', 'xps13.jpg', 'xps13.jpg', 'xp2.jpg'),
(7, 'Dell Inspiron 7559', 1, 3, 1004.99, 2, '15.6 Inch FHD Laptop (6th Generation Intel Core i5, 8 GB RAM, 1 TB HDD + 8 GB SSD) NVIDIA GeForce GTX 960M', 'inspiron7559.jpg', 'inspiron7559.jpg', 'inspiron173.jpg'),
(8, 'ASUS Zenbook', 1, 11, 1069.99, 5, '15.6-Inch 4K Touchscreen Laptop (Core i7-6700HQ CPU, 16 GB DDR4, 512 GB NVMe SSD, GTX960M GPU, Thunderbolt III, Windows 10 MS Signature image)', 'zenbook.jpg', 'zenbook.jpg', 'zenbook2.jpg'),
(9, 'Samsung S8', 2, 2, 863, 5, 'Infinity Display: a bezel-less, full-frontal, edge-to-edge screen. Default resolution is Full HD+ and can be changed to Quad HD+ (WQHD+) in Settings\r\nCamera resolution - Front: 8 MP AF, Rear: 12 MP OIS AF Memory: Internal Memory 64 GB, RAM 4GB', 's8.jpg', 's82.jpg', 's83.jpg'),
(10, 'Iphone 8', 2, 1, 1024, 6, '256GB, 5.5-inch (diagonal) widescreen LCD multi-touch display with IPS technology and Retina HD display\r\n12MP wide-angle and telephoto cameras, Optical image stabilization and Six?element lens\r\nAll new glass design with A color?matched, aerospace?grade aluminum band\r\nSplash, water, and dust resistant\r\n4K video recording at 24 fps, 30 fps, or 60 fps', 'i8.jpg', 'i82.jpg', 'i83.jpg'),
(11, 'HTC U11', 2, 4, 640, 2, 'HIGHEST RATED SMARTPHONE CAMERA EVER; DXO mark of 90: 16 MP front facing camera and 12MP UltraPixel™ rear-facing camera with Optical Image Stabilization, HDR Boost, and UltraSpeed Autofocus\r\nBEST-IN-CLASS AUDIO: Dual BoomSound™ Hi-Fi Speakers, USonic noise cancelling headphones, personalized audio profiles.\r\n128GB of internal memory. Dual Sim. STUNNING DESIGN: Sleek curved glass wrapped around a rigid metal frame with 5.5” Corning® Gorilla® Glass 5 Quad HD Display. IP67 water and dust resistance.\r\nInternational Version of the phone, that may not include US warranty. Works with GSM carriers only, no support for CDMA (Sprint, Verizon, etc.)', 'u11.jpg', 'u112.jpg', 'u113.jpg'),
(12, 'Honor 9', 2, 6, 720, 4, '5.15 inches LTPS IPS LCD capacitive touchscreen, 16M colors\\r\\nAndroid 7.0 (Nougat) | Hisilicon Kirin 960 | Octa-core (4x2.4 GHz Cortex-A73 & 4x1.8 GHz Cortex-A53)\\r\\nDual SIM (Nano-SIM, dual stand-by) | 64 GB, 6 GB RAM, microSD, up to 256 GB (uses SIM 2 slot)\\r\\nDual 20MP + 12 MP, f/2.2, phase detection autofocus, 2x optical zoom, dual-LED (dual tone) flash\\r\\nHSDPA 850 / 900 / 1900 / 2100 | LTE band 1(2100), 3(1800), 5(850), 8(900), 38(2600), 39(1900), 40(2300), 41(2500) LTE bands are not compatible with USA networks', 'honor9.jpg', 'honor9.jpg', ''),
(13, 'Samsung handsfree', 4, 2, 86, 7, 'Key Features\r\nColor: White\r\nHD Woofer Sound\r\nExtreme Quality Design\r\nDurable\r\nWhat\'s in the box?\r\n1*hands free\r\nGeneral Information\r\nSKU\r\nSA609EL05TEPMNAFAMZ\r\nBrand\r\nSamsung\r\nProduct Information\r\nColour\r\nWhite\r\nShipping Weight (kg)\r\n0.2\r\n', 'shand.jpg', 'shand1.jpg', 'shand2.jpg'),
(14, 'Sony Wireless handsfree', 4, 8, 140, 5, 'Key Features\r\nWireless Type:Bluetooth\r\nBluetooth Standard:Version V4.1\r\nOperation Range:Up To 10 Meters (30 Feet)\r\nTalk/Playing Time:Up To 7 Hours\r\nStandby Time:Up To 300 Hours', 'sonyhands.jpg', 'sonyhands.jpg', ''),
(15, 'Transcend Military Grade - 1TB External Hard Drive', 3, 9, 359, 6, 'Key Features\r\nBrand Warranty\r\n1TB of Storage Space\r\nConnectivity: USB 3.0 and USB 2.0\r\nBandwidth: Up to 5 GB/s in USB 3.0 mode, 480 Mb/s in USB 2.0 mode\r\nOneTouch Backup\r\nDrive Speed: 5400 rpm', 'tdrive.jpg', 'tdrive1.jpg', 'tdrive2.jpg'),
(16, 'Lenovo F309 - External Portable Hard Drive 1TB', 3, 12, 399, 2, 'Key Features:\r\nEasy and secure storage expansion\r\nNo software installation and no power adapter required for operation\r\nMulti-colored LED device status indicator\r\nBuilt-in USB 3.0 cable', 'ldrive.jpg', 'ldrive1.jpg', 'ldrive2.jpg'),
(17, 'HP Pavillion Series Laptop Charger', 3, 5, 189, 1, 'Key Features\r\nVoltage: 19.5V  \r\nAmpere: 3.33A\r\nWatts: 65W\r\nFIT WITH: HP Pavilion 14-Q series, 14-N series, 14-K series\r\nHP 15-N, 15-D, 15-G, 15-F, 15-R, 15-E, 15-P, 15-J series\r\nHP 17-E, 17-J series', 'battery.jpg', 'battery1.jpg', 'battery.jpg'),
(18, 'Samsung Fast charger', 4, 2, 100, 3, 'Key Features\r\nFor All Samsung Phones\r\nFast charging technology\r\nCharges 0 to 60% in about 40 minutes\r\nCharge other Micro USB devices at up to a 2A speed\r\nSync and transfer files via micro USB data cable', 'scharger.jpg', 'scharger1.jpg', 'scharger2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `offline_orders`
--
ALTER TABLE `offline_orders`
  ADD PRIMARY KEY (`offline_order_id`),
  ADD KEY `orders_cust_id` (`order_cust_id`);

--
-- Indexes for table `offline_payment_reports`
--
ALTER TABLE `offline_payment_reports`
  ADD PRIMARY KEY (`offline_report_id`),
  ADD KEY `offline_order_id` (`offline_order_id`),
  ADD KEY `offline_payment_reports_product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payment_reports`
--
ALTER TABLE `payment_reports`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `payment_reports_product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `products_brand_id` (`brand_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `offline_orders`
--
ALTER TABLE `offline_orders`
  MODIFY `offline_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `offline_payment_reports`
--
ALTER TABLE `offline_payment_reports`
  MODIFY `offline_report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment_reports`
--
ALTER TABLE `payment_reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `offline_orders`
--
ALTER TABLE `offline_orders`
  ADD CONSTRAINT `orders_cust_id` FOREIGN KEY (`order_cust_id`) REFERENCES `customer` (`cust_id`);

--
-- Constraints for table `offline_payment_reports`
--
ALTER TABLE `offline_payment_reports`
  ADD CONSTRAINT `offline_payment_reports_order_id` FOREIGN KEY (`offline_order_id`) REFERENCES `offline_orders` (`offline_order_id`),
  ADD CONSTRAINT `offline_payment_reports_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `payment_reports`
--
ALTER TABLE `payment_reports`
  ADD CONSTRAINT `payment_reports_order_id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `payment_reports_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`),
  ADD CONSTRAINT `products_cat_id` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
