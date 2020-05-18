DROP DATABASE IF EXISTS `proyectoincidencias`;
CREATE DATABASE  `proyectoincidencias` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;

DROP USER IF EXISTS 'antonio'@'localhost';
CREATE USER 'antonio'@'localhost' IDENTIFIED BY 'antonio';
GRANT ALL ON proyectoincidencias.* TO 'antonio'@'localhost' ;

USE `proyectoincidencias`;


CREATE TABLE `incidencia` (
  `id_incidencia` smallint(5) UNSIGNED NOT NULL,
  `titulo` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `fecha` DATE DEFAULT NULL,
  `ubicacion` varchar(120) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `tipo_incidencia` tinyint(3) UNSIGNED NOT NULL,
  `id_usuario`smallint(5) UNSIGNED NOT NULL
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

CREATE TABLE `comentario` (

`id_comentario` smallint(5) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
`texto_comentario` text default null,
`id_incidencia` smallint(5) UNSIGNED NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

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
  
ALTER TABLE `incidencia`
  ADD CONSTRAINT `fk_Incidenciausuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
  
ALTER TABLE `comentario`
  ADD CONSTRAINT `fk_comentarioincidencia` FOREIGN KEY (`id_incidencia`) REFERENCES `incidencia` (`id_incidencia`) ON DELETE NO ACTION ON UPDATE NO ACTION;


  INSERT INTO `usuario` (`id_usuario`, `correo`, `password`, `tipo`) VALUES
(1, 'correo1@gmail.com', '123', 'u'),
(2, 'correo2@gmail.com', '123', 'u'),
(3, 'correo3@gmail.com', '1234', 'u');

INSERT INTO `tipo_incidencia` (`nombre_tipo`) VALUES
('vial'),
('ciudadana'),
('transito');

INSERT INTO `incidencia` (`id_incidencia`,`titulo`,`descripcion`,`fecha`,`ubicacion`,`tipo_incidencia`,`id_usuario`) VALUES
(1,'habia','una vez','2020-12-03','montijo',1,1),
(2,'erase','una vez','2020-11-03','montijo',2,2),
(3,'pepe','un cafe','2020-08-03','montijo',3,3),
(4,'matilda','se tiro','2020-04-13','montijo',1,2),
(5,'habia','un perezoso llamado juanjo','2020-12-15','montijo',3,1),
(6,'kervo','una vez se durmio','2020-12-30','montijo',1,1);

INSERT INTO `comentario`(`id_comentario`, `texto_comentario`, `id_incidencia`) VALUES 
(1,'ESTA PAGINA ES GENIAL ',1),
(2,'debe mejorar ',2),
(3,'juanjo estuvo aqui ',3),
(4,'sabes que eso es mentira? ',4),
(5,'esto lo vi el otro dia ',5),
(6,'pepepepepepepepepepe ',6),
(7,'anpan anpan anpan anpan ',3),
(8,'toulouse el chueco ',2),
(9,'kervo el dormilon ',4);


  
COMMIT;
