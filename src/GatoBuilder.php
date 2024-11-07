<?php declare(strict_types = 1);

namespace Builder;

use Builder\Parts\Gato;
use Builder\Parts\Olho;
use Builder\Parts\Pata;
use Builder\Parts\Pelo;

use Builder\Parts\Animal;

class GatoBuilder implements BuilderInterface{

    private $gato;

    public function criarAnimal(){
        $this->gato = new Animal;
    }

    public function addOlho(){
        $this->gato->setPart('olhoDireito', new Olho());
        $this->gato->setPart('olhoEsquerdo', new Olho());

    }

    public function addPata(){
        $this->gato->setPart('pataDianteiraDireita', new Pata());
        $this->gato->setPart('pataDianteiraEsquerda', new Pata());
        $this->gato->setPart('pataTraseiraDireita', new Pata());
        $this->gato->setPart('pataTraseiraEsquerda', new Pata());
    }

    public function addPelo(){
        $this->gato->setPart('pelo', new Pelo());
    }

    public function getAnimal(): Animal{
        return $this->gato;
    }

}

?>