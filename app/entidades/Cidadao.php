<?php 

namespace App\entidades;

use Agendamento;
use App\entidades\Persistente;


class Cidadao extends Persistente {

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $cpf;

    public function __construct(string $nome, string $cpf){
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome() : string {
        return $this->nome;
    }

    public function getCPF() : string {
        return $this->cpf;
    }

    static function arrayToOBject(array $valores)
    {
        // TODO: Implement arrayToOBject() method.
    }

    function objectToArray(): array
    {
        return [
            'nome' => $this->nome,
            'cpf' => $this->cpf
        ];
    }
}

?>