<?php declare(strict_types = 1);

namespace Builder;

use Buider\Parts\Animal;

class Director{
     public function build(BuilderInterface $builder): Animal{

        $builder->criarAnimal();
        $builder->addOlho();
        $builder->addPata();
        $builder->addPelo();

        return $builder->getAnimal();

     }
}

?>