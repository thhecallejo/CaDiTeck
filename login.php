<?php
session_start(); // Inicia la sesión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si se enviaron datos por POST

    // Obtiene el nombre de usuario y la contraseña del formulario
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Realiza la conexión a la base de datos (ajusta los detalles según tu configuración)
    $conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

    // Verifica la conexión
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    // Prepara la consulta SQL para seleccionar el usuario por nombre
    $sql = "SELECT * FROM Usuarios WHERE Nombre=?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();

    // Obtiene el resultado de la consulta
    $result = $stmt->get_result();

    // Verifica si se encontró un usuario
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifica la contraseña
        if (password_verify($password, $row['Password'])) {
            // Contraseña válida, inicia sesión
            $_SESSION['nombre'] = $row['Nombre'];
            echo "hola";
            // Redirecciona a la página principal o donde desees
            header("Location: index.html");
            exit();
        } else {
            // Contraseña incorrecta
            echo '<script>alert("Contraseña incorrecta para el usuario ' . $username . '");';
            echo 'window.location.href = "iniciosesion.html";</script>';
            exit();
        }
    } else {
        // Usuario no encontrado - muestra una alerta y redirecciona
    echo '<script>alert("El usuario ' . $username . ' no está registrado.");';
    echo 'window.location.href = "index.php";</script>';
    exit();
    }

    // Cierra la conexión y la consulta preparada
    $stmt->close();
    $conexion->close();
}
?>

