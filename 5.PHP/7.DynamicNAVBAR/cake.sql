-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2019 at 02:04 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `t3_cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `cakes`
--

CREATE TABLE `cakes` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_price` int(11) NOT NULL,
  `c_description` text NOT NULL,
  `c_picture` varchar(200) NOT NULL,
  `c_category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cakes`
--

INSERT INTO `cakes` (`c_id`, `c_name`, `c_price`, `c_description`, `c_picture`, `c_category`) VALUES
(1, 'Chocolate Fudge', 1200, 'A very chocolatey, moist Chocolate Fudge Cake that is similar to chocolate mud cake, but not as dense. Made with both melted chocolate and cocoa, AND topped with chocolate ganache, this one is sure to satisfying your chocolate cravings!', 'images/fudge1.jpg', 1),
(2, 'Chocolate Gnache', 1500, 'A very chocolatey, moist Chocolate Fudge Cake that is similar to chocolate mud cake, but not as dense. Made with both melted chocolate and cocoa, AND topped with chocolate ganache, this one is sure to satisfying your chocolate cravings!', 'images/fudge2.jpg', 1),
(3, 'Chcolate Fudge with Sprinkles', 1300, 'A very chocolatey, moist Chocolate Fudge Cake that is similar to chocolate mud cake, but not as dense. Made with both melted chocolate and cocoa, AND topped with chocolate ganache, this one is sure to satisfying your chocolate cravings!', 'images/fudge3.jpg', 1),
(4, 'Vanilla Cream', 800, 'With its outstanding vanilla flavor, pillowy soft crumb, and creamy vanilla buttercream, this is truly the best vanilla cake.A scrumptious moist and fluffy vanilla cake paired with a perfectly sweet vanilla buttercream makes for the perfect dessert.', 'images/vanilla2.jpg', 2),
(5, 'Vanilla with Strawberry Topping', 1500, '\r\nWith its outstanding vanilla flavor, pillowy soft crumb, and creamy vanilla buttercream, this is truly the best vanilla cake.A scrumptious moist and fluffy vanilla cake paired with a perfectly sweet vanilla buttercream makes for the perfect dessert.', 'images/vanilla3.jpg', 2),
(6, 'Vanilla with Sprinkles', 900, '\r\nWith its outstanding vanilla flavor, pillowy soft crumb, and creamy vanilla buttercream, this is truly the best vanilla cake.A scrumptious moist and fluffy vanilla cake paired with a perfectly sweet vanilla buttercream makes for the perfect dessert.', 'images/vanilla1.jpg', 2),
(7, 'Dark Chocolate Mousse', 700, 'This super moist dark chocolate mousse cake combines unsweetened natural cocoa powder and dark cocoa powder for an extra rich flavor. Fill the cake with a simplified chocolate mousse and cover the whole dessert with semi-sweet chocolate ganache.', 'images/mousse1.jpg', 3),
(8, 'Chocolate Berry Mousse', 1700, 'This super moist dark chocolate mousse cake combines unsweetened natural cocoa powder and dark cocoa powder for an extra rich flavor. Fill the cake with a simplified chocolate mousse and cover the whole dessert with semi-sweet chocolate ganache', 'images/mousse3.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ct_id` int(11) NOT NULL,
  `ct_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ct_id`, `ct_name`) VALUES
(1, 'Chocolate Fudge'),
(2, 'Vanilla'),
(3, 'Chocolate Mousse');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cakes`
--
ALTER TABLE `cakes`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `cat_index` (`c_category`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ct_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cakes`
--
ALTER TABLE `cakes`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cakes`
--
ALTER TABLE `cakes`
  ADD CONSTRAINT `fk_cat` FOREIGN KEY (`c_category`) REFERENCES `category` (`ct_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
