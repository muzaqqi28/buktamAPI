-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2020 at 12:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buktam2020`
--

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `todo_id` int(111) NOT NULL,
  `kepada` varchar(111) NOT NULL,
  `todo_nama` varchar(111) NOT NULL,
  `todo_organisasi` varchar(111) NOT NULL,
  `todo_phone` varchar(111) NOT NULL,
  `todo_foto` varchar(111) NOT NULL,
  `todo_email` varchar(111) NOT NULL,
  `todo_scedule` varchar(111) NOT NULL,
  `todo_keterangan` varchar(111) NOT NULL,
  `todo_jawaban` varchar(111) NOT NULL,
  `todo_date` varchar(111) NOT NULL,
  `todo_time` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`todo_id`, `kepada`, `todo_nama`, `todo_organisasi`, `todo_phone`, `todo_foto`, `todo_email`, `todo_scedule`, `todo_keterangan`, `todo_jawaban`, `todo_date`, `todo_time`) VALUES
(104, 'Depri', 'Ahmad Muzaqqi', 'UM', 'ahmadmuzaqqi.com', 'NULL', 'ahmadm@uzaqqi.com', '9/11/2020 3:00 PM', 'Rapat 1', '', 'Friday, September 11, 2020', '15:39'),
(105, 'Ahmad Muzaqqi', 'Depri', 'Pdam', 'depri@gmail.com', 'NULL', 'depri@gmail.com', '9/11/2020 3:30 PM', 'Rapat 1', '', 'Friday, September 11, 2020', '15:40'),
(106, 'Ahmad Muzaqqi', 'wggef', 'egeg', 'dvgeg', 'NULL', 'dvgeg', '9/11/2020 3:49 PM', 'wfwfwff', '', 'Friday, September 11, 2020', '15:49'),
(107, 'Depri', '3f3f3', '3f3feff', 'scsfefegwheg', 'NULL', 'scsfefegwheg', '9/11/2020 3:54 PM', 'rgrgg3g', '', 'Friday, September 11, 2020', '15:54'),
(108, 'Hasan Rosidi', 'svec', 'eg', 'egeg', 'NULL', 'egeg', '9/11/2020 3:55 PM', 'ecgeeg', '', 'Friday, September 11, 2020', '15:55'),
(109, 'Hasan Rosidi', 'retrgr', 'gege', 'ge', 'NULL', 'ge', '9/11/2020 3:59 PM', 'efefw', '', 'Friday, September 11, 2020', '15:59'),
(110, 'Hasan Rosidi', 'rgrg', 'egegeg', 'dgegeg@gmail.com', 'NULL', 'dgegeg@gmail.com', '9/11/2020 4:02 PM', 'dgege', '', 'Friday, September 11, 2020', '16:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `level` varchar(111) NOT NULL,
  `nama` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `level`, `nama`) VALUES
(11111, 'depri@gmail.com', '11111', 'karyawan', 'Depri'),
(11112, 'zaqqi@gmail.com', '11112', 'karyawan', 'Muzaqqi'),
(11113, 'ahmad@gmail.com', '11113', 'resepsionis', 'Ahmad Muzaqqi'),
(11114, 'hasan@gmail.com', '11114', 'karyawan', 'Hasan Rosidi'),
(11115, 'jat@gmail.com', '11115', 'karyawan', 'Jatmiko'),
(11116, 'tian@gmail.com', '11116', 'karyawan', 'Tian Rizky'),
(11117, 'dian@gmail.com', '11117', 'karyawan', 'Dian Fitri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`todo_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `todo_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
