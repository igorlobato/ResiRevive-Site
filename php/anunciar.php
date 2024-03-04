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
    <div class="lista-anuncio">
        <form>
            <div class="texto-anuncio">
                <h2>Selecione as características do que você quer anunciar.</h2><br>

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownTipo" data-bs-toggle="dropdown" aria-expanded="false">
                        Tipo
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownTipo">
                        <li><a class="dropdown-item" href="#">Plástico</a></li>
                        <li><a class="dropdown-item" href="#">Papel</a></li>
                        <li><a class="dropdown-item" href="#">Papelão</a></li>
                        <li><a class="dropdown-item" href="#">Metais</a></li>
                        <li><a class="dropdown-item" href="#">Vidros</a></li>
                        <li><a class="dropdown-item" href="#">Eletrônicos</a></li>
                    </ul>
                </div>

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownCondicao" data-bs-toggle="dropdown" aria-expanded="false">
                        Condição
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownCondicao">
                        <li><a class="dropdown-item" href="#">Novo</a></li>
                        <li><a class="dropdown-item" href="#">Usado</a></li>
                        <li><a class="dropdown-item" href="#">Recondicionado</a></li>
                        <li><a class="dropdown-item" href="#">Ruim</a></li>
                    </ul>
                </div>

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownCor" data-bs-toggle="dropdown" aria-expanded="false">
                        Cor
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownCor">
                        <li><a class="dropdown-item" href="#">Vermelho</a></li>
                        <li><a class="dropdown-item" href="#">Branco</a></li>
                        <li><a class="dropdown-item" href="#">Preto</a></li>
                        <li><a class="dropdown-item" href="#">Verde</a></li>
                        <li><a class="dropdown-item" href="#">Amarelo</a></li>
                        <li><a class="dropdown-item" href="#">Cinza</a></li>
                        <li><a class="dropdown-item" href="#">Rosa</a></li>
                        <li><a class="dropdown-item" href="#">Transparente</a></li>
                        <li><a class="dropdown-item" href="#">Outro</a></li>
                    </ul>
                </div>

                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-control" id="titulo">
                </div>

                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea class="form-control" id="descricao" wrap="soft" oninput="autoExpand(this)"></textarea>
                </div>

                <div class="mb-3">
                    <label for="preco" class="form-label">Preço</label>
                    <input type="text" class="form-control" id="preco">
                </div>
            </div>

            
            <div class="mb-3">
                <label for="images" class="form-label">Imagens</label>
                <div id="myDropzone" class="dropzone"></div>
            </div>
            <input type="hidden" id="foto1" name="foto1" value="">
            <input type="hidden" id="foto2" name="foto2" value="">
            <input type="hidden" id="foto3" name="foto3" value="">
            <input type="hidden" id="foto4" name="foto4" value="">
            <input type="hidden" id="foto5" name="foto5" value="">
            
            <button type="button" id="envioanuncio">Enviar Anuncio</button>
        </form>
    </div>

    <script>
        Dropzone.autoDiscover = false;
        
        var myDropzone = new Dropzone("#myDropzone", {
            url: "../img/produtos",  // Specify the URL to handle file uploads
            paramName: "file",       // The name that will be used to transfer the file
            maxFiles: 5,             // Maximum number of files
            acceptedFiles: "image/*", // Allow only image files
            addRemoveLinks: true      // Show remove links for uploaded files
        });

        myDropzone.on("success", function (file, response) {
            // Handle the response from the server
            console.log(response); // You may need to adjust this based on your server's response
            
            // Assuming your server responds with the filename or some identifier for the uploaded file
            // Update the corresponding hidden input field with the filename or identifier
            switch (file.index) {
                case 0:
                    document.getElementById("foto1").value = response.filename;
                    break;
                case 1:
                    document.getElementById("foto2").value = response.filename;
                    break;
                case 2:
                    document.getElementById("foto3").value = response.filename;
                    break;
                case 3:
                    document.getElementById("foto4").value = response.filename;
                    break;
                case 4:
                    document.getElementById("foto5").value = response.filename;
                    break;
                default:
                    // Handle unexpected case
                    break;
            }
        });
                <button type="submit" id="envioanuncio">Enviar Anuncio</button>
        </form>
    </div>

    <script>
    function autoExpand(element) {
        element.style.height = 'auto';
        element.style.height = (element.scrollHeight) + 'px';
        }
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropzone@5.9.3/dist/dropzone.css">
    <script src="https://cdn.jsdelivr.net/npm/dropzone@5.9.3/dist/dropzone.js"></script>

</body>
</html>