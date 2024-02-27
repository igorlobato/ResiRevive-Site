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
        </form>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" style="margin-top: 30px;">
                <label for="email">E-mail</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" style="margin-top: 30px;">
                <label for="password">Senha</label>
            </div>
            <button type="submit" id="entrar-login">Entrar</button>
        </form>
        <center><a>Não tem conta? <a href="cadastrar.php" style="text-decoration: none;">Cadastre-se</a></a></center>
    </div>

    <script src ="../js/main.js"></script>
</body>
</html>