<?php
session_start();

function buscarFichero($nombreFichero) {

    return "Fichero encontrado: $nombreFichero";
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
    <title>Buscar Fichero</title>
    <style>
        body{
            background-color: #ffc73f;
        }

        .buscar-container {
            margin-top: 10%;
            margin-left: 33%;
            background-color: #394049;
            width: 30%;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            color: #fff;
            text-align: center;
        }

        .buscar-container h2 {
            color: #61dafb;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 10px;
            font-size: 18px;
        }

        input {
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

        .buscar-container p {
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
    <div class="buscar-container">
        <h2>Buscar Fichero</h2>

        <form action="BuscarArchivos.php" method="post">
            <label for="nombreFichero">Nombre del Fichero:</label>
            <input type="text" id="nombreFichero" name="nombreFichero" required>

            <button type="submit">Buscar</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombreFichero = $_POST['nombreFichero'];
            $resultadoBusqueda = buscarFichero($nombreFichero);
            echo "<p>$resultadoBusqueda</p>";
        }
        ?>
        <br>
        <a href="Opciones.php">Volver al Menú Principal</a>
    </div>
</body>
</html>
