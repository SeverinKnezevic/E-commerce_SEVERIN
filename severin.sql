-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2017 at 10:11 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `severin`
--

-- --------------------------------------------------------

--
-- Table structure for table `actions`
--

CREATE TABLE `actions` (
  `product_id` int(11) NOT NULL,
  `product_image` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `product_desc` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actions`
--

INSERT INTO `actions` (`product_id`, `product_image`, `product_desc`) VALUES
(1, 'slika.png', '<h1>STIHL</h1>'),
(2, 'kupatilo.jpg', '<h1><strong>Oprema za kupatilo</strong></h1>\r\n<h3>&nbsp;</h3>\r\n<h3>Vrijeme je da Va&scaron;e kupatilo dobije novi &nbsp;sjaj</h3>'),
(3, 'sthilll.jpg', '<h1><strong>STIHL</strong></h1>');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `user_pass` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `user_images` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `user_username` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `user_email`, `user_pass`, `user_images`, `user_username`) VALUES
(1, 'admin@severin.com', 'admin123', '007.jpg', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(11) NOT NULL,
  `ip_add` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `catalogs`
--

CREATE TABLE `catalogs` (
  `catalog_id` int(11) NOT NULL,
  `catalog_title` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `catalog_image` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `catalog_image2` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `catalog_desc` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catalogs`
--

INSERT INTO `catalogs` (`catalog_id`, `catalog_title`, `catalog_image`, `catalog_image2`, `catalog_desc`) VALUES
(9, 'Vrijeme je za vrt', 'katalog1.jpg', 'katalog1.txt', '<p>Vrijedi do isteka zaliha</p>'),
(10, 'DeWalt katalog ', 'katalog2.jpg', 'katalog2.txt', '<p>Od danas u na&scaron;im trgovinama!</p>');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Elektromaterijal '),
(2, 'Vodomaterijal'),
(3, 'Centralno grijanje'),
(4, 'Gradjevinski materijal'),
(5, 'Vrt'),
(6, '	\r\nOstalo');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_ip` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `customer_name` text COLLATE utf8_croatian_ci NOT NULL,
  `customer_lastname` text COLLATE utf8_croatian_ci NOT NULL,
  `customer_email` varchar(200) COLLATE utf8_croatian_ci NOT NULL,
  `customer_username` varchar(200) COLLATE utf8_croatian_ci NOT NULL,
  `customer_image` text COLLATE utf8_croatian_ci NOT NULL,
  `customer_pass` varchar(200) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_ip`, `customer_name`, `customer_lastname`, `customer_email`, `customer_username`, `customer_image`, `customer_pass`) VALUES
