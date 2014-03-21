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

-- Volcando estructura de base de datos para u392883857_inven
CREATE DATABASE IF NOT EXISTS `u392883857_inven` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci */;
USE `u392883857_inven`;


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
  KEY `FK1unidad` (`unidad_medida_id`),
  CONSTRAINT `FK_unimed` FOREIGN KEY (`unidad_medida_id`) REFERENCES `unidadesmedida` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='tabla de categorizacion de productos';

-- Volcando datos para la tabla u392883857_inven.categoria_productos: ~7 rows (aproximadamente)
DELETE FROM `categoria_productos`;
/*!40000 ALTER TABLE `categoria_productos` DISABLE KEYS */;
INSERT INTO `categoria_productos` (`id`, `categoria_descrip`, `tag_categdescrip`, `unidad_medida_id`, `observa_categdescrip`) VALUES
	(4, 'Gotas simples', NULL, 1, NULL),
	(5, 'Ampollas', NULL, 1, NULL),
	(6, 'Gotas compuestas', NULL, 1, NULL),
	(7, 'Tabletas', NULL, 1, NULL),
	(8, 'Jarabes ', NULL, 1, NULL),
	(9, 'Globulos', NULL, 1, NULL),
	(10, 'Otros', NULL, 1, NULL);
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

-- Volcando datos para la tabla u392883857_inven.detail_ent_alm_general: ~0 rows (aproximadamente)
DELETE FROM `detail_ent_alm_general`;
/*!40000 ALTER TABLE `detail_ent_alm_general` DISABLE KEYS */;
/*!40000 ALTER TABLE `detail_ent_alm_general` ENABLE KEYS */;


-- Volcando estructura para tabla u392883857_inven.detail_sal_alm_general
DROP TABLE IF EXISTS `detail_sal_alm_general`;
CREATE TABLE IF NOT EXISTS `detail_sal_alm_general` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_sal_alm_general` int(10) DEFAULT NULL,
  `id_producto` int(10) DEFAULT NULL,
  `cantidad` int(10) DEFAULT NULL,
  `observacion` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fecregistro` timestamp NULL DEFAULT NULL,
  `recibido_farmacia` int(10) DEFAULT NULL,
  `Id_user_recibe` int(10) DEFAULT NULL,
  `fecha_recibido` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK2_idproducto` (`id_producto`),
  KEY `FK_salidaAlmacen` (`id_sal_alm_general`),
  CONSTRAINT `FK_productos` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON UPDATE CASCADE,
  CONSTRAINT `FK_salidaAlmacen` FOREIGN KEY (`id_sal_alm_general`) REFERENCES `sal_alm_general` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci ROW_FORMAT=COMPACT;

-- Volcando datos para la tabla u392883857_inven.detail_sal_alm_general: ~0 rows (aproximadamente)
DELETE FROM `detail_sal_alm_general`;
/*!40000 ALTER TABLE `detail_sal_alm_general` DISABLE KEYS */;
/*!40000 ALTER TABLE `detail_sal_alm_general` ENABLE KEYS */;


-- Volcando estructura para tabla u392883857_inven.detail_sal_farmacia
DROP TABLE IF EXISTS `detail_sal_farmacia`;
CREATE TABLE IF NOT EXISTS `detail_sal_farmacia` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_sal_farmacia` int(10) DEFAULT NULL,
  `id_producto` int(10) DEFAULT NULL,
  `cantidad` int(10) DEFAULT NULL,
  `observacion` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fecregistro` timestamp NULL DEFAULT NULL,
  `recibido_farmacia` int(10) DEFAULT NULL,
  `Id_user_recibe` int(10) DEFAULT NULL,
  `fecha_recibido` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK1_idEntradaAlmGeneral` (`id_sal_farmacia`),
  KEY `FK2_idproducto` (`id_producto`),
  CONSTRAINT `FK_sal_farmacia` FOREIGN KEY (`id_sal_farmacia`) REFERENCES `sal_farmacia` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `detail_sal_farmacia_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci ROW_FORMAT=COMPACT;

-- Volcando datos para la tabla u392883857_inven.detail_sal_farmacia: ~0 rows (aproximadamente)
DELETE FROM `detail_sal_farmacia`;
/*!40000 ALTER TABLE `detail_sal_farmacia` DISABLE KEYS */;
/*!40000 ALTER TABLE `detail_sal_farmacia` ENABLE KEYS */;


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


-- Volcando estructura para tabla u392883857_inven.orden_compra
DROP TABLE IF EXISTS `orden_compra`;
CREATE TABLE IF NOT EXISTS `orden_compra` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Id_Proveedor` int(10) NOT NULL DEFAULT '0',
  `fecha_pedido` date NOT NULL DEFAULT '0000-00-00',
  `Documento_Contable` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `fecha_entrega` date NOT NULL DEFAULT '0000-00-00',
  `fecha_recepción` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `user_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `fecha_modificacion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`),
  KEY `FK1_idProv ee` (`Id_Proveedor`),
  CONSTRAINT `FK1_idProv ee` FOREIGN KEY (`Id_Proveedor`) REFERENCES `proveedores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='Objeto que almacena las facturas de los pedidos realizados. Desde aqui se puede filtrar el estado y fecha de entrega.';

