-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2016 a las 18:32:51
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `repositorio_academico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_usuario` varchar(8) NOT NULL,
  `num_doc_aprobados` int(11) DEFAULT '0',
  `num_doc_eliminados` int(11) DEFAULT '0',
  `num_coment_eliminados` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_usuario`, `num_doc_aprobados`, `num_doc_eliminados`, `num_coment_eliminados`) VALUES
('00100001', 0, 0, 0),
('00100002', 0, 0, 0),
('00100003', 0, 0, 0),
('00100004', 0, 0, 0),
('00100005', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_usuario` varchar(8) NOT NULL,
  `id_eap` char(4) DEFAULT NULL,
  `telef_contacto` varchar(9) DEFAULT NULL,
  `email` varchar(35) NOT NULL,
  `dir_fotografia` varchar(100) DEFAULT NULL,
  `nivel` tinyint(4) NOT NULL DEFAULT '1',
  `puntos_alumno` int(11) NOT NULL DEFAULT '0',
  `numero_faltas` int(11) NOT NULL DEFAULT '0',
  `direccion_actual` varchar(40) DEFAULT NULL,
  `ubigeo_distrito` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_usuario`, `id_eap`, `telef_contacto`, `email`, `dir_fotografia`, `nivel`, `puntos_alumno`, `numero_faltas`, `direccion_actual`, `ubigeo_distrito`) VALUES
('11200032', '10.2', '986523415', 'pepito@fisi.jamas', '11200032.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('11200151', '10.2', '986523415', 'pepito@fisi.jamas', '11200151.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('11200215', '10.2', '986523415', 'pepito@fisi.jamas', '11200215.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('12200183', '10.2', '986523415', 'pepito@fisi.jamas', '12200183.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('12200186', '10.2', '986523415', 'pepito@fisi.jamas', '12200186.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('12200187', '10.2', '986523415', 'pepito@fisi.jamas', '12200187.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('12200217', '10.2', '986523415', 'pepito@fisi.jamas', '12200217.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('12200222', '10.2', '986523415', 'pepito@fisi.jamas', '12200222.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('13200049', '10.2', '986523415', 'pepito@fisi.jamas', '13200049.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('13200053', '10.2', '986523415', 'pepito@fisi.jamas', '13200053.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('13200054', '10.2', '986523415', 'pepito@fisi.jamas', '13200054.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('13200057', '10.2', '986523415', 'pepito@fisi.jamas', '13200057.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('13200058', '10.2', '986523415', 'pepito@fisi.jamas', '13200058.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('13200060', '10.2', '986523415', 'pepito@fisi.jamas', '13200060.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('13200062', '10.2', '986523415', 'pepito@fisi.jamas', '13200062.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('13200067', '10.2', '986523415', 'pepito@fisi.jamas', '13200067.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('13200068', '10.2', '986523415', 'pepito@fisi.jamas', '13200068.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('13200069', '10.2', '986523415', 'pepito@fisi.jamas', '13200069.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('13200071', '10.2', '986523415', 'pepito@fisi.jamas', '13200071.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('13200113', '10.2', '986523415', 'pepito@fisi.jamas', '13200113.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('13200114', '10.2', '986523415', 'pepito@fisi.jamas', '13200114.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('13200116', '10.2', '986523415', 'pepito@fisi.jamas', '13200116.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('13200117', '10.2', '986523415', 'pepito@fisi.jamas', '13200117.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('13200118', '10.2', '986523415', 'pepito@fisi.jamas', '13200118.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('13200119', '10.2', '986523415', 'pepito@fisi.jamas', '13200119.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('13200129', '10.2', '986523415', 'pepito@fisi.jamas', '13200129.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('13200131', '10.2', '986523415', 'pepito@fisi.jamas', '13200131.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('13200209', '10.2', '986523415', 'pepito@fisi.jamas', '13200209.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('13200210', '10.2', '986523415', 'pepito@fisi.jamas', '13200210.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('13200213', '10.2', '986523415', 'pepito@fisi.jamas', '13200213.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('13200216', '10.2', '986523415', 'pepito@fisi.jamas', '13200216.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('13200217', '10.2', '986523415', 'pepito@fisi.jamas', '13200217.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('13200230', '10.2', '986523415', 'pepito@fisi.jamas', '13200230.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('13200232', '10.2', '986523415', 'pepito@fisi.jamas', '13200232.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120'),
('13200239', '10.2', '986523415', 'pepito@fisi.jamas', '13200239.jpg', 1, 0, 0, 'Av. Del Aire 882', '150120');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id_area` char(4) NOT NULL,
  `nombre_area` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id_area`, `nombre_area`) VALUES
('AC_1', 'Arquitectura de comp'),
('AF_1', 'Administracion y Finanzas'),
('BD_1', 'Base de datos'),
('BI_1', 'Datawarehouse/Inteligenci'),
('CO_1', 'Comunicacion y dinamicas '),
('DS_1', 'Desarrollo Software 1'),
('DS_2', 'Desarrollo Software 2'),
('ES_1', 'Estadistica y probabilida'),
('FS_1', 'Fisica'),
('GE_1', 'Gestion empresarial'),
('IA_1', 'Inteligencia artificial'),
('IE_1', 'Idioma extranjero'),
('IO_1', 'Investigacion Operativa'),
('LC_1', 'Lenguajes, compiladores y'),
('MT_1', 'Matematicas'),
('PR_1', 'Programacion y Algoritmia'),
('PR_2', 'Estructura de datos'),
('PS_1', 'Proyectos de software'),
('PT_1', 'Proyecto de tesis'),
('RS_1', 'Redes y Seguridad'),
('SO_1', 'Sistemas operativos'),
('TS_1', 'Teoria de Sistemas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `id_autor` int(11) NOT NULL,
  `nombre_autor` varchar(35) DEFAULT NULL,
  `apellidos_autor` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`id_autor`, `nombre_autor`, `apellidos_autor`) VALUES
(1, 'Luis', 'Joyanes'),
(2, 'Charles', 'Bell'),
(3, 'Javier', 'Eguiluz Perez'),
(4, 'IBM', 'Global Business Services'),
(5, 'W. H.', 'Inmon'),
(6, 'Andrew S.', 'Tanenbaum'),
(7, 'Jorge', 'Dominguez Chavez'),
(8, 'Philippe', 'Kruchten'),
(9, 'Hamdy A.', 'Taha'),
(10, '', 'Render, Stair, Hanna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autorxbiblio`
--

