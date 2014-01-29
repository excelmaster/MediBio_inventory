
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 10, 2013 at 05:23 AM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a4104228_mb`
--
use a4104228_mb;
-- --------------------------------------------------------

--
-- Table structure for table `admin_redir`
--

DROP TABLE IF EXISTS `admin_redir`;
CREATE TABLE IF NOT EXISTS `admin_redir` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `grupo` int(11) DEFAULT NULL,
  `name_sitio` varchar(200) DEFAULT NULL,
  `link_sitio` varchar(200) DEFAULT NULL,
  `img_sitio` varchar(200) DEFAULT NULL,
  `page` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=12 ;

--
-- Dumping data for table `admin_redir`
--

INSERT INTO `admin_redir` VALUES(7, 1, 'Productos', 'productos_mant.php', 'img/medica_admin.jpg', 'mant');
INSERT INTO `admin_redir` VALUES(8, 1, 'Clientes', 'clientes_mant.php', 'img/clientes_admin.jpg', 'mant');
INSERT INTO `admin_redir` VALUES(9, 1, 'Proveedores', 'proveedores_mant.php', 'img/provee_admin.jpg', 'mant');
INSERT INTO `admin_redir` VALUES(10, 1, 'Unidades de medida', 'unimed_mant.php', 'img/unimed-admin.jpg', 'mant');
INSERT INTO `admin_redir` VALUES(11, 1, 'Categorias de productos', 'catprod_ant.php', 'img/catgProdct_admin.jpg', 'mant');

-- --------------------------------------------------------

--
-- Table structure for table `categoria_productos`
--

DROP TABLE IF EXISTS `categoria_productos`;
CREATE TABLE IF NOT EXISTS `categoria_productos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `categoria_descrip` varchar(200) DEFAULT NULL,
  `tag_categdescrip` varchar(200) DEFAULT NULL,
  `unidad_medida_id` int(11) NOT NULL,
  `observa_categdescrip` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK1unidad` (`unidad_medida_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='tabla de categorizacion de productos' AUTO_INCREMENT=4 ;

--
-- Dumping data for table `categoria_productos`
--

INSERT INTO `categoria_productos` VALUES(1, 'anticonceptivos', 'pildora anticonceptiva', 2, 'sdgsdfsdfsd');
INSERT INTO `categoria_productos` VALUES(3, 'Gotas Simples', 'Variedad de gotas', 1, 'obsetrvacion 1');

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='tabla de clientes de MediBiologica' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` VALUES(1, 'humberto', '-', 'Fierro', 'Prieto', '1', '79879282', 21, '0000-00-00', 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clientes` VALUES(2, 'german', 'alejandro', 'rodriguez', 'rodrriguez', '1', '79464262', 931, '0000-00-00', 837, 'calle 1 carrera 2', '16461641', '1616564', '1641646456', '3132513', '35689797', '32646464', 'lsjfsld@fahldfhkd', '8686878@lkfadkfjdk', 'skdjfdhfksd@kdjfkd.com');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='List of company' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `company`
--


-- --------------------------------------------------------

--
-- Table structure for table `depto_dame`
--

DROP TABLE IF EXISTS `depto_dame`;
CREATE TABLE IF NOT EXISTS `depto_dame` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `departamentoId` varchar(4) DEFAULT NULL,
  `departamento` varchar(100) DEFAULT NULL,
  `zonaId` varchar(100) DEFAULT NULL,
  `dept_fonetico` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='tabla de departamentos del DANE' AUTO_INCREMENT=1288 ;

--
-- Dumping data for table `depto_dame`
--

INSERT INTO `depto_dame` VALUES(1255, '05', 'Antioquia', '2', 'Antioquia');
INSERT INTO `depto_dame` VALUES(1256, '08', 'Atlántico', '4', 'Atlantiso');
INSERT INTO `depto_dame` VALUES(1257, '11', 'Bogotá', '2', 'vojota');
INSERT INTO `depto_dame` VALUES(1258, '13', 'Bolívar', '4', 'volivar');
INSERT INTO `depto_dame` VALUES(1259, '15', 'Boyacá', '2', 'voiasa');
INSERT INTO `depto_dame` VALUES(1260, '17', 'Caldas', '2', 'saldas');
INSERT INTO `depto_dame` VALUES(1261, '18', 'Caquetá', '1', 'saqueta');
INSERT INTO `depto_dame` VALUES(1262, '19', 'Cauca', '6', 'sausa');
INSERT INTO `depto_dame` VALUES(1263, '20', 'Cesar', '4', 'sesar');
INSERT INTO `depto_dame` VALUES(1264, '23', 'Córdoba', '4', 'sordova');
INSERT INTO `depto_dame` VALUES(1265, '25', 'Cundinamarca', '2', 'sundinanarsa');
INSERT INTO `depto_dame` VALUES(1266, '27', 'Choco', '6', 'soso');
INSERT INTO `depto_dame` VALUES(1267, '41', 'Huila', '2', 'uila');
INSERT INTO `depto_dame` VALUES(1268, '44', 'La Guajira', '4', 'La juajira');
INSERT INTO `depto_dame` VALUES(1269, '47', 'Magdalena', '4', 'najdalena');
INSERT INTO `depto_dame` VALUES(1270, '50', 'Meta', '5', 'neta');
INSERT INTO `depto_dame` VALUES(1271, '52', 'Nariño', '6', 'Narino');
INSERT INTO `depto_dame` VALUES(1272, '54', 'Norte de Santander', '3', 'Norte de Santander');
INSERT INTO `depto_dame` VALUES(1273, '63', 'Quindío', '3', 'Quindio');
INSERT INTO `depto_dame` VALUES(1274, '66', 'Risaralda', '3', 'Risaralda');
INSERT INTO `depto_dame` VALUES(1275, '68', 'Santander', '3', 'Santander');
INSERT INTO `depto_dame` VALUES(1276, '70', 'Sucre', '4', 'Susre');
INSERT INTO `depto_dame` VALUES(1277, '73', 'Tolima', '3', 'Tolina');
INSERT INTO `depto_dame` VALUES(1278, '76', 'Valle del Cauca', '6', 'Val del sausa');
INSERT INTO `depto_dame` VALUES(1279, '81', 'Arauca', '5', 'Arausa');
INSERT INTO `depto_dame` VALUES(1280, '85', 'Casanare', '5', 'sasanare');
INSERT INTO `depto_dame` VALUES(1281, '86', 'Putumayo', '1', 'Putunaio');
INSERT INTO `depto_dame` VALUES(1282, '88', 'San Andrés, Providencia y Santa Catalina', '3', 'San Andres, Providensia i Santa satalina');
INSERT INTO `depto_dame` VALUES(1283, '91', 'Amazonas', '1', 'Anasonas');
INSERT INTO `depto_dame` VALUES(1284, '94', 'Guainía', '1', 'juainia');
INSERT INTO `depto_dame` VALUES(1285, '95', 'Guaviare', '1', 'juaviare');
INSERT INTO `depto_dame` VALUES(1286, '97', 'Vaupés', '1', 'Vaupes');
INSERT INTO `depto_dame` VALUES(1287, '99', 'Vichada', '5', 'Visada');

