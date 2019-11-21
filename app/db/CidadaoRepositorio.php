<?php

namespace db;

use App\entidades\Persistente;

class CidadoRepositorio extends DBMySQL {


    public function inserir(Persistente $persistente){
        $sql = "INSERT INTO minhaTabela (nome) VALUES (:nome)";
        return $this->update($sql, $persistente->objectToArray());
    }

    public function atualizar(Persistente $persistente)
    {
        // TODO: Implement atualizar() method.
    }

    public function excluir(Persistente $persistente)
    {
        // TODO: Implement excluir() method.
    }

    public function selecionar(Persistente $persistente)
    {
        // TODO: Implement selecionar() method.
    }

    public function selecionarTodos()
    {
        // TODO: Implement selecionarTodos() method.
    }
}


?>