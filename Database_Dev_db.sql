-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 07:53 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dormitory system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cus_id` int(5) NOT NULL,
  `idNumber` varchar(13) NOT NULL,
  `Cus_Email` varchar(25) CHARACTER SET utf8 NOT NULL,
  `Cus_username` varchar(5) CHARACTER SET utf8 NOT NULL,
  `Cus_password` varchar(5) CHARACTER SET utf8 NOT NULL,
  `Road` varchar(30) CHARACTER SET utf8 NOT NULL,
  `District` varchar(25) CHARACTER SET utf8 NOT NULL,
  `Province` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Room_No` varchar(3) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cus_id`, `idNumber`, `Cus_Email`, `Cus_username`, `Cus_password`, `Road`, `District`, `Province`, `Room_No`) VALUES
(167, '7150060037415', 'Mallika@outlook.com', 'A_202', '202A', 'Laem Chabang', 'Bang Lamung', 'ChonBuri', '202'),
(168, '0789001445012', 'Poppy@hotmail.com', 'A_109', '109A', 'romklao', 'ladkrabang', 'Bangkok', '109'),
(169, '1104200145400', 'kong@hotmail.com', 'A_201', '201A', 'Komak', 'Kokut', 'Trat', '201'),
(170, '1006023325980', 'krit@yahoo.com', 'A_210', '210A', 'Lad Yindi', 'HatYai', 'Song Khla', '210'),
(173, '7840012365234', 'Somsak@hotmail.com', 'A_205', '205A', 'Chaokunthahan', 'Ladkrabang', 'Bangkok', '205'),
(174, '0123456789120', 'test@hotmail.com', 'A_501', '501A', 'Ladkrabang', 'ladkrabang', 'Bangkok', '501');

-- --------------------------------------------------------

--
-- Table structure for table `customer_tel`
--

CREATE TABLE `customer_tel` (
  `Cus_id` int(5) NOT NULL,
  `Cus_tel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_tel`
--

INSERT INTO `customer_tel` (`Cus_id`, `Cus_tel`) VALUES
(167, '0814156352'),
(168, '0941236840'),
(169, '0817135623'),
(170, '0601237141'),
(173, '0987586201'),
(174, '0000000000');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Emp_id` int(5) NOT NULL,
  `Emp_name` varchar(20) NOT NULL,
  `Emp_lastname` varchar(20) NOT NULL,
  `Emp_username` varchar(5) NOT NULL,
  `Emp_password` int(5) NOT NULL,
  `Emp_Email` varchar(25) NOT NULL,
  `Emp_Tel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Emp_id`, `Emp_name`, `Emp_lastname`, `Emp_username`, `Emp_password`, `Emp_Email`, `Emp_Tel`) VALUES
(206, 'ดวงใจ', 'ปานแก้ว', 'admin', 1234, 'doungjai@hotmail.com', '0955743698'),
(207, 'กรกมล', 'บางโพธิ์', 'admin', 12345, 'kornkamol@hotmail.com', '0877569872');

-- --------------------------------------------------------

--
-- Table structure for table `idnumber`
--

