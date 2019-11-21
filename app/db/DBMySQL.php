<?php

namespace db;

use App\entidades\Persistente;
use App\excecoes\SistemaException;
use PDO;
use PDOException;
use respositorios\IRepositorio;

 class DBMySQL implements IRepositorio {
	
    protected static $db;
    
    private function __construct()
    {
        
        if(!isset(self::$pdo)){

            $db_host = "localhost";
            $db_nome = "sapo";
            $db_usuario = "root";
            $db_senha = "";
            $db_driver = "mysql";
            
            try {
                self::$db = new PDO("$db_driver:host=$db_host; dbname=$db_nome", $db_usuario, $db_senha);
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$db->exec('SET NAMES utf8');

            } catch (PDOException $e) {
                throw new SistemaException ( $e->getMessage(), $e->getCode(), $e);
            }
        }
    }


    private static function conexao()
    {
        if (!isset(self::$db)) {
            new DBMySQL();
        }
        
        return self::$db;
    }

    private function query (string $sql, array $dados){
        try {
            $pdo = self::conexao();
            $stmt = $pdo->prepare($sql);
            $stmt->execute($dados);

            return $stmt;
        } catch (PDOException $e) {
            throw new SistemaException ( $e->getMessage(), $e->getCode(), $e);
        }
    }

    protected function update (string $sql, array $dados){
        $stmt = $this->query($sql, $dados);
        return $stmt->rowCount();
    }
    
    protected function select (string $SQL, array $dados){
        $stmt = $this->query($sql, $dados);
        return $stmt->fetchAll();
    }

     public function inserir(Persistente $persistente)
     {
         // TODO: Implement inserir() method.
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