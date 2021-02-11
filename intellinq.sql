-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2021 at 01:49 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intellinq`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin12123');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `code_answer` char(4) NOT NULL,
  `id_question` int(25) NOT NULL,
  `answer` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `code_answer`, `id_question`, `answer`) VALUES
(13, 'a', 1, 'drawing'),
(14, 'b', 1, 'writing'),
(15, 'c', 1, 'stirring'),
(16, 'd', 1, 'eating'),
(17, 'a', 2, ' H R G S T'),
(18, 'b', 2, ' R I L S A'),
(19, 'c', 2, 'T O O M T'),
(20, 'd', 2, 'W Q R G S'),
(21, 'a', 3, 'breakfast'),
(22, 'b', 3, 'soup'),
(23, 'c', 3, 'coffee'),
(24, 'd', 3, 'time'),
(25, 'a', 4, ' mountain : rails'),
(26, 'b', 4, 'subway : underground'),
(27, 'c', 4, ' tunnel : mountain'),
(28, 'd', 4, 'water : rock'),
(29, 'a', 5, ' Intel allegiance'),
(30, 'b', 5, 'Elegant quote'),
(31, 'c', 5, 'Tinted glint'),
(32, 'd', 5, 'Quilt tent'),
(33, 'a', 6, '37'),
(34, 'b', 6, '45'),
(35, 'c', 6, '43'),
(36, 'd', 6, '39'),
(37, 'a', 7, '25'),
(38, 'b', 7, '5'),
(39, 'c', 7, '1'),
(40, 'd', 7, '10'),
(43, 'a', 8, 'TRUE'),
(44, 'b', 8, 'FALSE'),
(48, 'a', 9, '12'),
(49, 'b', 9, '11'),
(50, 'c', 9, '8'),
(51, 'd', 9, '7'),
(52, 'a', 10, '8'),
(53, 'b', 10, '5'),
(54, 'c', 10, '10'),
(55, 'd', 10, '12'),
(56, 'a', 11, '100'),
(57, 'b', 11, '132'),
(58, 'c', 11, '145'),
(59, 'd', 11, '144'),
(60, 'a', 12, 'Monday'),
(61, 'b', 12, 'Tuesday'),
(62, 'c', 12, 'Wednesday'),
(63, 'd', 12, 'Thursday'),
(64, 'a', 13, ' voice'),
(65, 'b', 13, 'bald'),
(66, 'c', 13, ' bloat'),
(67, 'd', 13, 'castle'),
(68, 'a', 14, 'some drones are teachers'),
(69, 'b', 14, 'no runners are attendees'),
(70, 'c', 14, 'teachers are not attendee'),
(71, 'd', 14, 'all runners are teachers'),
(72, 'a', 15, 'yes'),
(73, 'b', 15, 'no'),
(74, 'c', 15, 'uncertain');

-- --------------------------------------------------------

--
-- Table structure for table `famous_people`
--

CREATE TABLE `famous_people` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `score` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `mail` varchar(55) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `pay` varchar(25) NOT NULL DEFAULT 'false',
  `score` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `age`, `mail`, `created_date`, `pay`, `score`) VALUES
(6, 17, 'sb-polid@personal.example.com', '2021-02-11 10:42:57', 'true', '283'),
(7, 17, 'name@personal.example.com', '2021-02-11 10:42:57', 'true', '283');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(10000) NOT NULL,
  `answer` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer`) VALUES
(1, 'Book is to Reading as Fork is to:', 'd'),
(2, 'Which of the following can be arranged into a 5-letter English word?', 'c'),
(3, 'Evening is to Morning as Dinner is to', 'a'),
(4, 'Bridge is to River as ? Is to ?', 'c'),
(5, 'I.Q. stands for \"Intelligence Quotient.\" Which of the following phrases contains only letters found in the meaning of the acronym, I.Q.?', 'd'),
(6, '3, 7, 13, 21, 31. What number comes next in the sequence?', 'c'),
(7, 'What number is one quarter of one tenth of one fifth of 200?', 'c'),
(8, 'Three of the following numbers add up to twenty-seven. 6, 22, 13, 17, 14, 5', 'b'),
(9, 'Which number best completes the pattern? 17, 12, 7,3, 7, 11,21, 16, (?)', 'b'),
(10, ' If 10 people can do a piece of work in 5 days, working 2 hours a day, how long will 2 people take to do the same work, working 5 hours a day?', 'b'),
(11, 'At a conference, 12 members shook hands with each other before & after the meeting. How many total number of hand shakes occurred?', 'b'),
(12, 'The day after the day after tomorrow is four days before Monday. What day is it today?', 'a'),
(13, '6121135 is to flame as 21215120 is to ?', 'c'),
(14, 'Which conclusion follows from the statements with absolute certainty?None of the runners is a teacher.All of the attendees are runners.', 'd'),
(15, 'If the first two statements are true, is the final statement true? <br>  *Mrs. Jones is responsible for collecting all of the fifth grade classes’ money for the school fundraiser. <br> *Sally attends Mrs. Jones’ school. <br> *Mrs. Jones is responsible for collecting Sally’s money for the fundraiser.', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `iq_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `age`, `iq_score`) VALUES
(1, 18, 8),
(2, 18, 8),
(3, 16, 4),
(4, 17, 7),
(5, 17, 4),
(6, 17, 1),
(7, 16, 1),
(8, 18, 0),
(9, 17, 2),
(10, 17, 1),
(11, 18, 1),
(12, 18, 1),
(13, 17, 0),
(14, 17, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `famous_people`
--
ALTER TABLE `famous_people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `famous_people`
--
ALTER TABLE `famous_people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
