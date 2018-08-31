-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2018 at 09:46 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spacenter_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email_id`, `contact_number`) VALUES
(1, 'admin', 'admin123', 'admin@admin.com', '9967313968');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `area_name` varchar(255) NOT NULL,
  `fk_city_id` int(11) NOT NULL,
  `fk_country_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `area_name`, `fk_city_id`, `fk_country_id`, `created_date`, `status`) VALUES
(1, 'Dahisar', 9, 1, '2018-08-31 20:13:30', 1),
(3, 'Andheri', 9, 1, '2018-08-31 21:37:18', 1),
(4, 'Borivali', 9, 1, '2018-08-31 21:37:38', 1),
(5, 'Malad', 9, 1, '2018-08-31 21:37:55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `description`, `created_date`, `updated_date`, `status`, `meta_title`, `meta_description`, `meta_keywords`) VALUES
(1, 'Beauty Parlours', '<p>Beautiful and gorgeous bridal&nbsp;<em>mehndi</em>&nbsp;design by kashee &#39;s&nbsp;<em>beauty parlour</em></p>\r\n', '2018-08-31 23:33:53', '0000-00-00 00:00:00', 1, '', '', ''),
(2, 'Beauty Services', '<pre>\r\nMehndi&nbsp;Works, Skin Whitening Beauty Parlor &amp; Facial Treatments Beauty Parlor Service Provider offered by Femina&nbsp;Beauty Parlour&nbsp;from Thrissur, Kerala, India.\r\n</pre>\r\n', '2018-08-31 23:38:52', '0000-00-00 00:00:00', 1, '', '', ''),
(3, 'Bridal Makeup', '<p>Mehndi Bridal Makeup&nbsp;- Get High Quality&nbsp;Makeup&nbsp;from Experienced Artists. Trusted Make-Up Artists. Celebrity&nbsp;Makeup&nbsp;Artists. Airbrush&nbsp;Makeup&nbsp;Artists. Verified Make-Up Artists. Services: Light&nbsp;Makeup, Airbrush&nbsp;Makeup, Celebrity&nbsp;Makeup, Detailed&nbsp;Makeup, Family&nbsp;Makeup, Save the Date Photography.</p>\r\n', '2018-08-31 23:39:21', '0000-00-00 00:00:00', 1, '', '', ''),
(4, 'Bridegroom Makeup', '<p>A&nbsp;bridegroom&nbsp;(often shortened to&nbsp;groom) is a man who will soon be or has recently been married. A&nbsp;bridegroom&nbsp;is typically attended by a best man and groomsmen</p>\r\n', '2018-08-31 23:39:55', '0000-00-00 00:00:00', 1, '', '', ''),
(5, 'Salons', '<p>A&nbsp;salon&nbsp;is a shop where smart, expensive clothes are sold. 3. A&nbsp;salon&nbsp;is an informal meeting of fashionable writers or artists, which is held at the house of someone who is well-known.&nbsp;Salons&nbsp;were more common in former times.</p>\r\n', '2018-08-31 23:40:27', '0000-00-00 00:00:00', 1, '', '', ''),
(7, 'Spas', '<p>A&nbsp;spa&nbsp;is a place where water with minerals in it comes out of the ground. People drink the water or go in it in order to improve their health. ...Fiuggi, a&nbsp;spa&nbsp;town famous for its water. A health&nbsp;spa&nbsp;is a kind of hotel where people go to do exercise and have special treatments in order to improve their health.</p>\r\n', '2018-08-31 23:54:41', '0000-00-00 00:00:00', 1, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `fk_country_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_descripton` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_name`, `fk_country_id`, `created_date`, `updated_date`, `meta_title`, `meta_descripton`, `meta_keywords`, `status`) VALUES
(2, 'Delhi', 1, '2018-08-31 16:26:48', '0000-00-00 00:00:00', '', '', '', 1),
(3, 'Karachi', 2, '2018-08-31 16:27:01', '0000-00-00 00:00:00', '', '', '', 1),
(4, 'Benglore', 1, '2018-08-31 16:27:29', '0000-00-00 00:00:00', '', '', '', 1),
(5, 'Pune', 1, '2018-08-31 16:28:04', '0000-00-00 00:00:00', '', '', '', 1),
(6, 'Hydrabad', 1, '2018-08-31 16:28:21', '0000-00-00 00:00:00', '', '', '', 1),
(7, 'Panjab', 1, '2018-08-31 16:28:54', '0000-00-00 00:00:00', '', '', '', 1),
(8, 'Chennai', 1, '2018-08-31 16:31:39', '0000-00-00 00:00:00', '', '', '', 1),
(9, 'Mumbai', 1, '2018-08-31 20:08:37', '0000-00-00 00:00:00', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_desscription` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_name`, `meta_title`, `meta_desscription`, `meta_keyword`, `created_date`, `updated_date`) VALUES
(1, 'India', '', '', '', '2018-08-30 23:08:35', '2018-08-31 00:12:23'),
(2, 'Pakistan', '', '', '', '2018-08-30 23:08:45', '0000-00-00 00:00:00'),
(5, 'UAE', '', '', '', '2018-08-31 19:29:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `services_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
