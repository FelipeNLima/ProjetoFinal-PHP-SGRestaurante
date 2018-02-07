<?php
include '../Conexao.php';
include '../Funcoes.php';

class Cargo {
    private $id_cargo;
    private $cargo;
    private $conexao;
    private $objfunc;
    
    public function __construct() {
        $this->conexao = new Conexao(); 
        $this->objfunc = new Funcoes();
    }
    
    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }
    
    public function __get($atributo) {
        return $this->$atributo;
    }
    
    public function CarregarCargo()
    {
        try{
            $query = $this->conexao->conectar()->prepare("SELECT id_cargo, cargo FROM CARGO");
            $query->execute();
                return $query->fetchAll();
        } catch (PDOException $ex) {
                return 'error' .$ex->getMessage();
        }
    }

}