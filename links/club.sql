-- phpMyAdmin SQL Dump
-- version 2.6.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 28, 2013 at 07:44 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.6
-- 
-- Database: `club`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `card`
-- 

CREATE TABLE `card` (
  `idcard` int(11) NOT NULL auto_increment,
  `namecard` varchar(45) collate utf8_unicode_ci default NULL,
  `persent` double NOT NULL default '0',
  PRIMARY KEY  (`idcard`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci PACK_KEYS=0 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `card`
-- 

INSERT INTO `card` VALUES (1, 'Classic', 5);
INSERT INTO `card` VALUES (2, 'Silver', 15);
INSERT INTO `card` VALUES (3, 'Gold', 30);

-- --------------------------------------------------------

-- 
-- Table structure for table `client`
-- 

CREATE TABLE `client` (
  `idclient` int(11) NOT NULL auto_increment,
  `fnameclient` varchar(20) collate utf8_unicode_ci default NULL,
  `lnameclient` varchar(20) collate utf8_unicode_ci default NULL,
  `idcard` int(11) default NULL,
  PRIMARY KEY  (`idclient`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

-- 
-- Dumping data for table `client`
-- 

INSERT INTO `client` VALUES (1, 'Сергей', 'Иванов', 1);
INSERT INTO `client` VALUES (2, 'Петя', 'Гринков', NULL);
INSERT INTO `client` VALUES (3, 'Степан', 'Зорькин', 2);
INSERT INTO `client` VALUES (4, 'Виктор', 'Гюго', 2);
INSERT INTO `client` VALUES (5, 'Абрахам', 'Шарбулда', 3);
INSERT INTO `client` VALUES (6, 'Николай', 'Николаев', 3);
INSERT INTO `client` VALUES (17, 'Жучка', 'Марковка', 3);

-- --------------------------------------------------------

-- 
-- Table structure for table `sell`
-- 

CREATE TABLE `sell` (
  `idsell` int(11) NOT NULL auto_increment,
  `idservice` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idclient` int(11) NOT NULL,
  `datetime` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`idsell`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

-- 
-- Dumping data for table `sell`
-- 

INSERT INTO `sell` VALUES (1, 1, 3, 1, '2013-04-28 18:35:49');
INSERT INTO `sell` VALUES (2, 2, 1, 1, '2013-04-28 18:35:54');
INSERT INTO `sell` VALUES (10, 4, 4, 5, '2013-04-28 18:36:12');
INSERT INTO `sell` VALUES (4, 3, 3, 3, '2013-04-28 18:33:45');
INSERT INTO `sell` VALUES (5, 4, 4, 4, '2013-04-28 18:33:45');
INSERT INTO `sell` VALUES (6, 1, 2, 3, '2013-04-28 18:33:59');
INSERT INTO `sell` VALUES (7, 2, 2, 5, '2013-04-28 18:33:59');
INSERT INTO `sell` VALUES (8, 3, 1, 6, '2013-04-28 18:34:16');
INSERT INTO `sell` VALUES (9, 4, 1, 2, '2013-04-28 18:34:16');

-- --------------------------------------------------------

-- 
-- Table structure for table `service`
-- 

CREATE TABLE `service` (
  `idservice` int(11) NOT NULL auto_increment,
  `nameservice` varchar(45) collate utf8_unicode_ci default NULL,
  `descservice` text collate utf8_unicode_ci,
  `hourprice` double default NULL,
  PRIMARY KEY  (`idservice`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `service`
-- 

INSERT INTO `service` VALUES (1, 'Сергей', 'Иванов2', 1);
INSERT INTO `service` VALUES (2, 'Игры', 'Описание игр', 2.33);
INSERT INTO `service` VALUES (3, 'Офис', 'Офис (пакет программ) для работы', 1.05);
INSERT INTO `service` VALUES (4, 'Игровая перефирия', 'Джойстики, клавиатуры...', 2.01);

-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL auto_increment,
  `fnameuser` varchar(20) collate utf8_unicode_ci default NULL,
  `lnameuser` varchar(20) collate utf8_unicode_ci default NULL,
  `login` varchar(45) collate utf8_unicode_ci default NULL,
  `password` varchar(128) collate utf8_unicode_ci default NULL,
  `iduser_type` int(11) NOT NULL,
  PRIMARY KEY  (`iduser`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `user`
-- 

INSERT INTO `user` VALUES (1, 'Гришин', 'Виктор', 'casper', '335', 1);
INSERT INTO `user` VALUES (2, 'Степан', 'Игнатьев', 'zoo', 'york', 1);
INSERT INTO `user` VALUES (3, 'Алиса', 'Виктос', 'alisa', 'viktos', 2);
INSERT INTO `user` VALUES (4, 'Александр', 'Коблинков', 'alex', 'koblingov', 2);

-- --------------------------------------------------------

-- 
-- Table structure for table `user_type`
-- 

CREATE TABLE `user_type` (
  `iduser_type` int(11) NOT NULL auto_increment,
  `nameuser_type` varchar(45) collate utf8_unicode_ci default NULL,
  `client_access` tinyint(1) NOT NULL default '1',
  `service_access` tinyint(1) NOT NULL default '1',
  `card_acceess` tinyint(1) NOT NULL default '1',
  `tarif_access` tinyint(1) NOT NULL default '1',
  `report_access` tinyint(1) NOT NULL default '1',
  PRIMARY KEY  (`iduser_type`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `user_type`
-- 

INSERT INTO `user_type` VALUES (1, 'Менеджер', 1, 1, 1, 1, 1);
INSERT INTO `user_type` VALUES (2, 'Оператор', 1, 1, 1, 1, 0);
