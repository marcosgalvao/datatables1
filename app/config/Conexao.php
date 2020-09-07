<?php

/**
 * Description of Conexao
 *
 * @author MarcosAntonio
 */
class Conexao
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "finedb";
    private $conexao = null;

    public function __construct()
    {
        $this->connect();
    }

    public function getConection()
    {
        return $this->conexao;
    }

    private function connect()
    {
        //MYSQLI
        $this->conexao = mysqli_connect(
            $this->host, $this->username, $this->password, $this->database);

        //PDO
        /* try {
    $this->conexao = new PDO('mysql:host=localhost;dbname=finedb', $this->username, $this->password);
    $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
    }*/
    }

    public function connClose()
    {
        return $this->conexao->close();
    }
}
