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
    <?php include 'estruturaconta.php';?>
</head>

<body>
    <div class="conteudo">
        <div class="lista-anuncio produtoslista">
            <div class="main-content">
                <ul id="produtos"></ul>
            </div>
        </div>
    </div>
</body>
<script>
    var userId = <?php echo isset($_SESSION['id']) ? $_SESSION['id'] : 'null'; ?>;
</script>
</html>