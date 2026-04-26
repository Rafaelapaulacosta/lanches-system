<?php


require_once __DIR__ . '/../models/Lanche.php';

//Controller ira receber o comando da view 
// receber a rota decidir oque fazer
// chama a model
// chama a view é a ponte

class LancheController {

// aqui vai agrupar todas as açoes do lanche

  public function cadastrar () {

       require __DIR__ . '/../views/lanches/form.php'; // quando a rota for acionada ela mostra a view de formulario


  }

   public function salvarDados(){


   if ($_SERVER['REQUEST_METHOD'] === 'POST'){ // esse metodo é pra que so acesse via post segurança


    $nome = $_POST['nome'] ?? ''; // aqui pega o que o usuario digitar no nome e guarda na variavel nome
    $descricao = $_POST['descricao'] ?? ''; // aqui tambem
    $preco = $_POST['preco'] ?? ''; // aqui tambem aa caso esteja vazio nao envia nada

    $preco = str_replace(',', '.', $preco); // aqui troca a virgula por ponto devido ao banco 

    $lancheModel = new Lanche ();  // aqui ela estancia a model e fala ei pegue esse dados aqui
    $lancheModel-> cadastrar($nome, $descricao, $preco); // aqui faz parte tambem

    header('Location: index.php?rota=lanches');
     exit;

    } 


       }

  
  }