CREATE TABLE `autorxbiblio` (
  `id_documento` int(11) NOT NULL,
  `id_autor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bibliografia`
--

CREATE TABLE `bibliografia` (
  `id_documento` int(11) NOT NULL,
  `id_tipo_bibl` tinyint(4) DEFAULT NULL,
  `titulo_bibl` varchar(50) NOT NULL,
  `anio_publicacion` smallint(6) NOT NULL DEFAULT '2016'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclo_anual`
--

CREATE TABLE `ciclo_anual` (
  `id_ciclo_anual` char(1) NOT NULL,
  `descripcion_ciclo` char(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciclo_anual`
--

INSERT INTO `ciclo_anual` (`id_ciclo_anual`, `descripcion_ciclo`) VALUES
('0', 'Verano'),
('1', 'Marzo-Julio'),
('2', 'Agosto-Diciembre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `id_documento` int(11) NOT NULL,
  `tema` varchar(30) DEFAULT NULL,
  `semana_dictada` tinyint(4) DEFAULT NULL,
  `anio_dictado` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `votos_favor` decimal(10,0) NOT NULL DEFAULT '0',
  `votos_contra` decimal(10,0) NOT NULL DEFAULT '0',
  `id_cursoXprof` int(11) DEFAULT NULL,
  `id_usuario` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `descripcion`, `votos_favor`, `votos_contra`, `id_cursoXprof`, `id_usuario`) VALUES
(13, 'Este curso es bien cheverengue.', '0', '0', 1, '13200057'),
(14, 'Sufrí como dog pero valió la pena. Aprendí un montón.', '0', '0', 2, '13200113');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id_curso` char(3) NOT NULL,
  `nombre_curso` varchar(35) NOT NULL,
  `num_creditos` tinyint(4) DEFAULT NULL,
  `id_area` char(4) DEFAULT NULL,
  `id_tipo_curso` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id_curso`, `nombre_curso`, `num_creditos`, `id_area`, `id_tipo_curso`) VALUES
('011', 'Calculo 1', 4, 'MT_1', 'O'),
('012', 'Matematica basica 1', 4, 'MT_1', 'O'),
('021', 'Matematicas discretas', 3, 'MT_1', 'O'),
('022', 'Calculo 2', 4, 'MT_1', 'O'),
('023', 'Matematica basica 2', 4, 'MT_1', 'O'),
('024', 'Fisica 1', 4, 'FS_1', 'O'),
('031', 'Ecuaciones diferenciales', 4, 'MT_1', 'O'),
('032', 'Estadistica y probabilidades', 4, 'ES_1', 'O'),
('033', 'Fisica 2', 4, 'FS_1', 'O'),
('034', 'Organizacion y administracion', 3, 'AF_1', 'O'),
('051', 'Base de datos 1', 4, 'BD_1', 'O'),
('052', 'Arquitectura de computadoras', 4, 'AC_1', 'O'),
('061', 'Investigacion de operaciones 1', 4, 'IO_1', 'O'),
('062', 'Sistemas operativos', 4, 'SO_1', 'O'),
('071', 'Investigacion de operaciones 2', 4, 'IO_1', 'O'),
('081', 'Inteligencia artificial', 4, 'IA_1', 'O'),
('101', 'Diseno de aplicaciones web', 2, 'DS_2', 'E'),
('102', 'Robotica', 2, 'AC_1', 'E'),
('103', 'Planeamiento de recursos empresaria', 2, 'GE_1', 'E'),
('104', 'Datawarehouse', 2, 'BI_1', 'E'),
('105', 'Comercio electronico', 2, 'GE_1', 'E'),
('106', 'Redes neuronales', 2, 'IA_1', 'E'),
('111', 'Introd. a la teoria general de sist', 3, 'TS_1', 'O'),
('112', 'Introd. a la computacion e ing. de ', 4, 'PR_1', 'O'),
('113', 'Comunicacion y dinamica de grupo', 2, 'CO_1', 'O'),
('114', 'Idioma extranjero 1', 3, 'IE_1', 'O'),
('121', 'Programacion 1', 4, 'PR_1', 'O'),
('122', 'Idioma extranjero 2', 3, 'IE_1', 'O'),
('131', 'Programacion 2', 4, 'PR_1', 'O'),
('132', 'Idioma extranjero 2', 3, 'IE_1', 'O'),
('141', 'Analisis y diseno de algoritmos', 4, 'PR_1', 'O'),
('142', 'Estructura de datos 1', 4, 'PR_2', 'O'),
('143', 'Metodos numericos', 4, 'IO_1', 'O'),
('144', 'Sistemas digitales', 4, 'AC_1', 'O'),
('145', 'Economia para la gestion', 3, 'AF_1', 'O'),
('146', 'Idioma extranjero 4', 3, 'IE_1', 'O'),
('151', 'Estructura de datos 2', 4, 'PR_2', 'O'),
('152', 'Modelamiento y req. de software', 4, 'DS_1', 'O'),
('153', 'Lenguajes y compiladores', 3, 'LC_1', 'O'),
('154', 'Idioma extranjero 5', 3, 'IE_1', 'O'),
('161', 'Base de datos 2', 4, 'BD_1', 'O'),
('162', 'Diseno de software', 4, 'DS_1', 'O'),
('163', 'Contabilidad de gestion', 3, 'AF_1', 'O'),
('164', 'Idioma extranjero 6', 3, 'IE_1', 'O'),
('171', 'Arquitectura de software', 4, 'DS_1', 'O'),
('172', 'Taller de construc. de software', 4, 'DS_1', 'O'),
('173', 'Redes y transmicion de datos', 4, 'RS_1', 'O'),
('174', 'Gerencia y proyectos de software', 4, 'PS_1', 'O'),
('181', 'Prueba de software', 4, 'DS_2', 'O'),
('182', 'Calidad de software', 4, 'DS_2', 'O'),
('183', 'Seguridad de redes', 4, 'RS_1', 'O'),
('184', 'Gestion de tecnologias de la inform', 4, 'RS_1', 'O'),
('190', 'Creatividad y liderazgo', 2, 'CO_1', 'O'),
('191', 'Etica profesional', 3, 'CO_1', 'O'),
('192', 'Gestion de configuracion y mantenim', 4, 'GE_1', 'O'),
('193', 'Sistemas Inteligentes', 4, 'IA_1', 'O'),
('194', 'Proyecto de tesis 1', 6, 'PT_1', 'O'),
('195', 'Finanzas para la gestion', 4, 'AF_1', 'O'),
('196', 'Inteligencia de negocios', 4, 'BI_1', 'O'),
('197', 'Proyecto de tesis 2', 6, 'PT_1', 'O'),
('198', 'Tendencias en gestion empresarial', 3, 'GE_1', 'O'),
('199', 'Tendencias en ingenieria de softwar', 3, 'GE_1', 'O');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursoxplan`
--

CREATE TABLE `cursoxplan` (
  `id_curso` char(3) NOT NULL,
  `id_plan_estudios` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursoxplan`
--

INSERT INTO `cursoxplan` (`id_curso`, `id_plan_estudios`) VALUES
('011', 1),
('012', 1),
('021', 1),
('022', 1),
('023', 1),
('024', 1),
('031', 1),
('032', 1),
('033', 1),
('034', 1),
('051', 1),
('052', 1),
('061', 1),
('062', 1),
('071', 1),
('081', 1),
('101', 1),
('102', 1),
('103', 1),
('104', 1),
('105', 1),
('106', 1),
('111', 1),
('112', 1),
('113', 1),
('114', 1),
('121', 1),
('122', 1),
('131', 1),
('132', 1),
('141', 1),
('142', 1),
('143', 1),
('144', 1),
('145', 1),
('146', 1),
('151', 1),
('152', 1),
('153', 1),
('154', 1),
('161', 1),
('162', 1),
('163', 1),
('164', 1),
('171', 1),
('172', 1),
('173', 1),
('174', 1),
('181', 1),
('182', 1),
('183', 1),
('184', 1),
('190', 1),
('191', 1),
('192', 1),
('193', 1),
('194', 1),
('195', 1),
('196', 1),
('197', 1),
('198', 1),
('199', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursoxprofesor`
--

CREATE TABLE `cursoxprofesor` (
  `id_cursoXprof` int(11) NOT NULL,
  `id_curso` char(3) DEFAULT NULL,
  `id_profesor` char(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursoxprofesor`
--

INSERT INTO `cursoxprofesor` (`id_cursoXprof`, `id_curso`, `id_profesor`) VALUES
(1, '021', 'PR05'),
(2, '051', 'BD01'),
(3, '161', 'BD02'),
(4, '152', 'DS01'),
(5, '162', 'DS01'),
(6, '024', 'FS01'),
(7, '112', 'PR01'),
(8, '112', 'IA02'),
(9, '061', 'IO01'),
(10, '131', 'PR03'),
(11, '132', 'PR04'),
(12, '154', 'IE01'),
(13, '154', 'IE02'),
(14, '081', 'IA01'),
(15, '173', 'RS01'),
(16, '196', 'BI01'),
(17, '195', 'AF01'),
(18, '011', 'MT04'),
(19, '022', 'MT04'),
(20, '144', 'AC01'),
(21, '062', 'SO01'),
(22, '062', 'SO02'),
(23, '104', 'BI02'),
(24, '101', 'DS02'),
(25, '199', 'GE01'),
(26, '182', 'DS03'),
(27, '142', 'PR06'),
(28, '132', 'IE03'),
(29, '132', 'IE04'),
(30, '113', 'CO01'),
(31, '113', 'CO02'),
(32, '145', 'AF02'),
(33, '145', 'AF03'),
(34, '033', 'FS02'),
(35, '033', 'FS03'),
(36, '192', 'GE02'),
(37, '183', 'RS02'),
(38, '153', 'LC01'),
(39, '171', 'DS04'),
(40, '012', 'MT05'),
(41, '012', 'MT06'),
(42, '012', 'MT07'),
(43, '023', 'MT08'),
(44, '191', 'CO03'),
(45, '191', 'CO04'),
(46, '190', 'CO04'),
(47, '191', 'CO04'),
(48, '141', 'PR07'),
(49, '021', 'MT09'),
(50, '032', 'ES01'),
(51, '032', 'ES02'),
(52, '193', 'IA02'),
(53, '152', 'DS05'),
(54, '152', 'DS01'),
(55, '182', 'BI02'),
(56, '121', 'PR07'),
(57, '145', 'AF04'),
(58, '111', 'TS01'),
(59, '111', 'PR01'),
(60, '031', 'MT10'),
(61, '163', 'AF05'),
(62, '071', 'IO01'),
(63, '184', 'RS03'),
(64, '198', 'BI01'),
(65, '052', 'RS01'),
(66, '172', 'DS06'),
(67, '174', 'GE01'),
(68, '106', 'IA01'),
(69, '191', 'CO04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `ubigeo_departamento` char(2) NOT NULL,
  `nombre_departamento` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`ubigeo_departamento`, `nombre_departamento`) VALUES
('15', 'Lima');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distrito`
--

CREATE TABLE `distrito` (
  `ubigeo_distrito` char(6) NOT NULL,
  `nombre_distrito` varchar(35) NOT NULL,
  `ubigeo_provincia` char(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `distrito`
--

INSERT INTO `distrito` (`ubigeo_distrito`, `nombre_distrito`, `ubigeo_provincia`) VALUES
('150101', 'Lima', '1501'),
('150102', 'Ancon', '1501'),
('150103', 'Ate', '1501'),
('150104', 'Barranco', '1501'),
('150105', 'Brena', '1501'),
('150106', 'Carabayllo', '1501'),
('150107', 'Chaclacayo', '1501'),
('150108', 'Chorrillos', '1501'),
('150109', 'Cieneguilla', '1501'),
('150110', 'Comas', '1501'),
('150111', 'El Agustino', '1501'),
('150112', 'Independencia', '1501'),
('150113', 'Jesus Maria', '1501'),
('150114', 'La Molina', '1501'),
('150115', 'La Victoria', '1501'),
('150116', 'Lince', '1501'),
('150117', 'Los Olivos', '1501'),
('150118', 'Lurigancho', '1501'),
('150119', 'Lurin', '1501'),
('150120', 'Magdalena del Mar', '1501'),
('150121', 'Pueblo Libre', '1501'),
('150122', 'Miraflores', '1501'),
('150123', 'Pachacamac', '1501'),
('150124', 'Pucusana', '1501'),
('150125', 'Puente Piedra', '1501'),
('150126', 'Punta Hermosa', '1501'),
('150127', 'Punta Negra', '1501'),
('150128', 'Rimac', '1501'),
('150129', 'San Bartolo', '1501'),
('150130', 'San Borja', '1501'),
('150131', 'San Isidro', '1501'),
('150132', 'San Juan de Lurigancho', '1501'),
('150133', 'San Juan de Miraflores', '1501'),
('150134', 'San Luis', '1501'),
('150135', 'San Martin de Porres', '1501'),
('150136', 'San Miguel', '1501'),
('150137', 'Santa Anita', '1501'),
('150138', 'Santa Maria del Mar', '1501'),
('150139', 'Santa Rosa', '1501'),
('150140', 'Santiago de Surco', '1501'),
('150141', 'Surquillo', '1501'),
('150142', 'Villa el Salvador', '1501'),
('150143', 'Villa Maria del Triunfo', '1501');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `id_documento` int(11) NOT NULL,
  `fecha_subida` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado_doc` tinyint(4) NOT NULL DEFAULT '0',
  `direccion_archivo` varchar(50) DEFAULT NULL,
  `votos_favor` int(11) NOT NULL DEFAULT '0',
  `votos_contra` int(11) NOT NULL DEFAULT '0',
  `id_usuario` varchar(8) DEFAULT NULL,
  `id_cursoXprof` int(11) DEFAULT NULL,
  `id_tipo_doc` tinyint(4) DEFAULT NULL,
  `id_extension_doc` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`id_documento`, `fecha_subida`, `estado_doc`, `direccion_archivo`, `votos_favor`, `votos_contra`, `id_usuario`, `id_cursoXprof`, `id_tipo_doc`, `id_extension_doc`) VALUES
(1, '2016-06-14 22:43:50', 0, 'examenparcial.pdf', 0, 0, '13200216', 1, 1, 1),
(2, '2016-06-14 22:43:50', 0, 'examenparcial.pdf', 0, 0, '13200117', 1, 1, 1),
(3, '2016-06-14 22:43:50', 0, 'examenparcial.pdf', 0, 0, '13200049', 3, 1, 1),
(4, '2016-06-14 22:43:50', 0, 'examenparcial.pdf', 0, 0, '13200117', 3, 1, 1),
(5, '2016-06-14 22:43:50', 0, 'examenparcial.pdf', 0, 0, '13200117', 4, 1, 1),
(6, '2016-06-14 22:43:50', 0, 'examenparcial.pdf', 0, 0, '13200049', 5, 1, 1),
(7, '2016-06-14 22:43:50', 0, 'examenparcial.pdf', 0, 0, '13200117', 6, 1, 1),
(8, '2016-06-14 22:43:50', 0, 'examenfinal.txt', 0, 0, '13200117', 7, 1, 1),
(9, '2016-06-14 22:43:50', 0, 'examenfinal.txt', 0, 0, '13200049', 8, 1, 1),
(10, '2016-06-14 22:43:50', 0, 'examenfinal.txt', 0, 0, '13200113', 9, 1, 1),
(11, '2016-06-14 22:43:50', 0, 'examenfinal.txt', 0, 0, '13200117', 10, 1, 1),
(12, '2016-06-14 22:43:50', 0, 'examensusti.docx', 0, 0, '13200049', 10, 1, 1),
(13, '2016-06-14 22:43:50', 0, 'examensusti.docx', 0, 0, '13200113', 12, 1, 1),
(14, '2016-06-14 22:43:50', 0, 'examensusti.docx', 0, 0, '13200217', 13, 1, 1),
(15, '2016-06-14 22:43:50', 0, 'examensusti.docx', 0, 0, '13200049', 14, 1, 1),
(16, '2016-06-14 22:43:50', 0, 'examensusti.docx', 0, 0, '13200117', 15, 1, 1),
(17, '2016-06-14 22:43:50', 0, 'examensusti.docx', 0, 0, '13200210', 16, 1, 1),
(18, '2016-06-14 22:43:50', 0, 'examensusti.docx', 0, 0, '13200049', 17, 1, 1),
(19, '2016-06-14 22:43:50', 0, 'examensusti.docx', 0, 0, '13200216', 18, 1, 1),
(20, '2016-06-14 22:43:50', 0, 'examensusti.docx', 0, 0, '13200117', 19, 1, 1),
(21, '2016-06-14 22:43:50', 0, 'examensusti.docx', 0, 0, '13200216', 20, 1, 1),
(22, '2016-06-14 22:43:50', 0, 'examensusti.docx', 0, 0, '13200117', 23, 1, 1),
(23, '2016-06-14 22:43:50', 0, 'examensusti.docx', 0, 0, '13200217', 24, 1, 1),
(24, '2016-06-14 22:43:50', 0, 'examensusti.docx', 0, 0, '13200049', 25, 1, 1),
(25, '2016-06-14 22:43:50', 0, 'examensusti.docx', 0, 0, '13200117', 26, 1, 1),
(26, '2022-06-16 05:00:00', 0, 'Cartilla.jpg', 0, 0, '13200117', 8, 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eap_alumno`
--

CREATE TABLE `eap_alumno` (
  `id_eap` char(4) NOT NULL,
  `nombre_eap` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eap_alumno`
--

INSERT INTO `eap_alumno` (`id_eap`, `nombre_eap`) VALUES
('10.1', 'Ingenieria de sistemas'),
('10.2', 'Ingenieria de software');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_usuario`
--

CREATE TABLE `estado_usuario` (
  `id_estado_usuario` char(1) NOT NULL,
  `nombre_estado_usuario` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado_usuario`
--

INSERT INTO `estado_usuario` (`id_estado_usuario`, `nombre_estado_usuario`) VALUES
('A', 'Subir/Desc'),
('D', 'Descargar'),
('N', 'Admin susp'),
('S', 'Suspendido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion`
--

CREATE TABLE `evaluacion` (
  `id_documento` int(11) NOT NULL,
  `anio_tomado` smallint(6) DEFAULT NULL,
  `id_ciclo_anual` char(18) DEFAULT NULL,
  `id_tipo_evaluacion` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `extension_doc`
--

CREATE TABLE `extension_doc` (
  `id_extension_doc` tinyint(4) NOT NULL,
  `nombre_extension_doc` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `extension_doc`
--

INSERT INTO `extension_doc` (`id_extension_doc`, `nombre_extension_doc`) VALUES
(1, 'pdf'),
(2, 'pptx'),
(3, 'docx'),
(4, 'txt'),
(5, 'zip');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_usuario`
--

CREATE TABLE `historial_usuario` (
  `id_historia` int(11) NOT NULL,
  `id_usuario` varchar(8) DEFAULT NULL,
  `fecha_cambio` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_estado_usuario_antiguo` char(1) NOT NULL,
  `id_estado_usuario_nuevo` char(1) NOT NULL,
  `id_admin_usuario` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historial_usuario`
--

INSERT INTO `historial_usuario` (`id_historia`, `id_usuario`, `fecha_cambio`, `id_estado_usuario_antiguo`, `id_estado_usuario_nuevo`, `id_admin_usuario`) VALUES
(1, '00100003', '2016-06-14 22:37:02', 'A', 'N', '00100001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_estudios`
--

CREATE TABLE `plan_estudios` (
  `id_plan_estudios` tinyint(4) NOT NULL,
  `anio_plan_estudios` smallint(4) DEFAULT NULL,
  `id_eap` char(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plan_estudios`
--

INSERT INTO `plan_estudios` (`id_plan_estudios`, `anio_plan_estudios`, `id_eap`) VALUES
(1, 2009, '10.2'),
(2, 2013, '10.2'),
(3, 2009, '10.1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pre_requisito`
--

CREATE TABLE `pre_requisito` (
  `id_curso` char(3) NOT NULL,
  `id_prereq` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id_profesor` char(4) NOT NULL,
  `nombre_prof` varchar(35) NOT NULL,
  `apell_prof` varchar(35) NOT NULL,
  `email_prof` varchar(50) NOT NULL,
  `titulo_prof` varchar(40) NOT NULL,
  `direccion_foto_prof` varchar(50) DEFAULT NULL,
  `id_sexo` char(18) DEFAULT NULL,
  `id_area` char(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id_profesor`, `nombre_prof`, `apell_prof`, `email_prof`, `titulo_prof`, `direccion_foto_prof`, `id_sexo`, `id_area`) VALUES
('AC01', 'Walter', 'Contreras', 'wcontreras@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/AC01.jpg', 'M', 'AC_1'),
('AF01', 'Antonio', 'Lamas', 'alamasunmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/AF01.jpg', 'M', 'AF_1'),
('AF02', 'Miguel', 'Pinglo', 'mpinglo@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/AF02.jpg', 'M', 'AF_1'),
('AF03', 'Juan', 'Ospino', 'jospino@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/AF03.jpg', 'M', 'AF_1'),
('AF04', 'Javier', 'Pinto', 'jpinto@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/AF04.jpg', 'M', 'AF_1'),
('AF05', 'Josep', 'Ramos', 'jramos@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/AF05.jpg', 'M', 'AF_1'),
('BD01', 'Jonny', 'Pretell', 'jpretell@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/BD01.jpg', 'M', 'BD_1'),
('BD02', 'Jorge Alberto', 'Chavez Salcedo', 'jachavezs@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/BD02.jpg', 'M', 'BD_1'),
('BI01', 'Williams', 'Enriquez Maquina', 'wenriquezm@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/BI01.jpg', 'M', 'BI_1'),
('BI02', 'Arturo', 'Bartra More', 'abartra@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/BI02.jpg', 'M', 'BI_1'),
('CO01', 'Prof', 'Chalco', 'pchalco.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/CO01.jpg', 'M', 'CO_1'),
('CO02', 'Prof', 'Baldoceda', 'pbaldoceda@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/CO02.jpg', 'M', 'CO_1'),
('CO03', 'Prof', 'Oliveros', 'poliveros.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/CO03.jpg', 'M', 'CO_1'),
('CO04', 'Fernando', 'Ceron', 'pceron@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/CO04.jpg', 'M', 'CO_1'),
('DS01', 'Nehil', 'Munoz Casildo', 'nmunozc@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/DS01.jpg', 'M', 'DS_1'),
('DS02', 'Victor', 'Bustamante', 'vbustamante@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/DS02.jpg', 'M', 'DS_2'),
('DS03', 'Prof', 'Sobero Rodriguez', 'soberor@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/DS03.jpg', 'M', 'DS_2'),
('DS04', 'Pablo', 'Lopez Villanueva', 'plopezv@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/DS04.jpg', 'M', 'DS_2'),
('DS05', 'Cesar', 'Alcantara', 'calcantarar@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/DS05.jpg', 'M', 'DS_1'),
('DS06', 'Zhing Fong', 'Lam', 'zlam@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/MT07.jpg', 'F', 'MT_1'),
('ES01', 'Rosario', 'de Päz', 'rdepaz@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/ES01.jpg', 'F', 'ES_1'),
('ES02', 'Lucy', 'Vega', 'lvega@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/ES02.jpg', 'F', 'ES_1'),
('FS01', 'Prof', 'Sisniega Galo', 'psisiniegag@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/PR01.jpg', 'M', 'FS_1'),
('FS02', 'Julian', 'Medina', 'jmedina@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/FS02.jpg', 'M', 'FS_1'),
('FS03', 'Mauro', 'Quiroga', 'maquiroga@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/FS03.jpg', 'M', 'FS_1'),
('GE01', 'Vicente', 'Machado', 'vmachado@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/GE01.jpg', 'M', 'GE_1'),
('GE02', 'Lenis', 'Wong', 'lwong@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/GE02.jpg', 'M', 'GE_1'),
('IA01', 'Juan', 'Gamarra Moreno', 'jgamarram@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/IA01.jpg', 'M', 'IA_1'),
('IA02', 'Carlos E.', 'Chavez Herrera', 'cchavezh@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/PR02.jpg', 'M', 'PR_1'),
('IE01', 'Mervil', 'Vera Cartagena', 'mverac@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/IE01.jpg', 'M', 'IE_1'),
('IE02', 'Frank', 'Espinoza Ramirez', 'fespinozar@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/IE02.jpg', 'M', 'IE_1'),
('IE03', 'Maria', 'Garcia Lorca', 'mgarcia@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/IE03.jpg', 'F', 'IE_1'),
('IE04', 'Raul Javier', 'Garcia Rojas', 'rgarciar@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/IE04.jpg', 'M', 'IE_1'),
('IO01', 'Lucio', 'Malazques', 'lmalazques@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/IO01.jpg', 'M', 'IO_1'),
('LC01', 'Jaime', 'Pariona Quispe', 'jparionaq@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/LC01.jpg', 'M', 'LC_1'),
('MT01', 'Juan Roberto', 'Simpe Fernandez', 'jrsimpef@unmsm.edu.pe', 'Mg. Ciencias Matematicas', 'D:/foto_profesores/MT01.jpg', 'M', 'MT_1'),
('MT02', 'Pedro Pablo', 'Yerena Salcedo', 'ppyerenas@unmsm.edu.pe', 'Lic. Matematicas', 'D:/foto_profesores/MT02.jpg', 'M', 'MT_1'),
('MT03', 'Patricia Maria', 'Salazar Bedoya', 'pmsalazarb@unmsm.edu.pe', 'Mg. Ciencias Matematicas', 'D:/foto_profesores/MT03.jpg', 'F', 'MT_1'),
('MT04', 'Prof', 'Castillo', 'castillo@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/MT04.jpg', 'M', 'MT_1'),
('MT05', 'Prof', 'Padilla', 'ppadilla@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/MT05.jpg', 'M', 'MT_1'),
('MT06', 'Prof', 'Chupayo', 'pchupayo@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/MT06.jpg', 'M', 'MT_1'),
('MT07', 'Prof', 'Pescoran', 'perscoran@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/MT07.jpg', 'F', 'MT_1'),
('MT08', 'Raul Javier', 'Carhuapoma', 'rcarhuapoma@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/MT08.jpg', 'M', 'MT_1'),
('MT09', 'Daniel', 'Quinto', 'dquinto@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/MT09.jpg', 'M', 'MT_1'),
('MT10', 'Ernesto', 'Armas', 'earmas@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/MT10.jpg', 'M', 'MT_1'),
('PR01', 'Norberto Ulises', 'Roman Concha', 'nromanc@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/PR01.jpg', 'M', 'PR_1'),
('PR03', 'Luis Angel', 'Guerra Grados', 'lguerrag1@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/PR03.jpg', 'M', 'PR_1'),
('PR04', 'Javier', 'Cabrera Diaz', 'jcabrerad@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/PR04.jpg', 'M', 'PR_1'),
('PR05', 'Santiago', 'Moquillaza Henriquez', 'samoquillazah@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/MT04.jpg', 'M', 'MT_1'),
('PR06', 'Juan', 'Arredondo', 'jarredondo@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/PR06.jpg', 'M', 'PR_2'),
('PR07', 'Robert', 'Espinoza Dominguez', 'respinozad@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/PR07.jpg', 'M', 'PR_1'),
('RS01', 'Juan Carlos', 'Gonzales', 'jcgonzales@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/RS01.jpg', 'M', 'RS_1'),
('RS02', 'Jorge', 'Pantoja', 'jpantoja@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/RS02.jpg', 'M', 'RS_1'),
('RS03', 'Jose', 'Perez Quintanilla', 'jperezq@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/RS03.jpg', 'M', 'RS_1'),
('SO01', 'Jorge', 'Diaz Munante', 'jdiazm@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/SO01.jpg', 'M', 'SO_1'),
('SO02', 'Carlos Enrique', 'Yanez Duran', 'cyanezd@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/SO2.jpg', 'M', 'SO_1'),
('TS01', 'Roman', 'Escobedo', 'rescobedo@unmsm.edu.pe', 'Lic. Ing. de Sistemas', 'C:/repositorio/fotos_profesores/TS01.jpg', 'M', 'TS_1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `ubigeo_provincia` char(4) NOT NULL,
  `nombre_provincia` varchar(28) NOT NULL,
  `ubigeo_departamento` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`ubigeo_provincia`, `nombre_provincia`, `ubigeo_departamento`) VALUES
('1501', 'Lima', '15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `id_sexo` char(1) NOT NULL,
  `nombre_sexo` char(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`id_sexo`, `nombre_sexo`) VALUES
('F', 'Femenino'),
('M', 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_bibliografia`
--

CREATE TABLE `tipo_bibliografia` (
  `id_tipo_bibl` tinyint(4) NOT NULL,
  `nombre_tipo_bibl` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_bibliografia`
--

INSERT INTO `tipo_bibliografia` (`id_tipo_bibl`, `nombre_tipo_bibl`) VALUES
(1, 'Libro'),
(2, 'Paper'),
(3, 'Tesis');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_curso`
--

CREATE TABLE `tipo_curso` (
  `id_tipo_curso` char(1) NOT NULL,
  `nombre_tipo_curso` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_curso`
--

INSERT INTO `tipo_curso` (`id_tipo_curso`, `nombre_tipo_curso`) VALUES
('E', 'Electivo'),
('L', 'Alternativo'),
('O', 'Obligatorio'),
('P', 'Optativo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id_tipo_doc` tinyint(4) NOT NULL,
  `nombre_tipo_doc` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id_tipo_doc`, `nombre_tipo_doc`) VALUES
(1, 'Evaluacion'),
(2, 'Bibliografia'),
(3, 'Clases');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_evaluacion`
--

CREATE TABLE `tipo_evaluacion` (
  `id_tipo_evaluacion` tinyint(4) NOT NULL,
  `nombre_tipo_eval` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_evaluacion`
--

INSERT INTO `tipo_evaluacion` (`id_tipo_evaluacion`, `nombre_tipo_eval`) VALUES
(1, 'Prac Dirigida'),
(2, 'Prac calificada'),
(3, 'Examen parcial'),
(4, 'Examen final');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` char(1) NOT NULL,
  `nombre_tipo_usuario` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo_usuario`, `nombre_tipo_usuario`) VALUES
('A', 'Administrador'),
('S', 'Alumno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` varchar(8) NOT NULL,
  `nombre_usuario` varchar(20) NOT NULL,
  `apellidos_usuario` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_sexo` char(1) DEFAULT NULL,
  `id_estado_usuario` char(1) DEFAULT NULL,
  `id_tipo_usuario` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `apellidos_usuario`, `password`, `fecha_creacion`, `id_sexo`, `id_estado_usuario`, `id_tipo_usuario`) VALUES
('00100001', 'Alejandro', 'Chavez', '00100001', '2016-06-14 22:37:02', 'M', 'A', 'A'),
('00100002', 'Camilo Gerardo', 'Armas Yalico', '00100002', '2016-06-14 22:37:02', 'M', 'A', 'A'),
('00100003', 'Jorge', 'de la Cruz Padilla', '00100003', '2016-06-14 22:37:02', 'M', 'N', 'A'),
('00100004', 'Kremlin Stwart', 'Huaman Santos', '00100004', '2016-06-14 22:37:02', 'M', 'A', 'A'),
('00100005', 'Flavio Alonso', 'Bravo Santos', '00100005', '2016-06-14 22:37:02', 'M', 'A', 'A'),
('11200032', 'Luis', 'Campos Rubina', '11200032', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('11200151', 'Jean Carlos', 'Palomino Carhuallanq', '11200151', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('11200215', 'Jerson Victor', 'Estacio Garcia', '11200215', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('12200183', 'Jhon Cesar ', 'Barrantes Cuba', '12200183', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('12200186', 'Juan Rodrigo', 'Chavez Vasquez', '12200186', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('12200187', 'Giancarlos Junior ', 'Claudio Zavaleta', '12200187', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('12200217', 'Cesar Nicolas ', 'Barrantes Cáceres', '12200217', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('12200222', 'Ricardo', 'Condor Aranda', '12200222', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('13200049', 'Camilo Gerardo', 'Armas Yalico', '13200049', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('13200053', 'Chavez Gutierrez', 'Chavez Gutierrez', '13200053', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('13200054', 'Christian Angel', 'Cósar Garcia', '13200054', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('13200057', 'Franco Eduardo', 'Jiménez Delesma', '13200057', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('13200058', 'Luiz Augusto', 'Kawai Kohatsu', '13200058', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('13200060', 'Christiam', 'Mendives Chocos', '13200060', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('13200062', 'Jean Carlos', 'Ramos Cruz', '13200062', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('13200067', 'Victor Percy', 'Tataje Guzman', '13200067', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('13200068', 'Juan Ramiro', 'Valentin Mejía', '13200068', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('13200069', 'Edson Joao', 'Vega Pairazaman', '13200069', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('13200071', 'Jose Miguel', 'Zea Guerrero', '13200071', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('13200113', 'Diego Alonso', 'Guerra Cruzado', '13200113', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('13200114', 'Shany Sonaly ', 'Huaypar Sotelo', '13200114', '2016-06-14 22:37:02', 'F', 'A', 'S'),
('13200116', 'Jorge', 'De la Cruz Padilla', '13200116', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('13200117', 'Jorge Martin', 'Alamo Castillo', '13200117', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('13200118', 'Christian Antonio', 'Castellanos Valesmor', '13200118', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('13200119', 'German', 'De la Cruz De la Cru', '13200119', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('13200129', 'Josafat', 'Vara Huayta', '13200129', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('13200131', 'Lucero del Pilar', 'Liza Puican', '13200131', '2016-06-14 22:37:02', 'F', 'A', 'S'),
('13200209', 'Victor Miguel', 'Arotuma Martinez', '13200209', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('13200210', 'Magaly Esther', 'Balta Vilca', '13200210', '2016-06-14 22:37:02', 'F', 'A', 'S'),
('13200213', 'Alejandro Enrique', 'Chavez Arzapalo', '13200213', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('13200216', 'Edwin Junior', 'Deza Culque', '13200216', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('13200217', 'Exxel Pool', 'Elera Ato', '13200217', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('13200230', 'Jose', 'Rojas Polino', '13200230', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('13200232', 'Gregory Yoel', 'Sanchez Rios', '13200232', '2016-06-14 22:37:02', 'M', 'A', 'S'),
('13200239', 'Daniel Isaias', 'Neciosup Morffino', '13200239', '2016-06-14 22:37:02', 'M', 'A', 'S');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `R_18` (`ubigeo_distrito`),
  ADD KEY `R_19` (`id_eap`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_autor`);

--
-- Indices de la tabla `autorxbiblio`
--
ALTER TABLE `autorxbiblio`
  ADD PRIMARY KEY (`id_documento`,`id_autor`),
  ADD KEY `R_42` (`id_autor`);

--
-- Indices de la tabla `bibliografia`
--
ALTER TABLE `bibliografia`
  ADD PRIMARY KEY (`id_documento`),
  ADD KEY `R_36` (`id_tipo_bibl`);

--
-- Indices de la tabla `ciclo_anual`
--
ALTER TABLE `ciclo_anual`
  ADD PRIMARY KEY (`id_ciclo_anual`);

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `R_10` (`id_cursoXprof`),
  ADD KEY `R_12` (`id_usuario`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `R_45` (`id_area`),
  ADD KEY `R_51` (`id_tipo_curso`);

--
-- Indices de la tabla `cursoxplan`
--
ALTER TABLE `cursoxplan`
  ADD PRIMARY KEY (`id_curso`,`id_plan_estudios`),
  ADD KEY `R_77` (`id_plan_estudios`);

--
-- Indices de la tabla `cursoxprofesor`
--
ALTER TABLE `cursoxprofesor`
  ADD PRIMARY KEY (`id_cursoXprof`),
  ADD KEY `R_8` (`id_curso`),
  ADD KEY `R_9` (`id_profesor`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`ubigeo_departamento`);

--
-- Indices de la tabla `distrito`
--
ALTER TABLE `distrito`
  ADD PRIMARY KEY (`ubigeo_distrito`),
  ADD KEY `R_17` (`ubigeo_provincia`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`id_documento`),
  ADD KEY `R_4` (`id_usuario`),
  ADD KEY `R_11` (`id_cursoXprof`),
  ADD KEY `R_29` (`id_tipo_doc`),
  ADD KEY `R_52` (`id_extension_doc`);

--
-- Indices de la tabla `eap_alumno`
--
ALTER TABLE `eap_alumno`
  ADD PRIMARY KEY (`id_eap`);

--
-- Indices de la tabla `estado_usuario`
--
ALTER TABLE `estado_usuario`
  ADD PRIMARY KEY (`id_estado_usuario`);

--
-- Indices de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD PRIMARY KEY (`id_documento`),
  ADD KEY `R_34` (`id_ciclo_anual`),
  ADD KEY `R_35` (`id_tipo_evaluacion`);

--
-- Indices de la tabla `extension_doc`
--
ALTER TABLE `extension_doc`
  ADD PRIMARY KEY (`id_extension_doc`);

--
-- Indices de la tabla `historial_usuario`
--
ALTER TABLE `historial_usuario`
  ADD PRIMARY KEY (`id_historia`),
  ADD KEY `R_48` (`id_usuario`),
  ADD KEY `R_80` (`id_admin_usuario`),
  ADD KEY `R_49` (`id_estado_usuario_antiguo`),
  ADD KEY `R_50` (`id_estado_usuario_nuevo`);

--
-- Indices de la tabla `plan_estudios`
--
ALTER TABLE `plan_estudios`
  ADD PRIMARY KEY (`id_plan_estudios`),
  ADD KEY `R_61` (`id_eap`);

--
-- Indices de la tabla `pre_requisito`
--
ALTER TABLE `pre_requisito`
  ADD PRIMARY KEY (`id_curso`,`id_prereq`),
  ADD KEY `R_44` (`id_prereq`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id_profesor`),
  ADD KEY `R_33` (`id_sexo`),
  ADD KEY `R_46` (`id_area`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`ubigeo_provincia`),
  ADD KEY `R_16` (`ubigeo_departamento`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id_sexo`);

--
-- Indices de la tabla `tipo_bibliografia`
--
ALTER TABLE `tipo_bibliografia`
  ADD PRIMARY KEY (`id_tipo_bibl`);

--
-- Indices de la tabla `tipo_curso`
--
ALTER TABLE `tipo_curso`
  ADD PRIMARY KEY (`id_tipo_curso`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id_tipo_doc`);

--
-- Indices de la tabla `tipo_evaluacion`
--
ALTER TABLE `tipo_evaluacion`
  ADD PRIMARY KEY (`id_tipo_evaluacion`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `R_32` (`id_sexo`),
  ADD KEY `R_47` (`id_estado_usuario`),
  ADD KEY `R_55` (`id_tipo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `id_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `cursoxprofesor`
--
ALTER TABLE `cursoxprofesor`
  MODIFY `id_cursoXprof` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `extension_doc`
--
ALTER TABLE `extension_doc`
  MODIFY `id_extension_doc` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `historial_usuario`
--
ALTER TABLE `historial_usuario`
  MODIFY `id_historia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `plan_estudios`
--
ALTER TABLE `plan_estudios`
  MODIFY `id_plan_estudios` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `R_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `R_18` FOREIGN KEY (`ubigeo_distrito`) REFERENCES `distrito` (`ubigeo_distrito`) ON UPDATE CASCADE,
  ADD CONSTRAINT `R_19` FOREIGN KEY (`id_eap`) REFERENCES `eap_alumno` (`id_eap`) ON UPDATE CASCADE,
  ADD CONSTRAINT `R_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `autorxbiblio`
--
ALTER TABLE `autorxbiblio`
  ADD CONSTRAINT `R_41` FOREIGN KEY (`id_documento`) REFERENCES `bibliografia` (`id_documento`),
  ADD CONSTRAINT `R_42` FOREIGN KEY (`id_autor`) REFERENCES `autor` (`id_autor`);

--
-- Filtros para la tabla `bibliografia`
--
ALTER TABLE `bibliografia`
  ADD CONSTRAINT `R_36` FOREIGN KEY (`id_tipo_bibl`) REFERENCES `tipo_bibliografia` (`id_tipo_bibl`),
  ADD CONSTRAINT `bibliografia_ibfk_1` FOREIGN KEY (`id_documento`) REFERENCES `documento` (`id_documento`) ON DELETE CASCADE;

--
-- Filtros para la tabla `clases`
--
ALTER TABLE `clases`
  ADD CONSTRAINT `R_74` FOREIGN KEY (`id_documento`) REFERENCES `documento` (`id_documento`) ON DELETE CASCADE;

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `R_10` FOREIGN KEY (`id_cursoXprof`) REFERENCES `cursoxprofesor` (`id_cursoXprof`),
  ADD CONSTRAINT `R_12` FOREIGN KEY (`id_usuario`) REFERENCES `alumno` (`id_usuario`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `R_45` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `R_51` FOREIGN KEY (`id_tipo_curso`) REFERENCES `tipo_curso` (`id_tipo_curso`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `cursoxplan`
--
ALTER TABLE `cursoxplan`
  ADD CONSTRAINT `R_76` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`),
  ADD CONSTRAINT `R_77` FOREIGN KEY (`id_plan_estudios`) REFERENCES `plan_estudios` (`id_plan_estudios`);

--
-- Filtros para la tabla `cursoxprofesor`
--
ALTER TABLE `cursoxprofesor`
  ADD CONSTRAINT `R_8` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`) ON UPDATE CASCADE,
  ADD CONSTRAINT `R_9` FOREIGN KEY (`id_profesor`) REFERENCES `profesor` (`id_profesor`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `distrito`
--
ALTER TABLE `distrito`
  ADD CONSTRAINT `R_17` FOREIGN KEY (`ubigeo_provincia`) REFERENCES `provincia` (`ubigeo_provincia`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `documento`
--
ALTER TABLE `documento`
  ADD CONSTRAINT `R_11` FOREIGN KEY (`id_cursoXprof`) REFERENCES `cursoxprofesor` (`id_cursoXprof`),
  ADD CONSTRAINT `R_29` FOREIGN KEY (`id_tipo_doc`) REFERENCES `tipo_documento` (`id_tipo_doc`) ON UPDATE CASCADE,
  ADD CONSTRAINT `R_4` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `R_52` FOREIGN KEY (`id_extension_doc`) REFERENCES `extension_doc` (`id_extension_doc`);

--
-- Filtros para la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD CONSTRAINT `R_34` FOREIGN KEY (`id_ciclo_anual`) REFERENCES `ciclo_anual` (`id_ciclo_anual`),
  ADD CONSTRAINT `R_35` FOREIGN KEY (`id_tipo_evaluacion`) REFERENCES `tipo_evaluacion` (`id_tipo_evaluacion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `evaluacion_ibfk_1` FOREIGN KEY (`id_documento`) REFERENCES `documento` (`id_documento`) ON DELETE CASCADE;

--
-- Filtros para la tabla `historial_usuario`
--
ALTER TABLE `historial_usuario`
  ADD CONSTRAINT `R_48` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `R_49` FOREIGN KEY (`id_estado_usuario_antiguo`) REFERENCES `estado_usuario` (`id_estado_usuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `R_50` FOREIGN KEY (`id_estado_usuario_nuevo`) REFERENCES `estado_usuario` (`id_estado_usuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `R_80` FOREIGN KEY (`id_admin_usuario`) REFERENCES `usuario` (`id_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `plan_estudios`
--
ALTER TABLE `plan_estudios`
  ADD CONSTRAINT `R_61` FOREIGN KEY (`id_eap`) REFERENCES `eap_alumno` (`id_eap`);

--
-- Filtros para la tabla `pre_requisito`
--
ALTER TABLE `pre_requisito`
  ADD CONSTRAINT `R_43` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`) ON UPDATE CASCADE,
  ADD CONSTRAINT `R_44` FOREIGN KEY (`id_prereq`) REFERENCES `curso` (`id_curso`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `R_33` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id_sexo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `R_46` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD CONSTRAINT `R_16` FOREIGN KEY (`ubigeo_departamento`) REFERENCES `departamento` (`ubigeo_departamento`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `R_32` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id_sexo`),
  ADD CONSTRAINT `R_47` FOREIGN KEY (`id_estado_usuario`) REFERENCES `estado_usuario` (`id_estado_usuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `R_55` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
