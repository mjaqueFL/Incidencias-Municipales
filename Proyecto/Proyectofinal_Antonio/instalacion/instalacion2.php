<?php
//Nombre de autor:Antonio Barril Hernandez
//Curso:2 DAW
//Escuela: Escuela Virgen de Guadalupe
//Proyecto fin de ciclo: Proyecto de Web de Gestión de Incidencias Municipales
//Año:2020
require_once("Metodosparainstalar.php");
echo'<!DOCTYPE html>
            <html>
            <head>
                <meta charset="UTF-8">
                 <title>Instalacion Codeigniter</title>
                 <link rel="stylesheet" href="css.css">
                 <meta name="author" value="Antonio Barril Hernandez">
            </head>
            <body>';
if (isset($_POST["enviar"]))
{
	$objprocesos = new instalacion('localhost', 'antonio', 'antonio', 'proyectoincidencias');

	$correo = $_POST["correo"];
	$contrasenia = $_POST["contrasenia"];
	$contrasenia2=$_POST["contrasenia2"];
	$tipo = 'a';


	if($contrasenia==$contrasenia2)
	{
		$sql = "INSERT INTO usuario(correo,password,tipo) VALUES ('" . $correo . "','" . password_hash($contrasenia, CRYPT_SHA256) . "','" . $tipo . "')";
		$objprocesos->ejecutarconsulta($sql);
		$usuarois="  INSERT INTO usuario (correo,password,tipo) VALUES('correo1@gmail.com','".password_hash( '123',PASSWORD_BCRYPT)."', 'u'),
		('correo2@gmail.com','".password_hash('1234',PASSWORD_BCRYPT)."', 'u'),
		('correo3@gmail.com','". password_hash('12345',PASSWORD_BCRYPT)."', 'u')";
		$objprocesos->generarbd($usuarois);

		     $sentencia2="INSERT INTO `tipo_incidencia` (`nombre_tipo`) VALUES
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
			
			
			INSERT INTO `comentario`(`texto_comentario`, `id_incidenciacomn`,`id_usuario`) VALUES
			('ESTA PAGINA ES GENIAL ',1,1),
			('Debe mejorar ',2,2),
			('Juanjo y yo pasamos el otro dia por aqui',3,3),
			('Sabes que eso es mentira? ',4,3),
			('Esto lo vi el otro dia ',5,1),
			('Nunca antes lo habia notado gracias! ',6,2);
			";


		$objprocesos->generarbd($sentencia2);
		header("location:http://localhost/Proyectofinal_Antonio/");
	}
	else
	{
		echo'
            <div id="conteiner">
                 <div id="alert">
                 	
                    <strong>Por favor, la contraseña debe ser la misma.</strong>
                    <p><a href="Instalacion2.php"><button>ACEPTAR</button></a></p>
                </div>
            </div>
            
 			 ';
	}



} else {
	echo '
           <div id="contenedor">
                 <div>
                 	
              		<h1>Registrarse </h1>
                    <form action="Instalacion2.php" method="post"> 
                    <p></p><label>Correo administrador:</label>
                      <input type="text" name="correo" required/></p>
                   
                       <p> <label>Contrasenia administrador:</label>
                      <input type="password" name="contrasenia" required/>
                      </p>
                    
                       <p> <label>Verificar password:</label>
                      <input type="password" name="contrasenia2" required/>
                      </p>
                     <p>
                     <div id="botonreset">
                      <input type="reset" value="Restablecer"> 
					</div>
					<div id="botonhnenviar">
						 <input type="submit" value="Registrar" name="enviar">
					</div>	
                     </p>
                    </form>
                </div>
            </div>
            ';

}
echo '</body>
            </html>';

?>
