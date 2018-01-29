<?php
include '../Conexao.php';

class Mesa {
    
    private $id_mesa;
    private $numero;
    private $StatusMesa;
    
    public function __construct() {
        $this->conexao = new Conexao(); 
    }
    
    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }
    
    public function __get($atributo) {
        return $this->$atributo;
    }
    
    public function CarregarMesa()
    {
        try{
            $query = $this->conexao->conectar()->prepare("SELECT id_mesa, Numero_mesas, Status FROM MESA");
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $ex) {
            return 'error' .$ex->getMessage();
        }
    }
}

?>