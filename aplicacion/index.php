Pela, [23.04.18 20:24]
<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Aplicación login</h1>
    <form action="" method="post">
        <input type="text" name="nombre" placeholder="Nombre de usuario">
        <input type="password" name="password" placeholder="contraseña">
        <button type="submit">Enviar</button>
    </form>
    <div>
    <?php
    if ($_POST != null) {
    // if(($_POST['nombre']=="admin")&&($_POST['password']=="admin")){
    // echo "<p>acceso correcto</p>";   
        $enlace = mysqli_connect("localhost", "root", "", "test");
        $consulta = "select * from usuarios where nombre ='[nombre]' and password='[password]' ";
        $consulta = str_replace("[nombre]", $_POST['nombre'], $consulta);
        $consulta = str_replace("[password]", $_POST['password'], $consulta);
        $resultado = $enlace->query($consulta);
        if ($resultado->num_rows > 0) {
            header('Location:http://localhost/aplicacion/prueba.php');
        }
        echo "<p>acceso incorrecto</p>";
    }
// }
    ?>
</div>
<div> Registro de usuario
</div>
<form action="registro.php" method="post">
<input type="text" name="nombre" placeholder="nombre">
<input type="password" name="password" placeholder="contraseña"
<input type="password" name="password2" placeholder="repite la contraseña"
<input type="submit" name="boton" value="Guardar">
<input type="submit" name="boton" value="Cancelar">
</form>
<?php
if ($_GET != null) {
    if (($_GET['boton']) == "Enviar") {
        echo "<p> Hola " . $_GET['nombre'] . "</p>";
    }
}
?>

</body>
</html>
