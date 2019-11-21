<?php

require '../../vendor/autoload.php';

use App\entidades\Persistente;
use db\DBMySQL;

$nome =  $_POST['name'];
$cpf =  $_POST['cpf'];


   class FrontController extends DBMySQL{

       public function inserir(Persistente $persistente){
           $sql = "INSERT INTO agendamento (nome, cpf) VALUES ('dia','1234')";
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