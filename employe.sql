-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 23 mai 2023 à 16:37
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `demotl`
--

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

DROP TABLE IF EXISTS `employe`;
CREATE TABLE IF NOT EXISTS `employe` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `department` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`id`, `department`, `email`, `name`) VALUES
(1, 'RH', 'nadine@acme.fr', 'Nadine Trintignant'),
(2, 'Finance', 'Nicolas@acme.fr', 'Nicolas Sarkozy'),
(3, 'Accounting', 'kshewring0@weather.com', 'Kiele Shewring'),
(4, 'Human Resources', 'jsomerville1@furl.net', 'Jarrett Somerville'),
(5, 'Marketing', 'cboughtwood2@npr.org', 'Codi Boughtwood'),
(6, 'Research and Development', 'fspratling3@storify.com', 'Fae Spratling'),
(7, 'Research and Development', 'bborkin4@oaic.gov.au', 'Bernardo Borkin'),
(8, 'Engineering', 'rschiersch5@bbc.co.uk', 'Reggi Schiersch'),
(9, 'Marketing', 'cmarler6@globo.com', 'Claudell Marler'),
(10, 'Engineering', 'lhayter7@etsy.com', 'Lilia Hayter'),
(11, 'Marketing', 'aschade8@usnews.com', 'Alisha Schade'),
(12, 'Business Development', 'bmckendry9@webnode.com', 'Bordy McKendry'),
(13, 'Product Management', 'aknibbsa@telegraph.co.uk', 'Anitra Knibbs'),
(14, 'Accounting', 'adanelsb@trellian.com', 'Alaine Danels'),
(15, 'Legal', 'klaybournec@163.com', 'Kikelia Laybourne'),
(16, 'Product Management', 'bvand@ovh.net', 'Blanche Van Oort'),
(17, 'Product Management', 'kthurlowe@tamu.edu', 'Kort Thurlow'),
(18, 'Business Development', 'qfifootf@webs.com', 'Quinn Fifoot'),
(19, 'Accounting', 'trocksg@wufoo.com', 'Trefor Rocks'),
(20, 'Legal', 'tginih@unicef.org', 'Tilly Gini'),
(21, 'Services', 'ggoodreidi@bloglovin.com', 'Germaine Goodreid'),
(22, 'Marketing', 'tmordyj@goo.gl', 'Teressa Mordy'),
(23, 'Sales', 'cmeacherk@hexun.com', 'Courtney Meacher'),
(24, 'Sales', 'klygoel@usda.gov', 'Kessiah Lygoe'),
(25, 'Marketing', 'gcharnleym@about.com', 'Gregoire Charnley'),
(26, 'Training', 'oharrowelln@stumbleupon.com', 'Ollie Harrowell'),
(27, 'Legal', 'aabotsono@pinterest.com', 'Andrew Abotson'),
(28, 'Marketing', 'cfellsp@google.fr', 'Coleen Fells'),
(29, 'Engineering', 'wdunlopq@comcast.net', 'Winonah Dunlop'),
(30, 'Business Development', 'wwrangler@buzzfeed.com', 'Winston Wrangle'),
(31, 'Product Management', 'gmacros@feedburner.com', 'Gertrudis Macro'),
(32, 'Services', 'tsetteringtont@slideshare.net', 'Thacher Setterington'),
(33, 'Business Development', 'vistedu@usatoday.com', 'Vanny Isted'),
(34, 'Support', 'lsomnerv@nhs.uk', 'Linn Somner'),
(35, 'Human Resources', 'wappsw@auda.org.au', 'Willetta Apps'),
(36, 'Training', 'wstandingfordx@boston.com', 'Willdon Standingford'),
(37, 'Research and Development', 'orambley@nature.com', 'Ola Ramble'),
(38, 'Training', 'hchivrallz@jigsy.com', 'Honoria Chivrall'),
(39, 'Engineering', 'jburberye10@baidu.com', 'Justinian Burberye'),
(40, 'Business Development', 'bjohnsey11@mtv.com', 'Benedetto Johnsey'),
(41, 'Support', 'dreuss12@ustream.tv', 'Danell Reuss'),
(42, 'Business Development', 'fhandrock13@trellian.com', 'Fredelia Handrock'),
(43, 'Services', 'abentke14@ehow.com', 'Adora Bentke'),
(44, 'Support', 'ttwelve15@moonfruit.com', 'Tiertza Twelve'),
(45, 'Business Development', 'srhyme16@theglobeandmail.com', 'Sarina Rhyme'),
(46, 'Services', 'mwillas17@joomla.org', 'Marlane Willas'),
(47, 'Accounting', 'bchavey18@delicious.com', 'Brewster Chavey'),
(48, 'Product Management', 'sdomenico19@privacy.gov.au', 'Sanderson Domenico'),
(49, 'Support', 'hstoffler1a@digg.com', 'Hurlee Stoffler'),
(50, 'Human Resources', 'saronovich1b@forbes.com', 'Serena Aronovich'),
(51, 'Product Management', 'adighton1c@mac.com', 'Anallese Dighton'),
(52, 'Services', 'rarchbald1d@princeton.edu', 'Radcliffe Archbald');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
