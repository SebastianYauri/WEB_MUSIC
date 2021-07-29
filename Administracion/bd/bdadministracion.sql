-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-07-2021 a las 09:28:15
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

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
CREATE DATABASE IF NOT EXISTS `bdadministracion` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bdadministracion`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

DROP TABLE IF EXISTS `administradores`;
CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `usuario`, `contrasena`) VALUES
(2, 'marco', '123456'),
(3, 'Elizabeth', '12587'),
(4, 'Jennifer', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cancion`
--

DROP TABLE IF EXISTS `cancion`;
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
-- Estructura de tabla para la tabla `cancionestop`
--

DROP TABLE IF EXISTS `cancionestop`;
CREATE TABLE `cancionestop` (
  `code` int(10) NOT NULL,
  `nomart` varchar(50) NOT NULL,
  `fotart` varchar(500) NOT NULL,
  `descrip` mediumtext NOT NULL,
  `nomcan` varchar(500) NOT NULL,
  `fotdisco` varchar(500) NOT NULL,
  `mus` varchar(500) NOT NULL,
  `decoracionT` varchar(10) NOT NULL,
  `fandom` varchar(500) NOT NULL,
  `codegen` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cancionestop`
--

INSERT INTO `cancionestop` (`code`, `nomart`, `fotart`, `descrip`, `nomcan`, `fotdisco`, `mus`, `decoracionT`, `fandom`, `codegen`) VALUES
(1, 'Armando Manzanero', 'imgmanzanero.jpg', ' Considerado el \"Rey del Romanticismo\", el compositor, cantante, actor, músico y productor discográfico mexicano. Escribió más de cuatrocientas canciones, de las cuales más de cincuenta han alcanzado fama internacional, como «Somos novios, uno de los más grandes éxitos fue interpretado por varios artistas internacionales como Elvis Presley que incluso grabó su propia versión.', 'Somos novios', 'FotoMusica1.jpeg', 'somosNovios.mp3', 'A', '', 100),
(2, 'Jose Jose', 'imgjosejose.jpg', ' José Rómulo Sosa Ortiz, conocido mundialmente como José José, nació el 17 de febrero de 1948 en la ciudad de México.', 'El triste', 'fotoMusica2.jpg', 'ElTriste.mp3', 'B', '', 100),
(3, 'Leo Dan', 'imgleodan.jpg', ' Considerado uno de los cantautores más importantes de Latinoamérica. Su música ha conquistado el corazón de todos los países de habla hispana. \r\n		Leo ha compuesto más de 2000 canciones. Sus temas han sido grabados en diferentes géneros como romántico, folklore, tropical, cumbia, banda, tango, ballenato y rancheras. También sus composiciones han sido traducidas al italiano, portugués, alemán, francés, ingles y japonés.', 'Como te extraño mi amor', 'fotoMusica3.jpeg', 'comoTe.mp3', 'A', '', 100),
(4, 'Ana Gabriel', 'imgana.jpg', ' María Guadalupe Araujo Yong​, ​conocida artísticamente como Ana Gabriel, es una cantautora y compositora mexicana, conocida con los sobrenombres de la Diva de América​ y la Luna de América.​', 'Simplemente Amigos', 'fotoMusica4.jpeg', 'gabrielAmigos.mp3', 'B', '', 100),
(5, 'Ricardo Montaner ', 'imgricardo.jpg', 'Héctor Eduardo Reglero Montaner más conocido como Ricardo Montaner ha vendido a lo largo de su carrera más de 100 millones de discos, siendo uno de los cantantes lationamericanos más importantes de la música en español, y de su país de acogida, Venezuela, dentro del género de balada y pop.<br>\r\n         El pico de su popularidad fue entre los años 80 y 90. ', 'Aunque estés con él ', 'fotoMusica5.jpeg', 'aunqueEstes.mp3', 'A', '', 100),
(6, 'Guillermo Dávila ', 'imgguillermo.jpg', 'Guillermo José Dávila Ruiz actor y cantante venezolano, nacido en la ciudad de Caracas el 18 de marzo de 1955. Lleno de mucho talento, Guillermo tuvo dentro de sus muchas propuestas laborales artísticas, convertirse en el protagonista de “Godspell”, un exitoso musical de Broadway de los años sesenta. ', 'Aunque estés con él ', 'fotoMusica6.jpeg', 'soloPienso.mp3', 'B', '', 100),
(7, 'MICHAEL JACKSON', 'm1.2.jpg', 'Nacido el 29 de agosto de 1958 en Gary, Indiana (Estados Unidos), Michael Joseph Jackson era el séptimo de los nueve hijos de Joseph y Katherine Jackson. Comenzó su carrera siendo sólo un niño de 11 años junto a sus hermanos en los Jackson Five, con quienes lanzó temas de éxito como I Want You Back o ABC.', 'BILLIE JEAN - Michael Jackson', 'm1.1.jpg', 'billiejean.mp3', '', '', 200),
(8, 'A-HA', 'm2.jpg', '«Take on Me» es una canción del grupo noruego de pop A-ha. Paul Waaktaar-Savoy, Magne Furuholmen y Morten Harket compusieron la primera versión y Tony Mansfield se encargó de la producción.1 Además de los sintetizadores, presenta una instrumentación variada, que incluye guitarra acústica, teclados y batería. ', 'TAKE ON ME - A HA', 'm2.1.jpg', 'takeonme.mp3', '', '', 200),
(9, 'GUNS N\' ROSES', 'm3.jpg', '«Welcome to the Jungle» es una canción de hard rock del grupo Guns N\' Roses, lanzada como sencillo el 3 de octubre de 1987. Es el segundo sencillo del disco Appetite for Destruction y una de las canciones más reconocidas y exitosas del grupo. Ocupó la séptima posición del Billboard Hot 100 y el número 1 en las listas del Reino Unido.', 'Welcome To The Jungle-Guns', 'm3.1.jpg', 'welcometo.mp3', '', '', 200),
(10, 'RICK ASTLEY', 'm4.jpg', '«Never Gonna Give You Up» es una canción dance pop originalmente interpretada por Rick Astley. Fue lanzada como un sencillo del álbum debut de Astley con millones de copias vendidas Whenever You Need Somebody, que fue escrita y producida por Stock Aitken Waterman.', 'Never Gonna Give You Up', 'm4.1.jpg', 'nevergo.mp3', '', '', 200),
(11, 'MADONNA', 'm5.jpg', '«La isla bonita» es una canción interpretada por la cantante estadounidense Madonna, incluida en su tercer álbum de estudio, True Blue (1986). Fue publicada como el quinto y último sencillo del álbum el 25 de febrero de 1987 por la compañía discográfica Sire Records. ', 'La Isla Bonitay-Madonna', 'm5.1.jpg', 'laisla.mp3', '', '', 200),
(12, 'EARTH, WIND & FIRE', 'm6.jpg', '«September» es una canción de la banda Earth, Wind & Fire lanzada como single en 1978 en ARC / Columbia Records .Inicialmente incluido como pista para The Best of Earth, Wind & Fire, vol. 1 , \"September\" tuvo mucho éxito comercial y alcanzó el número  1 en la lista de canciones de Billboard Hot R&B de Estados Unidos.', 'September-Earth, Wind & Fire', 'm6.1.jpg', 'septem.mp3', '', '', 200),
(13, 'Moore Kirmet', 'Moore Kismet.jfif', 'Tiene 16 años y su talento es innegable. Su presencia en la escena del hybrid trap y future bass ha sido llamativa desde sus inicios, y poco a poco ha ido escalando con un estilo único que ha ido evolucionando hasta lograr llamar la atención de los más grandes de la escena.', 'FLAIR', 'Flair.jfif', 'Moore Kismet - Flair (ft. Momma Kismet).mp3', '', '', 500),
(14, 'Firelite', 'Firelite.jfif', 'Firelite es un joven artista de nacionalidad australiana que a principios de año ingresó en el equipo de Dirty Workz. A pesar de que poco a poco se está dando a conocer, en 2021 se va a convertir en uno de los grandes. Con colaboraciones junto a Serzo, DEEZL, Will Sparks, Sephyx o John Harris, Benjamin ha finiquitado un 2020 impresionante. Tiene la capacidad de teletransportar a sus oyentes a otra dimensión con sus épicas melodías; su calidad es innegable.', 'SYNTHSOLDIER', 'Synthsoldier You.jfif', 'Synthsoldier - You (Firelite Remix) (Official Audio).mp3', '', '', 500),
(15, 'Vintage Culture', 'Vintage Culture.jfif', 'Lukas Ruiz –también conocido como Vintage Culture– ha sido uno de los artistas más destacados del 2020. El brasileño lleva años fraguando pacientemente la carrera del que va a ser uno de los artistas de los próximos años, o eso creemos. Colaborar con Tiësto, remezclar a David Guetta y colocar una de sus producciones en el top 1 de Beatport –su “It Is What It Is“– no es algo al alcance de cualquiera. El potencial de Lukas no ha tocado techo, y confiamos en verle en la cima en este 2021.', 'IT IS WHAT IT IS', 'It Is What It Is.jfif', 'It Is What It Is (feat. Elise LeGrow).mp3', '', '', 500),
(16, 'Lastlings', 'Lastlings.jfif', 'Con una carrera relativamente corta, Amy y Josh han dado mucho que hablar tras lanzar su álbum debut “First Contact” el pasado mes de noviembre. Los australianos son miembros de un selecto club al que pertenecen artistas de la talla de RÜFÜS DU SOL o Bob Moses –entre otros– por su calidad, personalidad y sutileza a la hora de crear música. Estamos seguros de que “First Contact” seguirá dando que hablar y algunas remezclas verán la luz. 2021 puede ser un gran año para Lastlings. ', 'FALSE REACTIONS', 'False Reactions.jfif', 'Lastlings - False Reactions (Audio).mp3', '', '', 500),
(17, 'Space 92', 'Space 92.jfif', 'Su trayectoria no ha sido precisamente larga, pero a la evolución repentina del francés no es casualidad. Su techno tan reconocible es hijo del estilo que manda ahora tanto dentro del género, cargado de contundencia y elegancia. Tras más de doce años produciendo, el artista decidió volver a probar suerte con su visión del techno que tanto ha evolucionado a lo largo de la década, y no le ha ido mal hasta el momento. Hay DJs que tras los años adquieren una segunda oportunidad, y en esta Space 92 reinará probablemente de nuevo durante el próximo año.', 'PHOBOS', 'Phobos.jfif', 'Space 92 - Phobos (Original Mix).mp3', '', '', 500),
(18, 'RetroVision', 'RetroVision.jfif', 'El productor francés lleva años demostrando su altísima calidad y su sonido eléctrico y melódico a partes iguales. Aun así, RetroVision no ha conseguido pegar aún un golpe sobre la mesa que le coloque entre los mejores. La cantidad y calidad de temas que saca al año cada vez es mayor, además de ser un artista fijo en sellos como Hexagon y Musical Freedom. Una prueba de ello es su posición en el “Top 101 Producers” de la web 1001 Tracklist, donde su nombre ha escalado 11 posiciones con respecto al año pasado, colocándose en el top 6 en un ranking basado en el propio apoyo de otros DJs.', 'OUT OF TOWN', 'Out of Town.jfif', 'RetroVision  Janee ft. Lunis - Out of Town (My Own Road) (Official Audio).mp3', '', '', 500),
(19, 'BTS', 'imgbts.jpg', 'Es una boy band surcoreana compuesta por 7 miembros, Jimin, RM, V, Suga, J-Hope, Jin y Jungkook, \r\n						debutó con el nombre \'Bangtan Sonyeondan\' en 2013 y actualmente sus acronimos significan \'Beyond the Scene\'.\r\n						Formada en Seúl en 2010 el grupo debutó el 13 de junio de 2013 con la canción “No More Dream” incluida en su primer mini álbum 2 Cool 4 Skool. <br>				\r\n						Ganadores de diveros premios como Billboard Music Awards y American Music Awards. ', 'BLOOD SWEAT AND TEARS', 'bts.png', 'songbts.mp3', '', 'Nombre Fanclub Oficial: BLINK', 600),
(20, 'BLACKPINK', 'imgblackpink.jpg', '    Es una girl group de Corea del Sur formado por YG Entertainment , que consta de las miembros Jisoo , \r\n						Jennie , Rosé y Lisa . El grupo debutó en agosto de 2016 con su álbum sencillo Square One , que contó \r\n						con \" Whistle \" y \" Boombayah \", sus primeras entradas número uno en Gaon Digital Chart de Corea del Sur \r\n						y Billboard World Digital Song Sales chart, respectivamente.\r\n						El nombre de la banda femenina,donde el rosa es \r\n						usado en muchos casos para representar lo lindo, pero BLACKPINK quiere decir que \"lo lindo no lo es todo\". ', 'BLOOD SWEAT AND TEARS', 'blackpink.png', 'songblackpink.mp3', '', 'Nombre Fanclub Oficial: A.R.M.Y', 600),
(21, 'BIGBANG', 'imgbigbang.jpg', 'Es una boy band surcoreana de 5 miembros formada por G-Dragon, T.O.P, Taeyang, Daesung y SeungRi bajo el sello discográfico YG Entertainment. Debutaron el 19 de agosto de 2006 en el concierto del 10º aniversario de YG Family, aunque su primer sencillo, Big Bang, no se publicó hasta el 28 de agosto. ', 'FXXK IT', 'bigbang.jpg', 'songbigbang.mp3', '', 'Nombre Fanclub Oficial: V.I.P', 600),
(22, 'EXO', 'imgexo.jpg', 'Es una boy band surcoreana de K-pop. Formado por S.M. Entertainment en 2011, el grupo debutó en 2012 con doce integrantes separados en dos sub-grupos, EXO-K y EXO-M. Sin embargo actualmente está compuesto por nueve miembros: Xiumin, Suho, Lay, Baekhyun, Chen, Chanyeol, D.O., Kai, y Sehun. Su formación original también incluía a Luhan, Kris y Tao, que salieron luego de demandar a la S.M.', 'LOVE SHOT', 'exo.jpg', 'songexo.mp3', '', 'Nombre Fanclub Oficial: EXO-L', 600),
(23, 'MONSTA X', 'imgmonstax.jpg', 'Es una boy band surcoreana formada por la agencia Starship Entertainment en 2015 a través del programa No.Mercy. El grupo estaba compuesto originalmente por siete integrantes: Shownu, Wonho, Minhyuk, Kihyun, Hyungwon, Joohoney y I.M. No obstante, el 31 de octubre de 2019, Wonho deja el grupo tras haberse visto envuelto en un escándalo. Monsta X debutó el 14 de mayo de 2015 con el lanzamiento del EP Trespass.', 'HERO', 'monstax.jpg', 'songmonstax.mp3', '', 'Nombre Fanclub Oficial: MONBEBE', 600),
(24, 'STRAY KIDS', 'imgstray.jpg', 'Es una boyband surcoreana de ocho integrantes Lee Know, Han, I.N, Felix, Bang Chan, Hyunjin, Seungmin, y Changbin formada por JYP Entertainment a través del reality show del mismo nombre en 2017.Stray Kids lanzó un extended play pre-debut3​el 8 de enero de 2018 e hizo su debut oficial el 25 de marzo del mismo año.', 'GODS MENU', 'kids.jpg', 'songstraykids.mp3', '', 'Nombre Fanclub Oficial: STAY', 600),
(25, 'GIRLS GENERATION', 'imggirls.jpg', 'Es un girl group formado por el sello discográfico SM Entertainment en 2007. El grupo está compuesto por ocho miembros: Taeyeon, Sunny, Tiffany, Hyoyeon, Yuri, Sooyoung, Yoona y Seohyun. El 2009 el grupo alcanzó la fama con el sencillo «Gee», obtuvo el primer lugar en Music Bank de KBS por un récord de nueve semanas y fue nombrada la canción más popular de los años 2000 en Corea del Sur por Melon. Girls\' Generation se consolidó «Tell Me Your Wish (Genie)», «Oh!» y «Run Devil Run».', 'GEE', 'gee.png', 'songgirls.mp3', '', 'Nombre Fanclub Oficial: ES&#128147NE', 600),
(26, '2PAC', 'tupac.jpg', 'Figura del rap de los años 90, artista muy polémico, emblema del estilo \"gangsta\" y con una vida frenética de principio a fin, la muerte de Tupac Shakur, de la que se cumplen veinte años, lo convirtió en un héroe caído y una leyenda para el hip-hop estadounidense siendo considerado el mejor rapero de todos los tiempos.						', 'California Love', 'California_Love.jpg', '2Pac - California Love [Original Version] (320 kbps).mp3', '', '', 400),
(27, 'The Notorious B.I.G', 'notorious.jpg', 'Fue un rapero estadounidense. Biggie de joven traficaba con drogas en Bedford-Stuyvesant. Tras dejar su vida de criminal, decidió hacerse rapero. Lanzó el criticalemente aclamado álbum Ready To Die en 1994 y se convirtió en la figura central del rap de la Costa este, que tanto rivalizaba con la Costa oeste, liderada en este caso por Tupac Shakur.						', 'Juicy', 'juicy.jpg', 'The_Notorious_BIG_-_Juicy_Qoret.com.mp3', '', '', 400),
(28, 'RAKIM', 'rakim.png', 'William Michael Griffin Jr. es un legendario rapero y productor estadounidense más conocido por el alias de Rakim que nació el 28 de enero de 1968 en Nueva York. Comenzó su carrera musical en 1985 y está considerado como uno de los mejores mc’s de la historia, aunque comenzó a ser conocido gracias al magnífico dúo \"Eric B & Rakim\".', 'Paid in Full', 'paid.jpg', 'Paid In Full (TUBIDY-MP3.NET).mp3', '', '', 400),
(29, 'EMINEM', 'eminen.jpg', 'Marshall Bruce Mathers III nació el 17 de octubre de 1972, más conocido como Eminem y también por su álter ego \"Slim Shady\", es un rapero, cantante, productor discográfico y actor estadounidense. Su nombre artístico proviene de la unión de las iniciales de Marshall Mathers: M&M, se hizo conocer por primera vez en 1997 con su primer EP titulado The Slim Shady EP. Es considerado por varios medios como \"El Rey Del Rap y Hip-Hop\"', 'The Real Slim Shady', 'eminem.jpg', 'Eminem - The Real Slim Shady [HD & HQ].mp3', '', '', 400),
(30, 'NAS', 'nas.jpg', '    Nasir bin Olu Dara Jones nació el 14 de septiembre de 1973, más conocido como Nas, es un rapero estadounidense. Creció en los complejos de viviendas Queensbridge en Queens. Hijo de Olu Dara, un trompetista de jazz, Nas saltó a la fama en 1993 tras la grabación de su LP debut Illmatic, considerado como uno de los mejores álbumes de hip hop de todos los tiempos. ', 'The world is yours', 'nas1.jpg', 'Nas-The-World-Is-Yours.mp3', '', '', 400),
(31, 'JAY-Z', 'jay-z.jpg', 'Shawn Corey Carter nació el 4 de diciembre de 1969, más conocido por su nombre artístico Jay-Z, es un rapero, productor, empresario y, ocasionalmente actor estadounidense. Es uno de los artistas de hip-hop más exitosos económicamente en Estados Unidos y mundialmente, y posee un patrimonio neto de más de US$1000 millones en 2020. Ha vendido aproximadamente 75 millones de álbumes en todo el mundo, y ha recibido veintitrés premios Grammy por su trabajo musical, así como numerosas nominaciones adicionales.', '99 Problems', 'jayz.jpg', 'Jay-Z 99 Problems- The Black Album- Explicit. (TUBIDY-MP3.NET).mp3', '', '', 400),
(32, 'The Beatles', 'Beatles.jpg', 'Grupo británico de música rock y pop, el más admirado y popular de la década de 1960 y uno de los más influyentes en la historia de la música moderna.', 'Come Together', 'canbea.jpg', 'cancion1.mp3', '', '', 300),
(33, 'The Rolling Stones', 'Stones.jpg', 'Formado en 1962, a los Rolling Stones se les ha presentado siempre como los rivales históricos de The Beatles. Dentro de esta comparación, los Stones representaron la corriente más agresiva de la música rock, aun cuando alcanzaron el estrellato de mano de la canción I wanna be your man, compuesta por los beatles John Lennon y Paul McCartney.', 'Like A Rolling Stone', 'canroll.jpg', 'cancion2.mp3', '', '', 300),
(34, 'U2', 'U2.jpg', 'U2 es una banda irlandesa de rock fundada en Dublín en 1976. Actualmente cuenta 3 premios Globo de Oro, 5 MTV Video Music Awards, 22 Grammy y 7 Brit Awards; y fue incluida tanto en el Salón de la Fama del Rock and Roll como en la lista de los Cien Mayores Artistas de todos los tiempos de la revista Rolling Stone.', 'I Still Haven\'t Found What I\'m Looking For', 'canu2.jpg', 'cancion3.mp3', '', '', 300),
(35, 'Pink Floyd', 'Pink.jpg', 'Pink Floyd es mucho más que una agrupación de rock progresivo, rock psicodélico, rock sinfónico o espacial. La agrupación de Waters, Gilmour, Mason y Wright (y Barrett) se movió por muchos géneros, y creó o modificó algunos otros, pero en general, su música fue y es grandiosa; cada uno de sus discos se convirtió en una obra maestra del más puro arte, y son un icono cultural en todo el mundo.', 'Another Brick In The Wall', 'canpink.jpg', 'cancion4.mp3', '', '', 300),
(36, 'Led Zeppelin', 'Led.png', 'Surgido a finales de los años 60 en el Reino 	Unido, la influencia del grupo Led Zeppelin es incalculable en la historia del rock.\r\n       					 Su música trasciende cualquier etiqueta, incorporando a su base hard rock y a sus textos de influencia mística o mitológica heterogéneos sonidos que tanto se inspiraron en el blues como en el folk británico o en el funk.', 'The Song Remains the Same', 'canled.jpg', 'cancion5.mp3', '', '', 300),
(37, 'The Who', 'Who.png', 'The Who es una banda de rock de origen británico formada en 1962 y que significó es uno de los grandes referentes del género. 27 de sus canciones estuvieron dentro de los primeros cuarenta puestos de las listas de habla inglesa, 17 de sus álbumes estuvieron en los primeros diez puesto.<', 'I Can\'t Explain', 'canwho.jpg', 'cancion6.mp3', '', '', 300);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

DROP TABLE IF EXISTS `generos`;
CREATE TABLE `generos` (
  `codegen` int(10) NOT NULL,
  `nomgen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`codegen`, `nomgen`) VALUES
