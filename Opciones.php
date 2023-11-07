<?php
session_start();

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
    <title>Menú Principal</title>
    <style>
        body {
            background-color: rgb(79, 163, 209);
        }
        .menu-container {
            background-color: #ffc73f;
            width: 30%;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            margin-top: 5%;
            margin-left: 33%;
            text-align: center;
        }

        .menu-container h2 {
            color: white; 
        }

        .menu-container h3 {
            color: white;
        }

        .menu-container ul {
            list-style-type: none;
            padding: 0;
        }

        .menu-container ul li {
            margin-bottom: 10px;
        }

        .menu-container a {
            text-decoration: none;
            color: black;
            background-color: #61dafb;
            padding: 8px 16px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 10px;
        }

        .menu-container a:hover {
            background-color: #4fa3d1;
        }

    </style>
</head>
<body>
    <div class="menu-container">
        <h2>Bienvenido, <?php echo $_SESSION['access_time']; ?> </h2>

        <h3>Menú de opciones:</h3>
        <ul>
            <li><a href="Ruta.php">Obtener Ruta Actual</a></li>
            <li><a href="BuscarArchivos.php">Buscar un Fichero</a></li>
            <li><a href="CrearArchivo.php?option=crear">Crear un Nuevo Fichero</a></li>
        </ul>
        <a href="Cerrar.php">Cerrar Sesión</a>
    </div>
</body>
</html>
