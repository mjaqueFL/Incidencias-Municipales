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
  `correo` varchar(80) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `tipo` enum('a','u') COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;



INSERT INTO `Usuario` (`id_usuario`, `correo`, `contraseña`, `tipo`) VALUES
(1, 'correo1@gmail.com', '123', 'u'),
(2, 'correo1@gmail.com', '123', 'u'),
(3, 'correo2@gmail.com', '1234', 'u');



