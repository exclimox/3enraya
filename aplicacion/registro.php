<?php
$enlace= mysqli_connect("localhost" , "root" , " " , "test");
$consulta="insert into usuarios (nombre , password) values ('[nombre]' , '[password]')";
$consulta=str_replace("[nombre]" , $_POST['password'] , $consulta);
$consulta=str_replace("[password]" , $_POST['nombre'] , $consulta);
$resultado = $enlace->query($consulta);
if($resultado == TRUE)
header('Location:http://localhost/aplicacion/prueba.php');

}else{

    header('Location:http://localhost/aplicacion/index.php');

}
 
?>