-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.6.12-log - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             8.2.0.4675
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla u392883857_inven.admin_redir
DROP TABLE IF EXISTS `admin_redir`;
CREATE TABLE IF NOT EXISTS `admin_redir` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `grupo` int(11) DEFAULT NULL,
  `name_sitio` varchar(200) DEFAULT NULL,
  `link_sitio` varchar(200) DEFAULT NULL,
  `img_sitio` varchar(200) DEFAULT NULL,
  `page` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Volcando datos para la tabla u392883857_inven.admin_redir: ~5 rows (aproximadamente)
DELETE FROM `admin_redir`;
/*!40000 ALTER TABLE `admin_redir` DISABLE KEYS */;
INSERT INTO `admin_redir` (`id`, `grupo`, `name_sitio`, `link_sitio`, `img_sitio`, `page`) VALUES
	(7, 1, 'Productos', 'productos_mant.php', 'img/medica_admin.jpg', 'mant'),
	(8, 1, 'Clientes', 'clientes_mant.php', 'img/clientes_admin.jpg', 'mant'),
	(9, 1, 'Proveedores', 'provee_mant.php', 'img/provee_admin.jpg', 'mant'),
	(10, 1, 'Unidades de medida', 'unimed_mant.php', 'img/unimed-admin.jpg', 'mant'),
	(11, 1, 'Categorias de productos', 'catprod_mant.php', 'img/catgProdct_admin.jpg', 'mant');
/*!40000 ALTER TABLE `admin_redir` ENABLE KEYS */;


