<?php
if(isset($_POST['cadastro']))
{
    include_once('conexao.php');

    
    $marca = $_POST['marca'];
    $tamanho = $_POST['tamanho'];
    $modelo = $_POST['modelo'];
    $preco = $_POST['preco'];
    $result = mysqli_query($conexao, "INSERT INTO tenis (marca,tamanho,modelo,preco) VALUES ('$marca','$tamanho', '$modelo','$preco')");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro</title>
</head>

<body>
    <header>
        <h1>NovaJersey Calçados</h1> 
    </header>
    <form  id="cad" method="post"  action="cadastro.php">
        <h1>Cadastro</h1>
    <label for="marca"> Marca:</label>
    <input type="text" name="marca" id="marca">

    <label  for="tamanho"> Tamanho:</label>
    <input type="text" name="tamanho" id="tamanho" maxlength="3" size="5">

    <label for="modelo">Modelo:</label>
    <input type="text" name="modelo" id="modelo">

    <label for="preco">Preço:</label>
    <input type="text" name="preco" id="preco"> 

<br>
<br>
    <button  type="submit" id="cadastro" name="cadastro">Cadastrar</button>
    <br>
    <br>
    <button type="reset" id="apagar" name="apagar">Apagar</button>
    </form>
    <footer></footer>
</body>
</html>