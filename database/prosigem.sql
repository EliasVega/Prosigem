-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2020 a las 22:21:03
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prosigem`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_economicas`
--

CREATE TABLE `actividad_economicas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `actividad_economicas`
--

INSERT INTO `actividad_economicas` (`id`, `codigo`, `descripcion`) VALUES
(1, 111, 'Cultivo de cereales (excepto arroz), legumbres y semillas oleaginosas'),
(2, 112, 'Cultivo de arroz'),
(3, 113, 'Cultivo de hortalizas, raíces y tubérculos'),
(4, 114, 'Cultivo de tabaco'),
(5, 115, 'Cultivo de plantas textiles'),
(6, 119, 'Otros cultivos transitorios n.c.p.'),
(7, 121, 'Cultivo de frutas tropicales y subtropicales'),
(8, 122, 'Cultivo de plátano y banano'),
(9, 123, 'Cultivo de café'),
(10, 124, 'Cultivo de caña de azúcar'),
(11, 125, 'Cultivo de flor de corte'),
(12, 126, 'Cultivo de palma para aceite (palma africana) y otros frutos oleaginosos'),
(13, 127, 'Cultivo de plantas con las que se preparan bebidas'),
(14, 128, 'Cultivo de especias y de plantas aromáticas y medicinales'),
(15, 129, 'Otros cultivos permanentes n.c.p.'),
(16, 130, 'Propagación de plantas (actividades de los viveros, excepto viveros forestales)'),
(17, 141, 'Cría de ganado bovino y bufalino'),
(18, 142, 'Cría de caballos y otros equinos'),
(19, 143, 'Cría de ovejas y cabras'),
(20, 144, 'Cría de ganado porcino'),
(21, 145, 'Cría de aves de corral'),
(22, 149, 'Cría de otros animales n.c.p.'),
(23, 150, 'Explotación mixta (agrícola y pecuaria)'),
(24, 161, 'Actividades de apoyo a la agricultura'),
(25, 162, 'Actividades de apoyo a la ganadería'),
(26, 163, 'Actividades posteriores a la cosecha'),
(27, 164, 'Tratamiento de semillas para propagación'),
(28, 170, 'Caza ordinaria y mediante trampas y actividades de servicios conexas'),
(29, 210, 'Silvicultura y otras actividades forestales'),
(30, 220, 'Extracción de madera'),
(31, 230, 'Recolección de productos forestales diferentes a la madera'),
(32, 240, 'Servicios de apoyo a la silvicultura'),
(33, 311, 'Pesca marítima'),
(34, 312, 'Pesca de agua dulce'),
(35, 321, 'Acuicultura marítima'),
(36, 322, 'Acuicultura de agua dulce'),
(37, 510, 'Extracción de hulla (carbón de piedra)'),
(38, 520, 'Extracción de carbón lignito'),
(39, 610, 'Extracción de petróleo crudo'),
(40, 620, 'Extracción de gas natural'),
(41, 710, 'Extracción de minerales de hierro'),
(42, 721, 'Extracción de minerales de uranio y de torio'),
(43, 722, 'Extracción de oro y otros metales preciosos'),
(44, 723, 'Extracción de minerales de níquel'),
(45, 729, 'Extracción de otros minerales metalíferos no ferrosos n.c.p.'),
(46, 811, 'Extracción de piedra, arena, arcillas comunes, yeso y anhidrita'),
(47, 812, 'Extracción de arcillas de uso industrial, caliza, caolín y bentonitas'),
(48, 820, 'Extracción de esmeraldas, piedras preciosas y semipreciosas'),
(49, 891, 'Extracción de minerales para la fabricación de abonos y productos químicos'),
(50, 892, 'Extracción de halita (sal)'),
(51, 899, 'Extracción de otros minerales no metálicos n.c.p.'),
(52, 910, 'Actividades de apoyo para la extracción de petróleo y de gas natural'),
(53, 990, 'Actividades de apoyo para otras actividades de explotación de minas y canteras'),
(54, 1011, 'Procesamiento y conservación de carne y productos cárnicos'),
(55, 1012, 'Procesamiento y conservación de pescados, crustáceos y moluscos'),
(56, 1020, 'Procesamiento y conservación de frutas, legumbres, hortalizas y tubérculos'),
(57, 1030, 'Elaboración de aceites y grasas de origen vegetal y animal'),
(58, 1040, 'Elaboración de productos lácteos'),
(59, 1051, 'Elaboración de productos de molinería'),
(60, 1052, 'Elaboración de almidones y productos derivados del almidón'),
(61, 1061, 'Trilla de café'),
(62, 1062, 'Descafeinado, tostión y molienda del café'),
(63, 1063, 'Otros derivados del café'),
(64, 1071, 'Elaboración y refinación de azúcar'),
(65, 1072, 'Elaboración de panela'),
(66, 1081, 'Elaboración de productos de panadería'),
(67, 1082, 'Elaboración de cacao, chocolate y productos de confitería'),
(68, 1083, 'Elaboración de macarrones, fideos, alcuzcuz y productos farináceos similares'),
(69, 1084, 'Elaboración de comidas y platos preparados'),
(70, 1089, 'Elaboración de otros productos alimenticios n.c.p.'),
(71, 1090, 'Elaboración de alimentos preparados para animales'),
(72, 1101, 'Destilación, rectificación y mezcla de bebidas alcohólicas'),
(73, 1102, 'Elaboración de bebidas fermentadas no destiladas'),
(74, 1103, 'Producción de malta, elaboración de cervezas y otras bebidas malteadas'),
(75, 1104, 'Elaboración de bebidas no alcohólicas, producción de aguas minerales y de otras aguas embotelladas'),
(76, 1200, 'Elaboración de productos de tabaco'),
(77, 1311, 'Preparación e hilatura de fibras textiles'),
(78, 1312, 'Tejeduría de productos textiles'),
(79, 1313, 'Acabado de productos textiles'),
(80, 1391, 'Fabricación de tejidos de punto y ganchillo'),
(81, 1392, 'Confección de artículos con materiales textiles, excepto prendas de vestir'),
(82, 1393, 'Fabricación de tapetes y alfombras para pisos'),
(83, 1394, 'Fabricación de cuerdas, cordeles, cables, bramantes y redes'),
(84, 1399, 'Fabricación de otros artículos textiles n.c.p.'),
(85, 1410, 'Confección de prendas de vestir, excepto prendas de piel'),
(86, 1420, 'Fabricación de artículos de piel'),
(87, 1430, 'Fabricación de artículos de punto y ganchillo'),
(88, 1511, 'Curtido y recurtido de cueros; recurtido y teñido de pieles'),
(89, 1512, 'Fabricación de artículos de viaje, bolsos de mano y artículos similares elaborados en cuero, y fabricación de artículos de talabartería y guarnicionería'),
(90, 1513, 'Fabricación de artículos de viaje, bolsos de mano y artículos similares; artículos de talabartería y guarnicionería elaborados en otros materiales'),
(91, 1521, 'Fabricación de calzado de cuero y piel, con cualquier tipo de suela'),
(92, 1522, 'Fabricación de otros tipos de calzado, excepto calzado de cuero y piel'),
(93, 1523, 'Fabricación de partes del calzado'),
(94, 1610, 'Aserrado, acepillado e impregnación de la madera'),
(95, 1620, 'Fabricación de hojas de madera para enchapado; fabricación de tableros contrachapados, tableros laminados, tableros de partículas y otros tableros y paneles'),
(96, 1630, 'Fabricación de partes y piezas de madera, de carpintería y ebanistería para la construcción'),
(97, 1640, 'Fabricación de recipientes de madera'),
(98, 1690, 'Fabricación de otros productos de madera; fabricación de artículos de corcho, cestería y espartería'),
(99, 1701, 'Fabricación de pulpas (pastas) celulósicas; papel y cartón'),
(100, 1702, 'Fabricación de papel y cartón ondulado (corrugado); fabricación de envases, empaques y de embalajes de papel y cartón.'),
(101, 1709, 'Fabricación de otros artículos de papel y cartón'),
(102, 1811, 'Actividades de impresión'),
(103, 1812, 'Actividades de servicios relacionados con la impresión'),
(104, 1820, 'Producción de copias a partir de grabaciones originales'),
(105, 1910, 'Fabricación de productos de hornos de coque'),
(106, 1921, 'Fabricación de productos de la refinación del petróleo'),
(107, 1922, 'Actividad de mezcla de combustibles'),
(108, 2011, 'Fabricación de sustancias y productos químicos básicos'),
(109, 2012, 'Fabricación de abonos y compuestos inorgánicos nitrogenados'),
(110, 2013, 'Fabricación de plásticos en formas primarias'),
(111, 2014, 'Fabricación de caucho sintético en formas primarias'),
(112, 2021, 'Fabricación de plaguicidas y otros productos químicos de uso agropecuario'),
(113, 2022, 'Fabricación de pinturas, barnices y revestimientos similares, tintas para impresión y masillas'),
(114, 2023, 'Fabricación de jabones y detergentes, preparados para limpiar y pulir; perfumes y preparados de tocador'),
(115, 2029, 'Fabricación de otros productos químicos n.c.p.'),
(116, 2030, 'Fabricación de fibras sintéticas y artificiales'),
(117, 2100, 'Fabricación de productos farmacéuticos, sustancias químicas medicinales y productos botánicos de uso farmacéutico'),
(118, 2211, 'Fabricación de llantas y neumáticos de caucho'),
(119, 2212, 'Reencauche de llantas usadas'),
(120, 2219, 'Fabricación de formas básicas de caucho y otros productos de caucho n.c.p.'),
(121, 2221, 'Fabricación de formas básicas de plástico'),
(122, 2229, 'Fabricación de artículos de plástico n.c.p.'),
(123, 2310, 'Fabricación de vidrio y productos de vidrio'),
(124, 2391, 'Fabricación de productos refractarios'),
(125, 2392, 'Fabricación de materiales de arcilla para la construcción'),
(126, 2393, 'Fabricación de otros productos de cerámica y porcelana'),
(127, 2394, 'Fabricación de cemento, cal y yeso'),
(128, 2395, 'Fabricación de artículos de hormigón, cemento y yeso'),
(129, 2396, 'Corte, tallado y acabado de la piedra'),
(130, 2399, 'Fabricación de otros productos minerales no metálicos n.c.p.'),
(131, 2410, 'Industrias básicas de hierro y de acero'),
(132, 2421, 'Industrias básicas de metales preciosos'),
(133, 2429, 'Industrias básicas de otros metales no ferrosos'),
(134, 2431, 'Fundición de hierro y de acero'),
(135, 2432, 'Fundición de metales no ferrosos'),
(136, 2511, 'Fabricación de productos metálicos para uso estructural'),
(137, 2512, 'Fabricación de tanques, depósitos y recipientes de metal, excepto los utilizados para el envase o transporte de mercancías'),
(138, 2513, 'Fabricación de generadores de vapor, excepto calderas de agua caliente para calefacción central'),
(139, 2520, 'Fabricación de armas y municiones'),
(140, 2591, 'Forja, prensado, estampado y laminado de metal; pulvimetalurgia'),
(141, 2592, 'Tratamiento y revestimiento de metales; mecanizado'),
(142, 2593, 'Fabricación de artículos de cuchillería, herramientas de mano y artículos de ferretería'),
(143, 2599, 'Fabricación de otros productos elaborados de metal n.c.p.'),
(144, 2610, 'Fabricación de componentes y tableros electrónicos'),
(145, 2620, 'Fabricación de computadoras y de equipo periférico'),
(146, 2630, 'Fabricación de equipos de comunicación'),
(147, 2640, 'Fabricación de aparatos electrónicos de consumo'),
(148, 2651, 'Fabricación de equipo de medición, prueba, navegación y control'),
(149, 2652, 'Fabricación de relojes'),
(150, 2660, 'Fabricación de equipo de irradiación y equipo electrónico de uso médico y terapéutico'),
(151, 2670, 'Fabricación de instrumentos ópticos y equipo fotográfico'),
(152, 2680, 'Fabricación de medios magnéticos y ópticos para almacenamiento de datos'),
(153, 2711, 'Fabricación de motores, generadores y transformadores eléctricos'),
(154, 2712, 'Fabricación de aparatos de distribución y control de la energía eléctrica'),
(155, 2720, 'Fabricación de pilas, baterías y acumuladores eléctricos'),
(156, 2731, 'Fabricación de hilos y cables eléctricos y de fibra óptica'),
(157, 2732, 'Fabricación de dispositivos de cableado'),
(158, 2740, 'Fabricación de equipos eléctricos de iluminación'),
(159, 2750, 'Fabricación de aparatos de uso doméstico'),
(160, 2790, 'Fabricación de otros tipos de equipo eléctrico n.c.p.'),
(161, 2811, 'Fabricación de motores, turbinas, y partes para motores de combustión interna'),
(162, 2812, 'Fabricación de equipos de potencia hidráulica y neumática'),
(163, 2813, 'Fabricación de otras bombas, compresores, grifos y válvulas'),
(164, 2814, 'Fabricación de cojinetes, engranajes, trenes de engranajes y piezas de transmisión'),
(165, 2815, 'Fabricación de hornos, hogares y quemadores industriales'),
(166, 2816, 'Fabricación de equipo de elevación y manipulación'),
(167, 2817, 'Fabricación de maquinaria y equipo de oficina (excepto computadoras y equipo periférico)'),
(168, 2818, 'Fabricación de herramientas manuales con motor'),
(169, 2819, 'Fabricación de otros tipos de maquinaria y equipo de uso general n.c.p.'),
(170, 2821, 'Fabricación de maquinaria agropecuaria y forestal'),
(171, 2822, 'Fabricación de máquinas formadoras de metal y de máquinas herramienta'),
(172, 2823, 'Fabricación de maquinaria para la metalurgia'),
(173, 2824, 'Fabricación de maquinaria para explotación de minas y canteras y para obras de construcción'),
(174, 2825, 'Fabricación de maquinaria para la elaboración de alimentos, bebidas y tabaco'),
(175, 2826, 'Fabricación de maquinaria para la elaboración de productos textiles, prendas de vestir y cueros'),
(176, 2829, 'Fabricación de otros tipos de maquinaria y equipo de uso especial n.c.p.'),
(177, 2910, 'Fabricación de vehículos automotores y sus motores'),
(178, 2920, 'Fabricación de carrocerías para vehículos automotores; fabricación de remolques y semirremolques'),
(179, 2930, 'Fabricación de partes, piezas (autopartes) y accesorios (lujos) para vehículos automotores'),
(180, 3011, 'Construcción de barcos y de estructuras flotantes'),
(181, 3012, 'Construcción de embarcaciones de recreo y deporte'),
(182, 3020, 'Fabricación de locomotoras y de material rodante para ferrocarriles'),
(183, 3030, 'Fabricación de aeronaves, naves espaciales y de maquinaria conexa'),
(184, 3040, 'Fabricación de vehículos militares de combate'),
(185, 3091, 'Fabricación de motocicletas'),
(186, 3092, 'Fabricación de bicicletas y de sillas de ruedas para personas con discapacidad'),
(187, 3099, 'Fabricación de otros tipos de equipo de transporte n.c.p.'),
(188, 3110, 'Fabricación de muebles'),
(189, 3120, 'Fabricación de colchones y somieres'),
(190, 3210, 'Fabricación de joyas, bisutería y artículos conexos'),
(191, 3220, 'Fabricación de instrumentos musicales'),
(192, 3230, 'Fabricación de artículos y equipo para la práctica del deporte'),
(193, 3240, 'Fabricación de juegos, juguetes y rompecabezas'),
(194, 3250, 'Fabricación de instrumentos, aparatos y materiales médicos y odontológicos (incluido mobiliario)'),
(195, 3290, 'Otras industrias manufactureras n.c.p.'),
(196, 3311, 'Mantenimiento y reparación especializado de productos elaborados en metal'),
(197, 3312, 'Mantenimiento y reparación especializado de maquinaria y equipo'),
(198, 3313, 'Mantenimiento y reparación especializado de equipo electrónico y óptico'),
(199, 3314, 'Mantenimiento y reparación especializado de equipo eléctrico'),
(200, 3315, 'Mantenimiento y reparación especializado de equipo de transporte, excepto los vehículos automotores, motocicletas y bicicletas'),
(201, 3319, 'Mantenimiento y reparación de otros tipos de equipos y sus componentes n.c.p.'),
(202, 3320, 'Instalación especializada de maquinaria y equipo industrial'),
(203, 3511, 'Generación de energía eléctrica'),
(204, 3512, 'Transmisión de energía eléctrica'),
(205, 3513, 'Distribución de energía eléctrica'),
(206, 3514, 'Comercialización de energía eléctrica'),
(207, 3520, 'Producción de gas; distribución de combustibles gaseosos por tuberías'),
(208, 3530, 'Suministro de vapor y aire acondicionado'),
(209, 3600, 'Captación, tratamiento y distribución de agua'),
(210, 3700, 'Evacuación y tratamiento de aguas residuales'),
(211, 3811, 'Recolección de desechos no peligrosos'),
(212, 3812, 'Recolección de desechos peligrosos'),
(213, 3821, 'Tratamiento y disposición de desechos no peligrosos'),
(214, 3822, 'Tratamiento y disposición de desechos peligrosos'),
(215, 3830, 'Recuperación de materiales'),
(216, 3900, 'Actividades de saneamiento ambiental y otros servicios de gestión de desechos'),
(217, 4111, 'Construcción de edificios residenciales'),
(218, 4112, 'Construcción de edificios no residenciales'),
(219, 4210, 'Construcción de carreteras y vías de ferrocarril'),
(220, 4220, 'Construcción de proyectos de servicio público'),
(221, 4290, 'Construcción de otras obras de ingeniería civil'),
(222, 4311, 'Demolición'),
(223, 4312, 'Preparación del terreno'),
(224, 4321, 'Instalaciones eléctricas'),
(225, 4322, 'Instalaciones de fontanería, calefacción y aire acondicionado'),
(226, 4329, 'Otras instalaciones especializadas'),
(227, 4330, 'Terminación y acabado de edificios y obras de ingeniería civil'),
(228, 4390, 'Otras actividades especializadas para la construcción de edificios y obras de ingeniería civil'),
(229, 4511, 'Comercio de vehículos automotores nuevos'),
(230, 4512, 'Comercio de vehículos automotores usados'),
(231, 4520, 'Mantenimiento y reparación de vehículos automotores'),
(232, 4530, 'Comercio de partes, piezas (autopartes) y accesorios (lujos) para vehículos automotores'),
(233, 4541, 'Comercio de motocicletas y de sus partes, piezas y accesorios'),
(234, 4542, 'Mantenimiento y reparación de motocicletas y de sus partes y piezas'),
(235, 4610, 'Comercio al por mayor a cambio de una retribución o por contrata'),
(236, 4620, 'Comercio al por mayor de materias primas agropecuarias; animales vivos'),
(237, 4631, 'Comercio al por mayor de productos alimenticios'),
(238, 4632, 'Comercio al por mayor de bebidas y tabaco'),
(239, 4641, 'Comercio al por mayor de productos textiles, productos confeccionados para uso doméstico'),
(240, 4642, 'Comercio al por mayor de prendas de vestir'),
(241, 4643, 'Comercio al por mayor de calzado'),
(242, 4644, 'Comercio al por mayor de aparatos y equipo de uso doméstico'),
(243, 4645, 'Comercio al por mayor de productos farmacéuticos, medicinales, cosméticos y de tocador'),
(244, 4649, 'Comercio al por mayor de otros utensilios domésticos n.c.p.'),
(245, 4651, 'Comercio al por mayor de computadores, equipo periférico y programas de informática'),
(246, 4652, 'Comercio al por mayor de equipo, partes y piezas electrónicos y de telecomunicaciones'),
(247, 4653, 'Comercio al por mayor de maquinaria y equipo agropecuarios'),
(248, 4659, 'Comercio al por mayor de otros tipos de maquinaria y equipo n.c.p.'),
(249, 4661, 'Comercio al por mayor de combustibles sólidos, líquidos, gaseosos y productos conexos'),
(250, 4662, 'Comercio al por mayor de metales y productos metalíferos'),
(251, 4663, 'Comercio al por mayor de materiales de construcción, artículos de ferretería, pinturas, productos de vidrio, equipo y materiales de fontanería y calefacción'),
(252, 4664, 'Comercio al por mayor de productos químicos básicos, cauchos y plásticos en formas primarias y productos químicos de uso agropecuario'),
(253, 4665, 'Comercio al por mayor de desperdicios, desechos y chatarra'),
(254, 4669, 'Comercio al por mayor de otros productos n.c.p.'),
(255, 4690, 'Comercio al por mayor no especializado'),
(256, 4711, 'Comercio al por menor en establecimientos no especializados con surtido compuesto principalmente por alimentos, bebidas o tabaco'),
(257, 4719, 'Comercio al por menor en establecimientos no especializados, con surtido compuesto principalmente por productos diferentes de alimentos (víveres en general), bebidas y tabaco'),
(258, 4721, 'Comercio al por menor de productos agrícolas para el consumo en establecimientos especializados'),
(259, 4722, 'Comercio al por menor de leche, productos lácteos y huevos, en establecimientos especializados'),
(260, 4723, 'Comercio al por menor de carnes (incluye aves de corral), productos cárnicos, pescados y productos de mar, en establecimientos especializados'),
(261, 4724, 'Comercio al por menor de bebidas y productos del tabaco, en establecimientos especializados'),
(262, 4729, 'Comercio al por menor de otros productos alimenticios n.c.p., en establecimientos especializados'),
(263, 4731, 'Comercio al por menor de combustible para automotores'),
(264, 4732, 'Comercio al por menor de lubricantes (aceites, grasas), aditivos y productos de limpieza para vehículos automotores'),
(265, 4741, 'Comercio al por menor de computadores, equipos periféricos, programas de informática y equipos de telecomunicaciones en establecimientos especializados'),
(266, 4742, 'Comercio al por menor de equipos y aparatos de sonido y de video, en establecimientos especializados'),
(267, 4751, 'Comercio al por menor de productos textiles en establecimientos especializados'),
(268, 4752, 'Comercio al por menor de artículos de ferretería, pinturas y productos de vidrio en establecimientos especializados'),
(269, 4753, 'Comercio al por menor de tapices, alfombras y cubrimientos para paredes y pisos en establecimientos especializados'),
(270, 4754, 'Comercio al por menor de electrodomésticos y gasodomésticos de uso doméstico, muebles y equipos de iluminación'),
(271, 4755, 'Comercio al por menor de artículos y utensilios de uso doméstico'),
(272, 4759, 'Comercio al por menor de otros artículos domésticos en establecimientos especializados'),
(273, 4761, 'Comercio al por menor de libros, periódicos, materiales y artículos de papelería y escritorio, en establecimientos especializados'),
(274, 4762, 'Comercio al por menor de artículos deportivos, en establecimientos especializados'),
(275, 4769, 'Comercio al por menor de otros artículos culturales y de entretenimiento n.c.p. en establecimientos especializados'),
(276, 4771, 'Comercio al por menor de prendas de vestir y sus accesorios (incluye artículos de piel) en establecimientos especializados'),
(277, 4772, 'Comercio al por menor de todo tipo de calzado y artículos de cuero y sucedáneos del cuero en establecimientos especializados.'),
(278, 4773, 'Comercio al por menor de productos farmacéuticos y medicinales, cosméticos y artículos de tocador en establecimientos especializados'),
(279, 4774, 'Comercio al por menor de otros productos nuevos en establecimientos especializados'),
(280, 4775, 'Comercio al por menor de artículos de segunda mano'),
(281, 4781, 'Comercio al por menor de alimentos, bebidas y tabaco, en puestos de venta móviles'),
(282, 4782, 'Comercio al por menor de productos textiles, prendas de vestir y calzado, en puestos de venta móviles'),
(283, 4789, 'Comercio al por menor de otros productos en puestos de venta móviles'),
(284, 4791, 'Comercio al por menor realizado a través de Internet'),
(285, 4792, 'Comercio al por menor realizado a través de casas de venta o por correo'),
(286, 4799, 'Otros tipos de comercio al por menor no realizado en establecimientos, puestos de venta o mercados.'),
(287, 4911, 'Transporte férreo de pasajeros'),
(288, 4912, 'Transporte férreo de carga'),
(289, 4921, 'Transporte de pasajeros'),
(290, 4922, 'Transporte mixto'),
(291, 4923, 'Transporte de carga por carretera'),
(292, 4930, 'Transporte por tuberías'),
(293, 5011, 'Transporte de pasajeros marítimo y de cabotaje'),
(294, 5012, 'Transporte de carga marítimo y de cabotaje'),
(295, 5021, 'Transporte fluvial de pasajeros'),
(296, 5022, 'Transporte fluvial de carga'),
(297, 5111, 'Transporte aéreo nacional de pasajeros'),
(298, 5112, 'Transporte aéreo internacional de pasajeros'),
(299, 5121, 'Transporte aéreo nacional de carga'),
(300, 5122, 'Transporte aéreo internacional de carga'),
(301, 5210, 'Almacenamiento y depósito'),
(302, 5221, 'Actividades de estaciones, vías y servicios complementarios para el transporte terrestre'),
(303, 5222, 'Actividades de puertos y servicios complementarios para el transporte acuático'),
(304, 5223, 'Actividades de aeropuertos, servicios de navegación aérea y demás actividades conexas al transporte aéreo'),
(305, 5224, 'Manipulación de carga'),
(306, 5229, 'Otras actividades complementarias al transporte'),
(307, 5310, 'Actividades postales nacionales'),
(308, 5320, 'Actividades de mensajería'),
(309, 5511, 'Alojamiento en hoteles'),
(310, 5512, 'Alojamiento en apartahoteles'),
(311, 5513, 'Alojamiento en centros vacacionales'),
(312, 5514, 'Alojamiento rural'),
(313, 5519, 'Otros tipos de alojamientos para visitantes'),
(314, 5520, 'Actividades de zonas de camping y parques para vehículos recreacionales'),
(315, 5530, 'Servicio por horas'),
(316, 5590, 'Otros tipos de alojamiento n.c.p.'),
(317, 5611, 'Expendio a la mesa de comidas preparadas'),
(318, 5612, 'Expendio por autoservicio de comidas preparadas'),
(319, 5613, 'Expendio de comidas preparadas en cafeterías'),
(320, 5619, 'Otros tipos de expendio de comidas preparadas n.c.p.'),
(321, 5621, 'Catering para eventos'),
(322, 5629, 'Actividades de otros servicios de comidas'),
(323, 5630, 'Expendio de bebidas alcohólicas para el consumo dentro del establecimiento'),
(324, 5811, 'Edición de libros'),
(325, 5812, 'Edición de directorios y listas de correo'),
(326, 5813, 'Edición de periódicos, revistas y otras publicaciones periódicas'),
(327, 5819, 'Otros trabajos de edición'),
(328, 5820, 'Edición de programas de informática (software)'),
(329, 5911, 'Actividades de producción de películas cinematográficas, videos, programas, anuncios y comerciales de televisión'),
(330, 5912, 'Actividades de posproducción de películas cinematográficas, videos, programas, anuncios y comerciales de televisión'),
(331, 5913, 'Actividades de distribución de películas cinematográficas, videos, programas, anuncios y comerciales de televisión'),
(332, 5914, 'Actividades de exhibición de películas cinematográficas y videos'),
(333, 5920, 'Actividades de grabación de sonido y edición de música'),
(334, 6010, 'Actividades de programación y transmisión en el servicio de radiodifusión sonora'),
(335, 6020, 'Actividades de programación y transmisión de televisión'),
(336, 6110, 'Actividades de telecomunicaciones alámbricas'),
(337, 6120, 'Actividades de telecomunicaciones inalámbricas'),
(338, 6130, 'Actividades de telecomunicación satelital'),
(339, 6190, 'Otras actividades de telecomunicaciones'),
(340, 6201, 'Actividades de desarrollo de sistemas informáticos (planificación, análisis, diseño, programación, pruebas)'),
(341, 6202, 'Actividades de consultoría informática y actividades de administración de instalaciones informáticas'),
(342, 6209, 'Otras actividades de tecnologías de información y actividades de servicios informáticos'),
(343, 6311, 'Procesamiento de datos, alojamiento (hosting) y actividades relacionadas'),
(344, 6312, 'Portales web'),
(345, 6391, 'Actividades de agencias de noticias'),
(346, 6399, 'Otras actividades de servicio de información n.c.p.'),
(347, 6411, 'Banco Central'),
(348, 6412, 'Bancos comerciales'),
(349, 6421, 'Actividades de las corporaciones financieras'),
(350, 6422, 'Actividades de las compañías de financiamiento'),
(351, 6423, 'Banca de segundo piso'),
(352, 6424, 'Actividades de las cooperativas financieras'),
(353, 6431, 'Fideicomisos, fondos y entidades financieras similares'),
(354, 6432, 'Fondos de cesantías'),
(355, 6491, 'Leasing financiero (arrendamiento financiero)'),
(356, 6492, 'Actividades financieras de fondos de empleados y otras formas asociativas del sector solidario'),
(357, 6493, 'Actividades de compra de cartera o factoring'),
(358, 6494, 'Otras actividades de distribución de fondos'),
(359, 6495, 'Instituciones especiales oficiales'),
(360, 6499, 'Otras actividades de servicio financiero, excepto las de seguros y pensiones n.c.p.'),
(361, 6511, 'Seguros generales'),
(362, 6512, 'Seguros de vida'),
(363, 6513, 'Reaseguros'),
(364, 6514, 'Capitalización'),
(365, 6521, 'Servicios de seguros sociales de salud'),
(366, 6522, 'Servicios de seguros sociales de riesgos profesionales'),
(367, 6531, 'Régimen de prima media con prestación definida (RPM)'),
(368, 6532, 'Régimen de ahorro individual (RAI)'),
(369, 6611, 'Administración de mercados financieros'),
(370, 6612, 'Corretaje de valores y de contratos de productos básicos'),
(371, 6613, 'Otras actividades relacionadas con el mercado de valores'),
(372, 6614, 'Actividades de las casas de cambio'),
(373, 6615, 'Actividades de los profesionales de compra y venta de divisas'),
(374, 6619, 'Otras actividades auxiliares de las actividades de servicios financieros n.c.p.'),
(375, 6621, 'Actividades de agentes y corredores de seguros'),
(376, 6629, 'Evaluación de riesgos y daños, y otras actividades de servicios auxiliares'),
(377, 6630, 'Actividades de administración de fondos'),
(378, 6810, 'Actividades inmobiliarias realizadas con bienes propios o arrendados'),
(379, 6820, 'Actividades inmobiliarias realizadas a cambio de una retribución o por contrata'),
(380, 6910, 'Actividades jurídicas'),
(381, 6920, 'Actividades de contabilidad, teneduría de libros, auditoría financiera y asesoría tributaria'),
(382, 7010, 'Actividades de administración empresarial'),
(383, 7020, 'Actividades de consultaría de gestión'),
(384, 7110, 'Actividades de arquitectura e ingeniería y otras actividades conexas de consultoría técnica'),
(385, 7120, 'Ensayos y análisis técnicos'),
(386, 7210, 'Investigaciones y desarrollo experimental en el campo de las ciencias naturales y la ingeniería'),
(387, 7220, 'Investigaciones y desarrollo experimental en el campo de las ciencias sociales y las humanidades'),
(388, 7310, 'Publicidad'),
(389, 7320, 'Estudios de mercado y realización de encuestas de opinión pública'),
(390, 7410, 'Actividades especializadas de diseño'),
(391, 7420, 'Actividades de fotografía'),
(392, 7490, 'Otras actividades profesionales, científicas y técnicas n.c.p.'),
(393, 7500, 'Actividades veterinarias'),
(394, 7710, 'Alquiler y arrendamiento de vehículos automotores'),
(395, 7721, 'Alquiler y arrendamiento de equipo recreativo y deportivo'),
(396, 7722, 'Alquiler de videos y discos'),
(397, 7729, 'Alquiler y arrendamiento de otros efectos personales y enseres domésticos n.c.p.'),
(398, 7730, 'Alquiler y arrendamiento de otros tipos de maquinaria, equipo y bienes tangibles n.c.p.'),
(399, 7740, 'Arrendamiento de propiedad intelectual y productos similares, excepto obras protegidas por derechos de autor'),
(400, 7810, 'Actividades de agencias de empleo'),
(401, 7820, 'Actividades de agencias de empleo temporal'),
(402, 7830, 'Otras actividades de suministro de recurso humano'),
(403, 7911, 'Actividades de las agencias de viaje'),
(404, 7912, 'Actividades de operadores turísticos'),
(405, 7990, 'Otros servicios de reserva y actividades relacionadas'),
(406, 8010, 'Actividades de seguridad privada'),
(407, 8020, 'Actividades de servicios de sistemas de seguridad'),
(408, 8030, 'Actividades de detectives e investigadores privados'),
(409, 8110, 'Actividades combinadas de apoyo a instalaciones'),
(410, 8121, 'Limpieza general interior de edificios'),
(411, 8129, 'Otras actividades de limpieza de edificios e instalaciones industriales'),
(412, 8130, 'Actividades de paisajismo y servicios de mantenimiento conexos'),
(413, 8211, 'Actividades combinadas de servicios administrativos de oficina'),
(414, 8219, 'Fotocopiado, preparación de documentos y otras actividades especializadas de apoyo a oficina'),
(415, 8220, 'Actividades de centros de llamadas (Call center)'),
(416, 8230, 'Organización de convenciones y eventos comerciales'),
(417, 8291, 'Actividades de agencias de cobranza y oficinas de calificación crediticia'),
(418, 8292, 'Actividades de envase y empaque'),
(419, 8299, 'Otras actividades de servicio de apoyo a las empresas n.c.p.'),
(420, 8411, 'Actividades legislativas de la administración pública'),
(421, 8412, 'Actividades ejecutivas de la administración pública'),
(422, 8413, 'Regulación de las actividades de organismos que prestan servicios de salud, educativos, culturales y otros servicios sociales, excepto servicios de seguridad social'),
(423, 8414, 'Actividades reguladoras y facilitadoras de la actividad económica'),
(424, 8415, 'Actividades de los otros órganos de control'),
(425, 8421, 'Relaciones exteriores'),
(426, 8422, 'Actividades de defensa'),
(427, 8423, 'Orden público y actividades de seguridad'),
(428, 8424, 'Administración de justicia'),
(429, 8430, 'Actividades de planes de seguridad social de afiliación obligatoria'),
(430, 8511, 'Educación de la primera infancia'),
(431, 8512, 'Educación preescolar'),
(432, 8513, 'Educación básica primaria'),
(433, 8521, 'Educación básica secundaria'),
(434, 8522, 'Educación media académica'),
(435, 8523, 'Educación media técnica y de formación laboral'),
(436, 8530, 'Establecimientos que combinan diferentes niveles de educación'),
(437, 8541, 'Educación técnica profesional'),
(438, 8542, 'Educación tecnológica'),
(439, 8543, 'Educación de instituciones universitarias o de escuelas tecnológicas'),
(440, 8544, 'Educación de universidades'),
(441, 8551, 'Formación académica no formal'),
(442, 8552, 'Enseñanza deportiva y recreativa'),
(443, 8553, 'Enseñanza cultural'),
(444, 8559, 'Otros tipos de educación n.c.p.'),
(445, 8560, 'Actividades de apoyo a la educación'),
(446, 8610, 'Actividades de hospitales y clínicas, con internación'),
(447, 8621, 'Actividades de la práctica médica, sin internación'),
(448, 8622, 'Actividades de la práctica odontológica'),
(449, 8691, 'Actividades de apoyo diagnóstico'),
(450, 8692, 'Actividades de apoyo terapéutico'),
(451, 8699, 'Otras actividades de atención de la salud humana'),
(452, 8710, 'Actividades de atención residencial medicalizada de tipo general'),
(453, 8720, 'Actividades de atención residencial, para el cuidado de pacientes con retardo mental, enfermedad mental y consumo de sustancias psicoactivas'),
(454, 8730, 'Actividades de atención en instituciones para el cuidado de personas mayores y/o discapacitadas'),
(455, 8790, 'Otras actividades de atención en instituciones con alojamiento'),
(456, 8810, 'Actividades de asistencia social sin alojamiento para personas mayores y discapacitadas'),
(457, 8890, 'Otras actividades de asistencia social sin alojamiento'),
(458, 9001, 'Creación literaria'),
(459, 9002, 'Creación musical'),
(460, 9003, 'Creación teatral'),
(461, 9004, 'Creación audiovisual'),
(462, 9005, 'Artes plásticas y visuales'),
(463, 9006, 'Actividades teatrales'),
(464, 9007, 'Actividades de espectáculos musicales en vivo'),
(465, 9008, 'Otras actividades de espectáculos en vivo'),
(466, 9101, 'Actividades de bibliotecas y archivos'),
(467, 9102, 'Actividades y funcionamiento de museos, conservación de edificios y sitios históricos'),
(468, 9103, 'Actividades de jardines botánicos, zoológicos y reservas naturales'),
(469, 9200, 'Actividades de juegos de azar y apuestas'),
(470, 9311, 'Gestión de instalaciones deportivas'),
(471, 9312, 'Actividades de clubes deportivos'),
(472, 9319, 'Otras actividades deportivas'),
(473, 9321, 'Actividades de parques de atracciones y parques temáticos'),
(474, 9329, 'Otras actividades recreativas y de esparcimiento n.c.p.'),
(475, 9411, 'Actividades de asociaciones empresariales y de empleadores'),
(476, 9412, 'Actividades de asociaciones profesionales'),
(477, 9420, 'Actividades de sindicatos de empleados'),
(478, 9491, 'Actividades de asociaciones religiosas'),
(479, 9492, 'Actividades de asociaciones políticas'),
(480, 9499, 'Actividades de otras asociaciones n.c.p.'),
(481, 9511, 'Mantenimiento y reparación de computadores y de equipo periférico'),
(482, 9512, 'Mantenimiento y reparación de equipos de comunicación'),
(483, 9521, 'Mantenimiento y reparación de aparatos electrónicos de consumo'),
(484, 9522, 'Mantenimiento y reparación de aparatos y equipos domésticos y de jardinería'),
(485, 9523, 'Reparación de calzado y artículos de cuero'),
(486, 9524, 'Reparación de muebles y accesorios para el hogar'),
(487, 9529, 'Mantenimiento y reparación de otros efectos personales y enseres domésticos'),
(488, 9601, 'Lavado y limpieza, incluso la limpieza en seco, de productos textiles y de piel'),
(489, 9602, 'Peluquería y otros tratamientos de belleza'),
(490, 9603, 'Pompas fúnebres y actividades relacionadas'),
(491, 9609, 'Otras actividades de servicios personales n.c.p.'),
(492, 9700, 'Actividades de los hogares individuales como empleadores de personal doméstico'),
(493, 9810, 'Actividades no diferenciadas de los hogares individuales como productores de bienes para uso propio'),
(494, 9820, 'Actividades no diferenciadas de los hogares individuales como productores de servicios para uso propio'),
(495, 9900, 'Actividades de organizaciones y entidades extraterritoriales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arls`
--

