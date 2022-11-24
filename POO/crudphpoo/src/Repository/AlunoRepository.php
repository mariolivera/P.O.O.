<?php

declare(strict_types=1);

namespace App\Repository;

use App\Connection\DatabaseConnection;
use App\Model\Aluno;
use PDO;

class AlunoRepository implements RepositoryInterface
{   
    public const TABLE = 'tb_alunos';

    public function BuscarTodos(): iterable
    {
        $conexao = DatabaseConnection::abrirConexao();
        $sql = 'SELECT * FROM '. self::TABLE;
        $query = $conexao->query($sql); //prepara para execultar no banco
        $query->execute();              //execultando o camando lá no banco de dados
        return $query->fetchAll(PDO::FETCH_CLASS, Aluno::class);      //pegando os dados e transformando em array
    }

    public function BuscarUm(string $id): object
    {
        return new \stdClass();
    }

    public function inserir(object $dados): object
    {
        return $dados;
    }

    public function atualizar(object $NovoDados, string $id): object
    {
        return $NovoDados;
    }

    public function excluir(string $id): void
    {

    }
}