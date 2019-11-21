-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2019 at 11:05 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `id` int(11) NOT NULL,
  `Actor_name` varchar(191) NOT NULL,
  `Address` varchar(191) NOT NULL,
  `Contact_No` varchar(20) NOT NULL,
  `Link` varchar(191) NOT NULL,
  `Description` text NOT NULL,
  `Singer` varchar(20) NOT NULL,
  `Magician` varchar(20) NOT NULL,
  `Comedian` varchar(20) NOT NULL,
  `Actor` varchar(20) NOT NULL,
  `Announcer` varchar(20) NOT NULL,
  `Entertainer` varchar(20) NOT NULL,
  `Other` varchar(20) NOT NULL,
  `Main_pic` varchar(191) NOT NULL,
  `pic1` varchar(191) NOT NULL,
  `pic2` varchar(191) NOT NULL,
  `pic3` varchar(191) NOT NULL,
  `pic4` varchar(191) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `actor_events`
--

CREATE TABLE `actor_events` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Birthday` varchar(20) NOT NULL,
  `Party` varchar(20) NOT NULL,
  `Professional_event` varchar(20) NOT NULL,
  `Musical_event` varchar(20) NOT NULL,
  `Corporate_event` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `actor_packages`
--

CREATE TABLE `actor_packages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Package_Name` varchar(191) NOT NULL,
  `Hours` int(11) NOT NULL,
  `Services` text NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Pdf` varchar(191) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fname` varchar(191) NOT NULL,
  `lname` varchar(191) NOT NULL,
  `Address` varchar(191) NOT NULL,
  `Contact_No` varchar(30) NOT NULL,
  `About_me` text,
  `Bio` varchar(50) DEFAULT NULL,
  `Main_pic` varchar(191) NOT NULL DEFAULT 'Maindefault.jpg',
  `Cover_pic` varchar(191) NOT NULL DEFAULT 'Coverdefault.jpg',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `user_id`, `fname`, `lname`, `Address`, `Contact_No`, `About_me`, `Bio`, `Main_pic`, `Cover_pic`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sahan', 'Herath', 'No.3/12, Nagahaella Road ,Mavilmada ,Kandy', '0711443304', 'Creative , Adaptive  Person with good leadership qualities', 'I am a Software Developer in University of Jaffna', '1573936488.jpg', '1573936526.jpg', '2019-11-16 20:36:35', '2019-11-16 15:06:35');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Platinum` tinyint(4) NOT NULL DEFAULT '0',
  `Gold` tinyint(4) NOT NULL DEFAULT '0',
  `Silver` tinyint(4) NOT NULL DEFAULT '0',
  `Bronze` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `user_id`, `Platinum`, `Gold`, `Silver`, `Bronze`, `created_at`, `updated_at`) VALUES
(1, 2, 0, 0, 0, 0, '2019-11-16 16:09:24', '2019-11-16 16:09:24'),
(2, 3, 0, 0, 0, 0, '2019-11-16 16:30:36', '2019-11-16 16:30:36'),
(3, 4, 0, 0, 0, 0, '2019-11-16 17:23:50', '2019-11-16 17:23:50'),
(4, 5, 0, 0, 0, 0, '2019-11-16 17:48:15', '2019-11-16 17:48:15'),
(5, 6, 0, 0, 0, 0, '2019-11-16 19:53:33', '2019-11-16 19:53:33'),
(6, 7, 0, 0, 0, 0, '2019-11-16 20:14:46', '2019-11-16 20:14:46'),
(7, 8, 0, 0, 0, 0, '2019-11-16 20:34:12', '2019-11-16 20:34:12'),
(8, 9, 0, 0, 0, 0, '2019-11-16 20:49:38', '2019-11-16 20:49:38'),
(9, 10, 0, 0, 0, 0, '2019-11-16 22:26:44', '2019-11-16 22:26:44'),
(10, 11, 0, 0, 0, 0, '2019-11-16 23:38:21', '2019-11-16 23:38:21'),
(11, 12, 0, 0, 0, 0, '2019-11-17 02:26:22', '2019-11-17 02:26:22'),
(12, 13, 0, 0, 0, 0, '2019-11-17 02:43:02', '2019-11-17 02:43:02'),
(13, 14, 0, 0, 0, 0, '2019-11-17 03:00:53', '2019-11-17 03:00:53'),
(14, 15, 0, 0, 0, 0, '2019-11-21 07:14:09', '2019-11-21 07:14:09'),
(15, 16, 0, 0, 0, 0, '2019-11-21 07:25:10', '2019-11-21 07:25:10'),
(16, 17, 0, 0, 0, 0, '2019-11-21 07:36:19', '2019-11-21 07:36:19'),
(17, 18, 0, 0, 0, 0, '2019-11-21 07:59:47', '2019-11-21 07:59:47'),
(18, 19, 0, 0, 0, 0, '2019-11-21 08:19:43', '2019-11-21 08:19:43'),
(19, 20, 0, 0, 0, 0, '2019-11-21 09:25:48', '2019-11-21 09:25:48'),
(20, 21, 0, 0, 0, 0, '2019-11-21 10:09:10', '2019-11-21 10:09:10'),
(21, 22, 0, 0, 0, 0, '2019-11-21 10:46:51', '2019-11-21 10:46:51'),
(22, 23, 0, 0, 0, 0, '2019-11-21 11:06:42', '2019-11-21 11:06:42'),
(23, 24, 0, 0, 0, 0, '2019-11-21 11:37:10', '2019-11-21 11:37:10'),
(24, 25, 0, 0, 0, 0, '2019-11-21 15:18:29', '2019-11-21 15:18:29'),
(25, 26, 0, 0, 0, 0, '2019-11-21 15:30:35', '2019-11-21 15:30:35'),
(26, 27, 0, 0, 0, 0, '2019-11-21 15:46:32', '2019-11-21 15:46:32'),
(27, 28, 0, 0, 0, 0, '2019-11-21 16:24:57', '2019-11-21 16:24:57');

-- --------------------------------------------------------

--
-- Table structure for table `cake_designers`
--

