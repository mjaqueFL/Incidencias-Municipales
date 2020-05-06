
CREATE DATABASE IF NOT EXISTS `proyectoincidencias` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `proyectoincidencias`;


CREATE TABLE `incidencia` (
  `id_incidencia` smallint(5) UNSIGNED NOT NULL,
  `titulo` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `descripcion` varchar(120) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `ubicacion` varchar(120) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `tipo_incidencia` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


CREATE TABLE `tipo_incidencia` (
  `id_tipo` tinyint(3) UNSIGNED NOT NULL,
  `nombre_tipo` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


CREATE TABLE `usuario` (
  `id_usuario` smallint(5) UNSIGNED NOT NULL,
  `correo` varchar(80) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `tipo` enum('a','u') COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


INSERT INTO `usuario` (`id_usuario`, `correo`, `password`, `tipo`) VALUES
(1, 'correo1@gmail.com', '123', 'u'),
(2, 'correo2@gmail.com', '123', 'u'),
(3, 'correo3@gmail.com', '1234', 'u');

INSERT INTO `tipo_incidencia` (`nombre_tipo`) VALUES
('vial'),
('ciudadana'),
('transito');


ALTER TABLE `incidencia`
  ADD PRIMARY KEY (`id_incidencia`),
  ADD KEY `fk_IncidenciaTipo` (`tipo_incidencia`);

ALTER TABLE `tipo_incidencia`
  ADD PRIMARY KEY (`id_tipo`);

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `correo` (`correo`);


ALTER TABLE `incidencia`
  MODIFY `id_incidencia` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `tipo_incidencia`
  MODIFY `id_tipo` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;


ALTER TABLE `usuario`
  MODIFY `id_usuario` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


ALTER TABLE `incidencia`
  ADD CONSTRAINT `fk_IncidenciaTipo` FOREIGN KEY (`tipo_incidencia`) REFERENCES `tipo_incidencia` (`id_tipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

