-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2019 at 10:57 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `tut_admin_activity`
--

CREATE TABLE `tut_admin_activity` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `message` int(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `location` int(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tut_admin_activity`
--

INSERT INTO `tut_admin_activity` (`id`, `type`, `message`, `ip`, `location`, `user_agent`, `created_at`) VALUES
(1, 'login Sucesss', 0, '::1', 0, 'Firefox 70.0', '2019-11-27 07:37:41'),
(2, 'login Sucesss', 0, '::1', 0, 'Firefox 70.0', '2019-11-27 07:49:09'),
(3, 'login Sucesss', 0, '::1', 0, 'Firefox 70.0', '2019-11-27 07:54:47'),
(4, 'login Sucesss', 0, '::1', 0, 'Firefox 70.0', '2019-11-27 07:55:30'),
(5, 'login Sucesss', 0, '::1', 0, 'Firefox 70.0', '2019-11-27 07:56:29'),
(6, 'login Sucesss', 0, '::1', 0, 'Firefox 70.0', '2019-11-28 03:11:19'),
(7, 'login Sucesss', 0, '::1', 0, 'Firefox 70.0', '2019-11-29 04:06:55'),
(8, 'login Sucesss', 0, '::1', 0, 'Firefox 70.0', '2019-11-29 06:53:05'),
(9, 'login Sucesss', 0, '::1', 0, 'Firefox 70.0', '2019-12-02 01:42:20');

-- --------------------------------------------------------

--
-- Table structure for table `tut_cms`
--

CREATE TABLE `tut_cms` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tut_cms`
--

INSERT INTO `tut_cms` (`id`, `link`, `title`, `message`, `created_at`) VALUES
(1, 'about_us', 'test', 'message', '2019-12-02 02:20:14'),
(3, 'privacy_policy', '', '', '2019-12-02 02:20:40'),
(5, 'term_conditions', '', '', '2019-12-02 02:21:01');

-- --------------------------------------------------------

--
-- Table structure for table `tut_owner`
--

CREATE TABLE `tut_owner` (
  `id` int(11) NOT NULL,
  `site_owner` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `logged_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_login_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tut_owner`
--

INSERT INTO `tut_owner` (`id`, `site_owner`, `password`, `logged_at`, `last_login_at`, `created_at`) VALUES
(1, '74d237b85df02495eb84c018391f947ec65d08153be24467d621c1482d0fa7c1a9ffb5f83df6ccaeef763ac0b993f17d107d1a757d80b7483a0b22195c924e00sLaFLg20bliwO0wmu/4/F8JAhaT2iFi0abpdsiIEHaw=', '4000877d1ede0aee205cc8c3f64cace6004f91ef727b166fa1da8eba260fa7260de98e1bf67b4daed6f32081c9cf7e316b555b31c4684605038784e6877a9997J3vUDvqA9JkKNEaL5TWHKPPce1PyjBdVT4Iv64iozek=', '2019-12-02 01:42:20', '0000-00-00 00:00:00', '2019-11-20 10:25:24');

-- --------------------------------------------------------

--
-- Table structure for table `tut_site_settings`
--

CREATE TABLE `tut_site_settings` (
  `id` int(11) NOT NULL,
  `smtp_host` varchar(255) NOT NULL,
  `smtp_port` varchar(255) NOT NULL,
  `smtp_username` varchar(255) NOT NULL,
  `smtp_password` varchar(255) NOT NULL,
  `site_status` tinyint(1) NOT NULL DEFAULT '1',
  `site_username` varchar(255) NOT NULL,
  `footer_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tut_admin_activity`
--
ALTER TABLE `tut_admin_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tut_cms`
--
ALTER TABLE `tut_cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tut_owner`
--
ALTER TABLE `tut_owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tut_site_settings`
--
ALTER TABLE `tut_site_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tut_admin_activity`
--
ALTER TABLE `tut_admin_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tut_cms`
--
ALTER TABLE `tut_cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tut_owner`
--
ALTER TABLE `tut_owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tut_site_settings`
--
ALTER TABLE `tut_site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
