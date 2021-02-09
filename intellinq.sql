-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2021 at 11:26 PM
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
  `answer` varchar(25) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `code_answer`, `id_question`, `answer`, `images`) VALUES
(13, 'a', 1, 'drawing', NULL),
(14, 'b', 1, 'writing', NULL),
(15, 'c', 1, 'stirring', NULL),
(16, 'd', 1, 'eating', NULL),
(17, 'a', 2, ' H R G S T', NULL),
(18, 'b', 2, ' R I L S A', NULL),
(19, 'c', 2, 'T O O M T', NULL),
(20, 'd', 2, 'W Q R G S', NULL),
(21, 'a', 3, 'breakfast', NULL),
(22, 'b', 3, 'soup', NULL),
(23, 'c', 3, 'coffee', NULL),
(24, 'd', 3, 'time', NULL),
(25, 'a', 4, ' mountain : rails', NULL),
(26, 'b', 4, 'subway : underground', NULL),
(27, 'c', 4, ' tunnel : mountain', NULL),
(28, 'd', 4, 'water : rock', NULL),
(29, 'a', 5, ' Intel allegiance', NULL),
(30, 'b', 5, 'Elegant quote', NULL),
(31, 'c', 5, 'Tinted glint', NULL),
(32, 'd', 5, 'Quilt tent', NULL),
(33, 'a', 6, '37', NULL),
(34, 'b', 6, '45', NULL),
(35, 'c', 6, '43', NULL),
(36, 'd', 6, '39', NULL),
(37, 'a', 7, '25', NULL),
(38, 'b', 7, '5', NULL),
(39, 'c', 7, '1', NULL),
(40, 'd', 7, '10', NULL),
(43, 'a', 8, 'TRUE', NULL),
(44, 'b', 8, 'FALSE', NULL),
(48, 'a', 9, '12', NULL),
(49, 'b', 9, '11', NULL),
(50, 'c', 9, '8', NULL),
(51, 'd', 9, '7', NULL),
(52, 'a', 10, '8', NULL),
(53, 'b', 10, '5', NULL),
(54, 'c', 10, '10', NULL),
(55, 'd', 10, '12', NULL),
(56, 'a', 11, '100', NULL),
(57, 'b', 11, '132', NULL),
(58, 'c', 11, '145', NULL),
(59, 'd', 11, '144', NULL),
(60, 'a', 12, 'Monday', NULL),
(61, 'b', 12, 'Tuesday', NULL),
(62, 'c', 12, 'Wednesday', NULL),
(63, 'd', 12, 'Thursday', NULL),
(64, 'a', 13, ' voice', NULL),
(65, 'b', 13, 'bald', NULL),
(66, 'c', 13, ' bloat', NULL),
(67, 'd', 13, 'castle', NULL),
(68, 'a', 14, 'some drones are teachers', NULL),
(69, 'b', 14, 'no runners are attendees', NULL),
(70, 'c', 14, 'teachers are not attendee', NULL),
(71, 'd', 14, 'all runners are teachers', NULL),
(72, 'a', 15, 'yes', NULL),
(73, 'b', 15, 'no', NULL),
(74, 'c', 15, 'uncertain', NULL),
(75, 'a', 16, NULL, '565641481746.png'),
(76, 'b', 16, NULL, '414017530387.png'),
(77, 'c', 16, NULL, '460090401392.png'),
(78, 'd', 16, NULL, '931777783215.png'),
(79, 'a', 17, NULL, '530306290890.png'),
(80, 'b', 17, NULL, '318727526598.png'),
(81, 'c', 17, NULL, '474244032797.png'),
(82, 'd', 17, NULL, '450573546243.png'),
(83, 'a', 18, NULL, '246132008281.png'),
(84, 'b', 18, NULL, '320111921478.png'),
(85, 'c', 18, NULL, '653509085786.png'),
(86, 'd', 18, NULL, '997314784675.png'),
(87, 'a', 19, NULL, '777061883932.png'),
(88, 'b', 19, NULL, '218694744036.png'),
(89, 'c', 19, NULL, '948918138999.png'),
(90, 'd', 19, NULL, '930246764863.png'),
(91, 'a', 20, NULL, '808755584459.png'),
(92, 'b', 20, NULL, '750140367872.png'),
(93, 'c', 20, NULL, '696169728010.png'),
(94, 'd', 20, NULL, '708842448964.png');

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
(4, 17, 'sb-polid@personal.example.com', '2021-02-09 21:35:34', 'true', '1700'),
(5, 17, 'sb-polid@personal.example.com', '2021-02-09 22:25:40', 'true', '850');

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
(15, 'If the first two statements are true, is the final statement true? <br>  *Mrs. Jones is responsible for collecting all of the fifth grade classes’ money for the school fundraiser. <br> *Sally attends Mrs. Jones’ school. <br> *Mrs. Jones is responsible for collecting Sally’s money for the fundraiser.', 'c'),
(16, 'In the figures shown below, one of the shapes (A-D) is identical to the first figure but has been rotated. Which figure is identical to the first?', 'a'),
(17, 'In the figures shown below, one of the shapes (A-D) is identical to the first figure but has been rotated. Which figure is identical to the first? ', 'd'),
(18, 'In the figures shown below, one of the shapes (A-D) is identical to the first figure but has been rotated. Which figure is identical to the first?', 'b'),
(19, 'Which pattern can be folded to make the cube shown?', 'b'),
(20, 'Which pattern can be folded to make the cube shown?', 'a');

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
(9, 17, 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `famous_people`
--
ALTER TABLE `famous_people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
