-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 02, 2021 at 08:41 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--
CREATE DATABASE IF NOT EXISTS `bookstore` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bookstore`;

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `secondName` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `firstName`, `secondName`) VALUES
(3, 'first1', 'last1'),
(4, 'first2', 'last2');

-- --------------------------------------------------------

--
-- Table structure for table `bookauthors`
--

CREATE TABLE `bookauthors` (
  `bookId` varchar(13) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `authorId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookauthors`
--

INSERT INTO `bookauthors` (`bookId`, `authorId`) VALUES
('1', 3),
('1', 4);

-- --------------------------------------------------------

--
-- Table structure for table `bookdiscounts`
--

CREATE TABLE `bookdiscounts` (
  `bookId` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `discountId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookgenre`
--

CREATE TABLE `bookgenre` (
  `bookId` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `genreId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `bookpreview`
-- (See below for the actual view)
--
CREATE TABLE `bookpreview` (
`authorName` varchar(201)
,`authorId` int(11)
,`bookId` varchar(13)
,`isbn` varchar(13)
,`title` varchar(200)
,`description` varchar(500)
,`price` float
,`categoryId` int(11)
,`previewLink` varchar(500)
,`edition` int(2)
,`publicationDate` date
,`publisherId` int(11)
,`displayImage` varchar(500)
,`type` varchar(100)
,`name` varchar(200)
);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `isbn` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` float DEFAULT NULL,
  `categoryId` int(11) NOT NULL,
  `previewLink` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `publicationDate` date DEFAULT NULL,
  `edition` int(2) DEFAULT NULL,
  `publisherId` int(11) NOT NULL,
  `displayImage` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`isbn`, `title`, `description`, `price`, `categoryId`, `previewLink`, `publicationDate`, `edition`, `publisherId`, `displayImage`) VALUES
('1', 'testing book title 1', 'testing book description 1', 1, 1, 'www.example.com', '2021-05-28', 1, 1, NULL),
('1234567891012', 'testing book title 1', 'testing book description 1', 1, 1, 'www.example.com', '2021-05-28', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `customerId` int(11) NOT NULL,
  `bookId` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`customerId`, `bookId`, `quantity`) VALUES
(1, '1234567891012', 3);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'new cat name'),
(4, 'Test category'),
(6, 'New Cat for Testing 6'),
(7, 'test new cat');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customerId` int(11) DEFAULT NULL,
  `message` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customerdiscounts`
--

CREATE TABLE `customerdiscounts` (
  `customerId` int(11) NOT NULL,
  `discountId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstName` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postalCode` int(6) DEFAULT NULL,
  `street` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `addessLine1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `addressLine2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `passwordencrypted` varchar(42) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `emailVerified` tinyint(1) NOT NULL DEFAULT 0,
  `phoneVerified` tinyint(1) NOT NULL DEFAULT 0,
  `registrationDate` datetime NOT NULL DEFAULT current_timestamp(),
  `lastOnline` datetime NOT NULL DEFAULT current_timestamp(),
  `referralCode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `referredBy` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `dataStoragePermission` tinyint(1) NOT NULL DEFAULT 0,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `email`, `firstName`, `lastName`, `postalCode`, `street`, `addessLine1`, `addressLine2`, `city`, `country`, `phone`, `username`, `passwordencrypted`, `isAdmin`, `emailVerified`, `phoneVerified`, `registrationDate`, `lastOnline`, `referralCode`, `referredBy`, `dataStoragePermission`, `dob`) VALUES
(1, 'dsingh@ihu.edu.gr', 'Deeksha', 'Singh', 54622, 'al svolou 2', NULL, NULL, 'thessaloniki', 'GRC', NULL, 'dsingh', '12345', 1, 1, 1, '2021-05-28 18:17:17', '2021-05-28 18:17:17', '', '', 0, '2021-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` int(11) NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` float DEFAULT NULL,
  `maxDiscount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guestcart`
--

CREATE TABLE `guestcart` (
  `sessionId` int(11) NOT NULL,
  `bookId` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `quantity` int(4) NOT NULL DEFAULT 1,
  `bookId` varchar(13) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `orderDate` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extraDetails` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `promoCode` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paymentMethod` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `totalPrice` float DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `finalPrice` float DEFAULT NULL,
  `currency` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `id` int(11) NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`id`, `type`) VALUES
(1, 'testing publisher 1'),
(2, 'new type');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `rating` float NOT NULL,
  `bookId` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `customerId` int(11) NOT NULL,
  `dateUpdated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `rating`, `bookId`, `customerId`, `dateUpdated`) VALUES
