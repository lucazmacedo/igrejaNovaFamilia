<?php

class Devocional {
        private $titulo;
        private $palavra;
        private $versiculo;
        private $versiculoBiblia;
        private $audio;

        public function __get($atributo) {
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
            return $this;
        }
    }
    
    
?>