-- --------------------------------------------------------

--
-- Table structure for table `farmacias`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='list of warehouses' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `farmacias`
--


-- --------------------------------------------------------

--
-- Table structure for table `group_init`
--

DROP TABLE IF EXISTS `group_init`;
CREATE TABLE IF NOT EXISTS `group_init` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `grupo` int(10) NOT NULL,
  `rol-description` varchar(200) NOT NULL,
  `pageRedirect` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `grupo` (`grupo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='begin page to init the app for the groupid of session' AUTO_INCREMENT=4 ;

--
-- Dumping data for table `group_init`
--

INSERT INTO `group_init` VALUES(1, 1, 'administrator', 'administration.php');
INSERT INTO `group_init` VALUES(2, 2, 'main_warehouse', 'almacencentral.php');
INSERT INTO `group_init` VALUES(3, 3, 'farmacy', 'farmacia.php');

-- --------------------------------------------------------

--
-- Table structure for table `main_redirection`
--

DROP TABLE IF EXISTS `main_redirection`;
CREATE TABLE IF NOT EXISTS `main_redirection` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `grupo` int(11) DEFAULT NULL,
  `name_sitio` varchar(200) DEFAULT NULL,
  `link_sitio` varchar(200) DEFAULT NULL,
  `img_sitio` varchar(200) DEFAULT NULL,
  `page` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `main_redirection`
--

INSERT INTO `main_redirection` VALUES(1, 1, 'administracion', 'admin.php', 'img/main_admin.jpg', NULL);
INSERT INTO `main_redirection` VALUES(2, 1, 'Almacen General', 'almGeneral.php', 'img/almGeneral.jpg', NULL);
INSERT INTO `main_redirection` VALUES(3, 2, 'Almacen General', 'almGeneral.php', 'img/almGeneral.jpg', NULL);
INSERT INTO `main_redirection` VALUES(4, 3, 'Farmacia', 'farmacia.php', 'img/farmacia.gif', NULL);
INSERT INTO `main_redirection` VALUES(5, 1, 'Farmacia', 'farmacia.php', 'img/farmacia.gif', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_categories`
--

DROP TABLE IF EXISTS `menu_categories`;
CREATE TABLE IF NOT EXISTS `menu_categories` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `CategoryId` int(10) NOT NULL,
  `CategoryName` varchar(200) DEFAULT NULL,
  `ParentCategory` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='menu dinamico con categorias\r\n' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `menu_categories`
--


-- --------------------------------------------------------

--
-- Table structure for table `munc_dane`
--

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
  KEY `FK1depto` (`depto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='tabla de municipios del DANE' AUTO_INCREMENT=2002 ;

--
-- Dumping data for table `munc_dane`
--


-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

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
  KEY `FK2unimed` (`unidad_medida_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='listado de productos' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `productos`
--


-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='List of company' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `proveedores`
--


-- --------------------------------------------------------

--
-- Table structure for table `tipo_doc`
--

DROP TABLE IF EXISTS `tipo_doc`;
CREATE TABLE IF NOT EXISTS `tipo_doc` (
  `id_tip_doc` int(10) NOT NULL AUTO_INCREMENT,
  `descp_tip_doc` varchar(50) DEFAULT NULL,
  `sigla_tipDoc` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tip_doc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tipos de documento para clientes y proveedores' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tipo_doc`
--


-- --------------------------------------------------------

--
-- Table structure for table `unidadesmedida`
--

DROP TABLE IF EXISTS `unidadesmedida`;
CREATE TABLE IF NOT EXISTS `unidadesmedida` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `descrp_unidad` varchar(200) DEFAULT NULL,
  `obsv_unidad` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='unidades de medida' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `unidadesmedida`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='tabla de usuarios del sistema' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` VALUES(1, 'humberto', NULL, 'fierro', 'prieto', 'hfierro', '79879', 'admin', 1);
INSERT INTO `users` VALUES(2, 'farma', 'cia', 'medi', 'biologica', 'farmacia', 'farma', 'Jefe de farmacia', 2);

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='list of warehouses' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `warehouse`
--

