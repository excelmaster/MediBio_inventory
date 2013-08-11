-- --------------------------------------------------------
-- Host:                         Localhost
-- Server version:               5.6.11-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2013-06-22 14:40:06
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for a4104228_mb
DROP DATABASE IF EXISTS `a4104228_mb`;
CREATE DATABASE IF NOT EXISTS `a4104228_mb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `a4104228_mb`;


-- Dumping structure for table a4104228_mb.admin_redir
DROP TABLE IF EXISTS `admin_redir`;
CREATE TABLE IF NOT EXISTS `admin_redir` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `grupo` int(11) DEFAULT NULL,
  `name_sitio` varchar(200) DEFAULT NULL,
  `link_sitio` varchar(200) DEFAULT NULL,
  `img_sitio` varchar(200) DEFAULT NULL,
  `page` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Data exporting was unselected.


-- Dumping structure for table a4104228_mb.categoria_productos
DROP TABLE IF EXISTS `categoria_productos`;
CREATE TABLE IF NOT EXISTS `categoria_productos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `categoria_descrip` varchar(200) DEFAULT NULL,
  `tag_categdescrip` varchar(200) DEFAULT NULL,
  `unidad_medida_id` int(11) NOT NULL,
  `observa_categdescrip` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK1unidad` (`unidad_medida_id`),
  CONSTRAINT `FK1unidad` FOREIGN KEY (`unidad_medida_id`) REFERENCES `unidadesmedida` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabla de categorizacion de productos';

-- Data exporting was unselected.


-- Dumping structure for table a4104228_mb.clientes
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `prinombre` varchar(100) NOT NULL,
  `demasnombres` varchar(100) DEFAULT NULL,
  `priapellido` varchar(100) NOT NULL,
  `segapellido` varchar(100) DEFAULT NULL,
  `tipo_documento` varchar(100) NOT NULL,
  `num_documento` varchar(100) DEFAULT NULL,
  `lugar_nacimiento` int(11) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `lugar_residencia` int(11) DEFAULT NULL,
  `direccion_residencia` varchar(200) DEFAULT NULL,
  `telfijo_cliente_1` varchar(15) DEFAULT NULL,
  `telfijo_cliente_2` varchar(15) DEFAULT NULL,
  `telfijo_cliente_3` varchar(15) DEFAULT NULL,
  `celular_cliente_1` varchar(15) DEFAULT NULL,
  `celular_cliente_2` varchar(15) DEFAULT NULL,
  `celular_cliente_3` varchar(15) DEFAULT NULL,
  `email_cliente_1` varchar(150) DEFAULT NULL,
  `email_cliente_2` varchar(150) DEFAULT NULL,
  `email_cliente_3` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='tabla de clientes de MediBiologica';

-- Data exporting was unselected.


-- Dumping structure for table a4104228_mb.company
DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `razon_social` varchar(200) DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `nit` varchar(11) DEFAULT NULL,
  `slogan` varchar(200) DEFAULT NULL,
  `aprobacion_minsalud` varchar(200) DEFAULT NULL,
  `aprobacion_invima` varchar(200) DEFAULT NULL,
  `resolucion_alcaldia` varchar(200) DEFAULT NULL,
  `resolucion_gobernacion` varchar(200) DEFAULT NULL,
  `resolucion_distrito` varchar(200) DEFAULT NULL,
  `direccion_1` varchar(200) DEFAULT NULL,
  `direccion_2` varchar(200) DEFAULT NULL,
  `direccion_3` varchar(200) DEFAULT NULL,
  `telfijo_1` varchar(15) DEFAULT NULL,
  `telfijo_2` varchar(15) DEFAULT NULL,
  `telfijo_3` varchar(15) DEFAULT NULL,
  `celular_1` varchar(15) DEFAULT NULL,
  `celular_2` varchar(15) DEFAULT NULL,
  `celular_3` varchar(15) DEFAULT NULL,
  `representante legal` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='List of company';

-- Data exporting was unselected.


-- Dumping structure for table a4104228_mb.depto_dame
DROP TABLE IF EXISTS `depto_dame`;
CREATE TABLE IF NOT EXISTS `depto_dame` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `departamentoId` varchar(4) DEFAULT NULL,
  `departamento` varchar(100) DEFAULT NULL,
  `zonaId` varchar(100) DEFAULT NULL,
  `dept_fonetico` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabla de departamentos del DANE';

-- Data exporting was unselected.


-- Dumping structure for table a4104228_mb.farmacias
DROP TABLE IF EXISTS `farmacias`;
CREATE TABLE IF NOT EXISTS `farmacias` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name_farmacia` varchar(100) DEFAULT NULL,
  `id_warehouse` int(11) NOT NULL,
  `direccion_farmacia` varchar(200) DEFAULT NULL,
  `tel_farmacia_1` varchar(15) DEFAULT NULL,
  `tel_farmacia_2` varchar(15) DEFAULT NULL,
  `tel_farmacia_3` varchar(15) DEFAULT NULL,
  `cel_farmacia_1` varchar(15) DEFAULT NULL,
  `cel_farmacia_2` varchar(15) DEFAULT NULL,
  `cel_farmacia_3` varchar(15) DEFAULT NULL,
  `jefe_farmacia_userid` int(15) NOT NULL COMMENT 'userid key',
  `horario_farmacia` varchar(200) DEFAULT NULL,
  `img-mapa_llegada_farmacia` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK1warehouse` (`id_warehouse`),
  CONSTRAINT `FK1warehouse` FOREIGN KEY (`id_warehouse`) REFERENCES `warehouse` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='list of warehouses';

-- Data exporting was unselected.


-- Dumping structure for table a4104228_mb.group_init
DROP TABLE IF EXISTS `group_init`;
CREATE TABLE IF NOT EXISTS `group_init` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `grupo` int(10) NOT NULL,
  `rol-description` varchar(200) NOT NULL,
  `pageRedirect` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `grupo` (`grupo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='begin page to init the app for the groupid of session';

