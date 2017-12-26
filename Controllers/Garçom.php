<?php

require_once '../Model/Garcom_Model.php';
require_once '../Funcoes.php';

$objFun = new Funcoes();
$objGarcom = new Garcom();

if(isset($_POST['btcadastrar'])){
    if($objGarcom->CadastrarGarcom($_POST == true))
    {
        echo '<script type="text/javascript">alert("Cadastro Efetuado com Sucesso");</script>';
        header("location: ../View/Principal.html");
        
    }
    else
    {
        echo '<script type="text/javascript">alert("Erro ao Cadastrar Garçom");</script>';
    }
}

?>