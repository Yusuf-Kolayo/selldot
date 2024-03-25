-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 25, 2024 at 01:12 PM
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
  `user_id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `img_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(22) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timestamp` varchar(22) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ad_table`
--

INSERT INTO `ad_table` (`id`, `user_id`, `name`, `category`, `brand`, `description`, `price`, `img_name`, `status`, `timestamp`) VALUES
(8, 6, 'Binatone 1.5 Litres (BLG-452) Blender', 'Electronics', 'Binatone', 'Splash-proof lid\r\nUnbreakable Jug\r\n1.5L capacity\r\nCord storage place\r\nSafety lock mechanism\r\nBlender, smoothie maker & grinder', 27500, 'blender.jpg', 'pending', '1710940170'),
(9, 6, 'Hisense 43\" Inches LED HD TV', 'Electronics', 'Hisense', '    43 Inches Non-Smart LED\r\n    VGA-RGB - Yes\r\n    Color - Black\r\n    HDMI - 2\r\n    USB - 1\r\n    HD type: Full HD\r\n    Screen resolution: 1920 x 1080 pixels\r\n    Native aspect ratio: 16:9\r\n    Display Brightness: 200 cd/m²\r\n    Contrast Ratio (typical): 5000:1\r\n    LED Backlight Type: Direct-LED\r\n    Aspect Ratio: 16:9\r\n    Supported Video Format: 1080p\r\n    Native Refresh Rate: 60 Hz\r\n    Color Depth: 8 bit\r\n    Horizontal viewing angle: 178°\r\n    Vertical viewing angle: 178°\r\n    Comb filter: 3D\r\n    Screen diagonal: 108 cm \r\n    AV - Yes', 250000, 'tv.jpg', 'pending', '1710940416'),
(10, 11, 'Hisense 7.5kg Twin Tub Washing Machine', 'Electronics', 'Hisense', '    Washing/Spinning Capacity: 7.5kg\r\n    Twin Tub\r\n    Classical Design\r\n    Lint Filter \r\n    White Color\r\n    Water Selector\r\n    Durable\r\n    User-Friendly Control Panel\r\n    Dimensions: 690W x 830H x390D[mm]', 166191, 'wm.jpg', 'pending', '1710940940'),
(11, 6, 'Midea 87 Litres Double Door Inside Condenser Fridge', 'Electronics', 'Midea', '    87 Liters\r\n    Inside Compressor\r\n    R600a Gas\r\n    Silver Color\r\n    Mechanical Temperature Control\r\n    Adjustable Leg\r\n    Interior Light\r\n    Separate Chiller Compartment\r\n    Energy Saving', 175000, '6_1710941079_fridge.jpg', 'pending', '1710941079');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(22) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='this is for storing users data';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `user_type`, `phone`, `gender`, `password`) VALUES
(6, 'Abdullahi', 'Kolayo', 'abd@gmail.com', 'admin', '09035802155', 'female', 'asd'),
(11, 'Oladele', 'Idowu', 'oladele@gmail.com', 'user', '09035802100', 'female', 'ooo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
