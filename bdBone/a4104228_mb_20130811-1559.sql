-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.6.11-log - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             8.0.0.4396
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para a4104228_mb
CREATE DATABASE IF NOT EXISTS `a4104228_mb` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci */;
USE `a4104228_mb`;


-- Volcando estructura para tabla a4104228_mb.admin_redir
CREATE TABLE IF NOT EXISTS `admin_redir` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `grupo` int(11) DEFAULT NULL,
  `name_sitio` varchar(200) DEFAULT NULL,
  `link_sitio` varchar(200) DEFAULT NULL,
  `img_sitio` varchar(200) DEFAULT NULL,
  `page` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Volcando datos para la tabla a4104228_mb.admin_redir: ~5 rows (aproximadamente)
DELETE FROM `admin_redir`;
/*!40000 ALTER TABLE `admin_redir` DISABLE KEYS */;
INSERT INTO `admin_redir` (`id`, `grupo`, `name_sitio`, `link_sitio`, `img_sitio`, `page`) VALUES
	(7, 1, 'Productos', 'productos_mant.php', 'img/medica_admin.jpg', 'mant'),
	(8, 1, 'Clientes', 'clientes_mant.php', 'img/clientes_admin.jpg', 'mant'),
	(9, 1, 'Proveedores', 'proveedores_mant.php', 'img/provee_admin.jpg', 'mant'),
	(10, 1, 'Unidades de medida', 'unimed_mant.php', 'img/unimed-admin.jpg', 'mant'),
	(11, 1, 'Categorias de productos', 'catprod_ant.php', 'img/catgProdct_admin.jpg', 'mant');
/*!40000 ALTER TABLE `admin_redir` ENABLE KEYS */;


