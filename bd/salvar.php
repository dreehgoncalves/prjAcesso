<?php

include('conexao.php');

extract($_POST);

try {
    if ($senha != $verificar) {
        throw new Exception("Senhas não conferem");        
    }

    $senha = md5('4ac@'.$senha);

    $sql = "INSERT INTO usuario (nome, usuario, senha) VALUES ('$nome', '$usuario', '$senha')";
    $res = mysqli_query($con, $sql);
    $retorno = array();

    if ($res == false) {
        throw new Exception("Erro ao inserir cadastro");
    } else {
        $retorno['resp'] = true;
        $retorno['msg'] = "Cadastro realizado com sucesso";
    }
    die(json_encode($retorno));

} catch (Exception $e) {

$retorno = array();
$retorno['resp'] = false;
$retorno['msg'] = $e->getMessage();
die(json_encode($retorno));
}
    
?>