-- Volcando estructura para tabla u392883857_inven.categoria_productos
DROP TABLE IF EXISTS `categoria_productos`;
CREATE TABLE IF NOT EXISTS `categoria_productos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `categoria_descrip` varchar(200) DEFAULT NULL,
  `tag_categdescrip` varchar(200) DEFAULT NULL,
  `unidad_medida_id` int(11) NOT NULL,
  `observa_categdescrip` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK1unidad` (`unidad_medida_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='tabla de categorizacion de productos';

-- Volcando datos para la tabla u392883857_inven.categoria_productos: ~2 rows (aproximadamente)
DELETE FROM `categoria_productos`;
/*!40000 ALTER TABLE `categoria_productos` DISABLE KEYS */;
INSERT INTO `categoria_productos` (`id`, `categoria_descrip`, `tag_categdescrip`, `unidad_medida_id`, `observa_categdescrip`) VALUES
	(1, 'anticonceptivos', 'pildora anticonceptiva', 2, 'sdgsdfsdfsd'),
	(3, 'Gotas Simples', 'Variedad de gotas', 1, 'obsetrvacion 1');
/*!40000 ALTER TABLE `categoria_productos` ENABLE KEYS */;


-- Volcando estructura para tabla u392883857_inven.clientes
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `prinombre` varchar(100) NOT NULL,
  `demasnombres` varchar(100) DEFAULT NULL,
  `priapellido` varchar(100) NOT NULL,
  `segapellido` varchar(100) DEFAULT NULL,
  `tipo_documento` int(11) DEFAULT NULL,
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
  PRIMARY KEY (`id`),
  KEY `FK1_tipDoc` (`tipo_documento`),
  KEY `FK2_lugarNacimiento` (`lugar_nacimiento`),
  KEY `FK3_lugarResidencia` (`lugar_residencia`),
  CONSTRAINT `FK1_tipDoc` FOREIGN KEY (`tipo_documento`) REFERENCES `tipo_doc` (`id_tip_doc`) ON UPDATE CASCADE,
  CONSTRAINT `FK2_lugarNacimiento` FOREIGN KEY (`lugar_nacimiento`) REFERENCES `munc_dane` (`Id`) ON UPDATE CASCADE,
  CONSTRAINT `FK3_lugarResidencia` FOREIGN KEY (`lugar_residencia`) REFERENCES `munc_dane` (`Id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='tabla de clientes de MediBiologica';

-- Volcando datos para la tabla u392883857_inven.clientes: ~2 rows (aproximadamente)
DELETE FROM `clientes`;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`id`, `prinombre`, `demasnombres`, `priapellido`, `segapellido`, `tipo_documento`, `num_documento`, `lugar_nacimiento`, `fecha_nacimiento`, `lugar_residencia`, `direccion_residencia`, `telfijo_cliente_1`, `telfijo_cliente_2`, `telfijo_cliente_3`, `celular_cliente_1`, `celular_cliente_2`, `celular_cliente_3`, `email_cliente_1`, `email_cliente_2`, `email_cliente_3`) VALUES
	(3, 'ljlj', 'jhgjgj', 'ouoioioi', 'etdtdtd', 1, '3231656646', 1, '0000-00-00', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(4, 'prinombre1', 'segnombre2', 'priapellido3', 'segapellido4', 1, '7899526162', 1, '0000-00-00', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;


-- Volcando estructura para tabla u392883857_inven.company
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

-- Volcando datos para la tabla u392883857_inven.company: ~0 rows (aproximadamente)
DELETE FROM `company`;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
/*!40000 ALTER TABLE `company` ENABLE KEYS */;


-- Volcando estructura para tabla u392883857_inven.depto_dame
DROP TABLE IF EXISTS `depto_dame`;
CREATE TABLE IF NOT EXISTS `depto_dame` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `departamentoId` varchar(4) DEFAULT NULL,
  `departamento` varchar(100) DEFAULT NULL,
  `zonaId` varchar(100) DEFAULT NULL,
  `dept_fonetico` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1288 DEFAULT CHARSET=utf8 COMMENT='tabla de departamentos del DANE';

-- Volcando datos para la tabla u392883857_inven.depto_dame: ~33 rows (aproximadamente)
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


-- Volcando estructura para tabla u392883857_inven.detail_ent_alm_general
DROP TABLE IF EXISTS `detail_ent_alm_general`;
CREATE TABLE IF NOT EXISTS `detail_ent_alm_general` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_ent_alm_general` int(10) DEFAULT NULL,
  `id_producto` int(10) DEFAULT NULL,
  `cantidad` int(10) DEFAULT NULL,
  `observacion` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fecregistro` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK1_idEntradaAlmGeneral` (`id_ent_alm_general`),
  KEY `FK2_idproducto` (`id_producto`),
  CONSTRAINT `FK1_idEntradaAlmGeneral` FOREIGN KEY (`id_ent_alm_general`) REFERENCES `ent_alm_general` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `FK2_idproducto` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Volcando datos para la tabla u392883857_inven.detail_ent_alm_general: ~5 rows (aproximadamente)
DELETE FROM `detail_ent_alm_general`;
/*!40000 ALTER TABLE `detail_ent_alm_general` DISABLE KEYS */;
INSERT INTO `detail_ent_alm_general` (`id`, `id_ent_alm_general`, `id_producto`, `cantidad`, `observacion`, `fecregistro`) VALUES
	(2, 1, 2, 10, NULL, NULL),
	(3, NULL, 1, 150, NULL, NULL),
	(4, NULL, 3, 200, NULL, NULL),
	(5, NULL, 1, 10, NULL, NULL),
	(6, NULL, 2, 5, NULL, NULL);
/*!40000 ALTER TABLE `detail_ent_alm_general` ENABLE KEYS */;


-- Volcando estructura para tabla u392883857_inven.ent_alm_general
DROP TABLE IF EXISTS `ent_alm_general`;
CREATE TABLE IF NOT EXISTS `ent_alm_general` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_proceso` date DEFAULT NULL,
  `Orden_compra` int(11) DEFAULT NULL,
  `observaciones` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `activa` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fechareg` timestamp NULL DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK1_OrdenCompra` (`Orden_compra`),
  CONSTRAINT `FK1_OrdenCompra` FOREIGN KEY (`Orden_compra`) REFERENCES `orden_compra` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Volcando datos para la tabla u392883857_inven.ent_alm_general: ~6 rows (aproximadamente)
DELETE FROM `ent_alm_general`;
/*!40000 ALTER TABLE `ent_alm_general` DISABLE KEYS */;
INSERT INTO `ent_alm_general` (`id`, `fecha_proceso`, `Orden_compra`, `observaciones`, `activa`, `fechareg`, `user_id`) VALUES
	(1, NULL, NULL, 'primera entrada almacen', 'Si', NULL, NULL),
	(2, '2014-01-25', NULL, 'ljljlj', 'si', NULL, 999),
	(3, '2014-01-03', 1, 'farmacos s.a. pedido 345', 'Si', NULL, NULL),
	(4, '0000-00-00', NULL, 'gsdfgsfdgsfd', NULL, NULL, NULL),
	(5, '0000-00-00', NULL, 'jjjjjjjjjjjjjjjj', NULL, NULL, NULL),
	(6, '2014-03-11', 1, NULL, 'Si', NULL, NULL);
/*!40000 ALTER TABLE `ent_alm_general` ENABLE KEYS */;


-- Volcando estructura para tabla u392883857_inven.farmacias
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
  KEY `FK1warehouse` (`id_warehouse`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='list of warehouses';

-- Volcando datos para la tabla u392883857_inven.farmacias: ~0 rows (aproximadamente)
DELETE FROM `farmacias`;
/*!40000 ALTER TABLE `farmacias` DISABLE KEYS */;
/*!40000 ALTER TABLE `farmacias` ENABLE KEYS */;


-- Volcando estructura para tabla u392883857_inven.group_init
DROP TABLE IF EXISTS `group_init`;
CREATE TABLE IF NOT EXISTS `group_init` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `grupo` int(10) NOT NULL,
  `rol-description` varchar(200) NOT NULL,
  `pageRedirect` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `grupo` (`grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='begin page to init the app for the groupid of session';

-- Volcando datos para la tabla u392883857_inven.group_init: ~3 rows (aproximadamente)
DELETE FROM `group_init`;
/*!40000 ALTER TABLE `group_init` DISABLE KEYS */;
INSERT INTO `group_init` (`id`, `grupo`, `rol-description`, `pageRedirect`) VALUES
	(1, 1, 'administrator', 'administration.php'),
	(2, 2, 'main_warehouse', 'almacencentral.php'),
	(3, 3, 'farmacy', 'farmacia.php');
/*!40000 ALTER TABLE `group_init` ENABLE KEYS */;


-- Volcando estructura para tabla u392883857_inven.main_redirection
DROP TABLE IF EXISTS `main_redirection`;
CREATE TABLE IF NOT EXISTS `main_redirection` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `grupo` int(11) DEFAULT NULL,
  `name_sitio` varchar(200) DEFAULT NULL,
  `link_sitio` varchar(200) DEFAULT NULL,
  `img_sitio` varchar(200) DEFAULT NULL,
  `page` varchar(200) DEFAULT NULL,
  `rol` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla u392883857_inven.main_redirection: ~9 rows (aproximadamente)
DELETE FROM `main_redirection`;
/*!40000 ALTER TABLE `main_redirection` DISABLE KEYS */;
INSERT INTO `main_redirection` (`id`, `grupo`, `name_sitio`, `link_sitio`, `img_sitio`, `page`, `rol`) VALUES
	(1, 1, 'administracion', 'admin.php', 'img/main_admin.jpg', 'main', NULL),
	(2, 1, 'Almacen General', 'almacen_main.php', 'img/almGeneral.jpg', 'main', NULL),
	(3, 3, 'Almacen General', 'almacen_main.php', 'img/almGeneral.jpg', 'main', NULL),
	(4, 2, 'Farmacia', 'farmacia.php', 'img/farmacia.gif', 'main', NULL),
	(5, 1, 'Farmacia', 'farmacia.php', 'img/farmacia.gif', 'main', NULL),
	(6, 3, 'Entrada de Almacen', 'ent_alm_general.php', 'img/entrada_alm.png', 'almacen_main', NULL),
	(7, 3, 'Salida de almacen', 'almacen_main.php', 'img/salida_alm.png', 'almacen_main', NULL),
	(8, 2, 'Entrada de Farmacia', 'Farmacia_main.php', '', 'farmacia_main', NULL),
	(9, 2, 'Salida de Farmacia', 'Farmacia_main.php', NULL, 'farmacia_main', NULL);
/*!40000 ALTER TABLE `main_redirection` ENABLE KEYS */;


-- Volcando estructura para tabla u392883857_inven.menu_categories
DROP TABLE IF EXISTS `menu_categories`;
CREATE TABLE IF NOT EXISTS `menu_categories` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `CategoryId` int(10) NOT NULL,
  `CategoryName` varchar(200) DEFAULT NULL,
  `ParentCategory` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='menu dinamico con categorias\r\n';

-- Volcando datos para la tabla u392883857_inven.menu_categories: ~0 rows (aproximadamente)
DELETE FROM `menu_categories`;
/*!40000 ALTER TABLE `menu_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `menu_categories` ENABLE KEYS */;


-- Volcando estructura para tabla u392883857_inven.munc_dane
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
  CONSTRAINT `FK1_depto` FOREIGN KEY (`depto_id`) REFERENCES `depto_dame` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='tabla de municipios del DANE';

-- Volcando datos para la tabla u392883857_inven.munc_dane: ~1 rows (aproximadamente)
DELETE FROM `munc_dane`;
/*!40000 ALTER TABLE `munc_dane` DISABLE KEYS */;
INSERT INTO `munc_dane` (`Id`, `municipioCod`, `municipio`, `depto_id`, `depto_cod`, `munic_fonetico`, `dept_fonetico`, `key_munc`, `cod_Ciudad_DANE`, `Munc_Depto`) VALUES
	(1, '01', 'BOGOTA', 1257, NULL, NULL, NULL, NULL, '01001', 'Bogota-Bogota');
/*!40000 ALTER TABLE `munc_dane` ENABLE KEYS */;


-- Volcando estructura para tabla u392883857_inven.productos
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
  CONSTRAINT `FK1_categoria_producto` FOREIGN KEY (`categoria_producto_id`) REFERENCES `categoria_productos` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `FK2_unidad_medida` FOREIGN KEY (`unidad_medida_id`) REFERENCES `unidadesmedida` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='listado de productos';

-- Volcando datos para la tabla u392883857_inven.productos: ~3 rows (aproximadamente)
DELETE FROM `productos`;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`id_producto`, `name_producto`, `categoria_producto_id`, `unidad_medida_id`, `cantidad_producto`, `descripcion_producto`, `activo`, `min_stock`, `max_stock`, `nivel_pedido`, `img_producto_1`, `img_producto_2`, `img_producto_3`) VALUES
	(1, 'Argentum', 3, 1, 10, 'Argentum', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(2, 'Arnica', 3, 1, 10, 'Gotas simples - Arnica', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(3, 'APIS', 3, 1, 10, 'Apis Gotas Simples', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;


-- Volcando estructura para tabla u392883857_inven.proveedores
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='List of company';

-- Volcando datos para la tabla u392883857_inven.proveedores: ~4 rows (aproximadamente)
DELETE FROM `proveedores`;
/*!40000 ALTER TABLE `proveedores` DISABLE KEYS */;
INSERT INTO `proveedores` (`id`, `razon_social`, `nombre`, `nit`, `slogan`, `direccion_1`, `direccion_2`, `direccion_3`, `telfijo_1`, `telfijo_2`, `telfijo_3`, `celular_1`, `celular_2`, `celular_3`, `representante legal`) VALUES
	(1, 'Beto ', 'hujmbertoa', '54675645656', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(2, 'vbcvbxcvxbcvx', '4563453453', 'ghzfgzzfbzf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(3, 'aklfjaldfaladjadsfl', 'afalfjadkfalj', '979797979', 'ak', 'djlajfadksfjal', 'adfjald', 'ioìpip', '0989797', '979790', '08098098', '097979797', '9798970980', '98907089809', NULL),
	(4, 'dfgsfgsfg', 'jñljklhlkljklj', '89786966978', 'khjlhjkljlghioh', 'hkhklhkl', 'jkhk', 'hkjlkh', '08080', '7989870\'', '64646', '3542435435', '13132313', '090989809', NULL);
/*!40000 ALTER TABLE `proveedores` ENABLE KEYS */;


-- Volcando estructura para tabla u392883857_inven.tipo_doc
DROP TABLE IF EXISTS `tipo_doc`;
CREATE TABLE IF NOT EXISTS `tipo_doc` (
  `id_tip_doc` int(10) NOT NULL AUTO_INCREMENT,
  `descp_tip_doc` varchar(50) DEFAULT NULL,
  `sigla_tipDoc` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tip_doc`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='tipos de documento para clientes y proveedores';

-- Volcando datos para la tabla u392883857_inven.tipo_doc: ~4 rows (aproximadamente)
DELETE FROM `tipo_doc`;
/*!40000 ALTER TABLE `tipo_doc` DISABLE KEYS */;
INSERT INTO `tipo_doc` (`id_tip_doc`, `descp_tip_doc`, `sigla_tipDoc`) VALUES
	(1, 'Cedula de ciudadania', 'CC'),
	(2, 'Cedula de extranjeria', 'CE'),
	(3, 'Tarjeta de identidad', 'TI'),
	(4, 'Registro unico tributario', 'RUT');
/*!40000 ALTER TABLE `tipo_doc` ENABLE KEYS */;


-- Volcando estructura para tabla u392883857_inven.unidadesmedida
DROP TABLE IF EXISTS `unidadesmedida`;
CREATE TABLE IF NOT EXISTS `unidadesmedida` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `descrp_unidad` varchar(200) DEFAULT NULL,
  `obsv_unidad` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='unidades de medida';

-- Volcando datos para la tabla u392883857_inven.unidadesmedida: ~3 rows (aproximadamente)
DELETE FROM `unidadesmedida`;
/*!40000 ALTER TABLE `unidadesmedida` DISABLE KEYS */;
INSERT INTO `unidadesmedida` (`id`, `descrp_unidad`, `obsv_unidad`) VALUES
	(1, 'C.C.', 'Centimetros cubicos'),
	(2, NULL, NULL),
	(3, 'metros cuadrados', 'M2');
/*!40000 ALTER TABLE `unidadesmedida` ENABLE KEYS */;


-- Volcando estructura para tabla u392883857_inven.users
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
  KEY `grupo` (`rol`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='tabla de usuarios del sistema';

-- Volcando datos para la tabla u392883857_inven.users: ~4 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `prinombre`, `demasnombres`, `priapellido`, `segapellido`, `username`, `password`, `cargo`, `rol`) VALUES
	(1, 'humberto', NULL, 'fierro', 'prieto', 'hfierro', '79879', 'admin', 1),
	(2, 'farma', 'cia', 'medi', 'biologica', 'farmacia', 'farma', 'Jefe de farmacia', 2),
	(3, 'almacen', 'general', 'medi', 'biologica', 'almacen', 'alma', 'jefe almacen general', 3),
	(4, 'Edgar', 'Humberto ', 'Lopez', NULL, 'Elopez', '12345', 'Gerente general', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Volcando estructura para tabla u392883857_inven.warehouse
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
  KEY `id_company` (`id_company`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='list of warehouses';

-- Volcando datos para la tabla u392883857_inven.warehouse: ~0 rows (aproximadamente)
DELETE FROM `warehouse`;
/*!40000 ALTER TABLE `warehouse` DISABLE KEYS */;
/*!40000 ALTER TABLE `warehouse` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
