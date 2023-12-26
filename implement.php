<?php

require_once('database.php');
require_once('crud.php');

$tabela = "cadastro";

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$phone = filter_input(INPUT_POST, 'phone');
$endereco = filter_input(INPUT_POST, 'endereco');
$senha = filter_input(INPUT_POST, 'senha');

if(!empty($name) && !empty($phone) && !empty($endereco) && !empty($senha)){
    $conexao = Database::getConexao();
    $inserir = new Crud($conexao);

    $inserir->insert($tabela, $name, $phone, $endereco, $senha);

}else{
    echo "Favor, preencher todos os campos!";
}


?>

<br/><br/>
<a href="index.php">RETORNAR AO MENU PRINCIPAL</a>