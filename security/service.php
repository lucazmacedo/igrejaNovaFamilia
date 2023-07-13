<?php

class DevocionalService {

        private $conexao;
        private $contato;

        public function __construct(Conexao $conexao, Devocional $devocional) {
         $this->conexao = $conexao->conectar();
         $this->contato = $devocional;
        }

        public function getDevocional() { //READ
            
            $query = 'SELECT * FROM tb_devocional ORDER BY data DESC LIMIT 1';
                $stmt = $this->conexao->prepare($query);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_OBJ);
            }
        

    }

?>