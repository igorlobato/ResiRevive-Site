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
    <div id="login-container">
        </form>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" placeholder="name@example.com" style="margin-top: 30px;">
                <label for="email">E-mail</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="nome" placeholder="name surname" style="margin-top: 30px;">
                <label for="email">Nome completo</label>
            </div>
            <div class="form-floating">
                <input type="telefone" class="form-control" id="telefone" placeholder="Telefone" style="margin-top: 30px;">
                <label for="password">Telefone</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="senha" placeholder="Password" style="margin-top: 30px;">
                <label for="password">Senha</label>
            </div>
            <div class="form-floating">
                <input type="endereco" class="form-control" id="endereco" placeholder="Endereco" style="margin-top: 30px;">
                <label for="password">Endereço</label>
            </div>
            <button type="submit" id="cadastrar">Cadastrar-se</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src ="../js/main.js"></script>
</body>
</html>