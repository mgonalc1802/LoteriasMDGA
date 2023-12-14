<?php
    require_once 'vendor/autoload.php';
    use Dompdf\Dompdf;

    $mipdf = new Dompdf();

    $mipdf->getOptions()->setChroot("/var/www/html");

    //Generamos el html para insertarlo en el pdf
    $html='<!DOCTYPE html>
    <html lang = "es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Lotería</title>
        </head>
        <body>
            <img src="loteria.jpg">
        </body>
    </html>';

    # Definimos el tamaño y orientación del papel que queremos.
    # O por defecto cogerá el que está en el fichero de configuración.
    $mipdf ->setPaper("A4", "portrait");

    # Cargamos el contenido HTML.
    $mipdf ->loadHtml($html);

    # Renderizamos el documento PDF.
    $mipdf ->render();

    # Creamos un fichero
    $pdf = $mipdf->output();

    //Guarda el pdf en el contenedor cartero
    echo $pdf;
?>
