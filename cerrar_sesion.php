<?php 
 
  session_start(); // Inicia la sesión
 
 // Elimina todas las variables de sesión
 session_unset();
 
 // Destruye la sesión
 session_destroy();
 
 // Redirige a la página de inicio
 header("Location: iniciosesion.html");
 exit();
?>