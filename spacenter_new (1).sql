-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2018 at 07:19 PM
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
  `status` tinyint(1) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `excel_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `area_name`, `fk_city_id`, `fk_country_id`, `created_date`, `status`, `city_name`, `country_name`, `excel_code`) VALUES
(1, 'Borivali', 1, 1, '2018-09-11 17:49:28', 1, 'Mumbai', 'India', 12345),
(2, 'Kandivali', 1, 1, '2018-09-11 17:49:28', 1, 'Mumbai', 'India', 12345),
(3, 'Malad', 1, 1, '2018-09-11 17:49:28', 1, 'Mumbai', 'India', 12345),
(4, 'Goregao', 1, 1, '2018-09-11 17:49:28', 1, 'Mumbai', 'India', 12345),
(5, 'Virar', 1, 1, '2018-09-11 17:49:28', 1, 'Mumbai', 'India', 12345),
(6, 'Nalasopara', 1, 1, '2018-09-11 17:49:28', 1, 'Mumbai', 'India', 12345),
(7, 'M G Road', 2, 1, '2018-09-11 17:49:28', 1, 'Banglore', 'India', 12345),
(8, 'Kormengala', 2, 1, '2018-09-11 17:49:28', 1, 'Banglore', 'India', 12345),
(9, 'Indranagar', 2, 1, '2018-09-11 17:49:28', 1, 'Banglore', 'India', 12345),
(10, 'J P nagar', 2, 1, '2018-09-11 17:49:28', 1, 'Banglore', 'India', 12345),
(11, 'Dwarka', 3, 1, '2018-09-11 17:49:29', 1, 'Delhi', 'India', 12345),
(12, 'Canought plaace', 3, 1, '2018-09-11 17:49:29', 1, 'Delhi', 'India', 12345),
(13, 'Naheru place', 3, 1, '2018-09-11 17:49:29', 1, 'Delhi', 'India', 12345),
(14, 'Saket', 3, 1, '2018-09-11 17:49:29', 1, 'Delhi', 'India', 12345),
(15, 'Chatrapur', 3, 1, '2018-09-11 17:49:29', 1, 'Delhi', 'India', 12345),
(16, 'Janak puri', 3, 1, '2018-09-11 17:49:29', 1, 'Delhi', 'India', 12345),
(17, 'Rajouri gardan', 3, 1, '2018-09-11 17:49:29', 1, 'Delhi', 'India', 12345),
(18, 'test', 8, 3, '2018-09-11 17:51:58', 1, 'Karachi', 'Pakistan', 12345);

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
(7, 'Spa', '<p>A&nbsp;spa&nbsp;is a place where water with minerals in it comes out of the ground. People drink the water or go in it in order to improve their health. ...Fiuggi, a&nbsp;spa&nbsp;town famous for its water. A health&nbsp;spa&nbsp;is a kind of hotel where people go to do exercise and have special treatments in order to improve their health.</p>\r\n', '2018-08-31 23:54:41', '0000-00-00 00:00:00', 1, '', '', '');

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
  `status` tinyint(1) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_name`, `fk_country_id`, `created_date`, `updated_date`, `meta_title`, `meta_descripton`, `meta_keywords`, `status`, `country_name`) VALUES
