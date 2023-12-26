<?php

class Crud {
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function insert($tabela, $name, $phone, $endereco, $senha)
    {
        try{
            $sql = "INSERT INTO $tabela (name, phone, endereco, senha) VALUES (?, ?, ?, ?)";
            $stmt = $this->pdo->prepare($sql);
            $senhaHash = hash('sha256', $senha);

            $stmt->bindParam(1, $name);
            $stmt->bindParam(2, $phone);
            $stmt->bindParam(3, $endereco);
            $stmt->bindParam(4, $senhaHash);

            $stmt->execute();

            echo "Inserção bem sucedida!: ";
        }catch(PDOException $e){
            echo "Erro na inserção! ".$e->getMessage();
        }
    }

}

?>