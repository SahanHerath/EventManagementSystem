-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2019 at 08:34 AM
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
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `caterings`
--
ALTER TABLE `caterings`
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
-- AUTO_INCREMENT for table `caterings`
--
ALTER TABLE `caterings`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
