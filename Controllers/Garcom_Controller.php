<?php

include '../Model/Garcom_Model.php';


$objGarcom = new Garcom();

if(isset($_POST['btcadastrar'])){
    if($objGarcom->CadastrarGarcom($_POST) === 'ok')
    {
        header("location: ../View/Garcom.php");
    }
    else
    {
        
        echo '<script type="text/javascript">alert("Erro ao Cadastrar Garçom");</script>';

    }
}

if(isset($_POST['bteditar'])){
    if($objGarcom->AtualizarGarcom($_POST) === 'ok')
    {
        header("location: ../View/Garcom.php");
    }
    else
    {   
      echo '<script type="text/javascript">alert("Erro ao Atualizar Garçom");</script>';
    }
}

if(isset($_POST['btdeletar'])){
    if($objGarcom->DeletarGarcom($_POST) === 'ok')
    {
        header("location: ../View/Garcom.php");
    }
    else
    {   
      echo '<script type="text/javascript">alert("Erro ao Deletar Garçom");</script>';
    }
}


if(isset($_POST['pesquisa'])){
   $buscar = $_POST['pesquisa'];
   $sql = $this->conexao->Conectar()->prepare("select * from GARCOM where nome_garcom like '%".$buscar."%'");
   $row = mysql_num_rows($sql);
   if($row > 0)
   {
       while($linha= mysqli_fetch_array($sql))
       {
           $nome = $linha['nome_garcom'];
           $codigo = $linha['codigo'];
           
           echo "<strong>Nome: </strong>".$nome;
           echo "</br></br>";
           echo "<strong>Codigo: </strong>".$codigo;
       }
   }
}
