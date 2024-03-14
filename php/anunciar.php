<?php

	include_once("conexao.php");
	if(!isset($_SESSION)){
		session_start();
	}

    $userId = isset($_SESSION['id']) ? $_SESSION['id'] : 'null';
    $userLocal = isset($_SESSION['endereco']) ? $_SESSION['endereco'] : 'null';
?>
<script>
    var userId = <?php echo $userId; ?>;
    var userLocal = '<?php echo $userLocal; ?>'
</script>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src ="../js/main.js"></script>
</head>
<body>
    <div class="lista-anuncio">
        <form id="formProduto" enctype="multipart/form-data">
            <div class="texto-anuncio">
                <h2>Selecione as características do que você quer anunciar.</h2><br>

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="tipo" data-bs-toggle="dropdown" aria-expanded="false">
                        Tipo
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownTipo">
                        <li><a class="dropdown-item" href="#" data-value="Plástico">Plástico</a></li>
                        <li><a class="dropdown-item" href="#" data-value="Papel">Papel</a></li>
                        <li><a class="dropdown-item" href="#" data-value="Papelão">Papelão</a></li>
                        <li><a class="dropdown-item" href="#" data-value="Metais">Metais</a></li>
                        <li><a class="dropdown-item" href="#" data-value="Vidros">Vidros</a></li>
                        <li><a class="dropdown-item" href="#" data-value="Eletrônicos">Eletrônicos</a></li>
                    </ul>
                </div>
                <br>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="condicao" data-bs-toggle="dropdown" aria-expanded="false">
                        Condição
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownCondicao">
                        <li><a class="dropdown-item" href="#" data-value="Novo">Novo</a></li>
                        <li><a class="dropdown-item" href="#" data-value="Usado">Usado</a></li>
                        <li><a class="dropdown-item" href="#" data-value="Recondicionado">Recondicionado</a></li>
                        <li><a class="dropdown-item" href="#" data-value="Ruim">Ruim</a></li>
                    </ul>
                </div>
                <br>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="cor" data-bs-toggle="dropdown" aria-expanded="false">
                        Cor
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownCor">
                        <li><a class="dropdown-item" href="#" data-value="Vermelho">Vermelho</a></li>
                        <li><a class="dropdown-item" href="#" data-value="Branco">Branco</a></li>
                        <li><a class="dropdown-item" href="#" data-value="Preto">Preto</a></li>
                        <li><a class="dropdown-item" href="#" data-value="Verde">Verde</a></li>
                        <li><a class="dropdown-item" href="#" data-value="Amarelo">Amarelo</a></li>
                        <li><a class="dropdown-item" href="#" data-value="Cinza">Cinza</a></li>
                        <li><a class="dropdown-item" href="#" data-value="Rosa">Rosa</a></li>
                        <li><a class="dropdown-item" href="#" data-value="Transparente">Transparente</a></li>
                        <li><a class="dropdown-item" href="#" data-value="Outro">Outro</a></li>
                    </ul>
                </div>
                <br>
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
                    <label for="imagem1" class="form-label">Imagem 1</label>
                    <input type="file" class="form-control" id="imagem1" name="imagem1" accept="image/*">
                </div>

                <div class="mb-3">
                    <label for="imagem2" class="form-label">Imagem 2</label>
                    <input type="file" class="form-control" id="imagem2" name="imagem2" accept="image/*">
                </div>

                <div class="mb-3">
                    <label for="imagem3" class="form-label">Imagem 3</label>
                    <input type="file" class="form-control" id="imagem3" name="imagem3" accept="image/*">
                </div>

                <div class="mb-3">
                    <label for="imagem4" class="form-label">Imagem 4</label>
                    <input type="file" class="form-control" id="imagem4" name="imagem4" accept="image/*">
                </div>

                <div class="mb-3">
                    <label for="imagem5" class="form-label">Imagem 5</label>
                    <input type="file" class="form-control" id="imagem5" name="imagem5" accept="image/*">
                </div>
            <button type="submit" id="envioanuncio">Enviar Anuncio</button>
        </form>
    </div>

    <script>
    function autoExpand(element) {
        element.style.height = 'auto';
        element.style.height = (element.scrollHeight) + 'px';
        }

         // Seleciona todos os itens do menu suspenso
            var dropdownItems = document.querySelectorAll('.dropdown-menu a.dropdown-item');

        // Adiciona um ouvinte de eventos de clique a cada item
        dropdownItems.forEach(function(item) {
            item.addEventListener('click', function() {
                // Atualiza o texto do botão com o valor do item clicado
                var dropdownToggle = this.closest('.dropdown').querySelector('.dropdown-toggle');
                dropdownToggle.textContent = this.textContent;
            });
        });
    </script>
</body>
</html>