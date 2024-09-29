-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 29-09-2024 a las 14:46:29
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
-- Base de datos: `fotok0_dokkan_calculator`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_info`
--

CREATE TABLE `character_info` (
  `ID` int(11) NOT NULL,
  `Name` text DEFAULT NULL,
  `SubName` varchar(300) DEFAULT NULL,
  `Type` varchar(3) DEFAULT 'STR',
  `Class` varchar(7) DEFAULT NULL,
  `Rarity` varchar(3) DEFAULT NULL,
  `HP` int(11) DEFAULT 0,
  `ATK` int(11) DEFAULT 0,
  `DEF` int(11) DEFAULT 0,
  `release_date` date NOT NULL DEFAULT '1999-01-01',
  `SA 1atk buff` int(11) DEFAULT 0,
  `CantTurn_ATK SA 1` int(11) DEFAULT 0,
  `SA 1 def buff` int(11) DEFAULT 0,
  `CantTurn_DEF SA 1` int(11) DEFAULT 0,
  `SA 1 ki` int(11) DEFAULT 0,
  `Multiplier SA 1` text DEFAULT 'supreme',
  `SA 2 atk buff` int(11) DEFAULT 0,
  `CantTurn_ATK SA 2` int(11) DEFAULT 0,
  `SA 2 def buff` int(11) DEFAULT 0,
  `CantTurn_DEF SA 2` int(11) DEFAULT 0,
  `SA 2 ki` int(11) DEFAULT 0,
  `Multiplier SA 2` text DEFAULT 'supreme',
  `Base_ATK` int(11) DEFAULT 0,
  `Base_DEF` int(11) DEFAULT 0,
  `CantTurnStat` int(11) DEFAULT 0,
  `TurnATK` int(11) DEFAULT 0,
  `TurnDEF` int(11) DEFAULT 0,
  `StartCountingEnemy` int(11) DEFAULT 0,
  `ATK_x_Enemy` int(11) DEFAULT 0,
  `DEF_x_Enemy` int(11) DEFAULT 0,
  `atk_PerEnemyMax` int(11) NOT NULL DEFAULT 0,
  `def_PerEnemyMax` int(11) NOT NULL DEFAULT 0,
  `StartCountingEnemy_SA` int(11) NOT NULL DEFAULT 0,
  `atk_PerEnemy_SA` int(11) NOT NULL DEFAULT 0,
  `def_PerEnemy_SA` int(11) NOT NULL DEFAULT 0,
  `atk_PerEnemyMax_SA` int(11) NOT NULL DEFAULT 0,
  `def_PerEnemyMax_SA` int(11) NOT NULL DEFAULT 0,
  `Con_HP+1` int(11) DEFAULT 0,
  `ATK_HP 1` int(11) DEFAULT 0,
  `DEF_HP 1` int(11) DEFAULT 0,
  `Con_HP+2` int(11) DEFAULT 0,
  `ATK_HP 2` int(11) DEFAULT 0,
  `DEF_HP 2` int(11) DEFAULT 0,
  `Con_HP+3` int(11) DEFAULT 0,
  `ATK_HP 3` int(11) DEFAULT 0,
  `DEF_HP 3` int(11) DEFAULT 0,
  `ATK_ConEnemy` int(11) DEFAULT 0,
  `DEF_ConEnemy` int(11) DEFAULT 0,
  `ATK_PerAlly` int(11) DEFAULT 0,
  `DEF_PerAlly` int(11) DEFAULT 0,
  `ATK_Max_PerAlly` int(11) DEFAULT 0,
  `DEF_Max_PerAlly` int(11) DEFAULT 0,
  `ATK_ConAllies` int(11) DEFAULT 0,
  `DEF_ConAllies` int(11) DEFAULT 0,
  `ATK_NoAlly` int(11) DEFAULT 0,
  `DEF_NoAlly` int(11) DEFAULT 0,
  `ATK_PerORB` int(11) DEFAULT 0,
  `DEF_PerORB` int(11) DEFAULT 0,
  `atk_PerOrb_SA` int(11) NOT NULL DEFAULT 0,
  `def_PerOrb_SA` int(11) NOT NULL DEFAULT 0,
  `ATK_ATSlot1` int(11) DEFAULT 0,
  `DEF_ATSlot1` int(11) DEFAULT 0,
  `ATK_ATSlot2` int(11) DEFAULT 0,
  `DEF_ATSlot2` int(11) DEFAULT 0,
  `ATK_ATSlot3` int(11) DEFAULT 0,
  `DEF_ATSlot3` int(11) DEFAULT 0,
  `ATK_Slot1` int(11) DEFAULT 0,
  `DEF_Slot1` int(11) DEFAULT 0,
  `ATK_Slot2` int(11) DEFAULT 0,
  `DEF_Slot2` int(11) DEFAULT 0,
  `ATK_Slot3` int(11) DEFAULT 0,
  `DEF_Slot3` int(11) DEFAULT 0,
  `ATK_Chance1` int(11) DEFAULT 0,
  `DEF_Chance1` int(11) DEFAULT 0,
  `ATK_Chance2` int(11) DEFAULT 0,
  `DEF_Chance2` int(11) DEFAULT 0,
  `ATK_Per_Hit` int(11) DEFAULT 0,
  `DEF_Per_Hit` int(11) DEFAULT 0,
  `ATK_Max_Hits` int(11) DEFAULT 0,
  `Def_Max_Hits` int(11) DEFAULT 0,
  `ATK_Guard_Active` int(11) DEFAULT 0,
  `DEF_Guard_Active` int(11) DEFAULT 0,
  `ATK_Max_Guard_Active` int(11) DEFAULT 0,
  `DEF_Max_Guard_Active` int(11) DEFAULT 0,
  `ATK_Per_attack` int(11) DEFAULT 0,
  `DEF_Per_attack` int(11) DEFAULT 0,
  `ATK_Max_Per_attack` int(11) DEFAULT 0,
  `DEF_Max_Per_attack` int(11) DEFAULT 0,
  `ATK_Per_SA` int(11) DEFAULT 0,
  `DEF_Per_SA` int(11) DEFAULT 0,
  `ATK_Max_Per_SA` int(11) DEFAULT 0,
  `DEF_Max_Per_SA` int(11) DEFAULT 0,
  `ATK_Revival` int(11) DEFAULT 0,
  `DEF_Revival` int(11) DEFAULT 0,
  `Ki condition` int(11) DEFAULT 0,
  `ATK_ki` int(11) DEFAULT 0,
  `DEF_ki` int(11) DEFAULT 0,
  `ATK_When_Attack` int(11) DEFAULT 0,
  `DEF_When_Attack` int(11) DEFAULT 0,
  `ATK_When_SA` int(11) DEFAULT 0,
  `DEF_When_SA` int(11) DEFAULT 0,
  `ATK_When_USA` int(11) DEFAULT 0,
  `DEF_When_USA` int(11) DEFAULT 0,
  `TurnCon_Dodge` int(11) DEFAULT 0,
  `Cant_Dodge` int(11) DEFAULT 0,
  `ATK_Dodge` int(11) DEFAULT 0,
  `DEF_Dodge` int(11) DEFAULT 0,
  `ATK_Max_Dodge` int(11) DEFAULT 0,
  `DEF_Max_Dodge` int(11) DEFAULT 0,
  `CantTurnHit` int(11) DEFAULT 0,
  `Instant` tinyint(1) DEFAULT 0,
  `ATK_Hit` int(11) DEFAULT 0,
  `DEF_Hit` int(11) DEFAULT 0,
  `ATK_FinalBlow` int(11) DEFAULT 0,
  `DEF_FinalBlow` int(11) DEFAULT 0,
  `HP+_Con_Attacking1` int(11) DEFAULT 0,
  `ATK_HP_Attacking1` int(11) DEFAULT 0,
  `DEF_HP_Attacking1` int(11) DEFAULT 0,
  `HP+_Con_Attacking2` int(11) DEFAULT 0,
  `ATK_HP_Attacking2` int(11) DEFAULT 0,
  `DEF_HP_Attacking2` int(11) DEFAULT 0,
  `HP+_Con_Attacking3` int(11) DEFAULT 0,
  `ATK_HP_Attacking3` int(11) DEFAULT 0,
  `DEF_HP_Attacking3` int(11) DEFAULT 0,
  `UnCon_DR` int(11) DEFAULT 0,
  `Con_DR` int(11) DEFAULT 0,
  `Con_Guard` tinyint(1) DEFAULT 0,
  `UnCon_Guard` tinyint(1) DEFAULT 0,
  `CantSA_UnCon` int(11) DEFAULT 0,
  `CantSA_Con` int(11) DEFAULT 0,
  `Active_Multiplier` text DEFAULT 'none',
  `Link 1` text DEFAULT '---',
  `Link 2` text DEFAULT '---',
  `Link 3` text DEFAULT '---',
  `Link 4` text DEFAULT '---',
  `Link 5` text DEFAULT '---',
  `Link 6` text DEFAULT '---',
  `Link 7` text DEFAULT '---',
  `special_hidden_atk` int(11) NOT NULL DEFAULT 0,
  `special_hidden_def` int(11) NOT NULL DEFAULT 0,
  `special_hidden_hp` int(11) NOT NULL DEFAULT 0,
  `HPf` int(11) NOT NULL DEFAULT 0,
  `ATK_HPf` int(11) NOT NULL DEFAULT 0,
  `DEF_HPf` int(11) NOT NULL DEFAULT 0,
  `KI_Conf` int(11) NOT NULL DEFAULT 0,
  `ATK_KIf` int(11) NOT NULL DEFAULT 0,
  `DEF_KIf` int(11) NOT NULL DEFAULT 0,
  `ATK_WhenSAf` int(11) NOT NULL DEFAULT 0,
  `DEF_WhenSAf` int(11) NOT NULL DEFAULT 0,
  `Base_ATKf` int(11) NOT NULL DEFAULT 0,
  `Base_DEFf` int(11) NOT NULL DEFAULT 0,
  `ATK_FinalBlowf` int(11) NOT NULL DEFAULT 0,
  `DEF_FinalBlowf` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `character_info`
--

INSERT INTO `character_info` (`ID`, `Name`, `SubName`, `Type`, `Class`, `Rarity`, `HP`, `ATK`, `DEF`, `release_date`, `SA 1atk buff`, `CantTurn_ATK SA 1`, `SA 1 def buff`, `CantTurn_DEF SA 1`, `SA 1 ki`, `Multiplier SA 1`, `SA 2 atk buff`, `CantTurn_ATK SA 2`, `SA 2 def buff`, `CantTurn_DEF SA 2`, `SA 2 ki`, `Multiplier SA 2`, `Base_ATK`, `Base_DEF`, `CantTurnStat`, `TurnATK`, `TurnDEF`, `StartCountingEnemy`, `ATK_x_Enemy`, `DEF_x_Enemy`, `atk_PerEnemyMax`, `def_PerEnemyMax`, `StartCountingEnemy_SA`, `atk_PerEnemy_SA`, `def_PerEnemy_SA`, `atk_PerEnemyMax_SA`, `def_PerEnemyMax_SA`, `Con_HP+1`, `ATK_HP 1`, `DEF_HP 1`, `Con_HP+2`, `ATK_HP 2`, `DEF_HP 2`, `Con_HP+3`, `ATK_HP 3`, `DEF_HP 3`, `ATK_ConEnemy`, `DEF_ConEnemy`, `ATK_PerAlly`, `DEF_PerAlly`, `ATK_Max_PerAlly`, `DEF_Max_PerAlly`, `ATK_ConAllies`, `DEF_ConAllies`, `ATK_NoAlly`, `DEF_NoAlly`, `ATK_PerORB`, `DEF_PerORB`, `atk_PerOrb_SA`, `def_PerOrb_SA`, `ATK_ATSlot1`, `DEF_ATSlot1`, `ATK_ATSlot2`, `DEF_ATSlot2`, `ATK_ATSlot3`, `DEF_ATSlot3`, `ATK_Slot1`, `DEF_Slot1`, `ATK_Slot2`, `DEF_Slot2`, `ATK_Slot3`, `DEF_Slot3`, `ATK_Chance1`, `DEF_Chance1`, `ATK_Chance2`, `DEF_Chance2`, `ATK_Per_Hit`, `DEF_Per_Hit`, `ATK_Max_Hits`, `Def_Max_Hits`, `ATK_Guard_Active`, `DEF_Guard_Active`, `ATK_Max_Guard_Active`, `DEF_Max_Guard_Active`, `ATK_Per_attack`, `DEF_Per_attack`, `ATK_Max_Per_attack`, `DEF_Max_Per_attack`, `ATK_Per_SA`, `DEF_Per_SA`, `ATK_Max_Per_SA`, `DEF_Max_Per_SA`, `ATK_Revival`, `DEF_Revival`, `Ki condition`, `ATK_ki`, `DEF_ki`, `ATK_When_Attack`, `DEF_When_Attack`, `ATK_When_SA`, `DEF_When_SA`, `ATK_When_USA`, `DEF_When_USA`, `TurnCon_Dodge`, `Cant_Dodge`, `ATK_Dodge`, `DEF_Dodge`, `ATK_Max_Dodge`, `DEF_Max_Dodge`, `CantTurnHit`, `Instant`, `ATK_Hit`, `DEF_Hit`, `ATK_FinalBlow`, `DEF_FinalBlow`, `HP+_Con_Attacking1`, `ATK_HP_Attacking1`, `DEF_HP_Attacking1`, `HP+_Con_Attacking2`, `ATK_HP_Attacking2`, `DEF_HP_Attacking2`, `HP+_Con_Attacking3`, `ATK_HP_Attacking3`, `DEF_HP_Attacking3`, `UnCon_DR`, `Con_DR`, `Con_Guard`, `UnCon_Guard`, `CantSA_UnCon`, `CantSA_Con`, `Active_Multiplier`, `Link 1`, `Link 2`, `Link 3`, `Link 4`, `Link 5`, `Link 6`, `Link 7`, `special_hidden_atk`, `special_hidden_def`, `special_hidden_hp`, `HPf`, `ATK_HPf`, `DEF_HPf`, `KI_Conf`, `ATK_KIf`, `DEF_KIf`, `ATK_WhenSAf`, `DEF_WhenSAf`, `Base_ATKf`, `Base_DEFf`, `ATK_FinalBlowf`, `DEF_FinalBlowf`) VALUES
(1, 'Super Saiyan Goku', 'Supreme Warrior Awakened', 'AGL', 'super', 'SSR', 13282, 12136, 8857, '2015-01-30', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 'none', 'Blazing Battle', 'Super Saiyan', 'Saiyan Warrior Race', 'Golden Warrior', 'Kamehameha', '---', '---', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Super Saiyan Vegeta', 'Pride Regained', 'TEQ', 'extreme', 'SSR', 7920, 6700, 4325, '2015-01-30', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 30, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 'none', 'Blazing Battle', 'Super Saiyan', 'Saiyan Warrior Race', 'Golden Warrior', 'Royal Lineage', '---', '---', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'Goku', 'The Saiyan Among Us', 'STR', 'super', 'SR', 6696, 6192, 3361, '2015-01-30', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 'none', 'Z Fighters', 'All in the Family', 'Infighter', 'Kamehameha', 'High Compatibility', '---', '---', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'Vegeta', 'Genius of War', 'TEQ', 'extreme', 'SR', 6457, 5637, 4106, '2015-01-30', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 'none', 'Saiyan Warrior Race', 'Royal Lineage', 'Big Bad Bosses', 'Prodigies', '---', '---', '---', 0, 0, 0, 30, 2000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'Freeza (1st Form)', 'Emperor of Iniquity ', 'STR', 'extreme', 'SR', 5900, 6064, 4110, '2015-01-30', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 'none', 'Big Bad Bosses', 'Prodigies', 'Frieza`s Minion', 'Metamorphosis', 'Universe` Most Malevolent', '---', '---', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1500, 0, 0, 0),
(6, 'Freeza (1st Form)', 'Despair s Onslaught', 'STR', 'extreme', 'SR', 6720, 6120, 3505, '2015-01-30', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '', 0, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 'none', 'Big Bad Bosses', 'Prodigies', 'Frieza`s Minion', 'Metamorphosis', 'Universe` Most Malevolent', '---', '---', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'Cell (1st Form)', 'Android Evolution', 'AGL', 'extreme', 'SR', 5576, 5763, 3841, '2015-01-29', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 'none', 'Flee', 'Messenger from the Future', 'Kamehameha', 'Kamehameha', 'Attack of the Clones', 'The Wall Standing Tall', '---', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2500, 0),
(8, 'Cell (1st Form)', 'Time-traversing Evil', 'TEQ', 'extreme', 'SR', 6720, 5616, 4553, '2015-01-29', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 'none', 'Flee', 'Messenger from the Future', 'Big Bad Bosses', 'Kamehameha', 'Attack of the Clones', 'The Wall Standing Tall', '---', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'Gohan (Kid)', 'Unrelenting Fighter', 'STR', 'super', 'SR', 7126, 5857, 2920, '2015-01-29', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 'none', 'All in the Family', 'Z Fighters', 'Berserker', '---', '---', '---', '---', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 'Trunks (Teen)', 'Hawk Eyes', 'AGL', 'super', 'SR', 6798, 6010, 3282, '2015-01-29', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 'none', 'Royal Linage', 'Cold Judgment', 'Messenger from the Future', 'Z Fighters', '---', '---', '---', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'Krillin', 'Fruits of Labor', 'TEQ', 'super', 'SR', 5970, 5292, 3700, '2015-01-29', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 50, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 'none', 'Z Fighters', 'Turtle School', 'Courage', 'High Compatibility', '---', '---', '---', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 'Piccolo', 'Stern Teacher', 'AGL', 'super', 'SR', 6069, 5848, 2968, '2015-01-29', 0, 0, 0, 0, 11, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 'none', 'Z Fighters', 'Prodigies', 'Experienced Fighters', 'Namekians', 'Braniacs', '---', '---', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `links`
--

CREATE TABLE `links` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL DEFAULT '---',
  `ATK` int(11) NOT NULL DEFAULT 0,
  `DEF` int(11) NOT NULL DEFAULT 0,
  `ConSA` tinyint(1) NOT NULL DEFAULT 0,
  `DR` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `links`
--

INSERT INTO `links` (`ID`, `Name`, `ATK`, `DEF`, `ConSA`, `DR`) VALUES
(1, '---', 10, 10, 0, 0),
(2, 'Courage', 10, 0, 0, 0),
(3, 'The Students', 0, 30, 0, 0),
(4, 'The Innocents', 15, 0, 0, 0),
(5, 'Crane School', 20, 0, 0, 0),
(6, 'Demoniac Ways', 10, 10, 0, 0),
(7, 'Demonic Power', 20, 10, 0, 0),
(8, 'Braniacs', 15, 15, 0, 0),
(9, 'Golden Warrior', 0, 0, 0, 0),
(10, 'Money Money Money', 0, 20, 0, 0),
(11, 'Evil Autocrats', 0, 0, 0, 0),
(12, 'Flee', 0, 0, 0, 0),
(13, 'Telekinesis', 0, 0, 0, 0),
(14, 'More Than Meets The Eye', 10, 10, 0, 0),
(15, 'Hero', 0, 25, 0, 0),
(16, 'Supreme Warrior', 10, 0, 0, 0),
(17, 'Gentleman', 0, 10, 0, 0),
(18, 'Brutal Beatdown', 15, 0, 0, 0),
(19, 'Messenger from the Future', 10, 0, 0, 0),
(20, 'World Tournament Reborn', 20, 0, 0, 0),
(21, 'New', 20, 20, 0, 0),
(22, 'Saiyan Warrior Race', 10, 0, 0, 0),
(23, 'All in the Family', 0, 20, 0, 0),
(24, 'Telepathy', 0, 0, 0, 0),
(25, 'Respect', 20, 0, 0, 0),
(26, 'Prodigies', 15, 0, 0, 0),
(27, 'World Tournament Champion', 0, 10, 0, 0),
(28, 'Metamorphosis', 10, 10, 0, 0),
(29, 'Super Saiyan', 15, 0, 0, 0),
(30, 'Experienced Fighters', 15, 0, 0, 0),
(31, 'Twin Terrors', 5, 5, 0, 0),
(32, 'Coward', 0, 0, 0, 0),
(33, 'Attack of the Clones', 0, 0, 0, 0),
(34, 'The Saiyan Linage', 5, 5, 0, 0),
(35, 'Android Assault', 0, 20, 0, 0),
(36, 'Turtle School', 20, 20, 0, 0),
(37, 'Solid Support', 15, 0, 0, 0),
(38, 'Mechanical Menaces', 0, 0, 0, 5),
(39, 'Cold Judgment', 0, 25, 0, 0),
(40, 'Royal Linage', 5, 0, 0, 0),
(41, 'The Ginyu Force', 25, 0, 0, 0),
(42, 'Infighter', 15, 0, 0, 0),
(43, 'Frieza`s Minion', 20, 10, 0, 0),
(44, 'Champion`s Strength', 0, 0, 0, 5),
(45, 'Z Fighters', 20, 0, 0, 0),
(46, 'Dodon Ray', 15, 0, 1, 0),
(47, 'Kamehameha', 10, 0, 1, 0),
(48, 'Namekians', 7, 7, 0, 0),
(49, 'Berserker', 30, 0, 0, 0),
(50, 'Big Bad Bosses', 25, 25, 0, 0),
(51, 'Frieza\'s Army', 10, 20, 0, 0),
(52, 'Tough as Nails', 0, 20, 0, 5),
(53, 'Speedy Retribution', 15, 0, 0, 0),
(54, 'Tag Team of Terror', 20, 0, 0, 0),
(55, 'RR Army', 10, 10, 0, 0),
(56, 'Gaze of Respect', 10, 10, 0, 0),
(57, 'Bombardment', 20, 0, 0, 0),
(58, 'Over 9000', 10, 10, 0, 0),
(59, 'Universe` Most Malevolent', 20, 0, 0, 0),
(60, 'Shocking Speed', 0, 5, 0, 0),
(61, 'Family Ties', 10, 0, 0, 0),
(62, 'Team Bardock', 10, 10, 0, 0),
(63, 'Saiyan Pride', 20, 0, 0, 0),
(64, 'Battlefield Diva', 0, 0, 0, 0),
(65, 'Revival ', 5, 5, 0, 0),
(66, 'Dismal Future', 0, 0, 0, 0),
(67, 'Organic Upgrade', 5, 5, 0, 0),
(68, 'Resurrection `F`', 10, 10, 0, 0),
(69, 'Patrol', 0, 20, 0, 0),
(70, 'Warrior Gods', 0, 15, 0, 0),
(71, 'Super-God Combat', 20, 0, 0, 0),
(72, 'New Frieza Army', 25, 25, 0, 0),
(73, 'Loyalty', 0, 0, 0, 5),
(74, 'Unbreakable Bond', 0, 20, 0, 0),
(75, 'Galactic Visitor', 0, 20, 0, 0),
(76, 'Master of Magic', 15, 0, 0, 0),
(77, 'Majin Resurrection Plan', 0, 20, 0, 0),
(78, 'Connoisseur', 0, 7, 0, 0),
(79, 'Godly Power', 15, 0, 0, 0),
(80, 'Energy Absorption', 0, 0, 0, 0),
(81, 'Budding Warrior', 15, 0, 0, 0),
(82, 'Majin', 15, 15, 0, 0),
(83, 'Strength in Unity', 0, 0, 0, 0),
(84, 'Strongest Clan in Space', 0, 0, 0, 0),
(85, 'Thirst for Conquest', 15, 15, 0, 0),
(86, 'The Hera Clan', 5, 0, 0, 0),
(87, 'Galactic Warriors', 20, 20, 0, 0),
(88, 'Over in a Flash', 7, 0, 0, 0),
(89, 'The Incredible Adventure', 7, 7, 0, 0),
(90, 'Cooler`s Underling', 0, 0, 0, 0),
(91, 'Cooler`s Armored Squad', 25, 25, 0, 0),
(92, 'Hero of Justice', 25, 0, 0, 0),
(93, 'Signature Oise', 7, 0, 0, 0),
(94, 'GT', 10, 10, 0, 0),
(95, 'Infinite Regeneration', 0, 10, 0, 0),
(96, 'Prepared for Battle', 5, 5, 0, 0),
(97, 'Destroyer of the Universe', 25, 15, 0, 0),
(98, 'Team Turles', 0, 0, 0, 0),
(99, 'Fortuneteller Baba`s Fighter', 5, 5, 0, 0),
(100, 'Guidance of Dragon Balls', 20, 0, 0, 0),
(101, 'Power Bestowed by Gods', 10, 0, 1, 0),
(102, 'Hardened Grudge', 10, 0, 0, 0),
(103, 'Auto Regeneration', 0, 0, 0, 5),
(104, 'Fusion', 10, 10, 0, 0),
(105, 'Deficit Boost', 20, 0, 0, 0),
(106, 'Ultimate Lifeform', 10, 10, 0, 0),
(107, 'Fierce Battle', 20, 0, 0, 0),
(108, 'Infinite Energy', 5, 5, 0, 0),
(109, 'Formidable Enemy', 15, 0, 0, 0),
(110, 'Fused Fighter', 5, 5, 0, 0),
(111, 'Fusion Failure', 0, 0, 0, 0),
(112, 'Scientist', 0, 20, 0, 0),
(113, 'Hatred of Saiyans', 10, 0, 0, 0),
(114, 'Limit-Breaking Form', 10, 0, 1, 0),
(115, 'The First Awakened', 25, 10, 0, 0),
(116, 'Shattering the Limit', 5, 5, 0, 0),
(117, 'Nightmare', 15, 0, 0, 0),
(118, 'Fear and Faith', 0, 0, 0, 0),
(119, 'Xenoverse', 20, 10, 0, 0),
(120, 'Super Strike', 25, 0, 0, 0),
(121, 'Transform', 0, 10, 0, 0),
(122, 'Saiyan Roar', 25, 10, 0, 0),
(123, 'Legendary Power', 15, 1, 1, 0),
(124, 'Warriors of Universe 6', 6, 6, 0, 0),
(125, 'Shadow Dragons', 20, 20, 0, 0),
(126, 'Penguin Village Adventure', 20, 0, 0, 0),
(127, 'Otherworld Warriors', 20, 10, 0, 0),
(128, 'Tournament of Powers', 7, 7, 0, 0),
(129, 'Blazing Battle', 20, 0, 0, 0),
(130, 'Soul vs Soul ', 5, 5, 0, 0),
(131, 'Golden Z-Fighter', 0, 0, 0, 0),
(132, 'Supreme Power', 10, 10, 0, 0),
(133, 'The Wall Standing Tall', 20, 0, 0, 0),
(134, 'High Compatibility', 0, 0, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `character_info`
--
ALTER TABLE `character_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `character_info`
--
ALTER TABLE `character_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `links`
--
ALTER TABLE `links`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
