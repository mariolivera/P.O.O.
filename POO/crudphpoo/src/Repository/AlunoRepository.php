<?php

declare(strict_types=1);

namespace App\Repository;

use App\Connection\DatabaseConnection;
use App\Model\Aluno;
use PDO;

class AlunoRepository implements RepositoryInterface
{   
    public const TABLE = 'tb_alunos';
    public PDO $pdo;

    public function __construct()
    {
        $this->pdo = DatabaseConnection::abrirConexao();
    }

    public function BuscarTodos(): iterable
    {
        //$conexao = DatabaseConnection::abrirConexao();
        
        $sql = 'SELECT * FROM '. self::TABLE;
        $query = $this->pdo->query($sql); //prepara para execultar no banco
        $query->execute();              //execultando o camando lá no banco de dados
        return $query->fetchAll(PDO::FETCH_CLASS, Aluno::class);      //pegando os dados e transformando em array
    }

    public function BuscarUm(string $id): object
    {
        $sql = "SELECT * FROM ".self::TABLE." WHERE id = '{$id}'";
        $query = $this->pdo->query($sql);
        $query->execute();
        return $query->fetchObject(Aluno::class);
    }

    public function inserir(object $dados): object
    {
        $matricula = date('Ymds') . substr($dados->cpf, -2);

        $sql = "INSERT INTO " . self::TABLE . 
            "(nome, email, cpf, matricula, status, dataNascimento, genero) " . 
            "VALUES (
                '{$dados->nome}', 
                '{$dados->email}', 
                '{$dados->cpf}', 
                '{$matricula}', 
                '1', 
                '{$dados->dataNascimento}', 
                '{$dados->genero}'
            );";

        $this->pdo->query($sql);

        return $dados;
    }

    public function atualizar(object $NovoDados, string $id): object
    {
        $sql = "UPDATE " . self::TABLE . 
            " SET 
                nome='{$novosDados->nome}',
                email='{$novosDados->email}',
                cpf='{$novosDados->cpf}',
                dataNascimento='{$novosDados->dataNascimento}',
                genero='{$novosDados->genero}' 
            WHERE id = '{$id}';";

        $this->pdo->query($sql);
        return $NovoDados;
    }

    public function excluir(string $id): void
    {
        $sql = "DELETE FROM ".self::TABLE." WHERE id = '{$id}'";
        $query = $this->pdo->query($sql);
        $query->execute();
    }
}