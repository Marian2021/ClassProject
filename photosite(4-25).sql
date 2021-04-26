-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 02:58 AM
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
(5, 1, 'LA Vacation Pictures', 'Pictures from Vacation in LA'),
(6, 2, 'Pet Pictures', 'Pictures of Pets!'),
(7, 2, 'Jensen Family Pictures', 'Pictures of my family');

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

-- --------------------------------------------------------

--
-- Table structure for table `commentsection`
--

CREATE TABLE `commentsection` (
  `sectionId` int(11) NOT NULL,
  `pictureId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(15, 'Little Tokyo Mall', 'Emma at Little Tokyo Mall', 'AX_170710_0068.jpg', 5, 1),
(16, 'Buffy!', 'Buffy, Carol\'s dog', '_180712_0030.jpg', 5, 1),
(17, 'Ramen Bar', '', '_180712_0241.jpg', 5, 1),
(18, 'Late Night Ramen', 'Late Night Ramen sign', '_180712_0245.jpg', 5, 1),
(19, 'La Brea Museum', 'Awesome display at the museum, those are all wolf skulls they\'ve recovered there.', '18_180712_0382.jpg', 5, 1),
(20, 'LA At Night', 'Construction near LA Convention Center', 'AX_170715_0209_0.jpg', 5, 1),
(21, 'Duke Nukem Cosplayer', '', 'AX_170715_0166.jpg', 5, 1),
(22, 'Ripley Cosplayer', '', 'AX_170715_0225.jpg', 5, 1),
(23, 'Hypno Cosplayer', 'Hypno (Pokemon) Cosplayer', 'AX_170715_0241_0.jpg', 5, 1),
(24, 'Panda lookin\' out the window', '', '15179.jpg', 6, 1),
(25, 'Lilly in the tub', 'Lilly chilling in the tub', '1591115358946.jpg', 6, 2),
(26, 'Gigi Morning', 'Gigi at sunrise', '28589.jpg', 6, 1),
(27, 'Skram and Au Si', 'Skram and Au Si coolin', '3232.jpg', 6, 1),
(29, 'Gigi on couch', 'Gigi looking like a little gremlin on the couch', '20201223_140048.jpg', 6, 1),
(30, 'Panda and Gigi', 'Both of them looking all cute', '20210313_000058.jpg', 6, 1),
(31, 'Where\'s Panda', 'Where\'s Panda everyone', '1598115578367.jpg', 6, 1),
(32, 'Skram', 'Skram looking guilty', '1580676220097.jpg', 6, 3),
(33, 'Angie little kid', 'Here\'s me when i was about 5 or 6.', '45393_1214065753192_1562137_n.jpg', 7, 2),
(34, 'Skyler, Danny, and Angie', 'The 3 of us, mid 90s.', '45393_1214065913196_6457556_n.jpg', 7, 2),
(35, 'Keith w/ chipmunk', 'Keith holding a chipmunk', '46079_1214066073200_3718553_n.jpg', 7, 1),
(36, 'Tony tuning up', 'Tony (Angie and I\'s dad) tuning up his 12-string guitar', '46081_1214066753217_1085875_n.jpg', 7, 1),
(37, 'Jeanie and Tony', 'My parents, taken in the mid 80s.', '46081_1214066713216_7019599_n.jpg', 7, 2),
(38, 'Keith', 'Keith from the early 2000s, ', '10956945_425388347630056_1015880376_n.jpg', 7, 1),
(39, 'Tony at Family Reunion', 'Tony from around \'82 at the family reunion.', 'Tony-82ish2.jpg', 7, 2),
(40, 'Ross, Tony, and Jack', 'Ross, Tony, and Jack from the mid 80s. I think they look like a synth pop band.', '393467_10150430413673264_621063263_8577419_754336416_n.jpg', 7, 1);

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
(1, 'sjensen621', 'skyler.jensen@my.metrostate.edu', 0, 0, '30d5ed9a5b8a2b6d64e8e20564466f54'),
(2, 'Angie91', 'angie91@gmail.com', 0, 0, 'e41af8e12404892461299dc7912f1d2b'),
(3, 'david85', 'david85@gmail.com', 0, 0, 'e41af8e12404892461299dc7912f1d2b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`albumId`),
  ADD KEY `fk_userId` (`userId`);

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
  MODIFY `albumId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `pictureId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `fk_userId` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

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
