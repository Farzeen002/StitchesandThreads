-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2021 at 09:49 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tailor`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `aid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`aid`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assign`
--

CREATE TABLE `tbl_assign` (
  `assign_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blouse`
--

CREATE TABLE `tbl_blouse` (
  `b_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `book_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `colour` varchar(20) NOT NULL,
  `SL` varchar(20) NOT NULL,
  `AB` varchar(20) NOT NULL,
  `ABOB` varchar(20) NOT NULL,
  `SB` varchar(20) NOT NULL,
  `FND` varchar(20) NOT NULL,
  `AOC` varchar(20) NOT NULL,
  `AA` varchar(20) NOT NULL,
  `shoulder` varchar(20) NOT NULL,
  `NtoS` varchar(20) NOT NULL,
  `BL` varchar(20) NOT NULL,
  `BND` varchar(20) NOT NULL,
  `comment` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `uid` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'applied',
  `materialprice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bshirt`
--

CREATE TABLE `tbl_bshirt` (
  `bs_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `book_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `colour` varchar(20) NOT NULL,
  `pocket` varchar(20) NOT NULL,
  `SL` varchar(20) NOT NULL,
  `SW` varchar(20) NOT NULL,
  `chest` varchar(20) NOT NULL,
  `waist` varchar(20) NOT NULL,
  `hip` varchar(20) NOT NULL,
  `shoulder` varchar(20) NOT NULL,
  `length` varchar(20) NOT NULL,
  `comment` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `uid` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'applied',
  `materialprice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartid` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartid`, `item_id`, `uid`, `qty`, `price`, `total`, `date`, `status`) VALUES
(1, 1, 1, 2, 3803, 3803, '2021-08-25', 'ordered');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cate`
--

CREATE TABLE `tbl_cate` (
  `cid` int(11) NOT NULL,
  `category_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cate`
--

INSERT INTO `tbl_cate` (`cid`, `category_type`) VALUES
(2, 'women'),
(3, 'men');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_design`
--

