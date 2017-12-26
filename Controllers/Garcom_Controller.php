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

if(isset($_GET['acao']))
{
    switch ($_GET['acao']) {
        case 'edit': $garcom = $objGarcom->CarregarGarcomPorID($_GET['garcom']); break;
        case 'delet': $garcom = $objGarcom->DeletarGarcom($_GET['garcom']); break;
        default:
            break;
    }
}

