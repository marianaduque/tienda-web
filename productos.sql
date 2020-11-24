-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2020 a las 18:56:31
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendaweb1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idproducto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproducto`, `nombre`, `marca`, `precio`, `descripcion`, `imagen`) VALUES
(6, 'vestido', 'agua', 50000, 'Vestido de verano', 'https://www.clara.es/medio/2019/03/28/como-combinar-ropa-primavera-verano-2019-asos-3299%E2%82%AC_1e4bbf40_1000x1500.jpg'),
(7, 'Gafas', 'Guess', 80000, 'Para el cuidado de los ojos de la luz directa ', 'https://www.latiendadegafas.com/wp-content/uploads/2020/02/Gafas-de-sol-mujer-Guess-GU-7459-59C.png'),
(8, 'Salida de baño', 'leonisa', 50000, 'Antes de ir para la piscina ', 'https://ae01.alicdn.com/kf/HTB1Do6RSXXXXXatXVXXq6xXFXXXI/Playa-Crochet-Cover-Up-Beach-T-nica-Vestidos-de-Verano-Blanco-Poncho-Mujeres-Bikinis-Traje-de.jpg'),
(9, 'Pava', 'Piel canela', 30000, 'Para ir a la playa', 'https://muchosnegociosrentables.com/wp-content/uploads/2015/09/Productos-para-vender-en-la-playa-negocio-de-verano.jpg'),
(10, 'Protector y bronceador solar', 'SPF', 150000, 'Para lucir una piel perfecta', 'https://image.freepik.com/vector-gratis/botellas-proteccion-solar-productos-verano_18591-52627.jpg'),
(11, 'Kit juego en la playa', 'TDF', 40000, 'Para que tus hijos tengan una mejor experiencia en la playa', 'https://http2.mlstatic.com/productos-de-g-f-juego-de-playa-justforkids-para-playa-D_NQ_NP_716512-MCO29742491519_032019-O.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
