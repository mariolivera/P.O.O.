<?php

declare(strict_types=1);

namespace App\Model;

use DateTime;

class Aluno extends Pessoa
{
    public string $nome;
    public string $cpf;
    public int $matricula;
    public string $dataNascimento;
    public bool $status;
    public string $genero;
}
