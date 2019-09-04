-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2019 at 09:43 PM
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
(1, 1, 'Available', 'Available', 'Not Available', 'Not Available', 'Not Available', '2019-08-28 11:47:57', '2019-08-28 11:47:57'),
(2, 1, 'Available', 'Available', 'Available', 'Available', 'Available', '2019-08-30 12:27:49', '2019-08-30 12:27:49');

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
(1, 1, 'Available', 'Available', 'Available', 'Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', '2019-08-28 11:47:57', '2019-08-28 11:47:57');

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
(1, 1, 'Available', 'Available', 'Available', 'Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', '2019-08-28 11:47:57', '2019-08-28 11:47:57');

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
(2, 'cdfsdf', 'svvsd', 'dsgdsfsd', 'dsfdsf', 'dsfdsfds', 'adsdsa', 'vsdfsdf', '1567012588.jpg', '1567012588.jpg', 1, '2019-08-30 07:23:30', '2019-08-30 07:23:30');

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
(2, 'fdsfds', 'fsdfsd', 'fdsfdsfs', '12.22', 21, '12.22', 'outside', '1567012672.jpg', '1567012672.jpg', '1567012672.jpg', '1567012672.jpg', '1567012672.jpg', 1, '2019-08-30 07:40:01', '2019-08-30 07:40:01');

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
(1, 'Shamith athauda', 'gghj@gmail.com', NULL, 'Hall', 'dfggh', 0, '$2y$10$98qKAj4fm6wUpy8N56LZKO0C4.uP2nJtHQtLKAsReGEmThtlZcUFe', NULL, '2019-08-28 11:45:52', '2019-08-28 11:45:52'),
(2, 'gdfgd', 'sgsdfds@gmail.com', NULL, 'Music', 'dsfdsfsd', 1, '$2y$10$McDaVU5SZdPcq9wCd7QcKOb7SkimVMEZQHx530h1x9NV.Vt2VDgca', NULL, '2019-09-03 10:25:07', '2019-09-03 10:25:07'),
(3, 'Shamith athauda', 'ddd@gmail.com', NULL, 'Hall', 'sadas', 1, '$2y$10$i7lynHqY223uvgLrntISheSz5WczEg87dYbyG4wB6z6mO2IklrjVq', NULL, '2019-09-03 10:26:58', '2019-09-03 10:26:58'),
(4, 'gdthfhg', 'rgdttg@gmail.com', NULL, 'Decoration', 'gftfhgh', 1, '$2y$10$xnE.fiDS1eWQCXK2zqHQ7.6juiMfKujDSmPKb1oIZ3S65uEjJteKy', NULL, '2019-09-03 11:54:47', '2019-09-03 11:54:47'),
(5, 'ftfgjh', 'dsfd@gmail.com', NULL, 'Hall', 'fdhj', 1, '$2y$10$17Ut/kA0qapYyaCMg3YrAOs8K5Atg1yq.JXZZf9p.s9UDqKyRCpYC', NULL, '2019-09-03 11:58:02', '2019-09-03 11:58:02'),
(6, 'Shamith athauda', 'dddd@gmail.com', NULL, 'Hall', 'fvdsfgdf', 0, '$2y$10$W0i0xbFW4fL9ZrGm4CrcwOLG9FLm0ShhLH7mOi1MIOIfC838bOyt.', NULL, '2019-09-03 13:45:55', '2019-09-03 13:45:55'),
(7, 'Nethmi Herath', 'dsvdf@gmail.com', NULL, 'Cloth_Designers', 'dfbfbfd', 1, '$2y$10$FPy85fboWw7MiiKq5px8m.rR9hCSNoleqhIQY0aPSMKqsarO9rUg6', NULL, '2019-09-03 14:14:11', '2019-09-03 14:14:11'),
(8, 'Nethmi Herath', 'sumudcdvu@gmail.com', NULL, 'Hall', 'ahjfer', 1, '$2y$10$Gxa/sfmu24SCTwbFE0XYseIaXJgagEbcRtg37UlFaXD2hCXHBNW8e', NULL, '2019-09-03 14:29:34', '2019-09-03 14:29:34'),
(9, 'dsvdfg', 'fgfdgd@gmail.com', NULL, 'Hall', 'xdvdfgd', 1, '$2y$10$qD5OvP4GZ3IoBTkhRh8Lxe2SnGaRjdpJmDmamWlo0UR6Hz4ahoueS', NULL, '2019-09-03 14:34:30', '2019-09-03 14:34:30'),
(10, 'Philip Diass', 'ddcsdcsd@gmail.com', NULL, 'Hall', 'cbgfhrt', 1, '$2y$10$cNVdrDdrilFh0REIn3KCvOKhI6RY.hbHghvachlT/PgyNxpaEPTpu', NULL, '2019-09-03 14:35:40', '2019-09-03 14:35:40'),
(11, 'dgs', 'dsvsd@gmail.com', NULL, 'Hall', 'fvfdgdf', 1, '$2y$10$lO44PPSbR3VRqNRit03t7O0RV4FAkhjYPMPwxs3wCm8OtjL6tBnH2', NULL, '2019-09-04 08:53:35', '2019-09-04 08:53:35');

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
-- AUTO_INCREMENT for table `cake_designers`
--
ALTER TABLE `cake_designers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `dancers`
--
ALTER TABLE `dancers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dancer_events`
--
ALTER TABLE `dancer_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `decorators`
--
ALTER TABLE `decorators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `decorator_events`
--
ALTER TABLE `decorator_events`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hall_table_arrangements`
--
ALTER TABLE `hall_table_arrangements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `musician_events`
--
ALTER TABLE `musician_events`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photographies`
--
ALTER TABLE `photographies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photography_events`
--
ALTER TABLE `photography_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poruwa_ceramonies`
--
ALTER TABLE `poruwa_ceramonies`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salon_events`
--
ALTER TABLE `salon_events`
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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
