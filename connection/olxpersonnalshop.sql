-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 20, 2021 at 05:14 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olxpersonnalshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `orderId` varchar(200) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `DateOfOrder` varchar(100) NOT NULL,
  `clientId` int(11) NOT NULL,
  PRIMARY KEY (`orderId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderId`, `ProductId`, `Price`, `Quantity`, `DateOfOrder`, `clientId`) VALUES
('19182251773248323349137251159227241297273312712497', 85, 1500, 3, '2021-11-23', 31),
('33969286734923752635953243388469277473415329894354', 88, 2400, 3, '2021-11-11', 31),
('57381463935439838572337152196961794134136441122421', 85, 2500, 5, '2021-11-04', 31),
('15332273265113859341774955957275656173489169584753', 80, 100, 1, '2021-12-15', 31),
('35699116436632662385282247771844617781393355917388', 80, 100, 1, '2021-12-20', 32),
('53659853717958245133314234471415768628513841796965', 89, 3600, 4, '2021-12-20', 32),
('78546564824339686141274333311892531643135512431772', 80, 100, 1, '2021-12-20', 32),
('57142699218387157457481629575766853746665198582268', 85, 1500, 3, '2021-12-20', 32);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `ProductId` int(30) NOT NULL AUTO_INCREMENT,
  `Title` varchar(30) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `IsAvailable` varchar(10) NOT NULL DEFAULT 'AVAILABLE',
  `Price` int(30) NOT NULL,
  `ImgPath` varchar(300) NOT NULL,
  `Rating` int(11) NOT NULL,
  `Brand` varchar(30) NOT NULL,
  `Size` varchar(30) NOT NULL,
  `Specification` varchar(200) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  PRIMARY KEY (`ProductId`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductId`, `Title`, `Description`, `IsAvailable`, `Price`, `ImgPath`, `Rating`, `Brand`, `Size`, `Specification`, `Gender`) VALUES
(80, 'Product 1', 'Description 1', 'AVAILABLE', 100, 'ProductImages/1.png', 1, 'ADIDAS', 'L', 'Bag', 'F'),
(81, 'Product 2', 'Description 2', 'AVAILABLE', 200, 'ProductImages/2.png', 2, 'NIKE', 'XL', 'Bag', 'F'),
(83, 'Product 3', 'Description 3', 'AVAILABLE', 300, 'ProductImages/3.png', 4, 'NIKE', 'S', 'Bag', 'F'),
(84, 'Product 4', 'Description 4', 'AVAILABLE', 400, 'ProductImages/4.png', 5, 'ADIDAS', 'XXL', 'Sweather', 'F'),
(85, 'Product 5', 'Description 5', 'AVAILABLE', 500, 'ProductImages/5.png', 4, 'NIKE', 'XS', 'Sweather', 'M'),
(86, 'Product 6', 'Description 6', 'AVAILABLE', 600, 'ProductImages/6.png', 3, 'ADIDAS', 'M', 'Sweather', 'M'),
(87, 'Product 7', 'Description 7', 'AVAILABLE', 700, 'ProductImages/7.png', 2, 'NIKE', 'L', 'Sunglass', 'M'),
(88, 'Product 8', 'Description 8', 'AVAILABLE', 800, 'ProductImages/8.png', 1, 'ADIDAS', 'XL', 'Sunglass', 'M'),
(89, 'Product 9', 'Description 9', 'AVAILABLE', 900, 'ProductImages/9.png', 0, 'NIKE', 'XXXL', 'Bag', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

DROP TABLE IF EXISTS `shoppingcart`;
CREATE TABLE IF NOT EXISTS `shoppingcart` (
  `ShoppingCartId` int(11) NOT NULL AUTO_INCREMENT,
  `ProductId` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `clientId` int(11) NOT NULL,
  PRIMARY KEY (`ShoppingCartId`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shoppingcart`
--

INSERT INTO `shoppingcart` (`ShoppingCartId`, `ProductId`, `Quantity`, `Price`, `clientId`) VALUES
(45, 89, 3, 2700, 31),
(44, 87, 4, 2800, 31),
(40, 81, 4, 800, 31),
(48, 81, 4, 800, 32),
(49, 89, 2, 1800, 32),
(50, 87, 4, 2800, 32),
(51, 83, 3, 900, 32);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
