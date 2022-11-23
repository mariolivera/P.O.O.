<?php

use App\Controller\AlunoController;
use App\Controller\CursoController;
use App\Controller\ProfessorController;
use App\Controller\SiteController;

// include '../src/Controller/AlunoController.php';
// include '../src/Controller/ProfessorControler.php';
// include '../src/Controller/CursoController.php';
// include '../src/Controller/SiteController.php';

function criarRota(string $controllerNome, string $methodNome):array
{
    return[
        'controller'=>$controllerNome,
        'method'=>$methodNome,
    ];
}

$rotas = 
[
    '/' => criarRota(SiteController::class, 'inicio'),

    '/alunos/listar' => criarRota(AlunoController::class, 'listar'),
    '/alunos/novo' => criarRota(AlunoController::class, 'cadastrar'),
    '/alunos/editar' => criarRota(AlunoController::class, 'editar'),
    '/alunos/excluir' => criarRota(AlunoController::class, 'excluir'),

    '/professor/listar' => criarRota(ProfessorController::class, 'listar'),
    '/professor/novo' => criarRota(ProfessorController::class, 'cadastrar'),
    '/professor/editar' => criarRota(ProfessorController::class, 'editar'),
    '/professor/excluir' => criarRota(ProfessorController::class, 'excluir'),

    '/curso/listar' => criarRota(CursoController::class, 'listar'),
    '/curso/novo' => criarRota(CursoController::class, 'cadastrar'),
    '/curso/editar' => criarRota(CursoController::class, 'editar'),
    '/curso/excluir' => criarRota(CursoController::class, 'excluir'),
];

return $rotas;