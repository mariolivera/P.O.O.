<?php
// solicitando composer que gerencie o carregamento  automagico dos arquivos.

use App\Connection\DatabaseConnection;

include_once '../vendor/autoload.php';

include '../config/database.php';


$rotas = require '../config/router.php';

$url = $_SERVER['REQUEST_URI']; //égando a url acesssada pelo usuario.
$rota = explode ('?',$url)[0];  //separando a url atraves do "?"

if (false === isset($rotas[$rota])) {
    echo "erro 404";
    exit;
}

$controller = $rotas[$rota]['controller'];
$method = $rotas[$rota]['method'];

(new $controller)->$method();