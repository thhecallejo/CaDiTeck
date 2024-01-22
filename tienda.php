<?php
// Incluye el archivo de conexión
require_once 'conexion.php';

// Ejecuta una consulta SQL
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);

// Muestra los productos
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nombre: " . $row["nombre"]. "<br>";
    }
} else {
    echo "0 results";
}
// Cierra la conexión
$conn->close();
?>