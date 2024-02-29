<?php

	include_once("conexao.php");
?>

<?php 
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

	if(strlen($_POST['nome']) == 0){
		echo "Preencha seu e-mail";
	} else if(strlen($_POST['senha']) == 0){
		echo "Preencha sua senha";
	} else{
		$email = $_POST['nome'];
		$senha = $_POST['senha'];

		$sql_code = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";
		$stmt = $conn->prepare($sql_code);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();

		$quantidade = $stmt->rowCount();

		if($quantidade == 1){
			$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

			if(!isset($_SESSION)){
				session_start();
			}
			$_SESSION['id'] = $usuario['id'];
			$_SESSION['email'] = $usuario['email'];
			$_SESSION['nome'] = $usuario['nome'];
            $_SESSION['telefone'] = $usuario['telefone'];
            $_SESSION['senha'] = $usuario['senha'];
			$_SESSION['adm'] = $usuario['adm'];
			$_SESSION['foto'] = $usuario['foto'];
            $_SESSION['online'] = $usuario['online'];
            $_SESSION['token'] = $usuario['token'];
            $_SESSION['creation'] = $usuario['creation'];
            $_SESSION['endereco'] = $usuario['endereco'];
			
			header("Location: index.php");
		} 
		
		else{
			echo "Falha ao logar! E-mail ou senha incorretos";
		}
	}
}
?>

<?php
session_start();
if(isset($_SESSION['mensagem'])) {
    echo '<p class="mensagem">' . $_SESSION['mensagem'] . '</p>';
    unset($_SESSION['mensagem']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entre na sua conta | ResiRevive</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel = "stylesheet" href = "../style/style.css">
    <link rel="icon" href="../img/ResiReviveLogo.jpg" style="border-radius: 50px;">
    <?php include 'estrutura.php';?>
</head>

<body>
    <div class="login-container">
        <form action="" method="POST">
            <div class="form-floating mb-3">
                <input name = "nome" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" style="margin-top: 30px;">
                <label for="email" style="margin-top: 30px;">E-mail</label></input>
            </div>
            <div class="form-floating">
                <input name="senha" type="password" class="form-control" id="floatingPassword" placeholder="Password" style="margin-top: 30px;">
                <label for="password" style="margin-top: 30px;">Senha</label></input>
            </div>
            <button type="submit" id="entrar-login">Entrar</button>
        </form>
        <center><a>Não tem conta? <a href="cadastrar.php" style="text-decoration: none;">Cadastre-se</a></a></center>
    </div>

    <script src ="../js/main.js"></script>
</body>
</html>