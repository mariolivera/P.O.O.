<?php
    class Sala{
        public string $nome;
        public array $alunos =[];

        public function __construct(string $nome)
        {
            $this->nome =$nome;
        }
    }