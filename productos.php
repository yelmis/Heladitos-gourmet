<?php
include("conexion.php");

$sql = "SELECT * FROM productos";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
        echo "<div class='producto'>";
        echo "<img src='" . $row['imagen'] . "' alt='" . $row['nombre'] . "'>";
        echo "<h3>" . $row['nombre'] . "</h3>";
        echo "<p>" . $row['descripcion'] . "</p>";
        echo "<span>Precio: $" . $row['precio'] . "</span>";
        echo "</div>";
    }
} else {
    echo "No hay productos disponibles.";
}

$conexion->close();
?>