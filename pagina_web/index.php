
<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
    <h1>Aplicacion Login </h1>
     <form action="#" method="POST"> <!-- el action indica el archivo que va a procesar los datos -->
        <input type="text" name="nombre" placeholder="Nombre de usuario">
        <input type="password" name="password" placeholder="Contraseña">
        <button type="Submit">Enviar</button>
    </form>
    <div>
 <?php
if($_POST!=null){
    if(($_POST["nombre"]=="admin")&&($_POST["password"]=="admin")){
        echo "<p>Acceso permitido</p>";
    }else{
        echo "<p>Acceso incorrecto</p>";
    }
}
?>
    </div>
    <form action="" method="get"> 
        <input type="text" name="nombre" placeholder="Nombre de usuario">
        <input type="submit" name="boton" value="Enviar">  <!-- ponemos un input en lugar de button el button solo envia los datos al servidor  -->
        <input type="submit" name="boton" value="Cancelar"> 
    </form>
    <div>
 <?php

if($_GET!=null){
        if($_GET["boton"]=="Enviar"){
        echo "<p> hola".$_GET["nombre"],"</p>";
    }
}
?>
    </div>
 </body>
</html>

