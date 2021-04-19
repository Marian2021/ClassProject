-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 02:02 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photosite`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `albumId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `title` tinytext NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`albumId`, `userId`, `title`, `description`) VALUES
(1, 1, '2021 Pictures', 'Various Pictures from 2021'),
(2, 2, 'Cat Pictures', 'Pictures of Cats from over the years'),
(3, 4, 'Fry\'s Photos', 'Various Pictures I\'ve taken');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `sectionId` int(11) NOT NULL,
  `content` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`commentId`, `userId`, `sectionId`, `content`) VALUES
(1, 2, 1, 'wow great picture'),
(2, 1, 1, 'thanks i took it myself'),
(3, 1, 1, 'test comment ahoy');

-- --------------------------------------------------------

--
-- Table structure for table `commentsection`
--

CREATE TABLE `commentsection` (
  `sectionId` int(11) NOT NULL,
  `pictureId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commentsection`
--

INSERT INTO `commentsection` (`sectionId`, `pictureId`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `pictureId` int(11) NOT NULL,
  `pictureTitle` text NOT NULL,
  `pictureDescription` text NOT NULL,
  `pictureDirectory` text NOT NULL,
  `albumId` int(11) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`pictureId`, `pictureTitle`, `pictureDescription`, `pictureDirectory`, `albumId`, `userId`) VALUES
(1, 'Test picture', 'Here is a test picture', '1024px-PHMvinyl.jpg', 1, 1),
(3, '3rd picture title', '3 picture title description', 'A1eUcEcLP+L._SL1500_.jpg', 1, 2),
(4, '3rd picture title', '3 picture title description', 'a3716403306_10.jpg', 1, 2),
(7, 'trip photo 4', 'photo description', 'a3724699435_10.jpg', 1, 1),
(8, 'trip photo 5', 'photo description', 'wuforever.jpg', 1, 1),
(10, 'Gigi', 'Picture of Gigi', '13361.jpg', 2, 2),
(14, 'pic upload', 'testing picture upload', 'e3f6-50fb-408d-84c7-995db6d0b8b6.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `username` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `permissions` tinyint(1) NOT NULL,
  `adminRights` tinyint(1) NOT NULL,
  `password` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `username`, `email`, `permissions`, `adminRights`, `password`) VALUES
(1, 'sjensen621', 'skyler.jensen@my.metrostate.edu', 1, 1, '3ee618220b23d1851b418a35c507716d'),
(2, 'angie91', 'angie91@gmail.com', 1, 0, 'e16b2ab8d12314bf4efbd6203906ea6c'),
(3, 'test123', 'test@info.com', 0, 1, 'd41d8cd98f00b204e9800998ecf8427e'),
(4, 'fryguy28', 'fryguy28@gmail.com', 0, 0, '31435008693ce6976f45dedc5532e2c1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`albumId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentId`),
  ADD KEY `sectionId` (`sectionId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `commentsection`
--
ALTER TABLE `commentsection`
  ADD PRIMARY KEY (`sectionId`),
  ADD KEY `pictureId` (`pictureId`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`pictureId`),
  ADD KEY `albumId` (`albumId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `albumId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `commentsection`
--
ALTER TABLE `commentsection`
  MODIFY `sectionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `pictureId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `albums_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`sectionId`) REFERENCES `commentsection` (`sectionId`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `commentsection`
--
ALTER TABLE `commentsection`
  ADD CONSTRAINT `commentsection_ibfk_1` FOREIGN KEY (`pictureId`) REFERENCES `picture` (`pictureId`);

--
-- Constraints for table `picture`
--
ALTER TABLE `picture`
  ADD CONSTRAINT `picture_ibfk_1` FOREIGN KEY (`albumId`) REFERENCES `albums` (`albumId`),
  ADD CONSTRAINT `picture_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
