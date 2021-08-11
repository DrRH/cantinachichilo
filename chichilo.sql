-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-06-2021 a las 20:04:28
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `chichilo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alertas`
--

CREATE TABLE `alertas` (
  `idAlerta` int(11) NOT NULL,
  `tipo` int(3) NOT NULL,
  `descripcion` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `texto` varchar(1000) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `alertas`
--

INSERT INTO `alertas` (`idAlerta`, `tipo`, `descripcion`, `texto`) VALUES
(1, 1, 'Primer alerta que se genera en esta página', 'Estamos actualizando nuestra página web. Muy pronto podrás encontrar nuevas funciones que te permitiran tener un mayor control de toda tu información.\r\n\r\nNoticias de Facebook en enero 2021:\r\nAquí puedes ir leyendo todas las noticias de Facebook que nos vaya dejando en este mes de enero:\r\n\r\nFacebook se introduce en tus mensajes de WhatsApp\r\nWhatsApp actualiza su política de privacidad para que Facebook pueda almacenar y administrar tus chats de WhatsApp. La unión de los mensajes entre estas dos apps está cada vez más cerca.\r\n\r\nAñadir fotos recientes más fácilmente\r\nFacebook prueba una nueva forma más fácil de agregar fotos recientes en tus publicaciones. Se quiere priorizar las imágenes sobre el texto a la hora de compartir contenidos porque obtienen mayores resultados.\r\n\r\nAdiós a los Me gusta en las páginas\r\nFacebook elimina el botón de Me gusta en las páginas y solo deja el de Seguir. El nuevo diseño se asemeja más a cualquier página de Instagram o Twitter, es decir, más social y simp'),
(2, 3, 'Segunda alerta', ''),
(3, 2, 'Saldo pendiente por Pagar.', 'Se le recuerda que usted tiene un saldo pendiente de $200.000 a la fecha.'),
(4, 1, 'Primera alerta en la base de datos.', ''),
(5, 2, '$1\'500.000 pendientes por pagar.', ''),
(6, 2, 'Saldo pendiente por Pagar.', 'Se le recuerda que usted tiene un saldo pendiente de $200.000 a la fecha.'),
(7, 2, 'La fecha debe ser Mayo 25 de 2021', 'Se le recuerda que usted tiene un saldo pendiente de $200.000 a la fecha.'),
(8, 1, 'Pago por $1\'500.000.', 'Hemos recibido su pago por $1\'500.000.\r\n\r\nGracias por ponerse al día.'),
(9, 2, '$1\'500.000 pendientes por pagar.', 'Recuerde Pagar su factura del mes de Mayo.\r\n\r\nApreciado cliente, si ya realizó dicho pago por favor haga caso omiso a este mensaje.\r\n\r\nGracias.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `passwords`
--

CREATE TABLE `passwords` (
  `id` int(11) NOT NULL,
  `mail` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `token` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `codigo` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `passwords`
--

INSERT INTO `passwords` (`id`, `mail`, `token`, `codigo`, `fecha`) VALUES
(1, 'usuario6@correo.com', '0a0e8533f0', 407825, '2021-06-10 20:38:49'),
(2, 'usuario6@correo.com', '56e925361d', 835157, '2021-06-10 20:58:45'),
(3, 'usuario6@correo.com', '26cb2cecc3', 106509, '2021-06-10 21:19:43'),
(4, 'usuario6@correo.com', '4477e44f9b', 941324, '2021-06-10 21:27:45'),
(5, 'usuario6@correo.com', '2f514bd6e7', 329012, '2021-06-10 21:41:49'),
(6, 'usuario6@correo.com', '67334329a6', 864027, '2021-06-11 17:11:38'),
(7, 'usuario6@correo.com', '4b47983750', 153250, '2021-06-11 17:51:11'),
(8, 'usuario6@correo.com', '849896fdeb', 394199, '2021-06-11 19:04:39'),
(9, 'usuario6@correo.com', '520db74ede', 305294, '2021-06-11 19:17:48'),
(10, 'usuario6@correo.com', '52e6f684a3', 263410, '2021-06-11 20:39:28'),
(11, 'usuario6@correo.com', '7d57e39598', 197788, '2021-06-11 20:53:10'),
(12, 'usuario6@correo.com', '56ea6803d0', 919880, '2021-06-11 21:06:17'),
(13, 'usuario6@correo.com', '52bed59d22', 635626, '2021-06-11 21:18:10'),
(14, 'usuario6@correo.com', 'a872e0e423', 391382, '2021-06-11 21:31:54'),
(15, 'usuario6@correo.com', '7c5984c064', 124714, '2021-06-11 21:47:19'),
(16, 'usuario6@correo.com', 'c1dc4c84f2', 779258, '2021-06-11 23:13:41'),
(17, 'usuario6@correo.com', 'f00e51cf8a', 676874, '2021-06-11 23:32:17'),
(18, 'usuario6@correo.com', 'be6accf72d', 164324, '2021-06-11 23:39:12'),
(19, 'usuario6@correo.com', '9cee5a7e19', 439232, '2021-06-11 23:39:54'),
(20, 'usuario6@correo.com', 'd1b252b167', 177279, '2021-06-11 23:41:57'),
(21, 'usuario6@correo.com', '9dc24ba710', 578420, '2021-06-12 00:02:43'),
(22, 'usuario6@correo.com', '80cba11582', 738405, '2021-06-12 00:07:44'),
(23, 'usuario6@correo.com', '81cfbee440', 407580, '2021-06-12 00:50:05'),
(24, 'usuario6@correo.com', '271f4a3f72', 469683, '2021-06-12 04:58:56'),
(25, 'usuario6@correo.com', '20666a87c8', 864175, '2021-06-12 05:16:20'),
(26, 'usuario6@correo.com', '111d30858d', 670807, '2021-06-12 05:44:09'),
(27, 'usuario6@correo.com', '511206a6a0', 518458, '2021-06-17 01:59:31'),
(28, 'usuario10@correo.com', '7b97e3897a', 682444, '2021-06-17 02:02:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `idPerfil` int(3) NOT NULL,
  `descripcion` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`idPerfil`, `descripcion`) VALUES
(2, 'Administrador'),
(5, 'Devoluciones'),
(4, 'Facturación'),
(1, 'Inventarios'),
(7, 'Sistemas'),
(8, 'Sistemas1'),
(9, 'Sistemas2'),
(10, 'Sistemas3'),
(11, 'Sistemas4'),
(12, 'Sistemas5'),
(13, 'Sistemas6'),
(14, 'Sistemas7'),
(22, 'Sistemas8'),
(23, 'Sistemas9'),
(24, 'Sistemas90'),
(25, 'Sistemas91'),
(26, 'Sistemas92'),
(27, 'Sistemas93'),
(28, 'Sistemas94'),
(29, 'Sistemas95'),
(30, 'Sistemas96'),
(34, 'Sistemas97'),
(6, 'Super Administrador'),
(16, 'Super Administrador 99'),
(17, 'Super Administrador 999'),
(18, 'Super Administrador 9999'),
(19, 'Super Administrador 99999'),
(20, 'Super Administrador 999999'),
(21, 'Super Administrador 9999999'),
(15, 'Super Administrador9'),
(3, 'Ventas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `idPermiso` int(3) NOT NULL,
  `descripcion` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`idPermiso`, `descripcion`) VALUES
(1, 'Cancelar Pedido'),
(2, 'Crear Terceros'),
(3, 'Crear Usuarios'),
(4, 'Despachos'),
(5, 'Devoluciones'),
(6, 'Eliminar Usuario'),
(7, 'Facturar'),
(8, 'Inventarios'),
(9, 'Modificar Pedidos'),
(10, 'Montar Pedidos'),
(11, 'Recibos'),
(12, 'Reubicaciones'),
(13, 'Tranferencias'),
(14, 'Tranferencias en Tránsito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisosxperfil`
--

CREATE TABLE `permisosxperfil` (
  `idPxP` int(5) NOT NULL,
  `idPerfil` int(5) NOT NULL,
  `idPermiso` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `permisosxperfil`
--

INSERT INTO `permisosxperfil` (`idPxP`, `idPerfil`, `idPermiso`) VALUES
(1, 1, 2),
(2, 3, 2),
(3, 7, 3),
(4, 10, 3),
(5, 13, 3),
(7, 2, 1),
(8, 2, 3),
(9, 2, 6),
(10, 2, 7),
(11, 2, 5),
(12, 2, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(5) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `tipo` int(11) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `tipo`, `precio`) VALUES
(1, 'Pan Francés', 'Tostado, 3 rodajas. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', 6, 5000),
(2, 'Pan Italiano', 'Aliñado con aceite de oliva y sal gruesa, aromatizado con hierbas como el romero. Llevan cebolla.', 6, 7000),
(3, 'Pan Normal', 'Pan tradicional Argentino. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', 6, 3000),
(4, 'Té Tradicional', 'Infusión de las hojas y brotes de la planta del té (Camellia sinensis).1​La popularidad de esta bebida es solamente sobrepasada por el agua.', 2, 2500),
(5, 'Tinto', 'Bebida refrescante tradicional Colombiana.', 2, 4000),
(6, 'Limonada Natural', 'Bebida refrescante a base de agua y zumo de limón Tahití con azúcar o panela.', 2, 2500),
(7, 'Jugo de Frutas', '(EN AGUA) Delicioso jugo preparado en agua y azúcar o endulzante. Sabores disponibles:\r\nGuanábana, Lulo, Mango, Mora, Maracuyá, Piña', 2, 5800),
(8, 'Jugo de Frutas', '(EN LECHE) Delicioso jugo preparado en leche de vaca y azúcar o endulzante. Sabores disponibles:\r\nCoco, Guanábana, Lulo, Mango, Mora, Maracuyá, Piña', 2, 7800),
(9, 'Chicharrón', 'Se sirven dentro de un pan o se le incorpora a ciertos sustitutos del pan propios de la comida del sur del país, como milcaos, chochocas y churrascas. En las panaderías de muchos lugares se pueden comprar panes y roscas con chicharrones en su interior, y en zonas rurales es tradicional un gran pan de masa densa con chicharrones, conocido como tortilla con chicharrones.', 3, 15000),
(10, 'Salchichas', 'Embutidos a base de carne picada. Para la elaboración se suelen aprovechar las partes del animal, como la grasa, las vísceras o sangre. \r\nEsta carne se introduce justamente en una envoltura que es tradicionalmente la piel del intestino del animal.', 3, 20000),
(11, 'Nuggets de Pollo', 'pollo finamente picado, a veces con piel de pollo añadida, también en algunos casos se le agregan vísceras, huesos triturados, grasas, venas, nervios, cartílago y alrededor de 30 aditivos, que se recubre de rebozado o pan rallado antes de cocinarlo. Los restaurantes de comida rápida suelen servir los nuggets fritos en aceite, si bien también pueden hornearse.', 3, 21000),
(12, 'Lomo Asado', 'Corte de Lomo de res asado al carbón.', 3, 35000),
(13, 'Arroz Blanco', 'Arroz blanco suelto. 50 gramos. todo un placer.', 1, 3500),
(14, 'Papa Salada', '2 unidades medianas.', 1, 4000),
(15, 'Pan Chocha', 'Exquisito pan blandito relleno de delicioso queso campesino.', 6, 7000),
(16, 'Yuca Cocinada', 'Trozos de yuca cocinada en agua con sal.', 1, 2500),
(17, 'Espárragos', 'Estos espárragos son una guarnición deliciosa! Preparados con queso parmesano.', 1, 5000),
(18, 'Pepinos Rellenos', 'Rica botana de rodajas de pepino con aguacate y camarón.', 1, 15000),
(19, 'Costilla BBQ', 'Costillas de ternera estofadas con puré de mandioca, horneada al humo por 4,5 horas', 3, 45000),
(20, 'Pan Francés', 'Tostado, 3 rodajas.                                                                                                  ', 6, 5000),
(21, 'Pan Francés', 'Tostado tres rodajas delicioso.', 6, 5045);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoproductos`
--

CREATE TABLE `tipoproductos` (
  `id` int(5) NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipoproductos`
--

INSERT INTO `tipoproductos` (`id`, `nombre`) VALUES
(1, 'Acompañantes'),
(2, 'Bebidas'),
(3, 'Carnes'),
(4, 'Ensaladas'),
(5, 'Entradas'),
(6, 'panes'),
(7, 'Platos Fuertes'),
(8, 'Postres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposalertas`
--

CREATE TABLE `tiposalertas` (
  `idTipoAlerta` int(3) NOT NULL,
  `nombre` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tiposalertas`
--

INSERT INTO `tiposalertas` (`idTipoAlerta`, `nombre`) VALUES
(1, 'Informativa'),
(2, 'Cobro'),
(3, 'Preventiva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(5) NOT NULL,
  `usuario` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `pass` varchar(250) COLLATE utf8mb4_spanish_ci NOT NULL,
  `mail` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` int(7) NOT NULL,
  `nombres` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `foto` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `usuario`, `pass`, `mail`, `telefono`, `nombres`, `foto`) VALUES
(2, 'Administrador', 'bb424d1d7ff94ed465ed3ab32a43a08c9affdd33b2dfd885cf6d8c70d1e4d9b0056569027c5f68fcac25e2443f4873ce3503f1fc754458c3723eb4c9f4372050', 'info@info.com.co', 9999999, 'Super Administrador', ''),
(3, 'Facvent', 'bb424d1d7ff94ed465ed3ab32a43a08c9affdd33b2dfd885cf6d8c70d1e4d9b0056569027c5f68fcac25e2443f4873ce3503f1fc754458c3723eb4c9f4372050', 'facvent@info.com.co', 9999999, 'Super Administrador', ''),
(4, 'Vendedor1', 'bb424d1d7ff94ed465ed3ab32a43a08c9affdd33b2dfd885cf6d8c70d1e4d9b0056569027c5f68fcac25e2443f4873ce3503f1fc754458c3723eb4c9f4372050', 'ventas@info.com.co', 9999999, 'Super Administrador', ''),
(5, 'a1', 'bb424d1d7ff94ed465ed3ab32a43a08c9affdd33b2dfd885cf6d8c70d1e4d9b0056569027c5f68fcac25e2443f4873ce3503f1fc754458c3723eb4c9f4372050', 'ventas1@info.com.co', 9999999, 'Super Administrador', ''),
(6, 'usuario6', '11bf495199bced930731bf2476b06be90c8f775650142a992a61756960849fbd8a984f04a9e026661c642b0131eed6b2df9b667f409953a3c966d8112ad5ba99', 'usuario6@correo.com', 9999999, 'Super Administrador', '/cantinachichilo/admin/users/usuario6.png'),
(7, 'cr7', 'bb424d1d7ff94ed465ed3ab32a43a08c9affdd33b2dfd885cf6d8c70d1e4d9b0056569027c5f68fcac25e2443f4873ce3503f1fc754458c3723eb4c9f4372050', 'cr7@correo.com', 9999999, 'Super Administrador', ''),
(8, 'd8', 'bb424d1d7ff94ed465ed3ab32a43a08c9affdd33b2dfd885cf6d8c70d1e4d9b0056569027c5f68fcac25e2443f4873ce3503f1fc754458c3723eb4c9f4372050', 'dorianrodrigo@gmail.com', 9999999, 'Super Administrador', ''),
(9, 'usuario9', 'bb424d1d7ff94ed465ed3ab32a43a08c9affdd33b2dfd885cf6d8c70d1e4d9b0056569027c5f68fcac25e2443f4873ce3503f1fc754458c3723eb4c9f4372050', 'usuario9@correo.com', 9999999, 'Super Administrador', ''),
(10, 'usuario10', 'c187285a3f292ff50364cae88ecb8f43f2637da6f404a9e505e055f0d84023b929842084440fafca4763da139873c8dd364160ebce625814442966782beea9a2', 'usuario10@correo.com', 9999999, 'Super Administrador', '/cantinachichilo/admin/users/usuario10.jpg'),
(11, 'SuperUser', 'bb424d1d7ff94ed465ed3ab32a43a08c9affdd33b2dfd885cf6d8c70d1e4d9b0056569027c5f68fcac25e2443f4873ce3503f1fc754458c3723eb4c9f4372050', 'superusuario@correo.com', 9999999, 'Super Administrador', ''),
(12, 'superAdmin', 'bb424d1d7ff94ed465ed3ab32a43a08c9affdd33b2dfd885cf6d8c70d1e4d9b0056569027c5f68fcac25e2443f4873ce3503f1fc754458c3723eb4c9f4372050', 'superadmin@correo.com', 9999999, 'Super Administrador', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioxalertas`
--

CREATE TABLE `usuarioxalertas` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idAlerta` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarioxalertas`
--

INSERT INTO `usuarioxalertas` (`id`, `idUsuario`, `idAlerta`, `fecha`, `estado`) VALUES
(1, 6, 1, '2021-05-29', 2),
(2, 6, 2, '2021-05-29', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioxperfil`
--

CREATE TABLE `usuarioxperfil` (
  `idUxP` int(5) NOT NULL,
  `idUsuario` int(5) NOT NULL,
  `idPerfil` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarioxperfil`
--

INSERT INTO `usuarioxperfil` (`idUxP`, `idUsuario`, `idPerfil`) VALUES
(1, 6, 2),
(2, 6, 1),
(3, 6, 4),
(6, 2, 2),
(8, 3, 4),
(9, 3, 1),
(10, 3, 5),
(15, 3, 13),
(17, 6, 3),
(77, 6, 5),
(79, 6, 6),
(80, 3, 3),
(87, 3, 7),
(90, 2, 5),
(91, 2, 4),
(95, 2, 3),
(112, 2, 6),
(113, 12, 2),
(114, 12, 5),
(115, 12, 4),
(116, 12, 1),
(117, 12, 7),
(118, 12, 8),
(119, 12, 9),
(120, 12, 10),
(121, 12, 11),
(122, 12, 12),
(123, 12, 13),
(124, 12, 14),
(125, 12, 22),
(126, 12, 23),
(127, 12, 24),
(128, 12, 25),
(129, 12, 26),
(130, 12, 27),
(131, 12, 28),
(132, 12, 29),
(133, 12, 30),
(134, 12, 34),
(135, 12, 6),
(136, 12, 16),
(137, 12, 17),
(138, 12, 18),
(139, 12, 19),
(140, 12, 20),
(141, 12, 21),
(142, 12, 15),
(143, 12, 3),
(146, 2, 1),
(147, 2, 7),
(148, 2, 8),
(149, 2, 9),
(150, 2, 10),
(151, 6, 7),
(152, 6, 8),
(153, 6, 9),
(154, 6, 10),
(155, 6, 11),
(156, 6, 12),
(157, 6, 13),
(158, 6, 14),
(159, 6, 22),
(160, 6, 23),
(161, 6, 24),
(162, 6, 25),
(163, 6, 26),
(164, 6, 27),
(165, 6, 28),
(167, 6, 30),
(168, 6, 34),
(169, 6, 16),
(170, 6, 17),
(171, 6, 18),
(172, 6, 19),
(173, 6, 20),
(174, 6, 21),
(175, 6, 15),
(176, 6, 29);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alertas`
--
ALTER TABLE `alertas`
  ADD PRIMARY KEY (`idAlerta`),
  ADD KEY `tipo` (`tipo`);

--
-- Indices de la tabla `passwords`
--
ALTER TABLE `passwords`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`idPerfil`),
  ADD UNIQUE KEY `descripcion` (`descripcion`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`idPermiso`),
  ADD UNIQUE KEY `descripcion` (`descripcion`);

--
-- Indices de la tabla `permisosxperfil`
--
ALTER TABLE `permisosxperfil`
  ADD PRIMARY KEY (`idPxP`),
  ADD KEY `idPermiso` (`idPermiso`),
  ADD KEY `idPerfil` (`idPerfil`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo` (`tipo`);

--
-- Indices de la tabla `tipoproductos`
--
ALTER TABLE `tipoproductos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tiposalertas`
--
ALTER TABLE `tiposalertas`
  ADD PRIMARY KEY (`idTipoAlerta`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Indices de la tabla `usuarioxalertas`
--
ALTER TABLE `usuarioxalertas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAlerta` (`idAlerta`),
  ADD KEY `idUsuario` (`idUsuario`) USING BTREE;

--
-- Indices de la tabla `usuarioxperfil`
--
ALTER TABLE `usuarioxperfil`
  ADD PRIMARY KEY (`idUxP`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idPerfil` (`idPerfil`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alertas`
--
ALTER TABLE `alertas`
  MODIFY `idAlerta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `passwords`
--
ALTER TABLE `passwords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `idPerfil` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `idPermiso` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `permisosxperfil`
--
ALTER TABLE `permisosxperfil`
  MODIFY `idPxP` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `tipoproductos`
--
ALTER TABLE `tipoproductos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tiposalertas`
--
ALTER TABLE `tiposalertas`
  MODIFY `idTipoAlerta` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarioxalertas`
--
ALTER TABLE `usuarioxalertas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarioxperfil`
--
ALTER TABLE `usuarioxperfil`
  MODIFY `idUxP` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alertas`
--
ALTER TABLE `alertas`
  ADD CONSTRAINT `alertas_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `tiposalertas` (`idTipoAlerta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `permisosxperfil`
--
ALTER TABLE `permisosxperfil`
  ADD CONSTRAINT `permisosxperfil_ibfk_1` FOREIGN KEY (`idPerfil`) REFERENCES `perfiles` (`idPerfil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permisosxperfil_ibfk_2` FOREIGN KEY (`idPermiso`) REFERENCES `permisos` (`idPermiso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `tipoproductos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarioxalertas`
--
ALTER TABLE `usuarioxalertas`
  ADD CONSTRAINT `usuarioxalertas_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarioxalertas_ibfk_2` FOREIGN KEY (`idAlerta`) REFERENCES `alertas` (`idAlerta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarioxperfil`
--
ALTER TABLE `usuarioxperfil`
  ADD CONSTRAINT `usuarioxperfil_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarioxperfil_ibfk_2` FOREIGN KEY (`idPerfil`) REFERENCES `perfiles` (`idPerfil`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
