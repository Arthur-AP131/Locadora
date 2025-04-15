<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$db = 'locadora';

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);
$query = 'SELECT *FROM veiculos';
$consulta_estoque = mysqli_query($conexao, $query);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "style.css">
    <title>Cadastro de Veículos</title>
</head>
<body>
    <nav>
        <div class = "header">
            <a href="index.php">
                <img src="img/logo.png" alt="" class = "logo">
                <p class = "logo-nome">risaCar</p>
            </a>
        </div>
    </nav>
<h1 class= formdesc>Cadastro de veículos</h1>
    <div class = 'formulario'>
   
        <form method = 'post' action = 'processo.php'>
            <h2>Nome</h2>
            <input type = 'text' name = 'veiculo' placeholder = 'Digite o nome do veículo' class = 'campo_veiculo'>
            <h2>Modelo</h2>
            <input type = 'text' name = 'modelo' placeholder = 'Digite o modelo do veículo'class = 'campo_modelo'>
            <h2>Placa</h2>
            <input type = 'text' name = 'placa' placeholder = 'Digite a placa'class = 'campo_placa'>
            <h2>Preço</h2>
            <input type = 'number' name = 'prc_diario' placeholder = 'Digite o preço diário'class = 'campo_preco'>
            <input type = 'submit' value = 'Cadastrar veículo' class = 'botao'>
        </form>
    </div>
</body>
</html>