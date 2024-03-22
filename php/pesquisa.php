<?php

	include_once("conexao.php");
	if(!isset($_SESSION)){
		session_start();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResiRevive - Seus Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel = "stylesheet" href = "../style/style.css">
    <link rel="icon" href="../img/ResiReviveLogo.jpg" style="border-radius: 50px;">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src ="../js/main.js"></script>
    <?php include 'estrutura.php';?>
    <?php include 'estruturapesquisa.php';?>
</head>

<body>
    <div class="conteudo">
        <div class="lista-anuncio produtoslista">
            <div class="main-content">
                <ul id="produtostodos">
                <?php
if(isset($_POST['buscar']) && $_POST['buscar'] == "find"){
    $busca = $_POST['busca'];
    if(empty($busca)){
        echo "Digite alguma coisa";
    } else{
        $seleciona = $conn->query("SELECT * FROM produtos WHERE titulo LIKE '%$busca%' ORDER BY id DESC");
        $conta = $seleciona->rowCount();

        if($conta <= 0){
            echo "<center>Nenhum produto encontrado!</center>";
            echo "$busca";
        }else{
            while ($produto = $seleciona->fetch(PDO::FETCH_ASSOC)) {
                // Aqui você exibe os detalhes do produto
                $precoFormatado = number_format($produto['preco'], 2, ',', '.');
                echo '<div class="produto">';
                echo '<div class="fotoproduto"><img src="' . $produto['foto1'] . '" alt="Imagem" class="foto"></div><br>';
                echo '<div class="conteudodireita">';
                echo '<div class="titulo">Titulo: ' . $produto['titulo'] . '</div>';
                echo '<div class="preco">Preço: R$ ' . $precoFormatado . '</div>';
                echo 'Tipo: ' . $produto['tipo'];
                echo '<br>Data: ' . $produto['data'] . ' às ' . $produto['hora'];
                echo '<br>Condição: ' . $produto['condicao'];
                echo '<br></div></div><br>';
            }
        }
    }
}
?>
                </ul>
            </div>
        </div>
    </div>

    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const termoPesquisado = urlParams.get('q');

        document.getElementById('termoPesquisado').innerText = termoPesquisado;
    </script>
</body>
</html>