CREATE TABLE `idnumber` (
  `idNumber` varchar(13) CHARACTER SET utf8 NOT NULL,
  `Cus_name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Cus_lastname` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `idnumber`
--

INSERT INTO `idnumber` (`idNumber`, `Cus_name`, `Cus_lastname`) VALUES
('0123456789120', 'test1', 'test1'),
('0789001445012', 'ปัญญา', 'พาสุข'),
('1006023325980', 'กฤต', 'นเรศ'),
('1104200145400', 'พานุเดช', 'ประทีบ'),
('1104200145741', 'ชนะกัณฑ์', 'เจริญรุ่ง'),
('7150060037415', 'มัลลิกา', 'เจริญสุข'),
('7840012365234', 'สมศักดิ์', 'ใจดี'),
('7894561230123', 'test2', 'test2');

-- --------------------------------------------------------

--
-- Table structure for table `manage`
--

CREATE TABLE `manage` (
  `Cus_id` int(5) NOT NULL,
  `Emp_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manage`
--

INSERT INTO `manage` (`Cus_id`, `Emp_id`) VALUES
(167, 207),
(168, 207),
(169, 207),
(170, 207),
(173, 206),
(174, 206);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Pay_No` int(5) NOT NULL,
  `Room_No` varchar(3) NOT NULL,
  `Pay_Status` varchar(1) NOT NULL,
  `Emp_id` int(5) NOT NULL,
  `AmountDue` float NOT NULL,
  `unit_water` varchar(3) NOT NULL,
  `unit_elec` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Pay_No`, `Room_No`, `Pay_Status`, `Emp_id`, `AmountDue`, `unit_water`, `unit_elec`) VALUES
(42, '210', '3', 207, 4090, '3', '7'),
(49, '109', '1', 207, 4131.56, '5.5', '7.26'),
(50, '202', '3', 207, 4111.28, '4.12', '7.56'),
(53, '501', '3', 206, 4148, '7', '6');

-- --------------------------------------------------------

--
-- Table structure for table `pay_status`
--

CREATE TABLE `pay_status` (
  `pay_id` varchar(1) NOT NULL,
  `pay_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pay_status`
--

INSERT INTO `pay_status` (`pay_id`, `pay_name`) VALUES
('1', 'ยังไม่ชำระ'),
('2', 'รอการยืนยัน'),
('3', 'ยืนยันการชำระ');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `floor_number` int(1) NOT NULL,
  `Room_No` varchar(3) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`floor_number`, `Room_No`, `Status`) VALUES
(1, '101', '1'),
(1, '102', '1'),
(1, '103', '1'),
(1, '104', '1'),
(1, '105', '1'),
(1, '106', '1'),
(1, '107', '1'),
(1, '108', '1'),
(1, '109', '2'),
(1, '110', '1'),
(2, '201', '2'),
(2, '202', '2'),
(2, '203', '1'),
(2, '204', '1'),
(2, '205', '2'),
(2, '206', '1'),
(2, '207', '1'),
(2, '208', '1'),
(2, '209', '1'),
(2, '210', '2'),
(3, '301', '1'),
(3, '302', '1'),
(3, '303', '1'),
(3, '304', '1'),
(3, '305', '1'),
(3, '306', '1'),
(3, '307', '1'),
(3, '308', '1'),
(3, '309', '1'),
(3, '310', '1'),
(4, '401', '1'),
(4, '402', '1'),
(4, '403', '1'),
(4, '404', '1'),
(4, '405', '1'),
(4, '406', '1'),
(4, '407', '1'),
(4, '408', '1'),
(4, '409', '1'),
(4, '410', '1'),
(5, '501', '2'),
(5, '502', '1'),
(5, '503', '1'),
(5, '504', '1'),
(5, '505', '1'),
(5, '506', '1'),
(5, '507', '1'),
(5, '508', '1'),
(5, '509', '1'),
(5, '510', '1');

-- --------------------------------------------------------

--
-- Table structure for table `room_status`
--

CREATE TABLE `room_status` (
  `status_id` varchar(1) NOT NULL,
  `status_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room_status`
--

INSERT INTO `room_status` (`status_id`, `status_name`) VALUES
('1', 'ว่าง'),
('2', 'ไม่ว่าง');

-- --------------------------------------------------------

--
-- Table structure for table `settle`
--

CREATE TABLE `settle` (
  `Cus_id` int(5) NOT NULL,
  `Room_No` varchar(3) NOT NULL,
  `CheckIn` date NOT NULL,
  `CheckOut` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settle`
--

INSERT INTO `settle` (`Cus_id`, `Room_No`, `CheckIn`, `CheckOut`) VALUES
(163, '205', '2021-05-09', '2021-05-09'),
(164, '106', '2021-05-09', '2021-05-09'),
(165, '101', '2021-05-10', '2021-05-09'),
(166, '105', '2021-05-11', '2021-05-16'),
(167, '202', '2021-05-13', '-'),
(168, '109', '2021-05-10', '-'),
(169, '201', '2021-05-10', '-'),
(170, '210', '2021-05-20', '-'),
(171, '302', '2021-05-09', '2021-05-09'),
(172, '502', '2021-05-15', '2021-05-15'),
(173, '205', '2021-05-16', '-'),
(174, '501', '2021-05-16', '-'),
(175, '104', '2021-05-16', '2021-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `slipnumber`
--

CREATE TABLE `slipnumber` (
  `Slipnumber` varchar(25) NOT NULL,
  `Pay_No` int(5) NOT NULL,
  `sent_time` varchar(10) DEFAULT NULL,
  `sent_date` date DEFAULT NULL,
  `AccountName` varchar(30) NOT NULL,
  `BankName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slipnumber`
--

INSERT INTO `slipnumber` (`Slipnumber`, `Pay_No`, `sent_time`, `sent_date`, `AccountName`, `BankName`) VALUES
('100056230189', 42, '17:25', '2021-05-09', 'กฤต นเรศ', 'ไทยพาณิชย์'),
('-', 49, '-', '0000-00-00', '-', '-'),
('5516000236', 50, '21:28', '2021-05-16', 'นายอู้', 'ไทยพาณิชย์'),
('100056230189', 53, '20:30', '2021-05-16', 'test1', ' กรุงศรี');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cus_id`);

--
-- Indexes for table `customer_tel`
--
ALTER TABLE `customer_tel`
  ADD PRIMARY KEY (`Cus_id`,`Cus_tel`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Emp_id`);

--
-- Indexes for table `idnumber`
--
ALTER TABLE `idnumber`
  ADD PRIMARY KEY (`idNumber`);

--
-- Indexes for table `manage`
--
ALTER TABLE `manage`
  ADD PRIMARY KEY (`Cus_id`,`Emp_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Pay_No`);

--
-- Indexes for table `pay_status`
--
ALTER TABLE `pay_status`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`Room_No`);

--
-- Indexes for table `room_status`
--
ALTER TABLE `room_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `settle`
--
ALTER TABLE `settle`
  ADD PRIMARY KEY (`Cus_id`);

--
-- Indexes for table `slipnumber`
--
ALTER TABLE `slipnumber`
  ADD PRIMARY KEY (`Pay_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Cus_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Emp_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Pay_No` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
