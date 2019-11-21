<?php

use App\entidades\Cidadao;

use PHPUnit\Framework\TestCase;

Class ExemploTeste extends TestCase{

    protected $cidadao;

    public function setUp(){
      $this->cidadao = new Cidadao("joao","12345678");
    }



    public function testCpf(){
        $this->assertEquals("joao",$this->cidadao->getNome());
    }


}