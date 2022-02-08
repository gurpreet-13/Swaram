-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 07:46 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swaram`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `name`, `about`, `image`) VALUES
(1, 'Harmonium Course', 'Learn to play this incredible instrument in this course with help of exercises, technical information, and a lot more. Learn about the history and development, mechanism, and types of the harmonium. Discussion on doing \"riyaz\" sessions effectively.Learn b', 'img/5.jpg'),
(3, 'Piano Course', 'Learn Piano in WEEKS not years. Play-By-Ear & learn to Read Music. Pop, Blues, Jazz, Ballads, Improvisation, Classical. You will start to improvise using the pentatonic and blues scales. Have fun creating your own music with the BONUS improvisation sectio', 'img/2.jpg'),
(4, 'Tabla Course', 'A Complete Beginner\'s Guide on How to Play the Tabla. Become a Tabla player with the most Logical step-by-step Method. How to play Taal Rupak and use it in a song. Practice phrases for improving the basic words', 'img/3.jpg'),
(5, 'Flute Course', 'Move beyond beginner with MusicProfessor\'s intermediate Flute course. A year\'s worth of lessons in just a few hours! Recognize and play nearly every note on the flute. You’ll learn the proper posture for getting the best sound. You’ll play these songs as ', 'img/4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`user_id`, `name`, `comment`, `rating`) VALUES
(2, 'Gurpreet Kaur Chawla', 'It is an awesome institute with excellent teachers', '4.5'),
(2, 'Vijay Arora', 'Best classes with best faculty', '5'),
(2, 'Gurpreet Kaur Chawla', '', ''),
(2, 'Gurpreet Kaur Chawla', 'It is an awesome institute with excellent teachers', '4.5'),
(4, 'Sanskar', 'Good faculty', '5'),
(4, 'Nikhil', 'Best classes with best faculty', '4.5'),
(2, 'Jappu', 'Good faculty', '5'),
(2, 'Gk', 'Good faculty', '2');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `user_id` int(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `re_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `name`, `email_id`, `contact`, `password`, `re_password`) VALUES
(1, 'Gurpreet Kaur Chawla', 'cgurpreetkaur852@gmail.com', '54657567544', '$2y$10$thisismywayforpassworOoFc.9yONfab36uT9WB//UYy3/jMev6i', '$2y$10$thisismywayforpassworOoFc.9yONfab36uT9WB//UYy3/jMev6i'),
(2, 'Gk', 'gk@gmail.com', '54657567544', '$2y$10$thisismywayforpassworOoFc.9yONfab36uT9WB//UYy3/jMev6i', '$2y$10$thisismywayforpassworOoFc.9yONfab36uT9WB//UYy3/jMev6i'),
(3, 'Vijay', 'vijay@gmail.com', '5475765754', '$2y$10$thisismywayforpassworOW8DsdRILjR0hqBggd1bfAfeEE0LoOB6', '$2y$10$thisismywayforpassworOW8DsdRILjR0hqBggd1bfAfeEE0LoOB6'),
(4, 'Sanskar', 's@gmail.com', '5475765754', '$2y$10$thisismywayforpassworOCPY22Yq6FqhxSopNqMrhBCOOJglUGB.', '$2y$10$thisismywayforpassworOCPY22Yq6FqhxSopNqMrhBCOOJglUGB.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `registration` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
