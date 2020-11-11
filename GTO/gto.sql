-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 30, 2019 at 10:27 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gto`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `Clientid` int(11) NOT NULL AUTO_INCREMENT,
  `Fullname` text NOT NULL,
  `Phonenumber` int(56) NOT NULL,
  `Email` varchar(89) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Dateofbirth` date NOT NULL,
  PRIMARY KEY (`Clientid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Clientid`, `Fullname`, `Phonenumber`, `Email`, `Password`, `Dateofbirth`) VALUES
(8, 'Selam Tadele', 12345, 'yowielijah@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', '2019-08-06'),
(7, 'tiruye', 1234, 'yowielijah@gmail.com', 'a01610228fe998f515a72dd730294d87', '2019-08-13'),
(6, 'Fireayehu Zekarias', 928970038, 'fere@gmail.com', 'a01610228fe998f515a72dd730294d87', '2019-08-13'),
(9, 'Lidya Teshome', 123456789, 'lidu@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2019-08-13'),
(10, 'Alemu Abate', 918705330, 'alemu@yahoo.com', 'de0917af58dcc1b749e090f5581bdca6', '1968-05-14'),
(11, 'Netsanet Getachew', 98765432, 'netsanet@gmail.com', '9e1e06ec8e02f0a0074f2fcc6b26303b', '2019-08-20'),
(12, 'Alemu Abate', 918705330, 'alemu@ymail.com', 'de0917af58dcc1b749e090f5581bdca6', '1962-03-14'),
(13, 'Yeabsira Alemu', 900182187, 'yabi@gmail.com', '15de21c670ae7c3f6f3f1f37029303c9', '2019-07-28'),
(14, 'Zenawork Fanta', 8747453, 'zozo@gmail.com', '93279e3308bdbbeed946fc965017f67a', '2019-07-28'),
(15, 'Zenawork Fanta', 8747453, 'zozo@gmail.com', '93279e3308bdbbeed946fc965017f67a', '2019-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` int(100) NOT NULL,
  `ContactReason` varchar(100) NOT NULL,
  `Message` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `Name`, `Email`, `Phone`, `ContactReason`, `Message`) VALUES
(2, 'tiruye worku', 'zozo@gmail.com', 34344, 'The payment system', 'good job'),
(3, 'tiruye worku', 'zozo@gmail.com', 34344, 'The payment system', 'good job');

-- --------------------------------------------------------

--
-- Table structure for table `elemntarycourses`
--