CREATE TABLE `arls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `arls`
--

INSERT INTO `arls` (`id`, `nombre`) VALUES
(1, 'Allianz Colombia'),
(2, 'Axa Colpatria Seguros S.A.'),
(3, 'Colmena Seguros'),
(4, 'Compañía de Seguros de Vida Aurora S.A'),
(6, 'Global Seguros'),
(7, 'La Equidad Seguros Generales Organismo Cooperativo'),
(8, 'Liberty Seguros S.A.'),
(9, 'Positiva Compañía de Seguros S.A.'),
(10, 'Seguros ALFA S.A. y Seguros de Vida ALFA S.A.'),
(5, 'Seguros Bolívar S.A.'),
(11, 'Seguros Generales Suramericana S.A.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `empresa_id` bigint(20) UNSIGNED NOT NULL,
  `sede_id` bigint(20) UNSIGNED NOT NULL,
  `proceso_id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jefe` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcargos` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `func_cargo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `resp_cargo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `resp_sgi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `autoridad` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rend_ctas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `educacion` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `formacion` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experiencia` int(11) NOT NULL,
  `habilidades` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id`, `empresa_id`, `sede_id`, `proceso_id`, `nombre`, `jefe`, `subcargos`, `rol`, `func_cargo`, `resp_cargo`, `resp_sgi`, `autoridad`, `rend_ctas`, `educacion`, `formacion`, `experiencia`, `habilidades`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Gerente', 'Elias Vega D.', 'Todos los cargos de la empresa', 'Administracion de todos los cargos para el correcto funcionamiento de la empresa', 'Administrativas', 'Velar por el bienestar de la empresa', 'Todas las responsabilidades SGI', 'Junta directiva', 'Socios', 'Magister', 'Master', 5, 'Administracio y manejo de personal', '2020-06-01 21:58:51', '2020-06-01 21:58:51'),
(2, 1, 1, 1, 'Asesores', 'Elcana Serrano Ardila', 'Mensajerias', 'asesorar las empresas asignadas', 'Asesoria de empresas en el software prosigem', 'velar por elcorrecto funcionamiento de las empresas del sistema', 'Todas las resposabilidades SGI que corresponden al cargo', 'Elias Vega Delgado', 'Elias Vega Delgado', 'Universidad', 'Profesional', 3, 'Manejo en el software Prosigem', '2020-06-01 22:10:10', '2020-06-01 22:10:10'),
(3, 2, 2, 2, 'Gerente', 'Junta directiva', 'Todos los cargos de la empresa', 'Supervisar y controlar el funcionamiento de la empresa', 'liderar todos los procesos para el funcionamiento de la empresa', 'Solucionar  todas y cada una de los inconvenietes presentados y el manejo de recursos para el funcionamiento de la empresa', 'Todas las responsabilidades SGI', 'Yeferson A. Ramires', 'Junta directiva', 'Doctorado', 'Doctor', 10, 'Todas las habilidades concernientes al cargo', '2020-06-01 22:48:20', '2020-06-01 22:48:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo_convocatoria`
--

