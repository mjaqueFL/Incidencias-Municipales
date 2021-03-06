DROP DATABASE IF EXISTS `proyectoincidencias`;
CREATE DATABASE  `proyectoincidencias` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;

DROP USER IF EXISTS 'antonio'@'localhost';
CREATE USER 'antonio'@'localhost' IDENTIFIED BY 'antonio';
GRANT ALL ON proyectoincidencias.* TO 'antonio'@'localhost' ;

USE `proyectoincidencias`;


CREATE TABLE `incidencia` (
  `id_incidencia` smallint(5) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `titulo` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `fecha` DATE DEFAULT NULL,
  `ubicacion` varchar(120) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `tipo_incidencia` tinyint(3) UNSIGNED NOT NULL,
  `id_usuario`smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


CREATE TABLE `tipo_incidencia` (
  `id_tipo` tinyint(3) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nombre_tipo` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


CREATE TABLE `usuario` (
  `id_usuario` smallint(5) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `correo` varchar(80) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `tipo` enum('a','u') COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

CREATE TABLE `comentario` (

`id_comentario` smallint(5) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
`texto_comentario` text default null,
`id_incidenciacomn` smallint(5) UNSIGNED NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;



ALTER TABLE `incidencia`
  ADD CONSTRAINT `fk_IncidenciaTipo` FOREIGN KEY (`tipo_incidencia`) REFERENCES `tipo_incidencia` (`id_tipo`) ON DELETE CASCADE ON UPDATE  CASCADE;
  
ALTER TABLE `incidencia`
  ADD CONSTRAINT `fk_Incidenciausuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
  
ALTER TABLE `comentario`
  ADD CONSTRAINT `fk_comentarioincidencia` FOREIGN KEY (`id_incidenciacomn`) REFERENCES `incidencia` (`id_incidencia`) ON DELETE  CASCADE ON UPDATE  CASCADE;


  INSERT INTO `usuario` (`correo`, `password`, `tipo`) VALUES
('correo1@gmail.com', '123', 'u'),
('correo2@gmail.com', '1234', 'u'),
('correo3@gmail.com', '12345', 'u');

INSERT INTO `tipo_incidencia` (`nombre_tipo`) VALUES
('vial'),
('ciudadana'),
('transito');

INSERT INTO `incidencia` (`titulo`,`descripcion`,`fecha`,`ubicacion`,`tipo_incidencia`,`id_usuario`) VALUES
('había','una vez','2020-12-03','montijo',1,1),
('erase','una vez','2020-11-03','montijo',1,2),
('pepe','un cafe','2020-08-03','montijo',2,1),
('matilda','se tiro','2020-04-13','montijo',2,1),
('había','un perezoso llamado juanjo','2020-12-15','montijo',1,1),
('kervo','una vez se durmio','2020-12-30','montijo',1,2);

INSERT INTO `comentario`(`texto_comentario`, `id_incidenciacomn`) VALUES 
('ESTA PAGINA ES GENIAL ',1),
('debe mejorar ',2),
('juanjo estuvo aqui ',3),
('sabes que eso es mentira? ',4),
('esto lo vi el otro dia ',5),
('pepepepepepepepepepe ',6),
('anpan anpan anpan anpan ',3),
('toulouse el chueco ',2),
('kervo el dormilon ',4);


  
COMMIT;
