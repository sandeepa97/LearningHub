-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2019 at 01:15 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `question_id` int(10) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `correct` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES
(1, 0, 'Vacuum Tubes', 0),
(2, 0, 'Transistors', 0),
(3, 0, 'Micro Processors', 0),
(4, 0, 'Integrated Circuits', 1),
(5, 1, '1000', 1),
(6, 1, '111', 0),
(7, 1, '100', 0),
(8, 1, '1110', 0);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question_id` int(10) NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_id`, `question`) VALUES
(1, 0, '__________ is the 3rd computer generation.'),
(2, 1, '8 decimal value in BCD is...,');

-- --------------------------------------------------------

--
-- Table structure for table `userl`
--

CREATE TABLE `userl` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `experiance` int(30) NOT NULL,
  `knowledge` varchar(100) NOT NULL,
  `pic` longblob NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userl`
--

INSERT INTO `userl` (`id`, `title`, `fname`, `lname`, `gender`, `qualification`, `experiance`, `knowledge`, `pic`, `email`, `password`) VALUES
(1, 'male', 'Sandeepa', 'Umayanga', 'male', 'PhD', 2, 'Very Good', 0xe280aa2b3934203737203932382034303736e280ac2032303138303730345f3130313834362e6a7067, 'lokusandeepa@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `title` varchar(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bday` date NOT NULL,
  `email` varchar(40) NOT NULL,
  `country` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pic` longblob NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `title`, `fname`, `lname`, `gender`, `bday`, `email`, `country`, `city`, `address`, `pic`, `password`) VALUES
(1, 'Mr', 'Sandeepa', 'LB', 'male', '1997-04-14', 'sandeepa@gmail.com', 'LK', 'Kurunegala', '25/60,Lakeround, Kurunegala', 0xe280aa2b3934203737203932382034303736e280ac2032303138303730345f3130313834362e6a7067, '8cb2237d0679ca88db6464eac60da96345513964'),
(2, 'Mr', '[removed]var x;[removed]', 'dfsdf', 'male', '2018-10-15', 'marif@gmail.com', 'LK', 'dzzc', 'dsfsdfsd', 0xe280aa2b3934203737203932382034303736e280ac2032303138303730345f3130313834362e6a7067, '8cb2237d0679ca88db6464eac60da96345513964'),
(3, 'Mr', 'chamal', 'Rupasinghe', 'male', '2018-10-16', 'chamal@gmail.com', 'LK', 'kururnea;lk', 'jurunegala', 0xe280aa2b3934203737203932382034303736e280ac2032303138303730345f3130313834362e6a7067, '8cb2237d0679ca88db6464eac60da96345513964');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userl`
--
ALTER TABLE `userl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userl`
--
ALTER TABLE `userl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
