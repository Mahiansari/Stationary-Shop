-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 08:38 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eproject`
--
CREATE DATABASE IF NOT EXISTS `eproject` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `eproject`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Ad_ID` int(11) NOT NULL,
  `Ad_Username` varchar(255) DEFAULT NULL,
  `Ad_Password` varchar(255) DEFAULT NULL,
  `Ad_gmail` varchar(255) DEFAULT NULL,
  `Ad_contact_number` varchar(20) DEFAULT NULL,
  `Ad_Address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Ad_ID`, `Ad_Username`, `Ad_Password`, `Ad_gmail`, `Ad_contact_number`, `Ad_Address`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '0312-1234567', 'karachi pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `Contact_us_id` int(11) NOT NULL,
  `First_Name` varchar(20) DEFAULT NULL,
  `Last_Name` varchar(20) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Mobile` varchar(15) DEFAULT NULL,
  `Message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`Contact_us_id`, `First_Name`, `Last_Name`, `Email`, `Mobile`, `Message`) VALUES
(1, 'Maheen', 'Ansari', 'maheenansari343@gmail.com', '0317-7698567', 'Fantabulous shopping cart\r\n'),
(2, 'Muhammad', 'Talha', 'talha@gmail.com', '0317-7697675', 'Amazing response on any query.'),
(3, 'Huzaifa', 'Ansari', 'huzaifa@gmail.com', '0367-7698787', 'Satisfied with their products.\r\n'),
(4, 'Maheen', 'Ansari', 'zuhaib@gmail.com', '0317-7698567', 'fsadfsadfsadf');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cust_ID` int(11) NOT NULL,
  `Cust_Username` varchar(50) DEFAULT NULL,
  `Cust_Password` varchar(50) DEFAULT NULL,
  `Cust_Email` varchar(255) DEFAULT NULL,
  `Cust_Contact` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cust_ID`, `Cust_Username`, `Cust_Password`, `Cust_Email`, `Cust_Contact`) VALUES
(1, 'mahi', '123', 'mahi@gmail.com', '4254325452'),
(2, 'Alishba', '123', 'alishba@gmail.com', '423425653'),
(3, 'Arsalan', '123', 'arsalan@gmail.com', '342453635'),
(4, 'Talha', '123', 'talha@gmail.com', '783246289');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Emp_ID` int(11) NOT NULL,
  `Emp_Name` varchar(255) DEFAULT NULL,
  `Emp_Username` varchar(255) DEFAULT NULL,
  `Emp_Password` varchar(255) DEFAULT NULL,
  `Emp_Email` varchar(255) DEFAULT NULL,
  `Emp_contact` varchar(20) DEFAULT NULL,
  `Emp_Address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Emp_ID`, `Emp_Name`, `Emp_Username`, `Emp_Password`, `Emp_Email`, `Emp_contact`, `Emp_Address`) VALUES
(1, 'Huzaifa', 'Huzaifa', '12345', 'huzaifa@gmail.com', '03015663234', '123 Avenue'),
(2, 'Alishba', 'Alishba', '12345', 'alisba@gmail.com', '03861203234', 'block b , Karachi'),
(3, 'Arsalan', 'Arsalan', '12345', 'arsalan@gmail.com', '03001223234', 'Block F , Islamabad'),
(4, 'Maheen', 'Maheen', '12345', 'maheen@gmail.com', '03434543234', 'Block J , Kashmir'),
(5, 'Talha', 'Talha', '12345', 'talha@gmail.com', '03564565544', 'Street 4 , Lahore');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `FAQID` int(11) NOT NULL,
  `Question` text DEFAULT NULL,
  `Answer` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`FAQID`, `Question`, `Answer`) VALUES
(1, 'Q: How do I create an account on your website?', 'A: Click on \"Sign Up\" or \"Create Account\" and fill in the required information.'),
(2, 'Q: What should I do if I forget my password?', 'A: Click on \"Forgot Password\" on the login page and follow the instructions to reset it.'),
(3, 'Q: How can I check my order status?', 'A: Log in to your account and go to the \"Order History\" section for updates.'),
(4, 'Q: What is the estimated delivery time for orders?', 'A: Delivery times vary based on location and shipping method chosen during checkout.'),
(5, 'Q: Do you offer free shipping?', 'A: Free shipping may be available for orders over a certain amount, check our shipping policy for details.'),
(6, 'Q: Can I add items to an existing order?', 'A: Unfortunately, we cannot add items to an order once it has been placed.'),
(7, 'Q: How can I contact customer support?', 'A: You can reach our customer support team via email, phone, or live chat during business hours.'),
(8, 'Q: Are there any additional fees apart from the product price?', 'A: Additional fees like taxes or shipping charges may apply, depending on your location and the items purchased.'),
(9, 'Q: Do you offer international warranty on products?', 'A: Warranty policies may vary by product; refer to the product description or warranty section for details.'),
(10, 'Q: Can I change or update my shipping address after placing an order?\r\n', 'A: Unfortunately, we cannot change shipping addresses after an order is confirmed. Please ensure accuracy before checkout.'),
(12, 'asdfdsaf', 'sadfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FeedbackID` int(11) NOT NULL,
  `Cust_ID` int(11) DEFAULT NULL,
  `ProductID` int(11) DEFAULT NULL,
  `Comment` text DEFAULT NULL,
  `Rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FeedbackID`, `Cust_ID`, `ProductID`, `Comment`, `Rating`) VALUES
