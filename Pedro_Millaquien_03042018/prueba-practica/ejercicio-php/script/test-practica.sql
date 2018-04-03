-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-03-2018 a las 12:20:28
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE SCHEMA IF NOT EXISTS `test-practica` DEFAULT CHARACTER SET utf8 ;
SHOW WARNINGS;
USE `test-practica` ;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `test-practica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_archivo`
--
DROP TABLE IF EXISTS `tb_archivo` ;

CREATE TABLE IF NOT EXISTS `tb_archivo` (
`id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `_name_archivo` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_archivo`
--

INSERT INTO `tb_archivo` (`id`, `id_empresa`, `_name_archivo`) VALUES
(1, 1, 'servicios.pdf'),
(2, 2, 'productos.pdf'),
(3, 2, 'logo.png'),
(4, 6, 'logo.png'),
(5, 6, 'calidad.pdf'),
(6, 9, 'politicas.pdf'),
(7, 9, 'tareas.word'),
(8, 11, 'banner.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_empresas`
--
DROP TABLE IF EXISTS `tb_empresas` ;

CREATE TABLE IF NOT EXISTS `tb_empresas` (
`id` int(11) NOT NULL,
  `_name` varchar(45) NOT NULL,
  `_direccion` varchar(45) NOT NULL,
  `_web` varchar(45) NOT NULL,
  `_email_contacto` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_empresas`
--

INSERT INTO `tb_empresas` (`id`, `_name`, `_direccion`, `_web`, `_email_contacto`) VALUES
(1, 'Cumbre Group', 'Del Inca 4446', 'www.cumbregroup.com', 'contacto@cumbregroup.com'),
(2, 'Transbank', 'Huérfanos 770 Piso 10', 'www.transbank.cl', 'contacto@transbank.cl'),
(3, 'VGroup', 'Los Militares 5885, Santiago', 'www.vgroup.cl', 'contacto@vgroup.cl'),
(4, 'Banco ABC', 'Escuela 12345', 'www.bancoabc.cl', 'contacto@bancoabc.cl'),
(5, 'Agua B', 'Los Andes 1515', 'www.aguab.cl', 'contacto@aguab.cl'),
(6, 'Quinchos Altos', 'Viña del Mar, 1 Norte 652', 'www.quinchosaltos.cl', 'contacto@quinchosaltos.cl'),
(7, 'OnePlus ', 'Libertad 46215', 'www.oneplus.net', 'contacto@oneplus.net'),
(8, 'Optica Soler', 'Providenca 55298', 'www.opticasoler.com', 'contacto@opticasoler.com'),
(9, 'Gas Lop', 'Rancagua 8695', 'www.gaslop.cl', 'contacto@gaslop.cl'),
(10, 'Super Productos', 'Rancagua 11203', 'www.superproductos.cl', 'contacto@superproductos.cl'),
(11, 'Pc Apoyo', 'La Ligua 8541', 'www.pcapoyo.cl', 'contacto@pcapoyo.cl');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_archivo`
--
ALTER TABLE `tb_archivo`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_tb_archivo_tb_empresas` (`id_empresa`);

--
-- Indices de la tabla `tb_empresas`
--
ALTER TABLE `tb_empresas`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_archivo`
--
ALTER TABLE `tb_archivo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `tb_empresas`
--
ALTER TABLE `tb_empresas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_archivo`
--
ALTER TABLE `tb_archivo`
ADD CONSTRAINT `fk_tb_archivo_tb_empresas` FOREIGN KEY (`id_empresa`) REFERENCES `tb_empresas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
