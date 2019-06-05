-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 22, 2019 at 01:50 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siram`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(2) NOT NULL,
  `username` varchar(16) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `fullname` varchar(64) DEFAULT NULL,
  `previlleges` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `fullname`, `previlleges`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'admin'),
(2, 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 'Tito T', 'user'),
(6, 'febe', '9f51ce8e8e4374fd0736f3ece4a679dc', 'febefebe', 'user'),
(7, 'tito', '35056cf3019b02c1b7c4cbcfec9d39f0', 'TIto A', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `kode_node` varchar(8) NOT NULL,
  `topik` varchar(16) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `data_value` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `kode_node`, `topik`, `waktu`, `data_value`) VALUES
(1, 'C-01-001', '/data2/suhu1', '2018-01-12 08:40:07', 27.12),
(2, 'C-01-001', '/data2/suhu1', '2018-01-12 08:40:11', 27.28),
(3, 'C-01-001', '/data2/suhu1', '2018-01-12 08:40:17', 27.32),
(4, 'C-01-001', '/data2/suhu1', '2018-01-12 08:40:21', 27.34),
(5, 'C-01-001', '/data2/suhu1', '2018-01-12 08:40:28', 27.35),
(6, 'C-01-001', '/data2/suhu1', '2018-01-12 08:40:32', 27.36),
(7, 'C-01-001', '/data2/suhu1', '2018-01-12 08:40:38', 27.37),
(8, 'C-01-001', '/data2/suhu1', '2018-01-12 08:40:44', 27.37),
(9, 'C-01-001', '/data2/suhu1', '2018-01-12 08:40:48', 27.37),
(10, 'C-01-001', '/data2/suhu1', '2018-01-12 08:40:55', 27.37),
(11, 'C-01-001', '/data2/suhu1', '2018-01-12 08:40:59', 27.39),
(12, 'C-01-001', '/data2/suhu1', '2018-01-12 08:41:05', 27.4),
(13, 'C-01-001', '/data2/suhu1', '2018-01-12 08:41:09', 27.41),
(14, 'C-01-001', '/data2/suhu1', '2018-01-12 08:41:16', 27.42),
(15, 'C-01-001', '/data2/suhu1', '2018-01-12 08:41:20', 27.41),
(16, 'C-01-001', '/data2/suhu1', '2018-01-12 08:41:26', 27.42),
(17, 'C-01-001', '/data2/suhu1', '2018-01-12 08:41:30', 27.42),
(18, 'C-01-001', '/data2/suhu1', '2018-01-12 08:41:37', 27.42),
(19, 'C-01-001', '/data2/suhu1', '2018-01-12 08:41:41', 27.42),
(20, 'C-01-001', '/data2/suhu1', '2018-01-12 08:41:47', 27.42),
(21, 'C-01-001', '/data2/suhu1', '2018-01-12 08:41:53', 27.43),
(22, 'C-01-001', '/data2/suhu1', '2018-01-12 08:41:58', 27.44),
(23, 'C-01-001', '/data2/suhu1', '2018-01-12 08:42:04', 27.44),
(24, 'C-01-001', '/data2/suhu1', '2018-01-12 08:42:08', 27.45),
(25, 'C-01-001', '/data2/suhu1', '2018-01-12 08:42:14', 27.46),
(26, 'C-01-001', '/data2/suhu1', '2018-01-12 08:42:19', 27.46),
(27, 'C-01-001', '/data2/suhu1', '2018-01-12 08:42:25', 27.48),
(28, 'C-01-001', '/data2/suhu1', '2018-01-12 08:42:29', 27.49),
(29, 'C-01-001', '/data2/suhu1', '2018-01-12 08:42:35', 27.49),
(30, 'C-01-001', '/data2/suhu1', '2018-01-12 08:42:39', 27.49),
(31, 'C-01-001', '/data2/suhu1', '2018-01-12 08:42:45', 27.51),
(32, 'C-01-001', '/data2/suhu1', '2018-01-12 08:42:50', 27.5),
(33, 'C-01-001', '/data2/suhu1', '2018-01-12 08:42:56', 27.5),
(34, 'C-01-001', '/data2/suhu1', '2018-01-12 08:43:02', 27.5),
(35, 'C-01-001', '/data2/suhu1', '2018-01-12 08:43:07', 27.51),
(36, 'C-01-001', '/data2/suhu1', '2018-01-12 08:43:13', 27.53),
(37, 'T-01-002', '/data2/suhu1', '2018-01-12 08:43:37', 27.35),
(38, 'T-01-002', '/data2/suhu1', '2018-01-12 08:43:44', 27.5),
(39, 'T-01-002', '/data2/suhu1', '2018-01-12 08:43:48', 27.56),
(40, 'T-01-002', '/data2/suhu1', '2018-01-12 08:43:54', 27.57),
(41, 'T-01-002', '/data2/suhu1', '2018-01-12 08:43:58', 27.59),
(42, 'T-01-002', '/data2/suhu1', '2018-01-12 08:44:04', 27.6),
(43, 'T-01-002', '/data2/suhu1', '2018-01-12 08:44:09', 27.63),
(44, 'T-01-002', '/data2/suhu1', '2018-01-12 08:44:15', 27.62),
(45, 'T-01-002', '/data2/suhu1', '2018-01-12 08:44:19', 27.63),
(46, 'T-01-002', '/data2/suhu1', '2018-01-12 08:44:26', 27.65),
(47, 'T-01-002', '/data2/suhu1', '2018-01-12 08:44:30', 27.66),
(48, 'T-01-002', '/data2/suhu1', '2018-01-12 08:44:36', 27.65),
(49, 'T-01-002', '/data2/suhu1', '2018-01-12 08:44:40', 27.64),
(50, 'T-01-002', '/data2/suhu1', '2018-01-12 08:44:46', 27.65),
(51, 'T-01-002', '/data2/suhu1', '2018-01-12 08:44:53', 27.65),
(52, 'T-01-002', '/data2/suhu1', '2018-01-12 08:44:57', 27.65),
(53, 'T-01-002', '/data2/suhu1', '2018-01-12 08:45:03', 27.66),
(54, 'T-01-002', '/data2/suhu1', '2018-01-12 08:45:07', 27.66),
(55, 'T-01-002', '/data2/suhu1', '2018-01-12 08:45:14', 27.68),
(56, 'T-01-002', '/data2/suhu1', '2018-01-12 08:45:18', 27.84),
(57, 'T-01-002', '/data2/suhu1', '2018-01-12 08:45:24', 27.96),
(58, 'T-01-002', '/data2/suhu1', '2018-01-12 08:45:28', 28.1),
(59, 'T-01-002', '/data2/suhu1', '2018-01-12 08:45:34', 28.25),
(60, 'T-01-002', '/data2/suhu2', '2018-01-17 05:29:36', 29.84),
(61, 'T-01-002', '/data2/suhu2', '2018-01-17 05:29:40', 29.96),
(62, 'T-01-002', '/data2/suhu2', '2018-01-17 05:29:46', 30),
(63, 'T-01-002', '/data2/suhu2', '2018-01-17 05:29:51', 30.01),
(64, 'T-01-002', '/data2/suhu2', '2018-01-17 05:29:57', 30.02),
(65, 'T-01-002', '/data2/suhu2', '2018-01-17 05:30:03', 30.04),
(66, 'T-01-002', '/data2/suhu2', '2018-01-17 05:30:07', 30.05),
(67, 'T-01-002', '/data2/suhu2', '2018-01-17 05:30:13', 30.07),
(68, 'T-01-002', '/data2/suhu2', '2018-01-17 05:30:18', 30.07),
(69, 'T-01-002', '/data2/suhu2', '2018-01-17 05:30:24', 30.06),
(70, 'T-01-002', '/data2/suhu2', '2018-01-17 05:30:28', 30.06),
(71, 'T-01-002', '/data2/suhu2', '2018-01-17 05:30:35', 30.06),
(72, 'T-01-002', '/data2/suhu2', '2018-01-17 05:30:39', 30.04),
(73, 'T-01-002', '/data2/suhu2', '2018-01-17 05:30:45', 30.06),
(74, 'T-01-002', '/data2/suhu2', '2018-01-17 05:31:10', 29.91),
(75, 'T-01-002', '/data2/suhu2', '2018-01-17 05:31:14', 30.06),
(76, 'T-01-002', '/data2/suhu2', '2018-01-17 05:31:20', 30.08),
(77, 'T-01-002', '/data2/suhu2', '2018-01-17 05:31:24', 30.09),
(78, 'T-01-002', '/data2/suhu2', '2018-01-17 05:31:31', 30.1),
(79, 'T-01-002', '/data2/suhu2', '2018-01-17 05:31:35', 30.1),
(80, 'T-01-002', '/data2/suhu2', '2018-01-17 05:31:41', 30.1),
(81, 'T-01-002', '/data2/suhu2', '2018-01-17 05:31:47', 30.11),
(82, 'C-01-001', '/data2/suhu1', '2018-02-27 07:00:26', 30.57),
(83, 'C-01-001', '/data2/suhu1', '2018-02-27 07:00:30', 30.56),
(84, 'C-01-001', '/data2/suhu1', '2018-02-27 07:00:37', 30.55),
(85, 'C-01-001', '/data2/suhu1', '2018-02-27 07:00:41', 30.55),
(86, 'C-01-001', '/data2/suhu1', '2018-02-27 07:00:47', 30.56),
(87, 'C-01-001', '/data2/suhu1', '2018-02-27 07:00:51', 30.55),
(88, 'C-01-001', '/data2/suhu1', '2018-02-27 07:00:51', 0),
(89, 'C-01-001', '/data2/suhu1', '2018-02-27 07:00:55', 0),
(90, 'C-01-001', '/data2/tanah1', '2018-01-12 08:40:04', 0),
(91, 'C-01-001', '/data2/tanah1', '2018-01-12 08:40:11', 0),
(92, 'C-01-001', '/data2/tanah1', '2018-01-12 08:40:15', 0),
(93, 'C-01-001', '/data2/tanah1', '2018-01-12 08:40:21', 0),
(94, 'C-01-001', '/data2/tanah1', '2018-01-12 08:40:26', 0),
(95, 'C-01-001', '/data2/tanah1', '2018-01-12 08:40:32', 0),
(96, 'C-01-001', '/data2/tanah1', '2018-01-12 08:40:36', 0),
(97, 'C-01-001', '/data2/tanah1', '2018-01-12 08:40:42', 0),
(98, 'C-01-001', '/data2/tanah1', '2018-01-12 08:40:48', 0),
(99, 'C-01-001', '/data2/tanah1', '2018-01-12 08:40:53', 0),
(100, 'C-01-001', '/data2/tanah1', '2018-01-12 08:40:59', 0),
(101, 'C-01-001', '/data2/tanah1', '2018-01-12 08:41:03', 0),
(102, 'C-01-001', '/data2/tanah1', '2018-01-12 08:41:09', 0),
(103, 'C-01-001', '/data2/tanah1', '2018-01-12 08:41:14', 0),
(104, 'C-01-001', '/data2/tanah1', '2018-01-12 08:41:20', 0),
(105, 'C-01-001', '/data2/tanah1', '2018-01-12 08:41:24', 0),
(106, 'C-01-001', '/data2/tanah1', '2018-01-12 08:41:30', 0),
(107, 'C-01-001', '/data2/tanah1', '2018-01-12 08:41:35', 0),
(108, 'C-01-001', '/data2/tanah1', '2018-01-12 08:41:41', 0),
(109, 'C-01-001', '/data2/tanah1', '2018-01-12 08:41:47', 0),
(110, 'C-01-001', '/data2/tanah1', '2018-01-12 08:41:51', 0),
(111, 'C-01-001', '/data2/tanah1', '2018-01-12 08:41:58', 0),
(112, 'C-01-001', '/data2/tanah1', '2018-01-12 08:42:02', 0),
(113, 'C-01-001', '/data2/tanah1', '2018-01-12 08:42:08', 0),
(114, 'C-01-001', '/data2/tanah1', '2018-01-12 08:42:12', 0),
(115, 'C-01-001', '/data2/tanah1', '2018-01-12 08:42:18', 0),
(116, 'C-01-001', '/data2/tanah1', '2018-01-12 08:42:23', 0),
(117, 'C-01-001', '/data2/tanah1', '2018-01-12 08:42:29', 0),
(118, 'C-01-001', '/data2/tanah1', '2018-01-12 08:42:33', 0),
(119, 'C-01-001', '/data2/tanah1', '2018-01-12 08:42:39', 0),
(120, 'C-01-001', '/data2/tanah1', '2018-01-12 08:42:43', 0),
(121, 'C-01-001', '/data2/tanah1', '2018-01-12 08:42:50', 0),
(122, 'C-01-001', '/data2/tanah1', '2018-01-12 08:42:56', 0),
(123, 'C-01-001', '/data2/tanah1', '2018-01-12 08:43:00', 0),
(124, 'C-01-001', '/data2/tanah1', '2018-01-12 08:43:06', 0),
(125, 'C-01-001', '/data2/tanah1', '2018-01-12 08:43:11', 0),
(126, 'T-01-002', '/data2/tanah1', '2018-01-12 08:43:35', 0),
(127, 'T-01-002', '/data2/tanah1', '2018-01-12 08:43:42', 0),
(128, 'T-01-002', '/data2/tanah1', '2018-01-12 08:43:48', 0),
(129, 'T-01-002', '/data2/tanah1', '2018-01-12 08:43:52', 0),
(130, 'T-01-002', '/data2/tanah1', '2018-01-12 08:43:58', 0),
(131, 'T-01-002', '/data2/tanah1', '2018-01-12 08:44:02', 0),
(132, 'T-01-002', '/data2/tanah1', '2018-01-12 08:44:09', 0),
(133, 'T-01-002', '/data2/tanah1', '2018-01-12 08:44:13', 0),
(134, 'T-01-002', '/data2/tanah1', '2018-01-12 08:44:19', 0),
(135, 'T-01-002', '/data2/tanah1', '2018-01-12 08:44:24', 0),
(136, 'T-01-002', '/data2/tanah1', '2018-01-12 08:44:30', 0),
(137, 'T-01-002', '/data2/tanah1', '2018-01-12 08:44:34', 0),
(138, 'T-01-002', '/data2/tanah1', '2018-01-12 08:44:40', 0),
(139, 'T-01-002', '/data2/tanah1', '2018-01-12 08:44:46', 0),
(140, 'T-01-002', '/data2/tanah1', '2018-01-12 08:44:51', 0),
(141, 'T-01-002', '/data2/tanah1', '2018-01-12 08:44:57', 0),
(142, 'T-01-002', '/data2/tanah1', '2018-01-12 08:45:01', 0),
(143, 'T-01-002', '/data2/tanah1', '2018-01-12 08:45:07', 0),
(144, 'T-01-002', '/data2/tanah1', '2018-01-12 08:45:11', 0),
(145, 'T-01-002', '/data2/tanah1', '2018-01-12 08:45:18', 0),
(146, 'T-01-002', '/data2/tanah1', '2018-01-12 08:45:22', 0),
(147, 'T-01-002', '/data2/tanah1', '2018-01-12 08:45:28', 0),
(148, 'T-01-002', '/data2/tanah1', '2018-01-12 08:45:32', 0),
(149, 'T-01-002', '/data2/tanah2', '2018-01-17 05:29:34', 70),
(150, 'T-01-002', '/data2/tanah2', '2018-01-17 05:29:40', 70),
(151, 'T-01-002', '/data2/tanah2', '2018-01-17 05:29:44', 70),
(152, 'T-01-002', '/data2/tanah2', '2018-01-17 05:29:51', 70),
(153, 'T-01-002', '/data2/tanah2', '2018-01-17 05:29:55', 70),
(154, 'T-01-002', '/data2/tanah2', '2018-01-17 05:30:01', 70),
(155, 'T-01-002', '/data2/tanah2', '2018-01-17 05:30:07', 70),
(156, 'T-01-002', '/data2/tanah2', '2018-01-17 05:30:11', 70),
(157, 'T-01-002', '/data2/tanah2', '2018-01-17 05:30:18', 70),
(158, 'T-01-002', '/data2/tanah2', '2018-01-17 05:30:22', 70),
(159, 'T-01-002', '/data2/tanah2', '2018-01-17 05:30:28', 70),
(160, 'T-01-002', '/data2/tanah2', '2018-01-17 05:30:32', 70),
(161, 'T-01-002', '/data2/tanah2', '2018-01-17 05:30:39', 70),
(162, 'T-01-002', '/data2/tanah2', '2018-01-17 05:30:43', 70),
(163, 'T-01-002', '/data2/tanah2', '2018-01-17 05:31:08', 70),
(164, 'T-01-002', '/data2/tanah2', '2018-01-17 05:31:14', 70),
(165, 'T-01-002', '/data2/tanah2', '2018-01-17 05:31:18', 70),
(166, 'T-01-002', '/data2/tanah2', '2018-01-17 05:31:24', 70),
(167, 'T-01-002', '/data2/tanah2', '2018-01-17 05:31:29', 70),
(168, 'T-01-002', '/data2/tanah2', '2018-01-17 05:31:35', 70),
(169, 'T-01-002', '/data2/tanah2', '2018-01-17 05:31:39', 70),
(170, 'T-01-002', '/data2/tanah2', '2018-01-17 05:31:45', 70),
(171, 'C-01-001', '/data2/tanah1', '2018-02-27 07:00:24', 0),
(172, 'C-01-001', '/data2/tanah1', '2018-02-27 07:00:30', 0),
(173, 'C-01-001', '/data2/tanah1', '2018-02-27 07:00:34', 0),
(174, 'C-01-001', '/data2/tanah1', '2018-02-27 07:00:41', 0),
(175, 'C-01-001', '/data2/tanah1', '2018-02-27 07:00:45', 0),
(176, 'C-01-001', '/data2/tanah1', '2018-02-27 07:00:51', 0),
(177, 'C-01-001', '/data2/udara1', '2018-01-12 08:40:07', 57.74),
(178, 'C-01-001', '/data2/udara1', '2018-01-12 08:40:13', 57.7),
(179, 'C-01-001', '/data2/udara1', '2018-01-12 08:40:17', 57.55),
(180, 'C-01-001', '/data2/udara1', '2018-01-12 08:40:23', 57.42),
(181, 'C-01-001', '/data2/udara1', '2018-01-12 08:40:28', 57.3),
(182, 'C-01-001', '/data2/udara1', '2018-01-12 08:40:34', 57.21),
(183, 'C-01-001', '/data2/udara1', '2018-01-12 08:40:38', 57.15),
(184, 'C-01-001', '/data2/udara1', '2018-01-12 08:40:44', 57.11),
(185, 'C-01-001', '/data2/udara1', '2018-01-12 08:40:51', 57.11),
(186, 'C-01-001', '/data2/udara1', '2018-01-12 08:40:55', 57.08),
(187, 'C-01-001', '/data2/udara1', '2018-01-12 08:41:01', 57.06),
(188, 'C-01-001', '/data2/udara1', '2018-01-12 08:41:05', 57.03),
(189, 'C-01-001', '/data2/udara1', '2018-01-12 08:41:12', 57.03),
(190, 'C-01-001', '/data2/udara1', '2018-01-12 08:41:16', 57),
(191, 'C-01-001', '/data2/udara1', '2018-01-12 08:41:22', 56.9),
(192, 'C-01-001', '/data2/udara1', '2018-01-12 08:41:26', 56.87),
(193, 'C-01-001', '/data2/udara1', '2018-01-12 08:41:33', 56.84),
(194, 'C-01-001', '/data2/udara1', '2018-01-12 08:41:37', 56.78),
(195, 'C-01-001', '/data2/udara1', '2018-01-12 08:41:43', 56.71),
(196, 'C-01-001', '/data2/udara1', '2018-01-12 08:41:49', 56.68),
(197, 'C-01-001', '/data2/udara1', '2018-01-12 08:41:53', 56.68),
(198, 'C-01-001', '/data2/udara1', '2018-01-12 08:42:00', 56.65),
(199, 'C-01-001', '/data2/udara1', '2018-01-12 08:42:04', 56.65),
(200, 'C-01-001', '/data2/udara1', '2018-01-12 08:42:10', 56.66),
(201, 'C-01-001', '/data2/udara1', '2018-01-12 08:42:14', 56.66),
(202, 'C-01-001', '/data2/udara1', '2018-01-12 08:42:21', 56.75),
(203, 'C-01-001', '/data2/udara1', '2018-01-12 08:42:25', 56.85),
(204, 'C-01-001', '/data2/udara1', '2018-01-12 08:42:31', 56.88),
(205, 'C-01-001', '/data2/udara1', '2018-01-12 08:42:35', 56.85),
(206, 'C-01-001', '/data2/udara1', '2018-01-12 08:42:41', 56.76),
(207, 'C-01-001', '/data2/udara1', '2018-01-12 08:42:45', 56.6),
(208, 'C-01-001', '/data2/udara1', '2018-01-12 08:42:52', 56.51),
(209, 'C-01-001', '/data2/udara1', '2018-01-12 08:42:58', 56.44),
(210, 'C-01-001', '/data2/udara1', '2018-01-12 08:43:02', 56.41),
(211, 'C-01-001', '/data2/udara1', '2018-01-12 08:43:09', 56.41),
(212, 'C-01-001', '/data2/udara1', '2018-01-12 08:43:13', 56.42),
(213, 'T-01-002', '/data2/udara1', '2018-01-12 08:43:37', 56.64),
(214, 'T-01-002', '/data2/udara1', '2018-01-12 08:43:44', 56.6),
(215, 'T-01-002', '/data2/udara1', '2018-01-12 08:43:50', 56.48),
(216, 'T-01-002', '/data2/udara1', '2018-01-12 08:43:54', 56.36),
(217, 'T-01-002', '/data2/udara1', '2018-01-12 08:44:00', 56.2),
(218, 'T-01-002', '/data2/udara1', '2018-01-12 08:44:05', 56.14),
(219, 'T-01-002', '/data2/udara1', '2018-01-12 08:44:11', 56.08),
(220, 'T-01-002', '/data2/udara1', '2018-01-12 08:44:15', 56.05),
(221, 'T-01-002', '/data2/udara1', '2018-01-12 08:44:21', 55.99),
(222, 'T-01-002', '/data2/udara1', '2018-01-12 08:44:26', 55.99),
(223, 'T-01-002', '/data2/udara1', '2018-01-12 08:44:32', 55.93),
(224, 'T-01-002', '/data2/udara1', '2018-01-12 08:44:36', 55.87),
(225, 'T-01-002', '/data2/udara1', '2018-01-12 08:44:42', 55.83),
(226, 'T-01-002', '/data2/udara1', '2018-01-12 08:44:49', 55.8),
(227, 'T-01-002', '/data2/udara1', '2018-01-12 08:44:53', 55.8),
(228, 'T-01-002', '/data2/udara1', '2018-01-12 08:44:59', 55.8),
(229, 'T-01-002', '/data2/udara1', '2018-01-12 08:45:03', 55.84),
(230, 'T-01-002', '/data2/udara1', '2018-01-12 08:45:09', 55.87),
(231, 'T-01-002', '/data2/udara1', '2018-01-12 08:45:14', 55.9),
(232, 'T-01-002', '/data2/udara1', '2018-01-12 08:45:20', 59.87),
(233, 'T-01-002', '/data2/udara1', '2018-01-12 08:45:24', 64.56),
(234, 'T-01-002', '/data2/udara1', '2018-01-12 08:45:30', 69.57),
(235, 'T-01-002', '/data2/udara1', '2018-01-12 08:45:34', 70.41),
(236, 'T-01-002', '/data2/udara2', '2018-01-17 05:29:36', 57.67),
(237, 'T-01-002', '/data2/udara2', '2018-01-17 05:29:42', 57.72),
(238, 'T-01-002', '/data2/udara2', '2018-01-17 05:29:46', 57.66),
(239, 'T-01-002', '/data2/udara2', '2018-01-17 05:29:53', 57.67),
(240, 'T-01-002', '/data2/udara2', '2018-01-17 05:29:57', 57.67),
(241, 'T-01-002', '/data2/udara2', '2018-01-17 05:30:03', 57.67),
(242, 'T-01-002', '/data2/udara2', '2018-01-17 05:30:09', 57.7),
(243, 'T-01-002', '/data2/udara2', '2018-01-17 05:30:14', 57.67),
(244, 'T-01-002', '/data2/udara2', '2018-01-17 05:30:20', 57.67),
(245, 'T-01-002', '/data2/udara2', '2018-01-17 05:30:24', 57.67),
(246, 'T-01-002', '/data2/udara2', '2018-01-17 05:30:30', 57.58),
(247, 'T-01-002', '/data2/udara2', '2018-01-17 05:30:35', 57.45),
(248, 'T-01-002', '/data2/udara2', '2018-01-17 05:30:41', 57.29),
(249, 'T-01-002', '/data2/udara2', '2018-01-17 05:30:45', 57.17),
(250, 'T-01-002', '/data2/udara2', '2018-01-17 05:31:10', 58.37),
(251, 'T-01-002', '/data2/udara2', '2018-01-17 05:31:16', 58.37),
(252, 'T-01-002', '/data2/udara2', '2018-01-17 05:31:20', 58.24),
(253, 'T-01-002', '/data2/udara2', '2018-01-17 05:31:27', 58.09),
(254, 'T-01-002', '/data2/udara2', '2018-01-17 05:31:31', 57.99),
(255, 'T-01-002', '/data2/udara2', '2018-01-17 05:31:37', 57.87),
(256, 'T-01-002', '/data2/udara2', '2018-01-17 05:31:41', 57.74),
(257, 'T-01-002', '/data2/udara2', '2018-01-17 05:31:47', 57.71),
(258, 'C-01-001', '/data2/udara1', '2018-02-27 07:00:26', 64.38),
(259, 'C-01-001', '/data2/udara1', '2018-02-27 07:00:32', 64.34),
(260, 'C-01-001', '/data2/udara1', '2018-02-27 07:00:37', 64.34),
(261, 'C-01-001', '/data2/udara1', '2018-02-27 07:00:43', 64.34),
(262, 'C-01-001', '/data2/udara1', '2018-02-27 07:00:47', 64.28),
(263, 'C-01-001', '/data2/udara1', '2018-02-27 07:00:53', 64.16),
(264, 'C-01-001', '/data2/dew1', '2018-01-12 08:40:09', 18.07),
(265, 'C-01-001', '/data2/dew1', '2018-01-12 08:40:13', 18.21),
(266, 'C-01-001', '/data2/dew1', '2018-01-12 08:40:19', 18.2),
(267, 'C-01-001', '/data2/dew1', '2018-01-12 08:40:23', 18.19),
(268, 'C-01-001', '/data2/dew1', '2018-01-12 08:40:30', 18.16),
(269, 'C-01-001', '/data2/dew1', '2018-01-12 08:40:34', 18.15),
(270, 'C-01-001', '/data2/dew1', '2018-01-12 08:40:40', 18.14),
(271, 'C-01-001', '/data2/dew1', '2018-01-12 08:40:46', 18.13),
(272, 'C-01-001', '/data2/dew1', '2018-01-12 08:40:51', 18.13),
(273, 'C-01-001', '/data2/dew1', '2018-01-12 08:40:57', 18.12),
(274, 'C-01-001', '/data2/dew1', '2018-01-12 08:41:01', 18.13),
(275, 'C-01-001', '/data2/dew1', '2018-01-12 08:41:07', 18.13),
(276, 'C-01-001', '/data2/dew1', '2018-01-12 08:41:12', 18.14),
(277, 'C-01-001', '/data2/dew1', '2018-01-12 08:41:18', 18.14),
(278, 'C-01-001', '/data2/dew1', '2018-01-12 08:41:22', 18.11),
(279, 'C-01-001', '/data2/dew1', '2018-01-12 08:41:28', 18.11),
(280, 'C-01-001', '/data2/dew1', '2018-01-12 08:41:33', 18.1),
(281, 'C-01-001', '/data2/dew1', '2018-01-12 08:41:39', 18.08),
(282, 'C-01-001', '/data2/dew1', '2018-01-12 08:41:43', 18.06),
(283, 'C-01-001', '/data2/dew1', '2018-01-12 08:41:49', 18.06),
(284, 'C-01-001', '/data2/dew1', '2018-01-12 08:41:56', 18.07),
(285, 'C-01-001', '/data2/dew1', '2018-01-12 08:42:00', 18.07),
(286, 'C-01-001', '/data2/dew1', '2018-01-12 08:42:06', 18.07),
(287, 'C-01-001', '/data2/dew1', '2018-01-12 08:42:10', 18.08),
(288, 'C-01-001', '/data2/dew1', '2018-01-12 08:42:16', 18.09),
(289, 'C-01-001', '/data2/dew1', '2018-01-12 08:42:21', 18.11),
(290, 'C-01-001', '/data2/dew1', '2018-01-12 08:42:27', 18.16),
(291, 'C-01-001', '/data2/dew1', '2018-01-12 08:42:31', 18.18),
(292, 'C-01-001', '/data2/dew1', '2018-01-12 08:42:37', 18.17),
(293, 'C-01-001', '/data2/dew1', '2018-01-12 08:42:41', 18.14),
(294, 'C-01-001', '/data2/dew1', '2018-01-12 08:42:48', 18.12),
(295, 'C-01-001', '/data2/dew1', '2018-01-12 08:42:52', 18.08),
(296, 'C-01-001', '/data2/dew1', '2018-01-12 08:42:58', 18.06),
(297, 'C-01-001', '/data2/dew1', '2018-01-12 08:43:04', 18.05),
(298, 'C-01-001', '/data2/dew1', '2018-01-12 08:43:09', 18.06),
(299, 'C-01-001', '/data2/dew1', '2018-01-12 08:43:15', 18.08),
(300, 'T-01-002', '/data2/dew1', '2018-01-12 08:43:39', 17.98),
(301, 'T-01-002', '/data2/dew1', '2018-01-12 08:43:46', 18.11),
(302, 'T-01-002', '/data2/dew1', '2018-01-12 08:43:50', 18.13),
(303, 'T-01-002', '/data2/dew1', '2018-01-12 08:43:56', 18.1),
(304, 'T-01-002', '/data2/dew1', '2018-01-12 08:44:00', 18.08),
(305, 'T-01-002', '/data2/dew1', '2018-01-12 08:44:07', 18.07),
(306, 'T-01-002', '/data2/dew1', '2018-01-12 08:44:11', 18.08),
(307, 'T-01-002', '/data2/dew1', '2018-01-12 08:44:17', 18.06),
(308, 'T-01-002', '/data2/dew1', '2018-01-12 08:44:21', 18.06),
(309, 'T-01-002', '/data2/dew1', '2018-01-12 08:44:28', 18.08),
(310, 'T-01-002', '/data2/dew1', '2018-01-12 08:44:32', 18.07),
(311, 'T-01-002', '/data2/dew1', '2018-01-12 08:44:38', 18.04),
(312, 'T-01-002', '/data2/dew1', '2018-01-12 08:44:42', 18.02),
(313, 'T-01-002', '/data2/dew1', '2018-01-12 08:44:49', 18.02),
(314, 'T-01-002', '/data2/dew1', '2018-01-12 08:44:55', 18.02),
(315, 'T-01-002', '/data2/dew1', '2018-01-12 08:44:59', 18.02),
(316, 'T-01-002', '/data2/dew1', '2018-01-12 08:45:05', 18.04),
(317, 'T-01-002', '/data2/dew1', '2018-01-12 08:45:09', 18.05),
(318, 'T-01-002', '/data2/dew1', '2018-01-12 08:45:16', 18.08),
(319, 'T-01-002', '/data2/dew1', '2018-01-12 08:45:20', 19.32),
(320, 'T-01-002', '/data2/dew1', '2018-01-12 08:45:26', 20.66),
(321, 'T-01-002', '/data2/dew1', '2018-01-12 08:45:30', 22.01),
(322, 'T-01-002', '/data2/dew2', '2018-01-17 05:29:38', 20.59),
(323, 'T-01-002', '/data2/dew2', '2018-01-17 05:29:42', 20.72),
(324, 'T-01-002', '/data2/dew2', '2018-01-17 05:29:48', 20.74),
(325, 'T-01-002', '/data2/dew2', '2018-01-17 05:29:53', 20.75),
(326, 'T-01-002', '/data2/dew2', '2018-01-17 05:29:59', 20.76),
(327, 'T-01-002', '/data2/dew2', '2018-01-17 05:30:05', 20.78),
(328, 'T-01-002', '/data2/dew2', '2018-01-17 05:30:09', 20.8),
(329, 'T-01-002', '/data2/dew2', '2018-01-17 05:30:16', 20.81),
(330, 'T-01-002', '/data2/dew2', '2018-01-17 05:30:20', 20.81),
(331, 'T-01-002', '/data2/dew2', '2018-01-17 05:30:26', 20.8),
(332, 'T-01-002', '/data2/dew2', '2018-01-17 05:30:30', 20.77),
(333, 'T-01-002', '/data2/dew2', '2018-01-17 05:30:37', 20.73),
(334, 'T-01-002', '/data2/dew2', '2018-01-17 05:30:41', 20.67),
(335, 'T-01-002', '/data2/dew2', '2018-01-17 05:31:12', 20.85),
(336, 'T-01-002', '/data2/dew2', '2018-01-17 05:31:16', 20.99),
(337, 'T-01-002', '/data2/dew2', '2018-01-17 05:31:22', 20.98),
(338, 'T-01-002', '/data2/dew2', '2018-01-17 05:31:27', 20.94),
(339, 'T-01-002', '/data2/dew2', '2018-01-17 05:31:33', 20.92),
(340, 'T-01-002', '/data2/dew2', '2018-01-17 05:31:37', 20.89),
(341, 'T-01-002', '/data2/dew2', '2018-01-17 05:31:43', 20.85),
(342, 'T-01-002', '/data2/dew2', '2018-01-17 05:31:49', 20.85),
(343, 'C-01-001', '/data2/dew1', '2018-02-27 07:00:28', 23.08),
(344, 'C-01-001', '/data2/dew1', '2018-02-27 07:00:32', 23.06),
(345, 'C-01-001', '/data2/dew1', '2018-02-27 07:00:39', 23.05),
(346, 'C-01-001', '/data2/dew1', '2018-02-27 07:00:43', 23.05),
(347, 'C-01-001', '/data2/dew1', '2018-02-27 07:00:49', 23.05),
(348, 'C-01-001', '/data2/dew1', '2018-02-27 07:00:53', 23);

-- --------------------------------------------------------

--
-- Table structure for table `komoditas`
--

CREATE TABLE `komoditas` (
  `id` int(11) NOT NULL,
  `nama_komoditas` varchar(16) DEFAULT NULL,
  `icon_komoditas` varchar(16) DEFAULT NULL,
  `kode_komoditas` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `komoditas`
--

INSERT INTO `komoditas` (`id`, `nama_komoditas`, `icon_komoditas`, `kode_komoditas`) VALUES
(1, 'Cabai', 'fa-google-wallet', 'C-01-00'),
(2, 'Tomat', 'fa-apple', 'T-01-00');

-- --------------------------------------------------------

--
-- Table structure for table `node`
--

CREATE TABLE `node` (
  `id` int(11) NOT NULL,
  `nama_node` varchar(16) DEFAULT NULL,
  `id_komoditas` int(1) DEFAULT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `node`
--

INSERT INTO `node` (`id`, `nama_node`, `id_komoditas`, `status`) VALUES
(1, 'Node Cabai-1', 1, 0),
(2, 'Node Tomat-1', 2, 0),
(3, 'Node Cabai-2', 1, 0),
(4, '', 1, 0),
(5, 'tomat-2', 2, 0),
(6, 'fff', 1, 0),
(8, 'hhhh', 1, 0),
(9, 'zx', 1, 0),
(10, 'Node Tomat-2', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nodecode`
--

