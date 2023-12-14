<?php
    require_once "EnviarDatos.php";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        if(isset($_POST['numero']))
        {
            $enviarDatos = new EnviarDatos();
            $numero = $_POST['numero'];
            $correo = $_POST['correo'];
            echo $enviarDatos->enviarDatos($numero, $correo);
        }
    } 
    else
    {
        echo "Por favor, introduzca los valores.";
    }
?>

<!DOCTYPE html>
<html lang = "es">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>Enviar Datos</title>
    </head>
    <body>
        <form action = "index.php" method = "POST">
            <label for = "numero">numero</label>
            <input type = "number" name = "numero" id = "numero" min = '0'>
            <label for = "gmail">gmail</label>
            <input type = "text" name = "correo" id = "correo">
            <input type = "submit" value = "Enviar">
        </form>
    </body>
</html>