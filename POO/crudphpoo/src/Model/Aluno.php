<?php

declare(strict_types=1);
use DateTime; //uma forma de importe do php.

//aqui vai ficar a definição do caminho ate essa 
class alunos
{
    public string $nome;
    public string $cpf;
    public int $matricula;
    public DateTime $dataNascimento;
    public bool $status;
    public string $genero;
}