CREATE TABLE `cargo_convocatoria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cargo_id` bigint(20) UNSIGNED NOT NULL,
  `convocatoria_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo_documentos`
--

CREATE TABLE `cargo_documentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cargo_id` bigint(20) UNSIGNED NOT NULL,
  `documento_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cargo_documentos`
--

INSERT INTO `cargo_documentos` (`id`, `cargo_id`, `documento_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2020-06-01 22:11:12', '2020-06-01 22:11:12'),
(2, 2, 2, '2020-06-01 22:11:12', '2020-06-01 22:11:12'),
(3, 2, 3, '2020-06-01 22:11:12', '2020-06-01 22:11:12'),
(4, 2, 4, '2020-06-01 22:11:12', '2020-06-01 22:11:12'),
(5, 1, 1, '2020-06-01 22:11:44', '2020-06-01 22:11:44'),
(6, 1, 2, '2020-06-01 22:11:44', '2020-06-01 22:11:44'),
(7, 1, 3, '2020-06-01 23:43:41', '2020-06-01 23:43:41'),
(8, 1, 5, '2020-06-08 09:57:16', '2020-06-08 09:57:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo_inspeccion`
--

CREATE TABLE `cargo_inspeccion` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cargo_id` bigint(20) UNSIGNED NOT NULL,
  `inspeccion_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo_matriz_riesgo`
--

CREATE TABLE `cargo_matriz_riesgo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cargo_id` bigint(20) UNSIGNED NOT NULL,
  `matrizRiesgo_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo_politica`
--

CREATE TABLE `cargo_politica` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cargo_id` bigint(20) UNSIGNED NOT NULL,
  `politica_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo_programa`
--

CREATE TABLE `cargo_programa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cargo_id` bigint(20) UNSIGNED NOT NULL,
  `matrizRiesgo_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatorias`
--

CREATE TABLE `convocatorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `empresa_id` bigint(20) UNSIGNED NOT NULL,
  `sede_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `codigo` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rep_legal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `convocatorias`
--

INSERT INTO `convocatorias` (`id`, `empresa_id`, `sede_id`, `user_id`, `codigo`, `nombre`, `version`, `fecha`, `hora`, `rep_legal`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'FT-SST-001', 'Primera convocatoria', 32, '2020-06-30', '8 pm', 'Elias Vega', '2020-06-17 16:33:53', '2020-06-17 16:33:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `nombre`) VALUES
(1, 'ANTIOQUIA'),
(2, 'ATLANTICO'),
(3, 'D.C.'),
(4, 'BOLIVAR'),
(5, 'BOYACA'),
(6, 'CALDAS'),
(7, 'CAQUETA'),
(8, 'CAUCA'),
(9, 'CESAR'),
(10, 'CORDOBA'),
(11, 'CUNDINAMARCA'),
(12, 'CHOCO'),
(13, 'HUILA'),
(14, 'LA GUAJIRA'),
(15, 'MAGDALENA'),
(16, 'META'),
(17, 'NARIÑO'),
(18, 'N. DE SANTANDER'),
(19, 'QUINDIO'),
(20, 'RISARALDA'),
(21, 'SANTANDER'),
(22, 'SUCRE'),
(23, 'TOLIMA'),
(24, 'VALLE DEL CAUCA'),
(25, 'ARAUCA'),
(26, 'CASANARE'),
(27, 'PUTUMAYO'),
(28, 'SAN ANDRES'),
(29, 'AMAZONAS'),
(30, 'GUAINIA'),
(31, 'GUAVIARE'),
(32, 'VAUPES'),
(33, 'VICHADA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id`, `nombre`) VALUES
(1, 'Inspección'),
(2, 'Matriz de riesgo'),
(3, 'Políticas'),
(4, 'Programas'),
(5, 'Convocatoria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `departamento_id` bigint(20) UNSIGNED NOT NULL,
  `municipio_id` bigint(20) UNSIGNED NOT NULL,
  `servicio_id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asesor` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inicio_servicio` date NOT NULL,
  `fin_servicio` date NOT NULL,
  `fecha_facturacion` date NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `departamento_id`, `municipio_id`, `servicio_id`, `nombre`, `asesor`, `inicio_servicio`, `fin_servicio`, `fecha_facturacion`, `estado`, `imagen`, `created_at`, `updated_at`) VALUES
(1, 21, 845, 3, 'Discom', 'Elias Vega D.', '2020-06-01', '2021-05-31', '2020-06-05', 1, '1591044606.jpeg', '2020-06-01 20:50:06', '2020-06-01 20:50:06'),
(2, 21, 845, 2, 'Emdisoft S.A.S.', '4', '2020-06-01', '2020-12-31', '2020-06-03', 1, '1591050646.jpeg', '2020-06-01 22:30:46', '2020-06-01 22:30:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inspeccions`
--

CREATE TABLE `inspeccions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriz_riesgos`
--

CREATE TABLE `matriz_riesgos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `area` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_19_125159_create_departamentos_table', 1),
(5, '2020_05_19_131205_create_municipios_table', 1),
(6, '2020_05_19_132657_create_servicios_table', 1),
(7, '2020_05_19_133837_create_empresas_table', 1),
(8, '2020_05_20_075756_create_actividad_economicas_table', 1),
(9, '2020_05_20_092348_create_arls_table', 1),
(10, '2020_05_20_114634_create_roles_table', 1),
(11, '2020_05_21_043526_create_sedes_table', 1),
(12, '2020_05_22_042600_create_procesos_table', 1),
(13, '2020_05_23_094317_create_cargos_table', 1),
(14, '2020_05_23_151840_add_campos_at_users', 1),
(15, '2020_05_28_074257_create_documentos_table', 1),
(16, '2020_05_28_100737_create_cargo_documentos_table', 1),
(17, '2020_05_31_043521_create_inspeccions_table', 1),
(18, '2020_05_31_055003_create_matriz_riesgos_table', 1),
(19, '2020_05_31_061646_create_politicas_table', 1),
(20, '2020_05_31_062931_create_programas_table', 1),
(21, '2020_05_31_070004_create_cargo_inspeccion_table', 1),
(22, '2020_05_31_070142_create_cargo_matriz_riesgo_table', 1),
(23, '2020_05_31_070158_create_cargo_politica_table', 1),
(24, '2020_05_31_070203_create_cargo_programa_table', 1),
(27, '2020_06_07_100443_create_cargo_convocatoria_table', 2),
(28, '2020_06_06_052600_create_convocatorias_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `departamento_id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id`, `departamento_id`, `nombre`) VALUES
(1, 1, 'MEDELLIN'),
(2, 1, 'ABEJORRAL'),
(3, 1, 'ABRIAQUI'),
(4, 1, 'ALEJANDRIA'),
(5, 1, 'AMAGA'),
(6, 1, 'AMALFI'),
(7, 1, 'ANDES'),
(8, 1, 'ANGELOPOLIS'),
(9, 1, 'ANGOSTURA'),
(10, 1, 'ANORI'),
(11, 1, 'SANTAFE DE ANTIOQUIA'),
(12, 1, 'ANZA'),
(13, 1, 'APARTADO'),
(14, 1, 'ARBOLETES'),
(15, 1, 'ARGELIA'),
(16, 1, 'ARMENIA'),
(17, 1, 'BARBOSA'),
(18, 1, 'BELMIRA'),
(19, 1, 'BELLO'),
(20, 1, 'BETANIA'),
(21, 1, 'BETULIA'),
(22, 1, 'CIUDAD BOLIVAR'),
(23, 1, 'BRICEÑO'),
(24, 1, 'BURITICA'),
(25, 1, 'CACERES'),
(26, 1, 'CAICEDO'),
(27, 1, 'CALDAS'),
(28, 1, 'CAMPAMENTO'),
(29, 1, 'CAÑASGORDAS'),
(30, 1, 'CARACOLI'),
(31, 1, 'CARAMANTA'),
(32, 1, 'CAREPA'),
(33, 1, 'EL CARMEN DE VIBORAL'),
(34, 1, 'CAROLINA'),
(35, 1, 'CAUCASIA'),
(36, 1, 'CHIGORODO'),
(37, 1, 'CISNEROS'),
(38, 1, 'COCORNA'),
(39, 1, 'CONCEPCION'),
(40, 1, 'CONCORDIA'),
(41, 1, 'COPACABANA'),
(42, 1, 'DABEIBA'),
(43, 1, 'DON MATIAS'),
(44, 1, 'EBEJICO'),
(45, 1, 'EL BAGRE'),
(46, 1, 'ENTRERRIOS'),
(47, 1, 'ENVIGADO'),
(48, 1, 'FREDONIA'),
(49, 1, 'FRONTINO'),
(50, 1, 'GIRALDO'),
(51, 1, 'GIRARDOTA'),
(52, 1, 'GOMEZ PLATA'),
(53, 1, 'GRANADA'),
(54, 1, 'GUADALUPE'),
(55, 1, 'GUARNE'),
(56, 1, 'GUATAPE'),
(57, 1, 'HELICONIA'),
(58, 1, 'HISPANIA'),
(59, 1, 'ITAGUI'),
(60, 1, 'ITUANGO'),
(61, 1, 'JARDIN'),
(62, 1, 'JERICO'),
(63, 1, 'LA CEJA'),
(64, 1, 'LA ESTRELLA'),
(65, 1, 'LA PINTADA'),
(66, 1, 'LA UNION'),
(67, 1, 'LIBORINA'),
(68, 1, 'MACEO'),
(69, 1, 'MARINILLA'),
(70, 1, 'MONTEBELLO'),
(71, 1, 'MURINDO'),
(72, 1, 'MUTATA'),
(73, 1, 'NARIÑO'),
(74, 1, 'NECOCLI'),
(75, 1, 'NECHI'),
(76, 1, 'OLAYA'),
(77, 1, 'PEÑOL'),
(78, 1, 'PEQUE'),
(79, 1, 'PUEBLORRICO'),
(80, 1, 'PUERTO BERRIO'),
(81, 1, 'PUERTO NARE'),
(82, 1, 'PUERTO TRIUNFO'),
(83, 1, 'REMEDIOS'),
(84, 1, 'RETIRO'),
(85, 1, 'RIONEGRO'),
(86, 1, 'SABANALARGA'),
(87, 1, 'SABANETA'),
(88, 1, 'SALGAR'),
(89, 1, 'SAN ANDRES DE CUERQUIA'),
(90, 1, 'SAN CARLOS'),
(91, 1, 'SAN FRANCISCO'),
(92, 1, 'SAN JERONIMO'),
(93, 1, 'SAN JOSE DE LA MONTAÑA'),
(94, 1, 'SAN JUAN DE URABA'),
(95, 1, 'SAN LUIS'),
(96, 1, 'SAN PEDRO'),
(97, 1, 'SAN PEDRO DE URABA'),
(98, 1, 'SAN RAFAEL'),
(99, 1, 'SAN ROQUE'),
(100, 1, 'SAN VICENTE'),
(101, 1, 'SANTA BARBARA'),
(102, 1, 'SANTA ROSA DE OSOS'),
(103, 1, 'SANTO DOMINGO'),
(104, 1, 'EL SANTUARIO'),
(105, 1, 'SEGOVIA'),
(106, 1, 'SONSON'),
(107, 1, 'SOPETRAN'),
(108, 1, 'TAMESIS'),
(109, 1, 'TARAZA'),
(110, 1, 'TARSO'),
(111, 1, 'TITIRIBI'),
(112, 1, 'TOLEDO'),
(113, 1, 'TURBO'),
(114, 1, 'URAMITA'),
(115, 1, 'URRAO'),
(116, 1, 'VALDIVIA'),
(117, 1, 'VALPARAISO'),
(118, 1, 'VEGACHI'),
(119, 1, 'VENECIA'),
(120, 1, 'VIGIA DEL FUERTE'),
(121, 1, 'YALI'),
(122, 1, 'YARUMAL'),
(123, 1, 'YOLOMBO'),
(124, 1, 'YONDO'),
(125, 1, 'ZARAGOZA'),
(126, 2, 'BARRANQUILLA'),
(127, 2, 'BARANOA'),
(128, 2, 'CAMPO DE LA CRUZ'),
(129, 2, 'CANDELARIA'),
(130, 2, 'GALAPA'),
(131, 2, 'JUAN DE ACOSTA'),
(132, 2, 'LURUACO'),
(133, 2, 'MALAMBO'),
(134, 2, 'MANATI'),
(135, 2, 'PALMAR DE VARELA'),
(136, 2, 'PIOJO'),
(137, 2, 'POLONUEVO'),
(138, 2, 'PONEDERA'),
(139, 2, 'PUERTO COLOMBIA'),
(140, 2, 'REPELON'),
(141, 2, 'SABANAGRANDE'),
(142, 2, 'SABANALARGA'),
(143, 2, 'SANTA LUCIA'),
(144, 2, 'SANTO TOMAS'),
(145, 2, 'SOLEDAD'),
(146, 2, 'SUAN'),
(147, 2, 'TUBARA'),
(148, 2, 'USIACURI'),
(149, 3, 'BOGOTA'),
(150, 4, 'CARTAGENA'),
(151, 4, 'ACHI'),
(152, 4, 'ALTOS DEL ROSARIO'),
(153, 4, 'ARENAL'),
(154, 4, 'ARJONA'),
(155, 4, 'ARROYOHONDO'),
(156, 4, 'BARRANCO DE LOBA'),
(157, 4, 'CALAMAR'),
(158, 4, 'CANTAGALLO'),
(159, 4, 'CICUCO'),
(160, 4, 'CORDOBA'),
(161, 4, 'CLEMENCIA'),
(162, 4, 'EL CARMEN DE BOLIVAR'),
(163, 4, 'EL GUAMO'),
(164, 4, 'EL PEÑON'),
(165, 4, 'HATILLO DE LOBA'),
(166, 4, 'MAGANGUE'),
(167, 4, 'MAHATES'),
(168, 4, 'MARGARITA'),
(169, 4, 'MARIA LA BAJA'),
(170, 4, 'MONTECRISTO'),
(171, 4, 'MOMPOS'),
(172, 4, 'NOROSI'),
(173, 4, 'MORALES'),
(174, 4, 'PINILLOS'),
(175, 4, 'REGIDOR'),
(176, 4, 'RIO VIEJO'),
(177, 4, 'SAN CRISTOBAL'),
(178, 4, 'SAN ESTANISLAO'),
(179, 4, 'SAN FERNANDO'),
(180, 4, 'SAN JACINTO'),
(181, 4, 'SAN JACINTO DEL CAUCA'),
(182, 4, 'SAN JUAN NEPOMUCENO'),
(183, 4, 'SAN MARTIN DE LOBA'),
(184, 4, 'SAN PABLO'),
(185, 4, 'SANTA CATALINA'),
(186, 4, 'SANTA ROSA'),
(187, 4, 'SANTA ROSA DEL SUR'),
(188, 4, 'SIMITI'),
(189, 4, 'SOPLAVIENTO'),
(190, 4, 'TALAIGUA NUEVO'),
(191, 4, 'TIQUISIO'),
(192, 4, 'TURBACO'),
(193, 4, 'TURBANA'),
(194, 4, 'VILLANUEVA'),
(195, 4, 'ZAMBRANO'),
(196, 5, 'TUNJA'),
(197, 5, 'ALMEIDA'),
(198, 5, 'AQUITANIA'),
(199, 5, 'ARCABUCO'),
(200, 5, 'BELEN'),
(201, 5, 'BERBEO'),
(202, 5, 'BETEITIVA'),
(203, 5, 'BOAVITA'),
(204, 5, 'BOYACA'),
(205, 5, 'BRICEÑO'),
(206, 5, 'BUENAVISTA'),
(207, 5, 'BUSBANZA'),
(208, 5, 'CALDAS'),
(209, 5, 'CAMPOHERMOSO'),
(210, 5, 'CERINZA'),
(211, 5, 'CHINAVITA'),
(212, 5, 'CHIQUINQUIRA'),
(213, 5, 'CHISCAS'),
(214, 5, 'CHITA'),
(215, 5, 'CHITARAQUE'),
(216, 5, 'CHIVATA'),
(217, 5, 'CIENEGA'),
(218, 5, 'COMBITA'),
(219, 5, 'COPER'),
(220, 5, 'CORRALES'),
(221, 5, 'COVARACHIA'),
(222, 5, 'CUBARA'),
(223, 5, 'CUCAITA'),
(224, 5, 'CUITIVA'),
(225, 5, 'CHIQUIZA'),
(226, 5, 'CHIVOR'),
(227, 5, 'DUITAMA'),
(228, 5, 'EL COCUY'),
(229, 5, 'EL ESPINO'),
(230, 5, 'FIRAVITOBA'),
(231, 5, 'FLORESTA'),
(232, 5, 'GACHANTIVA'),
(233, 5, 'GAMEZA'),
(234, 5, 'GARAGOA'),
(235, 5, 'GUACAMAYAS'),
(236, 5, 'GUATEQUE'),
(237, 5, 'GUAYATA'),
(238, 5, 'GsICAN'),
(239, 5, 'IZA'),
(240, 5, 'JENESANO'),
(241, 5, 'JERICO'),
(242, 5, 'LABRANZAGRANDE'),
(243, 5, 'LA CAPILLA'),
(244, 5, 'LA VICTORIA'),
(245, 5, 'LA UVITA'),
(246, 5, 'VILLA DE LEYVA'),
(247, 5, 'MACANAL'),
(248, 5, 'MARIPI'),
(249, 5, 'MIRAFLORES'),
(250, 5, 'MONGUA'),
(251, 5, 'MONGUI'),
(252, 5, 'MONIQUIRA'),
(253, 5, 'MOTAVITA'),
(254, 5, 'MUZO'),
(255, 5, 'NOBSA'),
(256, 5, 'NUEVO COLON'),
(257, 5, 'OICATA'),
(258, 5, 'OTANCHE'),
(259, 5, 'PACHAVITA'),
(260, 5, 'PAEZ'),
(261, 5, 'PAIPA'),
(262, 5, 'PAJARITO'),
(263, 5, 'PANQUEBA'),
(264, 5, 'PAUNA'),
(265, 5, 'PAYA'),
(266, 5, 'PAZ DE RIO'),
(267, 5, 'PESCA'),
(268, 5, 'PISBA'),
(269, 5, 'PUERTO BOYACA'),
(270, 5, 'QUIPAMA'),
(271, 5, 'RAMIRIQUI'),
(272, 5, 'RAQUIRA'),
(273, 5, 'RONDON'),
(274, 5, 'SABOYA'),
(275, 5, 'SACHICA'),
(276, 5, 'SAMACA'),
(277, 5, 'SAN EDUARDO'),
(278, 5, 'SAN JOSE DE PARE'),
(279, 5, 'SAN LUIS DE GACENO'),
(280, 5, 'SAN MATEO'),
(281, 5, 'SAN MIGUEL DE SEMA'),
(282, 5, 'SAN PABLO DE BORBUR'),
(283, 5, 'SANTANA'),
(284, 5, 'SANTA MARIA'),
(285, 5, 'SANTA ROSA DE VITERBO'),
(286, 5, 'SANTA SOFIA'),
(287, 5, 'SATIVANORTE'),
(288, 5, 'SATIVASUR'),
(289, 5, 'SIACHOQUE'),
(290, 5, 'SOATA'),
(291, 5, 'SOCOTA'),
(292, 5, 'SOCHA'),
(293, 5, 'SOGAMOSO'),
(294, 5, 'SOMONDOCO'),
(295, 5, 'SORA'),
(296, 5, 'SOTAQUIRA'),
(297, 5, 'SORACA'),
(298, 5, 'SUSACON'),
(299, 5, 'SUTAMARCHAN'),
(300, 5, 'SUTATENZA'),
(301, 5, 'TASCO'),
(302, 5, 'TENZA'),
(303, 5, 'TIBANA'),
(304, 5, 'TIBASOSA'),
(305, 5, 'TINJACA'),
(306, 5, 'TIPACOQUE'),
(307, 5, 'TOCA'),
(308, 5, 'TOGsI'),
(309, 5, 'TOPAGA'),
(310, 5, 'TOTA'),
(311, 5, 'TUNUNGUA'),
(312, 5, 'TURMEQUE'),
(313, 5, 'TUTA'),
(314, 5, 'TUTAZA'),
(315, 5, 'UMBITA'),
(316, 5, 'VENTAQUEMADA'),
(317, 5, 'VIRACACHA'),
(318, 5, 'ZETAQUIRA'),
(319, 6, 'MANIZALES'),
(320, 6, 'AGUADAS'),
(321, 6, 'ANSERMA'),
(322, 6, 'ARANZAZU'),
(323, 6, 'BELALCAZAR'),
(324, 6, 'CHINCHINA'),
(325, 6, 'FILADELFIA'),
(326, 6, 'LA DORADA'),
(327, 6, 'LA MERCED'),
(328, 6, 'MANZANARES'),
(329, 6, 'MARMATO'),
(330, 6, 'MARQUETALIA'),
(331, 6, 'MARULANDA'),
(332, 6, 'NEIRA'),
(333, 6, 'NORCASIA'),
(334, 6, 'PACORA'),
(335, 6, 'PALESTINA'),
(336, 6, 'PENSILVANIA'),
(337, 6, 'RIOSUCIO'),
(338, 6, 'RISARALDA'),
(339, 6, 'SALAMINA'),
(340, 6, 'SAMANA'),
(341, 6, 'SAN JOSE'),
(342, 6, 'SUPIA'),
(343, 6, 'VICTORIA'),
(344, 6, 'VILLAMARIA'),
(345, 6, 'VITERBO'),
(346, 7, 'FLORENCIA'),
(347, 7, 'ALBANIA'),
(348, 7, 'BELEN DE LOS ANDAQUIES'),
(349, 7, 'CARTAGENA DEL CHAIRA'),
(350, 7, 'CURILLO'),
(351, 7, 'EL DONCELLO'),
(352, 7, 'EL PAUJIL'),
(353, 7, 'LA MONTAÑITA'),
(354, 7, 'MILAN'),
(355, 7, 'MORELIA'),
(356, 7, 'PUERTO RICO'),
(357, 7, 'SAN JOSE DEL FRAGUA'),
(358, 7, 'SAN VICENTE DEL CAGUAN'),
(359, 7, 'SOLANO'),
(360, 7, 'SOLITA'),
(361, 7, 'VALPARAISO'),
(362, 8, 'POPAYAN'),
(363, 8, 'ALMAGUER'),
(364, 8, 'ARGELIA'),
(365, 8, 'BALBOA'),
(366, 8, 'BOLIVAR'),
(367, 8, 'BUENOS AIRES'),
(368, 8, 'CAJIBIO'),
(369, 8, 'CALDONO'),
(370, 8, 'CALOTO'),
(371, 8, 'CORINTO'),
(372, 8, 'EL TAMBO'),
(373, 8, 'FLORENCIA'),
(374, 8, 'GUACHENE'),
(375, 8, 'GUAPI'),
(376, 8, 'INZA'),
(377, 8, 'JAMBALO'),
(378, 8, 'LA SIERRA'),
(379, 8, 'LA VEGA'),
(380, 8, 'LOPEZ'),
(381, 8, 'MERCADERES'),
(382, 8, 'MIRANDA'),
(383, 8, 'MORALES'),
(384, 8, 'PADILLA'),
(385, 8, 'PAEZ'),
(386, 8, 'PATIA'),
(387, 8, 'PIAMONTE'),
(388, 8, 'PIENDAMO'),
(389, 8, 'PUERTO TEJADA'),
(390, 8, 'PURACE'),
(391, 8, 'ROSAS'),
(392, 8, 'SAN SEBASTIAN'),
(393, 8, 'SANTANDER DE QUILICHAO'),
(394, 8, 'SANTA ROSA'),
(395, 8, 'SILVIA'),
(396, 8, 'SOTARA'),
(397, 8, 'SUAREZ'),
(398, 8, 'SUCRE'),
(399, 8, 'TIMBIO'),
(400, 8, 'TIMBIQUI'),
(401, 8, 'TORIBIO'),
(402, 8, 'TOTORO'),
(403, 8, 'VILLA RICA'),
(404, 9, 'VALLEDUPAR'),
(405, 9, 'AGUACHICA'),
(406, 9, 'AGUSTIN CODAZZI'),
(407, 9, 'ASTREA'),
(408, 9, 'BECERRIL'),
(409, 9, 'BOSCONIA'),
(410, 9, 'CHIMICHAGUA'),
(411, 9, 'CHIRIGUANA'),
(412, 9, 'CURUMANI'),
(413, 9, 'EL COPEY'),
(414, 9, 'EL PASO'),
(415, 9, 'GAMARRA'),
(416, 9, 'GONZALEZ'),
(417, 9, 'LA GLORIA'),
(418, 9, 'LA JAGUA DE IBIRICO'),
(419, 9, 'MANAURE'),
(420, 9, 'PAILITAS'),
(421, 9, 'PELAYA'),
(422, 9, 'PUEBLO BELLO'),
(423, 9, 'RIO DE ORO'),
(424, 9, 'LA PAZ'),
(425, 9, 'SAN ALBERTO'),
(426, 9, 'SAN DIEGO'),
(427, 9, 'SAN MARTIN'),
(428, 9, 'TAMALAMEQUE'),
(429, 10, 'MONTERIA'),
(430, 10, 'AYAPEL'),
(431, 10, 'BUENAVISTA'),
(432, 10, 'CANALETE'),
(433, 10, 'CERETE'),
(434, 10, 'CHIMA'),
(435, 10, 'CHINU'),
(436, 10, 'CIENAGA DE ORO'),
(437, 10, 'COTORRA'),
(438, 10, 'LA APARTADA'),
(439, 10, 'LORICA'),
(440, 10, 'LOS CORDOBAS'),
(441, 10, 'MOMIL'),
(442, 10, 'MONTELIBANO'),
(443, 10, 'MOÑITOS'),
(444, 10, 'PLANETA RICA'),
(445, 10, 'PUEBLO NUEVO'),
(446, 10, 'PUERTO ESCONDIDO'),
(447, 10, 'PUERTO LIBERTADOR'),
(448, 10, 'PURISIMA'),
(449, 10, 'SAHAGUN'),
(450, 10, 'SAN ANDRES SOTAVENTO'),
(451, 10, 'SAN ANTERO'),
(452, 10, 'SAN BERNARDO DEL VIENTO'),
(453, 10, 'SAN CARLOS'),
(454, 10, 'SAN PELAYO'),
(455, 10, 'TIERRALTA'),
(456, 10, 'VALENCIA'),
(457, 11, 'AGUA DE DIOS'),
(458, 11, 'ALBAN'),
(459, 11, 'ANAPOIMA'),
(460, 11, 'ANOLAIMA'),
(461, 11, 'ARBELAEZ'),
(462, 11, 'BELTRAN'),
(463, 11, 'BITUIMA'),
(464, 11, 'BOJACA'),
(465, 11, 'CABRERA'),
(466, 11, 'CACHIPAY'),
(467, 11, 'CAJICA'),
(468, 11, 'CAPARRAPI'),
(469, 11, 'CAQUEZA'),
(470, 11, 'CARMEN DE CARUPA'),
(471, 11, 'CHAGUANI'),
(472, 11, 'CHIA'),
(473, 11, 'CHIPAQUE'),
(474, 11, 'CHOACHI'),
(475, 11, 'CHOCONTA'),
(476, 11, 'COGUA'),
(477, 11, 'COTA'),
(478, 11, 'CUCUNUBA'),
(479, 11, 'EL COLEGIO'),
(480, 11, 'EL PEÑON'),
(481, 11, 'EL ROSAL'),
(482, 11, 'FACATATIVA'),
(483, 11, 'FOMEQUE'),
(484, 11, 'FOSCA'),
(485, 11, 'FUNZA'),
(486, 11, 'FUQUENE'),
(487, 11, 'FUSAGASUGA'),
(488, 11, 'GACHALA'),
(489, 11, 'GACHANCIPA'),
(490, 11, 'GACHETA'),
(491, 11, 'GAMA'),
(492, 11, 'GIRARDOT'),
(493, 11, 'GRANADA'),
(494, 11, 'GUACHETA'),
(495, 11, 'GUADUAS'),
(496, 11, 'GUASCA'),
(497, 11, 'GUATAQUI'),
(498, 11, 'GUATAVITA'),
(499, 11, 'GUAYABAL DE SIQUIMA'),
(500, 11, 'GUAYABETAL'),
(501, 11, 'GUTIERREZ'),
(502, 11, 'JERUSALEN'),
(503, 11, 'JUNIN'),
(504, 11, 'LA CALERA'),
(505, 11, 'LA MESA'),
(506, 11, 'LA PALMA'),
(507, 11, 'LA PEÑA'),
(508, 11, 'LA VEGA'),
(509, 11, 'LENGUAZAQUE'),
(510, 11, 'MACHETA'),
(511, 11, 'MADRID'),
(512, 11, 'MANTA'),
(513, 11, 'MEDINA'),
(514, 11, 'MOSQUERA'),
(515, 11, 'NARIÑO'),
(516, 11, 'NEMOCON'),
(517, 11, 'NILO'),
(518, 11, 'NIMAIMA'),
(519, 11, 'NOCAIMA'),
(520, 11, 'VENECIA'),
(521, 11, 'PACHO'),
(522, 11, 'PAIME'),
(523, 11, 'PANDI'),
(524, 11, 'PARATEBUENO'),
(525, 11, 'PASCA'),
(526, 11, 'PUERTO SALGAR'),
(527, 11, 'PULI'),
(528, 11, 'QUEBRADANEGRA'),
(529, 11, 'QUETAME'),
(530, 11, 'QUIPILE'),
(531, 11, 'APULO'),
(532, 11, 'RICAURTE'),
(533, 11, 'SAN ANTONIO DEL TEQUENDAMA'),
(534, 11, 'SAN BERNARDO'),
(535, 11, 'SAN CAYETANO'),
(536, 11, 'SAN FRANCISCO'),
(537, 11, 'SAN JUAN DE RIO SECO'),
(538, 11, 'SASAIMA'),
(539, 11, 'SESQUILE'),
(540, 11, 'SIBATE'),
(541, 11, 'SILVANIA'),
(542, 11, 'SIMIJACA'),
(543, 11, 'SOACHA'),
(544, 11, 'SOPO'),
(545, 11, 'SUBACHOQUE'),
(546, 11, 'SUESCA'),
(547, 11, 'SUPATA'),
(548, 11, 'SUSA'),
(549, 11, 'SUTATAUSA'),
(550, 11, 'TABIO'),
(551, 11, 'TAUSA'),
(552, 11, 'TENA'),
(553, 11, 'TENJO'),
(554, 11, 'TIBACUY'),
(555, 11, 'TIBIRITA'),
(556, 11, 'TOCAIMA'),
(557, 11, 'TOCANCIPA'),
(558, 11, 'TOPAIPI'),
(559, 11, 'UBALA'),
(560, 11, 'UBAQUE'),
(561, 11, 'VILLA DE SAN DIEGO DE UBATE'),
(562, 11, 'UNE'),
(563, 11, 'UTICA'),
(564, 11, 'VERGARA'),
(565, 11, 'VIANI'),
(566, 11, 'VILLAGOMEZ'),
(567, 11, 'VILLAPINZON'),
(568, 11, 'VILLETA'),
(569, 11, 'VIOTA'),
(570, 11, 'YACOPI'),
(571, 11, 'ZIPACON'),
(572, 11, 'ZIPAQUIRA'),
(573, 12, 'QUIBDO'),
(574, 12, 'ACANDI'),
(575, 12, 'ALTO BAUDO'),
(576, 12, 'ATRATO'),
(577, 12, 'BAGADO'),
(578, 12, 'BAHIA SOLANO'),
(579, 12, 'BAJO BAUDO'),
(580, 12, 'BELEN DE BAJIRA'),
(581, 12, 'BOJAYA'),
(582, 12, 'EL CANTON DEL SAN PABLO'),
(583, 12, 'CARMEN DEL DARIEN'),
(584, 12, 'CERTEGUI'),
(585, 12, 'CONDOTO'),
(586, 12, 'EL CARMEN DE ATRATO'),
(587, 12, 'EL LITORAL DEL SAN JUAN'),
(588, 12, 'ISTMINA'),
(589, 12, 'JURADO'),
(590, 12, 'LLORO'),
(591, 12, 'MEDIO ATRATO'),
(592, 12, 'MEDIO BAUDO'),
(593, 12, 'MEDIO SAN JUAN'),
(594, 12, 'NOVITA'),
(595, 12, 'NUQUI'),
(596, 12, 'RIO IRO'),
(597, 12, 'RIO QUITO'),
(598, 12, 'RIOSUCIO'),
(599, 12, 'SAN JOSE DEL PALMAR'),
(600, 12, 'SIPI'),
(601, 12, 'TADO'),
(602, 12, 'UNGUIA'),
(603, 12, 'UNION PANAMERICANA'),
(604, 13, 'NEIVA'),
(605, 13, 'ACEVEDO'),
(606, 13, 'AGRADO'),
(607, 13, 'AIPE'),
(608, 13, 'ALGECIRAS'),
(609, 13, 'ALTAMIRA'),
(610, 13, 'BARAYA'),
(611, 13, 'CAMPOALEGRE'),
(612, 13, 'COLOMBIA'),
(613, 13, 'ELIAS'),
(614, 13, 'GARZON'),
(615, 13, 'GIGANTE'),
(616, 13, 'GUADALUPE'),
(617, 13, 'HOBO'),
(618, 13, 'IQUIRA'),
(619, 13, 'ISNOS'),
(620, 13, 'LA ARGENTINA'),
(621, 13, 'LA PLATA'),
(622, 13, 'NATAGA'),
(623, 13, 'OPORAPA'),
(624, 13, 'PAICOL'),
(625, 13, 'PALERMO'),
(626, 13, 'PALESTINA'),
(627, 13, 'PITAL'),
(628, 13, 'PITALITO'),
(629, 13, 'RIVERA'),
(630, 13, 'SALADOBLANCO'),
(631, 13, 'SAN AGUSTIN'),
(632, 13, 'SANTA MARIA'),
(633, 13, 'SUAZA'),
(634, 13, 'TARQUI'),
(635, 13, 'TESALIA'),
(636, 13, 'TELLO'),
(637, 13, 'TERUEL'),
(638, 13, 'TIMANA'),
(639, 13, 'VILLAVIEJA'),
(640, 13, 'YAGUARA'),
(641, 14, 'RIOHACHA'),
(642, 14, 'ALBANIA'),
(643, 14, 'BARRANCAS'),
(644, 14, 'DIBULLA'),
(645, 14, 'DISTRACCION'),
(646, 14, 'EL MOLINO'),
(647, 14, 'FONSECA'),
(648, 14, 'HATONUEVO'),
(649, 14, 'LA JAGUA DEL PILAR'),
(650, 14, 'MAICAO'),
(651, 14, 'MANAURE'),
(652, 14, 'SAN JUAN DEL CESAR'),
(653, 14, 'URIBIA'),
(654, 14, 'URUMITA'),
(655, 14, 'VILLANUEVA'),
(656, 15, 'SANTA MARTA'),
(657, 15, 'ALGARROBO'),
(658, 15, 'ARACATACA'),
(659, 15, 'ARIGUANI'),
(660, 15, 'CERRO SAN ANTONIO'),
(661, 15, 'CHIBOLO'),
(662, 15, 'CIENAGA'),
(663, 15, 'CONCORDIA'),
(664, 15, 'EL BANCO'),
(665, 15, 'EL PIÑON'),
(666, 15, 'EL RETEN'),
(667, 15, 'FUNDACION'),
(668, 15, 'GUAMAL'),
(669, 15, 'NUEVA GRANADA'),
(670, 15, 'PEDRAZA'),
(671, 15, 'PIJIÑO DEL CARMEN'),
(672, 15, 'PIVIJAY'),
(673, 15, 'PLATO'),
(674, 15, 'PUEBLOVIEJO'),
(675, 15, 'REMOLINO'),
(676, 15, 'SABANAS DE SAN ANGEL'),
(677, 15, 'SALAMINA'),
(678, 15, 'SAN SEBASTIAN DE BUENAVISTA'),
(679, 15, 'SAN ZENON'),
(680, 15, 'SANTA ANA'),
(681, 15, 'SANTA BARBARA DE PINTO'),
(682, 15, 'SITIONUEVO'),
(683, 15, 'TENERIFE'),
(684, 15, 'ZAPAYAN'),
(685, 15, 'ZONA BANANERA'),
(686, 16, 'VILLAVICENCIO'),
(687, 16, 'ACACIAS'),
(688, 16, 'BARRANCA DE UPIA'),
(689, 16, 'CABUYARO'),
(690, 16, 'CASTILLA LA NUEVA'),
(691, 16, 'CUBARRAL'),
(692, 16, 'CUMARAL'),
(693, 16, 'EL CALVARIO'),
(694, 16, 'EL CASTILLO'),
(695, 16, 'EL DORADO'),
(696, 16, 'FUENTE DE ORO'),
(697, 16, 'GRANADA'),
(698, 16, 'GUAMAL'),
(699, 16, 'MAPIRIPAN'),
(700, 16, 'MESETAS'),
(701, 16, 'LA MACARENA'),
(702, 16, 'URIBE'),
(703, 16, 'LEJANIAS'),
(704, 16, 'PUERTO CONCORDIA'),
(705, 16, 'PUERTO GAITAN'),
(706, 16, 'PUERTO LOPEZ'),
(707, 16, 'PUERTO LLERAS'),
(708, 16, 'PUERTO RICO'),
(709, 16, 'RESTREPO'),
(710, 16, 'SAN CARLOS DE GUAROA'),
(711, 16, 'SAN JUAN DE ARAMA'),
(712, 16, 'SAN JUANITO'),
(713, 16, 'SAN MARTIN'),
(714, 16, 'VISTAHERMOSA'),
(715, 17, 'PASTO'),
(716, 17, 'ALBAN'),
(717, 17, 'ALDANA'),
(718, 17, 'ANCUYA'),
(719, 17, 'ARBOLEDA'),
(720, 17, 'BARBACOAS'),
(721, 17, 'BELEN'),
(722, 17, 'BUESACO'),
(723, 17, 'COLON'),
(724, 17, 'CONSACA'),
(725, 17, 'CONTADERO'),
(726, 17, 'CORDOBA'),
(727, 17, 'CUASPUD'),
(728, 17, 'CUMBAL'),
(729, 17, 'CUMBITARA'),
(730, 17, 'CHACHAGsI'),
(731, 17, 'EL CHARCO'),
(732, 17, 'EL PEÑOL'),
(733, 17, 'EL ROSARIO'),
(734, 17, 'EL TABLON DE GOMEZ'),
(735, 17, 'EL TAMBO'),
(736, 17, 'FUNES'),
(737, 17, 'GUACHUCAL'),
(738, 17, 'GUAITARILLA'),
(739, 17, 'GUALMATAN'),
(740, 17, 'ILES'),
(741, 17, 'IMUES'),
(742, 17, 'IPIALES'),
(743, 17, 'LA CRUZ'),
(744, 17, 'LA FLORIDA'),
(745, 17, 'LA LLANADA'),
(746, 17, 'LA TOLA'),
(747, 17, 'LA UNION'),
(748, 17, 'LEIVA'),
(749, 17, 'LINARES'),
(750, 17, 'LOS ANDES'),
(751, 17, 'MAGsI'),
(752, 17, 'MALLAMA'),
(753, 17, 'MOSQUERA'),
(754, 17, 'NARIÑO'),
(755, 17, 'OLAYA HERRERA'),
(756, 17, 'OSPINA'),
(757, 17, 'FRANCISCO PIZARRO'),
(758, 17, 'POLICARPA'),
(759, 17, 'POTOSI'),
(760, 17, 'PROVIDENCIA'),
(761, 17, 'PUERRES'),
(762, 17, 'PUPIALES'),
(763, 17, 'RICAURTE'),
(764, 17, 'ROBERTO PAYAN'),
(765, 17, 'SAMANIEGO'),
(766, 17, 'SANDONA'),
(767, 17, 'SAN BERNARDO'),
(768, 17, 'SAN LORENZO'),
(769, 17, 'SAN PABLO'),
(770, 17, 'SAN PEDRO DE CARTAGO'),
(771, 17, 'SANTA BARBARA'),
(772, 17, 'SANTACRUZ'),
(773, 17, 'SAPUYES'),
(774, 17, 'TAMINANGO'),
(775, 17, 'TANGUA'),
(776, 17, 'SAN ANDRES DE TUMACO'),
(777, 17, 'TUQUERRES'),
(778, 17, 'YACUANQUER'),
(779, 18, 'CUCUTA'),
(780, 18, 'ABREGO'),
(781, 18, 'ARBOLEDAS'),
(782, 18, 'BOCHALEMA'),
(783, 18, 'BUCARASICA'),
(784, 18, 'CACOTA'),
(785, 18, 'CACHIRA'),
(786, 18, 'CHINACOTA'),
(787, 18, 'CHITAGA'),
(788, 18, 'CONVENCION'),
(789, 18, 'CUCUTILLA'),
(790, 18, 'DURANIA'),
(791, 18, 'EL CARMEN'),
(792, 18, 'EL TARRA'),
(793, 18, 'EL ZULIA'),
(794, 18, 'GRAMALOTE'),
(795, 18, 'HACARI'),
(796, 18, 'HERRAN'),
(797, 18, 'LABATECA'),
(798, 18, 'LA ESPERANZA'),
(799, 18, 'LA PLAYA'),
(800, 18, 'LOS PATIOS'),
(801, 18, 'LOURDES'),
(802, 18, 'MUTISCUA'),
(803, 18, 'OCAÑA'),
(804, 18, 'PAMPLONA'),
(805, 18, 'PAMPLONITA'),
(806, 18, 'PUERTO SANTANDER'),
(807, 18, 'RAGONVALIA'),
(808, 18, 'SALAZAR'),
(809, 18, 'SAN CALIXTO'),
(810, 18, 'SAN CAYETANO'),
(811, 18, 'SANTIAGO'),
(812, 18, 'SARDINATA'),
(813, 18, 'SILOS'),
(814, 18, 'TEORAMA'),
(815, 18, 'TIBU'),
(816, 18, 'TOLEDO'),
(817, 18, 'VILLA CARO'),
(818, 18, 'VILLA DEL ROSARIO'),
(819, 19, 'ARMENIA'),
(820, 19, 'BUENAVISTA'),
(821, 19, 'CALARCA'),
(822, 19, 'CIRCASIA'),
(823, 19, 'CORDOBA'),
(824, 19, 'FILANDIA'),
(825, 19, 'GENOVA'),
(826, 19, 'LA TEBAIDA'),
(827, 19, 'MONTENEGRO'),
(828, 19, 'PIJAO'),
(829, 19, 'QUIMBAYA'),
(830, 19, 'SALENTO'),
(831, 20, 'PEREIRA'),
(832, 20, 'APIA'),
(833, 20, 'BALBOA'),
(834, 20, 'BELEN DE UMBRIA'),
(835, 20, 'DOSQUEBRADAS'),
(836, 20, 'GUATICA'),
(837, 20, 'LA CELIA'),
(838, 20, 'LA VIRGINIA'),
(839, 20, 'MARSELLA'),
(840, 20, 'MISTRATO'),
(841, 20, 'PUEBLO RICO'),
(842, 20, 'QUINCHIA'),
(843, 20, 'SANTA ROSA DE CABAL'),
(844, 20, 'SANTUARIO'),
(845, 21, 'BUCARAMANGA'),
(846, 21, 'AGUADA'),
(847, 21, 'ALBANIA'),
(848, 21, 'ARATOCA'),
(849, 21, 'BARBOSA'),
(850, 21, 'BARICHARA'),
(851, 21, 'BARRANCABERMEJA'),
(852, 21, 'BETULIA'),
(853, 21, 'BOLIVAR'),
(854, 21, 'CABRERA'),
(855, 21, 'CALIFORNIA'),
(856, 21, 'CAPITANEJO'),
(857, 21, 'CARCASI'),
(858, 21, 'CEPITA'),
(859, 21, 'CERRITO'),
(860, 21, 'CHARALA'),
(861, 21, 'CHARTA'),
(862, 21, 'CHIMA'),
(863, 21, 'CHIPATA'),
(864, 21, 'CIMITARRA'),
(865, 21, 'CONCEPCION'),
(866, 21, 'CONFINES'),
(867, 21, 'CONTRATACION'),
(868, 21, 'COROMORO'),
(869, 21, 'CURITI'),
(870, 21, 'EL CARMEN DE CHUCURI'),
(871, 21, 'EL GUACAMAYO'),
(872, 21, 'EL PEÑON'),
(873, 21, 'EL PLAYON'),
(874, 21, 'ENCINO'),
(875, 21, 'ENCISO'),
(876, 21, 'FLORIAN'),
(877, 21, 'FLORIDABLANCA'),
(878, 21, 'GALAN'),
(879, 21, 'GAMBITA'),
(880, 21, 'GIRON'),
(881, 21, 'GUACA'),
(882, 21, 'GUADALUPE'),
(883, 21, 'GUAPOTA'),
(884, 21, 'GUAVATA'),
(885, 21, 'GsEPSA'),
(886, 21, 'HATO'),
(887, 21, 'JESUS MARIA'),
(888, 21, 'JORDAN'),
(889, 21, 'LA BELLEZA'),
(890, 21, 'LANDAZURI'),
(891, 21, 'LA PAZ'),
(892, 21, 'LEBRIJA'),
(893, 21, 'LOS SANTOS'),
(894, 21, 'MACARAVITA'),
(895, 21, 'MALAGA'),
(896, 21, 'MATANZA'),
(897, 21, 'MOGOTES'),
(898, 21, 'MOLAGAVITA'),
(899, 21, 'OCAMONTE'),
(900, 21, 'OIBA'),
(901, 21, 'ONZAGA'),
(902, 21, 'PALMAR'),
(903, 21, 'PALMAS DEL SOCORRO'),
(904, 21, 'PARAMO'),
(905, 21, 'PIEDECUESTA'),
(906, 21, 'PINCHOTE'),
(907, 21, 'PUENTE NACIONAL'),
(908, 21, 'PUERTO PARRA'),
(909, 21, 'PUERTO WILCHES'),
(910, 21, 'RIONEGRO'),
(911, 21, 'SABANA DE TORRES'),
(912, 21, 'SAN ANDRES'),
(913, 21, 'SAN BENITO'),
(914, 21, 'SAN GIL'),
(915, 21, 'SAN JOAQUIN'),
(916, 21, 'SAN JOSE DE MIRANDA'),
(917, 21, 'SAN MIGUEL'),
(918, 21, 'SAN VICENTE DE CHUCURI'),
(919, 21, 'SANTA BARBARA'),
(920, 21, 'SANTA HELENA DEL OPON'),
(921, 21, 'SIMACOTA'),
(922, 21, 'SOCORRO'),
(923, 21, 'SUAITA'),
(924, 21, 'SUCRE'),
(925, 21, 'SURATA'),
(926, 21, 'TONA'),
(927, 21, 'VALLE DE SAN JOSE'),
(928, 21, 'VELEZ'),
(929, 21, 'VETAS'),
(930, 21, 'VILLANUEVA'),
(931, 21, 'ZAPATOCA'),
(932, 22, 'SINCELEJO'),
(933, 22, 'BUENAVISTA'),
(934, 22, 'CAIMITO'),
(935, 22, 'COLOSO'),
(936, 22, 'COROZAL'),
(937, 22, 'COVEÑAS'),
(938, 22, 'CHALAN'),
(939, 22, 'EL ROBLE'),
(940, 22, 'GALERAS'),
(941, 22, 'GUARANDA'),
(942, 22, 'LA UNION'),
(943, 22, 'LOS PALMITOS'),
(944, 22, 'MAJAGUAL'),
(945, 22, 'MORROA'),
(946, 22, 'OVEJAS'),
(947, 22, 'PALMITO'),
(948, 22, 'SAMPUES'),
(949, 22, 'SAN BENITO ABAD'),
(950, 22, 'SAN JUAN DE BETULIA'),
(951, 22, 'SAN MARCOS'),
(952, 22, 'SAN ONOFRE'),
(953, 22, 'SAN PEDRO'),
(954, 22, 'SAN LUIS DE SINCE'),
(955, 22, 'SUCRE'),
(956, 22, 'SANTIAGO DE TOLU'),
(957, 22, 'TOLU VIEJO'),
(958, 23, 'IBAGUE'),
(959, 23, 'ALPUJARRA'),
(960, 23, 'ALVARADO'),
(961, 23, 'AMBALEMA'),
(962, 23, 'ANZOATEGUI'),
(963, 23, 'ARMERO'),
(964, 23, 'ATACO'),
(965, 23, 'CAJAMARCA'),
(966, 23, 'CARMEN DE APICALA'),
(967, 23, 'CASABIANCA'),
(968, 23, 'CHAPARRAL'),
(969, 23, 'COELLO'),
(970, 23, 'COYAIMA'),
(971, 23, 'CUNDAY'),
(972, 23, 'DOLORES'),
(973, 23, 'ESPINAL'),
(974, 23, 'FALAN'),
(975, 23, 'FLANDES'),
(976, 23, 'FRESNO'),
(977, 23, 'GUAMO'),
(978, 23, 'HERVEO'),
(979, 23, 'HONDA'),
(980, 23, 'ICONONZO'),
(981, 23, 'LERIDA'),
(982, 23, 'LIBANO'),
(983, 23, 'MARIQUITA'),
(984, 23, 'MELGAR'),
(985, 23, 'MURILLO'),
(986, 23, 'NATAGAIMA'),
(987, 23, 'ORTEGA'),
(988, 23, 'PALOCABILDO'),
(989, 23, 'PIEDRAS'),
(990, 23, 'PLANADAS'),
(991, 23, 'PRADO'),
(992, 23, 'PURIFICACION'),
(993, 23, 'RIOBLANCO'),
(994, 23, 'RONCESVALLES'),
(995, 23, 'ROVIRA'),
(996, 23, 'SALDAÑA'),
(997, 23, 'SAN ANTONIO'),
(998, 23, 'SAN LUIS'),
(999, 23, 'SANTA ISABEL'),
(1000, 23, 'SUAREZ'),
(1001, 23, 'VALLE DE SAN JUAN'),
(1002, 23, 'VENADILLO'),
(1003, 23, 'VILLAHERMOSA'),
(1004, 23, 'VILLARRICA'),
(1005, 24, 'CALI'),
(1006, 24, 'ALCALA'),
(1007, 24, 'ANDALUCIA'),
(1008, 24, 'ANSERMANUEVO'),
(1009, 24, 'ARGELIA'),
(1010, 24, 'BOLIVAR'),
(1011, 24, 'BUENAVENTURA'),
(1012, 24, 'GUADALAJARA DE BUGA'),
(1013, 24, 'BUGALAGRANDE'),
(1014, 24, 'CAICEDONIA'),
(1015, 24, 'CALIMA'),
(1016, 24, 'CANDELARIA'),
(1017, 24, 'CARTAGO'),
(1018, 24, 'DAGUA'),
(1019, 24, 'EL AGUILA'),
(1020, 24, 'EL CAIRO'),
(1021, 24, 'EL CERRITO'),
(1022, 24, 'EL DOVIO'),
(1023, 24, 'FLORIDA'),
(1024, 24, 'GINEBRA'),
(1025, 24, 'GUACARI'),
(1026, 24, 'JAMUNDI'),
(1027, 24, 'LA CUMBRE'),
(1028, 24, 'LA UNION'),
(1029, 24, 'LA VICTORIA'),
(1030, 24, 'OBANDO'),
(1031, 24, 'PALMIRA'),
(1032, 24, 'PRADERA'),
(1033, 24, 'RESTREPO'),
(1034, 24, 'RIOFRIO'),
(1035, 24, 'ROLDANILLO'),
(1036, 24, 'SAN PEDRO'),
(1037, 24, 'SEVILLA'),
(1038, 24, 'TORO'),
(1039, 24, 'TRUJILLO'),
(1040, 24, 'TULUA'),
(1041, 24, 'ULLOA'),
(1042, 24, 'VERSALLES'),
(1043, 24, 'VIJES'),
(1044, 24, 'YOTOCO'),
(1045, 24, 'YUMBO'),
(1046, 24, 'ZARZAL'),
(1047, 25, 'ARAUCA'),
(1048, 25, 'ARAUQUITA'),
(1049, 25, 'CRAVO NORTE'),
(1050, 25, 'FORTUL'),
(1051, 25, 'PUERTO RONDON'),
(1052, 25, 'SARAVENA'),
(1053, 25, 'TAME'),
(1054, 26, 'YOPAL'),
(1055, 26, 'AGUAZUL'),
(1056, 26, 'CHAMEZA'),
(1057, 26, 'HATO COROZAL'),
(1058, 26, 'LA SALINA'),
(1059, 26, 'MANI'),
(1060, 26, 'MONTERREY'),
(1061, 26, 'NUNCHIA'),
(1062, 26, 'OROCUE'),
(1063, 26, 'PAZ DE ARIPORO'),
(1064, 26, 'PORE'),
(1065, 26, 'RECETOR'),
(1066, 26, 'SABANALARGA'),
(1067, 26, 'SACAMA'),
(1068, 26, 'SAN LUIS DE PALENQUE'),
(1069, 26, 'TAMARA'),
(1070, 26, 'TAURAMENA'),
(1071, 26, 'TRINIDAD'),
(1072, 26, 'VILLANUEVA'),
(1073, 27, 'MOCOA'),
(1074, 27, 'COLON'),
(1075, 27, 'ORITO'),
(1076, 27, 'PUERTO ASIS'),
(1077, 27, 'PUERTO CAICEDO'),
(1078, 27, 'PUERTO GUZMAN'),
(1079, 27, 'LEGUIZAMO'),
(1080, 27, 'SIBUNDOY'),
(1081, 27, 'SAN FRANCISCO'),
(1082, 27, 'SAN MIGUEL'),
(1083, 27, 'SANTIAGO'),
(1084, 27, 'VALLE DEL GUAMUEZ'),
(1085, 27, 'VILLAGARZON'),
(1086, 28, 'SAN ANDRES'),
(1087, 28, 'PROVIDENCIA'),
(1088, 29, 'LETICIA'),
(1089, 29, 'EL ENCANTO'),
(1090, 29, 'LA CHORRERA'),
(1091, 29, 'LA PEDRERA'),
(1092, 29, 'LA VICTORIA'),
(1093, 29, 'MIRITI - PARANA'),
(1094, 29, 'PUERTO ALEGRIA'),
(1095, 29, 'PUERTO ARICA'),
(1096, 29, 'PUERTO NARIÑO'),
(1097, 29, 'PUERTO SANTANDER'),
(1098, 29, 'TARAPACA'),
(1099, 30, 'INIRIDA'),
(1100, 30, 'BARRANCO MINAS'),
(1101, 30, 'MAPIRIPANA'),
(1102, 30, 'SAN FELIPE'),
(1103, 30, 'PUERTO COLOMBIA'),
(1104, 30, 'LA GUADALUPE'),
(1105, 30, 'CACAHUAL'),
(1106, 30, 'PANA PANA'),
(1107, 30, 'MORICHAL'),
(1108, 31, 'SAN JOSE DEL GUAVIARE'),
(1109, 31, 'CALAMAR'),
(1110, 31, 'EL RETORNO'),
(1111, 31, 'MIRAFLORES'),
(1112, 32, 'MITU'),
(1113, 32, 'CARURU'),
(1114, 32, 'PACOA'),
(1115, 32, 'TARAIRA'),
(1116, 32, 'PAPUNAUA'),
(1117, 32, 'YAVARATE'),
(1118, 33, 'PUERTO CARREÑO'),
(1119, 33, 'LA PRIMAVERA'),
(1120, 33, 'SANTA ROSALIA'),
(1121, 33, 'CUMARIBO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `politicas`
--

CREATE TABLE `politicas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos`
--

CREATE TABLE `procesos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sede_id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requisitos` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alcance` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `obj_esp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `recursos` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `salidas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `estrategias` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `procesos`
--

INSERT INTO `procesos` (`id`, `sede_id`, `nombre`, `lider`, `requisitos`, `alcance`, `obj_esp`, `recursos`, `salidas`, `estrategias`, `created_at`, `updated_at`) VALUES
(1, 1, 'Administracion', 'Elias Vega Delgado.', 'La implementación de actividades que minimicen los riesgos laborales', 'Evitar riesgo de enfermedades por labores relacionados con los cargos', 'Implementar un sistema de actividades para el correcto desempeño del cargo', 'Recursos propios de la empresa', 'Plan de mejoramiento laboral sin riesgos de enfermedades relacionadas con el cargo', 'Implementacion de actividades cotidianas para hacer costumbre de ellas con brecks activos', '2020-06-01 21:04:11', '2020-06-06 11:19:41'),
(2, 2, 'Administracion', 'Yeferson ramires', 'Profesionales administrativos', 'Administrar para el correcto funcionamiento de la empresa', 'Velar por el bienestar de la empresa', 'Recursos necesarios para esta labor provenientes de la empresa', 'Bienestar y cumplimiento de las tareas asignadas de la misma', 'Todas las necesarias para la misma', '2020-06-01 22:42:56', '2020-06-01 22:42:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE `programas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rol` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`, `descripcion`) VALUES
(1, 'Admin', 'Administrador del sistema en general'),
(2, 'Asesor', 'Encargado de administrar el sistema dentro de la empresa'),
(3, 'Gerente', 'Responsable general del sistema en la empresa'),
(4, 'Responsable', 'Encargado del manejo del sistemas dentro de la empresa'),
(5, 'Jefe de proceso', 'Encargado del manejo del sistema dentro del proceso'),
(6, 'Jefe de cargo', 'Encargado del manejo del sistema dentro del cargo'),
(7, 'Trabajador', 'Encargado de alimentar el sistema en sus tareas asignadas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE `sedes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nit` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nivel_riesgo` int(11) NOT NULL,
  `gerente` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departamento_id` bigint(20) UNSIGNED NOT NULL,
  `municipio_id` bigint(20) UNSIGNED NOT NULL,
  `empresa_id` bigint(20) UNSIGNED NOT NULL,
  `actividadEconomica_id` bigint(20) UNSIGNED NOT NULL,
  `arl_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`id`, `nombre`, `nit`, `direccion`, `telefono`, `celular`, `nivel_riesgo`, `gerente`, `departamento_id`, `municipio_id`, `empresa_id`, `actividadEconomica_id`, `arl_id`, `created_at`, `updated_at`) VALUES
(1, 'Díscom Principal', '91260182-1', 'Carrera 21 # 99-27 Fontana', '037-6312957', '3168886468', 3, 'Elias Vega D.', 21, 845, 1, 220, 1, '2020-06-01 20:56:20', '2020-06-01 20:56:20'),
(2, 'Emdisoft', '123456789-1', 'Calle 43 # 14-31 centro', '037-6719595', '3127459317', 4, 'Yeferson A. Ramires Villamizar', 21, 845, 2, 143, 7, '2020-06-01 22:35:49', '2020-06-01 22:35:49'),
(3, 'Emdisoft Florida', '123456789-2', 'Calle 31 # 22-60 Cañaveral', '037-6525854', '3117594682', 4, 'Edgar Mauricio Vargas Prada', 21, 877, 2, 144, 1, '2020-06-01 22:38:10', '2020-06-01 22:38:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `servicio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `servicio`) VALUES
(1, 'servicio básico'),
(2, 'Servicio intermedio'),
(3, 'Servicio total');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identificacion` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `telefono` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nivel_educativo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personas_cargo` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `cargo_id` bigint(20) UNSIGNED NOT NULL,
  `proceso_id` bigint(20) UNSIGNED NOT NULL,
  `sede_id` bigint(20) UNSIGNED NOT NULL,
  `empresa_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `genero`, `identificacion`, `edad`, `telefono`, `nivel_educativo`, `personas_cargo`, `estado`, `remember_token`, `created_at`, `updated_at`, `role_id`, `cargo_id`, `proceso_id`, `sede_id`, `empresa_id`) VALUES
(1, 'Elias Vega Delgado', 'discom.is@gmail.com', NULL, '$2y$10$Vc3XnJGuhaSwYNAgeDV2Qufzvv4BJhIyqIPLZQF.7dfpHRqEeuxJi', 'M', '91260182', 51, '3168886468', 'Universidad', 15, 1, NULL, '2020-06-01 21:58:51', '2020-06-01 21:58:51', 1, 1, 1, 1, 1),
(2, 'Elcana Serrano A.', 'elcanaserrano@gmail.com', NULL, '$2y$10$HLIa40WN5T/EHowq7C2zyeDVzY2nImwStPsP6SNazBJ.LsQNs9zu2', 'F', '63545048', 36, '3173086590', 'Universidad', 6, 1, NULL, '2020-06-01 22:10:10', '2020-06-01 22:10:10', 2, 2, 1, 1, 1),
(3, 'Elkin Ardila A.', 'elkin@gmail.com', NULL, '$2y$10$VCoDX1zT8STYqENI1UlLJefuKkc5ryDEkyYJxOGnITZcalQnOxH9W', 'M', '1098456123', 32, '3157415623', 'Tecnico', 0, 1, NULL, '2020-06-01 22:10:11', '2020-06-01 22:10:11', 2, 2, 1, 1, 1),
(4, 'Dana Pinto S.', 'dana@gmail.com', NULL, '$2y$10$uFreKXiRzowzlZJZAqWaQuBXBkzxXHEa5oZEy5..gL7Bby9PN.SWC', 'F', '1098123456', 21, '3127539173', 'Tecnico', 0, 1, NULL, '2020-06-01 22:10:11', '2020-06-01 22:10:11', 2, 2, 1, 1, 1),
(5, 'Yeferson Ramires V.', 'yeferson@gmail.com', NULL, '$2y$10$g8623RhJKGQXKDrrccNlWeIGP4/7blbtoRJ1SqK3OeuOjLhc6jTPK', 'M', '10987893416', 26, '3104568246', 'Universidad', 0, 1, NULL, '2020-06-01 22:10:11', '2020-06-01 22:10:11', 2, 2, 1, 1, 1),
(6, 'Yeferson Ramires', 'yefry@gmail.com', NULL, '$2y$10$8kv9hQFt.uO6L1Ki.1mlsul6HOiMbinaUfmcYyKHIP0LKDrRgNXF2', 'M', '1098753951', 27, '3157297553', 'Universidad', 30, 1, NULL, '2020-06-01 22:48:21', '2020-06-01 22:52:16', 3, 3, 2, 2, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad_economicas`
--
ALTER TABLE `actividad_economicas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `actividad_economicas_codigo_unique` (`codigo`);

--
-- Indices de la tabla `arls`
--
ALTER TABLE `arls`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `arls_nombre_unique` (`nombre`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cargos_empresa_id_foreign` (`empresa_id`),
  ADD KEY `cargos_sede_id_foreign` (`sede_id`),
  ADD KEY `cargos_proceso_id_foreign` (`proceso_id`);

--
-- Indices de la tabla `cargo_convocatoria`
--
ALTER TABLE `cargo_convocatoria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cargo_convocatoria_cargo_id_foreign` (`cargo_id`),
  ADD KEY `cargo_convocatoria_convocatoria_id_foreign` (`convocatoria_id`);

--
-- Indices de la tabla `cargo_documentos`
--
ALTER TABLE `cargo_documentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cargo_documentos_cargo_id_foreign` (`cargo_id`),
  ADD KEY `cargo_documentos_documento_id_foreign` (`documento_id`);

--
-- Indices de la tabla `cargo_inspeccion`
--
ALTER TABLE `cargo_inspeccion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cargo_inspeccion_cargo_id_foreign` (`cargo_id`),
  ADD KEY `cargo_inspeccion_inspeccion_id_foreign` (`inspeccion_id`);

--
-- Indices de la tabla `cargo_matriz_riesgo`
--
ALTER TABLE `cargo_matriz_riesgo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cargo_matriz_riesgo_cargo_id_foreign` (`cargo_id`),
  ADD KEY `cargo_matriz_riesgo_matrizriesgo_id_foreign` (`matrizRiesgo_id`);

--
-- Indices de la tabla `cargo_politica`
--
ALTER TABLE `cargo_politica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cargo_politica_cargo_id_foreign` (`cargo_id`),
  ADD KEY `cargo_politica_politica_id_foreign` (`politica_id`);

--
-- Indices de la tabla `cargo_programa`
--
ALTER TABLE `cargo_programa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cargo_programa_cargo_id_foreign` (`cargo_id`),
  ADD KEY `cargo_programa_matrizriesgo_id_foreign` (`matrizRiesgo_id`);

--
-- Indices de la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `convocatorias_empresa_id_foreign` (`empresa_id`),
  ADD KEY `convocatorias_sede_id_foreign` (`sede_id`),
  ADD KEY `convocatorias_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresas_departamento_id_foreign` (`departamento_id`),
  ADD KEY `empresas_municipio_id_foreign` (`municipio_id`),
  ADD KEY `empresas_servicio_id_foreign` (`servicio_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inspeccions`
--
ALTER TABLE `inspeccions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `matriz_riesgos`
--
ALTER TABLE `matriz_riesgos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matriz_riesgos_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `municipios_departamento_id_foreign` (`departamento_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `politicas`
--
ALTER TABLE `politicas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `politicas_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `procesos`
--
ALTER TABLE `procesos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `procesos_sede_id_foreign` (`sede_id`);

--
-- Indices de la tabla `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `programas_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sedes_departamento_id_foreign` (`departamento_id`),
  ADD KEY `sedes_municipio_id_foreign` (`municipio_id`),
  ADD KEY `sedes_empresa_id_foreign` (`empresa_id`),
  ADD KEY `sedes_actividadeconomica_id_foreign` (`actividadEconomica_id`),
  ADD KEY `sedes_arl_id_foreign` (`arl_id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_identificacion_unique` (`identificacion`),
  ADD KEY `users_role_id_foreign` (`role_id`),
  ADD KEY `users_cargo_id_foreign` (`cargo_id`),
  ADD KEY `users_proceso_id_foreign` (`proceso_id`),
  ADD KEY `users_sede_id_foreign` (`sede_id`),
  ADD KEY `users_empresa_id_foreign` (`empresa_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad_economicas`
--
ALTER TABLE `actividad_economicas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=496;

--
-- AUTO_INCREMENT de la tabla `arls`
--
ALTER TABLE `arls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cargo_convocatoria`
--
ALTER TABLE `cargo_convocatoria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cargo_documentos`
--
ALTER TABLE `cargo_documentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `cargo_inspeccion`
--
ALTER TABLE `cargo_inspeccion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cargo_matriz_riesgo`
--
ALTER TABLE `cargo_matriz_riesgo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cargo_politica`
--
ALTER TABLE `cargo_politica`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cargo_programa`
--
ALTER TABLE `cargo_programa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inspeccions`
--
ALTER TABLE `inspeccions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `matriz_riesgos`
--
ALTER TABLE `matriz_riesgos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1122;

--
-- AUTO_INCREMENT de la tabla `politicas`
--
ALTER TABLE `politicas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `procesos`
--
ALTER TABLE `procesos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `sedes`
--
ALTER TABLE `sedes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD CONSTRAINT `cargos_empresa_id_foreign` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cargos_proceso_id_foreign` FOREIGN KEY (`proceso_id`) REFERENCES `procesos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cargos_sede_id_foreign` FOREIGN KEY (`sede_id`) REFERENCES `sedes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cargo_convocatoria`
--
ALTER TABLE `cargo_convocatoria`
  ADD CONSTRAINT `cargo_convocatoria_cargo_id_foreign` FOREIGN KEY (`cargo_id`) REFERENCES `cargos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cargo_convocatoria_convocatoria_id_foreign` FOREIGN KEY (`convocatoria_id`) REFERENCES `convocatorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cargo_documentos`
--
ALTER TABLE `cargo_documentos`
  ADD CONSTRAINT `cargo_documentos_cargo_id_foreign` FOREIGN KEY (`cargo_id`) REFERENCES `cargos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cargo_documentos_documento_id_foreign` FOREIGN KEY (`documento_id`) REFERENCES `documentos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cargo_inspeccion`
--
ALTER TABLE `cargo_inspeccion`
  ADD CONSTRAINT `cargo_inspeccion_cargo_id_foreign` FOREIGN KEY (`cargo_id`) REFERENCES `cargos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cargo_inspeccion_inspeccion_id_foreign` FOREIGN KEY (`inspeccion_id`) REFERENCES `inspeccions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cargo_matriz_riesgo`
--
ALTER TABLE `cargo_matriz_riesgo`
  ADD CONSTRAINT `cargo_matriz_riesgo_cargo_id_foreign` FOREIGN KEY (`cargo_id`) REFERENCES `cargos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cargo_matriz_riesgo_matrizriesgo_id_foreign` FOREIGN KEY (`matrizRiesgo_id`) REFERENCES `matriz_riesgos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cargo_politica`
--
ALTER TABLE `cargo_politica`
  ADD CONSTRAINT `cargo_politica_cargo_id_foreign` FOREIGN KEY (`cargo_id`) REFERENCES `cargos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cargo_politica_politica_id_foreign` FOREIGN KEY (`politica_id`) REFERENCES `politicas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cargo_programa`
--
ALTER TABLE `cargo_programa`
  ADD CONSTRAINT `cargo_programa_cargo_id_foreign` FOREIGN KEY (`cargo_id`) REFERENCES `cargos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cargo_programa_matrizriesgo_id_foreign` FOREIGN KEY (`matrizRiesgo_id`) REFERENCES `matriz_riesgos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
  ADD CONSTRAINT `convocatorias_empresa_id_foreign` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `convocatorias_sede_id_foreign` FOREIGN KEY (`sede_id`) REFERENCES `sedes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `convocatorias_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `empresas_departamento_id_foreign` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `empresas_municipio_id_foreign` FOREIGN KEY (`municipio_id`) REFERENCES `municipios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `empresas_servicio_id_foreign` FOREIGN KEY (`servicio_id`) REFERENCES `servicios` (`id`);

--
-- Filtros para la tabla `matriz_riesgos`
--
ALTER TABLE `matriz_riesgos`
  ADD CONSTRAINT `matriz_riesgos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD CONSTRAINT `municipios_departamento_id_foreign` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `politicas`
--
ALTER TABLE `politicas`
  ADD CONSTRAINT `politicas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `procesos`
--
ALTER TABLE `procesos`
  ADD CONSTRAINT `procesos_sede_id_foreign` FOREIGN KEY (`sede_id`) REFERENCES `sedes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `programas`
--
ALTER TABLE `programas`
  ADD CONSTRAINT `programas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD CONSTRAINT `sedes_actividadeconomica_id_foreign` FOREIGN KEY (`actividadEconomica_id`) REFERENCES `actividad_economicas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sedes_arl_id_foreign` FOREIGN KEY (`arl_id`) REFERENCES `arls` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sedes_departamento_id_foreign` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`),
  ADD CONSTRAINT `sedes_empresa_id_foreign` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sedes_municipio_id_foreign` FOREIGN KEY (`municipio_id`) REFERENCES `municipios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_cargo_id_foreign` FOREIGN KEY (`cargo_id`) REFERENCES `cargos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_empresa_id_foreign` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_proceso_id_foreign` FOREIGN KEY (`proceso_id`) REFERENCES `procesos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_sede_id_foreign` FOREIGN KEY (`sede_id`) REFERENCES `sedes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
