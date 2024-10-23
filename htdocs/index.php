<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web de Alberto de la Blanca Rodríguez</title>
    <style>
        body{
            margin:0;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            background-color: lightblue;
        }
        form{
            display:flex;
            flex-direction:column;
            align-items:center;
        }
    </style>
</head>
<body>
    <h1>Alberto de la Blanca Rodríguez</h1>
    <?php
        date_default_timezone_set("Europe/Madrid");
        echo date("H:i:s");
    ?>
    <div id='relojCliente'></div>
    <br>
    <h3>Formulario</h3>
    <br>
    <form action="insertar.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad">
        <br>
        <input type="submit" value="Enviar">
    </form>
    <script src="js/app.js"></script>
</body>
</html>