<?php

use App\entidades\Agendamento;
use PHPUnit\Framework\TestCase;



Class TesteAgendamento extends TestCase
{

    protected $agenda;

    public function setUp()
    {
        $this->agenda = new Agendamento('buraco na rua', "23232434");
    }

    public function testAgendamento(){
        $this->assertEquals("buraco na rua", $this->agenda->getNome());
    }
}

