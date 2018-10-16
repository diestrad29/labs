/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 100133
Source Host           : localhost:3306
Source Database       : bddeleyesoz

Target Server Type    : MYSQL
Target Server Version : 100133
File Encoding         : 65001

Date: 2018-10-16 00:29:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for deleybd_clientes
-- ----------------------------
DROP TABLE IF EXISTS `deleybd_clientes`;
CREATE TABLE `deleybd_clientes` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `tipo_documento` varchar(5) DEFAULT NULL,
  `numdocumento` int(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `estado` enum('0','1') DEFAULT '1' COMMENT '0 = Enlace desactivado - 1 = Enlace activado',
  `fecha` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of deleybd_clientes
-- ----------------------------
INSERT INTO `deleybd_clientes` VALUES ('1', 'Diego Estrada', 'cc', '1033456745', 'dieguar@hotmail.com', '12345667', '549009164', '1', '2018-10-16 00:12:51');
INSERT INTO `deleybd_clientes` VALUES ('2', 'Diego Estrada', 'cc', '1033679456', 'dieguar@hotmail.com', '12345667', '513378196', '1', '2018-10-16 00:15:26');
INSERT INTO `deleybd_clientes` VALUES ('3', 'sdf', 'cc', '234234', 'dieguar@hotmail.com', '12345667', '820868884', '1', '2018-10-16 00:17:01');
INSERT INTO `deleybd_clientes` VALUES ('4', 'sdf', 'cc', '234234', 'dieguar@hotmail.com', '12345667', '98242252', '1', '2018-10-16 00:18:04');
INSERT INTO `deleybd_clientes` VALUES ('5', 'Diego Estrada', 'cc', '1033679456', 'dieguar@hotmail.com', '12345667', '7857398', '1', '2018-10-16 00:21:39');
INSERT INTO `deleybd_clientes` VALUES ('6', 'Diego Estrada', 'cc', '1033123', 'dieguar@hotmail.com', '12345667', '660777635', '1', '2018-10-16 00:22:49');

-- ----------------------------
-- Table structure for deleybd_datacredito
-- ----------------------------
DROP TABLE IF EXISTS `deleybd_datacredito`;
CREATE TABLE `deleybd_datacredito` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `idservicio` int(10) DEFAULT NULL,
  `fecha` varchar(100) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `soporte` varchar(255) DEFAULT NULL,
  `departamento` varchar(100) DEFAULT NULL,
  `ciudad` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of deleybd_datacredito
-- ----------------------------
INSERT INTO `deleybd_datacredito` VALUES ('1', '2', '2018-10-02', 'Una prueba', 'foto.pdf', 'valledelcauca', 'jamundi');
INSERT INTO `deleybd_datacredito` VALUES ('2', '2', '2018-10-03', 'Reporte numero 1', 'foto.pdf', 'valledelcauca', 'caicedonia');
INSERT INTO `deleybd_datacredito` VALUES ('3', '2', '2018-09-14', 'Un nuevo reporte', 'soporte.png', 'cundinamarca', 'soacha');
INSERT INTO `deleybd_datacredito` VALUES ('4', '2', '2018-10-02', 'Final data credito', 'archivo.pdf', 'antioquia', 'itagui');
INSERT INTO `deleybd_datacredito` VALUES ('5', '2', '2018-10-02', 'fgh', 'fghfg', 'cundinamarca', 'chia');

-- ----------------------------
-- Table structure for deleybd_empresa
-- ----------------------------
DROP TABLE IF EXISTS `deleybd_empresa`;
CREATE TABLE `deleybd_empresa` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `idservicio` int(10) DEFAULT NULL,
  `nomempresa` varchar(100) DEFAULT NULL,
  `tipoempresa` varchar(100) DEFAULT NULL,
  `numaccionistas` int(10) DEFAULT NULL,
  `cantcapital` int(10) DEFAULT NULL,
  `departamento` varchar(100) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of deleybd_empresa
-- ----------------------------
INSERT INTO `deleybd_empresa` VALUES ('1', '1', 'PD', 'sas', '10', '10000000', 'cundinamarca', 'bogota', '2018-10-16 00:23:03');

-- ----------------------------
-- Table structure for deleybd_registro_temporal
-- ----------------------------
DROP TABLE IF EXISTS `deleybd_registro_temporal`;
CREATE TABLE `deleybd_registro_temporal` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `tipo_documento` varchar(5) DEFAULT NULL,
  `numdocumento` int(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `estado` enum('0','1') DEFAULT '1' COMMENT '0 = Enlace desactivado - 1 = Enlace activado',
  `fecha` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of deleybd_registro_temporal
-- ----------------------------
INSERT INTO `deleybd_registro_temporal` VALUES ('1', 'Armando Barrera', 'cc', '1033123', 'dieguar@hotmail.com', '12345667', '270913866', '1', '2018-10-15 08:34:00');
INSERT INTO `deleybd_registro_temporal` VALUES ('2', 'Yuly MIlena', 'cc', '1033679456', 'dieguar@hotmail.com', '123456', '848877879', '1', '2018-10-15 08:39:57');
INSERT INTO `deleybd_registro_temporal` VALUES ('3', 'Jose Gomez', 'cc', '1033123', 'dieguar@hotmail.com', '1234567', '77234900', '1', '2018-10-15 09:02:35');
INSERT INTO `deleybd_registro_temporal` VALUES ('4', 'Armando Barrera', 'cc', '1033123', 'dieguar@hotmail.com', '12345667', '575321201', '1', '2018-10-15 09:08:59');
INSERT INTO `deleybd_registro_temporal` VALUES ('5', 'Armando Barrera', 'cc', '1033123', 'dieguar@hotmail.com', '12345667', '61179612', '1', '2018-10-15 09:39:08');
INSERT INTO `deleybd_registro_temporal` VALUES ('8', 'Diego Estrada', 'cc', '1033456745', 'dieguar@hotmail.com', '12345667', '549009164', '1', '2018-10-16 00:12:51');
INSERT INTO `deleybd_registro_temporal` VALUES ('9', 'Diego Estrada', 'cc', '1033679456', 'dieguar@hotmail.com', '12345667', '513378196', '1', '2018-10-16 00:15:26');
INSERT INTO `deleybd_registro_temporal` VALUES ('10', 'sdf', 'cc', '234234', 'dieguar@hotmail.com', '12345667', '820868884', '1', '2018-10-16 00:17:01');
INSERT INTO `deleybd_registro_temporal` VALUES ('11', 'sdf', 'cc', '234234', 'dieguar@hotmail.com', '12345667', '98242252', '1', '2018-10-16 00:18:04');
INSERT INTO `deleybd_registro_temporal` VALUES ('12', 'Diego Estrada', 'cc', '1033679456', 'dieguar@hotmail.com', '12345667', '7857398', '1', '2018-10-16 00:21:39');
INSERT INTO `deleybd_registro_temporal` VALUES ('13', 'Diego Estrada', 'cc', '1033123', 'dieguar@hotmail.com', '12345667', '660777635', '1', '2018-10-16 00:22:49');

-- ----------------------------
-- Table structure for deleybd_servicios
-- ----------------------------
DROP TABLE IF EXISTS `deleybd_servicios`;
CREATE TABLE `deleybd_servicios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `activo` enum('0','1') DEFAULT '1',
  `precio` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of deleybd_servicios
-- ----------------------------
INSERT INTO `deleybd_servicios` VALUES ('1', 'Creación de empresa', '1', '1320000');
INSERT INTO `deleybd_servicios` VALUES ('2', 'Data crédito', '1', '1900000');
SET FOREIGN_KEY_CHECKS=1;
