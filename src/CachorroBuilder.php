<?php declare(strict_types = 1);

namespace Builder;

use Builder\Parts\Cachorro;

use Builder\Parts\Olho;
use Builder\Parts\Pata;
use Builder\Parts\Pelo;
use Builder\Parts\Animal;

class CachorroBuilder implements BuilderInterface{

    private $cachorro;

    public function criarAnimal(){
        $this->cachorro = new Animal;
    }

    public function addOlho(){
        $this->cachorro->setPart('olhoDireito', new Olho());
        $this->cachorro->setPart('olhoEsquerdo', new Olho());
    }

    public function addPata(){
        $this->cachorro->setPart('pataDianteiraDireita', new Pata());
        $this->cachorro->setPart('pataDianteiraEsquerda', new Pata());
        $this->cachorro->setPart('pataTraseiraDireita', new Pata());
        $this->cachorro->setPart('pataTraseiraEsquerda', new Pata());
    }

    public function addPelo(){
        $this->cachorro->setPart('pelo', new Pelo());
    }

    public function getAnimal(): Animal{
        return $this->cachorro;
    }

}