<?php
    require_once "vendor/autoload.php";
    require_once "EnviarGmail.php";
    require_once "Repositorios/loteriaRepositorio.php";

    use GuzzleHttp\Client;

    $numeroLote = $_POST['numero'];
    $correo = $_POST['gmail'];

    //Actúa de api
    if (isset($_POST)) 
    {
        $loteria = loteriaRepositorio::findByNumero1($numeroLote);
        if ($loteria != null) 
        {
            $imagen = '<img src="./loteria.jpg">';
            $_POST['imagen'] = $imagen;
            $cliente = new Client();
            $_POST['gmail'] = $correo;
            $respuesta = $cliente->request('POST', 'http://fnmt', 
            [
                'form_params' => 
                [
                    'gmail' => $correo,
                    'imagen' => $imagen                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
                ]
            ]);
        }
    }


    $pdf = $respuesta->getBody()->getContents();

    $contenido = $_POST['gmail'];
    $partes = explode("@", $contenido);
    $numerosLote = $partes[0];

    //Nombre del pdf que se generará
    $filename = $numerosLote.".pdf";

    //Ruta en la que se guardará el pdf en este contenedor
    $pdfRuta ="./PDFs/";

    //Guardar el pdf en el contenedor cartero
    file_put_contents($pdfRuta.$filename, $pdf);

    $correo = new EnviarGmail($contenido, $pdfRuta.$filename);

    $correo->enviarGmail();
?>