-- Volcando estructura para tabla a4104228_mb.categoria_productos
CREATE TABLE IF NOT EXISTS `categoria_productos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `categoria_descrip` varchar(200) DEFAULT NULL,
  `tag_categdescrip` varchar(200) DEFAULT NULL,
  `unidad_medida_id` int(11) NOT NULL,
  `observa_categdescrip` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK1unidad` (`unidad_medida_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='tabla de categorizacion de productos';

-- Volcando datos para la tabla a4104228_mb.categoria_productos: ~2 rows (aproximadamente)
DELETE FROM `categoria_productos`;
/*!40000 ALTER TABLE `categoria_productos` DISABLE KEYS */;
INSERT INTO `categoria_productos` (`id`, `categoria_descrip`, `tag_categdescrip`, `unidad_medida_id`, `observa_categdescrip`) VALUES
	(1, 'anticonceptivos', 'pildora anticonceptiva', 2, 'sdgsdfsdfsd'),
	(3, 'Gotas Simples', 'Variedad de gotas', 1, 'obsetrvacion 1');
/*!40000 ALTER TABLE `categoria_productos` ENABLE KEYS */;


-- Volcando estructura para tabla a4104228_mb.clientes
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='tabla de clientes de MediBiologica';

-- Volcando datos para la tabla a4104228_mb.clientes: ~2 rows (aproximadamente)
DELETE FROM `clientes`;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`id`, `prinombre`, `demasnombres`, `priapellido`, `segapellido`, `tipo_documento`, `num_documento`, `lugar_nacimiento`, `fecha_nacimiento`, `lugar_residencia`, `direccion_residencia`, `telfijo_cliente_1`, `telfijo_cliente_2`, `telfijo_cliente_3`, `celular_cliente_1`, `celular_cliente_2`, `celular_cliente_3`, `email_cliente_1`, `email_cliente_2`, `email_cliente_3`) VALUES
	(1, 'humberto', '-', 'Fierro', 'Prieto', '1', '79879282', 21, '0000-00-00', 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(2, 'german', 'alejandro', 'rodriguez', 'rodrriguez', '1', '79464262', 931, '0000-00-00', 837, 'calle 1 carrera 2', '16461641', '1616564', '1641646456', '3132513', '35689797', '32646464', 'lsjfsld@fahldfhkd', '8686878@lkfadkfjdk', 'skdjfdhfksd@kdjfkd.com');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;


-- Volcando estructura para tabla a4104228_mb.company
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

-- Volcando datos para la tabla a4104228_mb.company: ~0 rows (aproximadamente)
DELETE FROM `company`;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
/*!40000 ALTER TABLE `company` ENABLE KEYS */;


-- Volcando estructura para tabla a4104228_mb.depto_dame
CREATE TABLE IF NOT EXISTS `depto_dame` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `departamentoId` varchar(4) DEFAULT NULL,
  `departamento` varchar(100) DEFAULT NULL,
  `zonaId` varchar(100) DEFAULT NULL,
  `dept_fonetico` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1288 DEFAULT CHARSET=utf8 COMMENT='tabla de departamentos del DANE';

-- Volcando datos para la tabla a4104228_mb.depto_dame: ~33 rows (aproximadamente)
DELETE FROM `depto_dame`;
/*!40000 ALTER TABLE `depto_dame` DISABLE KEYS */;
INSERT INTO `depto_dame` (`id`, `departamentoId`, `departamento`, `zonaId`, `dept_fonetico`) VALUES
	(1255, '05', 'Antioquia', '2', 'Antioquia'),
	(1256, '08', 'Atlántico', '4', 'Atlantiso'),
	(1257, '11', 'Bogotá', '2', 'vojota'),
	(1258, '13', 'Bolívar', '4', 'volivar'),
	(1259, '15', 'Boyacá', '2', 'voiasa'),
	(1260, '17', 'Caldas', '2', 'saldas'),
	(1261, '18', 'Caquetá', '1', 'saqueta'),
	(1262, '19', 'Cauca', '6', 'sausa'),
	(1263, '20', 'Cesar', '4', 'sesar'),
	(1264, '23', 'Córdoba', '4', 'sordova'),
	(1265, '25', 'Cundinamarca', '2', 'sundinanarsa'),
	(1266, '27', 'Choco', '6', 'soso'),
	(1267, '41', 'Huila', '2', 'uila'),
	(1268, '44', 'La Guajira', '4', 'La juajira'),
	(1269, '47', 'Magdalena', '4', 'najdalena'),
	(1270, '50', 'Meta', '5', 'neta'),
	(1271, '52', 'Nariño', '6', 'Narino'),
	(1272, '54', 'Norte de Santander', '3', 'Norte de Santander'),
	(1273, '63', 'Quindío', '3', 'Quindio'),
	(1274, '66', 'Risaralda', '3', 'Risaralda'),
	(1275, '68', 'Santander', '3', 'Santander'),
	(1276, '70', 'Sucre', '4', 'Susre'),
	(1277, '73', 'Tolima', '3', 'Tolina'),
	(1278, '76', 'Valle del Cauca', '6', 'Val del sausa'),
	(1279, '81', 'Arauca', '5', 'Arausa'),
	(1280, '85', 'Casanare', '5', 'sasanare'),
	(1281, '86', 'Putumayo', '1', 'Putunaio'),
	(1282, '88', 'San Andrés, Providencia y Santa Catalina', '3', 'San Andres, Providensia i Santa satalina'),
	(1283, '91', 'Amazonas', '1', 'Anasonas'),
	(1284, '94', 'Guainía', '1', 'juainia'),
	(1285, '95', 'Guaviare', '1', 'juaviare'),
	(1286, '97', 'Vaupés', '1', 'Vaupes'),
	(1287, '99', 'Vichada', '5', 'Visada');
/*!40000 ALTER TABLE `depto_dame` ENABLE KEYS */;


-- Volcando estructura para tabla a4104228_mb.detail_ent_alm_general
CREATE TABLE IF NOT EXISTS `detail_ent_alm_general` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_ent_alm_general` int(10) DEFAULT NULL,
  `id_producto` int(10) DEFAULT NULL,
  `cantidad` int(10) DEFAULT NULL,
  `observacion` int(10) DEFAULT NULL,
  `fecregistro` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK1_idEntradaAlmGeneral` (`id_ent_alm_general`),
  KEY `FK2_idproducto` (`id_producto`),
  CONSTRAINT `FK1_idEntradaAlmGeneral` FOREIGN KEY (`id_ent_alm_general`) REFERENCES `ent_alm_general` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `FK2_idproducto` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Volcando datos para la tabla a4104228_mb.detail_ent_alm_general: ~1 rows (aproximadamente)
DELETE FROM `detail_ent_alm_general`;
/*!40000 ALTER TABLE `detail_ent_alm_general` DISABLE KEYS */;
INSERT INTO `detail_ent_alm_general` (`id`, `id_ent_alm_general`, `id_producto`, `cantidad`, `observacion`, `fecregistro`) VALUES
	(1, NULL, NULL, 10, 1, NULL);
/*!40000 ALTER TABLE `detail_ent_alm_general` ENABLE KEYS */;


-- Volcando estructura para tabla a4104228_mb.ent_alm_general
CREATE TABLE IF NOT EXISTS `ent_alm_general` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_proceso` datetime DEFAULT NULL,
  `num_factura` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `observaciones` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `activa` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fechareg` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Volcando datos para la tabla a4104228_mb.ent_alm_general: ~2 rows (aproximadamente)
DELETE FROM `ent_alm_general`;
/*!40000 ALTER TABLE `ent_alm_general` DISABLE KEYS */;
INSERT INTO `ent_alm_general` (`id`, `fecha_proceso`, `num_factura`, `observaciones`, `activa`, `fechareg`) VALUES
	(1, NULL, '8956', 'primera entrada almacen', NULL, NULL),
	(2, NULL, '967987979', 'ljljlj', 'si', NULL);
/*!40000 ALTER TABLE `ent_alm_general` ENABLE KEYS */;


-- Volcando estructura para tabla a4104228_mb.farmacias
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
  KEY `FK1warehouse` (`id_warehouse`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='list of warehouses';

-- Volcando datos para la tabla a4104228_mb.farmacias: ~0 rows (aproximadamente)
DELETE FROM `farmacias`;
/*!40000 ALTER TABLE `farmacias` DISABLE KEYS */;
/*!40000 ALTER TABLE `farmacias` ENABLE KEYS */;


-- Volcando estructura para tabla a4104228_mb.group_init
CREATE TABLE IF NOT EXISTS `group_init` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `grupo` int(10) NOT NULL,
  `rol-description` varchar(200) NOT NULL,
  `pageRedirect` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `grupo` (`grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='begin page to init the app for the groupid of session';

-- Volcando datos para la tabla a4104228_mb.group_init: ~3 rows (aproximadamente)
DELETE FROM `group_init`;
/*!40000 ALTER TABLE `group_init` DISABLE KEYS */;
INSERT INTO `group_init` (`id`, `grupo`, `rol-description`, `pageRedirect`) VALUES
	(1, 1, 'administrator', 'administration.php'),
	(2, 2, 'main_warehouse', 'almacencentral.php'),
	(3, 3, 'farmacy', 'farmacia.php');
/*!40000 ALTER TABLE `group_init` ENABLE KEYS */;


-- Volcando estructura para tabla a4104228_mb.main_redirection
CREATE TABLE IF NOT EXISTS `main_redirection` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `grupo` int(11) DEFAULT NULL,
  `name_sitio` varchar(200) DEFAULT NULL,
  `link_sitio` varchar(200) DEFAULT NULL,
  `img_sitio` varchar(200) DEFAULT NULL,
  `page` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla a4104228_mb.main_redirection: ~5 rows (aproximadamente)
DELETE FROM `main_redirection`;
/*!40000 ALTER TABLE `main_redirection` DISABLE KEYS */;
INSERT INTO `main_redirection` (`id`, `grupo`, `name_sitio`, `link_sitio`, `img_sitio`, `page`) VALUES
	(1, 1, 'administracion', 'admin.php', 'img/main_admin.jpg', NULL),
	(2, 1, 'Almacen General', 'Ent_almGeneral.php', 'img/almGeneral.jpg', NULL),
	(3, 2, 'Almacen General', 'Ent_almGeneral.php', 'img/almGeneral.jpg', NULL),
	(4, 3, 'Farmacia', 'farmacia.php', 'img/farmacia.gif', NULL),
	(5, 1, 'Farmacia', 'farmacia.php', 'img/farmacia.gif', NULL);
/*!40000 ALTER TABLE `main_redirection` ENABLE KEYS */;


-- Volcando estructura para tabla a4104228_mb.menu_categories
CREATE TABLE IF NOT EXISTS `menu_categories` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `CategoryId` int(10) NOT NULL,
  `CategoryName` varchar(200) DEFAULT NULL,
  `ParentCategory` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='menu dinamico con categorias\r\n';

-- Volcando datos para la tabla a4104228_mb.menu_categories: ~0 rows (aproximadamente)
DELETE FROM `menu_categories`;
/*!40000 ALTER TABLE `menu_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `menu_categories` ENABLE KEYS */;


-- Volcando estructura para tabla a4104228_mb.munc_dane
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
  KEY `FK1depto` (`depto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabla de municipios del DANE';

-- Volcando datos para la tabla a4104228_mb.munc_dane: ~0 rows (aproximadamente)
DELETE FROM `munc_dane`;
/*!40000 ALTER TABLE `munc_dane` DISABLE KEYS */;
/*!40000 ALTER TABLE `munc_dane` ENABLE KEYS */;


-- Volcando estructura para tabla a4104228_mb.productos
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
  CONSTRAINT `FK1_categoria_producto` FOREIGN KEY (`categoria_producto_id`) REFERENCES `categoria_productos` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `FK2_unidad_medida` FOREIGN KEY (`unidad_medida_id`) REFERENCES `unidadesmedida` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='listado de productos';

-- Volcando datos para la tabla a4104228_mb.productos: ~0 rows (aproximadamente)
DELETE FROM `productos`;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;


-- Volcando estructura para tabla a4104228_mb.proveedores
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

-- Volcando datos para la tabla a4104228_mb.proveedores: ~0 rows (aproximadamente)
DELETE FROM `proveedores`;
/*!40000 ALTER TABLE `proveedores` DISABLE KEYS */;
/*!40000 ALTER TABLE `proveedores` ENABLE KEYS */;


-- Volcando estructura para tabla a4104228_mb.tipo_doc
CREATE TABLE IF NOT EXISTS `tipo_doc` (
  `id_tip_doc` int(10) NOT NULL AUTO_INCREMENT,
  `descp_tip_doc` varchar(50) DEFAULT NULL,
  `sigla_tipDoc` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tip_doc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tipos de documento para clientes y proveedores';

-- Volcando datos para la tabla a4104228_mb.tipo_doc: ~0 rows (aproximadamente)
DELETE FROM `tipo_doc`;
/*!40000 ALTER TABLE `tipo_doc` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_doc` ENABLE KEYS */;


-- Volcando estructura para tabla a4104228_mb.unidadesmedida
CREATE TABLE IF NOT EXISTS `unidadesmedida` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `descrp_unidad` varchar(200) DEFAULT NULL,
  `obsv_unidad` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='unidades de medida';

-- Volcando datos para la tabla a4104228_mb.unidadesmedida: ~0 rows (aproximadamente)
DELETE FROM `unidadesmedida`;
/*!40000 ALTER TABLE `unidadesmedida` DISABLE KEYS */;
/*!40000 ALTER TABLE `unidadesmedida` ENABLE KEYS */;


-- Volcando estructura para tabla a4104228_mb.users
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
  KEY `grupo` (`rol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='tabla de usuarios del sistema';

-- Volcando datos para la tabla a4104228_mb.users: ~2 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `prinombre`, `demasnombres`, `priapellido`, `segapellido`, `username`, `password`, `cargo`, `rol`) VALUES
	(1, 'humberto', NULL, 'fierro', 'prieto', 'hfierro', '79879', 'admin', 1),
	(2, 'farma', 'cia', 'medi', 'biologica', 'farmacia', 'farma', 'Jefe de farmacia', 2),
	(3, 'almacen', 'general', 'medi', 'biologica', 'almacen', 'alma', 'jefe almacen general', 3);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Volcando estructura para tabla a4104228_mb.warehouse
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
  KEY `id_company` (`id_company`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='list of warehouses';

-- Volcando datos para la tabla a4104228_mb.warehouse: ~0 rows (aproximadamente)
DELETE FROM `warehouse`;
/*!40000 ALTER TABLE `warehouse` DISABLE KEYS */;
/*!40000 ALTER TABLE `warehouse` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
