<?php

class Sql extends PDO {

    private $conn;

    public function __construct()
    {
        $this->conn = new  PDO("mysql:host=localhost;dbname=messias_teste", "root", "");
    }

    private function setParams($statment, $parameters = array()){
        foreach($parameters as $key => $value){

            $statment->bindParam($key, $value);
        }

    }

    public function comands($rawQuery, $params = array()){

        $stmt = $this->conn->prepare($rawQuery);

        $this->setParams($stmt, $params);

         $stmt->execute();

         return $stmt;
    }

    public function select($rowQuery, $params = array()):array
    {

        $stmt = $this->comands($rowQuery, $params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    




}


?>