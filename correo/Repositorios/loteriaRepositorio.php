<?php
    require_once $_SERVER['DOCUMENT_ROOT']."/Entidades/Loteria.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/Repositorios/DB.php";

    class loteriaRepositorio
    {
        private static $conexion;

        //-------------------------------ENCONTRAR--------------------------------------
        //Por numero1
        public static function findByNumero1($numero1)
        {
            //Conecta a la base de datos
            $conexion = DB::conecta();
            
            //Ejecuta la query en la base de datos
            $resultado = $conexion->query("SELECT numero1, numero2, numero3, numero4, numero5 FROM loteria WHERE numero1 = '$numero1';");
            
            //Realiza un bucle que recorre las consultas una por una 
            while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) 
            {
                //Crea la loteria obtenida
                $loteria = new Loteria($registro['numero1'], $registro['numero2'], $registro['numero3'], $registro['numero4'], $registro['numero5']);                
                return $loteria;
            }
        }

        //Encontrar a todos
        public static function findAll()
        {
            //Conecta a la base de datos
            $conexion = DB::conecta();
            
            //Crea el array donde guardara las loterias
            $loterias;
            
            //Ejecuta la query en la base de datos
            $resultado = $conexion->query("SELECT numero1, numero2, numero3, numero4, numero5 FROM loteria;");
            
            //Realiza un bucle que recorre las consultas una por una 
            while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) 
            {
                //Crea la loteria obtenida
                $loteria = new Loteria($registro['numero1'], $registro['numero2'], $registro['numero3'], $registro['numero4'], $registro['numero5']);                

                //Guarda cada loteria en un array
                $loterias[] = $loteria;
                
            }
            
            //Devuelve el array de loterias
            return $loterias;
        }
    }
?>