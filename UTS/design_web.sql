-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 01:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `design_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `fifa_player`
--

CREATE TABLE `fifa_player` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `nationality` varchar(20) DEFAULT NULL,
  `flag` varchar(50) DEFAULT NULL,
  `overall` int(11) DEFAULT NULL,
  `potential` int(11) DEFAULT NULL,
  `club` varchar(30) DEFAULT NULL,
  `club_logo` varchar(50) DEFAULT NULL,
  `foot` varchar(20) DEFAULT NULL,
  `skill_moves` int(11) DEFAULT NULL,
  `work_rate` varchar(20) DEFAULT NULL,
  `body_type` varchar(20) DEFAULT NULL,
  `real_face` varchar(20) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `height` varchar(10) DEFAULT NULL,
  `weight` varchar(10) DEFAULT NULL,
  `finishing` int(11) DEFAULT NULL,
  `position` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fifa_player`
--

INSERT INTO `fifa_player` (`id`, `name`, `age`, `photo`, `nationality`, `flag`, `overall`, `potential`, `club`, `club_logo`, `foot`, `skill_moves`, `work_rate`, `body_type`, `real_face`, `number`, `height`, `weight`, `finishing`, `position`) VALUES
(1, 'Roberto Carlos', 38, 'https://cdn.sofifa.com/players/001/040/12_60.png', 'Brazil', 'https://cdn.sofifa.com/flags/br.png', 79, 79, 'FC Anzhi Makhachkala', 'https://cdn.sofifa.com/teams/100766/30.png', 'Left', 30, 'Medium/ High', 'Stocky (170-)', '', 3, '168cm', '70kg', 430, 'CDM'),
(2, 'M. Ballack', 34, 'https://cdn.sofifa.com/players/003/647/12_60.png', 'Germany', 'https://cdn.sofifa.com/flags/de.png', 80, 80, 'Bayer 04 Leverkusen', 'https://cdn.sofifa.com/teams/32/30.png', 'Right', 30, 'Medium/ High', 'Normal (185+)', '', 13, '189cm', '88kg', 750, 'CM'),
(3, 'Cristiano Ronaldo', 36, 'https://cdn.sofifa.com/players/020/801/22_60.png', 'Portugal', 'https://cdn.sofifa.com/flags/pt.png', 91, 91, 'Manchester United', 'https://cdn.sofifa.com/teams/11/30.png', 'Right', 50, 'High/ Low', 'Unique', 'Yes', 7, '187cm', '83kg', 950, 'ST'),
(4, 'Dani Alves', 35, 'https://cdn.sofifa.com/players/146/530/19_60.png', 'Brazil', 'https://cdn.sofifa.com/flags/br.png', 82, 82, 'Paris Saint-Germain', 'https://cdn.sofifa.com/teams/73/30.png', 'Right', 40, 'High/ Medium', 'Normal (170-185)', '', 13, '172cm', '68kg', 610, 'CAM'),
(5, 'Jesús Navas', 35, 'https://cdn.sofifa.com/players/146/536/22_60.png', 'Spain', 'https://cdn.sofifa.com/flags/es.png', 84, 84, 'Sevilla FC', 'https://cdn.sofifa.com/teams/481/30.png', 'Right', 40, 'High/ Medium', 'Lean (170-)', 'Yes', 16, '172cm', '60kg', 650, 'RB'),
(6, 'Sergio Ramos', 35, 'https://cdn.sofifa.com/players/155/862/22_60.png', 'Spain', 'https://cdn.sofifa.com/flags/es.png', 88, 88, 'Paris Saint-Germain', 'https://cdn.sofifa.com/teams/73/30.png', 'Right', 30, 'High/ Medium', 'Unique', 'Yes', 4, '184cm', '82kg', 650, 'CB'),
(7, 'L. Messi', 34, 'https://cdn.sofifa.com/players/158/023/22_60.png', 'Argentina', 'https://cdn.sofifa.com/flags/ar.png', 93, 93, 'Paris Saint-Germain', 'https://cdn.sofifa.com/teams/73/30.png', 'Left', 40, 'Medium/ Low', 'Unique', 'Yes', 30, '170cm', '72kg', 950, 'RW'),
(8, 'Raúl García', 34, 'https://cdn.sofifa.com/players/171/579/22_60.png', 'Spain', 'https://cdn.sofifa.com/flags/es.png', 80, 80, 'Athletic Club de Bilbao', 'https://cdn.sofifa.com/teams/448/30.png', 'Right', 30, 'Medium/ Medium', 'Normal (170-185)', 'Yes', 22, '184cm', '83kg', 800, 'CM'),
(9, 'D. Wass', 32, 'https://cdn.sofifa.com/players/172/522/22_60.png', 'Denmark', 'https://cdn.sofifa.com/flags/dk.png', 80, 80, 'Valencia CF', 'https://cdn.sofifa.com/teams/461/30.png', 'Right', 30, 'Medium/ Medium', 'Normal (170-185)', 'Yes', 18, '181cm', '74kg', 760, 'CM'),
(10, 'G. Bale', 31, 'https://cdn.sofifa.com/players/173/731/22_60.png', 'Wales', 'https://cdn.sofifa.com/flags/gb-wls.png', 82, 82, 'Real Madrid CF', 'https://cdn.sofifa.com/teams/243/30.png', 'Left', 40, 'Medium/ Medium', 'Unique', 'Yes', 18, '185cm', '82kg', 820, 'RM'),
(11, 'L. Suárez', 34, 'https://cdn.sofifa.com/players/176/580/22_60.png', 'Uruguay', 'https://cdn.sofifa.com/flags/uy.png', 88, 88, 'Atlético de Madrid', 'https://cdn.sofifa.com/teams/240/30.png', 'Right', 30, 'High/ Medium', 'Unique', 'Yes', 9, '182cm', '83kg', 930, 'ST'),
(12, 'L. Modrić', 35, 'https://cdn.sofifa.com/players/177/003/22_60.png', 'Croatia', 'https://cdn.sofifa.com/flags/hr.png', 87, 87, 'Real Madrid CF', 'https://cdn.sofifa.com/teams/243/30.png', 'Right', 40, 'Medium/ Medium', 'Lean (170-185)', 'Yes', 10, '172cm', '66kg', 720, 'CM'),
(13, 'A. Witsel', 32, 'https://cdn.sofifa.com/players/177/413/22_60.png', 'Belgium', 'https://cdn.sofifa.com/flags/be.png', 83, 83, 'Borussia Dortmund', 'https://cdn.sofifa.com/teams/22/30.png', 'Right', 40, 'Medium/ Medium', 'Unique', 'Yes', 28, '186cm', '81kg', 710, 'CDM'),
(14, 'R. Nainggolan', 33, 'https://cdn.sofifa.com/players/178/518/22_60.png', 'Belgium', 'https://cdn.sofifa.com/flags/be.png', 80, 80, 'Royal Antwerp FC', 'https://cdn.sofifa.com/teams/230/30.png', 'Right', 30, 'High/ Medium', 'Unique', 'Yes', 4, '176cm', '65kg', 800, 'CAM'),
(15, 'G. Wijnaldum', 30, 'https://cdn.sofifa.com/players/181/291/22_60.png', 'Netherlands', 'https://cdn.sofifa.com/flags/nl.png', 84, 84, 'Paris Saint-Germain', 'https://cdn.sofifa.com/teams/73/30.png', 'Right', 40, 'High/ High', 'Unique', 'Yes', 18, '175cm', '74kg', 750, 'CM'),
(16, 'A. Vidal', 34, 'https://cdn.sofifa.com/players/181/872/22_60.png', 'Chile', 'https://cdn.sofifa.com/flags/cl.png', 81, 81, 'Inter', 'https://cdn.sofifa.com/teams/44/30.png', 'Right', 30, 'High/ High', 'Unique', 'Yes', 22, '180cm', '75kg', 750, 'CM'),
(17, 'Yuri Berchiche', 31, 'https://cdn.sofifa.com/players/183/512/22_60.png', 'Spain', 'https://cdn.sofifa.com/flags/es.png', 82, 82, 'Athletic Club de Bilbao', 'https://cdn.sofifa.com/teams/448/30.png', 'Left', 30, 'High/ Medium', 'Normal (170-185)', 'Yes', 17, '181cm', '80kg', 610, 'LB'),
(18, 'J. Henderson', 31, 'https://cdn.sofifa.com/players/183/711/22_60.png', 'England', 'https://cdn.sofifa.com/flags/gb-eng.png', 84, 84, 'Liverpool', 'https://cdn.sofifa.com/teams/9/30.png', 'Right', 30, 'High/ High', 'Normal (170-185)', 'Yes', 14, '182cm', '80kg', 730, 'CDM'),
(19, 'A. Di María', 33, 'https://cdn.sofifa.com/players/183/898/22_60.png', 'Argentina', 'https://cdn.sofifa.com/flags/ar.png', 87, 87, 'Paris Saint-Germain', 'https://cdn.sofifa.com/teams/73/30.png', 'Left', 50, 'High/ Medium', 'Unique', 'Yes', 11, '180cm', '69kg', 790, 'RW'),
(20, 'A. Kolarov', 35, 'https://cdn.sofifa.com/players/185/103/22_60.png', 'Serbia', 'https://cdn.sofifa.com/flags/rs.png', 78, 78, 'Inter', 'https://cdn.sofifa.com/teams/44/30.png', 'Left', 30, 'High/ Medium', 'Normal (185+)', 'Yes', 11, '187cm', '81kg', 600, 'LB'),
(21, 'K. Trippier', 30, 'https://cdn.sofifa.com/players/186/345/22_60.png', 'England', 'https://cdn.sofifa.com/flags/gb-eng.png', 84, 84, 'Atlético de Madrid', 'https://cdn.sofifa.com/teams/240/30.png', 'Right', 30, 'Medium/ Medium', 'Normal (170-185)', 'Yes', 23, '173cm', '69kg', 540, 'RB'),
(22, 'I. Gündoğan', 30, 'https://cdn.sofifa.com/players/186/942/22_60.png', 'Germany', 'https://cdn.sofifa.com/flags/de.png', 85, 85, 'Manchester City', 'https://cdn.sofifa.com/teams/10/30.png', 'Right', 40, 'High/ Medium', 'Normal (170-185)', 'Yes', 8, '180cm', '80kg', 800, 'CM'),
(23, 'Paulinho', 32, 'https://cdn.sofifa.com/players/187/961/22_60.png', 'Brazil', 'https://cdn.sofifa.com/flags/br.png', 83, 83, 'Al Ahli', 'https://cdn.sofifa.com/teams/112387/30.png', 'Right', 40, 'High/ High', 'Normal (170-185)', 'Yes', 15, '183cm', '80kg', 830, 'CM'),
(24, 'K. Walker', 31, 'https://cdn.sofifa.com/players/188/377/22_60.png', 'England', 'https://cdn.sofifa.com/flags/gb-eng.png', 85, 85, 'Manchester City', 'https://cdn.sofifa.com/teams/10/30.png', 'Right', 30, 'High/ High', 'Unique', 'Yes', 2, '183cm', '83kg', 510, 'RB'),
(25, 'R. Lewandowski', 32, 'https://cdn.sofifa.com/players/188/545/22_60.png', 'Poland', 'https://cdn.sofifa.com/flags/pl.png', 92, 92, 'FC Bayern München', 'https://cdn.sofifa.com/teams/21/30.png', 'Right', 40, 'High/ Medium', 'Unique', 'Yes', 9, '185cm', '81kg', 950, 'ST'),
(26, 'Jordi Alba', 32, 'https://cdn.sofifa.com/players/189/332/22_60.png', 'Spain', 'https://cdn.sofifa.com/flags/es.png', 86, 86, 'FC Barcelona', 'https://cdn.sofifa.com/teams/241/30.png', 'Left', 30, 'High/ Medium', 'Unique', 'Yes', 18, '170cm', '68kg', 730, 'LB'),
(27, 'Thiago', 30, 'https://cdn.sofifa.com/players/189/509/22_60.png', 'Spain', 'https://cdn.sofifa.com/flags/es.png', 86, 86, 'Liverpool', 'https://cdn.sofifa.com/teams/9/30.png', 'Right', 50, 'Medium/ Medium', 'Normal (170-185)', 'Yes', 6, '174cm', '70kg', 680, 'CM'),
(28, 'Parejo', 32, 'https://cdn.sofifa.com/players/189/513/22_60.png', 'Spain', 'https://cdn.sofifa.com/flags/es.png', 86, 86, 'Villarreal CF', 'https://cdn.sofifa.com/teams/483/30.png', 'Right', 30, 'Medium/ Medium', 'Lean (170-185)', 'Yes', 5, '182cm', '74kg', 830, 'CM'),
(29, 'Canales', 30, 'https://cdn.sofifa.com/players/190/286/22_60.png', 'Spain', 'https://cdn.sofifa.com/flags/es.png', 83, 83, 'Real Betis Balompié', 'https://cdn.sofifa.com/teams/449/30.png', 'Left', 40, 'High/ Medium', 'Lean (170-185)', 'Yes', 10, '176cm', '65kg', 790, 'CAM'),
(30, 'Neymar Jr', 29, 'https://cdn.sofifa.com/players/190/871/22_60.png', 'Brazil', 'https://cdn.sofifa.com/flags/br.png', 91, 91, 'Paris Saint-Germain', 'https://cdn.sofifa.com/teams/73/30.png', 'Right', 50, 'High/ Medium', 'Unique', 'Yes', 10, '175cm', '68kg', 830, 'LW'),
(31, 'K. De Bruyne', 30, 'https://cdn.sofifa.com/players/192/985/22_60.png', 'Belgium', 'https://cdn.sofifa.com/flags/be.png', 91, 91, 'Manchester City', 'https://cdn.sofifa.com/teams/10/30.png', 'Right', 40, 'High/ High', 'Unique', 'Yes', 17, '181cm', '70kg', 820, 'CM'),
(32, 'J. Cuadrado', 33, 'https://cdn.sofifa.com/players/193/082/22_60.png', 'Colombia', 'https://cdn.sofifa.com/flags/co.png', 83, 83, 'Juventus', 'https://cdn.sofifa.com/teams/45/30.png', 'Right', 50, 'High/ Medium', 'Lean (170-185)', 'Yes', 11, '179cm', '72kg', 700, 'RB'),
(33, 'J. Corona', 28, 'https://cdn.sofifa.com/players/193/165/22_60.png', 'Mexico', 'https://cdn.sofifa.com/flags/mx.png', 82, 82, 'FC Porto', 'https://cdn.sofifa.com/teams/236/30.png', 'Right', 50, 'High/ Medium', 'Normal (170-185)', 'Yes', 17, '173cm', '66kg', 660, 'RM'),
(34, 'T. Delaney', 29, 'https://cdn.sofifa.com/players/193/283/22_60.png', 'Denmark', 'https://cdn.sofifa.com/flags/dk.png', 81, 81, 'Sevilla FC', 'https://cdn.sofifa.com/teams/481/30.png', 'Left', 20, 'Low/ High', 'Normal (170-185)', 'Yes', 18, '182cm', '79kg', 680, 'CB'),
(35, 'Koke', 29, 'https://cdn.sofifa.com/players/193/747/22_60.png', 'Spain', 'https://cdn.sofifa.com/flags/es.png', 85, 85, 'Atlético de Madrid', 'https://cdn.sofifa.com/teams/240/30.png', 'Right', 30, 'Medium/ Medium', 'Normal (170-185)', 'Yes', 6, '176cm', '75kg', 720, 'CM'),
(36, 'A. Griezmann', 30, 'https://cdn.sofifa.com/players/194/765/22_60.png', 'France', 'https://cdn.sofifa.com/flags/fr.png', 85, 85, 'Atlético de Madrid', 'https://cdn.sofifa.com/teams/240/30.png', 'Left', 40, 'Medium/ Medium', 'Unique', 'Yes', 8, '176cm', '73kg', 840, 'CAM'),
(37, 'P. Pogba', 28, 'https://cdn.sofifa.com/players/195/864/22_60.png', 'France', 'https://cdn.sofifa.com/flags/fr.png', 87, 87, 'Manchester United', 'https://cdn.sofifa.com/teams/11/30.png', 'Right', 50, 'High/ Medium', 'Unique', 'Yes', 6, '191cm', '84kg', 750, 'CM'),
(38, 'D. Alaba', 29, 'https://cdn.sofifa.com/players/197/445/22_60.png', 'Austria', 'https://cdn.sofifa.com/flags/at.png', 84, 84, 'Real Madrid CF', 'https://cdn.sofifa.com/teams/243/30.png', 'Left', 30, 'Medium/ Medium', 'Normal (170-185)', 'Yes', 4, '180cm', '78kg', 600, 'CB'),
(39, 'M. Verratti', 28, 'https://cdn.sofifa.com/players/199/556/22_60.png', 'Italy', 'https://cdn.sofifa.com/flags/it.png', 87, 87, 'Paris Saint-Germain', 'https://cdn.sofifa.com/teams/73/30.png', 'Right', 40, 'Medium/ High', 'Unique', 'Yes', 6, '165cm', '60kg', 600, 'CM'),
(40, 'Casemiro', 29, 'https://cdn.sofifa.com/players/200/145/22_60.png', 'Brazil', 'https://cdn.sofifa.com/flags/br.png', 89, 89, 'Real Madrid CF', 'https://cdn.sofifa.com/teams/243/30.png', 'Right', 20, 'High/ High', 'Unique', 'Yes', 14, '185cm', '84kg', 640, 'CDM'),
(41, 'L. Digne', 27, 'https://cdn.sofifa.com/players/200/458/22_60.png', 'France', 'https://cdn.sofifa.com/flags/fr.png', 84, 84, 'Everton', 'https://cdn.sofifa.com/teams/7/30.png', 'Left', 30, 'High/ Medium', 'Unique', 'Yes', 12, '178cm', '74kg', 600, 'LB'),
(42, 'J. Veretout', 28, 'https://cdn.sofifa.com/players/201/519/22_60.png', 'France', 'https://cdn.sofifa.com/flags/fr.png', 82, 83, 'Roma', 'https://cdn.sofifa.com/teams/52/30.png', 'Right', 30, 'Medium/ Medium', 'Normal (170-185)', 'Yes', 17, '177cm', '67kg', 690, 'CDM'),
(43, 'Roberto Firmino', 29, 'https://cdn.sofifa.com/players/201/942/22_60.png', 'Brazil', 'https://cdn.sofifa.com/flags/br.png', 85, 85, 'Liverpool', 'https://cdn.sofifa.com/teams/9/30.png', 'Right', 50, 'High/ High', 'Unique', 'Yes', 9, '181cm', '76kg', 780, 'CF'),
(44, 'H. Kane', 27, 'https://cdn.sofifa.com/players/202/126/22_60.png', 'England', 'https://cdn.sofifa.com/flags/gb-eng.png', 90, 90, 'Tottenham Hotspur', 'https://cdn.sofifa.com/teams/18/30.png', 'Right', 30, 'High/ High', 'Unique', 'Yes', 10, '188cm', '89kg', 940, 'ST'),
(45, 'A. Florenzi', 30, 'https://cdn.sofifa.com/players/203/551/22_60.png', 'Italy', 'https://cdn.sofifa.com/flags/it.png', 81, 81, 'AC Milan', 'https://cdn.sofifa.com/teams/47/30.png', 'Right', 30, 'High/ Medium', 'Unique', 'Yes', 25, '173cm', '67kg', 730, 'RB'),
(46, 'M. Sabitzer', 27, 'https://cdn.sofifa.com/players/204/923/22_60.png', 'Austria', 'https://cdn.sofifa.com/flags/at.png', 84, 85, 'FC Bayern München', 'https://cdn.sofifa.com/teams/21/30.png', 'Right', 30, 'High/ High', 'Normal (170-185)', 'Yes', 18, '178cm', '76kg', 810, 'CM'),
(47, 'Portu', 29, 'https://cdn.sofifa.com/players/205/070/22_60.png', 'Spain', 'https://cdn.sofifa.com/flags/es.png', 82, 82, 'Real Sociedad', 'https://cdn.sofifa.com/teams/457/30.png', 'Right', 30, 'High/ High', 'Normal (170-)', 'Yes', 7, '167cm', '66kg', 810, 'RW'),
(48, 'L. Ocampos', 26, 'https://cdn.sofifa.com/players/205/632/22_60.png', 'Argentina', 'https://cdn.sofifa.com/flags/ar.png', 83, 83, 'Sevilla FC', 'https://cdn.sofifa.com/teams/481/30.png', 'Right', 40, 'High/ High', 'Normal (185+)', 'No', 5, '188cm', '84kg', 860, 'LW'),
(49, 'L. Paredes', 27, 'https://cdn.sofifa.com/players/207/439/22_60.png', 'Argentina', 'https://cdn.sofifa.com/flags/ar.png', 81, 83, 'Paris Saint-Germain', 'https://cdn.sofifa.com/teams/73/30.png', 'Right', 40, 'Medium/ Medium', 'Normal (170-185)', 'Yes', 8, '180cm', '75kg', 610, 'CM'),
(50, 'E. Can', 27, 'https://cdn.sofifa.com/players/208/333/22_60.png', 'Germany', 'https://cdn.sofifa.com/flags/de.png', 82, 83, 'Borussia Dortmund', 'https://cdn.sofifa.com/teams/22/30.png', 'Right', 30, 'Medium/ High', 'Stocky (185+)', 'Yes', 23, '186cm', '86kg', 760, 'CDM'),
(51, 'Saúl', 26, 'https://cdn.sofifa.com/players/208/421/22_60.png', 'Spain', 'https://cdn.sofifa.com/flags/es.png', 82, 85, 'Chelsea', 'https://cdn.sofifa.com/teams/5/30.png', 'Left', 30, 'Medium/ Medium', 'Lean (170-185)', 'Yes', 17, '184cm', '75kg', 760, 'CM'),
(52, 'F. Kostić', 28, 'https://cdn.sofifa.com/players/208/574/22_60.png', 'Serbia', 'https://cdn.sofifa.com/flags/rs.png', 84, 84, 'Eintracht Frankfurt', 'https://cdn.sofifa.com/teams/1824/30.png', 'Left', 30, 'High/ High', 'Normal (170-185)', 'Yes', 10, '184cm', '82kg', 750, 'LM'),
(53, 'S. Mané', 29, 'https://cdn.sofifa.com/players/208/722/22_60.png', 'Senegal', 'https://cdn.sofifa.com/flags/sn.png', 89, 89, 'Liverpool', 'https://cdn.sofifa.com/teams/9/30.png', 'Right', 40, 'High/ Medium', 'Unique', 'Yes', 10, '175cm', '69kg', 860, 'LW'),
(54, 'Fred', 28, 'https://cdn.sofifa.com/players/209/297/22_60.png', 'Brazil', 'https://cdn.sofifa.com/flags/br.png', 81, 81, 'Manchester United', 'https://cdn.sofifa.com/teams/11/30.png', 'Left', 40, 'High/ High', 'Lean (170-)', 'Yes', 17, '169cm', '62kg', 600, 'CDM'),
(55, 'M. Salah', 29, 'https://cdn.sofifa.com/players/209/331/22_60.png', 'Egypt', 'https://cdn.sofifa.com/flags/eg.png', 89, 89, 'Liverpool', 'https://cdn.sofifa.com/teams/9/30.png', 'Left', 40, 'High/ Medium', 'Unique', 'Yes', 11, '175cm', '71kg', 910, 'RW'),
(56, 'Fabinho', 27, 'https://cdn.sofifa.com/players/209/499/22_60.png', 'Brazil', 'https://cdn.sofifa.com/flags/br.png', 86, 88, 'Liverpool', 'https://cdn.sofifa.com/teams/9/30.png', 'Right', 30, 'Medium/ High', 'Unique', 'Yes', 3, '188cm', '78kg', 630, 'CDM'),
(57, 'L. Goretzka', 26, 'https://cdn.sofifa.com/players/209/658/22_60.png', 'Germany', 'https://cdn.sofifa.com/flags/de.png', 87, 88, 'FC Bayern München', 'https://cdn.sofifa.com/teams/21/30.png', 'Right', 30, 'High/ Medium', 'Unique', 'Yes', 8, '189cm', '82kg', 820, 'CM'),
(58, 'R. Guerreiro', 27, 'https://cdn.sofifa.com/players/209/889/22_60.png', 'Portugal', 'https://cdn.sofifa.com/flags/pt.png', 84, 84, 'Borussia Dortmund', 'https://cdn.sofifa.com/teams/22/30.png', 'Left', 40, 'High/ Low', 'Normal (170-)', 'Yes', 13, '170cm', '71kg', 770, 'LB'),
(59, 'T. Partey', 28, 'https://cdn.sofifa.com/players/209/989/22_60.png', 'Ghana', 'https://cdn.sofifa.com/flags/gh.png', 83, 83, 'Arsenal', 'https://cdn.sofifa.com/teams/1/30.png', 'Right', 30, 'Medium/ High', 'Normal (185+)', 'Yes', 5, '185cm', '77kg', 660, 'CM'),
(60, 'Grimaldo', 25, 'https://cdn.sofifa.com/players/210/035/22_60.png', 'Spain', 'https://cdn.sofifa.com/flags/es.png', 82, 85, 'SL Benfica', 'https://cdn.sofifa.com/teams/234/30.png', 'Left', 30, 'High/ Medium', 'Normal (170-185)', 'Yes', 3, '171cm', '69kg', 520, 'CM'),
(61, 'Ricardo Pereira', 27, 'https://cdn.sofifa.com/players/210/243/22_60.png', 'Portugal', 'https://cdn.sofifa.com/flags/pt.png', 84, 84, 'Leicester City', 'https://cdn.sofifa.com/teams/95/30.png', 'Right', 30, 'High/ High', 'Unique', 'Yes', 21, '175cm', '70kg', 660, 'RB'),
(62, 'João Cancelo', 27, 'https://cdn.sofifa.com/players/210/514/22_60.png', 'Portugal', 'https://cdn.sofifa.com/flags/pt.png', 86, 87, 'Manchester City', 'https://cdn.sofifa.com/teams/10/30.png', 'Right', 40, 'High/ Medium', 'Unique', 'Yes', 27, '182cm', '74kg', 680, 'RB'),
(63, 'Bruno Fernandes', 26, 'https://cdn.sofifa.com/players/212/198/22_60.png', 'Portugal', 'https://cdn.sofifa.com/flags/pt.png', 88, 89, 'Manchester United', 'https://cdn.sofifa.com/teams/11/30.png', 'Right', 40, 'High/ High', 'Unique', 'Yes', 18, '179cm', '69kg', 830, 'CAM'),
(64, 'Alex Telles', 28, 'https://cdn.sofifa.com/players/212/462/22_60.png', 'Brazil', 'https://cdn.sofifa.com/flags/br.png', 82, 82, 'Manchester United', 'https://cdn.sofifa.com/teams/11/30.png', 'Left', 30, 'High/ Medium', 'Unique', 'Yes', 27, '181cm', '71kg', 630, 'LB'),
(65, 'Anderson Talisca', 27, 'https://cdn.sofifa.com/players/212/523/22_60.png', 'Brazil', 'https://cdn.sofifa.com/flags/br.png', 82, 83, 'Al Nassr', 'https://cdn.sofifa.com/teams/112139/30.png', 'Left', 40, 'High/ Low', 'Unique', 'No', 94, '190cm', '80kg', 810, 'CAM'),
(66, 'R. De Paul', 27, 'https://cdn.sofifa.com/players/212/616/22_60.png', 'Argentina', 'https://cdn.sofifa.com/flags/ar.png', 82, 83, 'Atlético de Madrid', 'https://cdn.sofifa.com/teams/240/30.png', 'Right', 40, 'High/ Medium', 'Normal (170-185)', 'No', 5, '180cm', '70kg', 760, 'CM'),
(67, 'J. Kimmich', 26, 'https://cdn.sofifa.com/players/212/622/22_60.png', 'Germany', 'https://cdn.sofifa.com/flags/de.png', 89, 90, 'FC Bayern München', 'https://cdn.sofifa.com/teams/21/30.png', 'Right', 30, 'High/ Medium', 'Lean (170-185)', 'Yes', 6, '177cm', '75kg', 680, 'CDM'),
(68, 'N. Kanté', 30, 'https://cdn.sofifa.com/players/215/914/22_60.png', 'France', 'https://cdn.sofifa.com/flags/fr.png', 90, 90, 'Chelsea', 'https://cdn.sofifa.com/teams/5/30.png', 'Right', 20, 'Medium/ High', 'Unique', 'Yes', 7, '168cm', '70kg', 650, 'CDM'),
(69, 'A. Robertson', 27, 'https://cdn.sofifa.com/players/216/267/22_60.png', 'Scotland', 'https://cdn.sofifa.com/flags/gb-sct.png', 87, 88, 'Liverpool', 'https://cdn.sofifa.com/teams/9/30.png', 'Left', 30, 'High/ High', 'Unique', 'Yes', 26, '178cm', '64kg', 550, 'LB'),
(70, 'M. Brozović', 28, 'https://cdn.sofifa.com/players/216/352/22_60.png', 'Croatia', 'https://cdn.sofifa.com/flags/hr.png', 84, 84, 'Inter', 'https://cdn.sofifa.com/teams/44/30.png', 'Right', 30, 'Medium/ Medium', 'Lean (170-185)', 'Yes', 77, '181cm', '68kg', 690, 'CDM'),
(71, 'Y. Tielemans', 24, 'https://cdn.sofifa.com/players/216/393/22_60.png', 'Belgium', 'https://cdn.sofifa.com/flags/be.png', 84, 87, 'Leicester City', 'https://cdn.sofifa.com/teams/95/30.png', 'Right', 40, 'Medium/ Medium', 'Normal (170-185)', 'Yes', 8, '176cm', '72kg', 740, 'CM'),
(72, 'C. Tolisso', 26, 'https://cdn.sofifa.com/players/219/683/22_60.png', 'France', 'https://cdn.sofifa.com/flags/fr.png', 80, 81, 'FC Bayern München', 'https://cdn.sofifa.com/teams/21/30.png', 'Right', 30, 'High/ Medium', 'Normal (170-185)', 'Yes', 24, '181cm', '81kg', 750, 'CM'),
(73, 'Angeliño', 24, 'https://cdn.sofifa.com/players/220/651/22_60.png', 'Spain', 'https://cdn.sofifa.com/flags/es.png', 83, 86, 'RB Leipzig', 'https://cdn.sofifa.com/teams/112172/30.png', 'Left', 40, 'High/ High', 'Normal (170-185)', 'Yes', 3, '175cm', '69kg', 700, 'LM'),
(74, 'R. Gosens', 26, 'https://cdn.sofifa.com/players/223/697/22_60.png', 'Germany', 'https://cdn.sofifa.com/flags/de.png', 83, 83, 'Atalanta', 'https://cdn.sofifa.com/teams/39/30.png', 'Left', 30, 'High/ Medium', 'Normal (170-185)', 'No', 8, '183cm', '76kg', 790, 'LWB'),
(75, 'S. Milinković-Savić', 26, 'https://cdn.sofifa.com/players/223/848/22_60.png', 'Serbia', 'https://cdn.sofifa.com/flags/rs.png', 85, 87, 'Lazio', 'https://cdn.sofifa.com/teams/46/30.png', 'Right', 40, 'High/ Medium', 'Normal (185+)', 'Yes', 21, '191cm', '76kg', 800, 'CM'),
(76, 'N. Barella', 24, 'https://cdn.sofifa.com/players/224/232/22_60.png', 'Italy', 'https://cdn.sofifa.com/flags/it.png', 84, 89, 'Inter', 'https://cdn.sofifa.com/teams/44/30.png', 'Right', 30, 'High/ High', 'Normal (170-)', 'Yes', 23, '172cm', '68kg', 690, 'CM'),
(77, 'Rúben Neves', 24, 'https://cdn.sofifa.com/players/224/293/22_60.png', 'Portugal', 'https://cdn.sofifa.com/flags/pt.png', 82, 87, 'Wolverhampton Wanderers', 'https://cdn.sofifa.com/teams/110/30.png', 'Right', 30, 'Low/ High', 'Normal (170-185)', 'Yes', 8, '180cm', '80kg', 660, 'CM'),
(78, 'M. Acuña', 29, 'https://cdn.sofifa.com/players/224/334/22_60.png', 'Argentina', 'https://cdn.sofifa.com/flags/ar.png', 84, 84, 'Sevilla FC', 'https://cdn.sofifa.com/teams/481/30.png', 'Left', 40, 'High/ High', 'Stocky (170-185)', 'No', 19, '172cm', '69kg', 660, 'LB'),
(79, 'Merino', 25, 'https://cdn.sofifa.com/players/225/193/22_60.png', 'Spain', 'https://cdn.sofifa.com/flags/es.png', 83, 87, 'Real Sociedad', 'https://cdn.sofifa.com/teams/457/30.png', 'Left', 30, 'High/ High', 'Normal (185+)', 'Yes', 8, '189cm', '83kg', 790, 'CM'),
(80, 'Marcos Llorente', 26, 'https://cdn.sofifa.com/players/226/161/22_60.png', 'Spain', 'https://cdn.sofifa.com/flags/es.png', 86, 89, 'Atlético de Madrid', 'https://cdn.sofifa.com/teams/240/30.png', 'Right', 30, 'High/ Medium', 'Lean (170-185)', 'Yes', 14, '184cm', '74kg', 810, 'CAM'),
(81, 'G. Lo Celso', 25, 'https://cdn.sofifa.com/players/226/226/22_60.png', 'Argentina', 'https://cdn.sofifa.com/flags/ar.png', 81, 85, 'Tottenham Hotspur', 'https://cdn.sofifa.com/teams/18/30.png', 'Left', 40, 'High/ High', 'Normal (170-185)', 'Yes', 18, '177cm', '68kg', 750, 'CAM'),
(82, 'L. Pellegrini', 25, 'https://cdn.sofifa.com/players/228/251/22_60.png', 'Italy', 'https://cdn.sofifa.com/flags/it.png', 81, 86, 'Roma', 'https://cdn.sofifa.com/teams/52/30.png', 'Right', 30, 'Medium/ Medium', 'Lean (185+)', 'Yes', 7, '186cm', '77kg', 720, 'CAM'),
(83, 'F. de Jong', 24, 'https://cdn.sofifa.com/players/228/702/22_60.png', 'Netherlands', 'https://cdn.sofifa.com/flags/nl.png', 87, 92, 'FC Barcelona', 'https://cdn.sofifa.com/teams/241/30.png', 'Right', 40, 'High/ Medium', 'Unique', 'Yes', 21, '180cm', '74kg', 720, 'CM'),
(84, 'Renato Sanches', 23, 'https://cdn.sofifa.com/players/230/767/22_60.png', 'Portugal', 'https://cdn.sofifa.com/flags/pt.png', 80, 86, 'LOSC Lille', 'https://cdn.sofifa.com/teams/65/30.png', 'Right', 40, 'High/ High', 'Normal (170-185)', 'Yes', 18, '176cm', '70kg', 670, 'CAM'),
(85, 'F. Kessié', 24, 'https://cdn.sofifa.com/players/230/938/22_60.png', 'Côte dIvoire', 'https://cdn.sofifa.com/flags/ci.png', 84, 86, 'AC Milan', 'https://cdn.sofifa.com/teams/47/30.png', 'Right', 30, 'High/ High', 'Normal (170-185)', 'Yes', 79, '183cm', '88kg', 670, 'CDM'),
(86, 'T. Alexander-Arnold', 22, 'https://cdn.sofifa.com/players/231/281/22_60.png', 'England', 'https://cdn.sofifa.com/flags/gb-eng.png', 87, 92, 'Liverpool', 'https://cdn.sofifa.com/teams/9/30.png', 'Right', 30, 'High/ Medium', 'Unique', 'Yes', 66, '180cm', '69kg', 600, 'RB'),
(87, 'K. Mbappé', 22, 'https://cdn.sofifa.com/players/231/747/22_60.png', 'France', 'https://cdn.sofifa.com/flags/fr.png', 91, 95, 'Paris Saint-Germain', 'https://cdn.sofifa.com/teams/73/30.png', 'Right', 50, 'High/ Low', 'Unique', 'Yes', 7, '182cm', '73kg', 930, 'ST'),
(88, 'R. Malinovskyi', 28, 'https://cdn.sofifa.com/players/231/969/22_60.png', 'Ukraine', 'https://cdn.sofifa.com/flags/ua.png', 81, 81, 'Atalanta', 'https://cdn.sofifa.com/teams/39/30.png', 'Left', 40, 'Medium/ Medium', 'Stocky (170-185)', 'No', 18, '181cm', '79kg', 730, 'CF'),
(89, 'T. Hernández', 23, 'https://cdn.sofifa.com/players/232/656/22_60.png', 'France', 'https://cdn.sofifa.com/flags/fr.png', 84, 90, 'AC Milan', 'https://cdn.sofifa.com/teams/47/30.png', 'Left', 30, 'High/ Medium', 'Unique', 'Yes', 19, '184cm', '81kg', 680, 'LB'),
(90, 'Lucas Paquetá', 23, 'https://cdn.sofifa.com/players/233/927/22_60.png', 'Brazil', 'https://cdn.sofifa.com/flags/br.png', 81, 85, 'Olympique Lyonnais', 'https://cdn.sofifa.com/teams/66/30.png', 'Left', 40, 'High/ High', 'Normal (170-185)', 'Yes', 10, '180cm', '72kg', 780, 'CAM'),
(91, 'Carlos Soler', 24, 'https://cdn.sofifa.com/players/234/153/22_60.png', 'Spain', 'https://cdn.sofifa.com/flags/es.png', 81, 88, 'Valencia CF', 'https://cdn.sofifa.com/teams/461/30.png', 'Right', 30, 'Medium/ Medium', 'Lean (170-185)', 'Yes', 10, '180cm', '76kg', 780, 'CAM'),
(92, 'L. Robertone', 24, 'https://cdn.sofifa.com/players/235/008/22_60.png', 'Argentina', 'https://cdn.sofifa.com/flags/ar.png', 76, 83, 'Unión Deportiva Almería', 'https://cdn.sofifa.com/teams/1861/30.png', 'Right', 40, 'Medium/ Medium', 'Lean (170-185)', 'No', 5, '175cm', '70kg', 710, 'CAM'),
(93, 'A. Hakimi', 22, 'https://cdn.sofifa.com/players/235/212/22_60.png', 'Morocco', 'https://cdn.sofifa.com/flags/ma.png', 85, 88, 'Paris Saint-Germain', 'https://cdn.sofifa.com/teams/73/30.png', 'Right', 30, 'High/ Medium', 'Lean (170-185)', 'Yes', 2, '181cm', '73kg', 730, 'RB'),
(94, 'F. Valverde', 22, 'https://cdn.sofifa.com/players/239/053/22_60.png', 'Uruguay', 'https://cdn.sofifa.com/flags/uy.png', 83, 89, 'Real Madrid CF', 'https://cdn.sofifa.com/teams/243/30.png', 'Right', 30, 'High/ High', 'Unique', 'Yes', 15, '182cm', '78kg', 690, 'CM'),
(95, 'N. De la Cruz', 24, 'https://cdn.sofifa.com/players/240/699/22_60.png', 'Uruguay', 'https://cdn.sofifa.com/flags/uy.png', 78, 84, 'River Plate', 'https://cdn.sofifa.com/teams/1876/30.png', 'Right', 40, 'High/ High', 'Normal (170-)', 'No', 11, '167cm', '65kg', 730, 'CAM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fifa_player`
--
ALTER TABLE `fifa_player`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fifa_player`
--
ALTER TABLE `fifa_player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
