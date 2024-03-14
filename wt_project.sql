-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2023 at 07:34 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wt_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` int(8) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
(21052118, '0987'),
(2105282, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `group1`
--

CREATE TABLE `group1` (
  `Roll` int(8) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Dob` date NOT NULL,
  `Email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `group1`
--

INSERT INTO `group1` (`Roll`, `Name`, `Dob`, `Email`) VALUES
(2105282, 'Manan Garg', '2003-04-09', '2105282@kiit.ac.in'),
(2105325, 'Soumyajit Maity', '2003-08-31', '2105325@kiit.ac.in'),
(2105775, 'Anway Ghosh', '2002-08-06', '2105775@kiit.ac.in'),
(2105808, 'Pallavi Kumari', '2003-11-13', '2105808@kiit.ac.in'),
(2105970, 'Kumar Nishkam', '2002-04-07', '2105970@kiit.ac.in'),
(21051102, 'Ujjawal Singh', '2002-11-20', '21051102@kiit.ac.in'),
(21051406, 'Mayurakshee Sahu', '2003-06-07', '21051406@kiit.ac.in'),
(21051704, 'Abhinav Bhist', '2003-02-28', '21051704@kiit.ac.in'),
(21052118, 'Sushen Pandey', '2003-02-21', 'sushen21.pandey@gmail.com'),
(21052247, 'Debjit Maji', '2002-10-25', '21052247@kiit.ac.in'),
(21052406, 'Atika Chandel', '2004-05-11', '21052406@kiit.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Roll` int(8) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Dob` date NOT NULL,
  `Cgpa` decimal(4,2) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` bigint(10) NOT NULL,
  `About` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Roll`, `Name`, `Dob`, `Cgpa`, `Email`, `Mobile`, `About`) VALUES
(2105282, 'Manan Garg', '2003-04-09', '8.90', '2105282@kiit.ac.in', 9667769868, 'Currently pursuing B.Tech in Computer Science Engineering from Kalinga Institute of Industrial Technology.\r\nWorking in order to gain an expertise in the field of Artificial Intelligence and Machine Learning. '),
(2105325, 'Soumyajit Maity', '2003-08-31', '8.80', '2105325@kiit.ac.in', 8695380054, 'The spoiled child of destiny, the prodigal son or just, the Dada!'),
(2105775, 'Anway Ghosh', '2002-08-06', '9.00', '2105775@kiit.ac.in', 7001370862, 'Maa, Maati, Messi!'),
(2105808, 'Pallavi Kumari', '2003-11-13', '9.40', '2105808@kiit.ac.in', 8210833498, 'Pride of Bihar,\r\nThe light of Gaya,\r\nThe beauty of flowers,\r\nand the redness of heart!'),
(2105970, 'Kumar Nishkam', '2002-04-07', '9.50', '2105970@kiit.ac.in', 9693794559, '\"Some are born great, some achieve greatness, some have greatness thrust upon them\"; It\'s me, I am the greatness they are talking about!'),
(21051102, 'Ujjawal Singh', '2002-11-20', '9.20', '21051102@kiit.ac.in', 9098690589, 'Learn and explore new things.'),
(21051406, 'Mayurakshee Sahu', '2003-06-07', '9.00', '21051406@kiit.ac.in', 9667580671, 'Pursuing B.Tech CSE in KIIT'),
(21051704, 'Abhinav Bhist', '2003-02-28', '9.30', '21051704@kiit.ac.in', 6397862219, 'Body building mah one and only passion.'),
(21052118, 'Sushen Pandey', '2003-02-21', '8.20', 'sushen21.pandey@gmail.com', 9123836810, 'Sapere Aude - Dare to know!'),
(21052247, 'Debjit Maji', '2002-10-25', '8.99', '21052247@kiit.ac.in', 9382117700, 'Trying to do better in life.'),
(21052406, 'Atika Chandel', '2004-05-11', '9.20', '21052406@kiit.ac.in', 8887560649, 'Straight from the city of Nawabs. A startup enthusiast, swimmer and writer.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `password` (`Password`);

--
-- Indexes for table `group1`
--
ALTER TABLE `group1`
  ADD PRIMARY KEY (`Roll`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Roll`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
