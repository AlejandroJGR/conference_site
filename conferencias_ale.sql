-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for conferencias-ale
CREATE DATABASE IF NOT EXISTS `conferencias-ale` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `conferencias-ale`;

-- Dumping structure for table conferencias-ale.categoria_evento
CREATE TABLE IF NOT EXISTS `categoria_evento` (
  `id_categoria` tinyint(10) NOT NULL AUTO_INCREMENT,
  `cate_evento` varchar(50) NOT NULL DEFAULT ' ',
  `icono` varchar(20) NOT NULL DEFAULT ' ',
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

-- Dumping structure for table conferencias-ale.eventos
CREATE TABLE IF NOT EXISTS `eventos` (
  `evento_id` tinyint(10) NOT NULL AUTO_INCREMENT,
  `nombre_evento` varchar(255) DEFAULT NULL,
  `fecha_evento` date DEFAULT NULL,
  `hora_evento` time DEFAULT NULL,
  `id_cat_evento` tinyint(10) DEFAULT NULL,
  `id_invit` tinyint(10) DEFAULT NULL,
  `clave` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`evento_id`),
  KEY `id_cat_evento` (`id_cat_evento`),
  KEY `id_invit` (`id_invit`),
  CONSTRAINT `id_cat_evento` FOREIGN KEY (`id_cat_evento`) REFERENCES `categoria_evento` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `id_invit` FOREIGN KEY (`id_invit`) REFERENCES `invitados` (`id_invitado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

-- Dumping structure for table conferencias-ale.invitados
CREATE TABLE IF NOT EXISTS `invitados` (
  `id_invitado` tinyint(10) NOT NULL AUTO_INCREMENT,
  `nombre_invitado` varchar(50) NOT NULL,
  `apellido_invitado` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `url_imagen` varchar(50) NOT NULL,
  PRIMARY KEY (`id_invitado`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

-- Dumping structure for table conferencias-ale.regalos
CREATE TABLE IF NOT EXISTS `regalos` (
  `id_regalo` tinyint(10) NOT NULL AUTO_INCREMENT,
  `nombre_regalo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_regalo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

-- Dumping structure for table conferencias-ale.registrados
CREATE TABLE IF NOT EXISTS `registrados` (
  `id_registrado` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre_registrado` varchar(50) DEFAULT NULL,
  `apellido_registrado` varchar(50) DEFAULT NULL,
  `email_registrado` varchar(100) DEFAULT NULL,
  `fecha_registro` datetime DEFAULT NULL,
  `pases_articulos` longtext,
  `talleres_registrados` longtext,
  `regalo` int(11) DEFAULT NULL,
  `total_pagado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_registrado`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
