-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 17, 2022 at 09:36 AM
-- Server version: 10.3.35-MariaDB-cll-lve
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sunsguem_bakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(6) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `updatedate` date DEFAULT NULL,
  `isactive` tinyint(4) NOT NULL DEFAULT 1,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `Phone`, `img`, `facebook`, `instagram`, `updatedate`, `isactive`, `address`) VALUES
(1, 'Admin', 'kishansavaliya9083@gmail.com', 'admin', 8758969093, '../assest/img/cat_img/IMG_20210303_225802_510.jpg', 'https://www.facebook.com/kishan.savaliya.1690/', 'https://www.instagram.com/llmr_smilerll/', '2022-07-27', 1, 'Bhatar Road, Opp. Bank of Baroda, Behind Arjun');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `create_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `phone`, `create_date`) VALUES
(1, 'kishan savaliya', 'kishansavaliya9083@gmail.com', 'just', 'Do you have anything in your mind to let us know', '8758969093', '2022-07-15'),
(3, 'kishan savaliya', 'kishansavaliya9083@gmail.com', 'just befor', 'jus befor your location right now', '0875896909', '2022-07-16'),
(5, '', '', '', 'nice producat', '', '2022-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `createdate` date NOT NULL DEFAULT current_timestamp(),
  `feed_isactive` tinyint(4) NOT NULL DEFAULT 1,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user_id`, `feedback`, `createdate`, `feed_isactive`, `p_id`) VALUES
(6, 3, 'this is producat so nice', '2022-07-26', 1, 9),
(7, 1, 'hello nice cake ', '2022-07-26', 1, 8),
(8, 3, 'nice cake bro', '2022-07-26', 1, 8),
(9, 3, 'also check producat', '2022-07-26', 1, 10),
(10, 2, 'this is nice producat', '2022-07-27', 1, 10),
(11, 2, 'one day left rady site', '2022-07-27', 1, 8),
(12, 5, 'cake is so testey amezing.', '2022-07-27', 1, 8),
(14, 16, 'nice cake ', '2022-07-29', 1, 9),
(16, 1, 'test is good ', '2022-08-02', 1, 11),
(17, 18, '', '2022-08-03', 1, 11),
(18, 18, 'i love this product \r\n', '2022-08-03', 2, 11),
(19, 18, 'good', '2022-08-03', 2, 17);

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `offer_desc` varchar(255) NOT NULL,
  `offer_prec` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `create_date` date NOT NULL DEFAULT current_timestamp(),
  `update_date` int(11) DEFAULT NULL,
  `offer_isactive` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `producattype`
--

