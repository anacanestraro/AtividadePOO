<?php

    class ClienteBuilder implements Builder{

        private $cliente;

        public function __construct(){
            $this->reset();
        }

        public function reset(): void{
            $this->cliente = new Cliente();
        }

        public function buildNome(): void{
            $this->product->nome = "Ana";
        }
        
        public function buildIdade(): void{
            $this->product->idade = 20;
        }
        
        public function buildCpf(): void{
            $this->product->cpf = 99999999;
        }
    }

?>