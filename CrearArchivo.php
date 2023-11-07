<?php
session_start();

function crearNuevoFichero($nombreFichero, $permisos, $contenido) {
    // Implementa la lógica para crear un nuevo fichero con los permisos y contenido dados
    // Por ahora, devolveré un mensaje ficticio
    return "Fichero creado: $nombreFichero, Permisos: $permisos, Contenido: $contenido";
}

if (!isset($_SESSION['access_time'])) {
    header("Location: Index.html");
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Fichero</title>
    <style>
        body {
            background-color: #ffc73f;
        }

        .crear-container {
            background-color: #394049;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            margin: 20px;
            color: #fff;
            text-align: center;
            margin-top: 10%;
            margin-left: 33%;
            width: 30%;
        }

        .crear-container h2 {
            color: #61dafb; /* Color relacionado con el diseño anterior */
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 10px;
            font-size: 18px;
        }

        input, textarea {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #61dafb;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #4fa3d1;
        }

        .crear-container p {
            margin: 15px 0;
            font-size: 16px;
        }

        a {
            text-decoration: none;
            color: #61dafb;
        }

        a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <div class="crear-container">
        <h2>Crear Nuevo Fichero</h2>

        <form action="CrearArchivo.php" method="post">
            <label for="nombreFichero">Nombre del Fichero:</label>
            <input type="text" id="nombreFichero" name="nombreFichero" required>

            <label for="permisos">Permisos:</label>
            <input type="text" id="permisos" name="permisos" required>

            <label for="contenido">Contenido:</label>
            <textarea id="contenido" name="contenido" required></textarea>

            <button type="submit">Crear Fichero</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombreFichero = $_POST['nombreFichero'];
            $permisos = $_POST['permisos'];
            $contenido = $_POST['contenido'];

            $resultadoCreacion = crearNuevoFichero($nombreFichero, $permisos, $contenido);
            echo "<p>$resultadoCreacion</p>";
        }
        ?>
        <br>
        <a href="Opciones.php">Volver al Menú Principal</a>
    </div>
</body>
</html>