(1, 3.5, '1', 1, '2021-05-30 13:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `ratingId` int(11) NOT NULL,
  `review` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateUpdated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `customerId` int(11) NOT NULL,
  `bookId` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure for view `bookpreview`
--
DROP TABLE IF EXISTS `bookpreview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `bookpreview`  AS SELECT `t2`.`authorName` AS `authorName`, `t2`.`authorId` AS `authorId`, `t2`.`bookId` AS `bookId`, `t3`.`isbn` AS `isbn`, `t3`.`title` AS `title`, `t3`.`description` AS `description`, `t3`.`price` AS `price`, `t3`.`categoryId` AS `categoryId`, `t3`.`previewLink` AS `previewLink`, `t3`.`edition` AS `edition`, `t3`.`publicationDate` AS `publicationDate`, `t3`.`publisherId` AS `publisherId`, `t3`.`displayImage` AS `displayImage`, `t3`.`type` AS `type`, `t3`.`name` AS `name` FROM ((select concat(concat(`author`.`secondName`,','),`author`.`firstName`) AS `authorName`,`bookauthors`.`authorId` AS `authorId`,`bookauthors`.`bookId` AS `bookId` from (`author` left join `bookauthors` on(`author`.`id` = `bookauthors`.`authorId`))) `t2` left join (select `t1`.`isbn` AS `isbn`,`t1`.`title` AS `title`,`t1`.`description` AS `description`,`t1`.`price` AS `price`,`t1`.`categoryId` AS `categoryId`,`t1`.`previewLink` AS `previewLink`,`t1`.`edition` AS `edition`,`t1`.`publicationDate` AS `publicationDate`,`t1`.`publisherId` AS `publisherId`,`t1`.`displayImage` AS `displayImage`,`t1`.`type` AS `type`,`category`.`name` AS `name` from ((select `books`.`isbn` AS `isbn`,`books`.`title` AS `title`,`books`.`description` AS `description`,`books`.`price` AS `price`,`books`.`categoryId` AS `categoryId`,`books`.`previewLink` AS `previewLink`,`books`.`edition` AS `edition`,`books`.`publicationDate` AS `publicationDate`,`books`.`publisherId` AS `publisherId`,`books`.`displayImage` AS `displayImage`,`publisher`.`type` AS `type` from (`books` left join `publisher` on(`books`.`publisherId` = `publisher`.`id`))) `t1` left join `category` on(`t1`.`categoryId` = `category`.`id`))) `t3` on(`t2`.`bookId` = `t3`.`isbn`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookauthors`
--
ALTER TABLE `bookauthors`
  ADD KEY `authorId` (`bookId`,`authorId`);

--
-- Indexes for table `bookdiscounts`
--
ALTER TABLE `bookdiscounts`
  ADD KEY `bookId` (`bookId`),
  ADD KEY `discountId` (`discountId`);

--
-- Indexes for table `bookgenre`
--
ALTER TABLE `bookgenre`
  ADD KEY `bookId` (`bookId`),
  ADD KEY `genreId` (`genreId`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`isbn`),
  ADD KEY `categoryId` (`categoryId`),
  ADD KEY `publisherId` (`publisherId`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`customerId`,`bookId`),
  ADD KEY `bookId` (`bookId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customerId` (`customerId`);

--
-- Indexes for table `customerdiscounts`
--
ALTER TABLE `customerdiscounts`
  ADD KEY `discountId` (`discountId`),
  ADD KEY `customerId` (`customerId`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guestcart`
--
ALTER TABLE `guestcart`
  ADD PRIMARY KEY (`sessionId`,`bookId`),
  ADD KEY `bookId` (`bookId`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookId` (`bookId`),
  ADD KEY `orderId` (`orderId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customerId` (`customerId`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customerId` (`customerId`),
  ADD KEY `bookId` (`bookId`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratingId` (`ratingId`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`customerId`,`bookId`),
  ADD KEY `bookId` (`bookId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookdiscounts`
--
ALTER TABLE `bookdiscounts`
  ADD CONSTRAINT `bookdiscounts_ibfk_1` FOREIGN KEY (`bookId`) REFERENCES `books` (`isbn`),
  ADD CONSTRAINT `bookdiscounts_ibfk_2` FOREIGN KEY (`discountId`) REFERENCES `discounts` (`id`);

--
-- Constraints for table `bookgenre`
--
ALTER TABLE `bookgenre`
  ADD CONSTRAINT `bookgenre_ibfk_1` FOREIGN KEY (`bookId`) REFERENCES `books` (`isbn`),
  ADD CONSTRAINT `bookgenre_ibfk_2` FOREIGN KEY (`genreId`) REFERENCES `genre` (`id`);

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `books_ibfk_3` FOREIGN KEY (`publisherId`) REFERENCES `publisher` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`bookId`) REFERENCES `books` (`isbn`);

--
-- Constraints for table `contactus`
--
ALTER TABLE `contactus`
  ADD CONSTRAINT `contactus_ibfk_1` FOREIGN KEY (`customerId`) REFERENCES `customers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
