<?php

include("con_db.php");

if (isset($_POST['register'])) {
    // Obtén los datos del formulario
    $name = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Verifica que los campos no estén vacíos
    if (strlen($name) >= 1 && strlen($email) >= 1 && strlen($password) >= 1) {

        // Verifica si el usuario o el email ya está en uso
        $consulta_verificar = "SELECT * FROM usuarios WHERE nombre = '$name' OR email = '$email'";
        $resultado_verificar = mysqli_query($conex, $consulta_verificar);

        // Manejo de errores
        if (!$resultado_verificar) {
            echo "Error en la consulta de verificación: " . mysqli_error($conex);
            exit;
        }

        if (mysqli_num_rows($resultado_verificar) > 0) {
            // El usuario o el email ya está en uso
            ?>
            <script>
                alert("¡El usuario o el email ya está en uso!");
                window.location.href = "index.php"; // Redirige de vuelta a la página de registro
            </script>
            <?php
        } else {
            // El usuario y el email no están en uso, procede con la inserción
            $fechareg = date("d-m-Y H:i:s");
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $consulta_insercion = "INSERT INTO usuarios(nombre, email, password, fecha_reg) VALUES ('$name', '$email', '$hashed_password', '$fechareg')";

            // Realiza una comprobación de errores en la consulta de inserción
            if (mysqli_query($conex, $consulta_insercion)) {
                ?>
                <script>
                    alert("¡Te has inscrito correctamente!");
                    window.location.href = "index.html"; // Redirige a la página principal
                </script>
                <?php
            } else {
                // Muestra el mensaje de error de MySQL en caso de fallo
                echo "Error en la consulta de inserción: " . mysqli_error($conex);
            }
        }
        
        // Cierra la conexión después de realizar las consultas
        mysqli_close($conex);

    } else {
        // Campos incompletos
        ?>
        <script>
            alert("¡Por favor complete todos los campos!");
            window.location.href = "registrar.php"; // Redirige de vuelta a la página de registro
        </script>
        <?php
    }
}

?>
