-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2017 at 08:36 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capeplacementcell`
--

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`Adminid`, `Adminname`, `Adminpswd`, `Adminemail`, `Adminmob`) VALUES
(12345, 'Eric', 'admin12345', '', NULL);

--
-- Dumping data for table `companytable`
--

INSERT INTO `companytable` (`S No.`, `ccode`, `cname`, `dob`, `cmob`, `cmail`, `cinf`) VALUES
(1, 54321, 'dummy', '2017-03-06', 7856824103, 'dum@company.com', '');

--
-- Dumping data for table `hodtable`
--

INSERT INTO `hodtable` (`S No.`, `hodid`, `fname`, `lname`, `Dept`, `email`, `Mob`, `hodpswd`) VALUES
(4, 4521011, 'teach', NULL, 'Civil Engineering', 'dumt@gmail.c', NULL, 'iamhod'),
(5, 888568, 'teach1', NULL, 'Electronics and Communication Engineering', 'teach1@g.c', NULL, 'ec12345'),
(6, 123456789, 'teach2', NULL, 'Computer Science and Engineering', 'teach2@gmail.com', NULL, 'iamteacher1');

--
-- Dumping data for table `marktable`
--

INSERT INTO `marktable` (`S No.`, `regid`, `Dept`, `Sem`, `Sub1`, `Sub2`, `Sub3`, `Sub4`, `Sub5`, `Sub6`, `L1`, `L2`, `GPA`, `Eligibility`) VALUES
(1, 1234567890, 'Computer Science and Engineering', 6, 95, 93, 95, 95, 95, 96, 90, 90, 9.5, 'PASS'),
(3, 12154600, 'Computer Science and Engineering', 1, 88, 88, 88, 54, 56, 55, 58, 65, 7.15, 'PASS');

--
-- Dumping data for table `ntable`
--

INSERT INTO `ntable` (`S No.`, `ndate`, `nnumber`, `notification`) VALUES
(2, '2017-03-13', 94631, 'dzjyfufiyguhijuiokplkmgdsd78r9t08y9[ok');

--
-- Dumping data for table `studaddress`
--

INSERT INTO `studaddress` (`regid`, `line1`, `line2`, `post`, `city`, `dist`, `state`, `country`, `pin`) VALUES
(19154615, 'P N HOUSE ,K N ROAD', 'KALLAI', 'Kallai', 'Kozhikode', 'Kozhikode', 'Kerala', 'India', 673003),
(789657, 'dummy', ' ', 'dfghjil', 'Alappuzha', 'Thrissur', 'Arunachal Pradesh', 'India', 7895525),
(555555, 'dummy', ' ', 'dfghjil', 'Alappuzha', 'Thrissur', 'Arunachal Pradesh', 'India', 789554),
(12154600, 'sdfghjk', ' dfghjk', 'Adoor', 'Pathanamthitta', 'Pathanamthitta', 'Kerala', 'India', 691525);

--
-- Dumping data for table `studtable`
--

INSERT INTO `studtable` (`S No.`, `regid`, `fname`, `mname`, `lname`, `gender`, `DoB`, `Dept`, `email`, `Mob`, `studpswd`) VALUES
(1, 1234567890, 'Eric', '', 'Alexander', 'Male', '1996-11-14', 'Computer Science and Engineering', 'racerics@gmail.com', 9656233412, 'iameric'),
(8, 789657, 'dummy', 'dummy', 'dummy', 'male', '1994-01-14', 'Civil Engineering', 'q@g.c', 7894561235, 'asdf'),
(9, 555555, 'dummy', 'dummy', 'dummy', 'male', '1994-01-17', 'Civil Engineering', 'f@g.c', 7894561752, 'qazx'),
(10, 56856985, 'dumm1', ' ', ' ', NULL, NULL, 'Electronics and Communication Engineering', 'dumm1@g.c', NULL, 'dumm1'),
(11, 19154615, 'RAHIL', 'P ', 'N', 'male', '1996-08-17', 'Computer Science and Engineering', 'rahilronaldo22@gmail.com', 9037520621, '12345699'),
(12, 12154600, 'Her', 'J', 'S', 'male', '1994-03-14', 'Computer Science and Engineering', 'herjs@g.c', 9568446213, '1023242630');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