(1, 1, 2, 'Satisfied With your Product..', NULL),
(2, 2, 40, 'Not Satisfied..', NULL),
(3, 3, 24, 'Such an amazing bag!!!', NULL),
(4, 4, 58, 'Cute Diaries Satisfied with products..', NULL),
(5, 2, 1, 'asdfdsafdsaf', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `Order_Id` int(11) NOT NULL,
  `Cust_Id` int(11) NOT NULL,
  `Full_Name` varchar(255) NOT NULL,
  `Phone_No` varchar(15) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Pay_Mode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`Order_Id`, `Cust_Id`, `Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES
(1, 1, 'maheen', '5453654646', '123 avenue', 'OP'),
(2, 4, 'Talha', '436356563', 'Block 6 karachi', 'COD'),
(3, 2, 'Alishba', '5745635', '6454 avenue', 'OP'),
(4, 3, 'Arsalan', '34235464', 'Block 8 Islamabd', 'COD'),
(5, 2, 'maheen', '0312123433', '123 avenue', 'OP');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(11) NOT NULL,
  `ProductCode` varchar(2) DEFAULT NULL,
  `ProductNumber` varchar(5) DEFAULT NULL,
  `ProductName` varchar(100) DEFAULT NULL,
  `ProductPrice` varchar(100) DEFAULT NULL,
  `ProductImageName` varchar(100) DEFAULT NULL,
  `ProductImageType` varchar(100) DEFAULT NULL,
  `ProductQuantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductCode`, `ProductNumber`, `ProductName`, `ProductPrice`, `ProductImageName`, `ProductImageType`, `ProductQuantity`) VALUES
(1, '34', '54354', 'Pen', '900', 'ink-pen-500x500.webp', 'image/webp', 54),
(2, '56', '86768', 'Pens', '600', 'Cross_Pens_Top_10_Pen_Brands.webp', 'image/webp', 66),
(3, '30', '22324', 'Led Light Pen', '500', 'LED-LIGHT-PEN.jpg', 'image/jpeg', 34),
(4, '54', '64564', 'Ink Pens', '500', 'Parker51.jpeg', 'image/jpeg', 54),
(5, '34', '86785', 'King Pen', '3400', 'img-20230705-150530-500x500.webp', 'image/webp', 46),
(6, '26', '46540', 'Fountain Pens', '2000', 'IMG_3402.webp', 'image/webp', 45),
(7, '35', '53654', 'Golden Theme Pen', '900', 'fountain-pens-865998_640.jpg', 'image/jpeg', 54),
(9, '45', '36076', 'Calligraphy PEns', '4000', '0_xR6z96w_OxTWGXDo.jpg', 'image/jpeg', 45),
(10, '43', '90770', 'Rainbow Pens', '2000', '4cf4db367b77fc25539769b0bdc9e150.jpg', 'image/jpeg', 54),
(11, '54', '97809', 'Fancy Ink Pens', '3000', 'Fancy-Ink-Pen.webp', 'image/webp', 34),
(12, '40', '54567', 'Calligraphy Pens', '6000', 's-l1200.jpg', 'image/jpeg', 34),
(13, '43', '78678', 'Hethron Fountain Ink Pen', '6000', '81geyd3dVsL._AC_SX425.jpg', 'image/jpeg', 87),
(19, '43', '34546', 'Book By Bejamin Graham', '500', 'the-intelligent-investor-by-benjamin-graham.jpg', 'image/jpeg', 97),
(20, '34', '07442', 'Scientific Calculator', '4500', '61qLS9gYrqL._AC_UF1000,1000_QL80_.jpg', 'image/jpeg', 23),
(21, '45', '45434', 'Book By Megan Campisi', '900', 'download.jfif', 'image/jpeg', 44),
(22, '23', '45364', 'Mini Calculator', '2000', 'ENS041-550x550.jpg', 'image/jpeg', 45),
(23, '23', '54443', 'Mini Bag', '2000', '1.jpg', 'image/jpeg', 23),
(24, '23', '35454', 'College Bag', '3400', 'rBVaqGC0k0CADTKFAAxOsY9z1BY618.jpg', 'image/jpeg', 23),
(25, '45', '64565', 'School Bag with Small Purses', '3000', '61XGSM4gl5L._AC_UY1100_.jpg', 'image/jpeg', 23),
(27, '45', '34334', 'Cow Theme Bag', '5600', '168656920891d4eb45a3a59c61b18170bdc5e6aedc_thumbnail_720x.webp', 'image/webp', 34),
(29, '23', '40343', 'Bow School Bag', '3200', 'Sd49a97d8d1f64f5ca1529a67514d9edbu.jpg_640x640Q90.jpg_.webp', 'image/webp', 23),
(30, '20', '48402', 'Unicorn Glitter Bag', '4000', '778de429-d0dd-41b6-9e99-be6ae17b993b.0f79cdc70823536932b42709e4c65187.webp', 'image/webp', 34),
(31, '94', '45344', 'Uni Bag', '4900', '1684769804daaf4369225d7409197b866cd4fdb24d_square_thumbnail_405x552.jpg', 'image/jpeg', 34),
(32, '23', '45343', 'College Bag', '3000', 'rBVaq2C0k0KAEHatAAomQZDrGVs170.jpg', 'image/jpeg', 34),
(33, '34', '65645', 'Mini Bag', '2300', '441e0aa3cb49b688a9fd6942a869b64f_tn.jpeg', 'image/jpeg', 65),
(34, '12', '04348', 'Unicorn Gift Bag', '2000', 'GUEST_2bb058da-b734-4e56-aaef-5ce401f461bb.jpeg', 'image/jpeg', 23),
(35, '34', '63543', 'Bear Gift Bag ', '2000', 'Small-Bag_1024x.webp', 'image/webp', 54),
(36, '65', '02833', 'Transparent Gift Bags', '2300', 'S1af9ec7234bb4000bcde1a59d364b3b4m.jpg_640x640Q90.jpg_.webp', 'image/webp', 21),
(37, '32', '43434', 'Pocket Calculators', '700', '5_O1CN012nm3y11Ld3z5FkJ1K__2214259991321-0-cib_medium (1).avif', 'image/avif', 21),
(38, '86', '82382', 'Vegetable Theme Calculators', '1300', '612qP8dwejL._AC_UF350,350_QL80_.jpg', 'image/jpeg', 23),
(39, '64', '87566', 'Kitty Mini Calculators', '2300', '760741831_max.jpg', 'image/jpeg', 45),
(40, '23', '09765', 'Colorful Calculators', '2900', '61uTPJakILL._AC_UF894,1000_QL80_.jpg', 'image/jpeg', 33),
(41, '32', '53454', 'Scientific Calculator', '4500', '94425992-scientific-calculator-in-the-action-hands-during-mathematical-lesson-school-concept.jpg', 'image/jpeg', 43),
(43, '23', '03849', 'Mini White Calculator', '1200', '924379787_max.jpg', 'image/jpeg', 23),
(44, '12', '01823', 'Keychain Calculator', '800', '5126ba1d3ce6cb58cd84994d426aeae5.jpg', 'image/jpeg', 12),
(46, '65', '34453', 'Scientific Calculator', '3200', '417JG+vGMKS._SR600,315_PIWhiteStrip,BottomLeft,0,35_SCLZZZZZZZ_FMpng_BG255,255,255.png', 'image/png', 34),
(48, '45', '76576', 'Pocket Calculators', '2300', 'colorful-dual-power-pocket-calculator-1510202894-3440580.jpeg', 'image/jpeg', 45),
(49, '43', '56453', 'Scientific Calculator', '6000', '360_F_645855881_7gRck6ZYJ52b1KIoQFG20NsfctDh9jym.jpg', 'image/jpeg', 43),
(52, '43', '34324', 'Note Books', '700', 'high-angle-education-day-concept_23-2148779752.avif', 'image/avif', 34),
(53, '34', '34234', 'Blue Notebook', '2000', '71IchYhVhZL._AC_UF1000,1000_QL80_.jpg', 'image/jpeg', 34),
(55, '23', '43422', 'Colorful Note Books', '2300', 'new-product-250x250.webp', 'image/webp', 34),
(56, '64', '54534', 'Book By Ana Reyes', '400', 'Criminal-Element-Lead-Image-Template-800-x-415-px-26.png', 'image/png', 32),
(57, '75', '56453', 'Book By Micheal Kortya', '900', 'an-honest-man.jpg', 'image/jpeg', 53),
(58, '34', '54334', 'KAWAII Note Books', '1200', '867458849.g_520-w-st_g.jpg', 'image/jpeg', 48),
(59, '32', '45345', 'Mini Note Books', '500', 'e6fcb1f1b09013c6a2872cf8abbd7a62.jpg_720x720q80.jpg', 'image/jpeg', 23),
(60, '23', '23423', 'Pocket Note Book', '1000', '168861892456424c206d50843231ce0b4bcc6e29bb_thumbnail_720x.jpg', 'image/jpeg', 33),
(61, '12', '32322', 'Pulse Note Book', '1200', '16891466782741414ade43de50796f7042c17d6110_thumbnail_720x.webp', 'image/webp', 23),
(62, '23', '03493', 'Martha Note Book', '2200', 'original_personalised-any-text-quote-softback-notebook.jpg', 'image/jpeg', 23),
(64, '32', '42321', 'Paperchase Carryall', '2300', 'images (1).jpeg', 'image/jpeg', 23),
(66, '87', '09928', 'Paper Chase Writers', '2100', '7f02a9e9-ffb0-4fcb-85ab-8a9efb1ab9ea_1427270911.jpeg', 'image/jpeg', 23),
(68, '21', '03493', 'Paper Chase Highlighters', '12000', '11730343-1-multi.webp', 'image/webp', 90),
(69, '65', '64564', 'Paperchase Fancy Diary', '3000', '512cRoagUaL.jpg', 'image/jpeg', 43),
(70, '34', '54043', 'Paper Chase Ink Writers', '2100', '41ODlODVizS._AC_CR0,0,0,0_SX352_SY330_.jpg', 'image/jpeg', 23),
(71, '23', '06459', 'Paper Chase Magnetic Diary', '2300', '10785191.webp', 'image/webp', 34),
(72, '75', '34343', 'Paper Chase Highlighters', '2400', '02_39903399_3.webp', 'image/webp', 86),
(73, '87', '53453', 'Paper Chase Diary', '3200', '51ZoXgPbCBL.jpg', 'image/jpeg', 34),
(74, '83', '56334', 'Paperchase Ball Points', '600', '313nzFdXeYS.jpg', 'image/jpeg', 34),
(75, '60', '02856', 'Paper Chase Magnetic Diary', '3000', 'tesco-paperchase-new-653f88faaed99.jpg', 'image/jpeg', 34),
(76, '86', '79034', 'Paperchase Accessories', '2000', '160026327-160026327-Batch1059_01-2100.webp', 'image/webp', 23),
(77, '23', '45345', 'Paperchase Accessories', '2000', '162835293-162835293-LS18061020_02-2100.webp', 'image/webp', 34),
(78, '32', '65456', 'Staedtler Sketch Artist', '3200', 's-l1200.jpg', 'image/jpeg', 23),
(80, '99', '49450', 'Staedtler Markers', '1000', '4007817432228_hero (1).jpg', 'image/jpeg', 45),
(81, '43', '78707', 'Staedtler Writers', '1200', 'staedtler-noris-pencil-with-rubber-tip-10pcs.jpeg', 'image/jpeg', 43),
(82, '76', '87670', 'Staedtler Markers', '2300', '0890260001.webp', 'image/webp', 54),
(83, '86', '75766', 'Staedtler Highlighters', '1600', 'sttb120.jpg', 'image/jpeg', 77),
(84, '32', '93439', 'Staedtler Colors', '1900', '161689453-161689453-LS18030719_02-2100.webp', 'image/webp', 94),
(85, '39', '34344', 'Staedtler Geometry', '3200', '219461692_3085084135108696_1107696292856896887_n.webp', 'image/webp', 90),
(86, '43', '03420', 'Staedtler Highlighters', '2300', 'staedtlertextsurferhighlighterpastelcolourpen8color_1024x1024.webp', 'image/webp', 64),
(87, '65', '54023', 'Staedtler Caryons', '3800', '340_C144__25293.jpg', 'image/jpeg', 45),
(90, '96', '45674', 'Staedtler Ball Points', '1200', 'staedtler-techinical-pen-mars-matic-018-mm-700-mo18.jpg', 'image/jpeg', 65),
(91, '34', '04534', 'Staedtler Technical Writer', '3200', 'German-Staedtler-0-5mm-Mechanical-Pencil-92535-05NW-Pink-Low-Center-of-Gravity-Is-Not-Easy.webp', 'image/webp', 40),
(92, '30', '73553', 'Staedtler Writer', '2000', '5d26f2df0ac6cc6b4ad283d47ceb7b9b.jpg_720x720q80.jpg', 'image/jpeg', 54),
(93, '35', '45053', 'Rifle Diaries', '4500', '39033048682_5869c42e43_b.jpg', 'image/jpeg', 56),
(94, '64', '68474', 'Rifle Carrier', '1200', '49934961892_3c7e2db5a4_b.jpg', 'image/jpeg', 75),
(95, '23', '67542', 'Rifle Inkies', '2000', '1688487104575-7f9e5a2d89b2483a990be0007b125809-goods.webp', 'image/webp', 54),
(96, '43', '45632', 'Rifle Writers', '1400', 'h4y3lf3sxwu71.jpg', 'image/jpeg', 98),
(97, '86', '46365', 'Rifle Diaries ', '2300', 'IMG_5491.jpeg', 'image/jpeg', 53),
(98, '39', '87543', 'Rifle Carryall', '3000', 'https___storage.googleapis.com_gen-atmedia_2_2021_09_091321_FallNewArrivals_Social-1-1024x1024.jpg', 'image/jpeg', 79),
(99, '75', '47540', 'Rifle Writers', '3000', 'image-asset.jpeg', 'image/jpeg', 65),
(100, '54', '57573', 'Rifle Gift Carryall', '1200', 'WhatsAppImage2021-05-11at13.05.35_500x.webp', 'image/webp', 86),
(101, '72', '67642', 'Rifle Diary', '2000', 'mon-pote-web-01.09.21-71_2048x.jpg', 'image/jpeg', 87),
(102, '32', '46345', 'Rifle Ball Points', '1900', 'page_1_thumb_large.webp', 'image/webp', 43),
(104, '43', '64367', 'Rifle Inkies', '1200', '4550344502549_01_1260_700x.webp', 'image/webp', 65),
(105, '34', '76456', 'Rifle Diary', '2000', '8533319-1-multi.webp', 'image/webp', 65),
(106, '43', '64565', 'Muji Ball Points', '1700', '41e303d33258f7ee39346836871a0c32.jpg', 'image/jpeg', 56),
(107, '45', '76785', 'Muji Gel Biro', '2300', '18775801793_b169a4d608_b.jpg', 'image/jpeg', 98),
(109, '43', '46435', 'Muji Inkies', '4300', '942dad4d3820bb88c4e72e1b0f8df475.jpg', 'image/jpeg', 45),
(110, '87', '78789', 'Muji Ball Points', '3400', 'F80HXaAW8AAlGhR.jpeg', 'image/jpeg', 87),
(111, '34', '45365', 'Muji Diaries', '800', 'images.jpeg', 'image/jpeg', 54),
(112, '34', '50239', 'Muji Gel Biro', '2900', 'Snowhite-Quick-Drying-Ink-Assorted-Color-Fine-Tip-0-5mm-Gel-Pen-Muji-Style-with-Comfy-Grip.jpg', 'image/jpeg', 90),
(113, '42', '06532', 'Muji Black Points', '2100', 'MUJI-experience.jpg', 'image/jpeg', 39),
(114, '98', '88860', 'Muji Carriers', '4200', 'XL_p0075430348.webp', 'image/webp', 98),
(115, '42', '89002', 'Muji Carriers', '3100', 'c7ae7c17f6100a77f0f885eed975ad25_tn.jpeg', 'image/jpeg', 32),
(116, '33', '33292', 'Muji Carryall', '5000', 'bec9880fa3716c253bea540853bb03e5.jpg', 'image/jpeg', 93),
(117, '23', '03430', 'Muji Ball Points', '4200', '4819a8d1f08e875620d3e6407d92fb9b.jpg_720x720q80.jpg', 'image/jpeg', 34),
(118, '31', '02320', 'Muji Organizer', '1000', '4550512017615_01_400.jpg', 'image/jpeg', 20);

-- --------------------------------------------------------

--
-- Table structure for table `return_product`
--

CREATE TABLE `return_product` (
  `return_product_id` int(11) NOT NULL,
  `Cust_ID` int(11) DEFAULT NULL,
  `Item_Name` varchar(255) NOT NULL,
  `Pro_reason` varchar(255) NOT NULL,
  `Status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `return_product`
--

INSERT INTO `return_product` (`return_product_id`, `Cust_ID`, `Item_Name`, `Pro_reason`, `Status`) VALUES
(1, 4, 'Scientific Calculator', 'Not satisfied with the product!', 'pending'),
(2, 1, 'Rainbow Pens', 'The product quality is not good.\r\n', 'Approved'),
(3, 2, 'Led Light Pen', 'sdfsadfsdf', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `user_orders` int(11) NOT NULL,
  `Order_Id` int(11) DEFAULT NULL,
  `Cust_Id` int(11) DEFAULT NULL,
  `Product_Id` int(11) DEFAULT NULL,
  `Item_Name` varchar(255) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`user_orders`, `Order_Id`, `Cust_Id`, `Product_Id`, `Item_Name`, `order_date`, `Price`, `Quantity`) VALUES
(1, 1, 1, NULL, 'Pens', 'Fri Dec 15 2023', 600.00, 1),
(2, 1, 1, NULL, 'Rainbow Pens', 'Fri Dec 15 2023', 2000.00, 1),
(3, 1, 1, NULL, 'Pens', 'Fri Dec 15 2023', 600.00, 1),
(4, 1, 1, NULL, 'College Bag', 'Fri Dec 15 2023', 3400.00, 1),
(5, 1, 1, NULL, 'Bear Gift Bag ', 'Fri Dec 15 2023', 2000.00, 1),
(6, 1, 1, NULL, 'Pulse Note Book', 'Fri Dec 15 2023', 1200.00, 1),
(7, 1, 1, NULL, 'Kitty Mini Calculators', 'Fri Dec 15 2023', 2300.00, 1),
(8, 1, 1, NULL, 'KAWAII Note Books', 'Fri Dec 15 2023', 1200.00, 1),
(9, 1, 1, NULL, 'Paper Chase Highlighters', 'Fri Dec 15 2023', 2400.00, 1),
(10, 1, 1, NULL, 'Rifle Diaries ', 'Fri Dec 15 2023', 2300.00, 1),
(11, 2, 4, NULL, 'Scientific Calculator', 'Fri Dec 15 2023', 4500.00, 1),
(12, 3, 2, NULL, 'College Bag', 'Fri Dec 15 2023', 3400.00, 1),
(13, 4, 3, NULL, 'Led Light Pen', 'Fri Dec 15 2023', 500.00, 1),
(14, 5, 2, NULL, 'Led Light Pen', 'Sat Dec 16 2023', 500.00, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Ad_ID`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`Contact_us_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cust_ID`),
  ADD UNIQUE KEY `Cust_Username` (`Cust_Username`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Emp_ID`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`FAQID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FeedbackID`),
  ADD KEY `Cust_ID` (`Cust_ID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`Order_Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `return_product`
--
ALTER TABLE `return_product`
  ADD PRIMARY KEY (`return_product_id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`user_orders`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Ad_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `Contact_us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Cust_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Emp_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `FAQID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FeedbackID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `Order_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `return_product`
--
ALTER TABLE `return_product`
  MODIFY `return_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `user_orders` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`Cust_ID`) REFERENCES `customer` (`Cust_ID`),
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`);
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2019-10-21 13:37:09', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `talha_database`
--
CREATE DATABASE IF NOT EXISTS `talha_database` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `talha_database`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'ALBUM'),
(2, 'ARTIST'),
(3, 'YEAR'),
(4, 'GENRE'),
(5, 'LANGUAGE ');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `music_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `artist` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `filepath` varchar(255) DEFAULT NULL,
  `trailer` varchar(255) DEFAULT NULL,
  `ctg_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rating_music`
--

CREATE TABLE `rating_music` (
  `ratingid` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `music_id` int(11) DEFAULT NULL,
  `rating_text` text DEFAULT NULL,
  `rating_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rating_video`
--

CREATE TABLE `rating_video` (
  `ratingid` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `video_id` int(11) DEFAULT NULL,
  `rating_text` text DEFAULT NULL,
  `rating_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review_music`
--

CREATE TABLE `review_music` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `music_id` int(11) DEFAULT NULL,
  `review_text` text DEFAULT NULL,
  `review_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review_video`
--

CREATE TABLE `review_video` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `video_id` int(11) DEFAULT NULL,
  `review_text` text DEFAULT NULL,
  `review_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `password`) VALUES
