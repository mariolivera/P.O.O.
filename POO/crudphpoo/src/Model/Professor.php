<?php

declare(strict_types=1); // essa linha é importante  a ser declarada.

namespace App\Model;

class Professor extends Pessoa
{
    public string $cpf;
    public string $endereco;
    public string $formacao;
    public string $nome;
    public bool $status;
    //public array $horariosDisponiveis = [];
}
