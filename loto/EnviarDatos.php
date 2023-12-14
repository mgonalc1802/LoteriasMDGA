<?php
    require_once "vendor/autoload.php";
    use GuzzleHttp\Client;

    class EnviarDatos
    {
        private $client;

        //Constructor
        public function __construct() 
        {
            $this->client = new Client();
        }

        public function enviarDatos($numero, $correo) 
        {
            $respuesta = $this->client->request('POST', 'http://correo', 
            [
                'form_params' => 
                [
                    'numero' => $numero,
                    'gmail' => $correo
                ]
            ]);

            return $respuesta->getBody();
        }
    }
?>
