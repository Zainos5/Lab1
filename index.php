<?php
include 'conexion.php';

$resultado = $conexion->query("SELECT * FROM productos");

echo "<h1>Lista de Productos</h1>";
while ($fila = $resultado->fetch_assoc()) {
    echo "ID: " . $fila["id"] . " - " . $fila["nombre"] . " - $" . $fila["precio"] . "<br>";
}

$conexion->close();
?>
