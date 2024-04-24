-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2023 at 08:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gaji`
--

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `idGaji` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `jabatan` enum('Manager','Supervisor','Staff') NOT NULL,
  `alamat` text NOT NULL,
  `nominalGaji` int(11) NOT NULL,
  `bonus` int(11) NOT NULL,
  `totalGaji1` int(11) NOT NULL,
  `pph` int(11) NOT NULL,
  `totalgaji2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`idGaji`, `nama`, `nip`, `jabatan`, `alamat`, `nominalGaji`, `bonus`, `totalGaji1`, `pph`, `totalgaji2`) VALUES
(50, 'Puthut Aditama', '09547387', 'Manager', 'Jl. tangga nada', 12000000, 6000000, 18000000, 900000, 17100000),
(53, 'Wak Benzema', '5677337', 'Manager', 'Jl. Al-Ittihad', 12000000, 6000000, 18000000, 900000, 17100000),
(54, 'Paduka Braithwaite', '23415', 'Supervisor', 'Jl. Barca ', 6000000, 2400000, 8400000, 420000, 7980000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`idGaji`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gaji`
--
ALTER TABLE `gaji`
  MODIFY `idGaji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
