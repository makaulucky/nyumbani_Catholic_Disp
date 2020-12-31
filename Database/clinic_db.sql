-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2020 at 06:54 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `ccc_no` int(18) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Mname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `Phone_no` varchar(10) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Residence` varchar(15) NOT NULL,
  `Dob` date NOT NULL,
  `art_start_date` date NOT NULL,
  `Reg_date` date NOT NULL,
  `Id_no` int(12) NOT NULL,
  `Added_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `Added_by` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`ccc_no`, `Fname`, `Mname`, `Lname`, `Phone_no`, `Gender`, `Residence`, `Dob`, `art_start_date`, `Reg_date`, `Id_no`, `Added_on`, `Added_by`) VALUES
(62, 'MUNYWOKI ', '', 'SYOMBUA', '710644809.', 'M', 'Village', '0000-00-00', '2020-12-01', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(82, 'JULIANA ', '', 'MBEKE', '710645057.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(93, 'JOHN ', '', 'KISEKO', '710644648.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(94, 'MARGARET ', '', 'KIMONDIU', '710644777', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(95, 'GIFTON ', '', 'MWIKALI', '710644827.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(96, 'MBITHE ', '', 'KIMANZI', '710644800', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(97, 'MUTUKU ', '', 'MUTINDA', '710644878.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(98, 'MARY ', '', 'KILONZI', '710644583', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(99, 'CAROL ', '', 'WANZA', '710644731', 'F', 'Village', '0000-00-00', '2020-12-24', '2020-12-23', 0, '0000-00-00 00:00:00', ''),
(100, 'NDOTHYA ', '', 'ESTHER', '710644694.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(101, 'JOHN ', '', 'MUTUKU', '710644823', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(102, 'KAVINDU ', '', 'MUTINDA', '710644910.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(103, 'KANINI ', '', 'MAKAU', '710644689.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(104, 'KASUU ', '', 'KAMUNZYU', '710644873.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(105, 'DIANA ', '', 'WAMBUA', '710644652.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(106, 'DOUGLAS ', '', 'MUTUKU', '710644712.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(110, 'KITHOME ', '', 'KAVUU', '710644942.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(111, 'SYOMITI ', '', 'MUNYIVA', '710644841.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(112, 'CHRISTINE ', '', 'MUTHEKI', '710644790.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(116, 'KATOLOKI ', '', 'KALIMI', '710644915', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(117, 'MUKONYO ', '', 'MUTUKU', '710644832.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(121, 'KASIVA ', '', 'MONA', '710644836.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(123, 'JANET ', '', 'MUTHINA', '710644740.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(125, 'CECILIA  ', '', 'NDANU', '710644662', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(126, 'VICTOR ', '', 'MWENDWA', '710644583', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(127, 'BRENDA  ', 'MUKAI', 'KASYOKA', '710644666.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(128, 'PAUL ', '', 'MATATA', '710644882.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(129, 'MOSES ', '', 'NZIOKA', '710644749.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(131, 'MULWA ', '', 'NTHANZU', '710644786.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(132, 'AMINA ', '', 'REBECCA', '710644896.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(133, 'EVERLYN ', '', 'KAREGI', '710644961', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(136, 'JOHN ', '', 'MAINGI', '710644721.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(137, 'PIUS ', '', 'MBULI', '710644625.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(138, 'SAFARI ', '', 'MUSYOKI', '710644675.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(139, 'LUCIA ', '', 'MANGUYE', '710644859.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(140, 'JOHN ', '', 'MUTISYA', '710644606.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(150, 'MERCY ', '', 'NDUKU', '710644892', 'F', 'Community', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(151, 'STACY ', '', 'MUENI', '710644634.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(154, 'KEN ', '', 'MWIRARIA', '710644869', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(155, 'KITHINZI  ', '', 'MUSYIMI', '710644947.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(157, 'RAEL ', '', 'NDUNGE', '710644611.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(158, 'JULIUS ', '', 'MUASYA', '710645062.', 'M', 'Community', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(160, 'PATRICK ', '', 'MUNYOKI', '710645025.', 'M', 'Community', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(161, 'MUENDI ', '', 'MULWA', '710644979.', 'F', 'Community', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(162, 'MARGARET ', '', 'KASOLI', '710645030', 'F', 'Community', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(163, 'ZIPPORAH ', '', 'NGINA', '710645043.', 'F', 'Community', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(164, 'CHARLES ', '', 'MWANGANGI', '710645071.', 'M', 'Community', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(165, 'TERESIA ', '', 'MUNYOKI', '710644993.', 'F', 'Community', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(166, 'ROSE ', '', 'KALEVE', '710645016.', 'F', 'Community', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(167, 'BEATRICE ', '', 'KITHOME', '710645002.', 'F', 'Community', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(168, 'JANE ', '', 'MUSYOKI', '710644974.', 'F', 'Community', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(169, 'ERIC ', '', 'NZOMO', '710644924.', 'M', 'Community', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(170, 'JOSEPHINE ', '', 'MBALI', '710645020.', 'F', 'Community', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(171, 'ROSA ', '', 'MUUO', '710644984', 'F', 'Community', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(172, 'NZILU ', '', 'MUNYOKI', '710645053', 'M', 'Community', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(175, 'MUNINI ', '', 'MUNYIVA', '710644997.', 'F', 'Community', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(176, 'PETER ', '', 'MWANIKI', '710645034.', 'M', 'Community', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(177, 'KATUMBI ', '', 'VIVIANA', '710645066.', 'F', 'Community', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(178, 'KALEKYE ', '', 'KASIMA', '710645039.', 'F', 'Community', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(179, 'GLADYS ', '', 'EUNICE', '710644970.', 'F', 'Community', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(180, 'PETER ', '', 'MULATYA', '710645007', 'M', 'Community', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(181, 'YUMBYA ', '', 'KISEVE', '710644758.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(182, 'MARY ', '', 'WAMBUA', '710644919.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(183, 'MWENDWA ', '', 'KISEVE', '710644855.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(188, 'ELIZABETH ', '', 'NDUKU', '710644708', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(191, 'MALITI ', '', 'MUTIO', '710644680.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(192, 'MULUKI ', '', 'KAVITI', '710644804.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(193, 'CARRISON ', '', 'MWIKALI', '710644813.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(195, 'MUTINDA ', '', 'JOHN', '710644616', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(197, 'ESTHER  ', '', 'MUTHIANI', '710644951.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(198, 'NICHOLAS ', '', 'KASYOKA ', '710644565', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(199, 'KANINI ', '', 'NDUKU', '710644956.', 'F', 'Community', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(200, 'ELIZABETH  ', '', 'MWANZI', '710644846', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(201, 'MUTINDA ', '', 'KILONZI', '710644671.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(203, 'JANE ', '', 'KILONZI', '710644597.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(204, 'MWENDE ', '', 'MONICAH', '710644703.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(205, 'KIOKO ', '', 'MAKAU', '710644735.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(209, 'FIBI ', '', 'NGWASI', '710644754', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(211, 'ANN ', '', 'KASYOKA', '710644643.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(212, 'ANN ', '', 'NDULU', '710644965.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(213, 'STEPHEN ', '', 'KYALO', '710644577', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(214, 'ELIZABETH ', '', 'KALUNGU', '710644818.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(215, 'MUSYOKI ', '', 'MBITHE', '710644726.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(216, 'NDUKU ', '', 'KIVUVA', '710644988.', 'F', 'Community', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(217, 'MARTHA ', '', 'MBOYA', '710645011.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(218, 'FRANK ', '', 'MUCHUMBE', '710644928.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(220, 'TERESIA ', '', 'MVIWA', '710644620.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(221, 'EMMANUEL ', '', 'MUTHINI', '710644744.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(222, 'PENINAH ', '', 'MAWIA', '710644901.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(223, 'KATEI ', '', 'MUNYAO', '710644905.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(224, 'WANZIA ', '', 'SAMBIA', '710644933.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(225, 'ELIZABETH ', '', 'MUKAI', '710644850.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(226, 'ROSE ', '', 'MONTHE', '710644795.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(227, 'MWANZIA ', '', 'KASEE', '710644887.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(228, 'SHARON  ', 'MUMBE', 'KIMEU', '710644639', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(229, 'WAMBUA ', '', 'MANGOLE', '710644938', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(231, 'DENNIS ', '', 'NDUKU', '710644593', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(232, 'MULI ', '', 'NZIOKI', '710644864.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(233, 'FAITH ', '', 'NDINDA', '710644781.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(234, 'TABITHA ', '', 'MUTANU', '710644588', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(236, 'MICHAEL ', '', 'KATIWA', '710644698.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(237, 'JORUM ', '', 'MUNYAO', '710644685', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(238, 'DAVID ', '', 'MULINGE', '710644772.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(239, 'FAITH ', '', 'MWENDE', '710644767.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(248, 'HALIMA ', '', 'NTHOKI', '710644657.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(250, 'NDANU ', '', 'MUSENYA', '710644629.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(251, 'GRACE ', '', 'MUKELI', '710645048.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(252, 'VICTOR ', '', 'MUENI', '710644717.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(254, 'KYONGO ', '', 'KIILU', '710644763.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(255, 'KALONZO ', '', 'SAMUEL', '710644602.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(257, 'ESTHER ', '', 'MWIKALI', '710645076', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(258, 'MARK ', '', 'MAKAU', '710645080.', 'M', 'Community', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(259, 'EMILY ', 'KITUNGUU ', 'SAMMY', '710645085.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(260, 'MUASYA ', '', 'SARAH', '710645089.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(261, 'AUSTIN ', '', 'MUTHOKA', '710645094.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(262, 'BERNARD ', '', 'MBINDA', '710645099', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(263, 'FAITH ', '', 'MULATYA', '710645103.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(264, 'ESTHER ', '', 'KAKUVI', '710645108.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(265, 'DANIEL ', '', 'SAFARI', '710645112.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(266, 'NTHENYA ', '', 'MINOO', '710645117.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(267, 'BEN ', '', 'KATIWA', '710645122', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(268, 'MAKAU ', '', 'MUTIA', '710645126.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(269, 'EUNICE ', '', 'MUTHEU ', '710645131.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(270, 'SIMON ', 'MWAURA ', 'MBURU', '710645135.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(272, 'MUSEMBI ', '', 'MWIKALI', '710645140.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(273, 'BEATRICE ', 'MWIKALI ', 'MULI', '710645145', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(274, 'DANIEL ', 'KITUKU ', 'NDUNGE', '710645149.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(275, 'NDUKU  ', '', 'NTHAMBI', '710645154.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(276, 'ANTONY  ', 'WAMBUA', 'WAYUA', '710645158.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(277, 'JOSEPH ', '', 'MUSANGO', '710645163.', 'M', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(278, 'RHODA  ', 'NDUKU', 'NTHAMBI', '710645168', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(279, 'FAITH ', 'NDUNGE ', 'MUENI', '710645172.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(280, 'MARTHA ', 'MUENI ', 'GRACE', '710645177.', 'F', 'Village', '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00 00:00:00', ''),
(281, 'James', 'Ngungi', 'Kinyua', '0710644583', 'Male', 'Village', '2017-11-01', '2020-12-08', '2020-12-31', 0, '2020-12-31 14:07:42', ''),
(282, 'James', 'Ngungi', 'Kinyua', '0710644583', 'Male', 'Village', '2017-11-01', '2020-12-08', '2020-12-31', 0, '2020-12-31 14:08:12', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `detailed_results`
-- (See below for the actual view)
--
CREATE TABLE `detailed_results` (
`ccc_no` int(18)
,`Fname` varchar(20)
,`Mname` varchar(20)
,`Lname` varchar(20)
,`Gender` varchar(255)
,`Dob` date
,`ResultsID` int(11)
,`ccc_count` int(30)
,`art_start_date` date
,`art_regimen` varchar(255)
,`current_art_date` date
,`pre_vl_date` date
,`pre_vl_results` varchar(18)
,`curr_vl_date` date
,`viral_load` varchar(18)
,`cd4` int(18)
,`mstari` int(1)
);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `ResultsID` int(11) NOT NULL,
  `ccc_count` int(30) NOT NULL,
  `art_start_date` date NOT NULL,
  `art_regimen` varchar(255) NOT NULL,
  `current_art_date` date NOT NULL,
  `pre_vl_date` date NOT NULL,
  `pre_vl_results` varchar(18) NOT NULL,
  `curr_vl_date` date NOT NULL,
  `viral_load` varchar(18) NOT NULL,
  `cd4` int(18) NOT NULL,
  `mstari` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`ResultsID`, `ccc_count`, `art_start_date`, `art_regimen`, `current_art_date`, `pre_vl_date`, `pre_vl_results`, `curr_vl_date`, `viral_load`, `cd4`, `mstari`) VALUES
(1, 93, '2020-11-02', 'ABC/3TC/KALETRA', '2020-12-01', '2020-12-03', '898', '2020-11-03', '876', 7698, 1),
(2, 93, '2020-12-01', 'ABC/3TC/KALETRA', '2020-12-01', '2020-12-03', '898', '2020-08-04', '876', 7698, 1),
(3, 199, '2020-12-01', 'ABC/3TC/KALETRA', '2020-12-01', '2020-12-01', '43222', '2020-09-08', '456', 4343, 1),
(4, 199, '2020-12-01', 'ABC/3TC/KALETRA', '2020-12-01', '2020-12-01', '43222', '2020-10-06', '46', 4343, 1),
(6, 96, '2020-12-07', 'TDF/3TC/EFV', '2020-12-11', '2020-12-18', '117', '2020-12-11', 'LDL', 89, 1),
(7, 96, '2020-12-22', 'ABC/3TC/LPVR', '2020-12-01', '0000-00-00', 'LDL', '2020-12-23', '457', 0, 1),
(8, 99, '2020-12-01', 'TDF/3TC/DTG', '2020-12-01', '0000-00-00', '', '2020-12-01', '111', 124, 1),
(9, 99, '2020-12-01', 'ABC/3TC/KALETRA', '2020-12-01', '2020-12-01', '111', '2020-12-04', 'LDL', 452, 1),
(10, 99, '2020-12-01', 'ABC/3TC/LPVR', '2020-12-01', '2020-12-04', 'LDL', '2020-12-10', '1457', 741, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `User_id` int(11) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `passwordk` varchar(300) NOT NULL,
  `con_passwordk` varchar(300) NOT NULL,
  `Gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`User_id`, `Fname`, `Lname`, `username`, `email`, `passwordk`, `con_passwordk`, `Gender`) VALUES
(1, 'Lucky', 'Makau', 'Lucky', 'makaulucky20@gmail.com', '1f168838cdda252f94323ba3c25bc7d4', '12', 'Male'),
(7, 'James', 'Kinyua', 'James', 'jameskinyua@gmail.com', '3d5c4fe815d5a46e61a7a113b4fbc054', '123', 'Male');

-- --------------------------------------------------------

--
-- Structure for view `detailed_results`
--
DROP TABLE IF EXISTS `detailed_results`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detailed_results`  AS SELECT `a`.`ccc_no` AS `ccc_no`, `a`.`Fname` AS `Fname`, `a`.`Mname` AS `Mname`, `a`.`Lname` AS `Lname`, `a`.`Gender` AS `Gender`, `a`.`Dob` AS `Dob`, `r`.`ResultsID` AS `ResultsID`, `r`.`ccc_count` AS `ccc_count`, `r`.`art_start_date` AS `art_start_date`, `r`.`art_regimen` AS `art_regimen`, `r`.`current_art_date` AS `current_art_date`, `r`.`pre_vl_date` AS `pre_vl_date`, `r`.`pre_vl_results` AS `pre_vl_results`, `r`.`curr_vl_date` AS `curr_vl_date`, `r`.`viral_load` AS `viral_load`, `r`.`cd4` AS `cd4`, `r`.`mstari` AS `mstari` FROM (`results` `r` left join `admission` `a` on(`a`.`ccc_no` = `r`.`ccc_count`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`ccc_no`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`ResultsID`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `ccc_no` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=283;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `ResultsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
