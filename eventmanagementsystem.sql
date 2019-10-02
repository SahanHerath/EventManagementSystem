-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2019 at 11:42 PM
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

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`id`, `Actor_name`, `Address`, `Contact_No`, `Link`, `Description`, `Singer`, `Magician`, `Comedian`, `Actor`, `Announcer`, `Entertainer`, `Other`, `Main_pic`, `pic1`, `pic2`, `pic3`, `pic4`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'drtwefe', 'werewr', '12613123123', 'werw', 'sdsdfdsfs', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', '1569926751.png', '1569927532.jpg', '1569927550.jpg', '1569927570.jpg', '1569927588.jpg', 39, '2019-10-01 10:59:49', '2019-10-01 05:29:49');

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

--
-- Dumping data for table `actor_events`
--

INSERT INTO `actor_events` (`id`, `user_id`, `Birthday`, `Party`, `Professional_event`, `Musical_event`, `Corporate_event`, `created_at`, `updated_at`) VALUES
(1, 39, 'Available', 'Available', 'Available', 'Available', 'Available', '2019-09-18 14:26:08', '2019-09-18 14:26:08');

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
(1, 'dfdfsd', 'fsdfsd', '0776530129', 'sdfsd', 'fdfasdfs', 'Available', 'Available', 'Available', 'Not Available', 'Not Available', 'Not Available', '1568816915.jpg', '1568816916.jpg', '1568816918.jpg', '1568816919.jpg', '1568816921.jpg', 33, '2019-09-18 08:58:42', '2019-09-18 08:58:42'),
(2, 'Sahan', 'Nagaha', '0776530129', 'sahan.com', 'you are me', 'Available', 'Not Available', 'Not Available', 'Available', 'Available', 'Available', '1569920214.jpg', '1569925061.jpg', '1569925081.jpg', '1569925101.jpg', '1569925119.jpeg', 57, '2019-10-01 10:18:41', '2019-10-01 04:48:41');

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

--
-- Dumping data for table `caterings`
--

