-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2018 at 08:17 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `registeration`
--

CREATE TABLE `registeration` (
  `name` varchar(16) NOT NULL,
  `num` varchar(16) NOT NULL,
  `address` varchar(16) NOT NULL,
  `gender` varchar(16) NOT NULL,
  `year` varchar(16) NOT NULL,
  `section` varchar(16) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` varchar(16) NOT NULL,
  `mobile` bigint(16) NOT NULL,
  `bgroup` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`name`, `num`, `address`, `gender`, `year`, `section`, `email`, `dob`, `mobile`, `bgroup`) VALUES
('prasanna', '315126510188', 'vskp', 'F', 'first year', 'A', '123@gmail.com', '1989-02-16', 123456789, 'A+'),
('lavanya', '315126510184', 'vskp', 'female', '3', 'c', 'deepti@gmail.com', '01-07-19997', 9346315470, 'O+'),
('prasanna', '315126510188', 'vskp', 'F', 'third year', 'C', 'leeleprasanna1998@gmail.com', '1998-06-01', 9705937488, 'O+'),
('Murthy', '315126510198', 'vskp', 'M', 'third year', 'C', 'murthykallempudi023@gmail.com', '1997-07-07', 9600957190, 'O+'),
('RAJU', '31514265058', 'VSKP', 'M', 'third year', 'C', 'raju123@gmail.com', '1996-05-06', 9600957190, 'A+'),
('kuttan', '315116510155', 'vskp', 'M', 'third year', 'C', 'kittukuttan@gmail.com', '1995-07-24', 8897617901, 'B+'),
('SAI', '315140810198', 'VSKP', 'M', 'third year', 'C', 'saibabu023@gmail.com', '1996-07-04', 8897672781, 'A-'),
('SUDHARSHAN', '315126510001', 'VSKP', 'M', 'third year', 'C', 'keelusudharshan@gmail.com', '1997-08-05', 9393010759, 'AB+'),
('SHYAM', '1038202915', 'VSKP', 'M', 'third year', 'C', 'shyam123@gmail.com', '1997-11-20', 8309183828, 'B+'),
('prasanna', '315126510188', 'vskp', 'F', 'third year', 'C', '123@gmail.com', '1998-06-24', 123456789, 'O+'),
('sanjay', '315126510189', 'vskp', 'M', 'third year', 'C', 'sanjay@gmail.com', '1996-10-29', 8341543918, 'A+'),
('VIDYA', '31514265058', 'VSKP', 'M', 'third year', 'C', 'vidya023@gmail.com', '1997-08-07', 784569321, 'O+'),
('VENKATESH', '315126510209', 'VSKP', 'M', 'third year', 'C', 'venkatesh123@gmail.com', '1998-05-13', 9440464827, 'B+');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
