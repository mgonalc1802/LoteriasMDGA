<?php
    require "vendor/autoload.php";
    use PHPMailer\PHPMailer\PHPMailer;

class EnviarGmail 
{
    private $contenido;
    private $pdf;

    public function __construct($contenido = null, $pdf = null) 
    {
        $this->contenido = $contenido;
        $this->pdf = $pdf;
    }

    public function enviarGmail() 
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        
        //Cambiar a 0 para no ver mensajes de error
        $mail->SMTPDebug  = 0;                          
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = "tls";                 
        $mail->Host       = "smtp.gmail.com";    
        $mail->Port       = 587;   

        //Introducir usuario de google
        $mail->Username   = "mgonalc1802@g.educaand.es"; 

        //Introducir clave
        $mail->Password   = "kxkq ckbj xamu bpsq";       
        $mail->SetFrom('mgonalc1802@g.educaand.es', 'María Dolores González Alcalá.');

        //Asunto
        $mail->Subject    = "Prueba Docker";

        //Cuerpo
        $cuerpo = '<!DOCTYPE html>
        <html lang = "es">
            <head>
                <meta charset = "UTF-8">
                <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
                <title>Gmail</title>
            </head>
            <body>
                <h1>Buenos días</h1>
                <div id = "mensaje">
                    Con este correo, te indicamos que el funcionamiento de los contenedores es correcto.
                </div>
                Atentamente {{Autor}}
            </body>
        </html>';

        // Sustituir las dobles llaves con el valor correspondiente
        $autor = 'María Dolores';  // Puedes cambiar esto al nombre del autor que desees
        $cuerpo = str_replace('{{Autor}}', $autor, $cuerpo);

        $mail->MsgHTML($cuerpo);
        $mail->MsgHTML($_POST['imagen']);

        $gmail = $_POST['gmail'];
        $partes = explode("@", $gmail);
        $nombre = $partes[0];

        //Nombre del pdf que se generará
        $filename = $nombre . ".pdf";

        //Indicamos la ruta del pdf
        $pdfRuta = "./PDFs/";
        
        //Adjuntos
        $mail->addAttachment($pdfRuta.$filename);

        //Destinatario
        $mail->AddAddress($this->contenido, "María Dolores González Alcalá.");

        //Enviar
        $resul = $mail->Send();
        if(!$resul) 
        {
            echo "Error: " . $mail->ErrorInfo;
        } 
        else 
        {
            echo "Enviado";
        }
    }
}