INSERT INTO `caterings` (`id`, `Service_Name`, `Address`, `Contact_No`, `Link`, `Description`, `Welcome_drink`, `Catering_set`, `Catering_tent`, `Cake`, `Special_Food`, `Garden_umbrella`, `Coffee_Machine`, `Table_chair`, `sink`, `dessert`, `Main_pic`, `pic1`, `pic2`, `pic3`, `pic4`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'trete', 'ertert', '5346534345345', 'gregrgew', 'erewrewr', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', '1569913680.jpg', '1569914472.jpg', '1569914776.jpg', '1569914797.jpg', '1569914758.jpg', 38, '2019-10-01 07:26:38', '2019-10-01 01:56:38'),
(2, 'sahan', 'sahan', '0711443304', 'sahan.com', 'i am sahan', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', '1569256894.jpg', '1569256895.jpg', '1569256897.jpg', '1569256898.jpg', '1569256899.jpg', 56, '2019-09-23 19:01:05', '2019-09-23 13:31:05');

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

--
-- Dumping data for table `catering_events`
--

INSERT INTO `catering_events` (`id`, `user_id`, `Wedding`, `Birthday`, `Party`, `Corporate_event`, `Funeral`, `created_at`, `updated_at`) VALUES
(1, 38, 'Available', 'Available', 'Available', 'Available', 'Available', '2019-09-18 13:23:41', '2019-09-18 13:23:41'),
(2, 56, 'Available', 'Available', 'Available', 'Available', 'Available', '2019-09-23 17:22:06', '2019-09-23 11:52:06');

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

--
-- Dumping data for table `costume_designers`
--

INSERT INTO `costume_designers` (`id`, `Name`, `Address`, `Contact_No`, `Link`, `Description`, `wedding_dress_designs`, `clothing_orders`, `sport_kit_designs`, `saree_work`, `traditional_dress`, `gents_wear`, `ladies_wear`, `gents_foot_wear`, `ladies_foot_wear`, `sports_shoes`, `Main_pic`, `pic1`, `pic2`, `pic3`, `pic4`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'efdfs', 'sdfsd', '324234235423', 'dgdfgdfg', 'dfgdfgfdgdf', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', '1568838960.jpg', '1568838962.jpg', '1568838964.jpg', '1568838965.jpg', '1568838967.jpg', 40, '2019-09-18 15:06:08', '2019-09-18 15:06:08'),
(2, 'vdvdfvd', 'vdfdfvdf', '1232547568', 'refergerher', 'ergergreg', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', '1568839357.jpg', '1568839359.jpg', '1568839360.jpg', '1568839362.jpg', '1568839363.jpg', 41, '2019-09-18 15:12:45', '2019-09-18 15:12:45'),
(3, 'fwefwe', 'fwefwe', '5342748724872', 'fwefewf', 'efwef', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', '1568839849.jpg', '1568839851.jpg', '1568839852.jpg', '1568839854.jpg', '1568839855.jpg', 42, '2019-09-18 15:20:57', '2019-09-18 15:20:57'),
(4, 'fewef', 'wefwef', '45435346346', 'vdfvdfbdfb', 'fgegerger', 'Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', '1568840344.jpg', '1568840345.jpg', '1568840347.jpg', '1568840348.jpg', '1568840350.jpg', 43, '2019-09-18 15:29:11', '2019-09-18 15:29:11'),
(5, 'dfsd', 'dsfsd', '23423785324823', 'sdf', 'fwefwefwe', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', '1569902131.jpg', '1569911301.png', '1569911329.jpg', '1569911349.jpg', '1569911369.jpg', 44, '2019-10-01 06:29:30', '2019-10-01 00:59:30'),
(6, 'sahan', 'sahan', '07776530129', 'me mai', 'they are', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', '1569320078.jpg', '1569320080.jpg', '1569320081.jpg', '1569320083.jpg', '1569320083.jpg', 60, '2019-09-24 12:47:48', '2019-09-24 07:17:48');

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

--
-- Dumping data for table `costume_designer_events`
--

INSERT INTO `costume_designer_events` (`id`, `user_id`, `Wedding`, `Party`, `fashion_show`, `sports`, `Coperate_event`, `created_at`, `updated_at`) VALUES
(1, 40, 'Available', 'Available', 'Available', 'Not Available', 'Available', '2019-09-18 15:06:08', '2019-09-18 15:06:08'),
(2, 41, 'Available', 'Available', 'Available', 'Not Available', 'Available', '2019-09-18 15:12:45', '2019-09-18 15:12:45'),
(3, 42, 'Available', 'Not Available', 'Available', 'Not Available', 'Not Available', '2019-09-18 15:20:57', '2019-09-18 15:20:57'),
(4, 43, 'Available', 'Available', 'Available', 'Not Available', 'Available', '2019-09-18 15:29:12', '2019-09-18 15:29:12'),
(5, 44, 'Available', 'Available', 'Available', 'Available', 'Available', '2019-09-18 15:36:57', '2019-09-18 15:36:57'),
(6, 60, 'Available', 'Available', 'Available', 'Available', 'Available', '2019-09-24 11:32:01', '2019-09-24 06:02:01');

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
(1, 'fsdf', 'sdfds', '0776530129', 'dsfds', 'sdfsdsd', 'Available', 'Female', 'Not Available', 'Available', 'Available', 'Available', 'Not Available', 'Not Available', '1568804159.jpg', '1568804161.jpg', '1568804162.jpg', '1568804164.jpg', '1568804165.jpg', 31, '2019-09-18 05:26:06', '2019-09-18 05:26:06'),
(2, 'caascas', 'cascasca', '32132131267688', 'csacass', 'dcsdvsdvds', 'Not Available', 'Male', 'Available', 'Not Available', 'Not Available', 'Available', 'Available', 'Available', '1569873824.jpg', '1569874912.jpg', '1569874936.jpg', '1569874959.jpg', '1569874982.jpg', 48, '2019-09-30 20:23:05', '2019-09-30 14:53:05');

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
(1, 31, 'Not Available', 'Available', 'Available', 'Available', '2019-09-18 05:26:07', '2019-09-18 05:26:07'),
(2, 48, 'Available', 'Available', 'Available', 'Not Available', '2019-09-21 14:43:01', '2019-09-21 09:13:01');

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
(2, 48, 'Gold Package', 'salsa', 'dscs', 2132, '1569960799.pdf', '2019-10-01 14:43:19', '2019-10-01 14:43:19');

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
(2, 48, 'saban', '1569985303.mp4', '2019-10-01 21:31:43', '2019-10-01 21:31:43');

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
(5, 68, 'package12', 'asaf', 'ewfewf', '2131231.00', '1569667226.pdf', '2019-09-29 07:20:53', '2019-09-29 01:50:53'),
(9, 68, 'Gold Package', 'Glass', 'ssfsdsggrg', '12000.00', '1569778600.pdf', '2019-09-29 12:06:40', '2019-09-29 12:06:40');

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
(1, 'kdfhkjsjfk', 'efwe', 'jzsjhsdf', 'fewfwe', 'fefsefs', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Not Available', '1567765328.jpg', '1567765329.jpg', '1567765331.jpg', '1567765332.jpg', '1567765334.jpg', 14, '2019-09-06 04:52:15', '2019-09-06 04:52:15'),
(2, 'hshjfs', 'hjvdjgdf', 'jshbckjsdjkfsd', 'vdjhdks', 'dxbvnjdsfjks', 'Available', 'Available', 'Not Available', 'Available', 'Available', 'Available', 'Available', '1567963713.jpg', '1567963715.jpg', '1567963716.jpg', '1567963718.jpg', '1567963720.jpg', 15, '2019-09-08 11:58:41', '2019-09-08 11:58:41'),
(3, 'sggdsaghda', 'nagahaella rd kandy', 'hjjk', '+94776530129', 'www.jfn.ac.lk', 'Available', 'Available', 'Available', 'Available', 'Not Available', 'Available', 'Not Available', '1569006243.jpg', '1569006244.jpg', '1569006246.jpg', '1569006247.jpg', '1569006249.jpg', 47, '2019-09-21 20:30:48', '2019-09-21 15:00:48'),
(5, 'Sahan', 'sdfsdfsd', 'fsdfsdfsf', '4535789053453', 'dsfsdf', 'Available', 'Not Available', 'Not Available', 'Available', 'Available', 'Available', 'Not Available', '1569741586.jpg', '1569742114.jpg', '1569740307.jpg', '1569740368.jpeg', '1569740388.jpg', 68, '2019-09-29 07:28:35', '2019-09-29 01:58:35');

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
(1, 14, 'Available', 'Available', 'Available', 'Available', 'Not Available', '2019-09-06 04:52:16', '2019-09-06 04:52:16'),
(2, 15, 'Not Available', 'Available', 'Available', 'Available', 'Available', '2019-09-08 11:58:41', '2019-09-08 11:58:41'),
(3, 47, 'Available', 'Available', 'Available', 'Available', 'Available', '2019-09-21 04:41:44', '2019-09-20 23:11:44'),
(5, 68, 'Available', 'Available', 'Available', 'Available', 'Available', '2019-09-29 07:18:28', '2019-09-29 01:48:28');

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

--
-- Dumping data for table `event_planners`
--

INSERT INTO `event_planners` (`id`, `Organization_name`, `Address`, `Contact_No`, `Link`, `Description`, `Main_pic`, `pic1`, `pic2`, `pic3`, `pic4`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'ferfer', 'ferfe', '0776530129', 'erfer', 'erfref', '1569867656.jpg', '1569872298.jpg', '1569872318.jpg', '1569872340.jpg', '1569872359.jpg', 32, '2019-09-30 19:39:21', '2019-09-30 14:09:21'),
(2, 'sahan', 'me', '222222222225', 'sahan.com', 'skhasdjkasd', '1569304867.jpg', '1569304869.jpg', '1569304871.jpg', '1569304872.jpg', '1569304873.jpg', 58, '2019-09-24 06:33:59', '2019-09-24 01:03:59');

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

--
-- Dumping data for table `event_planners_events`
--

INSERT INTO `event_planners_events` (`id`, `user_id`, `Wedding`, `Parties`, `Meetings`, `Corporate_event`, `Outside_event`, `Sport_event`, `created_at`, `updated_at`) VALUES
(1, 32, 'Available', 'Available', 'Available', 'Available', 'Not Available', 'Not Available', '2019-09-18 08:26:30', '2019-09-18 08:26:30'),
(2, 58, 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', '2019-09-24 06:12:24', '2019-09-24 00:42:24');

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
(1, 1, 'Available', 'Available', 'Not Available', 'Not Available', 'Not Available', '2019-08-28 11:47:57', '2019-08-28 11:47:57'),
(2, 1, 'Available', 'Available', 'Available', 'Available', 'Available', '2019-08-30 12:27:49', '2019-08-30 12:27:49'),
(4, 4, 'Available', 'Available', 'Available', 'Available', 'Not Available', '2019-09-18 10:47:08', '2019-09-18 10:47:08'),
(10, 10, 'Available', 'Available', 'Available', 'Available', 'Not Available', '2019-09-25 14:01:32', '2019-09-25 14:01:32'),
(11, 11, 'Available', 'Available', 'Available', 'Available', 'Not Available', '2019-10-01 07:59:26', '2019-10-01 07:59:26');

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
(1, 1, 'Available', 'Available', 'Available', 'Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', '2019-08-28 11:47:57', '2019-08-28 11:47:57'),
(3, 4, 'Available', 'Available', 'Available', 'Available', 'Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', '2019-09-18 10:47:08', '2019-09-18 10:47:08'),
(9, 10, 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', '2019-09-25 14:01:32', '2019-09-25 14:01:32'),
(10, 11, 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', '2019-10-01 07:59:26', '2019-10-01 07:59:26');

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
(1, 1, 'Available', 'Available', 'Available', 'Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', '2019-08-28 11:47:57', '2019-08-28 11:47:57'),
(3, 4, 'Available', 'Available', 'Available', 'Available', 'Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', '2019-09-18 10:47:08', '2019-09-18 10:47:08'),
(9, 10, 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', '2019-09-25 14:01:32', '2019-09-25 14:01:32'),
(10, 11, 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Not Available', 'Not Available', 'Not Available', '2019-10-01 07:59:27', '2019-10-01 07:59:27');

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
(1, 'ffgghfh', 'gyyu', 'ghy', 'tryyuyuk', 'ghhjkj TYPE, KIND, SORT, NATURE, DESCRIPTION, CHARACTER mean a number of individuals thought of as a group because of a common quality or qualities. TYPE may suggest strong and clearly marked similarity throughout the items included so that each is typical of the group.  one of three basic body types  KIND may suggest natural grouping.  a zoo seemingly having animals of every kind  SORT often suggests some ', 'yfggjhjh', 'ghjjjh', '1567012588.jpg', '1567012590.jpg', 1, '2019-08-30 08:25:12', '2019-08-30 08:25:12'),
(2, 'cdfsdf', 'svvsd', 'dsgdsfsd', 'dsfdsf', 'dsfdsfds', 'adsdsa', 'vsdfsdf', '1567012588.jpg', '1567012588.jpg', 1, '2019-08-30 07:23:30', '2019-08-30 07:23:30'),
(4, 'gjhjh', 'bbbm', 'hjhj', 'fncgm', 'hghjkkj', 'kjkn', 'bh,bjk', '1568823170.jpg', '1568823171.jpg', 35, '2019-09-18 10:42:53', '2019-09-18 10:42:53'),
(5, 'My Hotel', 'Sahan road', '0764192310', 'facebook.com', 'cshdbsad', 'mymy', 'lifelife.com', '1569931840.jpg', '1569933335.jpg', 61, '2019-10-01 12:35:37', '2019-10-01 07:05:37'),
(7, 'sdsfdfs', 'sdfsd', '325352343242', 'efwewfw', 'wefwefwefwf', 'efwfewfwef', 'wefwefwef', '1569617233.jpg', '1569617234.jpg', 76, '2019-09-27 15:17:16', '2019-09-27 15:17:16');

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
(1, 'sefd', 'dasdas', '077653012867', 'asda', 'fsgdfg', 12, '12.12', '12.00', 'Available', 'Available', 'Available', '1568637482.jpg', '1568637484.png', '1568637487.jpg', '1568637488.png', '1568637491.jpg', 17, '2019-09-16 07:08:12', '2019-09-16 07:08:12'),
(2, 'fsfs', 'fdsfs', '0776530129', 'cfsdfs', 'ffrwer', 2, '121.00', '12.22', 'Available', 'Available', 'Not Available', '1568645789.jpg', '1568645790.jpg', '1568645791.png', '1568645796.jpg', '1568645796.jpg', 18, '2019-09-16 09:26:37', '2019-09-16 09:26:37'),
(3, '4te', 'erere', '0776530129', 'fhfgdfg', 'gergerg12', 12, '21.00', '21.00', 'Not Available', 'Not Available', 'Available', '1568797535.jpg', '1568797537.jpg', '1568797540.jpg', '1568797541.jpg', '1568797543.jpg', 30, '2019-09-18 03:35:44', '2019-09-18 03:35:44'),
(4, 'sahan', 'yuewryue', '325433453463', 'hfjsdh.com', 'bad place', 12, '123.00', '1.00', 'Available', 'Available', 'Available', '1569845530.jpg', '1569846474.jpg', '1569846500.jpg', '1569846522.jpg', '1569846544.jpg', 53, '2019-09-30 12:29:05', '2019-09-30 06:59:05');

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
-- Error reading data for table eventmanagementsystem.musician_events: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `eventmanagementsystem`.`musician_events`' at line 1

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
(3, 53, 'Gold Package', 123, 'efdfsd', '132.00', '1570012467.pdf', '2019-10-02 05:04:27', '2019-10-02 05:04:27');

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
(2, 53, 'sahan', '1570012502.mp4', '2019-10-02 05:05:02', '2019-10-02 05:05:02');

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
(1, 'tfyugijok', '8h9ij[pok[', 'rt7y89-u09=-i0', '6789hij', '8gupihojpkl', 'Available', 'Not Available', 'Available', 'Available', 'Available', 'Available', '1567765049.jpg', '1567765050.jpg', '1567765051.jpg', '1567765052.jpg', '1567765053.jpg', 13, '2019-09-06 04:47:34', '2019-09-06 04:47:34'),
(2, 'ndsfsdhfskdhj', 'jdsfkjdsf', 'bhdsfjkds', 'shjhdsjf', 'shhsdjkfjlsd', 'Available', 'Not Available', 'Available', 'Available', 'Not Available', 'Available', '1568470264.jpg', '1568470266.jpg', '1568470267.jpg', '1568470268.jpg', '1568470269.jpg', 16, '2019-09-14 08:41:10', '2019-09-14 08:41:10'),
(3, 'efsfs', 'sdfsd', 'sfsd', 'dfsfds', 'ferfdrf', 'Available', 'Not Available', 'Available', 'Available', 'Available', 'Available', '1568793919.jpg', '1568793921.jpg', '1568793923.jpg', '1568793925.jpg', '1568793925.jpg', 29, '2019-09-18 02:35:27', '2019-09-18 02:35:27'),
(4, 'sahan', 'No3/12 , nagahaella rd', '454654767753425', 'dsfdsfsrfefgrthefrdh', 'dffsdfdsfbdthaefgthaefsrhsefseh', 'Available', 'Not Available', 'Not Available', 'Available', 'Available', 'Available', '1569150019.jpg', '1569150020.jpg', '1569150021.jpg', '1569150022.jpg', '1569150023.jpg', 52, '2019-09-22 19:06:20', '2019-09-22 13:36:20'),
(6, 'fsdfd', 'sdfsdf', '432534634643', 'dssdfsdfsd', 'sdfsfsfds', 'Available', 'Available', 'Not Available', 'Available', 'Available', 'Available', '1569783766.jpg', '1569783840.jpg', '1569783863.jpeg', '1569783887.jpg', '1569783910.jpeg', 77, '2019-09-29 19:20:28', '2019-09-29 13:50:28');

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
(1, 13, 'Not Available', 'Available', 'Available', 'Available', 'Available', 'Not Available', 'Available', '2019-09-06 04:47:34', '2019-09-06 04:47:34'),
(2, 16, 'Not Available', 'Available', 'Available', 'Available', 'Available', 'Not Available', 'Available', '2019-09-14 08:41:10', '2019-09-14 08:41:10'),
(3, 29, 'Available', 'Not Available', 'Available', 'Available', 'Available', 'Not Available', 'Available', '2019-09-18 02:35:27', '2019-09-18 02:35:27'),
(4, 52, 'Available', 'Available', 'Not Available', 'Not Available', 'Available', 'Available', 'Available', '2019-09-22 13:25:36', '2019-09-22 07:55:36'),
(6, 77, 'Not Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Not Available', '2019-09-29 19:20:17', '2019-09-29 13:50:17');

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

--
-- Dumping data for table `photography_packages`
--

INSERT INTO `photography_packages` (`id`, `user_id`, `Package_Name`, `Event_Type`, `Services`, `Price`, `Pdf`, `created_at`, `updated_at`) VALUES
(2, 77, 'package1', 'Wedding', 'asdada', '12313.00', '1569781135.pdf', '2019-09-29 12:48:55', '2019-09-29 12:48:55');

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

--
-- Dumping data for table `photography_videos`
--

INSERT INTO `photography_videos` (`id`, `user_id`, `Video_Name`, `Video`, `Created_at`, `Updated_at`) VALUES
(2, 77, 'sahan', '1569792811.mp4', '2019-09-29 16:03:31', '2019-09-29 16:03:31');

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

--
-- Dumping data for table `planner_packages`
--

INSERT INTO `planner_packages` (`id`, `user_id`, `Package_Name`, `Services`, `Price`, `Pdf`, `created_at`, `updated_at`) VALUES
(2, 32, 'package1', 'awfsfse', 21124, '1570030470.pdf', '2019-10-02 10:04:30', '2019-10-02 10:04:30');

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

--
-- Dumping data for table `poruwa_ceramonies`
--

INSERT INTO `poruwa_ceramonies` (`id`, `Name`, `Address`, `Contact_No`, `Link`, `Description`, `Poruwa_rituals`, `Poruwa_items`, `match_making`, `Astrological_support`, `jayamangala_gatha`, `Wedding_dancers`, `Cost`, `Main_pic`, `pic1`, `pic2`, `pic3`, `pic4`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'ggerge', 'erger', '984893249832', 'erferf', 'fdsdfsdf', 'Available', 'Available', 'Available', 'Available', 'Not Available', 'Not Available', 32423, '1568824037.jpg', '1568824038.jpg', '1568824040.jpg', '1568824041.jpg', '1568824042.jpg', 36, '2019-09-18 10:57:24', '2019-09-18 10:57:24'),
(2, 'rgreger', 'gergerg', '2412342342423', 'fdfgdfgsgad', 'gsdgsdgsdg', 'Not Available', 'Not Available', 'Available', 'Available', 'Available', 'Available', 22342, '1569086997.jpg', '1569086998.jpg', '1569086999.jpg', '1569087000.jpg', '1569087002.jpg', 49, '2019-09-21 17:45:32', '2019-09-21 12:15:32'),
(3, 'hdsdsfsdf', 'dfsdvs', '2376387423', 'cn,dshcshc', 'cdcsdvsdsvsd', 'Available', 'Available', 'Available', 'Available', 'Available', 'Not Available', 34533.33, '1569145620.jpg', '1569145621.jpg', '1569145623.jpg', '1569145624.jpg', '1569145625.jpg', 51, '2019-09-22 10:22:34', '2019-09-22 04:52:34'),
(4, 'sdfsfsdfsd', 'sdfsdfsdf', '861324613423', 'asdfsdfasdfasd', 'sdfdsffs', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 542367, '1569837898.jpg', '1569839139.jpg', '1569839417.jpg', '1569839442.jpg', '1569839466.jpeg', 62, '2019-09-30 10:31:08', '2019-09-30 05:01:08');

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
(1, 'vbhjhhjhj', 'fhjk', 'ghhjhjjk', '12.00', 123, '123.00', 'Outdoor', '1567012672.jpg', '1567012673.jpg', '1567012674.jpg', '1567012675.jpg', '1567012676.jpg', 1, '2019-08-28 11:47:57', '2019-08-28 11:47:57'),
(2, 'fdsfds', 'fsdfsd', 'fdsfdsfs', '12.22', 21, '12.22', 'outside', '1567012672.jpg', '1567012672.jpg', '1567012672.jpg', '1567012672.jpg', '1567012672.jpg', 1, '2019-08-30 07:40:01', '2019-08-30 07:40:01'),
(4, 'xfgghc', 'hvj,bjk', 'ncghg12', '12.00', 21, '12.00', 'Indoor', '1568823421.jpg', '1568823423.jpg', '1568823424.jpg', '1568823425.jpg', '1568823427.jpg', 4, '2019-09-18 10:47:08', '2019-09-18 10:47:08'),
(10, 'kjacsjdnsad', 'sdcsdnmc,s', 'dcdscsdcsd', '123121.00', 213213, '1231231.00', 'Outdoor', '1569439887.jpg', '1569439888.jpg', '1569439890.jpg', '1569439890.jpg', '1569439891.jpg', 6, '2019-09-25 14:01:32', '2019-09-25 14:01:32'),
(11, 'adwdqw', 'wdqdq', 'dwqdqdwqd', '12421312.00', 2133, '123.00', 'Outdoor', '1569942736.jpg', '1569942351.jpeg', '1569942441.jpg', '1569942479.jpg', '1569942614.jpg', 5, '2019-10-01 15:12:17', '2019-10-01 09:42:17');

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
(2, 'Sahan', 'sahan', '4325234234', 'sadfas', 'sddgsdgdsfdsfsdfdsfsd', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Available', 'Available', 'Available', 'Available', '1569196883.jpg', '1569196884.jpg', '1569196885.jpg', '1569196887.jpg', '1569196888.jpg', 54, '2019-09-23 02:46:46', '2019-09-22 21:16:46'),
(4, 'sdfsfd', 'sdfdsf', '3423423423423', 'dffewfwef', 'fewfwefwefw', 'Available', 'Not Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', '1569831040.jpg', '1569832155.jpg', '1569832526.jpg', '1569832558.jpeg', '1569832578.jpg', 78, '2019-09-30 08:36:19', '2019-09-30 03:06:19');

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
(2, 54, 'Available', 'Available', 'Not Available', '2019-09-23 00:43:37', '2019-09-22 19:13:37'),
(4, 78, 'Available', 'Available', 'Available', '2019-09-30 02:26:48', '2019-09-30 02:26:48');

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

--
-- Dumping data for table `transporters`
--

INSERT INTO `transporters` (`id`, `Transport_Service`, `Address`, `Contact_No`, `Link`, `Description`, `driver`, `decoration`, `rent_hours`, `rent_km`, `Main_pic`, `pic1`, `pic2`, `pic3`, `pic4`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Sahan', 'wefewfew', '43545634432453455', 'dsdfdsfsfs', 'dfsdfsdfsd', 'Available', 'Not Available', 577567, '123.00', '1570051684.jpg', '1569866034.jpeg', '1569866059.jpg', '1569866119.jpg', '1569866145.jpg', 55, '2019-10-02 21:40:46', '2019-10-02 16:10:46');

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

--
-- Dumping data for table `transport_categories`
--

INSERT INTO `transport_categories` (`id`, `user_id`, `luxury`, `classic`, `vintage`, `horse_cart`, `air`, `travelling_coach`, `created_at`, `updated_at`) VALUES
(2, 55, 'Not Available', 'Available', 'Available', 'Available', 'Available', 'Available', '2019-10-02 21:40:29', '2019-10-02 16:10:29');

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

--
-- Dumping data for table `transport_packages`
--

INSERT INTO `transport_packages` (`id`, `user_id`, `Package_Name`, `Transport_type`, `vehicle`, `picture`, `decoration`, `driver`, `Price`, `created_at`, `updated_at`) VALUES
(1, 55, 'package123', 'luxury modal', 'BMW BG9 3309', '1570047484.jpg', 'Not Available', 'Not Available', '150000.00', '2019-10-02 20:18:06', '2019-10-02 14:48:06');

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
-- Error reading data for table eventmanagementsystem.users: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `eventmanagementsystem`.`users`' at line 1

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
-- Indexes for table `cake_designers`
--
ALTER TABLE `cake_designers`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `actor_events`
--
ALTER TABLE `actor_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cake_designers`
--
ALTER TABLE `cake_designers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `caterings`
--
ALTER TABLE `caterings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `catering_events`
--
ALTER TABLE `catering_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `costume_designers`
--
ALTER TABLE `costume_designers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `costume_designer_events`
--
ALTER TABLE `costume_designer_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dance_videos`
--
ALTER TABLE `dance_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `decoration_packages`
--
ALTER TABLE `decoration_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `decorators`
--
ALTER TABLE `decorators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `decorator_events`
--
ALTER TABLE `decorator_events`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event_planners`
--
ALTER TABLE `event_planners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_planners_events`
--
ALTER TABLE `event_planners_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hall_events`
--
ALTER TABLE `hall_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hall_features`
--
ALTER TABLE `hall_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hall_table_arrangements`
--
ALTER TABLE `hall_table_arrangements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `musicians`
--
ALTER TABLE `musicians`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `musician_events`
--
ALTER TABLE `musician_events`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `music_packages`
--
ALTER TABLE `music_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `music_videos`
--
ALTER TABLE `music_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `photographies`
--
ALTER TABLE `photographies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `photography_events`
--
ALTER TABLE `photography_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `photography_packages`
--
ALTER TABLE `photography_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `photography_videos`
--
ALTER TABLE `photography_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `planner_packages`
--
ALTER TABLE `planner_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `poruwa_ceramonies`
--
ALTER TABLE `poruwa_ceramonies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reception_halls`
--
ALTER TABLE `reception_halls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `salons`
--
ALTER TABLE `salons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `salon_events`
--
ALTER TABLE `salon_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transporters`
--
ALTER TABLE `transporters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transport_categories`
--
ALTER TABLE `transport_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transport_packages`
--
ALTER TABLE `transport_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
