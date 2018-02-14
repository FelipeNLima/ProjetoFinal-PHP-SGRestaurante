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
    
    public function CadastrarUsuario($dados)
    {
        try{
            $this->nome = $dados['nome'];
            $this->login = $dados['login'];
            $this->senha = md5($dados['senha']);
//            $this->Data = $dados['data'];
            $this->id_cargo = $dados['id_cargo'];
            
            $query = $this->conexao->Conectar()->prepare("INSERT INTO USUARIO (nome, login, senha, id_cargo)  VALUES (:NOME, :LOGIN, :SENHA, :IDCARGO)");
            $query->bindParam(":NOME", $this->nome, PDO::PARAM_STR);
            $query->bindParam(":LOGIN", $this->login, PDO::PARAM_STR);
            $query->bindParam(":SENHA", $this->senha, PDO::PARAM_STR);
//            $query->bindParam(":DATA", $this->Data, PDO::PARAM_LOB);
            $query->bindParam(":IDCARGO", $this->id_cargo, PDO::PARAM_INT);
            if($query->execute())
            {
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error' .$ex->getMessage();
        }
    }
    
    public function AtualizarUsuario($dados)
    {
        try{
            $this->id_Garcom = (int) $dados['id'];
            $this->nome = $this->objfunc->TratarCaracter($dados['nome'],1);
            $this->codigo = (int) $dados['codigo'];
            
            $query = $this->conexao->Conectar()->prepare("UPDATE GARCOM SET nome_garcom =:NOME, codigo =:CODIGO WHERE id_garcom = :IDGARCOM");
            $query->bindParam(":IDGARCOM", $this->id_Garcom, PDO::PARAM_INT);
            $query->bindParam(":NOME", $this->nome, PDO::PARAM_STR);
            $query->bindParam(":CODIGO",  $this->codigo, PDO::PARAM_INT);
            
            if($query->execute())
            {
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error' .$ex->getMessage();
        }
    }
    
    public function DeletarUsuario($dados)
    {
        try{
            $this->id_Garcom = (int) $dados['id'];
            $query = $this->conexao->Conectar()->prepare("DELETE FROM GARCOM WHERE id_garcom = :IDGARCOM");
            $query->bindParam(":IDGARCOM", $this->id_Garcom, PDO::PARAM_INT);
            
            if($query->execute())
            {
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error' .$ex->getMessage();
        }
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