DROP TABLE IF EXISTS `elemntarycourses`;
CREATE TABLE IF NOT EXISTS `elemntarycourses` (
  `elemId` int(11) NOT NULL AUTO_INCREMENT,
  `english` varchar(50) NOT NULL,
  `maths` varchar(50) NOT NULL,
  `biology` varchar(50) NOT NULL,
  `physics` varchar(50) NOT NULL,
  `chemistry` varchar(50) NOT NULL,
  `science` varchar(50) NOT NULL,
  `social` varchar(50) NOT NULL,
  `civics` varchar(50) NOT NULL,
  `IT` varchar(50) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  PRIMARY KEY (`elemId`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elemntarycourses`
--

INSERT INTO `elemntarycourses` (`elemId`, `english`, `maths`, `biology`, `physics`, `chemistry`, `science`, `social`, `civics`, `IT`, `tutor_id`) VALUES
(21, '', 'Elementary-Mathematics', '', 'Elementary-Physics', '', '', '', '', '', 62),
(20, 'Elementary-English', 'Elementary-Mathematics', 'Elementary-Biology', 'Elementary-Physics', 'Elementary-Chemistry', 'Elementary-Science', '', '', 'Elementary-IT', 61),
(22, '', 'Elementary-Mathematics', '', '', '', '', '', '', '', 64),
(23, '', '', 'Elementary-Biology', 'Elementary-Physics', 'Elementary-Chemistry', '', '', '', '', 65);

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

DROP TABLE IF EXISTS `grade`;
CREATE TABLE IF NOT EXISTS `grade` (
  `gradeId` int(11) NOT NULL AUTO_INCREMENT,
  `kg` int(11) NOT NULL,
  `elemntary` int(11) NOT NULL,
  `highschool` int(11) NOT NULL,
  PRIMARY KEY (`gradeId`)
) ENGINE=MyISAM AUTO_INCREMENT=175 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`gradeId`, `kg`, `elemntary`, `highschool`) VALUES
(147, 0, 0, 3),
(146, 1, 0, 0),
(145, 0, 2, 0),
(144, 0, 0, 3),
(143, 0, 2, 0),
(148, 0, 0, 3),
(149, 0, 0, 3),
(150, 0, 0, 3),
(151, 0, 0, 3),
(152, 0, 0, 3),
(153, 0, 0, 3),
(154, 0, 0, 3),
(155, 0, 0, 3),
(156, 1, 0, 0),
(157, 1, 0, 0),
(158, 0, 0, 3),
(159, 0, 0, 3),
(160, 0, 0, 3),
(161, 0, 0, 3),
(162, 0, 0, 3),
(163, 0, 0, 3),
(164, 0, 0, 3),
(165, 0, 0, 3),
(166, 0, 0, 3),
(167, 0, 2, 0),
(168, 0, 0, 3),
(169, 0, 0, 3),
(170, 0, 0, 3),
(171, 0, 2, 0),
(172, 1, 0, 0),
(173, 0, 0, 3),
(174, 0, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `highschoolcourses`
--

DROP TABLE IF EXISTS `highschoolcourses`;
CREATE TABLE IF NOT EXISTS `highschoolcourses` (
  `highId` int(11) NOT NULL AUTO_INCREMENT,
  `maths` varchar(50) NOT NULL,
  `english` varchar(50) NOT NULL,
  `IT` varchar(50) NOT NULL,
  `biology` varchar(50) NOT NULL,
  `physics` varchar(50) NOT NULL,
  `chemistry` varchar(50) NOT NULL,
  `economics` varchar(50) NOT NULL,
  `business` varchar(50) NOT NULL,
  `geography` varchar(50) NOT NULL,
  `history` varchar(50) NOT NULL,
  `civics` varchar(50) NOT NULL,
  `drawing` varchar(50) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  PRIMARY KEY (`highId`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `highschoolcourses`
--

INSERT INTO `highschoolcourses` (`highId`, `maths`, `english`, `IT`, `biology`, `physics`, `chemistry`, `economics`, `business`, `geography`, `history`, `civics`, `drawing`, `tutor_id`) VALUES
(48, 'Highschool-English', 'Highschool-Mathematics', 'Highschool-IT', 'Highschool-Biology', 'Highschool-Chemistry', 'Highschool-Physics', '', '', '', '', '', 'Highschool-Technical Drawing', 61),
(49, '', 'Highschool-Mathematics', '', '', '', 'Highschool-Physics', '', '', '', '', '', '', 62),
(50, 'Highschool-English', 'Highschool-Mathematics', 'Highschool-IT', 'Highschool-Biology', 'Highschool-Chemistry', '', '', '', '', '', '', 'Highschool-Technical Drawing', 63),
(51, '', '', 'Highschool-IT', 'Highschool-Biology', '', 'Highschool-Physics', '', '', '', '', '', '', 65),
(52, '', 'Highschool-Mathematics', 'Highschool-IT', 'Highschool-Biology', 'Highschool-Chemistry', 'Highschool-Physics', '', '', '', '', '', '', 66);

-- --------------------------------------------------------

--
-- Table structure for table `kgcourses`
--

DROP TABLE IF EXISTS `kgcourses`;
CREATE TABLE IF NOT EXISTS `kgcourses` (
  `kgId` int(11) NOT NULL AUTO_INCREMENT,
  `english` varchar(50) NOT NULL,
  `maths` varchar(50) NOT NULL,
  `science` varchar(50) NOT NULL,
  `art` varchar(50) NOT NULL,
  `music` varchar(50) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  PRIMARY KEY (`kgId`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kgcourses`
--

INSERT INTO `kgcourses` (`kgId`, `english`, `maths`, `science`, `art`, `music`, `tutor_id`) VALUES
(86, '', 'KG-Mathematics', '', '', '', 62),
(87, '', '', 'KG-Science', 'KG-Art', '', 65);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

DROP TABLE IF EXISTS `rate`;
CREATE TABLE IF NOT EXISTS `rate` (
  `rateId` int(10) NOT NULL AUTO_INCREMENT,
  `cliId` int(10) DEFAULT NULL,
  `tuId` int(10) DEFAULT NULL,
  `value` int(10) DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`rateId`),
  KEY `tuId` (`tuId`),
  KEY `cliId` (`cliId`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`rateId`, `cliId`, `tuId`, `value`, `comment`) VALUES
(40, 10, 61, 5, 'awesome!'),
(38, 62, 62, 3, 'Smart!\r\n'),
(39, 11, 61, 4, 'Smart!'),
(41, 12, 63, 1, 'you are a good tutor my kids love you, Cray on'),
(42, 64, 64, 1, 'what a shame'),
(43, 64, 64, 1, 'what a shame');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

DROP TABLE IF EXISTS `tutor`;
CREATE TABLE IF NOT EXISTS `tutor` (
  `tutorId` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` char(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phoneno` int(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `story` text NOT NULL,
  `img` varchar(50) NOT NULL,
  PRIMARY KEY (`tutorId`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`tutorId`, `fullname`, `dob`, `gender`, `email`, `password`, `phoneno`, `address`, `story`, `img`) VALUES
(62, 'Yewoineshet Elias', '2019-08-06', 'Female', 'yowielijah@gmail.com', '0909', 938984368, 'Addis Abeba', 'I am a hardworking and ambitious individual with a great passion for technology and leadership. I am currently in my forth year of studying Electrical and Computer Engineering at AAiT. I have excellent communication skills, enabling me to effectively communicate with a wide range of people. I am seeing a part-time position in the industry in which I can put into practice my knowledge and experience, ultimately benefiting myself and the operations of the organisation that I work for.', 'WIN_20190812_11_27_19_Pro.jpg'),
(61, 'Meron Alemu', '1997-06-23', 'Female', 'meron2304@gmail.com', '2304', 938836996, 'Bahir Dar', ' I am a person with high commitment and good technical skills. I spent most of my time in school engaging in active clubs, STEM outreach programs, associations and social groups. I love  volunteering in my society.I am going to graduate next year from Addis Ababa University in Electrical and Computer Engineering micro-electronics stream. Currently I am attaining Entoto Summer Tech Fellowship on Web development. I am passionate to work as a web developer , also i have a great  communication skills and experience in organizing events.\r\n', 'ld.jpg'),
(63, 'Tamiralech Yihunie', '1996-08-10', 'Female', 'tamyihu38@gmail.com', 'tam38223267', 938223267, 'bahir dar', 'I am interested person for offering Gebeya Trainings.  My Training model is essential practical at its core. I have some acquired knowledge of C, C++, Java, HTML, PHP, MYSQL, and Word Press. Therefore, my goal is to get an opportunity of Gebeya Women Intake Curriculum Training.  I received my B.Sc. degree in Computer Science from Woldia University in 2017.  It essentially prepares to become a Back end Engineer, software engineer in the real world Eventually, I want to be a part of a successful Backend Engineer firm in Ethiopia. I have good organizational and time management skills. However, my greatest strength is my ability to effectively handle projects and deadlines. Furthermore, I have good computer skills such as MS word, Power Point, Excel, Access and Publisher. I want to be a professional manager of a startup due to my ability to solve complex problems.  My hobbies are writing programs, research, and developing new software that can solve problems in our country. I am currently a student of website design and software development. After this course, I hope to be able to be problem solver, Solution Provider. \r\n', 'tamer.jpg'),
(65, 'Tigest Ashine Tsegaw', '2019-08-05', 'Female', 'marta@gmail.com', '1212', 123456789, 'Merhabete,Rema,Ethiopia', 'I was graduated from Woldia University by  B.SC  Information Technology in 2017 . Currently I am a student in the ENTOTO Tech Fellowship, where I learned website and software development. I have learned HTML, CSS, JavaScript, JQuery, Ajax, Bootstrap, PHP, Word press, and MYSQL. I am also certified with entrepreneurship from Entrepreneurship Development Center (EDC) and Computer maintenance and networking from SATCOM.', ''),
(66, 'Fikrie Nibrtie Getent ', '2019-07-28', 'Female', 'fiker@gmail.com', '1122', 909900999, 'Dejen, Amhara Region,Ethiopia', 'My name is Fikrie Nibrtie Getent . I am from Dejjn where I attended Goamberber Secondary and Preparatory school. In 2014 I graduated Debremarkose University with a Bachelorâ€™s Degree in Electrical and Computer Engineering. I want to obtain a position in Software Engineering after learning a multitude of web development skills in  the Entoto Project. ', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tutor2`
--

DROP TABLE IF EXISTS `tutor2`;
CREATE TABLE IF NOT EXISTS `tutor2` (
  `tutor2Id` int(11) NOT NULL AUTO_INCREMENT,
  `eduStatus` varchar(50) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `school` varchar(50) NOT NULL,
  `pay` double NOT NULL,
  `cv` varchar(50) NOT NULL,
  `tutor_id` varchar(200) NOT NULL,
  PRIMARY KEY (`tutor2Id`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor2`
--

INSERT INTO `tutor2` (`tutor2Id`, `eduStatus`, `experience`, `school`, `pay`, `cv`, `tutor_id`) VALUES
(94, 'Bachelor Degree', '0', 'AAiT, SECE', 400, 'memi.pdf', '61'),
(95, 'Bachelor Degree', '1-5 yrs', 'AAiT, Electrical and Computer Engineering', 300, 'Mita.docx', '62'),
(96, 'Bachelor Degree', '0', 'woldia University', 300, 'history of mine.docx', '63'),
(98, 'Bachelor Degree', '1-5 yrs', 'aait', 400, '4_5971779707258012831 (2).docx', '65'),
(99, 'Diploma', '1-5 yrs', 'DMU, Electrical and Computer Engineering', 300, 'NewProject Proposal(Mita).docx', '66');

-- --------------------------------------------------------

--
-- Table structure for table `tutorgrade`
--

DROP TABLE IF EXISTS `tutorgrade`;
CREATE TABLE IF NOT EXISTS `tutorgrade` (
  `tgId` int(11) NOT NULL AUTO_INCREMENT,
  `gradeId` int(11) NOT NULL,
  `tutorId` int(11) NOT NULL,
  PRIMARY KEY (`tgId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tutorsubject`
--

DROP TABLE IF EXISTS `tutorsubject`;
CREATE TABLE IF NOT EXISTS `tutorsubject` (
  `tsId` int(11) NOT NULL AUTO_INCREMENT,
  `elemId` int(11) NOT NULL,
  `highId` int(11) NOT NULL,
  `kgId` int(11) NOT NULL,
  PRIMARY KEY (`tsId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
