<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los valores del formulario
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Se recomienda almacenar contraseñas de forma segura

    // Aquí deberías realizar validaciones y sanitizaciones adicionales

    // Guarda los datos en la base de datos (ejemplo: MySQL)
    $servername = "localhost";
    $dbname = "tu_base_de_datos";
    $dbusername = "tu_usuario";
    $dbpassword = "tu_contraseña";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Inserta los datos en la tabla de usuarios
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        $stmt->execute();
//Mensaje Bienvenida
        echo "Registro exitoso. ¡Bienvenido, $username!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
}
?>
