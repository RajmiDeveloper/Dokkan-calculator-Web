-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 29-09-2024 a las 14:46:35
-- Versión del servidor: 10.2.44-MariaDB
-- Versión de PHP: 8.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fotok0_dokkan_event_challenges`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `RedZone_Future`
--

CREATE TABLE `RedZone_Future` (
  `ID` int(11) NOT NULL,
  `Name_Event` text NOT NULL,
  `Number_Event` int(11) NOT NULL,
  `Phase` int(11) NOT NULL DEFAULT 1,
  `Enemy1_HP` int(11) NOT NULL DEFAULT 0,
  `Enemy1_ATK` int(11) NOT NULL DEFAULT 0,
  `Enemy1_DEF` int(11) NOT NULL DEFAULT 0,
  `Enemy1_Type` text NOT NULL DEFAULT 'INT',
  `Enemy1_Class` text NOT NULL DEFAULT 'Extreme',
  `Enemy1_DR` int(11) NOT NULL DEFAULT 0,
  `Enemy1_SA_Damage` int(11) NOT NULL DEFAULT 0,
  `SA_Multiplier` int(11) NOT NULL DEFAULT 250,
  `Enemy1_SA_ATK_Reduction` int(11) NOT NULL DEFAULT 0,
  `Enemy1_SA_DEF_Reduction` int(11) NOT NULL DEFAULT 0,
  `Enemy1_AOE_ATK` int(11) NOT NULL DEFAULT 0,
  `Enemy1_SA_DEF_Raises` int(11) NOT NULL DEFAULT 0,
  `Enemy1_SA_ATK_Raises` int(11) NOT NULL DEFAULT 0,
  `Enemy1_Cant_SA` int(11) NOT NULL DEFAULT 1,
  `Enemy1_Nullifies_ATKDown` tinyint(1) NOT NULL DEFAULT 1,
  `Enemy1_Nullifies_DEFdown` tinyint(1) NOT NULL DEFAULT 1,
  `Enemy1_Nullifies_Stun` tinyint(1) NOT NULL DEFAULT 1,
  `Enemy1_Nullifies_Seal` tinyint(1) NOT NULL DEFAULT 1,
  `Enemy1_Nullifies_SAKiBlast` tinyint(1) NOT NULL DEFAULT 1,
  `Enemy1_Chance_Sealing` int(11) NOT NULL DEFAULT 0,
  `Enemy1_CantEnemy_Sealing` int(11) NOT NULL DEFAULT 0,
  `Enemy1_Chance_Locking` int(11) NOT NULL DEFAULT 0,
  `Enemy1_CantEnemy_Locking` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `RedZone_Future`
--

INSERT INTO `RedZone_Future` (`ID`, `Name_Event`, `Number_Event`, `Phase`, `Enemy1_HP`, `Enemy1_ATK`, `Enemy1_DEF`, `Enemy1_Type`, `Enemy1_Class`, `Enemy1_DR`, `Enemy1_SA_Damage`, `SA_Multiplier`, `Enemy1_SA_ATK_Reduction`, `Enemy1_SA_DEF_Reduction`, `Enemy1_AOE_ATK`, `Enemy1_SA_DEF_Raises`, `Enemy1_SA_ATK_Raises`, `Enemy1_Cant_SA`, `Enemy1_Nullifies_ATKDown`, `Enemy1_Nullifies_DEFdown`, `Enemy1_Nullifies_Stun`, `Enemy1_Nullifies_Seal`, `Enemy1_Nullifies_SAKiBlast`, `Enemy1_Chance_Sealing`, `Enemy1_CantEnemy_Sealing`, `Enemy1_Chance_Locking`, `Enemy1_CantEnemy_Locking`) VALUES
(1, 'VS Androids #17 (Future) & #18 (Future)', 1, 1, 20000000, 380000, 50000, 'STR', 'Extreme', 60, 950000, 250, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0),
(2, 'VS Androids #17 (Future) & #18 (Future)', 1, 2, 25000000, 420000, 50000, 'TEQ', 'Extreme', 58, 1050000, 250, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0),
(3, 'VS Androids #17 (Future) & #18 (Future)', 1, 3, 35000000, 460000, 70000, 'AGL', 'Extreme', 60, 1288000, 280, 0, 0, 0, 30, 30, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0),
(4, 'VS Cell (1st Form)', 2, 1, 75000000, 490000, 80000, 'TEQ', 'Extreme', 62, 1372000, 250, 0, 0, 0, 0, 30, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0),
(5, 'Vs. Goku Black', 3, 1, 45000000, 550000, 75000, 'STR', 'Extreme', 64, 1540000, 250, 0, 0, 0, 30, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0),
(6, 'Vs. Goku Black', 3, 2, 55000000, 600000, 90000, 'INT', 'Extreme', 66, 1680000, 280, 0, 0, 0, 20, 30, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0),
(7, 'Vs. Zamasu', 4, 1, 40000000, 500000, 70000, 'INT', 'Extreme', 64, 1250000, 280, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0),
(8, 'Vs. Zamasu', 4, 2, 60000000, 603040, 110000, 'TEQ', 'Extreme', 66, 1507600, 250, 0, 0, 0, 0, 30, 2, 1, 1, 1, 1, 0, 0, 0, 0, 0),
(9, 'Vs. Fusion Zamasu ', 5, 1, 50000000, 500000, 150000, 'INT', 'Extreme', 67, 1250000, 250, 20, 0, 500000, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0),
(10, 'Vs. Fusion Zamasu ', 5, 2, 70000000, 700000, 200000, 'PHY', 'Extreme', 70, 1750000, 250, 0, 0, 0, 30, 30, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `RedZone_Future`
--
ALTER TABLE `RedZone_Future`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `RedZone_Future`
--
ALTER TABLE `RedZone_Future`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
