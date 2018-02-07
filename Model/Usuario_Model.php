<?php

include '../Conexao.php';
include '../Funcoes.php';

class Usuario {
 
    private $id_usuario;
    private $nome;
    private $login;
    private $senha;
    private $Data;
    private $id_cargo;
    
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
    
    
    public function CarregarUsuario()
    {
        try{
            $query = $this->conexao->conectar()->prepare("SELECT id_garcom, codigo, nome_garcom FROM GARCOM");
            $query->execute();
                return $query->fetchAll();
        } catch (PDOException $ex) {
                return 'error' .$ex->getMessage();
        }
    }
}
