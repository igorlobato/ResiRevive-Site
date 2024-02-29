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
</head>
<body>
    <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/Index/banner1.png" class="d-block w-100" alt="Imagem 1">
                </div>
                <div class="carousel-item">
                    <img src="../img/Index/banner2.jpg" class="d-block w-100" alt="Imagem 2">
                </div>
                <!--
                <div class="carousel-item">
                    <img src="caminho_da_imagem3.jpg" class="d-block w-100" alt="Imagem 3">
                </div>
                <div class="carousel-item">
                    <img src="caminho_da_imagem4.jpg" class="d-block w-100" alt="Imagem 4">
                </div>
                <div class="carousel-item">
                    <img src="caminho_da_imagem5.jpg" class="d-block w-100" alt="Imagem 5">
                </div>
                -->
            </div>
        </div>

        <div class="container mt-4">
            <div class="row">
                <div class="col-md-4">
                    <a href="#">
                        <img src="../img/Index/plastico.jpg" alt="Plástico" class="img-fluid">
                        <p class="text-center">Plástico</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <img src="../img/Index/papeis.jpeg" alt="Papéis" class="img-fluid">
                        <p class="text-center">Papéis</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <img src="../img/Index/papelao.jpg" alt="Papelão" class="img-fluid">
                        <p class="text-center">Papelão</p>
                    </a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <a href="#">
                        <img src="../img/Index/metais.jpg" alt="Metais" class="img-fluid">
                        <p class="text-center">Metais</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <img src="../img/Index/vidros.jpg" alt="Vidros" class="img-fluid">
                        <p class="text-center">Vidros</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <img src="../img/Index/eletronicos.jpg" alt="Eletronicos" class="img-fluid">
                        <p class="text-center">Eletrônicos</p>
                    </a>
                </div>
            </div>
        </div>
</body>
</html>