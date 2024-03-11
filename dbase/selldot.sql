-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 11, 2024 at 12:31 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `selldot`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad_table`
--

DROP TABLE IF EXISTS `ad_table`;
CREATE TABLE IF NOT EXISTS `ad_table` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `category` varchar(55) NOT NULL,
  `brand` varchar(55) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `price` int NOT NULL,
  `picture` varchar(100) NOT NULL,
  `status` varchar(22) NOT NULL,
  `timestamp` varchar(22) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ad_table`
--

INSERT INTO `ad_table` (`id`, `name`, `category`, `brand`, `description`, `price`, `picture`, `status`, `timestamp`) VALUES
(2, 'ITEL S23', 'Phones and acessories', 'Itel', '50MP Super Clear Camera\r\n6.6\" HD+ Waterdrop FullScreen - Enjoy the World in HD+\r\n5000mAh Powerful Battery Life with 10W Faster Charging\r\nUSB Type-C Charging Port\r\nColour Changing Design**\r\n4G LTE\r\n90Hz Display Refresh Rate\r\nFace & Fingerprint Unlock Dual Security Protection\r\nOcta-Core Processor\r\nStorage for Everything You Love\r\nFree Case Inside', 70000, '', 'pending', '1710159080'),
(3, 'ASHION 2024 Men\'s Casual Shoe', 'Footwears', 'Amazon', 'Upper: Canvas Sneakers selection of high-quality canvas fabrics not only ensures excellent quality, but also ensures breathability and wear resistance.\r\nDecoration: Sophisticated pure cotton lace-up closure design with smooth sewing lines; not only fashionable and versatile, but also simple and elegant.\r\nHeel: Canvas Sneakers have a thickened heel for comfort and softness. We just want to maximize wearing comfort.\r\nSole: Made of strong and wear-resistant natural rubber, it is resistant to twists and turns and is not easy to deform; the small wave pattern on the bottom is non-slip and wear-resistant, allowing you to travel without hindrance.\r\nMatching: Simple solid color canvas sneakers, fashionable and versatile; suitable for all kinds of casual wear, jeans, shorts, skirts, etc., no matter spring, summer, autumn and winter are classic styles, suitable for all seasons.', 12500, '', 'pending', '1710159971');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone` varchar(22) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='this is for storing users data';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `gender`, `password`) VALUES
(6, 'Abdullahi', 'Kolayo', 'arin123@gmail.com', '09035802100', 'male', 'asd'),
(7, 'Abdullahi', 'Kolayo', 'abdullah@gmail.com', '09035800966', 'male', 'jjjjjj'),
(8, 'Abdullahi', 'Ko\"layo', 'abdullah12@gmail.com', '09035802121', 'male', ''),
(9, 'Abdullahi', 'Kolayo; delete from users ', 'lateefsalaty@yahoo.com', '09075633336', 'male', 'bbbb');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