CREATE TABLE `producattype` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_long_desc` varchar(255) NOT NULL,
  `p_img` varchar(255) NOT NULL,
  `p_orignal_price` int(11) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_variety` varchar(255) NOT NULL,
  `p_createdate` date NOT NULL DEFAULT current_timestamp(),
  `p_updatedate` date DEFAULT NULL,
  `p_isactive` tinyint(4) NOT NULL DEFAULT 1,
  `offer` varchar(255) NOT NULL DEFAULT 'off'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producattype`
--

INSERT INTO `producattype` (`id`, `c_id`, `p_name`, `p_long_desc`, `p_img`, `p_orignal_price`, `p_price`, `p_variety`, `p_createdate`, `p_updatedate`, `p_isactive`, `offer`) VALUES
(9, 24, 'mango', 'Mangoes and ice cream! Yes, weâ€™re making a No-Bake Mango Ice Cream Cake which is absolutely delicious, perfect for summer and hits all the right spots.', '../assest/img/cat_img/mango.jpg', 250, 350, 'not available ', '2022-07-15', '2022-08-09', 1, 'off'),
(11, 27, 'Black Forest Oreo Cake', 'Cake Flavour- Black Forest\r\nType of Cake- Cream\r\nShape- Round\r\nServes- 4-6 People', '../assest/img/cat_img/black-forest-oreo-cake-half-kg_4.jpg', 699, 599, 'Black Forest Oreo Cake', '2022-07-29', NULL, 1, 'off'),
(12, 27, 'Creamy Drip Black Forest Cake', 'Cake Flavour- Black Forest\r\nType Of Cake- Cream\r\nWeight- Half Kg\r\nCake Shape- Round\r\nSize- 6 Inches in Diameter', '../assest/img/cat_img/creamydripblackforest.jpg', 699, 659, 'Cake Flavour- Black Forest', '2022-07-29', NULL, 1, 'off'),
(13, 27, 'Birthday Special Black Forest Cake', 'Cake Flavour- Black Forest\r\nType Of Cake- Cream\r\nCake Shape- Round\r\nSize- 6 Inches in Diameter', '../assest/img/cat_img/birthdayspecial.jpg', 649, 585, 'Cake Flavour- Black Forest', '2022-07-29', '2022-07-30', 1, 'off'),
(14, 28, 'Red Velvet Cream Cake', 'Cake Flavour- Red Velvet\r\nType of Cake- Cream\r\nWeight- Half Kg\r\nSize- 6 Inches in Diameter', '../assest/img/cat_img/red-velvet-cream-cake-half-kg_1.webp', 799, 749, 'Red Velvet Cream Cake', '2022-08-01', '2022-08-01', 1, 'off'),
(15, 28, 'Red Hearts Velvet Cake', 'Cake Flavour- Red Velvet\r\nType of Cake- Cream\r\nWeight- Half Kg\r\nShape- Round', '../assest/img/cat_img/red-hearts-velvet-cake-half-kg_4.jpg', 749, 750, 'Red Hearts Velvet Cake', '2022-08-01', NULL, 1, 'off'),
(16, 28, 'Delicious Red Velvet Crumble Dry', 'Cake Flavour- Red Velvet\r\nType of Cake- Cream\r\nWeight- Half Kg\r\nShape- Heart', '../assest/img/cat_img/red-velvet-heart-cream-cake-half-kg_1.jpg', 799, 700, 'Delicious Red Velvet Crumble Dry', '2022-08-01', NULL, 1, 'off'),
(17, 26, 'Decorated Chocolate Photo Cake', 'Cake Flavour- Chocolate (Eggless)\r\nType of Cake- Cream\r\nWeight- Half Kg\r\nShape- Rectangle', '../assest/img/cat_img/decorated-chocolate-photo-cake-half-kg_1.webp', 899, 999, 'Decorated Chocolate Photo Cake', '2022-08-01', '2022-08-02', 1, 'off'),
(18, 24, 'choclate cake', 'Ice Cream (36.7%)\r\nEggless Cake & Chocolate Sauce (34.2%)\r\nTopping (29.1%)\r\nFood Allergen', '../assest/img/cat_img/ChocolateCake.jpg', 598, 650, 'CHOCOLATE CAKE', '2022-08-01', '2022-08-02', 1, 'on'),
(19, 31, 'Classic Opera Cake', 'Ah, Opera Cake. This coffee loverâ€™s dream-come-true is a six layer affair, stacked with three layers of almond sponge, soaked with espresso syrup and alternating layers of French buttercream and butter ganache', '../assest/img/cat_img/Opera2BCake2B2.webp', 449, 399, 'Classic Opera Cake', '2022-08-02', '2022-08-03', 1, 'off'),
(20, 31, 'CREAMSICLE Opera cake', 'Opera Cake is a stunning layered dessert with an almond joconde, buttercream frosting, and a fluffy white chocolate mousse thatâ€™s sure to impress', '../assest/img/cat_img/Creamsicle-Opera-Cake-Barbara-Bakes-150x150.jpg', 599, 499, 'CREAMSICLE Opera cake', '2022-08-02', NULL, 1, 'off'),
(21, 31, 'Matcha Opera Cake', 'Making entremets is addictive. They are easy, satisfying but tedious unless you spread the process across multiple days which you should.', '../assest/img/cat_img/img_2254.jpg', 799, 699, 'Matcha Opera Cake', '2022-08-02', NULL, 1, 'off'),
(22, 36, 'Chocolate Truffle Pastry', 'This pastry is all about perfection. Made from the finest quality of chocolate, this delicious pastry proudly boasts lips-smacking chocolate covering and cherry decoration. This pastry has been given an awesome touch with the liquid chocolate cream.', '../assest/img/cat_img/Chocolate Truffle Pastry.jpg', 200, 189, 'Chocolate Truffle Pastry', '2022-08-09', NULL, 1, 'off'),
(23, 36, 'Ferreo Rocher-Chocolate Truffle pastry', 'Just have a single bite of this Black Forest pastry and it will all make a proper sense to you. The kick of cherry and rich chocolate of this super light, airy pastry will definitely make you feel ', '../assest/img/cat_img/black.jpg', 250, 200, 'all', '2022-08-09', '2022-08-09', 1, 'off');

-- --------------------------------------------------------

--
-- Table structure for table `productcategory`
--

CREATE TABLE `productcategory` (
  `id` int(11) NOT NULL,
  `categoryname` varchar(255) NOT NULL,
  `createdate` date NOT NULL DEFAULT current_timestamp(),
  `updatedate` date DEFAULT NULL,
  `isactive` tinyint(4) NOT NULL DEFAULT 1,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productcategory`
