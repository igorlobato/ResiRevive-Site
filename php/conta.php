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
    <title>ResiRevive - Sua conta</title>
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
                    <label for="email" class="form-label">E-mail</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>">
                </div>

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo isset($_SESSION['nome']) ? $_SESSION['nome'] : ''; ?>">
                </div>

                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo isset($_SESSION['telefone']) ? $_SESSION['telefone'] : ''; ?>">
                </div>

                <div cclass="form-floating"">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" value="<?php echo isset($_SESSION['senha']) ? $_SESSION['senha'] : ''; ?>">
                </div>

                <div class="mb-3">
                    <label for="endereco" class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo isset($_SESSION['endereco']) ? $_SESSION['endereco'] : ''; ?>">
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                </div>
                
                <div class="fotoconta">
                    <?php if(isset($_SESSION['foto']) && !empty($_SESSION['foto'])): ?>
                        <img src="<?php echo $_SESSION['foto']; ?>" class="form-control" id="foto" name="foto" alt="Foto de Perfil">
                    <?php else: ?>
                        <img src="../img/fotos/fotopadrao.webp" class="fotoconta" id="foto" name="foto" alt="Foto de Perfil Padrão">
                    <?php endif; ?>
                </div>

                <div class="mb-3">
                    <label for="imagem1" class="form-label">Alterar Foto de Perfil</label>
                    <input type="file" class="form-control" id="imagem1" name="imagem1" accept="image/*">
                </div>

                <button type="submit" id="envioanuncio">Alterar Dados</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>