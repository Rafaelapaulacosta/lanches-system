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

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){

        $id = $_POST['id'] ?? '';

        $nome = $_POST['nome'] ?? '';

        $descricao = $_POST['descricao'] ?? '';

        $preco = $_POST['preco'] ?? '';

        $preco = str_replace(',', '.', $preco);

        $lancheModel = new Lanche();

        // EDITAR
        if (!empty($id)) {

            $dados = [
                'id' => $id,
                'nome' => $nome,
                'descricao' => $descricao,
                'preco' => $preco
            ];

            $lancheModel->editar($dados);

        } else {

            // CADASTRAR
            $lancheModel->cadastrar(
                $nome,
                $descricao,
                $preco
            );
        }

        header('Location: index.php?rota=lanches-listar');

        exit;
    }
}

     public function listar() {

    $lancheModel = new Lanche(); // aqui instancia a model
    $lanches = $lancheModel->listar(); // aqui chama o metodo listar da model e guarda o resultado na variavel lanches
     
    require_once __DIR__ . '/../views/lanches/index.php'; // aqui chama a view de listar e passa os dados para ela
     }
  

       public function buscarporID () {
        
          $id = $_GET['id'];

          $lancheModel = new Lanche();

          $lanche = $lancheModel->buscarporID($id);

            require_once __DIR__ . '/../views/lanches/form.php';

            }



       public function editarporID () {
          $dados = $_POST;

          $model = new Lanche();

          $model ->editar($dados);

           header('Location: ?rota=lanches-listar');
                 exit;   
            }

       public function excluirporID () {

            $id = $_GET['id'];

            $lancheModel = new Lanche();
            $lancheModel->excluirporID($id);
            header('Location: index.php?rota=lanches-listar');
            exit;
            }     
  }

