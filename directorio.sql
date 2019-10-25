-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2019 a las 16:15:08
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `directorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `entidad` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `partido` varchar(200) NOT NULL,
  `imagenpartido` varchar(100) NOT NULL,
  `experiencia` varchar(200) NOT NULL,
  `inicio` date NOT NULL,
  `fin` text NOT NULL,
  `resena` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `entidad`, `imagen`, `cargo`, `nombre`, `partido`, `imagenpartido`, `experiencia`, `inicio`, `fin`, `resena`) VALUES
(1, 'Colima', 'mark-zuckerberg-time-100-2019.jpg', 'CEO Facebook', 'Mark Elliot Zuckerberg ', 'MORENA', 'cropped-Logo-Morena-cuadrado.png', '7 años en el cargo', '2015-04-16', '2018-10-23', 'Se desempeña como programador en la empresa de Facebookk'),
(2, 'Campeche', 'og.png', 'CEO Apple', 'Tim Cook', 'MORENA', 'cropped-Logo-Morena-cuadrado1.png', '2 años en el cargo', '2015-04-16', '2018-08-23', 'Sustituyo a Steve Jobs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactosestatal`
--

CREATE TABLE `contactosestatal` (
  `id` int(11) NOT NULL,
  `entidad` varchar(50) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `partido` varchar(50) NOT NULL,
  `imagenpartido` varchar(100) NOT NULL,
  `experiencia` varchar(50) NOT NULL,
  `inicio` date NOT NULL,
  `fin` date NOT NULL,
  `resena` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contactosestatal`
--

INSERT INTO `contactosestatal` (`id`, `entidad`, `imagen`, `cargo`, `nombre`, `partido`, `imagenpartido`, `experiencia`, `inicio`, `fin`, `resena`) VALUES
(1, 'Michoacán', 'elon.jpg', 'CEO Tesla', 'Elon Reeve Musk', 'PAN', 'descarga.png', '7 años en el cargo', '2015-04-16', '2019-05-22', 'Presidente de empresas de tecnológia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactosmunicipal`
--

CREATE TABLE `contactosmunicipal` (
  `id` int(11) NOT NULL,
  `entidad` varchar(50) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `partido` varchar(50) NOT NULL,
  `imagenpartido` varchar(100) NOT NULL,
  `experiencia` varchar(100) NOT NULL,
  `inicio` date NOT NULL,
  `fin` date NOT NULL,
  `resena` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contactosmunicipal`
--

INSERT INTO `contactosmunicipal` (`id`, `entidad`, `imagen`, `cargo`, `nombre`, `partido`, `imagenpartido`, `experiencia`, `inicio`, `fin`, `resena`) VALUES
(2, 'Chihuahua', 'carlos.jpg', 'CEO Telmex y telecomunicaciones', 'Carlos Slim', 'MORENA', 'cropped-Logo-Morena-cuadrado2.png', '10 años en el cargo', '2015-04-16', '2018-11-23', 'Es el hombre mas rico del mundo jajaja'),
(3, 'Ciudad de México', 'mark-zuckerberg-time-100-20191.jpg', 'Cargo1', 'Nombre1', 'MORENA', 'cropped-Logo-Morena-cuadrado3.png', '5 años en el cargo', '2015-04-16', '2018-11-23', 'No hay reseña');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactosprivados`
--

CREATE TABLE `contactosprivados` (
  `id` int(11) NOT NULL,
  `razon_social` varchar(50) NOT NULL,
  `entidad` varchar(100) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `domicilio` varchar(100) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `giro` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contactosprivados`
--

INSERT INTO `contactosprivados` (`id`, `razon_social`, `entidad`, `municipio`, `domicilio`, `telefono`, `correo`, `giro`) VALUES
(1, 'Coca cola', 'Durango', 'Colorado', 'Columbia #208', '717-14-4-26-90', 'ale@hotmail.com', 'Vendedor de Refrescos Online'),
(4, 'Pespsicola SA. de CV', 'Campeche', 'Tenango', 'Alvaro Obregon Sur #301', '7171448896', 'ale@hotmail.com', 'Empresa Refresquera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `tipo`, `usuario`, `pass`, `correo`) VALUES
(13, 0, 'ariadna', 'ari', 'ari@gmail.com'),
(14, 0, 'memo', 'me', 'g_gomez@outlook.com'),
(15, 0, 'guadalupe', 'lupita', 'lupita@hotmail.com'),
(16, 0, 'javier', 'javi', 'javi@hotmail.com'),
(17, 0, 'priscilla', 'pris', 'priscilla.jimenez69@gmail.com'),
(18, 0, 'anhai', 'ana', 'anhai.landell@gmail.com'),
(19, 0, 'alex', 'ale', 'ale@hotmail.com'),
(20, 0, 'zandra', 'zan', 'zan@inntegrada.com'),
(23, 0, 'usuario1', 'user1', 'user1@gmail.com'),
(24, 0, 'usuario2', 'user2', 'user2@gmail.com'),
(25, 0, 'usuario3', 'user3', 'user3@gmail.com'),
(26, 0, 'emanuel', 'ema', 'emanuel@hotmail.com'),
(27, 0, 'emacej', 'emace', 'emanuel1@hotmail.com'),
(28, 1, 'david', 'dav', 'david@hotmail.com'),
(29, 0, 'luis', 'luz', 'luiz@gmail.com'),
(30, 0, 'roberto', 'rob', 'roberto@gmail.com'),
(31, 1, 'mayra', 'may', 'may@hotmail.com'),
(32, 0, 'fernanda', 'fer', 'fernanda16@gmail.com'),
(33, 1, 'ignacio', 'nacho', 'ignacio.salgado@inntegrada.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contactosestatal`
--
ALTER TABLE `contactosestatal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contactosmunicipal`
--
ALTER TABLE `contactosmunicipal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contactosprivados`
--
ALTER TABLE `contactosprivados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `contactosestatal`
--
ALTER TABLE `contactosestatal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contactosmunicipal`
--
ALTER TABLE `contactosmunicipal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `contactosprivados`
--
ALTER TABLE `contactosprivados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
