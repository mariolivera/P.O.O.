<?php

declare(strict_types=1); // essa linha é importante  a ser declarada.

namespace App\Model;

class Professor extends Pessoa
{
    public string $nome;
    public string $cpf;
    public array $endereco = [];
    public ?string $formacao = null;
    public bool $status;
    public array $horariosDisponiveis = [];
}
