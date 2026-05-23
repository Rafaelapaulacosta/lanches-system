<?php


$rota = $_GET['rota'] ?? 'home'; // essa pagina define as rotas do sistema a url ficaria assim: http://localhost/Imperio/ImperioLanches/?rota=lanches para acessar a pagina de lanches, ou http://localhost/Imperio/ImperioLanches/?rota=home para acessar a pagina home, ou http://localhost/Imperio/ImperioLanches/ para acessar a pagina home por padrão

require_once __DIR__ . '/controllers/LancheController.php';

switch ($rota) {

    case 'home':
        require_once 'home.php'; // aqui é onde a pagina home.php é carregada quando a rota é 'home' ou seja http://localhost/Imperio/ImperioLanches/?rota=home ou http://localhost/Imperio/ImperioLanches/ para acessar a pagina home por padrão
        break;

    case 'lanches-listar':
        $controller = new LancheController();
        $controller->listar();
        break;

    case 'lanches-cadastrar';
        $controller = new LancheController();
        $controller->cadastrar();
        break;
    
    case 'lanches-salvar':
        $controller = new LancheController();
        $controller->salvarDados();
        break;


    case 'lanches-buscarporID':
    $controller = new LancheController();
    $controller->buscarporID();
    break;

    case 'lanches-editar':
    $controller = new LancheController();
    $controller->editarporID();
    break;

    case 'lanches-excluir':
    $controller = new LancheController();
    $controller->excluirporID();
    break;
    
    
    default:
        echo "Página não encontrada"; // aqui é onde é exibida a mensagem "Página não encontrada" quando a rota não é 'home' ou 'lanches'
        break;
}