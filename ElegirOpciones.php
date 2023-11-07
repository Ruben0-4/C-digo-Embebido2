
<?php
// Iniciamos la sesión para almacenar la fecha y hora de acceso
session_start();

// Datos de usuario
$correct_username = "admin";
$correct_password = "1234";

// Obtener datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Verificar credenciales
if ($username === $correct_username && $password === $correct_password) {
    // Almacenar la fecha y hora de acceso en la sesión
    $_SESSION['access_time'] = date('Y-m-d H:i:s');

    // Redirigir al usuario a la página principal
    header("Location: Opciones.php");
} else {
    // Si las credenciales son incorrectas, redirigir al formulario de acceso
    header("Location: Index.html");
}
?>