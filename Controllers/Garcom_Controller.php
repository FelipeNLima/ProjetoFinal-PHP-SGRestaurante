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



