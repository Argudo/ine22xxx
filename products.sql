-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2022 a las 18:05:26
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ine22xxx`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgUrl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `discountPercent` int(11) NOT NULL DEFAULT 0,
  `discountStartAt` datetime DEFAULT NULL,
  `discountEndAt` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `company_id`, `name`, `description`, `imgUrl`, `price`, `discountPercent`, `discountStartAt`, `discountEndAt`, `created_at`, `updated_at`) VALUES
(1, 1, 'Casco Otaku', 'Casco otaku reshulones de ultima generacion', 'img/cascos.webp', 19.99, 10, '2022-11-09 19:30:00', NULL, '2022-10-25 10:59:50', '2022-10-25 10:59:50'),
(2, 2, 'Tarjeta 4090', 'La mejor tarjeta para no minar criptomonedas', 'img/grafica.png', 1999.99, 5, NULL, NULL, '2022-10-25 11:16:09', '2022-10-25 11:16:09'),
(3, 3, 'Alfombrilla Hashbulla', 'Hashbulla.', 'img/hashbulla.webp', 4.99, 0, '2022-08-09 19:30:00', NULL, NULL, NULL),
(4, NULL, 'Raton Gaming', 'Raton gaming ultrarápido, consumo eficiente de queso', 'img/raton.webp', 18.99, 20, '2022-10-25 17:30:06', '2025-10-22 17:30:06', NULL, NULL),
(5, NULL, 'Teclado con lucecillas', 'teclado ruidosamente perfecto', 'img/teclado.jfif', 39.99, 0, NULL, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD KEY `products_company_id_foreign` (`company_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
