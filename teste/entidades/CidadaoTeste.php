<?php

use App\entidades\Cidadao;

use PHPUnit\Framework\TestCase;

Class StubTest extends TestCase{

    public function testStub()
    {
      $stub = $this->createMock(Cidadao::class);

      $stub->method('getNome')->willReturn('Cid');
      $stub->method('getCPF')->willReturn('12345678910');
      $stub->method('ValidarCpf')->willReturn(false);


      $this->assertSame('Cid',$stub->getNome('Cid'));
      $this->assertSame('12345678910',$stub->getCPF('12345678910'));
      $this->assertSame(false ,$stub->ValidarCpf('1234567891'));

//      $stub->method('ValidarCpf')->willReturn('1234567810');
//
//      $this->assertSame('1234567810', $stub->ValidarCpf('1234567810'));

    }


}