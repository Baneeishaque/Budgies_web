-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2016 at 01:02 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `budgies`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `propic` varchar(100) NOT NULL,
  `mobile_no` varchar(100) NOT NULL,
  `home_town` varchar(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `hobby` varchar(100) NOT NULL,
  `bio` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `fqoute` varchar(100) NOT NULL,
  `role_model` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `dept`, `qualification`, `username`, `password`, `propic`, `mobile_no`, `home_town`, `education`, `date_of_birth`, `hobby`, `bio`, `gender`, `fqoute`, `role_model`, `id`) VALUES
('z', 'z@vatt.com', 'cmptr', 'pottan', '12', 'z', 'ab.jpg', '3468900000', 'ghfhgk', 'ygwgweke', '1/1/1000', 'jydhfhfhef', 'gfkukyghkjr', 'sailiuaifi', 'iywlwfye', 'wlidw', 1);

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE `block` (
  `id` int(11) NOT NULL,
  `partner1` int(11) NOT NULL,
  `partner2` int(11) NOT NULL,
  `cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `block`
--

INSERT INTO `block` (`id`, `partner1`, `partner2`, `cat`) VALUES
(11, 6, 13130408, 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `sender` varchar(50) NOT NULL,
  `reciever` varchar(50) NOT NULL,
  `chatdate` varchar(50) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`sender`, `reciever`, `chatdate`, `msg`, `id`) VALUES
('6', '0', '2016-03-01 14:25:12', 'hai', 155),
('6', '11', '2016-03-01 14:25:22', 'hai', 156),
('6', '13130408', '2016-03-01 14:25:29', 'hai', 157),
('13130408', '6', '2016-03-01 14:27:14', 'hai', 158),
('111', '123456', '2016-03-01 17:04:52', 'hai', 159),
('123456', '111', '2016-03-01 17:04:55', 'mwuthe...', 160),
('111', '123456', '2016-03-01 17:05:18', 'sugalleddaaaa', 161),
('111', '123456', '2016-03-01 17:06:20', 'heyyyyyyy', 162),
('6', '111', '2016-03-01 17:06:29', 'Aadi à´®àµà´¤àµà´¤àµ†... ðŸ˜˜ðŸ˜˜ðŸ˜˜', 163),
('6', '111', '2016-03-01 17:06:35', '', 164),
('6', '111', '2016-03-01 17:06:38', 'ðŸ˜˜ðŸ˜˜ðŸ˜˜', 165),
('111', '123456', '2016-03-01 17:07:27', 'patttyyyyy', 166),
('6', '111', '2016-03-01 17:07:36', 'ðŸ˜˜ðŸ˜˜ðŸ˜˜', 167),
('6', '111', '2016-03-01 17:07:47', 'à´®àµà´¤àµà´¤àµ‡...', 168),
('6', '111', '2016-03-01 17:07:51', '', 169),
('6', '123456', '2016-03-01 17:08:05', 'à´•àµàµàµàµ', 170),
('6', '123456', '2016-03-01 17:08:06', '', 171),
('6', '123456', '2016-03-01 17:08:06', '', 172),
('6', '123456', '2016-03-01 17:08:06', '', 173),
('6', '123456', '2016-03-01 17:08:07', '', 174),
('123456', '111', '2016-03-01 17:09:01', 'hiiii', 175),
('123456', '111', '2016-03-01 17:11:04', 'à´®àµà´¤àµà´¤àµ‡... ðŸ˜˜ðŸ˜˜ðŸ˜˜', 176),
('123456', '111', '2016-03-01 17:11:36', 'à´ªàµ‚...', 177),
('111', '123456', '2016-03-01 17:11:46', 'puthiya site ethaaa', 178),
('123456', '111', '2016-03-01 17:12:16', 'Srry bussy aanu mole...at bathroom... ;-)', 179),
('111', '123456', '2016-03-01 17:12:33', 'ha ha ha', 180),
('123456', '111', '2016-03-01 17:12:53', 'Enthaa perupaadi...???', 181),
('123456', '111', '2016-03-01 17:13:17', 'Enthu dress aahhh ittirikunnath...??? :-)', 182),
('111', '123456', '2016-03-01 17:13:39', 'chattayum mundum', 183),
('123456', '111', '2016-03-01 17:14:00', 'Uffff... pwoLich moLe... ðŸ˜˜', 184),
('111', '123456', '2016-03-01 17:14:24', 'ðŸ˜ˆðŸ˜ˆðŸ˜ˆðŸ˜ˆðŸ˜ˆðŸ˜ˆ', 185),
('123456', '111', '2016-03-01 17:15:19', 'ðŸ˜˜ðŸ˜‹ðŸ˜˜ðŸ˜·ðŸ˜”ðŸ˜—ðŸ˜›hdhrbhjfbrjdjdjjdidjjrijfjrijhggyyugffhuuhhhdhrbhjfbrjdjdjjdidjj   jhfj how it got hot girl JPY get het days yuck know exactly where near change ZenCircle kidding leave', 186),
('111', '123456', '2016-03-01 17:15:23', 'gjhhjjjjjjjbfh thhsgshhshshshshhsgdhhshshhsgshegssgshsgsggsjghdgdhdgshgisgisghshsgsjssjegsuegiwggsgsihsehsugegsisgsjjsgdhhdhshdgduegshhdhsusgsnsosuetekashgsjshdjsjdgdjdyshe', 187),
('111', '123456', '2016-03-01 17:16:15', 'dÃ aaaaaaaaa', 188),
('123456', '111', '2016-03-01 17:16:16', 'Yy8yguij jjgg j hhhj hj ujj jfdhjk hkkh kjhg jhgg jjffyi ujhgb kiffb ihggj iyfgj iyggk jhfgj jgftuib hhrhkjb hfhib hfhjbb hgfyu', 189),
('123456', '111', '2016-03-01 17:16:41', 'ðŸ‘¦ðŸ¶ðŸ¶ðŸ¶', 190),
('111', '123456', '2016-03-01 17:16:46', 'gjsgsjsjs shshisiisis hdhhdhhdhdh hshshdhdhhdh hdhhdhdhhdhd hshdhdggdhd hdhdhdhdhdhd gdggdh', 191),
('123456', '111', '2016-03-01 17:16:59', 'Dahhh', 192),
('123456', '111', '2016-03-01 17:17:17', 'Poova...??? ðŸ˜ž', 193);

-- --------------------------------------------------------

--
-- Table structure for table `chatreceiver`
--

CREATE TABLE `chatreceiver` (
  `id` int(11) NOT NULL,
  `partner1` int(11) NOT NULL,
  `partner2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatreceiver`
--

INSERT INTO `chatreceiver` (`id`, `partner1`, `partner2`) VALUES
(16, 13130408, 6),
(17, 6, 0),
(18, 13130401, 0),
(19, 111, 0),
(20, 123456, 111);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `auther` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `comment` varchar(150) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `hod` varchar(50) NOT NULL,
  `staff` varchar(100) NOT NULL,
  `hpic` varchar(50) NOT NULL,
  `date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `disliked`
--

CREATE TABLE `disliked` (
  `id` int(11) NOT NULL,
  `forum_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disliked`
--

INSERT INTO `disliked` (`id`, `forum_id`, `user_id`) VALUES
(40, 36, 13130401);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `tittle` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `provider` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`tittle`, `date`, `filename`, `id`, `provider`, `status`) VALUES
('bnnn', '01/03/2016', 'Jellyfish.jpg', 19, 6, 1),
('bvnn', '01/03/2016', 'Penguins.jpg', 20, 6, 1),
('me', '01/03/2016', 'wallpaper 57_neovista.jpg', 21, 13130408, 1),
('ma bull', '01/03/2016', '8BA31641B1D54CBFA49F00D25375FE2B.jpg', 24, 123456, 0),
('txt', '01/03/2016', 'README[1].txt', 25, 123456, 0);

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `date` varchar(15) DEFAULT NULL,
  `provider` int(20) NOT NULL,
  `providertype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `image`, `description`, `date`, `provider`, `providertype`) VALUES
(34, 'Lighthouse.jpg', 'light', '01/03/16', 6, 'Teacher'),
(35, '921374_356906184415937_2015143391_o.jpg', 'old is gold', '01/03/16', 13130408, 'Teacher'),
(36, 'Koala.jpg', 'gfhf', '01/03/16', 6, 'Teacher'),
(37, '8BA31641B1D54CBFA49F00D25375FE2B.jpg', 'Uma kaanthan;s bike', '01/03/16', 123456, 'Teacher'),
(38, '8f3c0bc95c92e692083fdbdbe007aad2.jpg', 'hi\r\n', '01/03/16', 123456, 'Teacher'),
(39, 'Jellyfish.jpg', '', '01/03/16', 111, 'Teacher'),
(40, 'Hydrangeas.jpg', '', '01/03/16', 111, 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `gamesresult`
--

CREATE TABLE `gamesresult` (
  `dept` varchar(50) NOT NULL,
  `sex` varchar(25) NOT NULL,
  `item` varchar(100) NOT NULL,
  `place` varchar(50) NOT NULL,
  `point` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gamesresult`
--

INSERT INTO `gamesresult` (`dept`, `sex`, `item`, `place`, `point`) VALUES
('Civil', 'BOYS', 'basket Ball', 'First', 10),
('Computer', 'GENERAL', 'Football', 'Second', 5),
('Electrical', 'GENERAL', 'Basket Ball', 'Third', 3),
('Automobile', 'BOYS', 'Table Tennis', 'First', 10),
('Mechanical', 'GIRLS', 'Cricket', 'Second', 5),
('Electronics', 'GENERAL', 'Football', 'First', 10),
('Civil', 'GENERAL', 'Cricket', 'Third', 3),
('Computer', 'GENERAL', 'Cricket', 'Second', 5),
('Computer', 'BOYS', 'Basket Ball', 'First', 10),
('Computer', 'GIRLS', 'Table Tennis', 'Second', 5),
('Automobile', 'BOYS', 'Basket Ball', 'Third', 3),
('Electrical', 'GENERAL', 'Football', 'First', 10),
('', '', '', '', 3),
('Computer', 'GENERAL', 'Football', 'Second', 5),
('', '', '', '', 3),
('Electronics', 'GENERAL', 'Table Tennis', 'First', 10),
('Electronics', 'GENERAL', 'Table Tennis', 'First', 10),
('', '', '', '', 3),
('', '', '', '', 3),
('', '', '', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `liked`
--

CREATE TABLE `liked` (
  `id` int(11) NOT NULL,
  `forum_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `liked`
--

INSERT INTO `liked` (`id`, `forum_id`, `user_id`) VALUES
(52, 36, 13130401),
(53, 35, 13130401),
(54, 34, 13130401),
(55, 36, 6),
(56, 35, 6),
(57, 34, 6),
(58, 39, 6),
(59, 39, 123456),
(61, 40, 123456),
(62, 40, 6),
(63, 38, 6);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `addno` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`addno`, `password`, `role`, `id`) VALUES
(11, 'a', 'Student', 3),
(6, 'y', 'Teacher', 4),
(13130408, '123', 'Teacher', 5),
(0, 'teacher', 'Teacher', 7),
(13130401, '123123', 'Student', 8),
(123456, '123456', 'Teacher', 9),
(1, 'admin', 'Admin', 10),
(111, '111', 'Teacher', 11);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `date` varchar(50) NOT NULL,
  `tittle` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `category` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`date`, `tittle`, `description`, `category`, `id`) VALUES
('01/03/2016', 'ytyuyrtth', 'yuui', 'General', 27),
('01/03/2016', 'ytyuyrtthjtu', 'yuui', 'General', 28);

-- --------------------------------------------------------

--
-- Table structure for table `overallresult`
--

CREATE TABLE `overallresult` (
  `dept` varchar(50) NOT NULL,
  `games` int(100) NOT NULL,
  `sports` int(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `overallresult`
--

INSERT INTO `overallresult` (`dept`, `games`, `sports`, `total`) VALUES
('AUTOMOBILE', 13, 32, 45),
('CIVIL', 13, 39, 52),
('COMPUTER', 30, 20, 50),
('ELECTRICAL', 13, 4, 17),
('ELECTRONICS', 30, 23, 53),
('MECHANICAL', 5, 19, 24);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `image` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `image`) VALUES
(1, 'g55.jpg'),
(2, 'g8.jpg'),
(3, 'g11.jpg'),
(4, 'sb3.jpg'),
(6, 'img.jpg'),
(7, 'g8.jpg'),
(8, 'g55.jpg'),
(9, 'img.jpg'),
(10, 'aab.jpg'),
(16, 'img.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(100) NOT NULL,
  `chestno` int(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `sem` varchar(25) NOT NULL,
  `sex` varchar(25) NOT NULL,
  `items` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `point` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `chestno`, `name`, `dept`, `sem`, `sex`, `items`, `place`, `point`) VALUES
(7, 6, 'ajeesh', 'Electrical', '1', 'Male', 'Shot Put', 'Third', 1),
(9, 2, 'manu ', 'Automobile', '3', 'Male', '400 M', 'First', 5),
(10, 3, 'jasmhi', 'Mechanical', '4', 'Male', '1500 M', 'Third', 1),
(11, 4, 'hafis', 'Electronics', '5', 'Male', 'Long Jumb', 'Second', 3),
(12, 5, 'suhail', 'Civil', '6', 'Male', '400 M', 'Third', 1),
(13, 1, 'jafar ali', 'Computer', '2', 'Male', '200 M', 'Second', 3),
(14, 1, 'jafar ali', 'Computer', '2', 'Male', '400 M', 'First', 5),
(16, 2, 'manu ', 'Automobile', '3', 'Male', '5000 M', 'First', 5),
(17, 2, 'manu ', 'Automobile', '3', 'Male', '5000 M', 'First', 5),
(18, 12, 'Reka', 'Automobile', '1', 'Female', '100 M', 'Third', 5),
(19, 10, 'aki', 'Civil', '6', 'Female', '100 M', 'Second', 3),
(20, 8, 'nimisha', 'Automobile', '3', 'Female', '100 M', 'First', 1),
(21, 3, 'jasmhi', 'Mechanical', '4', 'Male', 'Long Jumb', 'First', 5),
(22, 14, 'vishnu vp', 'Electronics', '1', 'Male', '200 M', 'First', 5),
(23, 14, 'vishnu vp', 'Electronics', '1', 'Male', '200 M', 'First', 5),
(24, 14, 'vishnu vp', 'Electronics', '1', 'Male', '200 M', 'First', 5),
(34, 16, 'Mhmd Shahir ', 'Electrical', '1', 'Male', '200 M', 'Second', 3),
(35, 1, 'jafar ali', 'Computer', '2', 'Male', '200 M', 'Third', 1),
(36, 2, 'manu ', 'Automobile', '3', 'Male', '400 M', 'First', 5),
(38, 3, 'jasmhi', 'Mechanical', '4', 'Male', 'Hammer Throw', 'First', 5),
(40, 5, 'suhail', 'Civil', '6', 'Male', '400 M', 'Third', 3),
(41, 11, 'Arif ahmd', 'Computer', '2', 'Male', 'Hammer Throw', 'First', 5),
(42, 3, 'jasmhi', 'Mechanical', '4', 'Male', '10000 M', 'First', 5),
(43, 5, 'suhail', 'Civil', '6', 'Male', '400 M', 'Third', 5),
(44, 11, 'Arif ahmd', 'Computer', '2', 'Male', 'Hammer Throw', 'Second', 3),
(46, 18, 'manu krishnan', 'Electronics', '3', 'Male', '100 M', 'First', 5),
(48, 5, 'suhail', 'Civil', '6', 'Male', '400 M', 'Third', 3),
(50, 5, 'suhail', 'Civil', '6', 'Male', '400 M', 'Third', 3),
(53, 2, 'manu ', 'Automobile', '3', 'Male', '400 M', 'Second', 3),
(54, 2, 'manu ', 'Automobile', '3', 'Male', '400 M', 'Second', 3),
(70, 5, 'suhail', 'Civil', '6', 'Male', '400 M', 'Third', 3),
(71, 5, 'suhail', 'Civil', '6', 'Male', '400 M', 'Third', 3),
(72, 5, 'suhail', 'Civil', '6', 'Male', '400 M', 'Third', 5),
(73, 9, 'keerthi', 'Mechanical', '1', 'Female', '1500 M', 'Second', 3),
(79, 11, 'Arif ahmd', 'Computer', '6', 'Male', '200 M', 'Second', 3),
(80, 5, 'suhail', 'Civil', '6', 'Male', '400 M', 'Third', 5),
(81, 5, 'suhail', 'Civil', '6', 'Male', '400 M', 'Third', 5);

-- --------------------------------------------------------

--
-- Table structure for table `sportsreg`
--

CREATE TABLE `sportsreg` (
  `name` varchar(250) NOT NULL,
  `addno` int(100) NOT NULL,
  `chestno` int(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `sex` varchar(25) NOT NULL,
  `item1` varchar(100) NOT NULL,
  `item2` varchar(100) NOT NULL,
  `item3` varchar(100) NOT NULL,
  `pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sportsreg`
--

INSERT INTO `sportsreg` (`name`, `addno`, `chestno`, `dept`, `sem`, `sex`, `item1`, `item2`, `item3`, `pic`) VALUES
('jafar ali', 1234, 1, 'Computer', '2', 'Male', '100 M', '400 M', 'Long Jumb', ''),
('manu ', 1235, 2, 'Automobile', '3', 'Male', '200 M', '800 M', '1500 M', ''),
('jasmhi', 1236, 3, 'Mechanical', '4', 'Male', '5000 M', '5000 M', '10000 M', ''),
('hafis', 1237, 4, 'Electronics', '5', 'Male', 'Long Jumb', 'High Jumb', '100 M', ''),
('suhail', 1238, 5, 'Civil', '6', 'Male', 'Tripple Jumb', 'Pole Vault', 'Shot Put', ''),
('ajeesh', 1239, 6, 'Electrical', '1', 'Male', 'Pole Vault', 'Discuss Throw', 'Javelin Throw', ''),
('akil', 1240, 7, 'Computer', '2', 'Male', 'Hammer Throw', 'Javelin Throw', '200 M', ''),
('nimisha', 1241, 8, 'Automobile', '3', 'Female', '100 M', 'Long Jumb', 'Nil', ''),
('keerthi', 1242, 9, 'Mechanical', '1', 'Female', '200 M', '800 M', 'Tripple Jumb', ''),
('aki', 1244, 10, 'Civil', '6', 'Female', 'Nil', '100 M', '400 M', ''),
('Arif ahmd', 678, 11, 'Computer', '6', 'Male', '100 M', 'Hammer Throw', 'Nil', ''),
('Reka', 1243, 12, 'Automobile', '1', 'Female', '100 M', '200 M', '400 M', ''),
('vishnu vp', 1245, 14, 'Electronics', '1', 'Male', '100 M', '200 M', '10000 M', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(50) NOT NULL,
  `addno` int(25) NOT NULL,
  `regno` int(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dept` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `status` int(55) NOT NULL DEFAULT '0',
  `propic` varchar(100) NOT NULL,
  `mobile_no` varchar(100) NOT NULL,
  `home_town` varchar(50) NOT NULL,
  `education` varchar(50) NOT NULL,
  `date_of_birth` varchar(50) NOT NULL,
  `hobby` varchar(100) NOT NULL,
  `bio` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `fqoute` varchar(100) NOT NULL,
  `role_model` varchar(50) NOT NULL,
  `line` varchar(50) NOT NULL DEFAULT 'off'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `addno`, `regno`, `email`, `dept`, `password`, `username`, `status`, `propic`, `mobile_no`, `home_town`, `education`, `date_of_birth`, `hobby`, `bio`, `gender`, `fqoute`, `role_model`, `line`) VALUES
('dk', 11, 45, 'badfsggd@jjggkg.com', 'Computer', 'a', 'a', 1, 'Chrysanthemum.jpg', '', '', '', '', '', '', '', '', '', 'on'),
('Jamshi ks', 13130401, 13130401, 'ksjamshi@gmail.com', 'Electronics', '123123', 'jamssss', 0, '01_thumbnail.jpg', '', '', '', '', '', '', '', '', '', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `id` int(25) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `propic` varchar(100) NOT NULL,
  `mobile_no` varchar(100) NOT NULL,
  `home_town` varchar(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `hobby` varchar(100) NOT NULL,
  `bio` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `fqoute` varchar(100) NOT NULL,
  `role_model` varchar(100) NOT NULL,
  `line` varchar(50) NOT NULL DEFAULT 'off',
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`name`, `email`, `dept`, `id`, `qualification`, `username`, `password`, `propic`, `mobile_no`, `home_town`, `education`, `date_of_birth`, `hobby`, `bio`, `gender`, `fqoute`, `role_model`, `line`, `status`) VALUES
('ali', 'banee@gmail.com', 'Computer', 6, 'M-tech', 'y', 'y', 'Tulips.jpg', '', '', '', '', '', '', '', '', '', 'on', 1),
('mumthu', 'mumthu@gmail.com', 'Computer', 111, 'ITI', 'mumthu', '111', 'Penguins.jpg', '', '', '', '', '', '', '', '', '', 'on', 0),
('Umakanthan', 'umen@brazrs.com', 'Electrical', 123456, 'Diploma', 'umem umZ', '123456', '13130394.jpg', '', '', '', '', '', '', '', '', '', 'on', 1),
('hafis', 'hafis@gmail.com', 'Computer', 13130408, 'B-tech', 'hafis', '123', '8khijEL-heath-ledger-joker-wallpaper.jpg', '', '', '', '', '', '', '', '', '', 'on', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testt`
--

CREATE TABLE `testt` (
  `name` varchar(250) NOT NULL,
  `no` int(100) NOT NULL,
  `itm` varchar(250) NOT NULL,
  `itm2` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testt`
--

INSERT INTO `testt` (`name`, `no`, `itm`, `itm2`) VALUES
('manu asd', 34, '100 M', '800 M'),
('manu', 345, '100 M', '400 M'),
('manu asd', 3454, '100 M', '800 M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `block`
--
ALTER TABLE `block`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatreceiver`
--
ALTER TABLE `chatreceiver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disliked`
--
ALTER TABLE `disliked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `liked`
--
ALTER TABLE `liked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overallresult`
--
ALTER TABLE `overallresult`
  ADD PRIMARY KEY (`dept`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sportsreg`
--
ALTER TABLE `sportsreg`
  ADD PRIMARY KEY (`chestno`),
  ADD UNIQUE KEY `addno` (`addno`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testt`
--
ALTER TABLE `testt`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `block`
--
ALTER TABLE `block`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;
--
-- AUTO_INCREMENT for table `chatreceiver`
--
ALTER TABLE `chatreceiver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `disliked`
--
ALTER TABLE `disliked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `liked`
--
ALTER TABLE `liked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `sportsreg`
--
ALTER TABLE `sportsreg`
  MODIFY `chestno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `testt`
--
ALTER TABLE `testt`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3455;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
