<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <style>
    body {
        background: linear-gradient(135deg, #add8e6, #98fb98);
        margin: 0;
        padding: 0;
        font-family: 'Arial', sans-serif;
    }

    .registro {
        width: 30%;
        text-align: center;
        margin-left: 33%;
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 10px;
        margin-top: 15%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .General {
        margin-bottom: 2%;
    }

    input {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    .log {
        text-align: center;
        color: #333;
    }

    button {
        background-color: #4CAF50;
        color: white;
        margin-top: 2%;
        padding: 15px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover {
        background-color: #45a049;
    }

    .Nombre {
        margin-top: 2%;
    }

    .Contraseña {
        margin-top: 2%;
    }

</style>

</head> 

<body>

<div class="registro">

<form method="post">

    <div class="General">
        <input type="text" name="nombre" required>
        <label class="Nombre">Nombre</label>
    </div>

    <div class="General">
        <input type="password" name="contraseña" required>
        <label class="Contraseña">Contraseña</label>
    </div>

    <div class="log">
        <?php 
            include("Index.php"); 
        ?>
    </div>

    <a href="#">

    <span></span>
    <span></span>
    <span></span>
    <span></span>

    <button type="submit">Iniciar Sesión</button>

    </a>

</form>

</div>   
    
</body>

</html>