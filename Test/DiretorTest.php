<?php declare(strict_types = 1);

namespace Builder\Test;

use Builder\Diretor;
use Builder\CachorroBuilder;
use Builder\GatoBuilder;


use Builder\Parts\Animal;
use Builder\Parts\Olho;
use Builder\Parts\Pata;
use Builder\Parts\Pelo;

use Builder\Parts\Cachorro;
use Builder\Parts\Gato;

use PHPUnit\Framework\TestCase;

class DiretorTest extends TestCase{

    public function testCriarCachorro(){
        $builder = new CachorroBuilder();
        $novoCachorro = (new Diretor())->build($builder);

        $this->assertInstanceOf(Cachorro::class, $novoCachorro);

    }

}

?>