--

INSERT INTO `productcategory` (`id`, `categoryname`, `createdate`, `updatedate`, `isactive`, `img`) VALUES
(1, 'Premium Cake', '2022-07-09', '2022-08-02', 0, '../assest/img/cat_img/arivals-pic.jpg'),
(24, 'Ice Cream Cake', '2022-07-13', '2022-08-02', 1, '../assest/img/cat_img/icecreamecake.jpg'),
(26, 'Photo Cake', '2022-07-25', '2022-07-29', 1, '../assest/img/cat_img/photocake.png'),
(27, 'Black Forest Cake', '2022-07-29', NULL, 1, '../assest/img/cat_img/black-forest-cake-half-kg_1.webp'),
(28, 'Red Velvet Cake', '2022-07-29', NULL, 0, '../assest/img/cat_img/raspberry-pink-velvet-cake-1574437052.jpg'),
(29, 'pound cake', '2022-07-29', NULL, 0, '../assest/img/cat_img/chocolate-matcha-swirl-pound-cake-1574437002.jpg'),
(30, 'Chiffon Cake', '2022-07-29', NULL, 0, '../assest/img/cat_img/types-of-cake-orange-chiffon-cake-1650555385.jpeg'),
(31, 'Opera Cake', '2022-07-29', '2022-08-02', 1, '../assest/img/cat_img/opera-cake-royalty-free-image-1578350233.jpg'),
(32, 'Puff Pastry', '2022-07-29', NULL, 0, '../assest/img/cat_img/Puff-Pastry.jpg'),
(33, 'Flaky Pastry', '2022-07-29', NULL, 0, '../assest/img/cat_img/Flaky-Pastry.jpg'),
(35, 'choclate', '2022-08-02', NULL, 0, '../assest/img/cat_img/unnamed.webp'),
(36, 'pastry', '2022-08-09', NULL, 1, '../assest/img/cat_img/pastry.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(10) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `createdate` date DEFAULT current_timestamp(),
  `updatedate` date DEFAULT NULL,
  `isactive` tinyint(4) NOT NULL DEFAULT 1,
  `img` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `city`, `createdate`, `updatedate`, `isactive`, `img`, `password`) VALUES
(1, 'kishan', 'kishansavaliya9083@gmail.com', 0, '', '2022-07-21', NULL, 1, '', '123456'),
(2, 'rutvik', 'rutvik@gmail.com', 0, '', '2022-07-21', NULL, 1, '', 'rv'),
(3, 'Hipoone', 'hipo@gmail.com', NULL, '', '2022-07-22', NULL, 1, '', 'hipo12'),
(5, 'shubham', 'shubham@gmail.com', NULL, '', '2022-07-23', NULL, 1, '', '1234'),
(11, 'dipeshdipu', 'dipeshdipu@gmail.com', NULL, '', '2022-07-28', NULL, 1, '', 'dipesh'),
(12, 'harmitdavra111@gmai.com', 'harmitdavra111@gmai.com', NULL, '', '2022-07-28', NULL, 1, '', '123456'),
(13, 'jadav', 'jadavjaydev121@gmail.com', NULL, '', '2022-07-28', NULL, 1, '', '121212'),
(14, 'dipesh vekariya', 'dipeshvekariya123@gmail.com', NULL, '', '2022-07-28', NULL, 1, '', 'dipesh'),
(15, 'harmitdavra111@gmail.com', 'harmitdavra111@gmail.com', NULL, '', '2022-07-28', NULL, 1, '', 'harmit'),
(16, 'Kevin ', 'kevinrupareliya91@gmail.com', NULL, '', '2022-07-29', NULL, 1, '', 'kevin123'),
(18, 'charvinpatel', 'charvinpatel786@gmail.com', NULL, '', '2022-08-03', NULL, 1, '', '9313498038'),
(19, 'scion', 'scioninfotech.com@gmail.com', NULL, '', '2022-08-04', NULL, 1, '', 'Scion@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producattype`
--
ALTER TABLE `producattype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `producattype`
--
ALTER TABLE `producattype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
