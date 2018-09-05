-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2016 at 08:12 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `LoginRegistration`
--

CREATE TABLE `LoginRegistration` (
  `ID` int(11) NOT NULL,
  `usernamesignup` varchar(255) NOT NULL,
  `emailsignup` varchar(255) NOT NULL,
  `passwordsignup` varchar(20) NOT NULL,
  `passwordsignup_confirm` varchar(20) NOT NULL,
  `phonesignup` int(255) NOT NULL,
  `addresssignup` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `LoginRegistration`
--

INSERT INTO `LoginRegistration` (`ID`, `usernamesignup`, `emailsignup`, `passwordsignup`, `passwordsignup_confirm`, `phonesignup`, `addresssignup`) VALUES
(24, '', '', '', '', 0, ''),
(25, 'manvir', 'manvir@yahoo.com', '123', '123', 44444444, 'ontario');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `questionid` int(10) UNSIGNED NOT NULL,
  `name` char(150) NOT NULL,
  `choice1` varchar(150) NOT NULL,
  `choice2` varchar(150) NOT NULL,
  `choice3` varchar(150) NOT NULL,
  `answer` varchar(150) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`questionid`, `name`, `choice1`, `choice2`, `choice3`, `answer`, `category`) VALUES
(14, '1. A webpage displays a picture. What tag was used to display that picture?\n', ' picture\n', 'image\n\n', 'src\n', ' img', 'HTML'),
(19, '2. <b> tag makes the enclosed text bold. What is other tag to make text bold?\r\n', ' strong\n', ' dar\n', ' black\n', ' emp\n', ''),
(20, '3. Tags and test that are not directly displayed on the page are written in _____ section.\r\n', 'html\n', 'head\n', 'title\n', 'body\n', ''),
(21, '4. <b> tag makes the enclosed text bold. What is other tag to make text bold?\n', 'strong\n', 'dar\n', 'black\n', 'emp\n', ''),
(22, '5. Tags and test that are not directly displayed on the page are written in _____ section.\n', 'html\n', 'head\n', 'title\n', 'body\n', ''),
(23, ' 6.What should be the first tag in any HTML document?\n', 'head', 'title', 'html', 'html', ''),
(24, ' 7.How can you make a bulleted list?\n', 'list', 'nl', 'ul', 'ol', ''),
(25, ' 8.What should be the first tag in any HTML document?\n', 'head', 'title', 'html', 'html', ''),
(26, '9.How can you make a bulleted list?\n', 'list', 'nl', 'ul', 'ol', ''),
(27, ' 10.Choose the correct HTML tag to make a text italic\n', 'ii', 'italics', 'i', 'italic', '');

-- --------------------------------------------------------

--
-- Table structure for table `questions2`
--

CREATE TABLE `questions2` (
  `questioned` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `choice1` varchar(255) NOT NULL,
  `choice2` varchar(255) NOT NULL,
  `choice3` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions2`
--

INSERT INTO `questions2` (`questioned`, `name`, `choice1`, `choice2`, `choice3`, `answer`) VALUES
(2, 'name?', 's', 'w', 'a', ''),
(3, 'name?', 'qw', 'w', 'e', 'm'),
(4, 'age?', '12', '32', '43', '22'),
(5, 'name?', 'qw', 'w', 'e', 'm'),
(6, 'age?', '12', '32', '43', '22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `LoginRegistration`
--
ALTER TABLE `LoginRegistration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`questionid`);

--
-- Indexes for table `questions2`
--
ALTER TABLE `questions2`
  ADD PRIMARY KEY (`questioned`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `LoginRegistration`
--
ALTER TABLE `LoginRegistration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `questionid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `questions2`
--
ALTER TABLE `questions2`
  MODIFY `questioned` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
