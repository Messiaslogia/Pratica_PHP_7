<?php

class Usuario{

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    public function getIdusuario(){

        return $this->idusuario;
    }

    public function setIdusuario($value){

        return $this->idusuario = $value;
    }

    public function getDeslogin(){

        return $this-> deslogin;
    }
    public function setDeslogin($value){

        return $this-> deslogin = $value;
    }
    public function getDessenha(){
        return $this-> dessenha;
    }
    
    public function setDessenha($value){
        return $this-> dessenha = $value;
    }

    public function getDtcadastro(){
        return $this->dtcadastro;
    }
    
    public function setDtcadastro($value){
        return $this->dtcadastro = $value;
    }

    public function loadById($id){
        $sql = new Sql();

        $result = $sql->select("SELECT * FROM tb_usuarios Where idusuario = :ID", array(
            ":ID"=>$id
        ));

        if (count($result) > 0){
            $row = $result[0];

            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtcadastro(new DateTime( $row['dtcadastro']));
        }
    }

        public function __toString()
        {
            return json_encode(array(
                "idusuario"=>$this->getDeslogin(),
                "deslogin"=>$this->getDeslogin(),
                "dessenha"=>$this->getDessenha(),
                "dtcadastro"=>$this->getDtcadastro()
            ));
        }
    }
        

    




?>