CREATE TABLE `cake_designers` (
  `id` int(11) NOT NULL,
  `Organization_Name` varchar(191) NOT NULL,
  `Address` varchar(191) NOT NULL,
  `Contact_No` varchar(20) NOT NULL,
  `Link` varchar(191) NOT NULL,
  `Description` text NOT NULL,
  `Wedding_cake` varchar(20) NOT NULL,
  `Birthday_cake` varchar(20) NOT NULL,
  `Cake_Structure` varchar(20) NOT NULL,
  `Pastry_cake` varchar(20) NOT NULL,
  `Cup_Cake` varchar(20) NOT NULL,
  `Other` varchar(20) NOT NULL,
  `Main_pic` varchar(191) NOT NULL,
  `pic1` varchar(191) NOT NULL,
  `pic2` varchar(191) NOT NULL,
  `pic3` varchar(191) NOT NULL,
  `pic4` varchar(191) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cake_designers`
--

INSERT INTO `cake_designers` (`id`, `Organization_Name`, `Address`, `Contact_No`, `Link`, `Description`, `Wedding_cake`, `Birthday_cake`, `Cake_Structure`, `Pastry_cake`, `Cup_Cake`, `Other`, `Main_pic`, `pic1`, `pic2`, `pic3`, `pic4`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Kanrich Cake Designers', 'Kadawatha, Western Province, Sri Lanka', '077 274 2332', 'http://www.kanrichcakes.com/?fbclid=IwAR2AgZe_5QRKdTHS5kmz5KmiTLuxi6Z6Uyzrukep0ho1ymfZsOCSdO0K62A', 'best cake designer and sweets make in colombo area. hire and enjoy the taste and beauty', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', '1574373293.jpg', '1574373294.jpg', '1574373386.jpg', '1574373295.jpg', '1574373296.jpg', 28, '2019-11-21 21:56:28', '2019-11-21 16:26:28');

-- --------------------------------------------------------

--
-- Table structure for table `cake_packages`
--

CREATE TABLE `cake_packages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Package_Name` varchar(191) NOT NULL,
  `Cake_types` text NOT NULL,
  `Description` text NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Pdf` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cake_packages`
--

INSERT INTO `cake_packages` (`id`, `user_id`, `Package_Name`, `Cake_types`, `Description`, `Price`, `Pdf`, `created_at`, `updated_at`) VALUES
(1, 28, 'Gold Package', 'Cup cakes', 'cupcakes with chocolate ,vanila ,straberry and much other flavours', '3000.00', '1574373809.pdf', '2019-11-21 16:33:29', '2019-11-21 16:33:29');

-- --------------------------------------------------------

--
-- Table structure for table `caterings`
--

CREATE TABLE `caterings` (
  `id` int(11) NOT NULL,
  `Service_Name` varchar(191) NOT NULL,
  `Address` varchar(191) NOT NULL,
  `Contact_No` varchar(20) NOT NULL,
  `Link` varchar(191) NOT NULL,
  `Description` text NOT NULL,
  `Welcome_drink` varchar(20) NOT NULL,
  `Catering_set` varchar(20) NOT NULL,
  `Catering_tent` varchar(20) NOT NULL,
  `Cake` varchar(20) NOT NULL,
  `Special_Food` varchar(20) NOT NULL,
  `Garden_umbrella` varchar(20) NOT NULL,
  `Coffee_Machine` varchar(20) NOT NULL,
  `Table_chair` varchar(20) NOT NULL,
  `sink` varchar(20) NOT NULL,
  `dessert` varchar(20) NOT NULL,
  `Main_pic` varchar(191) NOT NULL,
  `pic1` varchar(20) NOT NULL,
  `pic2` varchar(20) NOT NULL,
  `pic3` varchar(20) NOT NULL,
  `pic4` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `catering_events`
--

CREATE TABLE `catering_events` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Wedding` varchar(20) NOT NULL,
  `Birthday` varchar(20) NOT NULL,
  `Party` varchar(20) NOT NULL,
  `Corporate_event` varchar(20) NOT NULL,
  `Funeral` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `catering_packages`
--

CREATE TABLE `catering_packages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Package_Name` varchar(191) NOT NULL,
  `Appetizers` text NOT NULL,
  `Welcome_drinks` text NOT NULL,
  `Soups` text NOT NULL,
  `Foods` text NOT NULL,
  `Desserts` text NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Pdf` varchar(191) NOT NULL,
  `Created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `user_email` varchar(191) NOT NULL,
  `user_id` int(11) NOT NULL,
  `complaint_about` varchar(191) NOT NULL,
  `complaint` text NOT NULL,
  `state` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `costume_designers`
--

CREATE TABLE `costume_designers` (
  `id` int(11) NOT NULL,
  `Name` varchar(191) NOT NULL,
  `Address` varchar(191) NOT NULL,
  `Contact_No` varchar(20) NOT NULL,
  `Link` varchar(191) NOT NULL,
  `Description` text NOT NULL,
  `wedding_dress_designs` varchar(20) NOT NULL,
  `clothing_orders` varchar(20) NOT NULL,
  `sport_kit_designs` varchar(20) NOT NULL,
  `saree_work` varchar(20) NOT NULL,
  `traditional_dress` varchar(20) NOT NULL,
  `gents_wear` varchar(20) NOT NULL,
  `ladies_wear` varchar(20) NOT NULL,
  `gents_foot_wear` varchar(20) NOT NULL,
  `ladies_foot_wear` varchar(20) NOT NULL,
  `sports_shoes` varchar(20) NOT NULL,
  `Main_pic` varchar(191) NOT NULL,
  `pic1` varchar(191) NOT NULL,
  `pic2` varchar(191) NOT NULL,
  `pic3` varchar(191) NOT NULL,
  `pic4` varchar(191) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `costume_designer_events`
--

CREATE TABLE `costume_designer_events` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Wedding` varchar(20) NOT NULL,
  `Party` varchar(20) NOT NULL,
  `fashion_show` varchar(20) NOT NULL,
  `sports` varchar(20) NOT NULL,
  `Coperate_event` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `costume_packages`
--

CREATE TABLE `costume_packages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Package_Name` varchar(191) NOT NULL,
  `Event_Type` varchar(191) NOT NULL,
  `Services` text NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Pdf` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dancers`
--

CREATE TABLE `dancers` (
  `id` int(11) NOT NULL,
  `Team_Name` varchar(191) NOT NULL,
  `Address` varchar(191) NOT NULL,
  `Contact_No` varchar(20) NOT NULL,
  `Link` varchar(191) NOT NULL,
  `Description` text NOT NULL,
  `choreography` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Traditional` varchar(20) NOT NULL,
  `Western` varchar(20) NOT NULL,
  `Indian` varchar(20) NOT NULL,
  `Kandyan` varchar(20) NOT NULL,
  `Casual` varchar(20) NOT NULL,
  `Other` varchar(20) NOT NULL,
  `Main_pic` varchar(191) NOT NULL,
  `pic1` varchar(191) NOT NULL,
  `pic2` varchar(191) NOT NULL,
  `pic3` varchar(191) NOT NULL,
  `pic4` varchar(191) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dancers`
--

INSERT INTO `dancers` (`id`, `Team_Name`, `Address`, `Contact_No`, `Link`, `Description`, `choreography`, `Gender`, `Traditional`, `Western`, `Indian`, `Kandyan`, `Casual`, `Other`, `Main_pic`, `pic1`, `pic2`, `pic3`, `pic4`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Tharanga Dance Group', 'No.5/3, Parakum mawatha, Attidiya, Dehiwala, Sri lanka Colombo, Sri Lanka', '071 391 4002', 'https://www.facebook.com/Tharanga-Dance-Group-1629799320623966/', 'We are covering sri lankan traditional dance,bollywood dance,western dance & lathin dance etc..Please contact us for your any function', 'Available', 'Mix', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', '1574370103.jpg', '1574370032.jpg', '1574370033.jpg', '1574370033.png', '1574370035.jpg', 26, '2019-11-21 21:01:44', '2019-11-21 15:31:44'),
(2, 'Cool Steps Studio', 'Colombo - Chilaw Main Road Negombo', '077 774 5746', 'http://www.coolsteps.lk/?fbclid=IwAR2tFdBiNOe4nscSr7WLYbithFCgDllQ6ss80KObgq7dU7mO2udcddaiv4w', 'Sri lankas best dancing crew on the stage right now.  We cover your weddings ,parties , any other events .', 'Available', 'Mix', 'Not Available', 'Available', 'Available', 'Not Available', 'Available', 'Available', '1574370970.jpg', '1574371061.jpg', '1574370989.jpg', '1574370990.jpg', '1574370991.jpg', 27, '2019-11-21 21:17:42', '2019-11-21 15:47:42');

-- --------------------------------------------------------

--
-- Table structure for table `dancer_events`
--

CREATE TABLE `dancer_events` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Wedding` varchar(20) NOT NULL,
  `Party` varchar(20) NOT NULL,
  `Musical_event` varchar(20) NOT NULL,
  `Corporate_event` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dancer_events`
--

INSERT INTO `dancer_events` (`id`, `user_id`, `Wedding`, `Party`, `Musical_event`, `Corporate_event`, `created_at`, `updated_at`) VALUES
(1, 26, 'Available', 'Available', 'Available', 'Available', '2019-11-21 15:30:35', '2019-11-21 15:30:35'),
(2, 27, 'Available', 'Available', 'Available', 'Available', '2019-11-21 15:46:32', '2019-11-21 15:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `dance_packages`
--

CREATE TABLE `dance_packages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Package_Name` varchar(191) NOT NULL,
  `Dancing_Type` varchar(191) NOT NULL,
  `Services` text NOT NULL,
  `Price` int(11) NOT NULL,
  `Pdf` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dance_packages`
--

INSERT INTO `dance_packages` (`id`, `user_id`, `Package_Name`, `Dancing_Type`, `Services`, `Price`, `Pdf`, `created_at`, `updated_at`) VALUES
(1, 27, 'Gold Package', 'Western', '10 members\r\nGroup Dance\r\nMix team\r\n2 hours( max)', 35000, '1574372555.pdf', '2019-11-21 16:12:35', '2019-11-21 16:12:35');

-- --------------------------------------------------------

--
-- Table structure for table `dance_videos`
--

CREATE TABLE `dance_videos` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Video_Name` varchar(191) NOT NULL,
  `Video` varchar(191) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dance_videos`
--

INSERT INTO `dance_videos` (`id`, `user_id`, `Video_Name`, `Video`, `Created_at`, `Updated_at`) VALUES
(1, 27, 'Cool step best', '1574372606.mp4', '2019-11-21 16:13:26', '2019-11-21 16:13:26');

-- --------------------------------------------------------

--
-- Table structure for table `decoration_packages`
--

CREATE TABLE `decoration_packages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Package_Name` varchar(191) NOT NULL,
  `Decoration_Type` varchar(191) NOT NULL,
  `Services` text NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Pdf` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `decoration_packages`
--

INSERT INTO `decoration_packages` (`id`, `user_id`, `Package_Name`, `Decoration_Type`, `Services`, `Price`, `Pdf`, `created_at`, `updated_at`) VALUES
(1, 22, 'Wedding Package', 'Flora', 'Entrance Decoration,\r\nPath Decoration,\r\nTable Decoration,\r\nSettyback,\r\nPoruwa', '10000.00', '1574353424.pdf', '2019-11-21 10:53:44', '2019-11-21 10:53:44');

-- --------------------------------------------------------

--
-- Table structure for table `decorators`
--

CREATE TABLE `decorators` (
  `id` int(11) NOT NULL,
  `Team_Name` varchar(191) NOT NULL,
  `Address` varchar(191) NOT NULL,
  `Description` text NOT NULL,
  `Contact_No` varchar(20) NOT NULL,
  `Link` varchar(191) NOT NULL,
  `Poruwa` varchar(20) NOT NULL,
  `Flower` varchar(20) NOT NULL,
  `Table_Hall` varchar(20) NOT NULL,
  `Setty_Backs` varchar(20) NOT NULL,
  `Lighting` varchar(20) NOT NULL,
  `Traditional` varchar(20) NOT NULL,
  `Wedding_Car` varchar(20) NOT NULL,
  `Main_Pic` varchar(191) NOT NULL,
  `pic1` varchar(191) NOT NULL,
  `pic2` varchar(191) NOT NULL,
  `pic3` varchar(191) NOT NULL,
  `pic4` varchar(191) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `decorators`
--

INSERT INTO `decorators` (`id`, `Team_Name`, `Address`, `Description`, `Contact_No`, `Link`, `Poruwa`, `Flower`, `Table_Hall`, `Setty_Backs`, `Lighting`, `Traditional`, `Wedding_Car`, `Main_Pic`, `pic1`, `pic2`, `pic3`, `pic4`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Lassana Flora', 'LassanaFlora (Pvt) Ltd,  25, Wijerama Mawatha,  Colombo 7,', 'Lassana Flora is widely considered as the no 1 choice for weddings, flowers & gift delivery, flowers for corporate events and for retail and wholesale of fresh flowers.', '011 2001122', 'https://lassana.com/', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', '1574352999.jpg', '1574353000.png', '1574353006.jpg', '1574353008.jpg', '1574353009.jpg', 22, '2019-11-21 10:46:51', '2019-11-21 10:46:51'),
(2, 'Designer Flora', '241, high level road, nawinna, maharagama Maharagama, Sri Lanka', 'Designer Wedding Decorations – Elegant & Modern with the touch of classy\r\nDesigner Bouquets – Match of contrast color shades to the bridal outfit with creative shapes', '0112837838', 'https://www.facebook.com/pg/designer.wedding.sl/about/?ref=page_internal', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', '1574354194.jpg', '1574354196.jpg', '1574354197.jpg', '1574354198.jpg', '1574354200.jpg', 23, '2019-11-21 11:06:42', '2019-11-21 11:06:42');

-- --------------------------------------------------------

--
-- Table structure for table `decorator_events`
--

CREATE TABLE `decorator_events` (
  `id` int(191) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Wedding` varchar(20) NOT NULL,
  `Birthday` varchar(20) NOT NULL,
  `Get_Together` varchar(20) NOT NULL,
  `Parties` varchar(20) NOT NULL,
  `Outside_events` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `decorator_events`
--

INSERT INTO `decorator_events` (`id`, `user_id`, `Wedding`, `Birthday`, `Get_Together`, `Parties`, `Outside_events`, `created_at`, `updated_at`) VALUES
(1, 22, 'Available', 'Available', 'Available', 'Available', 'Available', '2019-11-21 10:46:51', '2019-11-21 10:46:51'),
(2, 23, 'Available', 'Available', 'Available', 'Available', 'Available', '2019-11-21 11:06:42', '2019-11-21 11:06:42');

-- --------------------------------------------------------

--
-- Table structure for table `event_planners`
--

CREATE TABLE `event_planners` (
  `id` int(11) NOT NULL,
  `Organization_name` varchar(191) NOT NULL,
  `Address` varchar(191) NOT NULL,
  `Contact_No` varchar(20) NOT NULL,
  `Link` varchar(191) NOT NULL,
  `Description` text NOT NULL,
  `Main_pic` varchar(191) NOT NULL,
  `pic1` varchar(191) NOT NULL,
  `pic2` varchar(191) NOT NULL,
  `pic3` varchar(191) NOT NULL,
  `pic4` varchar(191) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_planners_events`
--

CREATE TABLE `event_planners_events` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Wedding` varchar(20) NOT NULL,
  `Parties` varchar(20) NOT NULL,
  `Meetings` varchar(20) NOT NULL,
  `Corporate_event` varchar(20) NOT NULL,
  `Outside_event` varchar(20) NOT NULL,
  `Sport_event` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hall_events`
--

CREATE TABLE `hall_events` (
  `id` int(11) NOT NULL,
  `hall_id` int(11) NOT NULL,
  `Wedding` varchar(20) NOT NULL,
  `Meeting` varchar(20) NOT NULL,
  `Party` varchar(20) NOT NULL,
  `Corporate_event` varchar(20) NOT NULL,
  `Professional_Event` varchar(20) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall_events`
--

INSERT INTO `hall_events` (`id`, `hall_id`, `Wedding`, `Meeting`, `Party`, `Corporate_event`, `Professional_Event`, `Created_at`, `updated_at`) VALUES
(1, 1, 'Available', 'Not Available', 'Available', 'Available', 'Available', '2019-11-21 09:31:15', '2019-11-21 09:31:15'),
(2, 2, 'Available', 'Not Available', 'Available', 'Available', 'Available', '2019-11-21 10:11:53', '2019-11-21 10:11:53');

-- --------------------------------------------------------

--
-- Table structure for table `hall_features`
--

CREATE TABLE `hall_features` (
  `id` int(11) NOT NULL,
  `hall_id` int(11) NOT NULL,
  `projection` varchar(20) NOT NULL,
  `internet` varchar(20) NOT NULL,
  `parking` varchar(20) NOT NULL,
  `security_camera` varchar(20) NOT NULL,
  `security_personal` varchar(20) NOT NULL,
  `reception_area` varchar(20) NOT NULL,
  `Bar` varchar(20) NOT NULL,
  `garden` varchar(20) NOT NULL,
  `smoking_area` varchar(20) NOT NULL,
  `welcome_drinks` varchar(20) NOT NULL,
  `Buffet` varchar(20) NOT NULL,
  `Handicap_accessible` varchar(20) NOT NULL,
  `outside_balcony` varchar(20) NOT NULL,
  `inside_balcony` varchar(20) NOT NULL,
  `stage` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall_features`
--

INSERT INTO `hall_features` (`id`, `hall_id`, `projection`, `internet`, `parking`, `security_camera`, `security_personal`, `reception_area`, `Bar`, `garden`, `smoking_area`, `welcome_drinks`, `Buffet`, `Handicap_accessible`, `outside_balcony`, `inside_balcony`, `stage`, `created_at`, `updated_at`) VALUES
(1, 1, 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Not Available', 'Not Available', 'Available', 'Available', 'Available', 'Not Available', 'Not Available', 'Not Available', '2019-11-21 09:31:15', '2019-11-21 09:31:15'),
(2, 2, 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Not Available', 'Available', 'Available', 'Available', 'Available', 'Not Available', 'Not Available', 'Not Available', '2019-11-21 10:11:53', '2019-11-21 10:11:53');

-- --------------------------------------------------------

--
-- Table structure for table `hall_packages`
--

CREATE TABLE `hall_packages` (
  `id` int(11) NOT NULL,
  `hall_id` int(11) NOT NULL,
  `Package_Name` varchar(191) NOT NULL,
  `Appetizers` text NOT NULL,
  `Welcome_drinks` text NOT NULL,
  `Foods` text NOT NULL,
  `Soups` text NOT NULL,
  `Desserts` text NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Pdf` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall_packages`
--

INSERT INTO `hall_packages` (`id`, `hall_id`, `Package_Name`, `Appetizers`, `Welcome_drinks`, `Foods`, `Soups`, `Desserts`, `Price`, `Pdf`, `created_at`, `updated_at`) VALUES
(1, 1, 'Gold Package', 'Snakes,\r\nSalmon Tartare,\r\nChilled Soba,\r\nSaucy Asian', 'Lemonade,\r\nRaspberry Mojito,\r\nOrange Juice', 'Rice and Curry,\r\nChicken dinner,\r\nBuriyani,', 'Hot & Sour chicken, \r\nvegitable soup,\r\nHot & Sour prawn,', 'Ice cream,\r\nfruit salad,\r\ncake ,\r\nvatalappan', '6330.00', '1574349405.pdf', '2019-11-21 15:21:26', '2019-11-21 09:51:26');

-- --------------------------------------------------------

--
-- Table structure for table `hall_table_arrangements`
--

CREATE TABLE `hall_table_arrangements` (
  `id` int(11) NOT NULL,
  `hall_id` int(11) NOT NULL,
  `theatre` varchar(20) NOT NULL,
  `U_shape` varchar(20) NOT NULL,
  `V_shape` varchar(20) NOT NULL,
  `classroom` varchar(20) NOT NULL,
  `hallow_square` varchar(20) NOT NULL,
  `Boardroom` varchar(20) NOT NULL,
  `Oval` varchar(20) NOT NULL,
  `Herringbone` varchar(20) NOT NULL,
  `Top_table_springs` varchar(20) NOT NULL,
  `banquet` varchar(20) NOT NULL,
  `cabaret` varchar(20) NOT NULL,
  `informal` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall_table_arrangements`
--

INSERT INTO `hall_table_arrangements` (`id`, `hall_id`, `theatre`, `U_shape`, `V_shape`, `classroom`, `hallow_square`, `Boardroom`, `Oval`, `Herringbone`, `Top_table_springs`, `banquet`, `cabaret`, `informal`, `created_at`, `updated_at`) VALUES
(1, 1, 'Available', 'Available', 'Available', 'Available', 'Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Available', 'Available', 'Not Available', '2019-11-21 09:31:16', '2019-11-21 09:31:16'),
(2, 2, 'Available', 'Available', 'Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Available', 'Not Available', 'Available', 'Available', 'Available', '2019-11-21 10:11:53', '2019-11-21 10:11:53');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `Hotel_Name` varchar(191) NOT NULL,
  `Address` varchar(191) NOT NULL,
  `Contact_No` varchar(20) NOT NULL,
  `Link` varchar(191) NOT NULL,
  `Description` text NOT NULL,
  `facebook` varchar(191) DEFAULT NULL,
  `instagram` varchar(191) DEFAULT NULL,
  `Main_logo` varchar(191) NOT NULL,
  `Cover_photo` varchar(191) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `Hotel_Name`, `Address`, `Contact_No`, `Link`, `Description`, `facebook`, `instagram`, `Main_logo`, `Cover_photo`, `user_id`, `Created_at`, `Updated_at`) VALUES
(1, 'Waters Edge', '316, Ethul Kotte Rd. Aturugiriya, Sri Lanka', '0112 863 863', 'watersedge.lk', 'Poised On The Edge Of Serene Water Ways And Framed By Luscious Green Pastures Dovetailed With Pools Filled With Exotic Water Lilies, “Waters Edge” Elucidates A Picturesque Tranquility In The Capital Of Sri Lanka. Situated In A Quaint Location The Hotel Proposes Various Islets Of Beauty, Comfort And Wellness, Offering Its Guests A Spacious State Of The Art Fitness Center,', 'https://www.facebook.com/WatersEdgeSL/', 'https://www.instagram.com/watersedgesl/', '1574348143.png', '1574348144.jpeg', 20, '2019-11-21 09:25:47', '2019-11-21 09:25:47'),
(2, 'Hotel Mount Lavinia', '100 Hotel Road Dehiwala 10350', '0112711711', 'https://www.mountlaviniahotel.com/', 'Mount Lavinia hotel is a luxury beach hotel famous for the many traditional weddings it has organized for couples who have arrived from around the world for their nuptials', 'https://www.facebook.com/mountlaviniahotel/', 'https://www.instagram.com/explore/locations/218074054/mount-lavinia-hotel/', '1574350747.jpg', '1574350748.jpg', 21, '2019-11-21 10:09:10', '2019-11-21 10:09:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `musicians`
--

CREATE TABLE `musicians` (
  `Id` int(11) NOT NULL,
  `Dj_Name` varchar(191) NOT NULL,
  `Address` varchar(191) NOT NULL,
  `ContactNo` varchar(20) NOT NULL,
  `Link` varchar(191) NOT NULL,
  `Description` text NOT NULL,
  `Playing_Hrs` int(11) NOT NULL,
  `Payment` decimal(10,2) NOT NULL,
  `Extra_Cost` decimal(10,2) NOT NULL,
  `Fire` varchar(20) NOT NULL,
  `Smoke` varchar(20) NOT NULL,
  `Lights` varchar(20) NOT NULL,
  `Main_Logo` varchar(191) NOT NULL,
  `pic1` varchar(191) NOT NULL,
  `pic2` varchar(191) NOT NULL,
  `pic3` varchar(191) NOT NULL,
  `pic4` varchar(191) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `musicians`
--

INSERT INTO `musicians` (`Id`, `Dj_Name`, `Address`, `ContactNo`, `Link`, `Description`, `Playing_Hrs`, `Payment`, `Extra_Cost`, `Fire`, `Smoke`, `Lights`, `Main_Logo`, `pic1`, `pic2`, `pic3`, `pic4`, `user_id`, `Created_at`, `Updated_at`) VALUES
(1, 'Fire Entertainment', '691/3, Wiliyam Gopallawa road, Kandy', '077 602 7028', 'https://www.facebook.com/pg/www.fireentertaiment.lk/about/?ref=page_internal', 'I am a  DJ Artist in Kandy are with all the new technologies and best music and sound for your  event. \r\nFell the music with us!!!!!!', 5, '25000.00', '7000.00', 'Not Available', 'Available', 'Available', '1574340245.jpg', '1574340246.jpg', '1574340247.jpg', '1574340305.jpg', '1574340248.jpg', 15, '2019-11-21 12:45:06', '2019-11-21 07:15:06'),
(2, 'DJ Hash', 'Katugasthota Kandy', '077 543 9090', 'https://www.facebook.com/pg/djHash.HarshaMendis/about/?ref=page_internal', 'I am a DJ in kandy area with all the various abilities of  DJ and Music. I covered all the range of  events and technologies.', 6, '17000.00', '3000.00', 'Available', 'Available', 'Available', '1574340905.jpg', '1574340906.jpg', '1574340907.jpg', '1574340946.jpg', '1574340908.jpg', 16, '2019-11-21 12:56:07', '2019-11-21 07:26:07'),
(3, 'Flash Music Band', 'Rupasiri Mawatha Nugegoda', '071 998 5000', 'https://www.facebook.com/flashnugegoda/', 'Our mussic band is one of the best  classic band in sri lanka. We cover Weddings , Parties and other events in jaffna area.', 6, '23000.00', '7000.00', 'Not Available', 'Available', 'Available', '1574341878.jpg', '1574341861.jpg', '1574341577.jpg', '1574341578.jpg', '1574341578.jpg', 17, '2019-11-21 13:11:18', '2019-11-21 07:41:18'),
(4, 'isu entertainment', 'colombo ,sri lanka', '0772998021', 'https://www.facebook.com/pg/isuentertainment/about/?ref=page_internal', 'Isuru Janith Known as His field name Dj Isu He Started Deejaying In age 14 born in Colombo Sri lanka , His Genres ware Progressive House , Tech House , Commercial House , Dutch House and House . Not only as a DJ Beyond That He tried To Be a Re-mixer and a Producer in 2009 .After Playing few Beach parties and club events he was a Most wanted Deejay in Sri lankan DJ Industry...... (All Type Of Music Are include)', 8, '50000.00', '6000.00', 'Not Available', 'Available', 'Available', '1574343054.jpg', '1574342984.jpg', '1574343019.jpg', '1574342985.jpg', '1574343038.jpg', 18, '2019-11-21 13:30:55', '2019-11-21 08:00:55'),
(5, 'Nalinda Pubudu Entertainment', 'No .13, Matale road , Akurana ,Kandy', '0714958932', 'https://www.facebook.com/nalinda.pubudu.7', 'Best DJ in jaffna area covering all the university events as DJ artist.', 7, '30000.00', '7000.00', 'Not Available', 'Available', 'Available', '1574344179.jpg', '1574344180.jpg', '1574344211.jpg', '1574344181.jpg', '1574344182.jpg', 19, '2019-11-21 13:50:13', '2019-11-21 08:20:13');

-- --------------------------------------------------------

--
-- Table structure for table `musician_events`
--

CREATE TABLE `musician_events` (
  `Id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Wedding` varchar(20) NOT NULL,
  `Birthday` varchar(20) NOT NULL,
  `Beach_Party` varchar(20) NOT NULL,
  `Get_Together` varchar(20) NOT NULL,
  `Parties` varchar(20) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `musician_events`
--

INSERT INTO `musician_events` (`Id`, `user_id`, `Wedding`, `Birthday`, `Beach_Party`, `Get_Together`, `Parties`, `Created_at`, `Updated_at`) VALUES
(1, 15, 'Available', 'Available', 'Available', 'Available', 'Available', '2019-11-21 07:14:09', '2019-11-21 07:14:09'),
(2, 16, 'Available', 'Available', 'Available', 'Available', 'Available', '2019-11-21 07:25:09', '2019-11-21 07:25:09'),
(3, 17, 'Available', 'Available', 'Available', 'Not Available', 'Available', '2019-11-21 07:36:19', '2019-11-21 07:36:19'),
(4, 18, 'Available', 'Available', 'Available', 'Available', 'Available', '2019-11-21 07:59:47', '2019-11-21 07:59:47'),
(5, 19, 'Available', 'Available', 'Available', 'Available', 'Available', '2019-11-21 08:19:43', '2019-11-21 08:19:43');

-- --------------------------------------------------------

--
-- Table structure for table `music_packages`
--

CREATE TABLE `music_packages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Package_Name` varchar(191) NOT NULL,
  `Hours` int(11) NOT NULL,
  `Services` text NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Pdf` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music_packages`
--

INSERT INTO `music_packages` (`id`, `user_id`, `Package_Name`, `Hours`, `Services`, `Price`, `Pdf`, `created_at`, `updated_at`) VALUES
(1, 19, 'Gold Package', 6, 'Firing Machine\r\nDJ Ligths & Disco Lights\r\nDJ 24x7\r\nNIgth Package\r\nOutside Events', '25000.00', '1574344883.pdf', '2019-11-21 08:31:23', '2019-11-21 08:31:23');

-- --------------------------------------------------------

--
-- Table structure for table `music_videos`
--

CREATE TABLE `music_videos` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Video_Name` varchar(191) NOT NULL,
  `Video` varchar(191) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music_videos`
--

INSERT INTO `music_videos` (`id`, `user_id`, `Video_Name`, `Video`, `Created_at`, `Updated_at`) VALUES
(1, 19, 'Nalinda Pubudu DJ', '1574345087.mp4', '2019-11-21 08:34:47', '2019-11-21 08:34:47');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photographies`
--

CREATE TABLE `photographies` (
  `id` int(11) NOT NULL,
  `Studio_Name` varchar(191) NOT NULL,
  `Address` varchar(191) NOT NULL,
  `ContactNo` varchar(20) NOT NULL,
  `Link` varchar(191) NOT NULL,
  `Description` text NOT NULL,
  `Drone` varchar(20) NOT NULL,
  `Wedding_Photography` varchar(20) NOT NULL,
  `Preshoot_Vedio` varchar(20) NOT NULL,
  `Wedding_Vedio` varchar(20) NOT NULL,
  `Album_Making` varchar(20) NOT NULL,
  `Wedding_Card` varchar(20) NOT NULL,
  `main_pic` varchar(191) NOT NULL,
  `pic1` varchar(191) NOT NULL,
  `pic2` varchar(191) NOT NULL,
  `pic3` varchar(191) NOT NULL,
  `pic4` varchar(191) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photographies`
--

INSERT INTO `photographies` (`id`, `Studio_Name`, `Address`, `ContactNo`, `Link`, `Description`, `Drone`, `Wedding_Photography`, `Preshoot_Vedio`, `Wedding_Vedio`, `Album_Making`, `Wedding_Card`, `main_pic`, `pic1`, `pic2`, `pic3`, `pic4`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Chanuka Samila Photography', 'N0.3 , Horana Road , Kalutara', '0727671463', 'https://www.facebook.com/chanuka.samila.5', 'Photographer with creative abilities and working experience of one year. Working hard as a photographer to achieve new level of photography', 'Not Available', 'Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', '1573940359.jpg', '1573940360.jpg', '1573940361.jpg', '1573940362.jpg', '1573940363.jpg', 2, '2019-11-16 16:09:24', '2019-11-16 16:09:24'),
(2, 'Studio 2b', '31/a/1, kiribathkumbura Kandy', '071 798 0909', 'https://www.facebook.com/MGDhanushkaPhotography/', 'Photographer with all capabilities. Specially covering Wedding ,preshoot ,event video,  Birthday and all the other special events in kandy area . I have so many services available  \r\nsuch as video coverge, photography , video makingetc.', 'Not Available', 'Available', 'Available', 'Available', 'Available', 'Available', '1573941632.jpg', '1573941633.jpg', '1573941634.jpg', '1573941722.jpg', '1573941760.jpg', 3, '2019-11-16 22:02:42', '2019-11-16 16:32:42'),
(3, 'Pathum Kulasooriya Photography', 'No .13, Matale road , Akurana ,Kandy', '0716565101', 'https://www.facebook.com/Pathum-Kulasooriya-Photography-314527002475199/', 'Creatrive Photographer with Newest technological elements and  Day and  night photography and also special packages for wedding , parties and also for trips .', 'Not Available', 'Available', 'Available', 'Available', 'Available', 'Available', '1573944885.jpg', '1573944827.jpg', '1573944829.jpg', '1573944908.jpg', '1573944830.jpg', 4, '2019-11-16 22:55:10', '2019-11-16 17:25:10'),
(4, 'BlueLine Photography', 'No.12, horana, Kalutara', '078 804 2574', 'https://www.facebook.com/pg/Blue-line-342429012892759/about/?ref=page_internal', 'BlueLine photography is the place where your event dreams come through .\r\nWe  cover your weddings, parties, professional events, and all your dream events with best memorable photographies.', 'Not Available', 'Available', 'Available', 'Available', 'Available', 'Available', '1573946291.jpg', '1573946292.jpg', '1573946399.jpg', '1573946293.jpg', '1573946499.jpg', 5, '2019-11-16 23:21:41', '2019-11-16 17:51:41'),
(5, 'LOOKATME', 'No. 4 , Olcat mawath ,Colombo', '076 688 8787', 'https://www.facebook.com/LOOKATME.LK/', 'We are the most popular upcoming professional photographic page in Sri Lanka. We would like to support you by covering your event as your official photography partner.', 'Not Available', 'Available', 'Available', 'Available', 'Available', 'Available', '1573953844.jpg', '1573953809.jpg', '1573953810.jpg', '1573953811.jpg', '1573953812.jpg', 6, '2019-11-17 01:24:04', '2019-11-16 19:54:04'),
(6, 'Sandeepa Tharinda Photography', 'N0.33 , Walimada , Badulla', '0713314134', 'https://www.facebook.com/jaffnaunilk/', 'I am a photographer who is officially  covering events in university of jaffna. And also i can cover any event in b adulla area.', 'Not Available', 'Available', 'Available', 'Not Available', 'Not Available', 'Not Available', '1573955083.jpg', '1573955119.jpg', '1573955084.jpg', '1573955085.jpg', '1573955086.jpg', 7, '2019-11-17 01:45:20', '2019-11-16 20:15:20'),
(7, 'Shehan Umayanga photography', 'No.3, Maravilla road, Wennapuwa , Puttalam', '0771233412', 'https://www.facebook.com/jaffnaunilk/', 'Covering day and night events with special discounts and packages that have special offers', 'Not Available', 'Available', 'Available', 'Not Available', 'Not Available', 'Not Available', '1573956364.jpg', '1573956250.jpg', '1573956298.jpg', '1573956251.jpg', '1573956252.jpg', 8, '2019-11-17 02:06:04', '2019-11-16 20:36:04'),
(8, 'Ma Creations', 'No,11 , Pannikar Road ,Jaffna', '0721132423', 'https://www.facebook.com/amanthaf', 'I am event photographer  with ability cover the  the events in jaffna and nuwara eliya with any time of the day.', 'Not Available', 'Available', 'Available', 'Not Available', 'Not Available', 'Not Available', '1573957236.jpg', '1573957175.jpg', '1573957176.jpg', '1573957208.jpg', '1573957177.jpg', 9, '2019-11-17 02:20:36', '2019-11-16 20:50:36'),
(9, 'Nalinda Pubudu Photography', 'N0. 4 , walapane Road, badulla', '0771231234', 'https://www.facebook.com/pg/jaffnaunilk/posts/?ref=page_internal', 'Photographer with ability cover various events in badulla , colombo and jaffna region. \r\nBest service with best equipment. Best  Supportive Crew with best pictures.', 'Not Available', 'Available', 'Available', 'Not Available', 'Available', 'Available', '1573963000.jpg', '1573963001.jpg', '1573964993.jpg', '1573963002.jpg', '1573963003.jpg', 10, '2019-11-17 04:29:54', '2019-11-16 22:59:54'),
(10, 'Srimal Saranga Photography', 'No.3, Dambulla Road, Dambulla.', '0772324156', 'https://www.facebook.com/jaffnaunilk/', 'Covering events in colombo, kandy ,jaffna, and matale. Covering weddings ,parties, trips and professional events.', 'Not Available', 'Available', 'Available', 'Available', 'Not Available', 'Not Available', '1573967298.jpg', '1573967345.jpg', '1573967388.jpg', '1573967431.jpg', '1573967300.jpg', 11, '2019-11-17 05:10:31', '2019-11-16 23:40:31'),
(11, 'OpenSky Photography', 'No.92, dankotuwa ,wennappuwa', '0777262612', 'https://www.facebook.com/Opensky-Photography-744168515962984/', 'Photography  and videography in dankotuwa ,colombo ,puttalam, ksndy ,jaffna areas.\r\nBest service for a reasonable price .', 'Not Available', 'Available', 'Available', 'Available', 'Not Available', 'Not Available', '1573977363.png', '1573977372.jpg', '1573977374.jpg', '1573977375.jpg', '1573977376.jpg', 12, '2019-11-17 02:26:17', '2019-11-17 02:26:17'),
(12, 'Studio Pabalu', 'Studio Pabalu, 21/1/3, Methsiripaya, Katugastota, Sri Lanka 20800', '077 717 6277', 'https://www.facebook.com/Madushan-Perera-Photography-178035069709196/', 'Photographer  covering events in kandy ,colombo , matale ,nuwara eliya and all other places with best services and ultimate experience of photography.', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', '1573978464.jpg', '1573978376.jpg', '1573978377.jpg', '1573978378.jpg', '1573978379.jpg', 13, '2019-11-17 08:14:25', '2019-11-17 02:44:25'),
(13, 'PV photography', 'no. 4, Colombo 4, Colombo', '0710913025', 'https://www.facebook.com/PathumVRphoto/', 'best photographing and videography with best equipment and  and any condition .\r\nWeather is not a issue Time is not a issuse.\r\nWe supply you our best service', 'Not Available', 'Available', 'Available', 'Available', 'Available', 'Available', '1573979449.jpg', '1573979450.jpg', '1573979451.jpg', '1573979452.jpg', '1573979452.jpg', 14, '2019-11-17 03:00:53', '2019-11-17 03:00:53');

-- --------------------------------------------------------

--
-- Table structure for table `photography_events`
--

CREATE TABLE `photography_events` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Wedding` varchar(20) NOT NULL,
  `Get_togather` varchar(20) NOT NULL,
  `Birthday` varchar(20) NOT NULL,
  `Competition` varchar(20) NOT NULL,
  `Professional_Events` varchar(20) NOT NULL,
  `Sports` varchar(20) NOT NULL,
  `Trips` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photography_events`
--

INSERT INTO `photography_events` (`id`, `user_id`, `Wedding`, `Get_togather`, `Birthday`, `Competition`, `Professional_Events`, `Sports`, `Trips`, `created_at`, `updated_at`) VALUES
(1, 2, 'Not Available', 'Available', 'Not Available', 'Available', 'Available', 'Available', 'Available', '2019-11-16 16:09:24', '2019-11-16 16:09:24'),
(2, 3, 'Available', 'Available', 'Not Available', 'Not Available', 'Available', 'Not Available', 'Not Available', '2019-11-16 16:30:36', '2019-11-16 16:30:36'),
(3, 4, 'Available', 'Available', 'Not Available', 'Not Available', 'Available', 'Available', 'Available', '2019-11-16 17:23:50', '2019-11-16 17:23:50'),
(4, 5, 'Available', 'Available', 'Not Available', 'Available', 'Available', 'Available', 'Available', '2019-11-16 17:48:15', '2019-11-16 17:48:15'),
(5, 6, 'Available', 'Available', 'Not Available', 'Available', 'Available', 'Not Available', 'Not Available', '2019-11-16 19:53:32', '2019-11-16 19:53:32'),
(6, 7, 'Available', 'Available', 'Not Available', 'Available', 'Available', 'Available', 'Available', '2019-11-16 20:14:46', '2019-11-16 20:14:46'),
(7, 8, 'Available', 'Available', 'Not Available', 'Not Available', 'Available', 'Available', 'Available', '2019-11-16 20:34:12', '2019-11-16 20:34:12'),
(8, 9, 'Available', 'Available', 'Not Available', 'Available', 'Available', 'Available', 'Available', '2019-11-16 20:49:38', '2019-11-16 20:49:38'),
(9, 10, 'Available', 'Available', 'Not Available', 'Available', 'Available', 'Available', 'Available', '2019-11-16 22:26:44', '2019-11-16 22:26:44'),
(10, 11, 'Not Available', 'Available', 'Not Available', 'Available', 'Available', 'Available', 'Available', '2019-11-16 23:38:21', '2019-11-16 23:38:21'),
(11, 12, 'Not Available', 'Available', 'Not Available', 'Available', 'Available', 'Available', 'Available', '2019-11-17 02:26:21', '2019-11-17 02:26:21'),
(12, 13, 'Available', 'Available', 'Not Available', 'Available', 'Available', 'Available', 'Available', '2019-11-17 02:43:01', '2019-11-17 02:43:01'),
(13, 14, 'Available', 'Available', 'Not Available', 'Available', 'Available', 'Available', 'Available', '2019-11-17 03:00:53', '2019-11-17 03:00:53');

-- --------------------------------------------------------

--
-- Table structure for table `photography_packages`
--

CREATE TABLE `photography_packages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Package_Name` varchar(191) NOT NULL,
  `Event_Type` varchar(191) NOT NULL,
  `Services` text NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Pdf` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photography_videos`
--

CREATE TABLE `photography_videos` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Video_Name` varchar(191) NOT NULL,
  `Video` varchar(191) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `planner_packages`
--

CREATE TABLE `planner_packages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Package_Name` varchar(191) NOT NULL,
  `Services` text NOT NULL,
  `Price` int(11) NOT NULL,
  `Pdf` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `poruwa_ceramonies`
--

CREATE TABLE `poruwa_ceramonies` (
  `id` int(11) NOT NULL,
  `Name` varchar(191) NOT NULL,
  `Address` varchar(191) NOT NULL,
  `Contact_No` varchar(20) NOT NULL,
  `Link` varchar(191) NOT NULL,
  `Description` text NOT NULL,
  `Poruwa_rituals` varchar(20) NOT NULL,
  `Poruwa_items` varchar(20) NOT NULL,
  `match_making` varchar(20) NOT NULL,
  `Astrological_support` varchar(20) NOT NULL,
  `jayamangala_gatha` varchar(20) NOT NULL,
  `Wedding_dancers` varchar(20) NOT NULL,
  `Cost` double NOT NULL,
  `Main_pic` varchar(191) NOT NULL,
  `pic1` varchar(191) NOT NULL,
  `pic2` varchar(191) NOT NULL,
  `pic3` varchar(191) NOT NULL,
  `pic4` varchar(191) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `poruwa_packages`
--

CREATE TABLE `poruwa_packages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Package_Name` varchar(191) NOT NULL,
  `Services` text NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Pdf` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(191) NOT NULL,
  `Email` varchar(191) NOT NULL,
  `Comment` text NOT NULL,
  `image` varchar(191) NOT NULL DEFAULT 'default.jpg',
  `rating` int(11) NOT NULL,
  `blocked` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reception_halls`
--

CREATE TABLE `reception_halls` (
  `id` int(11) NOT NULL,
  `Hall_Name` varchar(191) NOT NULL,
  `Address` varchar(191) NOT NULL,
  `Description` text NOT NULL,
  `Cost` decimal(10,2) NOT NULL,
  `Capacity` int(11) NOT NULL,
  `Square_feet` decimal(10,2) NOT NULL,
  `Overview` varchar(20) NOT NULL,
  `Main_pic` varchar(191) NOT NULL,
  `pic1` varchar(191) NOT NULL,
  `pic2` varchar(191) NOT NULL,
  `pic3` varchar(191) NOT NULL,
  `pic4` varchar(191) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reception_halls`
--

INSERT INTO `reception_halls` (`id`, `Hall_Name`, `Address`, `Description`, `Cost`, `Capacity`, `Square_feet`, `Overview`, `Main_pic`, `pic1`, `pic2`, `pic3`, `pic4`, `hotel_id`, `Created_at`, `Updated_at`) VALUES
(1, 'The Grand Ballroom', 'Colombo, Western Province, Sri Lanka', 'Upholding its reputation to its name, the grandest venue at Waters Edge is located on the 3rd floor, with a panoramic view of the lake and beyond. The unique column free feature ensures the largest seating capacity.', '1500000.00', 1000, '9072.00', 'Indoor', '1574348545.jpg', '1574348467.jpg', '1574348469.jpg', '1574348471.jpg', '1574348474.jpg', 1, '2019-11-21 15:02:28', '2019-11-21 09:32:28'),
(2, 'Empire Ballroom', 'Colombo, Sri Lanka', 'The Empire Ballroom boasts a colonial style architecture that accommodates up to 600 guests. It\'s blend of history and innovation provides aspiring couples with their dream wedding and a lifetime of memories.', '1400000.00', 600, '9012.00', 'Indoor', '1574350909.jpg', '1574350909.jpg', '1574350910.jpg', '1574350911.jpg', '1574350912.jpg', 2, '2019-11-21 10:11:53', '2019-11-21 10:11:53');

-- --------------------------------------------------------

--
-- Table structure for table `salons`
--

CREATE TABLE `salons` (
  `id` int(11) NOT NULL,
  `Salon_Name` varchar(191) NOT NULL,
  `Address` varchar(191) NOT NULL,
  `Contact_No` varchar(20) NOT NULL,
  `Link` varchar(191) NOT NULL,
  `Description` text NOT NULL,
  `Groom_Dressing` varchar(20) NOT NULL,
  `Bride_Dressing` varchar(20) NOT NULL,
  `Dress_Making` varchar(20) NOT NULL,
  `Jewelry` varchar(20) NOT NULL,
  `Makeup` varchar(20) NOT NULL,
  `Bridesman` varchar(20) NOT NULL,
  `Bridesmaid` varchar(20) NOT NULL,
  `HairStyle` varchar(20) NOT NULL,
  `Profile_Pic` varchar(191) NOT NULL,
  `pic1` varchar(191) NOT NULL,
  `pic2` varchar(191) NOT NULL,
  `pic3` varchar(191) NOT NULL,
  `pic4` varchar(191) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salons`
--

INSERT INTO `salons` (`id`, `Salon_Name`, `Address`, `Contact_No`, `Link`, `Description`, `Groom_Dressing`, `Bride_Dressing`, `Dress_Making`, `Jewelry`, `Makeup`, `Bridesman`, `Bridesmaid`, `HairStyle`, `Profile_Pic`, `pic1`, `pic2`, `pic3`, `pic4`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Salon Champi', '600, Nawala Rd Rajagiriya', '0773053912', 'https://www.facebook.com/pg/ChampiSiriwardena/about/?ref=page_internal', 'Under the direction of Salon Champi our stylists have been achieving the hottest looks for years. Our hair dressers & bridal wearers bring the latest styles and trends from around the world to Sri Lanka', 'Available', 'Not Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', '1574356025.jpg', '1574356026.jpg', '1574356138.jpg', '1574356027.jpg', '1574356028.jpg', 24, '2019-11-21 17:09:00', '2019-11-21 11:39:00'),
(2, 'Vish Salon', '41/A kolonnawa Road,Gothatuwa new town. Angoda, Sri Lanka', '077 775 4534', 'https://www.facebook.com/Vish-Salon-240149112851786/', 'Bridal and groom designers in colombo with special dress designing facilities.', 'Not Available', 'Not Available', 'Available', 'Available', 'Available', 'Not Available', 'Available', 'Available', '1574369301.jpg', '1574369302.jpg', '1574369305.jpg', '1574369306.jpg', '1574369307.png', 25, '2019-11-21 15:18:29', '2019-11-21 15:18:29');

-- --------------------------------------------------------

--
-- Table structure for table `salon_events`
--

CREATE TABLE `salon_events` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `wedding` varchar(20) NOT NULL,
  `parties` varchar(20) NOT NULL,
  `fashion_show` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salon_events`
--

INSERT INTO `salon_events` (`id`, `user_id`, `wedding`, `parties`, `fashion_show`, `created_at`, `updated_at`) VALUES
(1, 24, 'Available', 'Available', 'Available', '2019-11-21 11:37:10', '2019-11-21 11:37:10'),
(2, 25, 'Available', 'Available', 'Available', '2019-11-21 15:18:29', '2019-11-21 15:18:29');

-- --------------------------------------------------------

--
-- Table structure for table `salon_packages`
--

CREATE TABLE `salon_packages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Package_Name` varchar(191) NOT NULL,
  `Event_Type` varchar(191) NOT NULL,
  `Services` text NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Pdf` varchar(191) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salon_packages`
--

INSERT INTO `salon_packages` (`id`, `user_id`, `Package_Name`, `Event_Type`, `Services`, `Price`, `Pdf`, `Created_at`, `updated_at`) VALUES
(1, 24, 'Homecoming package', 'Homecoming', 'Bride Dressing\r\nGroom dressing\r\nBride and groom dress making\r\nFlower girls and boys gress making\r\nMakeup\r\nFacial', '50000.00', '1574356553.pdf', '2019-11-21 11:45:53', '2019-11-21 11:45:53');

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `id` int(11) NOT NULL,
  `Name` varchar(191) NOT NULL,
  `Email` varchar(191) NOT NULL,
  `Contact_No` varchar(30) NOT NULL,
  `Regarding` varchar(20) NOT NULL,
  `Message` text NOT NULL,
  `state` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transporters`
--

CREATE TABLE `transporters` (
  `id` int(11) NOT NULL,
  `Transport_Service` varchar(191) NOT NULL,
  `Address` varchar(191) NOT NULL,
  `Contact_No` varchar(20) NOT NULL,
  `Link` varchar(191) NOT NULL,
  `Description` text NOT NULL,
  `driver` varchar(20) NOT NULL,
  `decoration` varchar(20) NOT NULL,
  `rent_hours` int(11) NOT NULL,
  `rent_km` decimal(10,2) NOT NULL,
  `Main_pic` varchar(191) NOT NULL,
  `pic1` varchar(191) NOT NULL,
  `pic2` varchar(191) NOT NULL,
  `pic3` varchar(191) NOT NULL,
  `pic4` varchar(191) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transport_categories`
--

CREATE TABLE `transport_categories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `luxury` varchar(20) NOT NULL,
  `classic` varchar(20) NOT NULL,
  `vintage` varchar(20) NOT NULL,
  `horse_cart` varchar(20) NOT NULL,
  `air` varchar(20) NOT NULL,
  `travelling_coach` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transport_packages`
--

CREATE TABLE `transport_packages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Package_Name` varchar(191) NOT NULL,
  `Transport_type` varchar(191) NOT NULL,
  `vehicle` varchar(191) NOT NULL,
  `picture` varchar(191) NOT NULL,
  `decoration` varchar(20) NOT NULL,
  `driver` varchar(20) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `category`, `city`, `admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sahan Herath', 'sahand.herath@gmail.com', NULL, 'admin', 'Kandy', 1, '$2y$10$PvPhV6m.Xsoxq/hdZEg06OW7oIaJrQjOwkXb3pgppez.rw1wUtXQm', NULL, '2019-11-16 14:43:02', '2019-11-16 15:06:34'),
(2, 'Chanuka Samila', 'chanukasamila@gmail.com', NULL, 'Photography', 'Kalutara', 0, '$2y$10$z3RG0enTpHkg4M9tWTMvDuSFqeoTOfAfY5BOnYfk0HYqMcuPkpeCG', NULL, '2019-11-16 16:04:58', '2019-11-16 16:04:58'),
(3, 'M.G. Dhanushka', 'studio2bkandy@gmail.com', NULL, 'Photography', 'Kandy', 0, '$2y$10$68F9h6y6mRjyT6Xo0Ys4S.I9jTtmboNJw4PX5KOnDpZ7csVkFlULC', NULL, '2019-11-16 16:22:37', '2019-11-16 16:22:37'),
(4, 'Pathum Kulasooriya', 'pathumkulasooriya96@gmail.com', NULL, 'Photography', 'Kandy', 0, '$2y$10$DTXcp0Vhu2fTaja7udmc0.i6iPvRMdDYbb0MfVglTSOafMksEWYV.', NULL, '2019-11-16 17:10:34', '2019-11-16 17:10:34'),
(5, 'Yasiru Lakshan Lokuwithana', 'yasirulakshan10@gmail.com', NULL, 'Photography', 'Kalutara', 0, '$2y$10$bbrlP0Z53CLOd5DK0GInjuYr9PakbsLdBVx88DVMCcLLor7X/rYH.', NULL, '2019-11-16 17:36:10', '2019-11-16 17:36:10'),
(6, 'LOOKATME', 'LOOKATME@gmail.com', NULL, 'Photography', 'Colombo', 0, '$2y$10$ByPUffTi0v44i9x6Jg/hRuXR2ZzniIHm/ppKj9z7ln9s0AxvKy8YG', NULL, '2019-11-16 19:20:47', '2019-11-16 19:20:47'),
(7, 'Sandeepa Tharinda', 'sandeepatharu@gmail.com', NULL, 'Photography', 'Badulla', 0, '$2y$10$2QOHLob6YZO7qVwpONlYaeyZNBhrX8BJHw222Za.e32Z4Ngf6iTUO', NULL, '2019-11-16 20:06:50', '2019-11-16 20:06:50'),
(8, 'Shehan Umayanga', 'shashenumayanga@gmail.com', NULL, 'Photography', 'Nattandiya', 0, '$2y$10$9L4keQ2azwf0zOKOcLNcmenHd9cmjW.wB/UcIHzU3eZPzg5ephRu6', NULL, '2019-11-16 20:27:00', '2019-11-16 20:35:27'),
(9, 'Manjitha  Dissanayaka', 'manjitha99@gmail.com', NULL, 'Photography', 'Nuwara Eliya', 0, '$2y$10$vlXNOCN.bNI10cKAVi4tw.ZxIq8skiabAj62KMKUpeIIuF5YcFO0W', NULL, '2019-11-16 20:39:12', '2019-11-16 20:39:12'),
(10, 'Nalinda Pubudu', 'ies.nalindapubudu@gmail.com', NULL, 'Photography', 'Badulla', 0, '$2y$10$5vilkTmc/fBTo0w1wJMGk.D7t7UtdPalo7Vh7PjBh1WXgD/kZVQzW', NULL, '2019-11-16 22:20:40', '2019-11-16 22:20:40'),
(11, 'srimal saranga', 'srimalsaranga1@gmail.com', NULL, 'Photography', 'Dambulla', 0, '$2y$10$Ko1ccXU6VywDHocka.raQujzlMcoN/TGE8wlOJe0jWS9wWOzBsw.e', NULL, '2019-11-16 23:22:09', '2019-11-16 23:22:09'),
(12, 'Ashan Navinda', '95shnavi@gmail.com', NULL, 'Photography', 'Dankotuwa', 0, '$2y$10$WrEgELvY004yL2fSDtPso.nejs6aO0IBqMA9NRqHL31uE4q7i/ae2', NULL, '2019-11-17 02:20:32', '2019-11-17 02:20:32'),
(13, 'Madhushanka Perera', 'padaludigital@gmail.com', NULL, 'Photography', 'Kandy', 0, '$2y$10$LobCDQvRim4WK2jTPTv0ieuCV/6h8sFEpLUuv6de7.O5a3kG3eoHK', NULL, '2019-11-17 02:37:36', '2019-11-17 02:37:36'),
(14, 'Pathum V Ranasinghe', 'vrpathum94@gmail.com', NULL, 'Photography', 'Colombo', 0, '$2y$10$ooMxWxgcoKRO9P18Lh3bXOkASj8KrEK2ITo9LE4RvTZE3WnAYYGTu', NULL, '2019-11-17 02:56:48', '2019-11-17 02:56:48'),
(15, 'DJ Kalu', 'fireentertainment@gmail.com', NULL, 'Music', 'Kalu', 0, '$2y$10$RYhvWRmR9mdY7RRbLoMT8eNAPf0Na/yO41R0Wi9TpsXeHpMt13iUy', NULL, '2019-11-21 07:06:20', '2019-11-21 07:06:20'),
(16, 'Harsha Mendis', 'harshamendis@gmail.com', NULL, 'Music', 'kandy', 0, '$2y$10$pTTpYdKvVNNoc73lGfb22uiicag/PUHxoWxuxuJWzcVzkr2uoJEQ.', NULL, '2019-11-21 07:19:33', '2019-11-21 07:19:33'),
(17, 'Flash Music', 'flashbands@gmail.com', NULL, 'Music', 'Nugegoda', 0, '$2y$10$v4IKizsNBSxxS4qfzwXNDerR39oN1wxUbnwPsp7AQaosdTI4FXubq', NULL, '2019-11-21 07:30:18', '2019-11-21 07:30:18'),
(18, 'Isuru Janith', 'isurujanith@gmail.com', NULL, 'Music', 'colombo', 0, '$2y$10$91gnPe9BAMhxdiN82sRa5urEESAvgSrHm4TZ9M1Lwpz58f2Zyi0re', NULL, '2019-11-21 07:56:54', '2019-11-21 07:56:54'),
(19, 'Nalinda Pubudu', 'nalindapubudu@gmail.com', NULL, 'Music', 'Badulla', 0, '$2y$10$f8Cm8ffm8/RH4qx840MHKOjStqfxSpYN5.fq8bD6Ash0YLgSrk43e', NULL, '2019-11-21 08:12:27', '2019-11-21 08:12:27'),
(20, 'Waters Edge', 'we@watersedge.lk', NULL, 'Hall', 'battaramulla', 0, '$2y$10$4GIJIDZKrkZTeppfLR0igeebg.Wy3ta.dZZeMH9tAc4EfFL1ldwUO', NULL, '2019-11-21 09:21:28', '2019-11-21 09:21:28'),
(21, 'Mount Lavinia', 'reservation@mountlaviniahotel.com', NULL, 'Hall', 'Colombo', 0, '$2y$10$zmO2p7Q23EMVX3Dmn9A0IeREJZxMNcnQ5P.NL9OeDsmjNgVcq8LQu', NULL, '2019-11-21 09:59:57', '2019-11-21 09:59:57'),
(22, 'Lassana Flora', 'info@lassanaflora.com', NULL, 'Decoration', 'Colombo', 0, '$2y$10$yOOVZ35bjeyXubFMnLWGhOyBqxdyRbNHLIqeJ5g3DoANPjDC7PzCq', NULL, '2019-11-21 10:40:00', '2019-11-21 10:40:00'),
(23, 'Designer Wedding', 'dsignerwedding@gmail.com', NULL, 'Decoration', 'Maharagama', 0, '$2y$10$Z8mFoyOcCEskqSUTfwsEP.IfJTtXUsS6mU0Tks1r0yRd2/02r3P/W', NULL, '2019-11-21 11:01:46', '2019-11-21 11:01:46'),
(24, 'Champi Siriwardana', 'champisiriwardanasalon@gmail.com', NULL, 'Bridel_Designers', 'Colombo', 0, '$2y$10$C7WnceSAsJyvzbSFRXfni.GUQlMdDTKawMd7PdhTt8kLKAvZjTdjC', NULL, '2019-11-21 11:33:47', '2019-11-21 11:33:47'),
(25, 'Vishaka Fernando', 'vishakafernando@gmail.com', NULL, 'Bridel_Designers', 'Colombo', 0, '$2y$10$.L19xkUlajFomPcl4Tw8pePhU0OJeRBwsrcOIEuBUqP5fkeYFNZQe', NULL, '2019-11-21 15:13:43', '2019-11-21 15:13:43'),
(26, 'Vimod Ranasinghe', 'tharangadance@gmail.com', NULL, 'Dancing', 'Dehiwala', 0, '$2y$10$ylg61NyTIJ3K2iTso5w/cuDfiUYV63i7f0yo1LgUVBbqB/zniGZIe', NULL, '2019-11-21 15:25:04', '2019-11-21 15:25:04'),
(27, 'Ramod Malaka', 'coolsteps@gmail.com', NULL, 'Dancing', 'Colombo', 0, '$2y$10$nIbo1CbXZRh.kD7OqkcVXeegei8wr0lnwuU0MmKRjXEIsJtLlEZ6C', NULL, '2019-11-21 15:35:18', '2019-11-21 15:35:18'),
(28, 'Kanrich Cake', 'kanrichcake@gmail.com', NULL, 'Cake_Designers', 'Kadawatha', 0, '$2y$10$ACn.tqzC6v1hv2QxQSzIze1DwofBCXjyWm6c9x2ZsbA4JgDMUMkVm', NULL, '2019-11-21 16:18:39', '2019-11-21 16:18:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `actor_events`
--
ALTER TABLE `actor_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `actor_packages`
--
ALTER TABLE `actor_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cake_designers`
--
ALTER TABLE `cake_designers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cake_packages`
--
ALTER TABLE `cake_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caterings`
--
ALTER TABLE `caterings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catering_events`
--
ALTER TABLE `catering_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catering_packages`
--
ALTER TABLE `catering_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `costume_designers`
--
ALTER TABLE `costume_designers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `costume_designer_events`
--
ALTER TABLE `costume_designer_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `costume_packages`
--
ALTER TABLE `costume_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dancers`
--
ALTER TABLE `dancers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dancer_events`
--
ALTER TABLE `dancer_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dance_packages`
--
ALTER TABLE `dance_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dance_videos`
--
ALTER TABLE `dance_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `decoration_packages`
--
ALTER TABLE `decoration_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `decorators`
--
ALTER TABLE `decorators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `decorator_events`
--
ALTER TABLE `decorator_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_planners`
--
ALTER TABLE `event_planners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_planners_events`
--
ALTER TABLE `event_planners_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hall_events`
--
ALTER TABLE `hall_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hall_features`
--
ALTER TABLE `hall_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hall_packages`
--
ALTER TABLE `hall_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hall_table_arrangements`
--
ALTER TABLE `hall_table_arrangements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `musicians`
--
ALTER TABLE `musicians`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `musician_events`
--
ALTER TABLE `musician_events`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `music_packages`
--
ALTER TABLE `music_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music_videos`
--
ALTER TABLE `music_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photographies`
--
ALTER TABLE `photographies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photography_events`
--
ALTER TABLE `photography_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photography_packages`
--
ALTER TABLE `photography_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photography_videos`
--
ALTER TABLE `photography_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planner_packages`
--
ALTER TABLE `planner_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poruwa_ceramonies`
--
ALTER TABLE `poruwa_ceramonies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poruwa_packages`
--
ALTER TABLE `poruwa_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reception_halls`
--
ALTER TABLE `reception_halls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salons`
--
ALTER TABLE `salons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salon_events`
--
ALTER TABLE `salon_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salon_packages`
--
ALTER TABLE `salon_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transporters`
--
ALTER TABLE `transporters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport_categories`
--
ALTER TABLE `transport_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport_packages`
--
ALTER TABLE `transport_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `actor_events`
--
ALTER TABLE `actor_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `actor_packages`
--
ALTER TABLE `actor_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `cake_designers`
--
ALTER TABLE `cake_designers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cake_packages`
--
ALTER TABLE `cake_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `caterings`
--
ALTER TABLE `caterings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catering_events`
--
ALTER TABLE `catering_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catering_packages`
--
ALTER TABLE `catering_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `costume_designers`
--
ALTER TABLE `costume_designers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `costume_designer_events`
--
ALTER TABLE `costume_designer_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `costume_packages`
--
ALTER TABLE `costume_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dancers`
--
ALTER TABLE `dancers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dancer_events`
--
ALTER TABLE `dancer_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dance_packages`
--
ALTER TABLE `dance_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dance_videos`
--
ALTER TABLE `dance_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `decoration_packages`
--
ALTER TABLE `decoration_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `decorators`
--
ALTER TABLE `decorators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `decorator_events`
--
ALTER TABLE `decorator_events`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_planners`
--
ALTER TABLE `event_planners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_planners_events`
--
ALTER TABLE `event_planners_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hall_events`
--
ALTER TABLE `hall_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hall_features`
--
ALTER TABLE `hall_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hall_packages`
--
ALTER TABLE `hall_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hall_table_arrangements`
--
ALTER TABLE `hall_table_arrangements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `musicians`
--
ALTER TABLE `musicians`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `musician_events`
--
ALTER TABLE `musician_events`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `music_packages`
--
ALTER TABLE `music_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `music_videos`
--
ALTER TABLE `music_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `photographies`
--
ALTER TABLE `photographies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `photography_events`
--
ALTER TABLE `photography_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `photography_packages`
--
ALTER TABLE `photography_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photography_videos`
--
ALTER TABLE `photography_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `planner_packages`
--
ALTER TABLE `planner_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poruwa_ceramonies`
--
ALTER TABLE `poruwa_ceramonies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poruwa_packages`
--
ALTER TABLE `poruwa_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reception_halls`
--
ALTER TABLE `reception_halls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `salons`
--
ALTER TABLE `salons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `salon_events`
--
ALTER TABLE `salon_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `salon_packages`
--
ALTER TABLE `salon_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transporters`
--
ALTER TABLE `transporters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transport_categories`
--
ALTER TABLE `transport_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transport_packages`
--
ALTER TABLE `transport_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
