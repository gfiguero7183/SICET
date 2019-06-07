<?php

$usuario=$_post ['usuario'];
$clave=$_post ['password'];

$conexion=mysqli_connect ("db4free.net","sicet_adweb","Ean1234Sicet","sicet_web");
$consulta="SELECT * FROM SICET_USUARIO WHERE usuario='$usuario' and clave='$password'";
$resultado=mysqli_query ($conexion,$consulta);

$filas=mysqli_num_rows ($resultado);

if ($filas>0){
    header("location:menupal.html");
           }

else{
    echo "Error en la autenticación de credenciales";
}
mysqli_free_result($resultado);
mysqli_close($conexion);


?>
