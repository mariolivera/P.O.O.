<?php

//require_once("Pessoa.php"); // aqui faz a chamada do arquivo Pessoa.php
require_once("Sala.php");
//$Pessoa = new Pessoa("Mário", 32);  // aqui vamos criar uma nova pessoa 
//echo $Pessoa->nome; // aqui mostra
//echo"<br>"; 
//2echo "salario:".$pessoa->getSalario();
echo"<br>";
$sala = new Sala("sou-dev");
echo "sala".$sala->nome;
$sala->alunos[] = $pessoa->nome;
var_dump($sala->alunos);

// $pessoa2 = new Pessoa("Elvira", 35);
// echo $pessoa2 ->nome;