(15, '::1', 'ADMIN', 'ADMIN', 'admin@severin.com', 'ADMIN', '007.jpg', 'admin123'),
(16, '::1', 'Severin', 'KneÅ¾eviÄ‡ ', 'sevo@sevo.com', 'Sevo95', 'pozadina.jpg', 'sevo');

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE `forums` (
  `forum_id` int(11) NOT NULL,
  `forum_teme` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `forum_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `forum_messenger` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `c_id` varchar(250) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`forum_id`, `forum_teme`, `forum_date`, `forum_messenger`, `c_id`) VALUES
(100, '', '2017-07-06 17:15:53', '<h3>Molimo Vas da se na forumu pona&scaron;ate u skladu s <em>pravilnikom&nbsp;</em>!&nbsp;</h3>\r\n<h3>&nbsp;</h3>\r\n<h4>Va&scaron; \"SEVERIN doo\"</h4>', '15'),
(101, '', '2017-07-06 17:17:12', 'Stranica je super!', '16');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL,
  `status` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `trx_id` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `currency` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_cat` int(11) NOT NULL,
  `product_title` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `product_price` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `product_desc` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `product_image` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `product_keywords` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(11, 1, 'Kabal produÅ¾ni', '35.00', '<p>Kabal - produÅ¾ni 20M</p>', 'produzni.jpg', 'kabal'),
(12, 1, 'Å tedna Å¾arulja', '5.00', '<p>&Scaron;tedna Å¾arulja</p>', 'zarulja.jpg', 'zarulja'),
(13, 2, 'Pumpa za hidrofor', '250.00', '<p>Pumpa za hidrofor&nbsp;</p>', 'pumpa.jpg', 'pumpa'),
(14, 2, 'Ventil kugla 1', '11.00', '<p>Ventil kugla 1\"</p>', 'ventil.jpg', 'ventil'),
(15, 3, 'Kotao za centralno grijanje', '1110.00', '<p>Kotao za centralno grijanje na Ävrsta goriva</p>', 'kotao.jpg', 'kotao'),
(16, 3, 'Radijator', '80.00', '<p>Radijator za centralno grijanje</p>', 'radijator.jpg', 'radijator'),
(17, 4, 'MjeÅ¡alica', '300.00', '<p>Mje&scaron;alica za beton&nbsp;</p>', 'mjesalica.jpg', 'mjesalica'),
(18, 4, 'Silikon', '6.00', '<p>Silikon transparentni&nbsp;</p>', 'silikon.jpg', 'silikon'),
(19, 5, 'Kolica za vrtno crijevo', '40.00', '<p>Kolica za vrtno crijevo&nbsp;</p>', 'kolicazac.png', 'kolica'),
(20, 5, 'Prskalica', '11.00', '<p>Prskalica za navodnjavanje.</p>', 'prskalica.jpg', 'prskalica'),
(21, 6, 'Busilica DeWalt', '230.00', '<p>Bu&scaron;ilica DeWalt - AKU</p>', 'busilic.jpg', 'busilica'),
(22, 6, 'Aparat za pl. cijevi', '120.00', '<p>Aparat za plastiÄne cijevi</p>', 'aparat.jpg', 'aparat');

-- --------------------------------------------------------

--
-- Table structure for table `products1`
--

CREATE TABLE `products1` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `product_image` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `product_price` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `product_cat` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products1`
--

INSERT INTO `products1` (`product_id`, `product_title`, `product_image`, `product_price`, `product_cat`) VALUES
(1, 'Kabal produÅ¾ni', 'produzni.jpg', '35.00', 'Elektromaterijal'),
(2, 'Pumpa za hidrofor', 'pumpa.jpg', '250.00', 'Vodomaterijal'),
(3, 'Kotao za centralno grijanje', 'kotao.jpg', '1110.00', 'Centralno grijanje'),
(4, 'MjeÅ¡alica', 'mjesalica.jpg', '300.00', 'Gradjevinski materijal'),
(5, 'Kolica za vrtno crijevo', 'kolicazac.png', '40.00', 'Vrt'),
(6, 'Busilica DeWalt', 'busilic.jpg', '230.00', 'Ostalo'),
(7, 'Å tedna Å¾arulja', 'zarulja.jpg', '5.50', 'Elektromaterijal'),
(8, 'Ventil kogla 1', 'ventil.jpg', '11.00', 'Vodomaterijal'),
(9, 'Radijator', 'radijator.jpg', '80.00', 'Centralno grijanje'),
(10, 'Silikon', 'silikon.jpg', '6.00', 'Gradjevinski materijal'),
(11, 'Prskalica', 'prskalica.jpg', '11.00', 'Vrt'),
(12, 'Aparat za pl. cijevi', 'aparat.jpg', '120.00', 'Ostalo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actions`
--
ALTER TABLE `actions`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `catalogs`
--
ALTER TABLE `catalogs`
  ADD PRIMARY KEY (`catalog_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`forum_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `products1`
--
ALTER TABLE `products1`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actions`
--
ALTER TABLE `actions`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `catalogs`
--
ALTER TABLE `catalogs`
  MODIFY `catalog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `forum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `products1`
--
ALTER TABLE `products1`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
