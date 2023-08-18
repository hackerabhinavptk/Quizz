-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2023 at 11:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_quizz`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajax_table`
--

CREATE TABLE `ajax_table` (
  `id` int(12) NOT NULL,
  `first_name` text DEFAULT NULL,
  `last_name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ajax_table`
--

INSERT INTO `ajax_table` (`id`, `first_name`, `last_name`, `email`, `address`) VALUES
(2, 'Abhinav mmm', 'choudhary', 'aabhinav802@gmail.com', 'ptk'),
(4, 'Prabh Kaur', 'kaur', 'prabh@gmail.com', 'ludhiana');

-- --------------------------------------------------------

--
-- Table structure for table `ajax_users`
--

CREATE TABLE `ajax_users` (
  `first_name` varchar(255) DEFAULT NULL,
  `id` int(12) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `age` int(12) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ajax_users`
--

INSERT INTO `ajax_users` (`first_name`, `id`, `last_name`, `email`, `age`, `address`) VALUES
('Abhinav abhi', 24, 'choudhary', 'Nikita@garfield.biz', 565, 'hfjdgvdshvhjbjh'),
('prabh preet singh', 25, 'bhupinder', 'Nikita@garfield.biz', 34, 'patna sahib'),
('aman aman aman ', 29, 'gupta', 'aman@123gmail.com', 9, 'ludhiana'),
('ritish mahajan', 30, 'mahajan', 'ritish@123gmail.com', 90, 'ludhiana'),
('mohit mahajan', 31, 'mahajan', 'mohit@123gmail.com', 49, 'ludhiana'),
('yadvinder sharma', 32, 'sharma', 'yadvinder@123gmail.com', 42, 'ludhiana'),
('jatin sharma', 33, 'sharma', 'jatin@123gmail.com', 56, 'ludhiana');

-- --------------------------------------------------------

--
-- Table structure for table `app_questions`
--

CREATE TABLE `app_questions` (
  `id` int(12) NOT NULL,
  `question` text DEFAULT NULL,
  `option1` text DEFAULT NULL,
  `option2` text DEFAULT NULL,
  `option3` text DEFAULT NULL,
  `option4` text DEFAULT NULL,
  `rightanswer` text DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app_questions`
--

INSERT INTO `app_questions` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `rightanswer`, `created_date`, `updated`) VALUES
(15, 'Who is the CEO of tesla?', 'E', 'Jhny ', 'SHAAM', 'Modi', 'Elon Musk', '2023-04-25 18:54:07', 0),
(17, 'which country is biggest in size?', 'Russia', 'Indonasia', 'Afganistan', 'Moscow', 'Russia', '2023-04-26 13:51:07', 0),
(18, 'Who is the best employee of LN webworks?', 'Bhupinder', 'Mohit', 'Ritish', 'Prabh', 'Ritish', '2023-04-26 13:58:47', 0),
(20, 'What color is an apple?', 'white', 'red', 'yellow', 'green', 'red', '2023-05-13 11:04:41', 0),
(21, 'Which animal is known for its long neck?', 'Giraffe', 'lion', 'elephant', 'sheep', 'Giraffe', '2023-05-13 11:07:49', 0),
(22, 'What is the capital of France?', 'Delhi', 'Paris', 'washington', 'islamabaad', 'Paris', '2023-05-13 11:10:58', 0),
(23, 'Which month of the year has only 28 days?', 'february', 'march', 'june', 'july', 'february', '2023-05-13 11:12:11', 0),
(24, 'How many sides does a triangle have?', 'four', 'three', 'two', 'five', 'three', '2023-05-13 11:12:43', 0),
(25, 'Which planet is closest to the sun?', 'mercury', 'earth', 'jupiter', 'saturn', 'mercury', '2023-05-13 11:17:53', 0),
(26, 'What is the currency of Japan?', 'yen', 'rupee', 'dollar', 'yuvan', 'yen', '2023-05-13 11:18:50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `app_users`
--

CREATE TABLE `app_users` (
  `id` int(12) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `user_role` int(12) NOT NULL DEFAULT 2,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT current_timestamp(),
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app_users`
--

INSERT INTO `app_users` (`id`, `first_name`, `last_name`, `phone`, `email`, `password`, `user_role`, `created_date`, `updated_date`, `image`) VALUES
(82, 'Abhinav', 'Choudhary', '8847499968', 'aabhinav802@gmail.com', 'MTIzNDU=', 1, '2023-05-10 14:56:20', '2023-05-10 14:56:20', 'a:1:{i:0;s:36:\"lucas-favre-JnoNcfFwrNA-unsplash.jpg\";}'),
(83, 'Bhupinder', 'karakoti', '9773983822', 'bhupinder@gmail.com', 'NTQzMjE=', 2, '2023-05-10 15:00:38', '2023-05-10 15:00:38', 'a:1:{i:0;s:38:\"melissa-askew-8n00CqwnqO8-unsplash.jpg\";}'),
(84, 'Mohit', 'kumar', '9788378499', 'mohit@gmail.com', 'NTQzMjE=', 2, '2023-05-10 15:03:03', '2023-05-10 15:03:03', 'a:1:{i:0;s:37:\"joshua-earle-9idqIGrLuTE-unsplash.jpg\";}'),
(85, 'Panckaj', 'sood', '8676786', 'panckaj@gmail.com', 'bGVnZW5k', 2, '2023-05-10 15:05:06', '2023-05-10 15:05:06', 'a:1:{i:0;s:41:\"fabio-comparelli-uq2E2V4LhCY-unsplash.jpg\";}'),
(86, 'Nyaan', 'sharma', '7878873321', 'Nyaan@gmail.com', 'NTQzMjE=', 2, '2023-05-10 15:06:44', '2023-05-10 15:06:44', 'a:1:{i:0;s:38:\"melissa-askew-8n00CqwnqO8-unsplash.jpg\";}'),
(87, 'Aman', 'singh', '987589796', 'aman@gmail.com', 'NTQzMjE=', 2, '2023-05-10 15:07:43', '2023-05-10 15:07:43', 'a:1:{i:0;s:36:\"lucas-favre-JnoNcfFwrNA-unsplash.jpg\";}'),
(88, 'Ritish', 'sharma', '787675475', 'ritish@gmail.com', 'bGVnZW5k', 2, '2023-05-10 15:08:32', '2023-05-10 15:08:32', 'a:1:{i:0;s:41:\"fabio-comparelli-uq2E2V4LhCY-unsplash.jpg\";}');

-- --------------------------------------------------------

--
-- Table structure for table `jquery`
--

CREATE TABLE `jquery` (
  `id` int(12) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `rollno` varchar(12) DEFAULT NULL,
  `Class` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `age` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jquery`
--

INSERT INTO `jquery` (`id`, `name`, `rollno`, `Class`, `address`, `age`) VALUES
(2, 'bhupinder', '501', 'Bsc', 'moon', 150),
(140, 'prabh', '23', 'ist', 'ptk', 5677),
(180, 'jbjhk', 'hk', 'bkhj', 'kk', 78);

-- --------------------------------------------------------

--
-- Table structure for table `quizz_marks`
--

CREATE TABLE `quizz_marks` (
  `id` int(12) NOT NULL,
  `total_marks` int(12) DEFAULT NULL,
  `wrong_questions` int(12) DEFAULT NULL,
  `right_questions` int(12) DEFAULT NULL,
  `created_date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_data` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quizz_marks`
--

INSERT INTO `quizz_marks` (`id`, `total_marks`, `wrong_questions`, `right_questions`, `created_date`, `updated_data`) VALUES
(1, 2, 1, 2, '2023-04-27 16:09:24.111484', '2023-04-27 16:09:24.111484'),
(2, 1, 2, 1, '2023-04-27 16:29:07.158169', '2023-04-27 16:29:07.158169'),
(3, 1, 2, 1, '2023-04-28 15:46:39.679799', '2023-04-28 15:46:39.679799'),
(4, 3, 1, 3, '2023-05-01 20:48:51.158877', '2023-05-01 20:48:51.158877');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajax_table`
--
ALTER TABLE `ajax_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ajax_users`
--
ALTER TABLE `ajax_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_questions`
--
ALTER TABLE `app_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_users`
--
ALTER TABLE `app_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jquery`
--
ALTER TABLE `jquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quizz_marks`
--
ALTER TABLE `quizz_marks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ajax_table`
--
ALTER TABLE `ajax_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ajax_users`
--
ALTER TABLE `ajax_users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `app_questions`
--
ALTER TABLE `app_questions`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `app_users`
--
ALTER TABLE `app_users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `jquery`
--
ALTER TABLE `jquery`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `quizz_marks`
--
ALTER TABLE `quizz_marks`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
