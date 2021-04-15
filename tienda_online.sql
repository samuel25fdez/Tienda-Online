-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-04-2021 a las 16:33:23
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_online`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `entrada_id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `usuario_id`, `entrada_id`, `titulo`, `texto`, `fecha`) VALUES
(1, 2, 2, 'muy buena calidad', 'las compre para mi marido y esta muy contento', '2021-03-31 16:04:10'),
(2, 2, 2, 'buenas zapas', 'muy buenas zapas me gustaron mucho', '2021-03-31 16:47:21'),
(3, 1, 3, 'todo genial', 'compré estas zapas y me llegó todo muy rápido y buena calidad', '2021-04-01 10:37:06'),
(4, 3, 1, 'geniales', 'me gustaron mucho', '2021-04-01 10:38:23'),
(8, 1, 8, 'me encantan', 'volvevere a pedir', '2021-04-01 10:41:00'),
(9, 2, 4, 'estas vans me chiflan', 'me encantan estas vans voy a volver a pedir otras para mi primo ', '2021-04-01 10:41:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL,
  `url_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`id`, `usuario_id`, `titulo`, `descripcion`, `url`, `fecha`, `url_img`) VALUES
(1, 2, 'Adidas Super Star', 'Zapatillas Adidas Super Star muy cómodas válidas tanto para practicar deporte así como outfit informal. \r\nEstas zapatillas son las más vendidas del año 2020 en toda Europa.\r\n\r\nPRECIO:60€', 'https://instazapas.com/464-large_default/adidas-superstar-2015-pintura.jpg', '2021-03-25 16:28:36', 'https://dackscompany.com/blog/wp-content/uploads/2019/11/adidas-superstar-verdaderas-falsas-10.jpg'),
(2, 2, 'NIKE AIR MAX 97 BLANCAS', 'Las Nike Air Max 97 ULTRA han llegado a Zapatillas Molonas, muy baratas. COMPRA tus NIKE AIRMAX 97 aqui, al mejor PRECIO del mercado. Este tipo de Air Max conjuntan con cualquier tipo de vestimenta ya sea formal o informal. puedes coger cualquier color des de BLANCAS  a los colores mas atrevidos DORADAS ROJAS ETC.', 'https://instazapas.com/1231-large_default/nike-air-max-97-blancas.jpg', '0000-00-00 00:00:00', 'https://images-na.ssl-images-amazon.com/images/I/81hi0gTLKiL._AC_UX395_.jpg'),
(3, 2, 'ADIDAS STAN SMITH BLANCAS VERDES\r\n', 'Adidas baratas en Zapatillas Molonas', 'https://instazapas.com/589-large_default/adidas-stan-smith-blancas-verdes.jpg', '0000-00-00 00:00:00', 'https://instazapas.com/589-large_default/adidas-stan-smith-blancas-verdes.jpg'),
(4, 2, 'VANS OLD SKOOL NEGRAS BLANCAS\r\n', 'Unas Vans muy molonas para ir a la última', 'https://instazapas.com/992-large_default/vans-old-skool-negras-blancas.jpg', '0000-00-00 00:00:00', 'https://instazapas.com/992-large_default/vans-old-skool-negras-blancas.jpg'),
(5, 2, 'ADIDAS YUNG 96 BLANCAS\r\n', 'Las ADIDAS YUNG son unas zapas de lo más molón del mercado!\r\n', 'https://instazapas.com/1405-large_default/adidas-yung-1-blancas.jpg', '0000-00-00 00:00:00', 'https://instazapas.com/1405-large_default/adidas-yung-1-blancas.jpg'),
(8, 2, 'Zapas nike', 'Zapatillas deportivas bajas \'Charge SLR\'', 'zapatillasnike', '0000-00-00 00:00:00', 'https://i.blogs.es/011ca8/nike/450_1000.jpg'),
(9, 2, 'nike molonas negras', 'nike molonas negras en zapas molonas', 'https://instazapas.com/1961-large_default/nike-air-force-just-do-it-negras-low.jpg', '0000-00-00 00:00:00', '\r\nhttps://instazapas.com/1961-large_default/nike-air-force-just-do-it-negras-low.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas_favoritas`
--

CREATE TABLE `entradas_favoritas` (
  `id_usuario` int(11) NOT NULL,
  `id_entrada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `entradas_favoritas`
--

INSERT INTO `entradas_favoritas` (`id_usuario`, `id_entrada`) VALUES
(3, 1),
(3, 2),
(3, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecha_registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`, `fecha_registro`) VALUES
(1, 'JUAN', 'juan@gmail.com', '12345', '2021-03-02 16:21:34'),
(2, 'admin', 'admin@gmail.com', '123456789', '2021-03-25 16:28:03'),
(3, 'Samuel5', 'samufernandez606@gmail.com', '$2y$10$HE15mD8LRchMaaloP98VK.p7tCYWTjDo3guwoi3xuUeu7iUI214Bu', '2021-03-25 18:07:23'),
(5, 'Samuel6', 'samufernandez605@gmail.com', '$2y$10$u.ZIh.29qIe.Vw3EPJxMxO.UnTmzCafyLxUgHXZeHaUhUXPgpcx2K', '2021-04-08 22:39:14'),
(6, '123456789', 'samufernandez601@gmail.com', '$2y$10$HOLM6SNR8xxkGwxLh.dsSuR7kTslR/STKW7n2bDcw0OmFY0Wwu3Aq', '2021-04-09 11:10:31');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `entrada_id` (`entrada_id`);

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `titulo` (`titulo`),
  ADD UNIQUE KEY `url` (`url`),
  ADD UNIQUE KEY `url_img` (`url_img`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `entradas_favoritas`
--
ALTER TABLE `entradas_favoritas`
  ADD PRIMARY KEY (`id_usuario`,`id_entrada`),
  ADD KEY `id_entrada` (`id_entrada`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `nombre_usuario` (`nombre_usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `entradas`
--
ALTER TABLE `entradas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`entrada_id`) REFERENCES `entradas` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD CONSTRAINT `entradas_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `entradas_favoritas`
--
ALTER TABLE `entradas_favoritas`
  ADD CONSTRAINT `entradas_favoritas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `entradas_favoritas_ibfk_2` FOREIGN KEY (`id_entrada`) REFERENCES `entradas` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
