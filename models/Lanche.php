<?php

require_once __DIR__ . '/../config/Database.php';

class Lanche {


  public function cadastrar($nome, $descricao, $preco){

  // conecta no banco
    $database = new Database();
    $conn = $database->getConnection();

    // query SQL
    $sql = "INSERT INTO lanches (nome, descricao, preco)
            VALUES (:nome, :descricao, :preco)";

    // prepara a query (segurança)
    $stmt = $conn->prepare($sql);

    // liga os valores
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':preco', $preco);

    // executa

    
   

exit;
  

}

public function listar() {

   $database = new Database();
   $conn = $database->getConnection();

   $sql = "SELECT * FROM lanches";

   $stmt = $conn->prepare($sql);
   $stmt->execute();
   return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


    public function buscarporID ($id) {
          
    $database = new Database();
    $conn = $database->getConnection();

        $sql = "SELECT * FROM lanches WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);



            }

    public function editar ($dados) {

        $database = new Database();

        $conn = $database->getConnection();

        $sql = "UPDATE lanches
                SET nome = ?, descricao = ?, preco = ?
                WHERE id = ?";

        $stmt = $conn->prepare($sql);

        return $stmt->execute([
            $dados['nome'],
            $dados['descricao'],
            $dados['preco'],
            $dados['id']
    ]);



            }
    public function excluirporID ($id) {

            $database = new Database();
            $conn = $database->getConnection();

            $sql = "DELETE FROM lanches WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$id]);
    }

}