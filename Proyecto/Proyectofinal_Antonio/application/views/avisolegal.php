<?php
//Nombre de autor:Antonio Barril Hernandez
//Curso:2 DAW
//Escuela: Escuela Virgen de Guadalupe
//Proyecto fin de ciclo: Proyecto de Web de Gestión de Incidencias Municipales
//Año:2020
echo '
		<!doctype html>
		<html lang="en">
		  <head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<link href="' . base_url() . 'CSS/style.css" rel="stylesheet" type="text/css">
			 <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
			 <meta name="author" content="Antonio Barril Hernandez">
			 <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@200&family=Manuale&family=Podkova&display=swap" rel="stylesheet">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
			<title>Aviso Legal</title>
		  </head>
		  <body>
			<div class="container-fluid" >
				<div class="row">
					<div class="col-12" id="header">
						<img src="' . base_url() . 'imagenes/prueba1.jpg"  class="img-fluid" alt="Es una imagen del inicio" longdesc="Se trata de una imagen ">
					</div>
				</div>
				<div class="row">
					';
include('barrademenu.php');
echo '
				</div>
				<div class="row " id="contenedor">
            <h2>Aviso legal y términos de uso</h2>
            <div class="legales" >
			   <div class="">
							  <p class="ng-binding">
					En este espacio, el USUARIO, podrá encontrar toda la información relativa a los términos y condiciones legales que definen las relaciones entre los usuarios y nosotros como responsables de esta web. Como usuario, es importante que conozcas estos términos antes de continuar tu navegación.
					Antonio Barril Hernandez.Como responsable de esta web, asume el compromiso de procesar la información de nuestros usuarios y clientes con plenas garantías y cumplir con los requisitos nacionales y europeos que regulan la recopilación y uso de los datos personales de nuestros usuarios.
					Esta web, por tanto, cumple rigurosamente con el RGPD (REGLAMENTO (UE) 2016/679 de protección de datos) y  la LSSI-CE la Ley 34/2002, de 11 de julio, de servicios de la sociedad de la información y de comercio electrónico.
					</p>
					<h3>CONDICIONES GENERALES DE USO</h3>
					<p class="ng-binding">Las presentes Condiciones Generales regulan el uso (incluyendo el mero acceso) de las páginas de la web, integrantes del sitio web de  ProyectodeIncidencias incluidos los contenidos y servicios puestos a disposición en ellas. Toda persona que acceda a la web, ProyectodeIncidencias (“Usuario”) acepta someterse a las Condiciones Generales vigentes en cada momento del portal ProyectodeIncidencias.</p>
					<h3>DATOS PERSONALES QUE RECABAMOS Y CÓMO LO HACEMOS</h3>
					Leer <a href="' . base_url() . 'politica">Política de Privacidad</a>
					<h3>COMPROMISOS Y OBLIGACIONES DE LOS USUARIOS</h3>
					<p class="ng-binding">
					  El Usuario queda informado, y acepta, que el acceso a la presente web no supone, en modo alguno, el inicio de una relación comercial con ProyectodeIncidencias. De esta forma, el usuario se compromete a utilizar el sitio Web, sus servicios y contenidos sin contravenir la legislación vigente, la buena fe y el orden público.<br>
					Queda prohibido el uso de la web, con fines ilícitos o lesivos, o que, de cualquier forma, puedan causar perjuicio o impedir el normal funcionamiento del sitio web. Respecto de los contenidos de esta web, se prohíbe:Su reproducción, distribución o modificación, total o parcial, a menos que se cuente con la autorización de sus legítimos titulares;Cualquier vulneración de los derechos del prestador o de los legítimos titulares;Su utilización para fines comerciales o publicitarios.<br>
					<br>
					En la utilización de la web, ProyectodeIncidencias, el Usuario se compromete a no llevar a cabo ninguna conducta que pudiera dañar la imagen, los intereses y los derechos de ProyectodeIncidencias o de terceros o que pudiera dañar, inutilizar o sobrecargar el portal (indicar dominio)  o que impidiera, de cualquier forma, la normal utilización de la web.
					No obstante, el Usuario debe ser consciente de que las medidas de seguridad de los sistemas informáticos en Internet no son enteramente fiables y que, por tanto ProyectodeIncidencias  no puede garantizar la inexistencia de virus u otros elementos que puedan producir alteraciones en los sistemas informáticos (software y hardware) del Usuario o en sus documentos electrónicos y ficheros contenidos en los mismos.
					</p>
					<h3>MEDIDAS DE SEGURIDAD</h3>
					<p class="ng-binding">
					  Los datos personales comunicados por el usuario a ProyectodeIncidencias pueden ser almacenados en bases de datos automatizadas o no, cuya titularidad corresponde en exclusiva a ProyectodeIncidencias, asumiendo ésta todas las medidas de índole técnica, organizativa y de seguridad que garantizan la confidencialidad, integridad y calidad de la información contenida en las mismas de acuerdo con lo establecido en la normativa vigente en protección de datos.<br>
					La comunicación entre los usuarios y ProyectodeIncidencias utiliza un canal seguro, y los  datos transmitidos son cifrados gracias a protocolos a https, por tanto, garantizamos las mejores condiciones de seguridad para que la confidencialidad de los usuarios esté garantizada.
					</p>
					<h3>RECLAMACIONES</h3>
					<p class="ng-binding">ProyectodeIncidencias informa que existen hojas de reclamación a disposición de usuarios y clientes.
					El Usuario podrá realizar reclamaciones solicitando su hoja de reclamación o remitiendo un correo electrónico a <a href="mailto:abarrilhernandez.guadalupe@alumnado.fundacionloyola.net" class="ng-binding">abarrilhernandez.guadalupe@alumnado.fundacionloyola.net</a> indicando su nombre y apellidos, el servicio y/o producto adquirido y exponiendo los motivos de su reclamación.<br><br>
					El usuario/comprador podrá notificarnos la reclamación, bien a través de correo electrónico a: <a href="mailto:abarrilhernandez.guadalupe@alumnado.fundacionloyola.net" class="ng-binding">abarrilhernandez.guadalupe@alumnado.fundacionloyola.net</a>, si lo desea adjuntando el siguiente formulario de reclamación:
					El servicio/producto:
					Adquirido el día:
					Nombre del usuario:
					Domicilio del usuario:
					Firma del usuario (solo si se presenta en papel):
					Fecha:
					Motivo de la reclamación:
					</p>
					<h3>PLATAFORMA DE RESOLUCIÓN DE CONFLICTOS</h3>
					<p>Por si puede ser de tu interés, para someter tus reclamaciones puedes utilizar también la plataforma de resolución de litigios que facilita la Comisión Europea y que se encuentra disponible en el siguiente enlace: <a href="http://ec.europa.eu/consumers/odr/" rel="no-follow">http://ec.europa.eu/consumers/odr/</a></p>
					<h3>DERECHOS DE PROPIEDAD INTELECTUAL E INDUSTRIAL</h3>
					<p class="ng-binding">En virtud de lo dispuesto en los artículos 8 y 32.1, párrafo segundo, de la Ley de Propiedad Intelectual, quedan expresamente prohibidas la reproducción, la distribución y la comunicación pública, incluida su modalidad de puesta a disposición, de la totalidad o parte de los contenidos de esta página web, con fines comerciales, en cualquier soporte y por cualquier medio técnico, sin la autorización de ProyectodeIncidencias. El usuario se compromete a respetar los derechos de Propiedad Intelectual e Industrial titularidad de ProyectodeIncidencias.<br>
					El usuario conoce y acepta que la totalidad del sitio web, conteniendo sin carácter exhaustivo el texto, software, contenidos (incluyendo estructura, selección, ordenación y presentación de los mismos) podcast, fotografías, material audiovisual y gráficos, está protegida por marcas, derechos de autor y otros derechos legítimos, de acuerdo con los tratados internacionales en los que España es parte y otros derechos de propiedad y leyes de España.
					En el caso de que un usuario o un tercero consideren que se ha producido una violación de sus legítimos derechos de propiedad intelectual por la introducción de un determinado contenido en la web,  deberá notificar dicha circunstancia a  ProyectodeIncidencias  indicando:<br>
					</p><ul>
					  <li>
						Datos personales del interesado titular de los derechos presuntamente infringidos, o indicar la representación con la que actúa en caso de que la reclamación la presente un tercero distinto del interesado.
					  </li>
					  <li>
						Señalar los contenidos protegidos por los derechos de propiedad intelectual y su ubicación en la web, la acreditación de los derechos de propiedad intelectual señalados y declaración expresa en la que el interesado se responsabiliza de la veracidad de las informaciones facilitadas en la notificación
					  </li>
					</ul>
					<p></p>
					<h3>ENLACES EXTERNOS</h3>
					<p class="ng-binding">Las páginas de la web ProyectodeIncidencias, podría proporcionar enlaces a otros sitios web propios y contenidos que son propiedad de terceros.
					El único objeto de los enlaces es proporcionar al Usuario la posibilidad de acceder a dichos enlaces.
					ProyectodeIncidencias  no se responsabiliza en ningún caso de los resultados que puedan derivarse al Usuario por acceso a dichos enlaces.<br>
					Asimismo, el usuario encontrará dentro de este sitio, páginas, promociones, programas de afiliados que acceden a los hábitos de navegación de los usuarios para establecer perfiles. Esta información siempre es anónima y no se identifica al usuario.<br><br>
					La Información que se proporcione en estos Sitios patrocinado o enlaces de afiliados está sujeta a las políticas de privacidad que se utilicen en dichos Sitios y no estará sujeta a esta política de privacidad. Por lo que recomendamos ampliamente a los Usuarios a revisar detalladamente las políticas de privacidad de los enlaces de afiliado.<br>
					El Usuario que se proponga establecer cualquier dispositivo técnico de enlace desde su sitio web al portal ProyectodeIncidencias deberá obtener la autorización previa y escrita de ProyectodeIncidencias El establecimiento del enlace no implica en ningún caso la existencia de relaciones entre ProyectodeIncidencias y el propietario del sitio en el que se establezca el enlace, ni la aceptación o aprobación por parte de  ProyectodeIncidencias de sus contenidos o servicios
					</p>
					<h3>POLÍTICA DE COMENTARIOS</h3>
					<p>En nuestra web y se permiten realizar comentarios para enriquecer los contenidos y realizar consultas.
					No se admitirán comentarios que no estén relacionados con la temática de esta web, que incluyan difamaciones, agravios, insultos, ataques personales o faltas de respeto en general hacia el autor o hacia otros miembros.
					También serán suprimidos los comentarios que contengan información que sea obviamente engañosa o falsa, así como los comentarios que contengan información personal, como, por ejemplo, domicilios privado o teléfonos y que vulneren nuestra política de protección de datos.<br>
					Se desestimará, igualmente, aquellos comentarios creados sólo con fines promocionales de una web, persona o colectivo y todo lo que pueda ser considerado spam en general.<br>
					No se permiten comentarios anónimos, así como aquellos realizados por una misma persona con distintos apodos. No se considerarán tampoco aquellos comentarios que intenten forzar un debate o una toma de postura por otro usuario.
					</p>
					<h3>EXCLUSIÓN DE GARANTÍAS Y  RESPONSABILIDAD</h3>
					<p>El Prestador no otorga ninguna garantía ni se hace responsable, en ningún caso, de los daños y perjuicios de cualquier naturaleza que pudieran traer causa de:
					</p><ul>
					  <li>
						La falta de disponibilidad, mantenimiento y efectivo funcionamiento de la web, o de sus servicios y contenidos;
					  </li>
						<li>
						 La existencia de virus, programas maliciosos o lesivos en los contenidos;
					  </li>
						<li>
						El uso ilícito, negligente, fraudulento o contrario a este Aviso Legal;
					  </li>
						<li>
						La falta de licitud, calidad, fiabilidad, utilidad y disponibilidad de los servicios prestados por terceros y puestos a disposición de los usuarios en el sitio web.
					  </li>
						<li>
						El prestador no se hace responsable bajo ningún concepto de los daños que pudieran dimanar del uso ilegal o indebido de la presente página web.
					  </li>
					</ul>
					<p></p>
					<h3>LEY APLICABLE Y JURISDICCIÓN</h3>
					<p class="ng-binding">Con carácter general las relaciones entre ProyectodeIncidencias con los Usuarios de sus servicios telemáticos, presentes en esta web se encuentran sometidas a la legislación y jurisdicción españolas y a los tribunales.</p>
					<h3>CONTACTO</h3>
					<p class="ng-binding">En caso de que cualquier Usuario tuviese alguna duda acerca de estas Condiciones legales o cualquier comentario sobre el portal ProyectodeIncidencias, por favor diríjase a <a href="mailto:abarrilhernandez.guadalupe@alumnado.fundacionloyola.net" class="ng-binding">abarrilhernandez.guadalupe@alumnado.fundacionloyola.net</a></p>
					<p class="ng-binding">
					De parte del equipo que formamos Antonio Barril Hernandez te agradecemos el tiempo dedicado en leer este Aviso Legal
					</p>
				</div>
      		</div>
    ';
echo '</div>';
include('barrafooter.php');
echo '
</div>
			<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		  </body>
		</html>
';

?>
