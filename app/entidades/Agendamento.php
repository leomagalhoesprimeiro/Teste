<?php

namespace App\entidades;

use App\entidades\Persistente;

class Agendamento extends Persistente{

protected $nome;
protected $telefone;
protected $data;
protected $bairro;
protected $email;
protected $cpf;
protected $rua;
protected $numero;

    /**
     * Agendamento constructor.
     */
//    public function __construct(string $nome, string $telefone, Date $data, string $bairro, string $email, string $cpf, string $rua, int $numero)
//    {
//        $this->nome = $nome;
//        $this->telefone= $telefone;
//        $this->data= $data;
//        $this->bairro= $bairro;
//        $this->email = $email;
//        $this->cpf = $cpf;
//        $this->rua= $rua;
//        $this->numero= $numero;
//
//    }

    public function __construct(string $nome, string $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;


    }


    public function getNome():string
    {
        return $this->nome;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;
    }


    public function getData() : \DateTime
    {
        return $this->data;
    }


    public function setData($data)
    {
        $this->data = $data;
    }


    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param mixed $bairro
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * @param mixed $rua
     */
    public function setRua($rua)
    {
        $this->rua = $rua;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }



    static function arrayToOBject(array $valores)
    {
        // TODO: Implement arrayToOBject() method.
    }

    function objectToArray(): array
    {
        // TODO: Implement objectToArray() method.
    }
}