-- Data exporting was unselected.


-- Dumping structure for table a4104228_mb.main_redirection
DROP TABLE IF EXISTS `main_redirection`;
CREATE TABLE IF NOT EXISTS `main_redirection` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `grupo` int(11) DEFAULT NULL,
  `name_sitio` varchar(200) DEFAULT NULL,
  `link_sitio` varchar(200) DEFAULT NULL,
  `img_sitio` varchar(200) DEFAULT NULL,
  `page` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table a4104228_mb.menu_categories
DROP TABLE IF EXISTS `menu_categories`;
CREATE TABLE IF NOT EXISTS `menu_categories` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `CategoryId` int(10) NOT NULL,
  `CategoryName` varchar(200) DEFAULT NULL,
  `ParentCategory` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='menu dinamico con categorias\r\n';

-- Data exporting was unselected.


-- Dumping structure for table a4104228_mb.munc_dane
DROP TABLE IF EXISTS `munc_dane`;
CREATE TABLE IF NOT EXISTS `munc_dane` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `municipioCod` varchar(4) DEFAULT NULL,
  `municipio` varchar(200) DEFAULT NULL,
  `depto_id` int(11) NOT NULL,
  `depto_cod` varchar(4) DEFAULT NULL,
  `munic_fonetico` varchar(200) DEFAULT NULL,
  `dept_fonetico` varchar(200) DEFAULT NULL,
  `key_munc` varchar(200) DEFAULT NULL,
  `cod_Ciudad_DANE` varchar(200) DEFAULT NULL,
  `Munc_Depto` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK1depto` (`depto_id`),
  CONSTRAINT `FK1depto` FOREIGN KEY (`depto_id`) REFERENCES `depto_dame` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabla de municipios del DANE';

-- Data exporting was unselected.


-- Dumping structure for table a4104228_mb.productos
DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int(10) NOT NULL AUTO_INCREMENT,
  `name_producto` varchar(200) NOT NULL,
  `categoria_producto_id` int(11) NOT NULL,
  `unidad_medida_id` int(11) NOT NULL,
  `cantidad_producto` int(11) NOT NULL,
  `descripcion_producto` varchar(200) NOT NULL,
  `activo` tinyint(4) DEFAULT NULL,
  `min_stock` int(11) DEFAULT NULL,
  `max_stock` int(11) DEFAULT NULL,
  `nivel_pedido` int(11) DEFAULT NULL,
  `img_producto_1` varchar(200) DEFAULT NULL,
  `img_producto_2` varchar(200) DEFAULT NULL,
  `img_producto_3` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `FK1categproducto` (`categoria_producto_id`),
  KEY `FK2unimed` (`unidad_medida_id`),
  CONSTRAINT `FK1categproducto` FOREIGN KEY (`categoria_producto_id`) REFERENCES `categoria_productos` (`id`),
  CONSTRAINT `FK2unimed` FOREIGN KEY (`unidad_medida_id`) REFERENCES `unidadesmedida` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='listado de productos';

-- Data exporting was unselected.


-- Dumping structure for table a4104228_mb.proveedores
DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE IF NOT EXISTS `proveedores` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `razon_social` varchar(200) DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `nit` varchar(11) DEFAULT NULL,
  `slogan` varchar(200) DEFAULT NULL,
  `direccion_1` varchar(200) DEFAULT NULL,
  `direccion_2` varchar(200) DEFAULT NULL,
  `direccion_3` varchar(200) DEFAULT NULL,
  `telfijo_1` varchar(15) DEFAULT NULL,
  `telfijo_2` varchar(15) DEFAULT NULL,
  `telfijo_3` varchar(15) DEFAULT NULL,
  `celular_1` varchar(15) DEFAULT NULL,
  `celular_2` varchar(15) DEFAULT NULL,
  `celular_3` varchar(15) DEFAULT NULL,
  `representante legal` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='List of company';

-- Data exporting was unselected.


-- Dumping structure for table a4104228_mb.tipo_doc
DROP TABLE IF EXISTS `tipo_doc`;
CREATE TABLE IF NOT EXISTS `tipo_doc` (
  `id_tip_doc` int(10) NOT NULL AUTO_INCREMENT,
  `descp_tip_doc` varchar(50) DEFAULT NULL,
  `sigla_tipDoc` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tip_doc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tipos de documento para clientes y proveedores';

-- Data exporting was unselected.


-- Dumping structure for table a4104228_mb.unidadesmedida
DROP TABLE IF EXISTS `unidadesmedida`;
CREATE TABLE IF NOT EXISTS `unidadesmedida` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `descrp_unidad` varchar(200) DEFAULT NULL,
  `obsv_unidad` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='unidades de medida';

-- Data exporting was unselected.


-- Dumping structure for table a4104228_mb.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `prinombre` varchar(100) NOT NULL,
  `demasnombres` varchar(100) DEFAULT NULL,
  `priapellido` varchar(100) NOT NULL,
  `segapellido` varchar(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `rol` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `grupo` (`rol`),
  CONSTRAINT `grupo` FOREIGN KEY (`rol`) REFERENCES `group_init` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='tabla de usuarios del sistema';

-- Data exporting was unselected.


-- Dumping structure for table a4104228_mb.warehouse
DROP TABLE IF EXISTS `warehouse`;
CREATE TABLE IF NOT EXISTS `warehouse` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name_warehouse` varchar(100) DEFAULT NULL,
  `id_company` int(11) NOT NULL,
  `direccion_warehouse` varchar(200) DEFAULT NULL,
  `tel_warehouse_1` varchar(15) DEFAULT NULL,
  `tel_warehouse_2` varchar(15) DEFAULT NULL,
  `tel_warehouse_3` varchar(15) DEFAULT NULL,
  `cel_warehouse_1` varchar(15) DEFAULT NULL,
  `cel_warehouse_2` varchar(15) DEFAULT NULL,
  `cel_warehouse_3` varchar(15) DEFAULT NULL,
  `jefe_warehouse_userid` int(15) NOT NULL COMMENT 'userid key',
  `horario_warehouse` varchar(200) DEFAULT NULL,
  `img-mapa_llegada` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_company` (`id_company`),
  CONSTRAINT `FK1company` FOREIGN KEY (`id_company`) REFERENCES `company` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='list of warehouses';

-- Data exporting was unselected.
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
