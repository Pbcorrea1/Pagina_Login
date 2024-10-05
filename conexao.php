<?php
class database {
    private $drive;
    private $host;
    private $contas;
    private $username;

    private $con;

    function _construct(){
        $this -> drive = "mysql";
        $this -> host = "localhost";
        $this -> contas = "contas";
        $this -> username = "root";
    }

    function getConexao(){
        try{
            $this ->con = new PDO(
                "$this->drive: host=$this->host; contas=$this->contas,$this->username "
            );

            $this->con-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

            return $this->con;
        }

        catch(Ecxpetion $e){
            echo $e->getMessage();
        }
    }
}