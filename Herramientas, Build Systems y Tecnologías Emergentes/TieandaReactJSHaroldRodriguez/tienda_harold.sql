-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 26-11-2019 a las 17:59:33
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_harold`
--
CREATE DATABASE IF NOT EXISTS `tienda_harold` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tienda_harold`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `disponibilidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `imagen`, `precio`, `disponibilidad`) VALUES
(1, 'Aguacate', 'El aguacate es un fruto exótico carnoso que se obtiene del árbol tropical del mismo nombre. En algunas partes de América del Sur se conoce como Palta. Presenta unas dimensiones de 5-6 cm de longitud. El peso normal oscila entre 200-400 g, aunque pueden encontrarse piezas de hasta 2 kg de peso. La corteza es gruesa y dura de color verde cuyo tono depende de la variedad. La pulpa es aceitosa de color crema a verde amarillento, con un sabor similar a la nuez. Posee una única semilla redondeada de color pardo claro y 2-4 cm.', '../../../assets/img/aguacate.jpg', '75', 145),
(3, 'Ajo', 'El ajo es un cultivo muy antiguo aprovechado por el bulbo que forma en la base de sus hojas. Es muy apreciado como condimento por el fuerte y característico sabor que presenta, y es un ingrediente muy utilizado sobre todo en la cocina mediterránea. Posee múltiples efectos medicinales, debidos a las sustancias azufradas que contiene.', '../../../assets/img/ajo.jpg', '45', 49),
(5, 'Calabaza', 'La carne de la calabaza se consume cocinada como verdura, cocida, frita, gratinada, acompañada de salsas y como guarnición de diversos platos. Sin embargo esta carne es algo insípida por lo que se suele condimentar con hierbas aromáticas. Las variedades de invierno son muy utilizadas en repostería y la calabacera se cultiva tanto por su fruto como por sus semillas, las cuales se pueden consumir como frutos secos o extraer de ellas un aceite combustible y culinario. Incluso las hojas y flores de la planta se pueden consumir como verdura.', '../../../assets/img/calabaza.jpg', '60', 72),
(6, 'Cebolla', 'La cebolla pertenece a la familia de las Liliáceas, y su nombre científico es Allium cepa. Es una planta bianual, es decir, su ciclo dura dos años. Durante el primero forma el bulbo por el que se cultiva, y si se deja un año más en campo florece. Su sistema radicular está formado por un gran número de raíces blancas.', '../../../assets/img/cebolla.jpg', '14', 21),
(7, 'Canela', 'El árbol de la canela, conocido como canelo,​ (Cinnamomum zeylanicum o Cinnamomum verum J.Presl) es un árbol de hoja perenne, de 10 a 15 metros de altura, procedente de Sri Lanka. Se aprovecha como especia su corteza interna, que se obtiene pelando y frotando las ramas.', '../../../assets/img/canela.jpg', '95', 25),
(8, 'Fresa', 'La fresa es un fruto de color rojo brillante, suculento y fragante que se obtiene de la planta que recibe su mismo nombre. En Occidente es considerada la \"reina de las frutas\". Además de poderse comer cruda se puede consumir como compota, mermelada,... Es empleada con fines medicinales ya que posee excelentes propiedades que ayudan a preservar la salud.', '../../../assets/img/fresa.jpg', '13', 250),
(9, 'Kiwi', 'El kiwi es un fruto de forma ovoide, de tamaño variable y recubierto de una piel fina de color marrón, ligeramente vellosa. Puede tener de 4 a 7,5cm de longitud por 3,5 a 5cm de anchura y el peso varía de 30-150g en función de la variedad, las condiciones climáticas y del sistema de cultivo. La pulpa puede ser de color verde de distinta tonalidad según la variedad, tierna, jugosa y de sabor agridulce. Presenta numerosas y pequeñas semillas negras comestibles. El color de la pulpa y el sabor delicado de la misma que recuerda en parte a la uva, a la fresa y a la piña, lo hacen muy agradable.', '../../../assets/img/kiwi.jpg', '27', 250),
(10, 'Manzana', 'La manzana es el fruto ideal para tomar a cualquier hora y participa positivamente en la consecución del equilibrio alimentario. La piel puede ser de color verde, amarilla o rojiza, y la carne va desde un sabor agrio hasta el dulce. Es uno de los frutos más consumidos en el mundo. La gran cantidad de variedades existentes hacen que se encuentren al alcance del consumidor durante todo el año.', '../../../assets/img/manzana.jpg', '18', 90),
(11, 'Naranja', 'La naranja es un fruto redondo, color naranja, consumido mayoritariamente en invierno. La pulpa del interior es también anaranjada y está formada por pequeñas bolsitas llenas de zumo. La naranja se usa para consumo en fresco y, para la industria, principalmente en zumo.', '../../../assets/img/naranja.jpg', '35', 410),
(12, 'papa', 'La papa es una especie de planta herbácea perteneciente al género Solanum de la familia de las solanáceas originaria de Sudamérica y cultivada por todo el mundo por sus tubérculos comestibles. Fue domesticada en el altiplano andino por sus habitantes hace unos 8000 años y más tarde fue llevada a Europa por los conquistadores españoles como una curiosidad botánica más que como una planta alimenticia. Su consumo fue creciendo y su cultivo se expandió a todo el mundo hasta convertirse hoy día en uno de los principales alimentos para el ser humano.', '../../../assets/img/papa.jpg', '45', 660),
(13, 'Tomate', 'El tomate es una especie de planta herbácea del género Solanum de la familia Solanaceae; es nativa de Centro y Sudamérica y su uso como comida se habría originado en México hace unos 2500 años.5​ El nombre proviene de la palabra náhuatl tomatl.Es cultivada en el mundo entero para su consumo tanto fresco como procesado de diferentes modos (salsa, puré, zumo, deshidratado, enlatado).', '../../../assets/img/tomate.jpg', '77', 455),
(14, 'Zanahoria ', 'La zanahoria es una hortaliza que pertenece a la familia de las umbelíferas, también denominadas apiáceas, y considerada la especie más importante y de mayor consumo dentro de esta familia. Es la forma domesticada de la zanahoria silvestre, oriunda de Europa y Asia sudoccidental. Se cultiva por su raíz mucho más grande, sabrosa y de textura menos fibrosa, pero continúa siendo la misma especie.', '../../../assets/img/zanahoria.jpg', '17', 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `clave`) VALUES
(1, 'Harold Rodriguez Mendoza', 'hrodrimendoza@gmail.com', '123456'),
(2, 'Jobseph Rodriguez Mendoza', 'jrodriguez123@gmail.com', '123456'),
(3, 'Maria Mendoza Moreno', 'mariamendoza@gmail.com', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
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
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
