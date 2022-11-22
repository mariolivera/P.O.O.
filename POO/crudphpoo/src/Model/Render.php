<?php

    abstract class Render{
    
    
        public function renderizar(string $pasta, string $arquivo, ?array $dados = null)
    {
        include "../views/aluno/{$pasta}/{$arquivo}.phtml";
        $dados;
    }
    }