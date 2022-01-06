-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2021 at 06:40 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalprojectphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(7) NOT NULL,
  `user` varchar(255) CHARACTER SET latin1 NOT NULL,
  `msg` text CHARACTER SET latin1 NOT NULL,
  `time` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `userName` varchar(256) NOT NULL,
  `password` varchar(20) NOT NULL,
  `member` varchar(20) NOT NULL,
  `image` varchar(500) NOT NULL,
  `firstName` varchar(256) NOT NULL,
  `lastName` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `age` varchar(40) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `maritalState` varchar(100) NOT NULL,
  `message` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `userName`, `password`, `member`, `image`, `firstName`, `lastName`, `email`, `phone`, `age`, `gender`, `maritalState`, `message`) VALUES
(1, 'jhondeiberd', '1234', 'Premium', 'image10.jpg', 'Jhon', 'Diaz', 'jhondeiberd@gmail.com', '5143461672', '36-45', 'Male', 'Married', 'I like to travel'),
(13, 'project', 'project', 'Premium', '210846.jpg', 'project', 'final', 'pf@gmail.com', '51434567898', '18-25', 'Male', 'Single', 'Project final PHP'),
(62, 'marlenyp', '123456', 'Premium', 'image8.jpg', 'Marleny', 'Palacios', 'mp@gmail.com', '5145697841', '36-45', 'Female', 'Reserved', 'Final test'),
(63, 'JulioS', '12345', 'Regular', 'Image1.jpg', 'Julio', 'Sanchez', 'JulioSanchez@gmail.com', '5141248562', '46-…', 'Male', 'Divorced', 'Hello'),
(65, 'CarlosP', '12346', 'Primium', 'Image2.jpg', 'Carlos', 'Prieto', 'CarlosPrieto@gmail.com', '5141248563', '26-35', 'Male', 'Reserved', 'Hello'),
(66, 'MauricioT', '12347', 'Regular', 'Image3.jpg', 'Mauricio', 'Triana', 'MauricioTriana@gmail.com', '5141258564', '36-45', 'Male', 'Complicated_relationship', ''),
(67, 'FlorP', '12348', 'Regular', 'Image4.jpg', 'Flor', 'Parra', 'FlorParra@gmail.com', '5141298565', '26-35', 'Female', 'Married', ''),
(68, 'PatriciaS', '12349', 'Regular', 'Image5.jpg', 'Patricia', 'Silva', 'PatriciaSilva@gmail.com', '5141218566', '26-35', 'Female', 'Reserved', ''),
(69, 'AngieM', '12350', 'Primium', 'Image6.jpg', 'Angie', 'Mora', 'AngieMora@gmail.com', '5141238567', '18-25', 'Female', 'Reserved', 'Hello'),
(70, 'JhonathanR', '12351', 'Regular', 'Image9.jpg', 'Jhonathan', 'Rodriguez', 'JhonathanRodriguez@gmail.com', '5141218568', '26-35', 'Male', 'Single', ''),
(71, 'Dianar', '4567', 'Premium', 'Screenshot 2021-12-02 210553.jpg', 'Diana', 'Ramirez', 'dr@hotmail.com', '4385697841', '26-35', 'Female', 'Complicated_relationship', 'Hello everybody!!'),
(72, 'repeatPhoto', '1234', 'Regular', '1638497977_image1.jpg', 'Repeat', 'Photo', 'rp@yahoo.com', '5147894152', '18-25', 'Male', 'Single', ''),
(78, 'Silvestred', '1234', 'Regular', '1638594581_silvestre.jpg', 'Silvestre', 'Dangond', 'sd@gmail.com', '5147418596', '36-45', 'Male', 'Divorced', 'I like the music');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
