<?php declare(strict_types=1); // ativa o modo de tipagem escrita

    namespace Builder\Parts;

    abstract class Animal{
        private $data = [];

        // função para pegar o atributo($key) e o valor do mesmo($value), os armazendando em um array assossiativo($data[])
        public function setPart(string $key, object $value){
            $this->data[$key] = $value;

        }
    }

?>

