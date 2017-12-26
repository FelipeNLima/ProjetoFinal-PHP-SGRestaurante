<?php
include '../Conexao.php';
include '../Funcoes.php';

class Garcom {
    
    private $id_Garcom;
    private $nome;
    private $codigo;
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
    
    public function CadastrarGarcom($dados)
    {
        try{
            $this->nome = $dados['nome'];
            $this->codigo = (int) $dados['codigo'];
            $query = $this->conexao->Conectar()->prepare("INSERT INTO GARCOM (nome_garcom, codigo)  VALUES (:NOME, :CODIGO)");
            $query->bindParam(":NOME", $this->nome, PDO::PARAM_STR);
            $query->bindParam(":CODIGO", $this->codigo, PDO::PARAM_INT);
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
    
    public function AtualizarGarcom($dados)
    {
        try{
            $this->id_Garcom = $this->$dados['id_garcom'];
            $this->nome = $this->objfunc->TratarCaracter($dados['nome'],1);
            $this->codigo =(int) $this->$dados['codigo'];
            
            $query = $this->conexao->Conectar()->prepare("UPDATE GARCOM SET nome_garcom =:NOME, codigo =:CODIGO WHERE id_garcom = :IDGARCOM;");
            $query->bindParam(":IDGARCOM", $this->id_Garcom, PDO::PARAM_INT);
            $query->bindParam(":NOME", $this->nome, PDO::PARAM_STR);
            $query->bindParam(":CODIGO", $this->codigo, PDO::PARAM_INT);
            
            if($query->execute())
            {
                return true;
            }else{
                return false;
            }
        } catch (PDOException $ex) {
            return 'error' .$ex->getMessage();
        }
    }
    
    public function DeletarGarcom($dados)
    {
        try{
            $this->id_Garcom = $this->$dados['id_garcom'];
            $query = $this->conexao->Conectar()->prepare("DELETE FROM GARCOM WHERE id_garcom = :IDGARCOM;");
            $query->bindParam(":IDGARCOM", $this->id_Garcom, PDO::PARAM_INT);
            
            if($query->execute())
            {
                return true;
            }else{
                return false;
            }
            
        } catch (PDOException $ex) {
            return 'error' .$ex->getMessage();
        }
    }
    
    public function CarregarGarcom()
    {
        try{
            $query = $this->conexao->conectar()->prepare("SELECT id_garcom, codigo, nome_garcom FROM GARCOM");
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $ex) {
            return 'error' .$ex->getMessage();
        }
    }
    
    public function CarregarGarcomPorID($dados)
    {
        try{
            $this->id_Garcom = (int)$dados['id_garcom'];
            $query = $this->conexao->conectar()->prepare("SELECT id_garcom, codigo, nome_garcom FROM GARCOM WHERE id_garcom = :IDGARCOM;");
            $query->bindParam(":IDGARCOM", $this->id_Garcom, PDO::PARAM_INT);
            $query->execute();
            return $query->fetchAll();
            
        } catch (PDOException $ex) {
            return 'error' .$ex->getMessage();
            
        }
    }
    
}

?>