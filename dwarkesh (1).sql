-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2024 at 10:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dwarkesh`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

CREATE TABLE `addtocart` (
  `cart_id` int(5) NOT NULL,
  `product_name` varchar(80) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_qty` int(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `product_id` int(5) NOT NULL,
  `registration_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addtocart`
--

INSERT INTO `addtocart` (`cart_id`, `product_name`, `product_image`, `product_price`, `product_qty`, `status`, `product_id`, `registration_id`) VALUES
(213, 'Aadhya NCS 1134 Bt-2 Cotton Hybrid Seeds', '300957641_cot-seed.png', 800, 3, 'success', 50, 25),
(214, 'KAYA NAVIRA Pseudomonas Fluorscens 1% W.P', '513351278_fun-pes.png', 370, 3, 'success', 25, 25),
(215, 'TrustBasket Plant Growth Promoter', '481033001_org-fer5.png', 520, 1, 'success', 49, 25),
(216, 'Karishma Plant Bio Fertilizers', '757890796_bio-fer1.png', 900, 1, 'success', 46, 25),
(217, 'Bio-Tech Grade Paddy', '484721943_chem-fer.png', 600, 2, 'success', 31, 25),
(218, 'Dhanuka Agritech', '155253175_her-pes.png', 465, 1, 'success', 26, 25),
(219, 'KAYA NAVIRA Pseudomonas Fluorscens 1% W.P', '513351278_fun-pes.png', 370, 1, 'success', 25, 25),
(220, 'Katyayani Acetamiprid', '817483173_inc-pes.png', 410, 1, 'success', 28, 25),
(221, 'KAYA NAVIRA Pseudomonas Fluorscens 1% W.P', '513351278_fun-pes.png', 370, 1, 'pending', 25, 0),
(222, 'IFFCO Urban Gardens - Green Diet', '955233804_org-fer.png', 330, 1, 'pending', 33, 0),
(223, 'Shiviproducts organic Bone Meal fertilize', '298298825_org-fer1.png', 469, 1, 'pending', 44, 0),
(224, 'Mahadhan Ammonium Sulphate Fertiliser', '608376968_bulk-fer.png', 560, 1, 'pending', 30, 0),
(225, 'Dhanuka Agritech', '155253175_her-pes.png', 465, 1, 'pending', 26, 0),
(226, 'Zaena Bio Natural and Organic Liquid Bacteria Fert', '717677890_bio-fer.png', 705, 1, 'pending', 52, 0),
(227, 'Karishma Plant Bio Fertilizers', '757890796_bio-fer1.png', 900, 1, 'pending', 46, 0),
(228, 'RALLIS Lambda Cyhalothrin', '498003578_hou-pes.png', 270, 1, 'pending', 27, 0),
(229, 'Dhanuka Agritech', '155253175_her-pes.png', 465, 1, 'pending', 26, 25),
(230, 'KAYA NAVIRA Pseudomonas Fluorscens 1% W.P', '513351278_fun-pes.png', 370, 1, 'pending', 25, 25),
(231, 'Creative Farmer Flower Seeds', '175459736_flow-seed1.png', 100, 1, 'success', 40, 26),
(232, 'Grow Delight 12 Variety 800+ Flower Seeds', '665845486_flow-seed2.png', 349, 1, 'success', 41, 26),
(234, 'KAYA NAVIRA Pseudomonas Fluorscens 1% W.P', '513351278_fun-pes.png', 370, 1, 'success', 25, 24),
(235, 'Grow Delight 12 Variety 800+ Flower Seeds', '665845486_flow-seed2.png', 349, 1, 'success', 41, 24),
(236, 'Dhanuka Agritech', '155253175_her-pes.png', 465, 2, 'success', 26, 24),
(237, 'RALLIS Lambda Cyhalothrin', '498003578_hou-pes.png', 270, 1, 'success', 27, 24),
(238, 'Zaena Bio Natural and Organic Liquid Bacteria Fert', '717677890_bio-fer.png', 705, 1, 'success', 52, 24),
(239, '14 Inch Super Wheel Type Push Mower', '749569660_lawn4.png', 5300, 1, 'success', 91, 24),
(240, 'KAYA NAVIRA Pseudomonas Fluorscens 1% W.P', '513351278_fun-pes.png', 370, 2, 'success', 25, 24),
(241, 'KAYA NAVIRA Pseudomonas Fluorscens 1% W.P', '513351278_fun-pes.png', 370, 1, 'success', 25, 24),
(242, 'Katyayani Acetamiprid', '817483173_inc-pes.png', 410, 3, 'success', 28, 24),
(243, 'Ugaoo Grow TAB', '456115940_mic-fer.png', 189, 1, 'success', 32, 24),
(251, 'Cotton 3028 BG-II Ankur seeds', '425992829_cot-seed7.png', 700, 5, 'success', 58, 24),
(252, 'POWERUP MICRON - Bio Fertilizer', '706262740_bio-pes3.png', 675, 1, 'success', 109, 24),
(253, 'F1 Green Ball Cabbage Seeds', '834232391_kit-seed9.png', 640, 1, 'success', 108, 24),
(254, '1L Liquid Bio Fertilizer, For Agriculture', '550569069_bio-fer7.png', 280, 1, 'success', 114, 24),
(255, '18 Inch Super Wheel Type Push Mower', '905928231_lawn2.png', 5450, 1, 'success', 89, 24),
(256, 'Urja F1 Hybrid Indrani Capsicum Seeds', '169726113_kit-seed8.png', 1175, 2, 'success', 107, 26),
(257, 'Hand Operated Lawn & Garden Pressure Sprayer', '838337680_sp1.png', 1780, 1, 'success', 98, 26),
(259, 'KAYA NAVIRA Pseudomonas Fluorscens 1% W.P', '513351278_fun-pes.png', 370, 2, 'success', 25, 24),
(260, 'Dhanuka Agritech', '155253175_her-pes.png', 465, 1, 'success', 26, 24),
(261, 'Potassium Sulphate Gardening Plant Fertilizer', '662520323_chem-fer4.png', 639, 2, 'success', 118, 24),
(262, 'IFFCO Urban Gardens - Green Diet', '955233804_org-fer.png', 330, 1, 'success', 33, 24),
(263, 'Utkarsh Castor Cake Organic Fertilizers', '700724221_org-fer9.png', 205, 1, 'success', 163, 24),
(264, 'Pratikar Bio Fungicides', '715561142_fun-pes3.png', 549, 1, 'success', 167, 24),
(266, 'Utkarsh BaciSub (Bacillus subtilus Based Biofungic', '552511773_fun-pes5.png', 645, 1, 'success', 170, 37),
(267, 'AMOGA Foliar spray STRAIGHT MICRONUTRIENTS FERTILI', '393227804_mic-fer11.png', 149, 2, 'success', 159, 37),
(269, 'IFFCO URBAN GARDENS - Sea Secret - Seaweed Extract', '838577386_org-fer3.png', 240, 1, 'success', 47, 37),
(270, 'Utkarsh BaciSub (Bacillus subtilus Based Biofungic', '552511773_fun-pes5.png', 645, 1, 'pending', 170, 37),
(271, 'Dhanuka Agritech', '155253175_her-pes.png', 465, 1, 'success', 26, 38),
(272, 'AGRI MAX Foliar spray STRAIGHT MICRONUTRIENTS FERT', '528266640_mic-fer1.png', 150, 1, 'success', 150, 38),
(273, 'IFFCO Urban Gardens - Green Diet', '955233804_org-fer.png', 330, 1, 'success', 33, 41),
(274, 'Creative Farmer Flower Seeds', '175459736_flow-seed1.png', 100, 1, 'success', 40, 42),
(275, 'Grow Delight 12 Variety 800+ Flower Seeds', '665845486_flow-seed2.png', 349, 1, 'success', 41, 42),
(276, 'Dhanuka Agritech', '155253175_her-pes.png', 465, 1, 'success', 26, 43),
(277, 'AGRI MAX Foliar spray STRAIGHT MICRONUTRIENTS FERT', '528266640_mic-fer1.png', 150, 1, 'success', 150, 43),
(278, 'Dhanuka Agritech', '155253175_her-pes.png', 465, 1, 'success', 26, 42),
(279, 'RALLIS Lambda Cyhalothrin', '498003578_hou-pes.png', 270, 1, 'success', 27, 42),
(280, 'CEAXOR Bioinoculants Microbial Fungicides', '576379790_fun-pes7.png', 525, 2, 'success', 172, 43),
(281, 'Dhanuka Agritech', '155253175_her-pes.png', 465, 1, 'pending', 26, 43),
(282, 'ceriltiok house', '686728013_org-fer.png', 200, 1, 'pending', 177, 43),
(283, 'house carfing', '324861937_org-fer4.png', 400, 1, 'pending', 176, 43),
(284, 'Dhanuka Agritech', '155253175_her-pes.png', 465, 1, 'success', 26, 44),
(285, 'ceriltiok house', '686728013_org-fer.png', 200, 1, 'success', 177, 44),
(286, 'ceriltiok house', '686728013_org-fer.png', 200, 1, 'pending', 177, 44),
(287, 'biosrike', '550719065_chem-fer.png', 300, 1, 'pending', 178, 44),
(288, 'Bio-Tech Grade Paddy', '585476695_chem-fer.png', 589, 1, 'pending', 31, 44),
(289, 'RALLIS Lambda Cyhalothrin', '498003578_hou-pes.png', 270, 1, 'pending', 27, 44),
(290, 'Katyayani Acetamiprid', '817483173_inc-pes.png', 410, 1, 'pending', 28, 44),
(291, 'TrustBasket Premium Zinnia Mixed Flowers Seeds', '919848659_flow-seed.png', 170, 1, 'pending', 36, 44);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(5) NOT NULL,
  `banner_caption` varchar(50) NOT NULL,
  `banner_sub_caption` varchar(50) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `banner_index` int(1) NOT NULL,
  `convert` varchar(1) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_caption`, `banner_sub_caption`, `banner_image`, `banner_index`, `convert`, `status`) VALUES
(17, 'Agricultural Products', 'This is our Homepage Banner', '1679247482.jpg', 1, 'N', 'deactive'),
(18, 'Agricultural Products', 'This is our Homepage Banner', '1679247369.jpg', 0, 'N', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `billing_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(120) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `phone_number` bigint(11) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `registration_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`billing_id`, `name`, `address`, `city`, `state`, `pincode`, `phone_number`, `email_id`, `registration_id`) VALUES
(48, 'Bairwa Hemant', 'Kabir Chowk shivlal ki chali sabarmati', 'Ahmedabad', 'Gujarat', 380005, 9429660024, 'hemantbairwa86@gmail.com', 25),
(49, 'Bairwa Hemant', 'Kabir Chowk shivlal ki chali sabarmati', 'Ahmedabad', 'Gujarat', 380005, 9429660024, 'hemantbairwa86@gmail.com', 25),
(50, 'Bairwa Hemant', 'Kabir Chowk shivlal ki chali sabarmati', 'Ahmedabad', '', 380005, 9429660024, 'hemantbairwa86@gmail.com', 25),
(51, 'Bairwa Hemant', 'Kabir Chowk shivlal ki chali sabarmati', 'Ahmedabad', '', 380005, 9429660024, 'hemantbairwa86@gmail.com', 25),
(52, 'Gopal Ahir', '69, Nilkanth Society', 'Surat', 'Gujrat', 395006, 7874841015, 'bhuvagopal31@gmail.com', 26),
(53, 'Devanshi Thakkar', '126-B, Janpath Society,', 'Ahmedabad', 'Gujarat', 38008, 8734858711, 'devanshi11013@gmail.com', 24),
(54, 'Devanshi` Thakkar', '126-B, Janpath Society,', 'Ahmedabad', 'Gujrat', 380008, 8734858711, 'devanshi11013@gmail.com', 24),
(55, 'Devanshi Thakkar', '126-B, Janpath Society,', 'Ahmedabad', 'Gujarat', 380008, 8734858711, 'devanshi11013@gmail.com', 24),
(56, 'Devanshi Thakkar', '126-B, Janpath Society,', 'Ahmedabad', 'Gujarat', 380008, 8734858711, 'devanshi11013@gmail.com', 24),
(57, 'Devanshi Thakkar', '126-B, Janpath Society,', 'Ahmedabad', 'Gujarat', 380008, 8734858711, 'devanshi11013@gmail.com', 24),
(58, 'Devanshi Thakkar', '126-B, Janpath Society,', 'Ahmedabad', 'Gujarat', 380008, 8734858711, 'devanshi11013@gmail.com', 24),
(59, 'Devanshi Thakkar', '126-B, Janpath Society,', 'Ahmedabad', 'Gujarat', 380008, 8734858711, 'devanshi11013@gmail.com', 24),
(60, 'Ankit Makwana', '4 manglam flat', 'Ahmedabad', '', 380013, 9924865010, 'devanshi11013@gmail.com', 24),
(61, 'Devanshi Thakkar', '126-B, Janpath Society,', 'Ahmedabad', '', 380008, 8734858711, 'devanshi11013@gmail.com', 24),
(62, 'Ankit Makwana', '4 manglam flat', 'Ahmedabad', 'Gujarat', 380013, 9924865010, 'ankmak4@gmail.com', 24),
(63, 'Ankit Makwana', '4 manglam flat', 'Ahmedabad', 'Gujarat', 380013, 9924865010, 'devanshi11013@gmail.com', 24),
(64, 'Ankit Makwana', '4 manglam flat', 'Ahmedabad', 'State', 380013, 9924865010, 'devanshi11013@gmail.com', 24),
(65, 'Devanshi Thakkar', '126-B, Janpath Society,', 'Ahmedabad', 'Gujarat', 380008, 8734858711, 'devanshi11013@gmail.com', 24),
(66, 'Devanshi Thakkar', '126-B, Janpath Society,', 'Ahmedabad', '', 380008, 8734858711, 'devanshi11013@gmail.com', 24),
(67, 'Gopal Ahir', '69, Nilkanth Society', 'Surat', '', 395006, 7874841015, 'bhuvagopal31@gmail.com', 26),
(68, 'Devanshi Thakkar', '126-B, Janpath Society,', 'Ahmedabad', '', 380008, 8734858711, 'devanshi11013@gmail.com', 24),
(69, 'Devanshi Thakkar', '126-B, Janpath Society,', 'Ahmedabad', '', 380008, 8734858711, 'devanshi11013@gmail.com', 24),
(70, 'Devanshi Thakkar', '126-B, Janpath Society,', 'Ahmedabad', '', 380008, 8734858711, 'devanshi11013@gmail.com', 24),
(71, ' ', '', '', '', 0, 0, 'devanshi11013@gmail.com', 37),
(72, 'Devanshi Thakkar', '126-B, Janpath Society,', 'Ahmedabad', 'Gujarat', 380008, 8734858711, 'devanshi11013@gmail.com', 37),
(73, 'Devanshi Thakkar', '126-B, Janpath Society,', 'Ahmedabad', '', 380008, 8734858711, 'devanshi11013@gmail.com', 37),
(74, 'Devanshi Thakkar', '126-B, Janpath Society,', 'Ahmedabad', 'Gujarat', 380008, 8734858711, 'bhuvagopal31@gmail.com', 38),
(75, 'Gopal Ahir', '69, Nilkanth Society', 'Surat', '', 395006, 7874841015, 'bhuvagopal31@gmail.com', 41),
(76, 'Devanshi Thakkar', '126-B, Janpath Society,', 'Ahmedabad', 'Gujarat', 380008, 8734858711, 'devanshi11013@gmail.com', 42),
(77, 'Gopal Ahir', '69, Nilkanth Society', 'Surat', '', 395006, 7874841015, 'bhuvagopal31@gmail.com', 43),
(78, 'Devanshi Thakkar', '126-B, Janpath Society,', 'Ahmedabad', 'Gujarat', 380008, 0, 'devanshi11013@gmail.com', 42),
(79, 'Devanshi Thakkar', '126-B, Janpath Society,', 'Ahmedabad', 'Gujarat', 380008, 8734858711, 'devanshi11013@gmail.com', 42),
(80, 'Devanshi Thakkar', '126-B, Janpath Society,', 'Ahmedabad', '', 380008, 8734858711, 'devanshi11013@gmail.com', 42),
(81, 'ahir gopal', 'mota varachha', 'surta', '', 395006, 8141975159, 'bhuvagopal31@gmail.com', 43),
(82, 'Devanshi Ahir', 'surat', 'Surat', 'Gujrat', 395006, 8141975159, 'devanshi11013@gmail.com', 44);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(5) NOT NULL,
  `category_name` varchar(30) NOT NULL,
  `category_des` varchar(200) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `convert` char(1) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_des`, `category_image`, `convert`, `status`) VALUES
(13, 'Pesticides', 'Pesticides are chemical compounds.', '1678424499.jpg', 'Y', 'active'),
(14, 'Fertilizers', 'Fertilizers are used for increase crops productivity.', '1678424797.jpg', 'Y', 'active'),
(15, 'Seeds', 'Seed refers to the fertilized, matured ovule.', '1678425047.jpg', 'Y', 'active'),
(18, 'Equipment', 'Any kind of machinery used on a farm to help with farming.', '1680344621.jpg', 'Y', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `email`, `message`, `rating`) VALUES
(17, 'bhuvagopal31@gmail.com', 'Hiiiiiiiiiiiiiiiiii', 5),
(18, 'bhuvagopal31@gmail.com', 'asdfgh', 5),
(23, 'devanshi11013@gmail.com', 'Good Product...', 5),
(24, 'devanshi11013@gmail.com', 'Good Product...', 5),
(29, 'bhuvagopal31@gmail.com', 'best of luck\r\n', 5),
(30, 'bhuvagopal31@gmail.com', 'hello', 0);

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE `log_in` (
  `login_id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `login_type` varchar(10) NOT NULL,
  `phone_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`login_id`, `username`, `password`, `login_type`, `phone_number`) VALUES
(1, 'dwarkeshagro08@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'admin', ''),
(23, 'bhuvagopal31@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'customer', '7874841015'),
(24, 'devanshi11013@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'customer', '8141975159'),
(25, 'ankmak4@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'customer', '8734858711');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(5) NOT NULL,
  `payment_type` varchar(10) NOT NULL,
  `total_item` int(5) NOT NULL,
  `total_amount` int(5) NOT NULL,
  `date_time` datetime NOT NULL,
  `registration_id` int(5) NOT NULL,
  `order_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `payment_type`, `total_item`, `total_amount`, `date_time`, `registration_id`, `order_status`) VALUES
