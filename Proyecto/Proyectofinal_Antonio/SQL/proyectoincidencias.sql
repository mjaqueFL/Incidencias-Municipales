-- //Nombre de autor:Antonio Barril Hernandez
-- //Curso:2 DAW
-- //Escuela: Escuela Virgen de guadalupe
-- //Proyecto fin de ciclo: Proyecto de Web de Gestión de Incidencias Municipales
-- //Año:2020
CREATE DATABASE IF NOT EXISTS `proyectoincidencias` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `proyectoincidencias`;


DROP TABLE IF EXISTS `Usuario`;
CREATE TABLE `Usuario` (
  `id_usuario` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `correo` varchar(80) COLLATE utf8mb4_spanish_ci DEFAULT NULL unique,
  `password` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `tipo` enum('a','u') COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

DROP TABLE IF EXISTS `Incidencia`;
CREATE TABLE `Incidencia`(
  `id_incidencia` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `titulo` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `descripcion` varchar(120) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `fecha` datetime COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `ubicacion` varchar(120) default null
);

INSERT INTO `Usuario` (`correo`, `password`, `tipo`) VALUES
('correo1@gmail.com', '123', 'u'),
('correo2@gmail.com', '123', 'u'),
('correo3@gmail.com', '1234', 'u');