CREATE TABLE `nodecode` (
  `id` int(1) NOT NULL,
  `code1` varchar(1800) DEFAULT NULL,
  `code2` varchar(1000) DEFAULT NULL,
  `code3` varchar(1000) DEFAULT NULL,
  `code4` varchar(1000) DEFAULT NULL,
  `code5` varchar(1000) DEFAULT NULL,
  `code6` varchar(1000) DEFAULT NULL,
  `code7` varchar(1000) DEFAULT NULL,
  `code8` varchar(1000) DEFAULT NULL,
  `code9` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `nodecode`
--

INSERT INTO `nodecode` (`id`, `code1`, `code2`, `code3`, `code4`, `code5`, `code6`, `code7`, `code8`, `code9`) VALUES
(1, '<?php \r\n\r\n$client = new Mosquitto\\Client();\r\n$client->onConnect(\'connect\'); \r\n$client->onDisconnect(\'disconnect\'); \r\n$client->onSubscribe(\'subscribe\'); \r\n$client->onMessage(\'message\'); \r\n$client->connect(\"localhost\", 1883, 60); \r\n$client->subscribe(\'/#\', 1);\r\n\r\n\r\nwhile (true) { \r\n$servername = \"localhost\";\r\n$username = \"root\";\r\n$password = \"1234\";\r\n$dbname = \"data2\";\r\n\r\n// Create connection\r\n$conn = new mysqli($servername, $username, $password, $dbname);\r\n// Check connection\r\nif ($conn->connect_error) {\r\n    die(\"Connection failed: \" . $conn->connect_error);\r\n}\r\n\r\n$sql1 = \"SELECT * FROM relay WHERE id=1\";\r\n$result = $conn->query($sql1);\r\n\r\nif ($result->num_rows > 0) {\r\n  //output data of each row\r\n  while ($row = $result->fetch_assoc()){\r\n    $client->loop();\r\n    $mid = $client->publish(\'/data2/relay1\', $row[\"status\"]);\r\n    echo \"Sent message ID: {$mid}\\n\";\r\n    $client->loop();\r\n    sleep(2);\r\n    echo \"id relay: \" . $row[\"id\"] . \" - Status Relay: \" . $row[\"status\"];\r\n  }\r\n}\r\nelse\r\n{\r\n  echo \"0 results\";\r\n}\r\n$conn->close();\r\n} \r\n\r\n $client->disconnect(); \r\n unset($client); \r\n\r\n  function connect($r) { \r\n   echo \"I got code {$r}\\n\"; \r\n } \r\n\r\n  function subscribe() { \r\n   echo \"Subscribed to a topic\\n\"; \r\n } \r\n\r\n  function message($message) { \r\n  printf(\"\\nGot a message ID %d on topic %s with payload: %s\\n\\n\", $message->mid, $message->topic, $message->payload);\r\n\r\n  $servername = \"localhost\";\r\n  $username = \"root\";\r\n  $password = \"1234\";\r\n  $dbname = \"data2\";\r\n\r\n  // Create connection\r\n  $conn = new mysqli($servername, $username, $password, $dbname);\r\n  // Check connection\r\n  if ($conn->connect_error) {\r\n      die(\"Connection failed: \" . $conn->connect_error);\r\n  }\r\n\r\n  if ($message->topic==\"/data2/suhu', '\"){\r\n    $sql = \"INSERT INTO t_suhu (topik, suhu, waktu, kode_tanaman)\r\n    VALUES (\'$message->topic\', \'$message->payload\', NOW(), \'', '\')\";\r\n  }\r\n\r\n  if ($message->topic==\"/data2/dew', '\"){\r\n    $sql = \"INSERT INTO t_dew (topik, dew, waktu, kode_tanaman)\r\n    VALUES (\'$message->topic\', \'$message->payload\', NOW(), \'', '\')\";\r\n  }\r\n\r\n  if ($message->topic==\"/data2/tanah', '\"){\r\n    $sql = \"INSERT INTO t_tanah (topik, tanah, waktu, kode_tanaman)\r\n    VALUES (\'$message->topic\', \'$message->payload\', NOW(), \'', '\')\";\r\n  }\r\n\r\n  if ($message->topic==\"/data2/udara', '\"){\r\n    $sql = \"INSERT INTO t_udara (topik, udara, waktu, kode_tanaman)\r\n    VALUES (\'$message->topic\', \'$message->payload\', NOW(), \'', '\')\";\r\n  }  \r\n\r\n    if ($conn->multi_query($sql) === TRUE) {\r\n    echo \"New record created successfully\\n\";\r\n}\r\n\r\n  $conn->close();\r\n\r\n } \r\n\r\n  function disconnect() { \r\n   echo \"Disconnected cleanly\\n\"; \r\n } ');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_node`
-- (See below for the actual view)
--
CREATE TABLE `view_node` (
`id` int(11)
,`kode_node` varchar(18)
,`nama_node` varchar(16)
,`nama_komoditas` varchar(16)
,`icon_komoditas` varchar(16)
,`status` int(1)
);

-- --------------------------------------------------------

--
-- Structure for view `view_node`
--
DROP TABLE IF EXISTS `view_node`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_node`  AS  select `a`.`id` AS `id`,concat(`b`.`kode_komoditas`,`a`.`id`) AS `kode_node`,`a`.`nama_node` AS `nama_node`,`b`.`nama_komoditas` AS `nama_komoditas`,`b`.`icon_komoditas` AS `icon_komoditas`,`a`.`status` AS `status` from (`node` `a` join `komoditas` `b`) where (`a`.`id_komoditas` = `b`.`id`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `username` (`username`) USING BTREE;

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komoditas`
--
ALTER TABLE `komoditas`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `nama_komoditas` (`nama_komoditas`) USING BTREE;

--
-- Indexes for table `node`
--
ALTER TABLE `node`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `nama_node` (`nama_node`) USING BTREE,
  ADD KEY `id_komoditas` (`id_komoditas`);

--
-- Indexes for table `nodecode`
--
ALTER TABLE `nodecode`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=349;

--
-- AUTO_INCREMENT for table `komoditas`
--
ALTER TABLE `komoditas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `node`
--
ALTER TABLE `node`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `node`
--
ALTER TABLE `node`
  ADD CONSTRAINT `node_ibfk_1` FOREIGN KEY (`id_komoditas`) REFERENCES `komoditas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
