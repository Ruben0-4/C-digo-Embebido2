<?php
// Iniciamos la sesión para acceder a la fecha y hora de acceso
session_start();

// Destruir todas las variables de sesión
session_unset();
session_destroy();

// Redirigir al formulario de acceso
header("Location: Index.html");
exit();
?>
