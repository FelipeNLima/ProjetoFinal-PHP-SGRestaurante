<?php
include '../Conexao.php';

function Logar($usuario, $senha)
{
    $con = new Conexao();
    $query = $con->Conectar()->prepare("SELECT * FROM LOGIN WHERE Usuario= '$usuario' AND Senha= '$senha'");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    if (empty($result)) {
        return false;
    }
    return true;
}
