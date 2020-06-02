<?php
//Nombre de autor:Antonio Barril Hernandez
//Curso:2 DAW
//Escuela: Escuela Virgen de guadalupe
//Proyecto fin de ciclo: Proyecto de Web de Gestión de Incidencias Municipales
//Año:2020
require_once("Metodosparainstalar.php");

if (isset($_POST["enviar"])) {
	$objprocesos = new instalacion("localhost", "root", "", "");
	$sentencia = "DROP DATABASE IF EXISTS `proyectoincidencias`;
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
  `correo` varchar(80) COLLATE utf8mb4_spanish_ci DEFAULT NULL unique,
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
COMMIT;";
	$objprocesos->generarbd($sentencia);

	header("location:http://localhost/Proyectofinal_Antonio/instalacion/instalacion2.php");
} else {
	echo '  <!DOCTYPE html>
            <html>
            <head>
                <meta charset="UTF-8">
                <title>Instalacion Codeigniter</title>
                <meta type="author" value=""/>
                <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@200&family=Manuale&family=Podkova&display=swap" rel="stylesheet">
				<link rel="stylesheet" href="css.css">
    			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
            
            </head>
            <body>
            
			<div id="conteiner">
				
				
				<div id="formulario">
				<h2>Web Municipal de incidencias</h2>
				<h3>Bienvenido a la instalación , por favor ,pulse siguientes para continuar</h3>
					<form action="index.php" method="post">
                    <br/>
                    <div id="boton">
                    	<input  class="btn btn-primary"  type="submit" value="Siguiente" name="enviar">
                    </div>
                    
                </form>
				</div>
				
				<div id="LOGO">
					  <img src="../imagenes/logMontijo.png"  alt="Logo ayuntamiento de Montijo">
				</div>
			
			</div>
        
            <!--script-->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
            </body>
            </html>
  ';

}
?>
