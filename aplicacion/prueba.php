<?php
$enlace = mysqli_connect("localhost", "root", "", "test");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}else{
    if ($resultado = $enlace->query("select * from usuarios")) {
        // printf("La selección devolvió %d filas.\n",
        // $resultado->num_rows);
        while ($fila = $resultado->fetch_assoc()) {
            echo "id: ", $fila["id"]. " - Nombre: ", $fila["nombre"]. ", Password: ", $fila["password"].
        "<br>";
        }
        $resultado->close();
    }
    // $consulta = "selct * from usuarios";
    // $resultado = $enlace ->mysql_query($consulta);
}

$sql = "SELECT * from test";


mysqli_close($enlace);
?>