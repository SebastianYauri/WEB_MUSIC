-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-07-2021 a las 18:55:48
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdadministracion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cancion`
--

CREATE TABLE `cancion` (
  `id` int(11) NOT NULL,
  `can_titulo` varchar(60) DEFAULT NULL,
  `can_size` varchar(45) DEFAULT NULL,
  `LISTA_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cancion`
--

INSERT INTO `cancion` (`id`, `can_titulo`, `can_size`, `LISTA_id`) VALUES
(27, '2Pac_-_Dear_Mama_Qoret.com.mp3', '4457.703125 KB', 7),
(28, '2pac_ft_Outlawz_-_Hit_Em_Up_Qoret.com.mp3', '4989.5751953125 KB', 7),
(29, 'Canserbero – ES EPICO.mp3', '15216.129882812 KB', 7),
(30, 'Dr. Dre feat. Snoop Dogg - Still Dre.mp3', '4309.6064453125 KB', 7),
(31, 'Dr. Dre ft. Snoop Dogg - Nuthinu0027 But A G Thang (Official', '2234.25 KB', 7),
(32, 'Eminem - Lose Yourself (Lyrics) (MP3TECA.WS).mp3', '2515.25 KB', 7),
(33, 'Ice_Cube_-_It_Was_A_Good_Day_Qoret.com.mp3', '4147.53515625 KB', 7),
(34, 'IceCube - Check Yo Self (320 kbps).mp3', '10696.2109375 KB', 7),
(35, 'JAY-Z - Big Pimpinu0027 ft. UGK (GRATIS-MP3S.NET).mp3', '2410.0625 KB', 7),
(36, 'Nas-N.Y.-State-of-Mind-Audio.mp3', '6929.521484375 KB', 7),
(37, 'P.I.M.P. (Snoop Dogg Remix).mp3', '6773.14453125 KB', 7),
(38, 'RAFAEL LECHOWSKI - POR AMOR AL ODIO [Flowklorikos] (NUEVOEXI', '3023.6875 KB', 7),
(53, 'Martin Garrix feat. Tove Lo - Pressure (Official Video).mp3', '3374.0390625 KB', 5),
(54, 'MEDUZA - Paradise ft. Dermot Kennedy.mp3', '3995.470703125 KB', 5),
(55, 'Offline.mp3', '5437.353515625 KB', 5),
(56, 'Dimitri Vegas  Like Mike vs Vini Vici - Get In Trouble (So W', '3687.783203125 KB', 5),
(57, 'Fireworks (Ft. Moss Kena  The Knocks) - Official Video.mp3', '5418.1640625 KB', 5),
(58, 'RITA ORA,  DAVID GUETTA, IMANBEK  BIG FT. GUNNA [OFFICIAL VI', '4135.2666015625 KB', 5),
(59, 'King Cobra.mp3', '8171.130859375 KB', 5),
(60, 'Kristin Velvet - Rockin.mp3', '6641.2294921875 KB', 5),
(61, 'Robin Schulz feat. KIDDO - All We Got (Official Video).mp3', '4711.244140625 KB', 5),
(62, 'Travis Scott - goosebumps ft. Kendrick Lamar.mp3', '5874.4462890625 KB', 5),
(63, 'comoTeVa.mp3', '1788.7080078125 KB', 3),
(64, 'siNoT.mp3', '2239.9267578125 KB', 3),
(65, 'UnBeso.mp3', '4229.1162109375 KB', 3),
(66, 'APuroDolor.mp3', '4958.7080078125 KB', 3),
(67, 'locosD.mp3', '3995.23828125 KB', 3),
(68, 'NoTeImaginas.mp3', '5045.646484375 KB', 3),
(69, 'quienComo.mp3', '3282.5849609375 KB', 3),
(70, 'seMefue.mp3', '3403.4013671875 KB', 3),
(71, 'todavia.mp3', '0.001953125 KB', 3),
(72, 'unMillon.mp3', '4269.9326171875 KB', 3),
(74, 'TengoUnAmor.mp3', '5502.9931640625 KB', 3),
(89, 'songseventeen.mp3', '4778.5966796875 KB', 6),
(90, 'songeveryday.mp3', '8253.625 KB', 6),
(91, 'songtriangle.mp3', '4958.0048828125 KB', 6),
(92, 'songbody.mp3', '4698.720703125 KB', 6),
(93, 'songtara.mp3', '5055.8310546875 KB', 6),
(94, 'songzico.mp3', '5799.7314453125 KB', 6),
(95, 'songblockb.mp3', '4535.908203125 KB', 6),
(96, 'songgot7.mp3', '5582.6533203125 KB', 6),
(97, 'songtaemin.mp3', '4929.734375 KB', 6),
(98, 'songss501.mp3', '3842.3916015625 KB', 6),
(99, 'songakmu.mp3', '5878.72265625 KB', 6),
(100, 'songkai.mp3', '4847.703125 KB', 6),
(101, '1.mp3', '3669.6064453125 KB', 2),
(102, '2.mp3', '2339.1064453125 KB', 2),
(103, '3.mp3', '7537.3564453125 KB', 2),
(104, '4.mp3', '1964.4814453125 KB', 2),
(105, '5.mp3', '4248.2314453125 KB', 2),
(106, '6.mp3', '6008.8564453125 KB', 2),
(107, '7.mp3', '6536.1064453125 KB', 2),
(108, '8.mp3', '3394.7314453125 KB', 2),
(109, '9.mp3', '6651.6064453125 KB', 2),
(110, '10.mp3', '2904.2314453125 KB', 2),
(111, 'r1.mp3', '8789.703125 KB', 4),
(112, 'r2.mp3', '7862.7060546875 KB', 4),
(113, 'r3.mp3', '5671.0390625 KB', 4),
(114, 'r4.mp3', '11122.538085938 KB', 4),
(115, 'r5.mp3', '7025.7763671875 KB', 4),
(116, 'r6.mp3', '7147.724609375 KB', 4),
(117, 'r7.mp3', '8484.185546875 KB', 4),
(118, 'r8.mp3', '11409.493164062 KB', 4),
(119, 'r9.mp3', '6627.3076171875 KB', 4),
(120, 'r10.mp3', '8795.3994140625 KB', 4),
(121, 'r11.mp3', '9233.9892578125 KB', 4),
(122, 'r12.mp3', '11110.5 KB', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista`
--

CREATE TABLE `lista` (
  `id` int(11) NOT NULL,
  `lis_nombre` varchar(50) DEFAULT NULL,
  `lis_activa` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lista`
--

INSERT INTO `lista` (`id`, `lis_nombre`, `lis_activa`) VALUES
(2, 'ROCK', 'true'),
(3, 'BALADAS', 'true'),
(4, 'CLASICOS 80\'S', 'true'),
(5, 'ELECTRONICA', 'true'),
(6, 'KPOP', 'true'),
(7, 'RAP', 'true');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cancion`
--
ALTER TABLE `cancion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `LISTA_id` (`LISTA_id`);

--
-- Indices de la tabla `lista`
--
ALTER TABLE `lista`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cancion`
--
ALTER TABLE `cancion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT de la tabla `lista`
--
ALTER TABLE `lista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cancion`
--
ALTER TABLE `cancion`
  ADD CONSTRAINT `cancion_ibfk_1` FOREIGN KEY (`LISTA_id`) REFERENCES `lista` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
