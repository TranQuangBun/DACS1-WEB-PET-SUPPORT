-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 02:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dacs1`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`Username`, `Password`) VALUES
('a', 'a'),
('b', 'b'),
('c', 'c'),
('d', 'd'),
('haizuka', '1'),
('linhptm', 'havana18081988');

-- --------------------------------------------------------

--
-- Table structure for table `infor`
--

CREATE TABLE `infor` (
  `Username` varchar(50) NOT NULL,
  `HoTen` varchar(100) NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `SDT` varchar(11) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infor`
--

INSERT INTO `infor` (`Username`, `HoTen`, `DiaChi`, `SDT`, `Email`) VALUES
('b', 'PTML', 'abc', '456', 'lptm@gmail.com'),
('c', 'PDH', 'abc', '4576', 'pdh@gmail.com'),
('d', 'Phan Đức Hải', '1', '1', '1'),
('a', 'HNT', 'fkjfds', '7698', 'hntfpt@mail.com'),
('haizuka', 'Phan Đức Hải', 'Hà Tĩnh', '123', 'abc@asdas'),
('linhptm', 'Phan Thị Mỹ Linh', 'ĐH CNTT - TT Việt Hàn', '0877506066', 'linhptm.21it@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `Ten` varchar(100) NOT NULL,
  `Tuoi` int(11) NOT NULL,
  `GioiTinh` varchar(10) NOT NULL,
  `TrietSan` varchar(10) NOT NULL,
  `Mau` varchar(10) NOT NULL,
  `Loai` varchar(10) NOT NULL,
  `TiemPhong` varchar(100) NOT NULL,
  `HinhAnh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`Ten`, `Tuoi`, `GioiTinh`, `TrietSan`, `Mau`, `Loai`, `TiemPhong`, `HinhAnh`) VALUES
('BimBim', 2, 'Đực', 'Có', 'DoiMoi', 'Mèo', 'DaTiemPhong', '../acesss/img/adop-9.jpeg'),
('Bom', 3, 'Đực', 'Có', 'TrangVang', 'Chó', 'DaTiemPhong', '../acesss/img/adop-7.jpeg'),
('Conan', 1, 'Đực', 'Không', 'VangDen', 'Rua', 'DaTiemPhong', '../acesss/img/adop-10.jpeg'),
('Daisy', 1, 'Cái', 'Không', 'DoiMoi', 'Mèo', 'DaTiemPhong', '../acesss/img/adop-8.jpeg'),
('Kem', 1, 'Đực', 'Không', 'Vang', 'Chó', 'DaTiemPhong', '../acesss/img/adop-1.jpeg'),
('Lotus', 3, 'Cái', 'Không', 'TrangVang', 'Chó', 'DaTiemPhong', '../acesss/img/adop-4.jpeg'),
('Miu Miu', 1, 'Cái', 'Có', 'NhiThe', 'Mèo', 'DaTiemPhong', '../acesss/img/adop-2.jpg'),
('Mướp', 2, 'Đực', 'Không', 'NhiThe', 'Mèo', 'DaTiemPhong', '../acesss/img/adop-3.jpeg'),
('Sâu', 1, 'Cái', 'Không', 'NhiThe', 'Mèo', 'DaTiemPhong', '../acesss/img/adop-6.jpeg'),
('Xúc Xích', 4, 'Cái', 'Chưa rõ', 'Nau', 'Chó', 'DaTiemPhong', '../acesss/img/adop-5.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`Ten`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
