<?php

class Database {
    private $host = 'localhost';
    private $port = '5432';
    private $db_name = 'lanches';
    private $username = 'postgres'; // padrão do PostgreSQL
    private $password = '1234'; // coloque sua senha do pgAdmin

    public function getConnection() {
        try {
            $conn = new PDO(
                "pgsql:host={$this->host};port={$this->port};dbname={$this->db_name}",
                $this->username,
                $this->password
            );

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;

        } catch (PDOException $exception) {

            $msg = $exception->getMessage();

            if (str_contains($msg, 'password authentication failed')) {
                die('❌ Erro: senha do PostgreSQL incorreta.');
            }

            if (str_contains($msg, 'database') && str_contains($msg, 'does not exist')) {
                die('❌ Erro: banco de dados "lanches" não existe.');
            }

            if (str_contains($msg, 'Connection refused')) {
                die('❌ Erro: PostgreSQL não está rodando.');
            }

            if (str_contains($msg, 'could not find driver')) {
                die('❌ Erro: driver PDO pgsql não está habilitado.');
            }

            die('❌ Erro de conexão: ' . $msg);
        }
    }
}

?>