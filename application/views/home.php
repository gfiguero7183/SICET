<!doctype html>
<html lang="es">
<head>
	<title>formulario de Login</title>
    <meta charset="utf-8">
    <meta name="viemport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1">
    <link href="<?php echo base_url();?>css/boton.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>css/estilo.css" rel="stylesheet" type="text/css">
    <style type="text/css">
    body,td,th {
	color: #FFF;
}
    </style>
    <script src="js/codigo-SICET.js" language="javascript" type="text/javascript"></script>
</head>
    <body>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
   	<form action="conect.php" method="post">
            <h2>INGRESE SU INFORMACIÓN</h2>
         	<input type= "text"  placeholder="&#128272; Nombre Usuario" name="usuario" id="usuario">
         	<input type= "password"  placeholder="&#128273; Contraseña" name="clave" id="pass">
         	<input type="button" value="INGRESAR A SICET" id="boton" onclick = "valdatoslogin()">
    	</form>

    <br/>
    <br/>
    <br/>

    <div>
	<input type="text" id="texto">
	<input type="button" id="hablar" value="Decir">
	</div>
		<script src="js/script2.js"></script>

    <br/>
    <br/>
    <br/>

    <div id="map"></div>
		<script src="js/script.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>

</body>
</html>