(96, 'Razorpay', 2, 615, '2023-04-23 12:54:18', 43, 'Pending'),
(99, 'Razorpay', 1, 1050, '2023-04-25 10:37:52', 43, 'Pending'),
(100, 'COD', 2, 665, '2023-04-25 13:50:37', 44, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `or_item_id` int(5) NOT NULL,
  `product_id` int(5) NOT NULL,
  `order_id` int(5) NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_qty` int(5) NOT NULL,
  `or_item_status` varchar(20) NOT NULL,
  `cart_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`or_item_id`, `product_id`, `order_id`, `product_price`, `product_qty`, `or_item_status`, `cart_id`) VALUES
(45, 46, 65, 900, 1, 'Pending', 216),
(46, 31, 66, 600, 2, 'Pending', 217),
(47, 26, 66, 465, 1, 'Pending', 218),
(48, 25, 67, 370, 1, 'Pending', 219),
(49, 28, 68, 410, 1, 'Pending', 220),
(50, 40, 69, 100, 1, 'Pending', 231),
(51, 41, 69, 349, 1, 'Pending', 232),
(52, 25, 70, 370, 1, 'Pending', 234),
(53, 41, 71, 349, 1, 'Pending', 235),
(54, 26, 71, 465, 2, 'Pending', 236),
(55, 27, 72, 270, 1, 'Complete', 237),
(56, 52, 73, 705, 1, 'Pending', 238),
(57, 91, 73, 5300, 1, 'Pending', 239),
(58, 25, 74, 370, 2, 'Complete', 240),
(59, 25, 75, 370, 1, 'Pending', 241),
(60, 28, 76, 410, 3, 'Pending', 242),
(61, 32, 76, 189, 1, 'Pending', 243),
(62, 58, 77, 700, 5, 'Pending', 251),
(63, 109, 78, 675, 1, 'Pending', 252),
(64, 108, 79, 640, 1, 'Pending', 253),
(65, 108, 80, 640, 1, 'Pending', 253),
(66, 114, 83, 280, 1, 'Pending', 254),
(67, 89, 84, 5450, 1, 'Pending', 255),
(68, 107, 85, 1175, 2, 'Pending', 256),
(69, 98, 85, 1780, 1, 'Pending', 257),
(70, 25, 86, 370, 2, 'Pending', 259),
(71, 26, 87, 465, 1, 'Processing', 260),
(72, 118, 87, 639, 2, 'Processing', 261),
(73, 33, 88, 330, 1, 'Pending', 262),
(74, 163, 88, 205, 1, 'Pending', 263),
(75, 167, 88, 549, 1, 'Pending', 264),
(76, 170, 89, 645, 1, 'Pending', 266),
(77, 159, 90, 149, 2, 'Pending', 267),
(78, 47, 91, 240, 1, 'Pending', 269),
(79, 26, 92, 465, 1, 'Pending', 271),
(80, 150, 92, 150, 1, 'Pending', 272),
(81, 26, 93, 465, 1, 'Pending', 271),
(82, 150, 93, 150, 1, 'Pending', 272),
(83, 33, 94, 330, 1, 'Pending', 273),
(84, 40, 95, 100, 1, 'Pending', 274),
(85, 41, 95, 349, 1, 'Pending', 275),
(86, 26, 96, 465, 1, 'Pending', 276),
(87, 150, 96, 150, 1, 'Pending', 277),
(88, 26, 98, 465, 1, 'Pending', 278),
(89, 27, 98, 270, 1, 'Pending', 279),
(90, 172, 99, 525, 2, 'Pending', 280),
(91, 26, 100, 465, 1, 'Pending', 284),
(92, 177, 100, 200, 1, 'Pending', 285);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(5) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_des` varchar(200) NOT NULL,
  `product_img` varchar(120) NOT NULL,
  `convert` char(1) NOT NULL,
  `status` varchar(10) NOT NULL,
  `product_price` int(20) NOT NULL,
  `special_price` int(20) NOT NULL,
  `subcategory_id` int(5) NOT NULL,
  `qty` int(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_des`, `product_img`, `convert`, `status`, `product_price`, `special_price`, `subcategory_id`, `qty`) VALUES
