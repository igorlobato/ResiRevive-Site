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
    <title>ResiRevive - O seu marketplace de resíduos sólidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel = "stylesheet" href = "../style/style.css">
    <link rel="icon" href="../img/ResiReviveLogo.jpg" style="border-radius: 50px;">
    <?php include 'estrutura.php';?>
    <?php include 'estruturaconta.php';?>
</head>

<body>
<div class="conteudo">
    <div class="lista-anuncio anuncioconta">
        <form>
            <div class="texto-anuncio">
                <h2>Meus Dados.</h2><br>

                <div class="mb-3">
                    <label for="titulo" class="form-label">E-mail</label>
                    <input type="text" class="form-control" id="titulo">
                </div>

                <div class="mb-3">
                    <label for="titulo" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="titulo">
                </div>

                <div class="mb-3">
                    <label for="preco" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="preco">
                </div>

                <div class="mb-3">
                    <label for="preco" class="form-label">Senha</label>
                    <input type="text" class="form-control" id="preco">
                </div>

                <div class="mb-3">
                    <label for="preco" class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="preco">
                </div>

                <div class="mb-3">
                    <label for="titulo" class="form-label">Foto</label>
                    <input type="text" class="form-control" id="titulo">
                </div>

                <div class="mb-3">
                    <label for="imagem1" class="form-label">Alterar Foto de Perfil</label>
                    <input type="file" class="form-control" id="imagem1" name="imagem1" accept="image/*">
                </div>

            <button type="submit" id="envioanuncio">Alterar Dados</button>
        </form>
    </div>
</div>
</body>
</html>