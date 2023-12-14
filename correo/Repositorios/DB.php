<?php
    //Iniciamos la conexión
    class DB
    {
        private static $conexion = null;

        public static function conecta()
        {
            if(self::$conexion == null)
            {
                $conexion = new PDO('mysql:host=numeros;dbname=lote', 'root', 'root');
            }
            
            return $conexion;
        }
    }
    
?>