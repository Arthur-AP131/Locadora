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
    <h1>Cadastro de veículos</h1>
    <div class = 'formulario'>
        <form method = 'post' action = 'processo.php'>
            <input type = 'text' name = 'veiculo' placeholder = 'Digite o nome do veículo' class = 'campo_veiculo'>
            <input type = 'text' name = 'modelo' placeholder = 'Digite o modelo do veículo'class = 'campo_modelo'>
            <input type = 'text' name = 'placa' placeholder = 'Digite a placa'class = 'campo_placa'>
            <input type = 'number' name = 'prc_diario' placeholder = 'Digite o preço diário'class = 'campo_preco'>
            <input type = 'submit' value = 'Cadastrar veículo' class = 'botao'>
        </form>
    </div>
    <br><br>
    <p>Veículos cadastrados</p>
    <div class = 'tabela'>
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Modelo</th>
                <th>Placa</th>
                <th>Preço diário</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($linha = mysqli_fetch_array($consulta_estoque)){
                    echo '<tr>';
                        echo '<td>'.$linha['id_veiculo'].'</td>';
                        echo '<td>'.$linha['nome_veiculo'].'</td>';
                        echo '<td>'.$linha['modelo_veiculo'].'</td>';
                        echo '<td>'.$linha['placa_veiculo'].'</td>';
                        echo '<td>'.$linha['valor_diario'].'</td>';
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>