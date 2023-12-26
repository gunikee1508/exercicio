<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>
</head>
<body>
    <h1>Cadastro de Clientes</h1><br/>
    <form action="implement.php" method='POST'>
        <label for="">Nome: </label>
        <input type="text" name="name"><br/><br/>
        <label for="">Telefone: </label>
        <input type="text" name="phone" maxlength="15" placeholder="(XX) XXXXX-XXXX"><br/><br/>
        <label for="">Endereço: </label>
        <input type="text" name="endereco"><br/><br/>
        <label for="">Senha: </label>
        <input type="password" name="senha"><br/><br/>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>