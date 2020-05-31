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
