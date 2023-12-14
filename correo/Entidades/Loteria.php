<?php

    class Loteria 
    {
        //Atributos del objeto
        public $numero1;
        public $numero2;
        public $numero3;
        public $numero4;
        public $numero5;

        //Constructor
        public function __construct($numero1, $numero2, $numero3, $numero4, $numero5) 
        {
            $this->numero1 = $numero1;
            $this->numero2 = $numero2;
            $this->numero3 = $numero3;
            $this->numero4 = $numero4;
            $this->numero5 = $numero5;
        }

        //Getters
        //Devuelve el numero1
        public function getNumero1() 
        {
            return $this->numero1;
        }

        //Devuelve el numero2
        public function getNumero2() 
        {
            return $this->numero2;
        }

        //Devuelve la numero3
        public function getNumero3() 
        {
            return $this->numero3;
        }

        //Devuelve la numero3
        public function getNumero4() 
        {
            return $this->numero4;
        }

        //Devuelve la numero5
        public function getNumero5() 
        {
            return $this->numero5;
        }

        //Setters
        //Asigna numero1
        public function setNumero1($nuevonumero1)
        {
            $this->numero1 = $nuevonumero1;
        }

        //Asigna numero2
        public function setNumero2($nuevonumero2)
        {
            $this->numero2 = $nuevonumero2;
        }

        //Asigna numero3
        public function setNumero3($nuevonumero3)
        {
            $this->numero3 = $nuevonumero3;
        }

        //Asigna numero3
        public function setNumero4($nuevonumero4)
        {
            $this->numero4 = $nuevonumero4;
        }

        //Asigna numero3
        public function setNumero5($nuevonumero5)
        {
            $this->numero5 = $nuevonumero5;
        }

    }
?>