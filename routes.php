<?php


$rota = $_GET['rota'] ?? 'home'; // essa pagina define as rotas do sistema a url ficaria assim: http://localhost/Imperio/ImperioLanches/?rota=lanches para acessar a pagina de lanches, ou http://localhost/Imperio/ImperioLanches/?rota=home para acessar a pagina home, ou http://localhost/Imperio/ImperioLanches/ para acessar a pagina home por padrão

require_once __DIR__ . '/controllers/LancheController.php';

switch ($rota) {

    case 'home':
        require_once 'home.php'; // aqui é onde a pagina home.php é carregada quando a rota é 'home' ou seja http://localhost/Imperio/ImperioLanches/?rota=home ou http://localhost/Imperio/ImperioLanches/ para acessar a pagina home por padrão
        break;

    case 'lanches':
        require_once 'views/lanches/index.php'; // aqui é onde a pagina views/lanches/index.php é carregada quando a rota é 'lanches' ou seja http://localhost/Imperio/ImperioLanches/?rota=lanches para acessar a pagina de lanches
        break;

    case 'lanches-cadastrar';
        $controller = new LancheController();
        $controller->cadastrar();
        break;
    
    case 'lanches-salvar':
        $controller = new LancheController();
        $controller->salvarDados();
        break;

    default:
        echo "Página não encontrada"; // aqui é onde é exibida a mensagem "Página não encontrada" quando a rota não é 'home' ou 'lanches'
        break;
}