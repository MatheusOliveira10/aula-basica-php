<?php

class Query
{
    public function insertOrUpdate($qry)
    {
        $dsn = "mysql:host=localhost;dbname=carol";
        $user = "root";
        $pass = "";
        
        try {
            $pdo = new PDO($dsn, $user, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stm = $pdo->prepare($qry);

            $stm->execute();

            echo 200;
        } catch (PDOException $e) {
            echo "Erro:" . $e->getMessage();
        }
    }

    public function select($qry)
    {
        $dsn = "mysql:host=localhost;dbname=carol";
        $user = "root";
        $pass = "";
        
        try {
            $pdo = new PDO($dsn, $user, $pass);

            $result = $pdo->query($qry);
            $rows = $result->fetchAll(PDO::FETCH_CLASS);

            return $rows;
        } catch (PDOException $e) {
            echo "Erro:" . $e->getMessage();
        }
    }
}