(25, 'KAYA NAVIRA Pseudomonas Fluorscens 1% W.P', 'Plants - Controls Blast and sheath blight, Root Rot, Damping off, Wilt Diseases in Plants', '513351278_fun-pes.png', 'Y', 'active', 400, 370, 46, 30),
(26, 'Dhanuka Agritech', 'Killer/Herbicide for Lawns Garden and Crops', '155253175_her-pes.png', 'Y', 'active', 500, 465, 47, 30),
(27, 'RALLIS Lambda Cyhalothrin', '10% WP Household Insecticide', '498003578_hou-pes.png', 'Y', 'active', 299, 270, 44, 30),
(28, 'Katyayani Acetamiprid', 'Insect Killer for Gardening Plants and Agriculture Crops', '817483173_inc-pes.png', 'Y', 'active', 450, 410, 45, 30),
(31, 'Bio-Tech Grade Paddy', 'Special Fertilizer, Packaging', '585476695_chem-fer.png', 'Y', 'active', 600, 589, 41, 40),
(32, 'Ugaoo Grow TAB', 'Fertilizers, Water Soluble Micronutrient Tablets for Plants Growth', '456115940_mic-fer.png', 'Y', 'active', 199, 189, 39, 30),
(33, 'IFFCO Urban Gardens - Green Diet', 'Plant Food, Liquid Fertilizer For Potted Indoor & Outdoor plants', '955233804_org-fer.png', 'Y', 'active', 399, 330, 40, 30),
(36, 'TrustBasket Premium Zinnia Mixed Flowers Seeds', 'Sow and Grow Fresh Healthy Seed in Your Garden Perfect for Home & Terrace Gardening High Germination Seeds', '919848659_flow-seed.png', 'Y', 'active', 199, 170, 35, 30),
(37, 'Kraft Seeds Vegetable Parsley Seeds', 'Fresh Gardening Vegetable Leafy Plants Seeds for Kitchen', '183180681_kit-seed.png', 'Y', 'active', 120, 120, 36, 40),
(39, 'Navya Agriallied Desi Palak Spinach Seeds', '3000 Seeds and Vermicompost (Combo Pack) for home Kitchen Garden', '672589265_veg-seed1.png', 'Y', 'active', 199, 199, 36, 30),
(40, 'Creative Farmer Flower Seeds', 'For Fall Planting- Saamandi- Chrysanthemum White Flower Seeds for Gardening', '175459736_flow-seed1.png', 'Y', 'active', 100, 100, 35, 30),
(41, 'Grow Delight 12 Variety 800+ Flower Seeds', 'Best In Class Quality And Germination Rate', '665845486_flow-seed2.png', 'Y', 'active', 399, 349, 35, 30),
(42, 'Kraft Seeds Vegetable Bottle Gourd Seeds', 'Summer Vegetables Seeds for Home Garden', '877721430_kit-seed1.png', 'Y', 'active', 110, 110, 36, 40),
(43, 'Cauliflower Seeds', 'Phool Gobhi Vegetable Seeds For Kitchen Garden Pack of 50 Seeds', '325727314_kit-seed2.png', 'Y', 'active', 120, 120, 36, 50),
(44, 'Shiviproduct organic Bone Meal fertilizer', 'plants home gardening as Natural NPK 3-15-0 and Essential organic phosphorous supplement', '298298825_org-fer1.png', 'Y', 'active', 499, 469, 40, 30),
(45, 'Rose Beauty Special Organic Rose Fertilizer', 'Rose Plants Plant Food and Flower Booster Growth Flowering Plants', '367053630_org-fer2.png', 'Y', 'active', 190, 180, 40, 30),
(46, 'Karishma Plant Bio Fertilizers', 'Bio Fertilizers, Agriculture Product', '757890796_bio-fer1.png', 'Y', 'active', 980, 900, 38, 30),
(47, 'IFFCO URBAN GARDENS - Sea Secret - Seaweed Extract', 'Organic Fertilizer & Growth Promoter for Plants', '838577386_org-fer3.png', 'Y', 'active', 240, 240, 40, 30),
(48, 'Shivi products Organic Liquid Bio', 'Free Spray Bottle & Direct Ready to use &Fruiting and Flowering', '515909286_org-fer4.png', 'Y', 'active', 799, 750, 40, 30),
(49, 'TrustBasket Plant Growth Promoter', 'Booster Organic Fertilizer', '481033001_org-fer5.png', 'Y', 'active', 529, 520, 40, 30),
(50, 'Aadhya NCS 1134 Bt-2 Cotton Hybrid Seeds', 'qwertyuio', '300957641_cot-seed.png', 'Y', 'active', 810, 800, 48, 30),
(51, 'Castor Seeds', 'Castor Seeds is very famous for better yield.', '773350966_fc-seed.png', 'Y', 'active', 300, 280, 49, 30),
(52, 'Zaena Bio Natural and Organic Liquid Fertilizer', 'Vegetables, Fruits, Garden Flowers, Agriculture Crops, Indoor and Outdoor Home Plants.', '717677890_bio-fer.png', 'Y', 'active', 720, 705, 38, 30),
(53, 'YK Laboratories Oxyveg Cotton', 'Cotton Special for Cotton Crop', '691193804_cot-seed1.png', 'Y', 'active', 1800, 1500, 48, 30),
(54, 'RCH 659 BGII Cotton Seeds', 'For Agriculture, First Quality Seeds, Grows Fast, Gives Best Result', '737313472_cot-seed2.png', 'Y', 'active', 1500, 1200, 48, 30),
(55, 'The Divine Foods Paruthi Paal-Cotton Seed', 'Antioxidant Drink-Good Cholesterol Drink', '956209027_cot-seed4.png', 'Y', 'active', 395, 380, 48, 30),
(56, 'Shivi products Organic Cottonseed', 'Meal for Home Gardening fertilizers for Plants and Essential NPK 6-0-4 for plants speed up growth and flowering', '230141013_cot-seed5.png', 'Y', 'active', 599, 550, 48, 30),
(58, 'Cotton 3028 BG-II Ankur seeds', 'Cotton 3028 BG-II is suitable for monsoon irrigation and rainy condition. Plant growth erect type and prolific boll bearing.', '425992829_cot-seed7.png', 'Y', 'active', 730, 700, 48, 30),
(59, 'Cotton Seed Oil', 'Cottonseed oil is rich in the concentration of Vitamin E. Cottonseed oil for hair- It moisturizes the hair.', '238569907_cot-seed8.png', 'Y', 'active', 510, 499, 48, 30),
(60, 'V-Sport BGII Hybrid Cotton Seeds', '-Sport BGII Hybrid Cotton Seeds is one of Premium and excellent performer hybrid. This hybrid is highly adoptive to almost all cotton-growing states as well as suitable for cultivation under varied so', '198992070_cot-seed3.png', 'Y', 'active', 790, 750, 48, 30),
(61, 'Sky Life Cotton Seed', 'Choosen best herb seeds from our farm', '688806543_cot-seed9.png', 'Y', 'active', 400, 359, 48, 30),
(63, 'Cotton Seed Cold-Pressed Oil', 'Therapeutic Grade |100% Natural (30ml)', '602754654_cot-seed10.png', 'Y', 'active', 249, 205, 48, 30),
(64, 'Agricultural Seeds', 'Agricultural Seeds', '982551491_fc-seed1.png', 'Y', 'active', 200, 175, 49, 30),
(65, 'King VIRAT + Rape Yellow Mustard Seeds', 'Maturity Days : 120-125 Days  Oil Percentage : 41-42%', '672556931_fc-seed2.png', 'Y', 'active', 650, 640, 49, 30),
(66, 'Everest Research Hybrid Bajra Seeds', 'Everest Research Hybrid Bajra Seeds crop Maturity period is 70-72 Days  - Gives heavy fodder with more grains.', '160726641_fc-seed3.png', 'Y', 'active', 450, 420, 49, 30),
(67, 'Govardhan Super Hybrid Castor Seeds', 'Plants stand tall and color of trunk is red.  - Diseases due to red fatigue and scab under the leaves are more resistant.', '442014009_fc-seed4.png', 'Y', 'active', 620, 600, 49, 30),
(68, 'Govardhan 444 Research Cumin Seeds', 'The variety of Govardhan 444 Research Cumin (Jeera) Seeds is Top quality Cumin (Jeera) seeds:  Harvest days of Govardhan 444 Research Cumin (Jeera) Seeds (105 to 110 days)', '259644747_fc-seed5.png', 'Y', 'active', 600, 579, 49, 30),
(69, 'Nili Research Mustard Seeds', 'Nili Research Mustard Seed Maturity days are 100 to 110 days.  Research Mustard Seed Plant height (180 cm)', '980617610_fc-seed6.png', 'Y', 'active', 480, 460, 49, 30),
(70, 'Govardhan King Improved Research Fennel seeds', 'Seeds Require per Acre : 5 to 6 Kg,  Yield : 8-12 quintals / acre,  Maturity Days : 80 to 100 Days , High Yield Variety', '960790557_fc-seed8.png', 'Y', 'active', 800, 779, 49, 30),
(71, 'IHS-108 F1 HYBRID YELLOW MARIGOLD SEEDS', 'FLOWER COLOR  –  LEMON YELLOW,  FLOWER DIAMETER –  8 TO 10 CM , FLOWER STRUCTURE –  COMPACT BALL SHAPED,  PLANT HEIGHT –  LONG DAY 85-100 CM / SHORT DAY 42 -48 CM,  PLANT WIDTH –  LONG DAY 64-72 CM / ', '557253236_flow-seed3.png', 'Y', 'active', 260, 235, 35, 30),
(72, 'IHS-786 F1 HYBRID ORANGE MARIGOLD SEEDS', 'FLOWER COLOR – ORANGE,  FLOWER DIAMETER – 8 TO 10 CM,  FLOWER STRUCTURE – COMPACT BALL SHAPED,  PLANT HEIGHT – LONG DAY 85-100 CM / SHORT DAY 47-50 CM,  PLANT WIDTH – LONG DAY 63-70 CM / SHORT DAY 48-', '938113389_flow-seed4.png', 'Y', 'active', 260, 245, 35, 30),
(73, 'FB BHASKAR F1 Hybrid Sunflower Seeds', 'FB-BHASKAR Plants are medium tall, Robust growth, Versatile hybrid (Suitable for all type of soils & Agro climatic conditions) Head Medium, Convex, Semi erect, uniform, and Completely filled up to the', '862290722_flow-seed5.png', 'Y', 'active', 1188, 1179, 35, 30),
(74, 'Hybrid Gaillardia -2 Mix Flower Seeds', 'Mix of 6-7 super colors  - Plant is 50-60 cm tall  - Profuse yielder  - Excellent for bedding and also for cut flowers', '589087280_flow-seed6.png', 'Y', 'active', 350, 340, 35, 30),
(75, 'Hybrid French Marigold-SFR-5 Red Flower Seeds', '- Copper brown red French Marigold, very compact plant  - Flower is 4-5 cm diameter  - Hybrid French Marigold-SFR-5 Red Flower Seeds (Genda Ke Beej) Plant is 40-50 cm tall  - Profuse flowering & very ', '319553583_flow-seed7.png', 'Y', 'active', 370, 350, 35, 30),
(76, 'Hybrid Bijali White Flower Seeds', '- Plant is 60-70 cm tall  - Profuse flowering, white compact flowers  - Attractive flowers for bedding and for cut flower  - Good shelf life, all season', '713640327_flow-seed8.png', 'Y', 'active', 415, 410, 35, 30),
(77, 'Home garden vegetable seed kit', 'Home garden vegetable seed kit', '389786662_kit-seed3.png', 'Y', 'active', 280, 270, 36, 30),
(104, 'Organic & hybrid Vegetable Seeds & Fruits Seeds', 'The seeds in these packs will remain viable for years if stored in a cool dry location. Some of these plants can be grown indoors or outdoors in container gardening.', '527408806_kit-seed4-removebg-preview.png', 'Y', 'active', 950, 890, 36, 30),
(105, 'Hybrid Tomato Seeds', 'Fruit Weight (grams):  90-100  Color: Red  Days to 1st Harvest after Transplanting: 80-85 days  Disease Tolerance: TYLCV, BW  Profuse bearing with excellent foliage  High yielding  Good for fresh mark', '682895943_kit-seed6.png', 'Y', 'active', 630, 605, 36, 30),
(107, 'Urja F1 Hybrid Indrani Capsicum Seeds', 'Capsicum Seeds are Medium tall compact plants  Dark green foliage with blocky dark green and glossy fruit  Wide adaptability and tolerant to TMV Average weight – 150 to 170gms  Seed rate: 140-200 Gms ', '169726113_kit-seed8.png', 'Y', 'active', 1200, 1175, 36, 30),
(108, 'F1 Green Ball Cabbage Seeds', 'leaves are dark green & broad,  F1 Green Ball Cabbage Seeds  are very tasty & high yielding, Good Keeping Quality', '834232391_kit-seed9.png', 'Y', 'active', 670, 640, 36, 30),
(109, 'POWERUP MICRON - Bio Fertilizer', 'PowerUp Micron makes zinc, manganese, iron and silicon available to crops from soil. It contains selected strains of zinc, manganese, iron and silicon solubilizing bacteria. Shelf life: 1 year from da', '706262740_bio-pes3.png', 'Y', 'active', 720, 675, 38, 30),
(110, 'Naval takat bio-fertilizer for flowering & growth', 'Takat has Biochemically available Micronutrients and Macronutrients fertilizer for plants Naval Takat is an innovative scientific formulation that fulfils all needs of plants to maintain healthy growt', '601019119_bio-fer2.png', 'Y', 'active', 730, 699, 38, 30),
(111, 'Garden Genie Root Power VAM Mycorrhiza Fertilizer', 'Composition: 1200 IP/gm, Dosage : Use once every month, How to use: *Step-1: Apply Root Power Fertilizer 20-30 gm per plant *Step-2: Cover with 1 - 2 inch soil *Step-3: Irrigate afterwards.', '944813273_bio-fer4.png', 'Y', 'active', 299, 275, 38, 30),
(112, 'Casa De Amor Growth Booster Liquid Bio-Fertilizer', 'For All Plants 500 ml, Perfect to Use On Indoor/Outdoor Plants', '428839855_bio-fer5.png', 'Y', 'active', 350, 310, 38, 30),
(113, 'TEJASAVI Amino Acids Bio-Fertilizer', 'It makes grain weighty and shiny. It increases the number of flowers and fruits. It increases disease resistance in crops. It accelerates the process of photosynthesis. It helps in temperature control', '966486302_bio-fer6.png', 'Y', 'active', 999, 979, 38, 30),
(114, '1L Liquid Bio Fertilizer, For Agriculture', 'Packaging Type: Bottle, Packaging Size: 1L Target Crops Plant, Usage: Agriculture, Grade Standard: Industrial Grade, Form: Liquid, Purity: 99%', '200751938_bio-fer7.png', 'Y', 'active', 290, 280, 38, 30),
(115, 'BEE VAM ( BIO FERTILIZER)', 'CFU counts are maintained till Expiry (minimum 2 years) Dextrose based product - no need to add jaggery. Can combine multiple microbes in a single product', '571339648_bio-fer8-removebg-preview.png', 'Y', 'active', 690, 665, 38, 30),
(116, 'Utkarsh Calcium Nitrate – Ca(NO3)2', '• Calcium Nitrate is dense granular fertilizer which dissolves quickly and completely in water.  • Calcium Nitrate also helps plants for tolerance to diseases infection due to cells strength.', '390561480_chem-fer1.png', 'Y', 'active', 435, 420, 41, 30),
(117, 'Utkarsh Fee drip Miscellaneous Chemical Fertilizer', '• FeeDrip is immediately absorbed by root system and carried throughout the plant, therefore it provides a quick, long lasting solution to the problem of Iron (Fe) deficiency in all crops.', '470287810_chem-fer3.png', 'Y', 'active', 615, 599, 41, 30),
(118, 'Potassium Sulphate Gardening Plant Fertilizer', '*It is 100% Water Soluble Crystalline-Free Flow- Powder Fertilzier for your Garden Plants.  *Works for both Indoor & Outdoor Plants. * All in One for every plants needs.', '662520323_chem-fer4.png', 'Y', 'active', 649, 639, 41, 30),
(119, 'Zinc Sulphate (Heptahydrate) Chemical Fertilizer', 'Dosage: Spray & Drip Application: Mixing Ratio: 6-7 gm in 1ltr of water.    Soil Application: Apply 4 to 5 gram Powder Directly near roots. For Better Result Repeat Application in 20-25 days Interval.', '892218605_chem-fer2.png', 'Y', 'active', 699, 649, 41, 30),
(120, 'Ammonium Sulphate Plant Chemical Fertilizer', 'Product Containes: Ammonium Sulphate Fertilizer 100% Water Soluble Fertilizer for your Garden Plants. Works for both Indood & Outdoor Plants    All that a plant needs, all at once. increases fruit pro', '579049534_chem-fer5.png', 'Y', 'active', 699, 675, 41, 30),
(121, 'Micronutrient Mixture Plant Chemical Fertilizer', '*Usage: Soil - Drip - Spray Application. Solubility: 100% Soluble in Water. *Contents of Mixture: Fe-2% | Mn-0.5% | Zn-5% | Cu-0.2% | B-0.5%. Ph: 6.0-7.0.', '468935021_chem-fer6.png', 'Y', 'active', 699, 675, 41, 30),
(122, 'Micronutrient Liquid Chemical Fertilizer', '*Contents of Mixture: Fe-2% | Mn-0.5% | Zn-5% | Cu-0.2% | B-0.5%. Ph: 6.0-7.0. *Apply 4 to 5 gram Powder Directly near roots. For Better Result Repeat Application in 20-25 days Interval.', '487035141_chem-fer7.png', 'Y', 'active', 999, 965, 41, 30),
(123, 'Junior Wheel Type Push Mower', '‣ 6 BLADES Cutting Cylinder  ‣ Rubber tyred wheels  ‣ Complete with Handle (8 Inch, 200mm)  ‣ Dimensions: 38 x 33 x 24 cms  ‣ Weight: 12 Kgs', '366023908_lawn1.png', 'Y', 'active', 3250, 2999, 55, 30),
(124, '18 Inch Super Wheel Type Push Mower', '‣ 6 BLADES Cutting Cylinder ‣ Rubber tyred wheels ‣ Complete with Grass Box and Handle (18 Inch, 450mm) ‣ Dimensions: 60 x 33 x 48 cms ‣ Weight: 23 Kgs', '476960869_lawn5.png', 'Y', 'active', 5650, 5349, 55, 30),
(126, '16 Inch Super Wheel Type Push Mower', '‣ 6 BLADES Cutting Cylinder ‣ Rubber tyred wheels ‣ Complete with Grass Box and Handle (16 Inch, 400mm) ‣ Dimensions: 56 x 33 x 48 cms ‣ Weight: 22 Kgs', '426537140_lawn3.png', 'Y', 'active', 5400, 5100, 55, 30),
(127, '14 Inch Super Wheel Type Push Mower', '‣ 6 BLADES Cutting Cylinder ‣ Rubber tyred wheels ‣ Complete with Grass Box and Handle (14 Inch, 350mm) ‣ Dimensions: 54 x 33 x 48 cms ‣ Weight: 21 Kgs', '875984412_lawn2.png', 'Y', 'active', 5400, 5300, 55, 30),
(128, '12 Inch Super Wheel Type Push Mower', '‣ 6 BLADES Cutting Cylinder ‣ Rubber tyred wheels ‣ Complete with Grass Box and Handle (12 Inch, 300mm) ‣ Dimensions: 52 x 33 x 48 cms ‣ Weight: 20 Kgs', '581285806_lawn4.png', 'Y', 'active', 5250, 5100, 55, 30),
(129, 'Dry Land Weeder Fork Type', 'The dry land weeder is manually operated weeder suitable for operation between the crop rows. It consists of a roller, which has two mild steel discs joined by mild steel rods.', '817948202_weed1.png', 'Y', 'active', 2750, 2550, 59, 30),
(130, 'Mandva Weeder', 'Weight: 4 to 5 Kgs, Usage: It is Mainly Used for Removing the Weeds from Paddy Crops Working, Width: 130-154 mm', '392324637_weed2.png', 'Y', 'active', 1849, 1789, 59, 30),
(131, 'Paddy Weeder', 'Weight: 4 to 5 Kg, Working Width: 130-140 mm, Driven Type: Manual', '979791182_weed3.png', 'Y', 'active', 2120, 1989, 59, 30),
(132, 'Cono Weeder', 'Features: Durable, Easy To Use, Full Adjustable, High Quality, Light Weight Size: 320 x 120 x 65 mm, Top Handle: 25 mm x 430 mm Long', '651522736_weed4.png', 'Y', 'active', 2200, 1999, 59, 30),
(133, 'Dry Land Weeder with single tine', 'Material: Mild Steel, Finish: Coated, Dimension: 49 x 47 x 118 cm, Weight: Approx 3 kg, Feature: Best Quality', '504992166_weed5.png', 'Y', 'active', 2200, 1989, 59, 30),
(134, 'Wheel Hoe Weeder 3 Tines Adjustable Handle', 'Overall Height: 0-1000 Mm, 1000-2000 Mm, Weeding Efficiency: 70%, 90%', '882061581_weed6.png', 'Y', 'active', 3010, 1989, 59, 30),
(135, 'Metal Pipe Stand', 'Usage/Application: Used for holding pipes. Material: Metal, Weight: Approx 450 grams, Dimension: 30 x 13 x 4.5', '788059885_gar1.png', 'Y', 'active', 580, 570, 57, 30),
(136, 'Double Stage Sprinkler with 4 Arms', 'Weight: Approx 700 grams, Dimension: 64 x 12 x 2.5, Usage/Application: Used to water the plants', '215575379_gar2.png', 'Y', 'active', 550, 530, 57, 30),
(137, 'Mini Garden Tools Set 3 Pieces', 'Gardening Tools Set includes a hand rake, shovel and baby trowel with attractive colors. It will help in gardening.', '750543349_gar3.png', 'Y', 'active', 490, 470, 57, 30),
(138, 'Cultivator with metal handle', 'Cultivator, farm implement or machine is designed to stir the soil around a crop as it matures to promote growth and destroy weeds.', '318609895_gar4.png', 'Y', 'active', 435, 420, 57, 30),
(139, 'Garden Auger DIA 5 Inch', 'Hand held augers can also be used for making holes for garden planting. Wood augers have a screw to pull them into the wood, as a gimlet has, and a cutting lip that slices out the bottom of the hole.*', '559606920_gar5.png', 'Y', 'active', 630, 610, 57, 30),
(140, 'Soil Mixture Auger 6 Tines', 'Soil Mixture Auger breaks up the soil without removing it and thoroughly mixes the manure with the soil.  Finish: Powder Coated Handle Mater: MS Pipe Model Code:UEI 1084 Weight: Approx 1.5Kg Dimension', '585032706_gar6.png', 'Y', 'active', 650, 635, 57, 30),
(141, 'Khurpa 3 inches & 5 inches set of 2 pieces', 'Keeping in mind the diverse requirements of our clients we are involved in offering an extensive range of Khurpa With Wood Type Handle 3\" and 5\". Finish: Powder Coated Handle Material: Wooden Size/Dim', '570757788_gar7.png', 'Y', 'active', 520, 500, 57, 30),
(142, 'Digging Spade', 'Type: Garden Spades -Material: Mild Steel -Shape: Flat -Weight: 2-4kg -Feature: Best Material, Optimum Strength -Finish: Hammer Tone, Powder Coated Handle Type: METAL SHAFT Automation Grade: Manual', '264392114_gar8.png', 'Y', 'active', 630, 620, 57, 30),
(143, 'Anvil Type Lopper', 'Material: Mild Steel Type: Lopper Application: Used to Create Crisp Edges to Border Color: Red Dimension: 72 x 33 x 1.5 Weight: Approx 1.4 Kg Feature: Easy to Use', '960366745_gar9.png', 'Y', 'active', 1850, 1650, 57, 30),
(144, 'Hand Operated Lawn & Garden Pressure Sprayer', '- Pumping by hand to build the pressure. Ergonomic handle with trigger lock. - Suitable for spraying water garden, tree, car wash, bike wash, kitchen and window, fertilizers, herbicides, pesticides', '439058564_sp1.png', 'Y', 'active', 1900, 1780, 58, 30),
(145, 'Garden Pressure Sprayer with 5Liter', 'Multi Functional use : This Practical 5 Liter Pressure Sprayer is Good to use for Indoor and Outdoor. Easy Filling : Super large Bowl Mouth and Funnel Design at The Top Allows you to Achieve Easy', '331884736_sp2.png', 'Y', 'active', 1500, 1380, 58, 30),
(146, 'Garden Spray Bottle', 'A spray bottle is a bottle that can squirt, spray or mist fluids. A common use for spray bottles is dispensing cool cleaners, cosmetics, and chemical specialties.  *Capacity: 2 liter Automation', '793046359_sp3.png', 'Y', 'active', 450, 435, 58, 30),
(147, 'Operated Garden Sprayer Bs-25 16 Litter', 'These sprayers have multiple applications, and are widely used in agriculture, horticulture, sericulture, plantations , forestry, gardens. Dimension: 48 x 37 x 19 Weight: 7.4 Kg', '797767470_sp4.png', 'Y', 'active', 4450, 4299, 58, 30),
(148, 'Knapsack Hand Operated Garden Hitech Sprayer', '- Fawar-33 TANK - HDPE CAPACITY - 16 Liter PRESSURE CHAMBER - Plastic LANCE - Stainless Steel Dimension: 51 x 37 x 22 Weight: 4.2 Kg TRIGGER CUT OFF - Brass NOZZLE - 8 Hole Nozzle', '750051983_sp5.png', 'Y', 'active', 3000, 2850, 58, 30),
(149, 'Knapsack Hand Operated Garden Sprayer 16L', 'Working pressure: 0.2Mpa-0.45Mpa Working pressure: 0.2Mpa-0.45Mpa Yard Hose Length: 1.1m/43.3inch Lance Length: 60cm/24inch Dimension: 52 x 46 x 20 Weight: 3.9 Kgs', '203060494_sp6.png', 'Y', 'active', 2800, 2550, 58, 30),
(150, 'AGRI MAX Foliar spray STRAIGHT MICRONUTRIENTS FERT', 'Dissolve 500 grams of Agri Max in 200 liters of water or Dissolve 2-3gm in one liter of water spray on both side of leaves. Repeat the sprays at 15 days intervals.', '528266640_mic-fer1.png', 'Y', 'active', 165, 150, 39, 30),
(151, 'Instacheal Fe 12%, EDTA Chelated', 'EDTA Chelated Ferrous 12%, EDTA Chelated Iron, Plant Nutrition, Micronutrient Ferrous, Best For All Crops', '642393247_mic-fer2.png', 'Y', 'active', 780, 755, 39, 30),
(152, 'InstaFert Micronutirents Fertilizer', 'M.S. Grade NO. 2 Amino Base Chelated Micronutirents', '371443886_mic-fer3.png', 'Y', 'active', 930, 899, 39, 30),
(153, 'Insta Borolamine  Micronutrients Fertilizer', 'L 10% (Boron ethanolamine) Micronutrients', '909438847_mic-fer4.png', 'Y', 'active', 430, 389, 39, 30),
(154, 'MICRO KOMBI-L (Liquid Multi Micronutrients)', 'MicroKombi L is an ideal liquid of micronutrients like Zinc, Boron, Molybdenum, Iron, Manganese and Copper in inorganic form. It increases the yield of crops by supplying micronutrients in balanced pr', '507933545_mic-fer5.png', 'Y', 'active', 260, 245, 39, 30),
(155, 'NUTRIMIX (Bio Encapsulate)Micronutrients', 'Nutrimix is a bioactive Bio trace elements derived through fermentation process. Bio trace elements are essential micro nutrients corrects ,Nutrimix contains Bioactive, iron ,zinc, Manganaese, Boron.', '631571171_mic-fer6.png', 'Y', 'active', 340, 315, 39, 30),
(156, 'Borontose - Boron Liquid Micro Nutrient Fertilizer', 'Maltose Borontose is suitable for Fruit crops, Vegetable crops, Flower crops, plantation crops, Spices and condiments crops, Medicinal crops, Aromatic crops and gardening plants.  Dosage: 0.5-1 ml/ltr', '134069506_mic-fer8.png', 'Y', 'active', 210, 190, 39, 30),
(157, 'ALP - CHELATED MULTI MICRO-NUTRIENT', 'WHEN TO BE USED: At the time of flowering. Repeat every 15 days till harvesting. CROPS USED FOR: All crops; All Fruits & Vegetables; All Plants, Trees & Spices; All Flowers & Grasses', '917188586_mic-fer9.png', 'Y', 'active', 1400, 1350, 39, 30),
(158, 'Super Te - A Chelated Multinutrient Fertilizer', 'Constituent in Chelated form: Zn -  5%, Mg - 2%, Mn -  0.5%, B - 0.25%, Protein Hydrolysate - 5% , S - 2%  COMPATIBILTY: Super Te is compatible with most insecticides, fungicides and foliar nutrients.', '378013473_mic-fer10.png', 'Y', 'active', 500, 479, 39, 30),
(159, 'AMOGA Foliar spray STRAIGHT MICRONUTRIENTS FERTILI', 'AMOGA is used in recovering or preventing the micronutrient deficiencies in field and horticultural crops. This is a free-flowing crystalline powder with 12% Zinc.', '393227804_mic-fer11.png', 'Y', 'active', 158, 149, 39, 30),
(160, 'Advanced Liquid Seaweed by Organic Fertilizer', 'Application: Nursery, kitchen garden, floriculture, golf course, agroforestry, sericulture, sugarcane, coffee, tea, pan, orchards, agriculture, horticulture, lawn.', '882306669_org-fer6.png', 'Y', 'active', 500, 475, 40, 30),
(161, 'Gloryfert Green Organic Fertilizers', 'Improve physical, chemical & biological properties of soil.-Increase productivity and fertility of the soil.-Control parasitic nematodes and fungi. -Increase porosity in soil', '654689438_org-fer7.png', 'Y', 'active', 400, 389, 40, 30),
(162, 'Gloryfert PROM Organic Fertilizers', 'Increase activities of beneficial micro-organisms in the soil -Improve availability of nutrients in the soil -Increase resistance power of plant against various disease -Maintain C:N ratio in the soil', '171921881_org-fer8.png', 'Y', 'active', 470, 455, 40, 30),
(163, 'Utkarsh Castor Cake Organic Fertilizers', 'Target crops: Banana, Papaya, Mango, Sapota, Pomegranate, Guava, Ber, Apple, Pear, Peach, Plum, Loquat, Almond, Cherry, Grape, Fig, Water melon, Musk melon, Jack fruit, Aonla, Bael, Custard apple', '700724221_org-fer9.png', 'Y', 'active', 240, 205, 40, 30),
(164, 'BOOST Propiconazole 25% EC Systemic Fungicide', 'It is rapidly absorbed by the Leaves or stems and translocated upward through the xylem. It is a potent ergosterol biosynthesis inhibitor.', '495186527_fun-pes1.png', 'Y', 'active', 1225, 1179, 46, 30),
(166, 'GOLDPOWER Captan 70%+Hexaconazole 5% WP Fungicide', 'Use only on the recommended crops. Do not exceed the recommended dosage. Do not use in those situation if there is possibility of harming bees and fish, livestock, game, wild birds and animals.', '508591612_fun-pes2.png', 'Y', 'active', 385, 369, 46, 30),
(167, 'Pratikar Bio Fungicides', 'Recommended crops: Vegetables, all flower crops and horticulture crops.  Dosage: 1gm each per litre of water. For agriculture purpose only.', '715561142_fun-pes3.png', 'Y', 'active', 600, 549, 46, 30),
(169, 'CONCOR Difenoconazole 25% EC Systemic Fungicide124', 'For Plants and Home Garden Control Powdery Mildew Leaf Spot Disease. Dosage : For Domestic Use take 1.5-2ml per 1L Water and Spray. Powerful Dieases control for All Plants in Home Garden Terrace', '295179670_fun-pes4.png', 'Y', 'active', 1249, 1199, 46, 30),
(170, 'Utkarsh BaciSub (Bacillus subtilus Based Biofungic', 'By drenching or drip irrigation: 2-2.5 liters/acre  Soil application : By mixing with 25-50 kg Organic manure/Neem cake/Castor Cake.  Best use within 20days after opening the inner cap of the bottle', '552511773_fun-pes5.png', 'Y', 'active', 660, 645, 46, 30),
(171, 'Dr.Bacto\'s 5G AMPELO Bio Fungicide Capsule', 'A Naturally Occurring Hyper Parasite Bio-Fungicide Used For The Control Of Powdery Mildew Disease. Crops: For all crops. Direction for use: 10 Bioinsecticides with 5 food kit capsules /Acre.', '374220581_fun-pes6.png', 'Y', 'active', 995, 970, 46, 30),
(172, 'CEAXOR Bioinoculants Microbial Fungicides', 'Outdoors, Crops, Orchards & Vineyards, Nursery, Greenhouse, Grow Room, Hydroponics, Aquaponics, Pond & Environment, Interiorscapes, Container Plants, Houseplants  Storage: Store in original container.', '576379790_fun-pes7.png', 'Y', 'active', 550, 525, 46, 30),
(174, 'zacro biztion', 'best for farming', '145401549_bio-pes5.png', 'Y', 'active', 260, 200, 47, 30),
(175, 'hecitics pesticide', 'Caterpillars and Larvae organically', '326942609_bulk-fer.png', 'Y', 'active', 300, 260, 47, 25),
(176, 'house carfing', 'hosing for farming product', '324861937_org-fer4.png', 'Y', 'active', 420, 400, 44, 20),
(177, 'ceriltiok house', 'Special for Cotton Crop', '686728013_org-fer.png', 'Y', 'active', 220, 200, 44, 15),
(178, 'biosrike', 'Booster Organic Fertilizer', '550719065_chem-fer.png', 'Y', 'active', 350, 300, 45, 25),
(179, 'faertish', 'Constituent in Chelated', '860252428_org-fer2.png', 'Y', 'active', 400, 350, 45, 30);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `registration_id` int(10) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `address` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`registration_id`, `first_name`, `last_name`, `email`, `gender`, `phone_no`, `password`, `image`, `status`, `address`) VALUES
(43, 'Gopal', 'Ahir', 'bhuvagopal31@gmail.com', 'Female', 7874841015, '25d55ad283aa400af464c76d713c07', 'amb93486_DSC0199.JPG', 'signout', '69, Nilkanth Society, Surat, Ahmedabad'),
(44, 'Devanshi', 'Thakkar', 'devanshi11013@gmail.com', 'Female', 8141975159, '25d55ad283aa400af464c76d713c07', 'amb70915bio-pes1.png', 'signout', 'surat mota varachha'),
(45, 'Devanshi', 'Thakkar', 'ankmak4@gmail.com', 'Female', 8734858711, '25d55ad283aa400af464c76d713c07', 'amb67211ff.jpg', 'signout', 'vdssyg12345678');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcategory_id` int(5) NOT NULL,
  `subcategory_name` varchar(30) NOT NULL,
  `subcategory_des` varchar(200) NOT NULL,
  `convert` char(1) NOT NULL,
  `status` varchar(10) NOT NULL,
  `category_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcategory_id`, `subcategory_name`, `subcategory_des`, `convert`, `status`, `category_id`) VALUES
(35, 'Flower Seeds', 'Seed of herbaceous plants grown for their blooms, ornamental foliage.', '', 'active', 15),
(36, 'Home/Kitchen Garden Seeds', 'The growing of fruits and vegetables at the backyard of house.', '', 'active', 15),
(38, 'Bio Fertilizer', 'Contain microorganisms, which when added to the soil increase its fertility and promotes plant growth.', '', 'active', 14),
(39, 'Micronutrient Fertilizer', 'Promote essential plant processes and growth, which translates into nutrient.', '', 'active', 14),
(40, 'Organic Fertilizer', 'Derived from organic sources, including organic compost, cattle manures and domestic sewage.', '', 'active', 14),
(41, 'Chemical Fertilizer', 'Applied to soils or directly onto plants to provide nutrients optimal for growth and development.', '', 'active', 14),
(44, 'House-hold Insecticides', 'Variety of forms including sprays, dusts, powders, baits, granules, etc..', '', 'active', 13),
(45, 'Insecticides Pesticide', 'That are formulated to kill, harm, repel or mitigate one or more species of insect.', '', 'active', 13),
(46, 'Fungicide Pesticide', 'That kill or prevent the growth of fungi and their spores.', '', 'active', 13),
(47, 'Herbicides Pesticide', 'Chemicals used to manipulate or control undesirable vegetation.', '', 'active', 13),
(48, 'Cotton Seeds', 'Used either for oil production, for planting, or as animal feed.', '', 'active', 15),
(49, 'Field-Crops Seeds', 'An agricultural crop  grown on large areas.', '', 'active', 15),
(55, 'Lawn Mowers', 'A device utilizing one or more revolving blades (or a reel) to cut a grass surface to an even height.', '', 'active', 18),
(57, 'Garden Tools', 'Any one of many tools made for gardening and landscaping, which overlap with the range of tools made for agriculture and horticulture.', '', 'active', 18),
(58, 'Sprayers', 'Sprayers are commonly used for projection of water, weed killers, crop performance materials, pest maintenance chemicals, manufacturing and production line ingredients.', '', 'active', 18),
(59, 'Weeder', 'Weeding tools are designed to ease the task of removing weeds from gardens and lawns', '', 'active', 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtocart`
--
ALTER TABLE `addtocart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`billing_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `log_in`
--
ALTER TABLE `log_in`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`or_item_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`registration_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcategory_id`),
  ADD KEY `fk` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtocart`
--
ALTER TABLE `addtocart`
  MODIFY `cart_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=292;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `billing_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `log_in`
--
ALTER TABLE `log_in`
  MODIFY `login_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `or_item_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `registration_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcategory_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
