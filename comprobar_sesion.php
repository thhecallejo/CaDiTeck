<?php

function comprueba($Nombre, $Contraseña) {
    session_start(); // Inicia la sesión
    $conexion = new mysqli('localhost', 'root', '', 'prueba_datos');
    
    $sql = "SELECT * FROM Usuarios WHERE Nombre=?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $Nombre);
    $stmt->execute();
    
    $resultado = $stmt->get_result();
    
    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            // Verifica la contraseña
            if (password_verify($Contraseña, $fila['Contraseña'])) {
                // Contraseña válida
                // Inicia sesión
                $_SESSION['nombre'] = $fila['Nombre'];
                // Redirección después de iniciar sesión
                header("Location: index.php");
                exit();
            } else {
                echo 'Contraseña incorrecta para el usuario ' . $Nombre;
            }
        }
    } else {
        echo 'No se encontraron datos para el usuario ' . $Nombre;
    }
    
    $stmt->close();
    $conexion->close();
}

// Mover el siguiente bloque fuera de la función comprueba
if (isset($error)) {
    echo $error;
}
?>
