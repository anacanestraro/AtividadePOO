<?php declare(strict_types = 1);

namespace Builder;

use Builder\Parts\Animal;

class Diretor{
     public function build(BuilderInterface $builder): Animal{

        $builder->criarAnimal();
        $builder->addOlho();
        $builder->addPata();
        $builder->addPelo();

        return $builder->getAnimal();

     }
}

?>