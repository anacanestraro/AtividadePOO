<?php

    class Cliente{
        private $nome;
        private $idade;
        private $cpf;

        public function __construct($nome, $idade, $cpf){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->cpf = $cpf;
        }

    }

?>
