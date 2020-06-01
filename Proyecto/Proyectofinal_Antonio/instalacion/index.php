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


  INSERT INTO `usuario` (`correo`, `password`, `tipo`) VALUES
('correo1@gmail.com', '123', 'u'),
('correo2@gmail.com', '1234', 'u'),
('correo3@gmail.com', '12345', 'u');

INSERT INTO `tipo_incidencia` (`nombre_tipo`) VALUES
('vial'),
('ciudadana'),
('transito');

INSERT INTO `incidencia` (`titulo`,`descripcion`,`fecha`,`ubicacion`,`tipo_incidencia`,`id_usuario`) VALUES
('Señal caida','Hay una señal caida cerca del ambulatorio desde hace 2 meses y parece que nadie la ve','2020-12-03','montijo',1,1),
('Ceda el paso','Debería existir un ceda al paso en la calle que da acceso a la freiduría.','2020-11-03','montijo',1,2),
('Gran agujero','Iba el otro dia para el mercadona con el coche y lo sufri en mi coche','2020-08-03','montijo',2,1),
('Necesidad de un semaforo','En el cruce de la plaza que conecta con el restaurante deben ponerlo ya que van los coches como locos','2020-04-13','montijo',2,1),
('Paso de peatones necesario','Se necesita un paso de peatones cerca del ambulatorio porfavor que las personas mayores tardan mas en cruzar','2020-12-15','montijo',1,1),
('Señal pintada','Hay varias señales pintadas con spray negro por el pueblo que son un peligro para la gente','2020-12-30','montijo',1,2),
('Paso de peatones sin pintura','Hay un paso de peatones cerca de la discoteca que apenas se ve y le vendria bien una capa de pintura','2020-12-30','montijo',3,3),
('Semaforo con insectos','El semaforo a la salida de la piscina tiene un panal de avispas y no deja ver cuando esta en rojo','2020-12-30','montijo',3,3),
('Cesped que obstaculiza','El cesped que ha crecido cerca de unos aparcamiento no permite que los coches circulen bien','2020-12-30','montijo',3,3);


INSERT INTO `comentario`(`texto_comentario`, `id_incidenciacomn`) VALUES 
('ESTA PAGINA ES GENIAL ',1),
('Debe mejorar ',2),
('Juanjo y yo pasamos el otro dia por aqui',3),
('Sabes que eso es mentira? ',4),
('Esto lo vi el otro dia ',5),
('Nunca antes lo habia notado gracias! ',6);



  
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
