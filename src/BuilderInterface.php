<?php

namespace Builder;

use Builde\Parts\Animal;

interface BuilderInterface{

    public function criarAnimal();

    public function addOlho();

    public function addPata();

    public function addPelo();

    public function getAnimal(): Animal;
}

?>