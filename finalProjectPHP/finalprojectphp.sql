    -- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 04:19 AM
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
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
  `message` varchar(500) DEFAULT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `userName`, `password`, `member`, `image`, `firstName`, `lastName`, `email`, `phone`, `age`, `gender`, `maritalState`, `message`, `status`) VALUES
(1, 'jhondeiberd', '124578', 'Premium', '1638932799_IMG_20200129_125238.jpg', 'Jhon Deiber', 'Diaz Parra', 'jhondeiberd@gmail.com', '5141236578', '36-45', 'Male', 'Married', 'Hello, this is an update', 'OnLine'),
(13, 'project', 'project', 'Premium', '210846.jpg', 'project', 'final', 'pf@gmail.com', '51434567898', '18-25', 'Male', 'Single', 'Project final PHP', 'OffLine'),
(62, 'marlenyp', '123456', 'Premium', 'image8.jpg', 'Marleny', 'Palacios', 'mp@gmail.com', '5145697841', '36-45', 'Female', 'Reserved', 'Final test', 'OffLine'),
(63, 'JulioS', '12345', 'Regular', 'Image1.jpg', 'Julio', 'Sanchez', 'JulioSanchez@gmail.com', '5141248562', '46-…', 'Male', 'Divorced', 'Hello', 'OffLine'),
(65, 'CarlosP', '12346', 'Primium', 'Image2.jpg', 'Carlos', 'Prieto', 'CarlosPrieto@gmail.com', '5141248563', '26-35', 'Male', 'Reserved', 'Hello', 'OffLine'),
(66, 'MauricioT', '12347', 'Regular', 'Image3.jpg', 'Mauricio', 'Triana', 'MauricioTriana@gmail.com', '5141258564', '36-45', 'Male', 'Complicated_relationship', '', 'OffLine'),
(67, 'FlorP', '12348', 'Regular', 'Image4.jpg', 'Flor', 'Parra', 'FlorParra@gmail.com', '5141298565', '26-35', 'Female', 'Married', '', 'OffLine'),
(68, 'PatriciaS', '12349', 'Regular', 'Image5.jpg', 'Patricia', 'Silva', 'PatriciaSilva@gmail.com', '5141218566', '26-35', 'Female', 'Reserved', '', 'OffLine'),
(69, 'AngieM', '12350', 'Primium', 'Image6.jpg', 'Angie', 'Mora', 'AngieMora@gmail.com', '5141238567', '18-25', 'Female', 'Reserved', 'Hello', 'OffLine'),
(70, 'JhonathanR', '12351', 'Regular', 'Image9.jpg', 'Jhonathan', 'Rodriguez', 'JhonathanRodriguez@gmail.com', '5141218568', '26-35', 'Male', 'Single', '', 'OffLine'),
(71, 'Dianar', '4567', 'Premium', 'Screenshot 2021-12-02 210553.jpg', 'Diana', 'Ramirez', 'dr@hotmail.com', '4385697841', '26-35', 'Female', 'Complicated_relationship', 'Hello everybody!!', 'OffLine'),
(72, 'repeatPhoto', '1234', 'Regular', '1638497977_image1.jpg', 'Repeat', 'Photo', 'rp@yahoo.com', '5147894152', '18-25', 'Male', 'Single', '', 'OffLine'),
(78, 'Silvestred', '1234', 'Regular', '1638594581_silvestre.jpg', 'Silvestre', 'Dangond', 'sd@gmail.com', '5147418596', '36-45', 'Male', 'Divorced', 'I like the music', 'OffLine'),
(86, 'teylorS', 'project', 'Premium', '1638752750_506490.jpg', 'Tylor Alison', 'Swift', 'teylors@gmail.com', '5147539584', '26-35', 'Female', 'Single', 'Hello, I am American', 'OffLine');

-- --------------------------------------------------------

--
-- Table structure for table `users_chat`
--

CREATE TABLE `users_chat` (
  `msg_id` int(11) NOT NULL,
  `sender_username` varchar(100) NOT NULL,
  `receiver_username` varchar(100) NOT NULL,
  `msg_content` varchar(255) NOT NULL,
  `msg_status` text NOT NULL DEFAULT current_timestamp(),
  `msg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- Indexes for table `users_chat`
--
ALTER TABLE `users_chat`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `users_chat`
--
ALTER TABLE `users_chat`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
