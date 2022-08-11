-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 04:13 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutoria`
--

-- --------------------------------------------------------

--
-- Table structure for table `talleres`
--

CREATE TABLE `talleres` (
  `id` int(11) NOT NULL,
  `nombre_taller` varchar(200) NOT NULL,
  `fecha_taller` date NOT NULL,
  `hora_taller` time NOT NULL,
  `ponente` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `talleres`
--

INSERT INTO `talleres` (`id`, `nombre_taller`, `fecha_taller`, `hora_taller`, `ponente`, `created_at`) VALUES
(1, 'Charla sobre el control de la ansiedad', '2022-09-05', '10:00:00', 'Lic. Rosario Montes', '2022-08-11 14:03:18');

-- --------------------------------------------------------

--
-- Table structure for table `tutorias`
--

CREATE TABLE `tutorias` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `ciclo` varchar(4) NOT NULL,
  `codigo_matricula` varchar(10) NOT NULL,
  `celular` varchar(9) NOT NULL,
  `correo_institucional` varchar(50) NOT NULL,
  `motivo` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutorias`
--

INSERT INTO `tutorias` (`id`, `nombres`, `apellidos`, `dni`, `ciclo`, `codigo_matricula`, `celular`, `correo_institucional`, `motivo`, `created_at`) VALUES
(7, 'YDA', 'QUISPE GARCIA', '42345222', 'VII', '2019141031', '987987987', '2019141030@unh.edu.pe', 'Carla de algo...', '2022-08-09 20:53:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(70) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `rol`) VALUES
(2, 'Jefe de tutoría', 'admin', '$2y$10$t6/rmSB8svOdvbj3vi2Zee2oxOQwb/lyFAFjtgY2B1INvD6Dvp0Ra', 'Administrador');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `talleres`
--
ALTER TABLE `talleres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorias`
--
ALTER TABLE `tutorias`
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
-- AUTO_INCREMENT for table `talleres`
--
ALTER TABLE `talleres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tutorias`
--
ALTER TABLE `tutorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
