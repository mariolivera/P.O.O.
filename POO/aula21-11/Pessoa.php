<?php

    class Pessoa {
        public string $nome; // o $nome não é chamada de variavel é chamada de atributo.
        public int $idade;
        protected string $cpf;
        private int $salario;
        public function __construct(string $nome, int $idade)            
        {
            $this-> nome =$nome;
            $this-> idade = $idade;
        }
        public function getSalario(): string
        {   
            return $this->salario;
        }
        public function setSalario(int $valor): int
        {
            return $this->salario=$valor;
        }
    }