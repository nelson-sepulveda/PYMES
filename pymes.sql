-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2017 a las 03:59:35
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pymes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(70) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `direccion` varchar(10) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre_cliente`, `telefono`, `direccion`, `cedula`, `password`, `email`) VALUES
(77617, 'Luis', '89901', 'Av 77', '77617', 'hola', 'luis@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id_compra` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `fecha_compra` date NOT NULL,
  `valor_compra` int(11) NOT NULL,
  `rut_empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas cobrar`
--

CREATE TABLE `cuentas cobrar` (
  `id_cuenta` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` int(11) NOT NULL,
  `nombre_empleado` varchar(100) NOT NULL,
  `direccion` varchar(10) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `nombre_empleado`, `direccion`, `telefono`, `id_tipo`, `email`, `pass`) VALUES
(54, 'Albert', 'Av 6a5 -F', '3121212352', 2, 'emp@gmail.com', 'pass123'),
(441, 'Lisboa', 'Av 645 -F', '31251252', 4, 'lis@gmail.com', 'pass123'),
(1234, 'Jairo', 'Av 653 -2 ', '31245124', 1, 'jairo@gmail.com', 'jairo123'),
(5413, 'Carlos Augusto', 'Av 445- 12', '3124567800', 3, 'carlos@gmail.com', '3124567800'),
(5414, 'Luis Carlos', 'Cll 34 - 6', '3212412412', 3, 'email2@gmail.com', '321241241241'),
(5415, 'Miguel Rangel', 'Calle 3 # ', '1923809123', 3, 'miguel@gmail.com', '1923809123'),
(5416, 'Alberto IbaÃ±ez', 'Cll 34 - 9', '3219879812', 3, 'alrer@gmail.com', '3219879812'),
(5417, 'Ivan Tomas', 'Av 5 # 12-', '3210987546', 3, 'ivan12@ufps.edu.co', '3210987546');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `RUT` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `direccion` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id_factura` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `tipo_empleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `tipo_pedido` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_producto`
--

CREATE TABLE `pedido_producto` (
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio_unitario` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `precio_unitario`, `descripcion`, `fecha`) VALUES
(1, 'nombre', 1000, 'muchos', '0000-00-00'),
(2, 'Almohada ', 1000, 'La mejor de todas', '2017-06-20'),
(3, 'Sabanas', 2000, 'La mejores sabana', '2017-06-20'),
(4, 'Lapiceros', 500, 'Diferentes tipos para todos', '2017-06-20'),
(5, 'Lapiceros', 500, 'Diferentes tipos para todos', '2017-06-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_proveedor`
--

CREATE TABLE `producto_proveedor` (
  `id_producto` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto_proveedor`
--

INSERT INTO `producto_proveedor` (`id_producto`, `id_proveedor`) VALUES
(2, 1),
(3, 1),
(4, 1),
(5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `tipo_proveedor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre`, `tipo_proveedor`) VALUES
(1, 'SOTO SA', 'Cosmeticos Invaluables');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_empleado`
--

CREATE TABLE `tipo_empleado` (
  `id_tipo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_empleado`
--

INSERT INTO `tipo_empleado` (`id_tipo`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Gerente'),
(3, 'empleado'),
(4, 'contador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `fk_id_compra_provee` (`id_proveedor`),
  ADD KEY `fk_id_compra_empre` (`rut_empresa`);

--
-- Indices de la tabla `cuentas cobrar`
--
ALTER TABLE `cuentas cobrar`
  ADD PRIMARY KEY (`id_cuenta`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `fk_empleado_tipo` (`id_tipo`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`RUT`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id_factura`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `fk_id_cliente` (`id_cliente`),
  ADD KEY `fk_id_producto` (`id_producto`),
  ADD KEY `fk_id_empleado` (`id_empleado`);

--
-- Indices de la tabla `pedido_producto`
--
ALTER TABLE `pedido_producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `fk_id_pedido_pro` (`id_pedido`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `producto_proveedor`
--
ALTER TABLE `producto_proveedor`
  ADD PRIMARY KEY (`id_producto`,`id_proveedor`),
  ADD KEY `fk_id_proveedor_pro` (`id_proveedor`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `tipo_empleado`
--
ALTER TABLE `tipo_empleado`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `fk_id_compra_empre` FOREIGN KEY (`rut_empresa`) REFERENCES `empresa` (`RUT`),
  ADD CONSTRAINT `fk_id_compra_provee` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`);

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `fk_empleado_tipo` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_empleado` (`id_tipo`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `fk_id_empleado` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`),
  ADD CONSTRAINT `fk_id_producto` FOREIGN KEY (`id_producto`) REFERENCES `pedido_producto` (`id_producto`);

--
-- Filtros para la tabla `pedido_producto`
--
ALTER TABLE `pedido_producto`
  ADD CONSTRAINT `fk_id_pedido_pro` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`),
  ADD CONSTRAINT `fk_id_producto_pro` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `producto_proveedor`
--
ALTER TABLE `producto_proveedor`
  ADD CONSTRAINT `fk_id_producto_proveedor` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`),
  ADD CONSTRAINT `fk_id_proveedor_pro` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
