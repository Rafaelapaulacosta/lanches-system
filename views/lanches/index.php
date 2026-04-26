<?php
require_once 'routes.php'; // aqui é a pagina lanches quando a rota é 'lanches' ou seja c para acessar a pagina de lanches, ou seja quando a rota é 'lanches' a pagina views/lanches/index.php é carregada e exibida para o usuario, e quando a rota é 'home' ou seja http://localhost/Imperio/ImperioLanches/?rota=home ou http://localhost/Imperio/ImperioLanches/ para acessar a pagina home por padrão a pagina home.php é carregada e exibida para o usuario, e quando a rota não é 'home' ou 'lanches' a mensagem "Página não encontrada" é exibida para o usuario    
?>
<?php require __DIR__ . '/../layout/header.php'; ?>
<?php
