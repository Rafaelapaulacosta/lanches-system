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
    if ($stmt->execute()) {
        echo "SALVOU NO BANCO!";
    } else {
        echo "ERRO AO SALVAR";
    }

exit;
  

}

}