-- Volcando datos para la tabla u392883857_inven.orden_compra: ~1 rows (aproximadamente)
DELETE FROM `orden_compra`;
/*!40000 ALTER TABLE `orden_compra` DISABLE KEYS */;
INSERT INTO `orden_compra` (`Id`, `Id_Proveedor`, `fecha_pedido`, `Documento_Contable`, `fecha_entrega`, `fecha_recepción`, `user_id`, `fecha_modificacion`) VALUES
	(1, 1, '2014-02-28', 'factura 9876868979', '0000-00-00', '0', '0', '0');
/*!40000 ALTER TABLE `orden_compra` ENABLE KEYS */;


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
) ENGINE=InnoDB AUTO_INCREMENT=177 DEFAULT CHARSET=utf8 COMMENT='listado de productos';

-- Volcando datos para la tabla u392883857_inven.productos: ~173 rows (aproximadamente)
DELETE FROM `productos`;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`id_producto`, `name_producto`, `categoria_producto_id`, `unidad_medida_id`, `cantidad_producto`, `descripcion_producto`, `activo`, `min_stock`, `max_stock`, `nivel_pedido`, `img_producto_1`, `img_producto_2`, `img_producto_3`) VALUES
	(4, 'hola', 5, 1, 0, 'hola', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(5, 'Argentun', 4, 1, 0, 'Argentun', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(6, 'Arnica', 4, 1, 0, 'Arnica', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(7, 'Apis', 4, 1, 0, 'Apis', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(8, 'Baryta', 4, 1, 0, 'Baryta', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(9, 'Belladona', 4, 1, 0, 'Belladona', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(10, 'Berberis', 4, 1, 0, 'Berberis', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(11, 'Bryonia', 4, 1, 0, 'Bryonia', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(12, 'Carb Veg', 4, 1, 0, 'Carb Veg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(13, 'Cantharis', 4, 1, 0, 'Cantharis', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(14, 'Cina', 4, 1, 0, 'Cina', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(15, 'Chamomilla', 4, 1, 0, 'Chamomilla', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(16, 'Cholesterine', 4, 1, 0, 'Cholesterine', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(17, 'Damiana', 4, 1, 0, 'Damiana', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(18, 'Drosera', 4, 1, 0, 'Drosera', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(19, 'Dulcamara', 4, 1, 0, 'Dulcamara', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(20, 'Euphorbium', 4, 1, 0, 'Euphorbium', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(21, 'Echinacea', 4, 1, 0, 'Echinacea', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(22, 'Fucus', 4, 1, 0, 'Fucus', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(23, 'Gallium', 4, 1, 0, 'Gallium', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(24, 'Ginseg', 4, 1, 0, 'Ginseg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(25, 'Graphites', 4, 1, 0, 'Graphites', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(26, 'Hamamelis', 4, 1, 0, 'Hamamelis', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(27, 'Hepar', 4, 1, 0, 'Hepar', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(28, 'Ignatia', 4, 1, 0, 'Ignatia', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(29, 'Ipeca', 4, 1, 0, 'Ipeca', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(30, 'Lachesis', 4, 1, 0, 'Lachesis', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(31, 'Lycopodium', 4, 1, 0, 'Lycopodium', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(32, 'Natrum', 4, 1, 0, 'Natrum', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(33, 'Nux Vomica', 4, 1, 0, 'Nux Vomica', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(34, 'Phytolaca', 4, 1, 0, 'Phytolaca', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(35, 'Phosphorus', 4, 1, 0, 'Phosphorus', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(36, 'Pulsatilla', 4, 1, 0, 'Pulsatilla', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(37, 'AZ GOLD .CJA', 5, 1, 0, 'AZ GOLD .CJA', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(38, 'AZ GOLD UNI', 5, 1, 0, 'AZ GOLD UNI', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(39, 'Azufre ', 5, 1, 0, 'Azufre ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(40, 'Bionutricell', 5, 1, 0, 'Bionutricell', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(41, 'Cobalto ', 5, 1, 0, 'Cobalto ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(42, 'Cob-Oro-Pta ', 5, 1, 0, 'Cob-Oro-Pta ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(43, 'Cobre ', 5, 1, 0, 'Cobre ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(44, 'Cromo ', 5, 1, 0, 'Cromo ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(45, 'Excell x 16', 5, 1, 0, 'Excell x 16', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(46, 'Lithio ', 5, 1, 0, 'Lithio ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(47, 'Magnesio ', 5, 1, 0, 'Magnesio ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(48, 'Manganeso ', 5, 1, 0, 'Manganeso ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(49, 'Niquel ', 5, 1, 0, 'Niquel ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(50, 'Niquel Cob ', 5, 1, 0, 'Niquel Cob ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(51, 'Oligoelementos', 5, 1, 0, 'Oligoelementos', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(52, 'Selenuim ', 5, 1, 0, 'Selenuim ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(53, 'Yodo ', 5, 1, 0, 'Yodo ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(54, 'Zinc Cobre ', 5, 1, 0, 'Zinc Cobre ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(55, 'Zinc-Cobalto ', 5, 1, 0, 'Zinc-Cobalto ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(56, 'Zinc ', 5, 1, 0, 'Zinc ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(57, 'Drain3', 6, 1, 0, 'Drain3', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(58, 'Herball care C', 6, 1, 0, 'Herball care C', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(59, 'Herball care D', 6, 1, 0, 'Herball care D', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(60, 'Herball care G', 6, 1, 0, 'Herball care G', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(61, 'Herball care H', 6, 1, 0, 'Herball care H', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(62, 'Herball care N', 6, 1, 0, 'Herball care N', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(63, 'Herball care P', 6, 1, 0, 'Herball care P', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(64, 'Herball care R', 6, 1, 0, 'Herball care R', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(65, 'Lymphomio  G154', 6, 1, 0, 'Lymphomio  G154', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(66, 'Medicef         G124 ', 6, 1, 0, 'Medicef         G124 ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(67, 'Medidepur   G298', 6, 1, 0, 'Medidepur   G298', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(68, 'Mediderma  G132', 6, 1, 0, 'Mediderma  G132', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(69, 'Medifemus   G161', 6, 1, 0, 'Medifemus   G161', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(70, 'Mediflebus   G147', 6, 1, 0, 'Mediflebus   G147', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(71, 'Mediklimus   G152', 6, 1, 0, 'Mediklimus   G152', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(72, 'Medimigran  G172', 6, 1, 0, 'Medimigran  G172', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(73, 'Medinervus   G158', 6, 1, 0, 'Medinervus   G158', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(74, 'Medinux          G254', 6, 1, 0, 'Medinux          G254', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(75, 'Mediprost       G168', 6, 1, 0, 'Mediprost       G168', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(76, 'Medisex          G046', 6, 1, 0, 'Medisex          G046', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(77, 'Medislimus    G250', 6, 1, 0, 'Medislimus    G250', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(78, 'Meditraum     G177', 6, 1, 0, 'Meditraum     G177', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(79, 'Medivens        G115', 6, 1, 0, 'Medivens        G115', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(80, 'Amacryn  C. ', 7, 1, 0, 'Amacryn  C. ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(81, 'Allermind', 7, 1, 0, 'Allermind', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(82, 'Akvamin', 7, 1, 0, 'Akvamin', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(83, 'Coraessens', 7, 1, 0, 'Coraessens', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(84, 'Cefasinu', 7, 1, 0, 'Cefasinu', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(85, 'Cefamadar', 7, 1, 0, 'Cefamadar', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(86, 'Bioclormag', 7, 1, 0, 'Bioclormag', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(87, 'Estresing', 7, 1, 0, 'Estresing', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(88, 'Omega-Vegetal', 7, 1, 0, 'Omega-Vegetal', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(89, 'Solosex', 7, 1, 0, 'Solosex', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(90, 'Gastrocynesine', 7, 1, 0, 'Gastrocynesine', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(91, 'Gastro Esens', 7, 1, 0, 'Gastro Esens', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(92, 'Inmunomax', 7, 1, 0, 'Inmunomax', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(93, 'In site women', 7, 1, 0, 'In site women', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(94, 'In site men', 7, 1, 0, 'In site men', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(95, 'Kopf-Voll', 7, 1, 0, 'Kopf-Voll', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(96, 'Medialergiu    G279', 7, 1, 0, 'Medialergiu    G279', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(97, 'Mediartrus      G135', 7, 1, 0, 'Mediartrus      G135', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(98, 'Medicyatus     G293', 7, 1, 0, 'Medicyatus     G293', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(99, 'Medidolus       G127', 7, 1, 0, 'Medidolus       G127', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(100, 'Mediedemus G177', 7, 1, 0, 'Mediedemus G177', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(101, 'Mediespasm  G171', 7, 1, 0, 'Mediespasm  G171', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(102, 'MedipankreasG272', 7, 1, 0, 'MedipankreasG272', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(103, 'Medipress      G251', 7, 1, 0, 'Medipress      G251', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(104, 'Medireum      G160', 7, 1, 0, 'Medireum      G160', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(105, 'Medisugar     G170', 7, 1, 0, 'Medisugar     G170', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(106, 'Mediven         G115', 7, 1, 0, 'Mediven         G115', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(107, 'Medivert        G092', 7, 1, 0, 'Medivert        G092', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(108, 'Nervo Complex', 7, 1, 0, 'Nervo Complex', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(109, 'Petrosele        G164', 7, 1, 0, 'Petrosele        G164', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(110, 'Resverat', 7, 1, 0, 'Resverat', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(111, 'Sedatif', 7, 1, 0, 'Sedatif', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(112, 'Singor2', 7, 1, 0, 'Singor2', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(113, 'Trigosamine', 7, 1, 0, 'Trigosamine', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(114, 'Clorofila', 8, 1, 0, 'Clorofila', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(115, 'Digest-fib', 8, 1, 0, 'Digest-fib', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(116, 'Femmevital', 8, 1, 0, 'Femmevital', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(117, 'Gengi Miel', 8, 1, 0, 'Gengi Miel', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(118, 'Homprost', 8, 1, 0, 'Homprost', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(119, 'Mediart Salix', 8, 1, 0, 'Mediart Salix', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(120, 'Medibroncu Sambucus', 8, 1, 0, 'Medibroncu Sambucus', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(121, 'Medidren Cynara', 8, 1, 0, 'Medidren Cynara', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(122, 'Medifleb Ginkgo biloba', 8, 1, 0, 'Medifleb Ginkgo biloba', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(123, 'Medigas  Glycyrriza', 8, 1, 0, 'Medigas  Glycyrriza', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(124, 'Medinefrus Equisetum', 8, 1, 0, 'Medinefrus Equisetum', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(125, 'Neparax', 8, 1, 0, 'Neparax', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(126, 'Peptacid', 8, 1, 0, 'Peptacid', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(127, 'Probiotico', 8, 1, 0, 'Probiotico', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(128, 'Pulmonaria', 8, 1, 0, 'Pulmonaria', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(129, 'JARABE  FM', 8, 1, 0, 'JARABE  FM', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(130, 'JARABE  IF', 8, 1, 0, 'JARABE  IF', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(131, 'JARABE  RA', 8, 1, 0, 'JARABE  RA', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(132, 'Belladona', 9, 1, 0, 'Belladona', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(133, 'Carb Veg', 9, 1, 0, 'Carb Veg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(134, 'Drosera', 9, 1, 0, 'Drosera', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(135, 'Fucus', 9, 1, 0, 'Fucus', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(136, 'Graphites', 9, 1, 0, 'Graphites', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(137, 'Hamamelis', 9, 1, 0, 'Hamamelis', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(138, 'Ignatia', 9, 1, 0, 'Ignatia', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(139, 'Nux Vomica', 9, 1, 0, 'Nux Vomica', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(140, 'Pareira', 9, 1, 0, 'Pareira', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(141, 'Phytolaca', 9, 1, 0, 'Phytolaca', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(142, 'Rhus Tox ', 9, 1, 0, 'Rhus Tox ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(143, 'Sulphur', 9, 1, 0, 'Sulphur', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(144, 'Aminocare', 10, 1, 0, 'Aminocare', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(145, 'Audisan', 10, 1, 0, 'Audisan', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(146, 'Body Drain', 10, 1, 0, 'Body Drain', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(147, 'C.D.  D.V.T.', 10, 1, 0, 'C.D.  D.V.T.', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(148, 'CD Cocomés', 10, 1, 0, 'CD Cocomés', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(149, 'CD Victor Hugo Suarez', 10, 1, 0, 'CD Victor Hugo Suarez', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(150, 'CD WILSON Y MELQUIS', 10, 1, 0, 'CD WILSON Y MELQUIS', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(151, 'Crema Acne', 10, 1, 0, 'Crema Acne', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(152, 'C.A.Bioartribe', 10, 1, 0, 'C.A.Bioartribe', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(153, 'Crema Arnica Mon.', 10, 1, 0, 'Crema Arnica Mon.', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(154, 'Crema Cicat', 10, 1, 0, 'Crema Cicat', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(155, 'Crema Dermg', 10, 1, 0, 'Crema Dermg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(156, 'Crema Gel Cop', 10, 1, 0, 'Crema Gel Cop', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(157, 'Crema Rathania', 10, 1, 0, 'Crema Rathania', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(158, 'Crema Sulphur', 10, 1, 0, 'Crema Sulphur', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(159, 'Dermoemulsion', 10, 1, 0, 'Dermoemulsion', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(160, 'Gel Hamamelis', 10, 1, 0, 'Gel Hamamelis', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(161, 'Hermamelis spray', 10, 1, 0, 'Hermamelis spray', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(162, 'Locion dermat', 10, 1, 0, 'Locion dermat', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(163, 'Lufa Spary', 10, 1, 0, 'Lufa Spary', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(164, 'Malteada 200', 10, 1, 0, 'Malteada 200', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(165, 'Malteada 500', 10, 1, 0, 'Malteada 500', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(166, 'Newcall', 10, 1, 0, 'Newcall', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(167, 'ovulos de cand', 10, 1, 0, 'ovulos de cand', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(168, 'Plata coloidal', 10, 1, 0, 'Plata coloidal', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(169, 'Probiessens 10 S.', 10, 1, 0, 'Probiessens 10 S.', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(170, 'Probiessens 30 S.', 10, 1, 0, 'Probiessens 30 S.', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(171, 'Quebracho Spray', 10, 1, 0, 'Quebracho Spray', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(172, 'Sales Shuller', 10, 1, 0, 'Sales Shuller', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(173, 'Spigelya Spray', 10, 1, 0, 'Spigelya Spray', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(174, 'Tonicap', 10, 1, 0, 'Tonicap', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(175, 'Venagel+gts', 10, 1, 0, 'Venagel+gts', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(176, 'Vita Fib', 10, 1, 0, 'Vita Fib', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
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


-- Volcando estructura para tabla u392883857_inven.roles
DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT '0',
  `descripcion` varchar(300) COLLATE utf8mb4_spanish_ci DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla u392883857_inven.roles: ~0 rows (aproximadamente)
DELETE FROM `roles`;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;


-- Volcando estructura para tabla u392883857_inven.sal_alm_general
DROP TABLE IF EXISTS `sal_alm_general`;
CREATE TABLE IF NOT EXISTS `sal_alm_general` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_proceso` date DEFAULT NULL,
  `Orden_compra` int(11) DEFAULT NULL,
  `observaciones` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `activa` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fechareg` timestamp NULL DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK1_OrdenCompra` (`Orden_compra`),
  CONSTRAINT `sal_alm_general_ibfk_1` FOREIGN KEY (`Orden_compra`) REFERENCES `orden_compra` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci ROW_FORMAT=COMPACT;

-- Volcando datos para la tabla u392883857_inven.sal_alm_general: ~0 rows (aproximadamente)
DELETE FROM `sal_alm_general`;
/*!40000 ALTER TABLE `sal_alm_general` DISABLE KEYS */;
/*!40000 ALTER TABLE `sal_alm_general` ENABLE KEYS */;


-- Volcando estructura para tabla u392883857_inven.sal_farmacia
DROP TABLE IF EXISTS `sal_farmacia`;
CREATE TABLE IF NOT EXISTS `sal_farmacia` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_proceso` date DEFAULT NULL,
  `observaciones` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Id_cliente` int(11) DEFAULT NULL,
  `activa` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fechareg` timestamp NULL DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_cliente` (`Id_cliente`),
  CONSTRAINT `FK_cliente` FOREIGN KEY (`Id_cliente`) REFERENCES `clientes` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci ROW_FORMAT=COMPACT;

-- Volcando datos para la tabla u392883857_inven.sal_farmacia: ~0 rows (aproximadamente)
DELETE FROM `sal_farmacia`;
/*!40000 ALTER TABLE `sal_farmacia` DISABLE KEYS */;
/*!40000 ALTER TABLE `sal_farmacia` ENABLE KEYS */;


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
	(2, 'Ml', 'Mililitros'),
	(3, 'Unidad', 'Unidad');
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
