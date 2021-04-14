-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 11, 2021 at 05:14 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `moneyplan`
--

-- --------------------------------------------------------

--
-- Table structure for table `fileupload`
--

CREATE TABLE `fileupload` (
  `id` int(11) NOT NULL,
  `Plan` varchar(100) NOT NULL,
  `Plandetail` varchar(10000) NOT NULL,
  `Imgfile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fileupload`
--

INSERT INTO `fileupload` (`id`, `Plan`, `Plandetail`, `Imgfile`) VALUES
(1, 'Agricultural 5 yrs plan', '', '51083587_2047529075545935_4732340875361779712_n.png'),
(2, 'Agricultural 5 yrs plan', 'bhoom bhoom bhoom ', '26023839_2066871066932708_1042297287472798384_o.jpg'),
(3, 'Agricultural 5 yrs plan', 'dssdfdsfsdaf', '234.jpg'),
(4, 'Agricultural 5 yrs plan', 'fdsafsdaf  fas', '123456.jpg'),
(5, 'hpmt', 'mfam,dbfadm,bfad,bfad,bfadf,bad,fb', '61424415_3026142167458629_4525056549541904384_o.png'),
(6, 'Agricultural 5 yrs plan', 'hello world 5', 'bg-background.jpg'),
(7, 'Agricultural 5 yrs plan', 'hello world 5', 'bg-background.jpg'),
(8, 'hello world', 'hello wolrd', 'news.jpg'),
(9, 'Ramesh Gaihre', 'Stock Exchange', 'brand3.png'),
(10, 'Ramesh Gaihre', 'Stock Exchange', 'brand3.png'),
(11, 'Agricultural 5 yrs plan', '112345', 'cate1.png'),
(12, 'Agricultural 5 yrs plan', '112345', 'cate1.png'),
(13, 'Agricultural 5 yrs plan', 'hello wworld', 'benefit.jpg'),
(14, 'Ramesh Gaihre', 'chor', 'team.jpg'),
(15, 'Ramesh Gaihre', 'chor', 'team.jpg'),
(16, 'Ramesh rimal', 'hello world', 'img-03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fileuploaded`
--

CREATE TABLE `fileuploaded` (
  `id` int(11) NOT NULL,
  `Plan` text NOT NULL,
  `Plandetail` varchar(10000) NOT NULL,
  `Imgfile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `investorinfo`
--

CREATE TABLE `investorinfo` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `City` text NOT NULL,
  `Zip` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `investorinfo`
--

INSERT INTO `investorinfo` (`id`, `Name`, `Address`, `Email`, `Password`, `Phone`, `State`, `City`, `Zip`) VALUES
(1, 'Prithvi Bishwokarma', 'ktm', 'admin', 'admin002', '987654321', 'nepal', 'ktm', 1212),
(2, 'Prithvi Bishwokarma', 'ktm', 'admin', 'admin002', '987654321', 'nepal', 'ktm', 1212),
(3, 'Prithvi Bishwokarma', 'ktm', 'admin', 'admin002', '987654321', 'nepal', 'ktm', 1212);

-- --------------------------------------------------------

--
-- Table structure for table `investorinfo1`
--

CREATE TABLE `investorinfo1` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Zip` varchar(100) NOT NULL,
  `Image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fileupload`
--
ALTER TABLE `fileupload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fileuploaded`
--
ALTER TABLE `fileuploaded`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investorinfo`
--
ALTER TABLE `investorinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investorinfo1`
--
ALTER TABLE `investorinfo1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fileupload`
--
ALTER TABLE `fileupload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `fileuploaded`
--
ALTER TABLE `fileuploaded`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `investorinfo`
--
ALTER TABLE `investorinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `investorinfo1`
--
ALTER TABLE `investorinfo1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
