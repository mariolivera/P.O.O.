<?php

declare(strict_types=1);


use App\Model\Aluno;
use App\Repository\AlunoRepository;
use Dompdf\Dompdf;
use Exception;


class AlunoController extends AbstractController
{
    public function listar(): void
    {
        $rep = new AlunoRepository();
        
        
        $alunos = $rep->BuscarTodos();

        $this->render('aluno/listar', [
            'alunos'=> $alunos,
        ]);
    }

    public function cadastrar():void
    {
        if (true === empty($_POST)){
        $this->render('aluno/cadastrar');
        return;
    }

    $aluno = new Aluno();
    $aluno ->nome = $_POST['nome'];
    $aluno ->dataNascimento = $_POST['nascimento'];
    $aluno ->cpf = $_POST['cpf'];
    $aluno ->email = $_POST['email'];
    $aluno ->genero = $_POST['genero'];

    $rep = new AlunoRepository();
        try {
            $rep->inserir($aluno);
        } catch (Exception $exception){
            if (true === strict_contains($exception->getMessage(), 'cpf')){
                die('CPF ja existe');
            }
            if (true === strict_contains($exception->getMessage(), 'email')){
                die('Email ja existe');
            }
            die('Aconteceu um erro, estamos trabalando para solucionar o problema mais rapido');
        }
        $this->redirect('/aluno/listar');
    }

    public function editar(): void
    {
        $id = $_GET['id'];
        $rep = new AlunoRepository();
        $aluno =$rep->buscarUm($id);
        $this->render('aluno/editar', [$aluno]);
            if (false === empty($$_POST)) {
                $aluno ->nome = $_POST['nome'];
                $aluno ->dataNascimento = $_POST['nascimento'];
                $aluno ->cpf = $_POST['cpf'];
                $aluno ->email = $_POST['email'];
                $aluno ->genero = $_POST['genero'];
                
                try {
                    $rep->atualizar($aluno, $id);
                } catch (Exception $exception){
                    if (true === strict_contains($exception->getMessage(), 'cpf')){
                        die('CPF ja existe');
                    }
                    if (true === strict_contains($exception->getMessage(), 'email')){
                        die('Email ja existe');
                    }
                    die('Eita, deu BO Ó, vou resolver aqui jájá o site ta no ar');
                }
                $this->redirect('alunos/listar');
            }
    }
    
    public function excluir(): void
    {
        //$this->render('aluno/excluir');
        $id = $_GET['id'];
        $rep = new AlunoRepository();
        $rep-excluir($id);
        $this->redirect('alunos/listar');
    }
    public function relatorio():void
    {
        $hoje = date('d/m/Y');
        $design = "
            <h1>Relatorio de Alunos</h1>
            <hr>
            <em>Gerado em {$hoje}</em>
        ";
        $dompdf = new Dompdf();
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->loadHtml($design);
        $dompdf->render();
        $dompdf->stream();
    }
}