CREATE TABLE `tbl_design` (
  `fabric_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `colour` varchar(50) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `length` varchar(50) NOT NULL,
  `waist` varchar(50) NOT NULL,
  `kneelength` varchar(50) NOT NULL,
  `hip` varchar(50) NOT NULL,
  `Thigh` varchar(50) NOT NULL,
  `bottom` varchar(50) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `book_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `NtoSM` varchar(50) NOT NULL,
  `BL` varchar(50) NOT NULL,
  `SL` varchar(50) NOT NULL,
  `AB` varchar(50) NOT NULL,
  `ABOB` varchar(50) NOT NULL,
  `SB` varchar(50) NOT NULL,
  `FND` varchar(50) NOT NULL,
  `AOC` varchar(50) NOT NULL,
  `AA` varchar(50) NOT NULL,
  `Shoulder` varchar(50) NOT NULL,
  `BND` varchar(50) NOT NULL,
  `chest` varchar(50) NOT NULL,
  `Swidth` varchar(69) NOT NULL,
  `Bodice` varchar(50) NOT NULL,
  `SKlength` varchar(50) NOT NULL,
  `sweep` varchar(50) NOT NULL,
  `front_image` varchar(250) NOT NULL,
  `pocket` varchar(50) NOT NULL,
  `height` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_design_data`
--

CREATE TABLE `tbl_design_data` (
  `design_id` int(11) NOT NULL,
  `design_name` varchar(20) NOT NULL,
  `design_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_design_data`
--

INSERT INTO `tbl_design_data` (`design_id`, `design_name`, `design_image`) VALUES
(5, 'flowers', '30665-banner.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feed_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `message` longtext NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_frock`
--

CREATE TABLE `tbl_frock` (
  `f_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `book_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `colour` varchar(20) NOT NULL,
  `SL` varchar(20) NOT NULL,
  `SW` varchar(20) NOT NULL,
  `chest` varchar(20) NOT NULL,
  `waist` varchar(20) NOT NULL,
  `hip` varchar(20) NOT NULL,
  `bodice` varchar(20) NOT NULL,
  `SKlength` varchar(20) NOT NULL,
  `length` varchar(20) NOT NULL,
  `sweep` varchar(20) NOT NULL,
  `shoulder` varchar(20) NOT NULL,
  `comment` varchar(20) NOT NULL,
  `image` varchar(250) NOT NULL,
  `uid` int(11) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'applied',
  `materialprice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gown`
--

CREATE TABLE `tbl_gown` (
  `g_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `book_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `colour` varchar(20) NOT NULL,
  `SL` varchar(20) NOT NULL,
  `SW` varchar(20) NOT NULL,
  `chest` varchar(20) NOT NULL,
  `waist` varchar(20) NOT NULL,
  `hip` varchar(20) NOT NULL,
  `bodice` varchar(20) NOT NULL,
  `SKlength` varchar(20) NOT NULL,
  `length` varchar(20) NOT NULL,
  `sweep` varchar(20) NOT NULL,
  `shoulder` varchar(20) NOT NULL,
  `comment` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `uid` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'applied',
  `materialprice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gshirt`
--

CREATE TABLE `tbl_gshirt` (
  `gs_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `book_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `colour` varchar(20) NOT NULL,
  `pocket` varchar(20) NOT NULL,
  `SL` varchar(20) NOT NULL,
  `SW` varchar(20) NOT NULL,
  `chest` varchar(20) NOT NULL,
  `waist` varchar(20) NOT NULL,
  `hip` varchar(20) NOT NULL,
  `shoulder` varchar(20) NOT NULL,
  `length` varchar(20) NOT NULL,
  `comment` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `uid` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'applied',
  `materialprice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item`
--

CREATE TABLE `tbl_item` (
  `item_id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `item_image` varchar(250) NOT NULL,
  `item_description` longtext NOT NULL,
  `item_price` double NOT NULL,
  `item_qty` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_item`
--

INSERT INTO `tbl_item` (`item_id`, `cid`, `item_name`, `item_image`, `item_description`, `item_price`, `item_qty`) VALUES
(1, 2, 'Pink Georgette Palaz', '60854-3732sl04-nazakat9704.jpg', 'Set the temperatures soaring high in this muave pink color embroidered palazzo with georgette suit. Filled with intricate thread embroidery and highlighted with heavy mirror work and gotta lace ornaments. Enriched with accentuate frilled hem to make it more graceful. It is paired wit', 3803, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_material`
--

CREATE TABLE `tbl_material` (
  `m_id` int(11) NOT NULL,
  `m_type` varchar(20) NOT NULL,
  `m_amount` double NOT NULL,
  `tax` double NOT NULL,
  `qty` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_material`
--

INSERT INTO `tbl_material` (`m_id`, `m_type`, `m_amount`, `tax`, `qty`) VALUES
(4, 'fancy', 200, 1, '4'),
(5, 'nailon', 400, 1, '8'),
(6, 'polister', 470, 1, '74'),
(7, 'silk', 500, 1, '78'),
(8, 'kanchipuram', 720, 1, '12'),
(9, 'ullan', 1000, 1, '10'),
(10, 'welwet', 80, 1, '52'),
(12, 'seel', 450, 4, '6'),
(13, 'weem', 780, 9, '5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `oid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `odate` date NOT NULL,
  `gtotal` double NOT NULL,
  `status` varchar(50) NOT NULL,
  `Invoiceno` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`oid`, `uid`, `odate`, `gtotal`, `status`, `Invoiceno`) VALUES
(1, 1, '2021-09-15', 3803, 'debit card', 'IN001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `odid` int(11) NOT NULL,
  `oid` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `mrp` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`odid`, `oid`, `item_id`, `qty`, `mrp`, `total`) VALUES
(0, 1, 1, 2, 3803, 3803);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pant`
--

CREATE TABLE `tbl_pant` (
  `p_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `book_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `colour` varchar(20) NOT NULL,
  `height` varchar(20) NOT NULL,
  `waist` varchar(20) NOT NULL,
  `Thigh` varchar(20) NOT NULL,
  `bottom` varchar(20) NOT NULL,
  `kneelength` varchar(20) NOT NULL,
  `hip` varchar(20) NOT NULL,
  `comment` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `uid` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'applied',
  `materialprice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase`
--

CREATE TABLE `tbl_purchase` (
  `pur_id` int(11) NOT NULL,
  `pdate` date NOT NULL,
  `supid` int(11) NOT NULL,
  `gtotal` double NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'not_calculated'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase_details`
--

CREATE TABLE `tbl_purchase_details` (
  `purdtid` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `pur_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` double NOT NULL,
  `total` double NOT NULL,
  `status` varchar(20) NOT NULL,
  `tax` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `image` varchar(250) NOT NULL,
  `type` varchar(30) NOT NULL DEFAULT 'Staff'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`staff_id`, `staff_name`, `gender`, `address`, `phone`, `image`, `type`) VALUES
(1, 'test', 'male', 'test', 1234567890, '4672-linkedin-sales-solutions-pata8xe_ivm-unsplash.jpg', 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supply`
--

CREATE TABLE `tbl_supply` (
  `supid` int(11) NOT NULL,
  `supname` varchar(20) NOT NULL,
  `supemail` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_top`
--

CREATE TABLE `tbl_top` (
  `t_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `book_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `colour` varchar(20) NOT NULL,
  `SL` varchar(20) NOT NULL,
  `SW` varchar(20) NOT NULL,
  `chest` varchar(20) NOT NULL,
  `waist` varchar(20) NOT NULL,
  `hip` varchar(20) NOT NULL,
  `bodice` varchar(20) NOT NULL,
  `SKlength` varchar(20) NOT NULL,
  `length` varchar(20) NOT NULL,
  `sweep` varchar(20) NOT NULL,
  `shoulder` varchar(20) NOT NULL,
  `comment` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `uid` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'applied',
  `materialprice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_top`
--

INSERT INTO `tbl_top` (`t_id`, `m_id`, `qty`, `book_date`, `delivery_date`, `colour`, `SL`, `SW`, `chest`, `waist`, `hip`, `bodice`, `SKlength`, `length`, `sweep`, `shoulder`, `comment`, `image`, `uid`, `status`, `materialprice`) VALUES
(1, 13, '452', '2019-03-07', '2019-03-17', '#000000', '410', '52', '74', '852', '7', '96', '96', '96', '85', '85', 'asdfghjklwertyuikl', 'IMG_20190126_203804.jpg', 13, 'applied', 0),
(2, 7, '45', '2019-03-26', '2019-03-31', '#00ffff', '34', '33', '67', '23', '12', '42', '6622', '64', '22', '12', 'asdfghwqerty', 'IMG_20190126_204348.jpg', 23, 'applied', 0),
(3, 9, '45', '2019-03-26', '2019-03-31', '#ff8040', '23', '78', '78', '90', '78', '56', '46', '67', '23', '23', 'asdfhgjretyu', 'IMG_20190126_204308.jpg,IMG_20190126_204325.jpg', 23, 'applied', 0),
(4, 7, '89', '2019-03-28', '2019-03-31', '#ff0000', '12', '12', '78', '78', '78', '12', '78', '25', '78', '85', '78', 'IMG-20190326-WA0056.jpg', 24, 'applied', 0),
(5, 8, '45', '2019-03-31', '2019-04-19', '#000000', '45', '74', '78', '78', '12', '85', '45', '78', '14', '85', '78', 'banner.jpg', 23, 'applied', 0),
(6, 7, '12', '2019-04-02', '2019-04-26', '#0000ff', '12', '12', '36', '45', '65', '78', '15', '65', '78', '58', 'dfghjk sdfghjk', 'IMG_20190201_181016.jpg', 23, 'applied', 500);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `uid` int(11) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`uid`, `full_name`, `contact`, `gender`, `address`, `email`, `password`, `image`) VALUES
(1, 'test', 7894561237, 'male', 'test', 'test@test.com', '123456', '49576-linkedin-sales-solutions-pata8xe_ivm-unsplash.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `tbl_assign`
--
ALTER TABLE `tbl_assign`
  ADD PRIMARY KEY (`assign_id`);

--
-- Indexes for table `tbl_blouse`
--
ALTER TABLE `tbl_blouse`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `tbl_bshirt`
--
ALTER TABLE `tbl_bshirt`
  ADD PRIMARY KEY (`bs_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `item_id_2` (`item_id`);

--
-- Indexes for table `tbl_cate`
--
ALTER TABLE `tbl_cate`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_design`
--
ALTER TABLE `tbl_design`
  ADD PRIMARY KEY (`fabric_id`),
  ADD KEY `m_id` (`m_id`),
  ADD KEY `m_id_2` (`m_id`);

--
-- Indexes for table `tbl_design_data`
--
ALTER TABLE `tbl_design_data`
  ADD PRIMARY KEY (`design_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `tbl_frock`
--
ALTER TABLE `tbl_frock`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `uid` (`uid`),
  ADD KEY `m_id` (`m_id`),
  ADD KEY `m_id_2` (`m_id`);

--
-- Indexes for table `tbl_gown`
--
ALTER TABLE `tbl_gown`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `tbl_gshirt`
--
ALTER TABLE `tbl_gshirt`
  ADD PRIMARY KEY (`gs_id`);

--
-- Indexes for table `tbl_item`
--
ALTER TABLE `tbl_item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `cid` (`cid`),
  ADD KEY `cid_2` (`cid`);

--
-- Indexes for table `tbl_material`
--
ALTER TABLE `tbl_material`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD KEY `oid` (`oid`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `item_id_2` (`item_id`);

--
-- Indexes for table `tbl_pant`
--
ALTER TABLE `tbl_pant`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_purchase`
--
ALTER TABLE `tbl_purchase`
  ADD PRIMARY KEY (`pur_id`),
  ADD KEY `supid` (`supid`);

--
-- Indexes for table `tbl_purchase_details`
--
ALTER TABLE `tbl_purchase_details`
  ADD PRIMARY KEY (`purdtid`),
  ADD KEY `m_id` (`m_id`),
  ADD KEY `pur_id` (`pur_id`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `tbl_supply`
--
ALTER TABLE `tbl_supply`
  ADD PRIMARY KEY (`supid`);

--
-- Indexes for table `tbl_top`
--
ALTER TABLE `tbl_top`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_assign`
--
ALTER TABLE `tbl_assign`
  MODIFY `assign_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_blouse`
--
ALTER TABLE `tbl_blouse`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_bshirt`
--
ALTER TABLE `tbl_bshirt`
  MODIFY `bs_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_cate`
--
ALTER TABLE `tbl_cate`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_design`
--
ALTER TABLE `tbl_design`
  MODIFY `fabric_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_design_data`
--
ALTER TABLE `tbl_design_data`
  MODIFY `design_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_frock`
--
ALTER TABLE `tbl_frock`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_gown`
--
ALTER TABLE `tbl_gown`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_gshirt`
--
ALTER TABLE `tbl_gshirt`
  MODIFY `gs_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_item`
--
ALTER TABLE `tbl_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_material`
--
ALTER TABLE `tbl_material`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pant`
--
ALTER TABLE `tbl_pant`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_purchase`
--
ALTER TABLE `tbl_purchase`
  MODIFY `pur_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_purchase_details`
--
ALTER TABLE `tbl_purchase_details`
  MODIFY `purdtid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_supply`
--
ALTER TABLE `tbl_supply`
  MODIFY `supid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_top`
--
ALTER TABLE `tbl_top`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `tbl_cart_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `tbl_item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_design`
--
ALTER TABLE `tbl_design`
  ADD CONSTRAINT `tbl_design_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `tbl_material` (`m_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_item`
--
ALTER TABLE `tbl_item`
  ADD CONSTRAINT `tbl_item_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `tbl_cate` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `tbl_user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD CONSTRAINT `tbl_order_details_ibfk_1` FOREIGN KEY (`oid`) REFERENCES `tbl_order` (`oid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_order_details_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `tbl_item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_purchase`
--
ALTER TABLE `tbl_purchase`
  ADD CONSTRAINT `tbl_purchase_ibfk_1` FOREIGN KEY (`supid`) REFERENCES `tbl_supply` (`supid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_purchase_details`
--
ALTER TABLE `tbl_purchase_details`
  ADD CONSTRAINT `tbl_purchase_details_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `tbl_material` (`m_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_purchase_details_ibfk_2` FOREIGN KEY (`pur_id`) REFERENCES `tbl_purchase` (`pur_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