(100, 'baladas'),
(200, 'clasicos'),
(300, 'rock'),
(400, 'rap'),
(500, 'electronica'),
(600, 'kpop');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista`
--

DROP TABLE IF EXISTS `lista`;
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

DROP TABLE IF EXISTS `noticia`;
CREATE TABLE `noticia` (
  `codn` varchar(5) NOT NULL,
  `fot` varchar(60) DEFAULT NULL,
  `tit` varchar(100) DEFAULT NULL,
  `txt` varchar(300) DEFAULT NULL,
  `tipo` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`codn`, `fot`, `tit`, `txt`, `tipo`) VALUES
('10001', 'imagenes/01.jpg', 'Olivia Rodrigo & Morgan Wallen Lead MRC Datas 2021 Midyear Charts', 'Las unidades totales de álbumes equivalentes aumentaron un 13,5% en lo que va del año y las transmisiones de canciones bajo demanda aumentaron un 11%. Además: los LP de vinilo son el formato líder para las ventas de álbumes por primera vez a mediados de año desde que MRC Data comenzó a rastrear las ', '1'),
('10002', 'imagenes/002.jpg', 'Megan Fox detalla un poderoso viaje alucinógeno con la ametralladora Kelly', 'Megan Fox habla de vomitar frente a extraños e ir a su propio infierno personal durante su reciente viaje a Costa Rica, donde ella y su novio Machine Gun Kelly tomaron una planta medicinal alucinógena llamada ayahuasca.', '2'),
('10003', 'imagenes/0003.jpg', 'Doja Cat convierte su caída en el escenario en movimientos de baile alucinantes', 'Beyoncé casi se cae durante el espectáculo de medio tiempo del Super Bowl 50 hace cinco años, pero aterrizó de nuevo sobre sus pies: Doja Cat, por otro lado, tuvo una experiencia menos elegante pero supo reírse de sí misma de inmediato.', '2'),
('10004', 'imagenes/004.jpg', 'Conservador de Britney Spears alega que Jamie Spears utilizó 2 millones de dólares del dinero de Sta', 'La conservadora personal de Britney Spears, Jodi Montgomery, alega en nuevos documentos judiciales que el padre de Spears, Jamie, usó $ 2 millones de los fondos de la superestrella del pop en su propia defensa.', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `contrasena`) VALUES
(1, 'jennife', 'Jennifer'),
(2, 'alejan123', 'alejandro'),
(3, 'carlos123', 'carlos daniel');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cancionestop`
--
ALTER TABLE `cancionestop`
  ADD PRIMARY KEY (`code`),
  ADD KEY `codegen` (`codegen`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`codegen`);

--
-- Indices de la tabla `lista`
--
ALTER TABLE `lista`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`codn`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `lista`
--
ALTER TABLE `lista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=789790;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cancionestop`
--
ALTER TABLE `cancionestop`
  ADD CONSTRAINT `h` FOREIGN KEY (`codegen`) REFERENCES `generos` (`codegen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
