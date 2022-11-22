<?php

declare(strict_types=1);

class AlunoController
{
    public function listar(): void
    {
        $this->renderizar('listar');
    }

    public function cadastrar():void
    {
        $this->renderizar('cadastrar');
    }

    public function excluir(): void
    {
        $this->renderizar('excluir');
    }

    public function editar(): void
    {
        $this->renderizar('editar');
    }

    public function renderizar(string $arquivo, ?array $dados = null)
    {
        include "../views/template/header.php";
        include "../views/aluno/{$arquivo}.php";
        $dados;
        include "../views/template/footer.php";
    }
    
}