(1, 'maheen', 'maheenansari343@gmail.com', '$2y$10$UiH7G4yuW454jBXEOFyUuONLoLwtc8ymop1AAReoela/5TZkfpb7K');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `artist` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `filepath` varchar(255) DEFAULT NULL,
  `trailer` varchar(255) DEFAULT NULL,
  `ctg_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `name`, `artist`, `year`, `genre`, `description`, `filepath`, `trailer`, `ctg_id`) VALUES
(1, 'excuses', 'ap dhillon', 2021, 'hgjj', 'gdfhgj', '41e303d33258f7ee39346836871a0c32.jpg', 'https://youtu.be/EIN3TFCjVko', 1),
(2, 'excuses', 'arijit', 2020, '344325', 'tertery', '41E292yxjPS._AC_UF1000,1000_QL80_.jpg', 'https://youtu.be/Ms5uX-JslAA', 1),
(3, 'excuses', 'atif aslam', 2012, 'hgjj', 'gdfhjfjfh', '61qLS9gYrqL._AC_UF1000,1000_QL80_.jpg', 'https://youtu.be/EIN3TFCjVko', 1),
(4, 'excuses', 'talha anjum', 2014, 'hgjj', 'ewrsdfx', '51s80RP21yL.jpg', 'https://youtu.be/Ms5uX-JslAA', 1),
(5, 'excuses', 'talha anjum', 2012, '344325', 'wsetsgf', '51OiegvjA3L._AC_UF894,1000_QL80_.jpg', 'https://youtu.be/Ms5uX-JslAA', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`music_id`),
  ADD KEY `ctg_id` (`ctg_id`);

--
-- Indexes for table `rating_music`
--
ALTER TABLE `rating_music`
  ADD PRIMARY KEY (`ratingid`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `music_id` (`music_id`);

--
-- Indexes for table `rating_video`
--
ALTER TABLE `rating_video`
  ADD PRIMARY KEY (`ratingid`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `video_id` (`video_id`);

--
-- Indexes for table `review_music`
--
ALTER TABLE `review_music`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `music_id` (`music_id`);

--
-- Indexes for table `review_video`
--
ALTER TABLE `review_video`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `video_id` (`video_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`),
  ADD KEY `ctg_id` (`ctg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `music_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `music`
--
ALTER TABLE `music`
  ADD CONSTRAINT `music_ibfk_1` FOREIGN KEY (`ctg_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `rating_music`
--
ALTER TABLE `rating_music`
  ADD CONSTRAINT `rating_music_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `rating_music_ibfk_2` FOREIGN KEY (`music_id`) REFERENCES `music` (`music_id`);

--
-- Constraints for table `rating_video`
--
ALTER TABLE `rating_video`
  ADD CONSTRAINT `rating_video_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `rating_video_ibfk_2` FOREIGN KEY (`video_id`) REFERENCES `video` (`video_id`);

--
-- Constraints for table `review_music`
--
ALTER TABLE `review_music`
  ADD CONSTRAINT `review_music_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `review_music_ibfk_2` FOREIGN KEY (`music_id`) REFERENCES `music` (`music_id`);

--
-- Constraints for table `review_video`
--
ALTER TABLE `review_video`
  ADD CONSTRAINT `review_video_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `review_video_ibfk_2` FOREIGN KEY (`video_id`) REFERENCES `video` (`video_id`);

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`ctg_id`) REFERENCES `category` (`category_id`);
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