(1, 'Mumbai', 1, '2018-09-10 01:16:25', '0000-00-00 00:00:00', '', '', '', 1, 'India'),
(2, 'Banglore', 1, '2018-09-10 01:16:25', '0000-00-00 00:00:00', '', '', '', 1, 'India'),
(3, 'Delhi', 1, '2018-09-10 01:16:25', '0000-00-00 00:00:00', '', '', '', 1, 'India'),
(4, 'Panjab', 1, '2018-09-10 01:16:25', '0000-00-00 00:00:00', '', '', '', 1, 'India'),
(5, 'Haiyana', 1, '2018-09-10 01:16:26', '0000-00-00 00:00:00', '', '', '', 1, 'India'),
(7, 'Rajastan', 1, '2018-09-10 01:16:26', '0000-00-00 00:00:00', '', '', '', 1, 'India'),
(8, 'Karachi', 3, '2018-09-10 01:16:26', '0000-00-00 00:00:00', '', '', '', 1, 'Pakistan');

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
(1, 'India', '', '', '', '2018-09-10 01:16:25', '0000-00-00 00:00:00'),
(3, 'Pakistan', '', '', '', '2018-09-10 01:16:26', '0000-00-00 00:00:00'),
(4, ' India', '', '', '', '2018-09-10 02:39:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `contact_number`, `email`, `created_date`, `updated_date`, `updated_by`, `status`) VALUES
(1, 'RinkiCallGirls', 'qwe', '09999999999', 'cellmedservices1@gmail.com', '2018-09-19 22:06:39', '0000-00-00 00:00:00', 0, 1),
(2, 'RinkiCallGirls', 'qwe', '+919121300296', 'rinkipatel586@gmail.com', '2018-09-19 22:07:11', '0000-00-00 00:00:00', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment_info`
--

CREATE TABLE `payment_info` (
  `id` int(11) NOT NULL,
  `payment_type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_info`
--

INSERT INTO `payment_info` (`id`, `payment_type_name`) VALUES
(1, 'Paid'),
(2, 'Free');

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
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `services_name`, `description`, `created_date`, `status`) VALUES
(1, 'Body Massage Centres', '<p>Body Massage Centres</p>\r\n', '2018-09-01 12:18:26', 1),
(2, 'Beauty Spas', '<p>Beauty Spas</p>\r\n', '2018-09-01 12:18:54', 1),
(3, 'Beauty Artist', '<p>Beauty Artist</p>\r\n', '2018-09-01 12:19:12', 1),
(4, 'Massage', '<p>Massage Centres For Men</p>\r\n', '2018-09-01 12:19:34', 1),
(5, 'Men Salons', '<p>Men Salons</p>\r\n', '2018-09-01 12:19:46', 1),
(6, 'Makeup Artist', '<p><a href=\"makeup-artist.html\">Makeup Artist</a></p>\r\n', '2018-09-01 12:19:54', 1),
(7, 'Tattoos Desgin', '<p><a href=\"tattoos-desgin.html\">Tattoos Desgin</a></p>\r\n', '2018-09-01 12:20:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`) VALUES
(1, 'site_contact_number', '000 000 0000'),
(2, 'site_emal_id', 'rinkipatel@gmail.com'),
(3, 'site_name', 'Rinki Patel'),
(4, 'site_location', 'Bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `spa_profile`
--

CREATE TABLE `spa_profile` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `ranking` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spa_profile`
--

INSERT INTO `spa_profile` (`id`, `title`, `contact_number`, `description`, `ranking`, `status`, `email_id`, `fk_user_id`, `created_date`, `created_by`, `updated_date`, `updated_by`) VALUES
(1, 'Viva Look Lady Salon ', '9152394371', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish', 4, 1, 'test@gmail.com', 1000, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 0),
(2, 'Looks Exotica Luxury Unisex Salon ', '9152563246', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish', 4, 1, 'test@gmail.com', 1000, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 0),
(3, 'Bbeauters Beauty & Wellness Clinic  ', '9152619527', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish', 4, 1, 'test@gmail.com', 1000, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 0),
(4, 'Skin Alive Make Up Studio ', '9152716588', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish', 4, 1, 'test@gmail.com', 1000, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 0),
(5, 'Venus Hair & Beauty Salon  ', '9152563274', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish', 4, 1, 'test@gmail.com', 1000, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 0),
(6, 'Nature Beauty Clinic  ', '9152480898', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish', 4, 1, 'test@gmail.com', 1000, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 0),
(7, 'Beyond Looks ', '9152610730', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish', 4, 1, 'test@gmail.com', 1000, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 0),
(8, 'The Barbering Salon  ', '9152758128', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish', 4, 1, 'test@gmail.com', 1000, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 0),
(9, 'Beauty N Beyond  ', '9152418980', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish', 4, 1, 'test@gmail.com', 1000, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 0),
(10, 'Grace Beauty Parlour ', '9152382442', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish', 4, 1, 'test@gmail.com', 1000, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 0),
(11, 'I Diva Beauty Salon ', '9152268781', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish', 4, 1, 'test@gmail.com', 1000, '2018-09-25 19:26:15', 0, '0000-00-00 00:00:00', 0),
(12, 'Galaxy Unisex Salon  ', '9152518088', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish', 4, 1, 'test@gmail.com', 1000, '2018-09-25 19:26:15', 0, '0000-00-00 00:00:00', 0),
(13, 'Naturals Unisex Salon & Spa  ', '9152478506', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish', 4, 1, 'test@gmail.com', 1000, '2018-09-25 19:26:15', 0, '0000-00-00 00:00:00', 0),
(14, 'Shades The Beauty Studio ', '9152481336', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish', 4, 1, 'test@gmail.com', 1000, '2018-09-25 19:26:15', 0, '0000-00-00 00:00:00', 0),
(15, 'test profile', '9999999999', '<p><strong>Body Massage in Chakkarpur, Delhi</strong></p>\r\n\r\n<p>Rose Body Massage in Delhi. Massage Services For Men At Home with Address, Contact Number, Photos, Maps. View Rose Body Massage, Delhi on Justdial.</p>\r\n\r\n<p><strong>Location and Overview:</strong></p>\r\n\r\n<p>Established in the year 2013, Rose Body Massage in Chakkarpur, Delhi is a top player in the category Massage Services For Men At Home in the Delhi. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Delhi. Over the course of its journey, this business has established a firm foothold in it&rsquo;s industry. The belief that customer satisfaction is as important as their products and services, have helped this establishment garner a vast base of customers, which continues to grow by the day. This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line of products and services and cater to a larger client base. In Delhi, this establishment occupies a prominent location in Chakkarpur. It is an effortless task in commuting to this establishment as there are various modes of transport readily available. It is at 0, Near Galleria Market, which makes it easy for first-time visitors in locating this establishment. The popularity of this business is evident from the 90+ reviews it has received from Justdial users. It is known to provide top service in the following categories: Massage Services For Men At Home, Body Massage Centres, 24 Hours Body Massage Centres.</p>\r\n\r\n<p><strong>Products and Services offered:</strong></p>\r\n\r\n<p>Rose Body Massage in Chakkarpur has a wide range of products and services to cater to the varied requirements of their customers. The staff at this establishment are courteous and prompt at providing any assistance. They readily answer any queries or questions that you may have. Pay for the product or service with ease by using any of the available modes of payment, such as Cash, Master Card, Visa Card, Debit Cards, Cheques, American Express Card, Credit Card. This establishment is functional from 00:00 - 23:59.</p>\r\n\r\n<p>Please scroll to the top for the address and contact details of Rose Body Massage at Chakkarpur, Delhi.</p>\r\n', 0, 1, 'cellmedservices1@gmail.com', 0, '2018-09-26 20:14:01', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `spa_profile_images`
--

CREATE TABLE `spa_profile_images` (
  `id` int(11) NOT NULL,
  `fk_profile_id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spa_profile_images`
--

INSERT INTO `spa_profile_images` (`id`, `fk_profile_id`, `image_name`, `created_date`, `updated_date`, `created_by`, `updated_by`) VALUES
(1, 15, '126a7808a60d2693b3ba152e5cf21f78.jpg', '2018-09-26 20:14:01', '0000-00-00 00:00:00', 0, 0),
(2, 15, '42b0fbb3c37cb82d635fd4357c0f53e2.jpg', '2018-09-26 20:14:01', '0000-00-00 00:00:00', 0, 0),
(3, 15, 'e65482b98226b586d509f31e8c364153.jpg', '2018-09-26 20:14:01', '0000-00-00 00:00:00', 0, 0),
(4, 15, '98c9df4e5238a7a9b93685bcc0b4eb06.jpg', '2018-09-26 20:14:01', '0000-00-00 00:00:00', 0, 0),
(5, 15, 'a9f2d2119222bc184be590d70bffdf92.jpg', '2018-09-26 20:14:01', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `spa_profile_location`
--

CREATE TABLE `spa_profile_location` (
  `id` int(11) NOT NULL,
  `fk_profile_id` int(11) NOT NULL,
  `fk_counry_id` int(11) NOT NULL,
  `fk_city_id` int(11) NOT NULL,
  `fk_area_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `google_map_url` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_date` datetime NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `area_name` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL,
  `excel_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spa_profile_location`
--

INSERT INTO `spa_profile_location` (`id`, `fk_profile_id`, `fk_counry_id`, `fk_city_id`, `fk_area_id`, `address`, `google_map_url`, `created_by`, `created_date`, `updated_by`, `updated_date`, `country_name`, `city_name`, `area_name`, `pincode`, `excel_code`) VALUES
(1, 1, 1, 3, 11, 'D- 486 Palam Extension, Dwarka Sector 7, Delhi - 110075, Near HP Gas Agency', 'https://goo.gl/maps/vnnomxawLVt', 0, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 'India', 'Delhi', 'Dwarka', 400092, '159535'),
(2, 2, 1, 3, 11, 'C-65, First Floor, Prashant Vihar, Delhi - 110085, Opposite Sports Complex Rohini', 'https://goo.gl/maps/vnnomxawLVt', 0, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 'India', 'Delhi', 'Dwarka', 400092, '159535'),
(3, 3, 1, 3, 11, 'Shop No-53, Harsh Vihar, 1st Floor, Pitampura, Delhi - 110034, Opposite J & K Bank', 'https://goo.gl/maps/vnnomxawLVt', 0, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 'India', 'Delhi', 'Dwarka', 400092, '159535'),
(4, 4, 1, 3, 11, 'C-1/169, B-1/19, Yamuna Vihar, Delhi - 110053, Near Hira Lal Sweets', 'https://goo.gl/maps/vnnomxawLVt', 0, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 'India', 'Delhi', 'Dwarka', 400092, '159535'),
(5, 5, 1, 3, 11, 'J-4/21-B, Khirki Extension, Malviya Nagar, Delhi - 110017, Near Krishna Mandir', 'https://goo.gl/maps/vnnomxawLVt', 0, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 'India', 'Delhi', 'Dwarka', 400092, '159535'),
(6, 6, 1, 3, 11, 'H -2/1, main road, Main road, Vikaspuri, Delhi - 110018, Near lal market ', 'https://goo.gl/maps/vnnomxawLVt', 0, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 'India', 'Delhi', 'Dwarka', 400092, '159535'),
(7, 7, 1, 3, 11, 'B-1/64, CENTRAL MARKET, Sector 50, Noida - 201307, NEAR YES BANK', 'https://goo.gl/maps/vnnomxawLVt', 0, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 'India', 'Delhi', 'Dwarka', 400092, '159535'),
(8, 8, 1, 3, 11, '203a, 0, Vikaspuri, Delhi - 110018, Opposite HDFC Bank, Behind PVR Cinemas', 'https://goo.gl/maps/vnnomxawLVt', 0, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 'India', 'Delhi', 'Dwarka', 400092, '159535'),
(9, 9, 1, 3, 11, 'G-17 Fun City Mall, PVR Complex, Prashant Vihar, Prashant Vihar, Delhi - 110085, PVR Cinemas ', 'https://goo.gl/maps/vnnomxawLVt', 0, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 'India', 'Delhi', 'Dwarka', 400092, '159535'),
(10, 10, 1, 3, 11, '168 A, Pocket C, Mayur Vihar Phase 2, Delhi - 110091, Near Neelam Mata Mandir ', 'https://goo.gl/maps/vnnomxawLVt', 0, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 'India', 'Delhi', 'Dwarka', 400092, '159535'),
(11, 11, 1, 3, 11, 'U-16/55, DLF City Phase 3, Gurgaon - 122010, Opp Chowrangee Restaurant ', 'https://goo.gl/maps/vnnomxawLVt', 0, '2018-09-25 19:26:15', 0, '0000-00-00 00:00:00', 'India', 'Delhi', 'Dwarka', 400092, '159535'),
(12, 12, 1, 3, 11, 'A -26, Love India Homes, Shalimar Garden Extention 1, Sahibabad - 201005, Near Sm World Mall', 'https://goo.gl/maps/vnnomxawLVt', 0, '2018-09-25 19:26:15', 0, '0000-00-00 00:00:00', 'India', 'Delhi', 'Dwarka', 400092, '159535'),
(13, 13, 1, 3, 11, '2530, Ground Floor, Hudson Line, Kingsway Camp, Kingsway Camp, Delhi - 110009, Near Axis Bank', 'https://goo.gl/maps/vnnomxawLVt', 0, '2018-09-25 19:26:15', 0, '0000-00-00 00:00:00', 'India', 'Delhi', 'Dwarka', 400092, '159535'),
(14, 14, 1, 3, 11, 'Shop No 119 to 122 First Floor, The Sapphire, Gurgaon Sector 49, Gurgaon - 122018', 'https://goo.gl/maps/vnnomxawLVt', 0, '2018-09-25 19:26:15', 0, '0000-00-00 00:00:00', 'India', 'Delhi', 'Dwarka', 400092, '159535'),
(15, 15, 1, 1, 3, 'test address', 'https://goo.gl/maps/oAHGvYoJLzD2', 0, '2018-09-26 20:14:01', 0, '0000-00-00 00:00:00', 'India', 'Mumbai', 'Malad', 400092, '');

-- --------------------------------------------------------

--
-- Table structure for table `spa_profile_payment_info`
--

CREATE TABLE `spa_profile_payment_info` (
  `id` int(11) NOT NULL,
  `fk_profile_id` int(11) NOT NULL,
  `fk_payment_type_id` int(11) NOT NULL,
  `fk_payment_type_name` varchar(255) NOT NULL,
  `excel_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spa_profile_payment_info`
--

INSERT INTO `spa_profile_payment_info` (`id`, `fk_profile_id`, `fk_payment_type_id`, `fk_payment_type_name`, `excel_code`) VALUES
(1, 1, 2, 'Free', '159535'),
(2, 2, 1, 'Paid', '159535'),
(3, 3, 2, 'Free', '159535'),
(4, 4, 2, 'Free', '159535'),
(5, 5, 1, 'Paid', '159535'),
(6, 6, 2, 'Free', '159535'),
(7, 7, 2, 'Free', '159535'),
(8, 8, 2, 'Free', '159535'),
(9, 9, 1, 'Paid', '159535'),
(10, 10, 2, 'Free', '159535'),
(11, 11, 2, 'Free', '159535'),
(12, 12, 1, 'Paid', '159535'),
(13, 13, 2, 'Free', '159535'),
(14, 14, 2, 'Free', '159535'),
(15, 15, 1, 'Paid', '');

-- --------------------------------------------------------

--
-- Table structure for table `spa_profile_services_category`
--

CREATE TABLE `spa_profile_services_category` (
  `id` int(11) NOT NULL,
  `fk_category_id` int(11) NOT NULL,
  `fk_services_names` varchar(255) NOT NULL,
  `fk_services_id` varchar(255) NOT NULL,
  `fk_category_name` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_date` datetime NOT NULL,
  `fk_profile_id` int(11) NOT NULL,
  `excel_code` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spa_profile_services_category`
--

INSERT INTO `spa_profile_services_category` (`id`, `fk_category_id`, `fk_services_names`, `fk_services_id`, `fk_category_name`, `created_by`, `created_date`, `updated_by`, `updated_date`, `fk_profile_id`, `excel_code`) VALUES
(1, 7, 'Body Massage Centres', '1', 'Spa', 0, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 1, '159535'),
(2, 7, 'Beauty Spas', '2', 'Spa', 0, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 2, '159535'),
(3, 7, 'Massage', '4', 'Spa', 0, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 3, '159535'),
(4, 7, 'Massage', '4', 'Spa', 0, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 4, '159535'),
(5, 7, 'Massage', '4', 'Spa', 0, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 5, '159535'),
(6, 7, 'Massage', '4', 'Spa', 0, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 6, '159535'),
(7, 7, 'Makeup Artist', '6', 'Spa', 0, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 7, '159535'),
(8, 7, 'Makeup Artist', '6', 'Spa', 0, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 8, '159535'),
(9, 7, 'Makeup Artist', '6', 'Spa', 0, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 9, '159535'),
(10, 7, 'Makeup Artist', '6', 'Spa', 0, '2018-09-25 19:26:14', 0, '0000-00-00 00:00:00', 10, '159535'),
(11, 7, 'Men Salons', '5', 'Spa', 0, '2018-09-25 19:26:15', 0, '0000-00-00 00:00:00', 11, '159535'),
(12, 7, 'Men Salons', '5', 'Spa', 0, '2018-09-25 19:26:15', 0, '0000-00-00 00:00:00', 12, '159535'),
(13, 7, 'Men Salons', '5', 'Spa', 0, '2018-09-25 19:26:15', 0, '0000-00-00 00:00:00', 13, '159535'),
(14, 7, 'Men Salons', '5', 'Spa', 0, '2018-09-25 19:26:15', 0, '0000-00-00 00:00:00', 14, '159535'),
(15, 3, 'Men Salons', '5', 'Bridal Makeup', 0, '2018-09-26 20:14:01', 0, '0000-00-00 00:00:00', 15, '');

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
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_info`
--
ALTER TABLE `payment_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spa_profile`
--
ALTER TABLE `spa_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spa_profile_images`
--
ALTER TABLE `spa_profile_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spa_profile_location`
--
ALTER TABLE `spa_profile_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spa_profile_payment_info`
--
ALTER TABLE `spa_profile_payment_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spa_profile_services_category`
--
ALTER TABLE `spa_profile_services_category`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `payment_info`
--
ALTER TABLE `payment_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `spa_profile`
--
ALTER TABLE `spa_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `spa_profile_images`
--
ALTER TABLE `spa_profile_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `spa_profile_location`
--
ALTER TABLE `spa_profile_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `spa_profile_payment_info`
--
ALTER TABLE `spa_profile_payment_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `spa_profile_services_category`
--
ALTER TABLE `spa_profile_services_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
