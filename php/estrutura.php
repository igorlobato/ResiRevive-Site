<?php

	include_once("conexao.php");
	if(!isset($_SESSION)){
		session_start();
	}
?>

<nav class="navbar">
    <div class="logo">
        <a href="index.php"><img src="../img/ResiReviveLogo.jpg" alt="Logo"></a>
    </div>
    <div class="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Buscar" style="border-radius: 10px; border: none; background-color: #e9e9e9;">
            <div class="input-group-append">
                <a href="index.php" class="logo"><img src="../img/ícones/lupa.png"></a>
            </div>
        </div>
    </div>
    <div class="menu">
        <a href="#" style="margin-left: 400px;">Santarém | PA</a>
        <a href="#" style="margin-left: 50px;">Meus Anúncios</a>
        <a href="#" style="margin-left: 50px;">Conversas</a>
        <a href="#" style="margin-right: 95px; margin-left: 50px;">Notificações</a>
    </div>
    <div class="login">
            <?php
                if ( (isset($_SESSION['nome'])) && ($_SESSION['nome'] != '') ) {
                    echo '<li class="nome-user">' . $_SESSION['nome'] . '</li>'; 
                    echo '<li> <a href="logout.php" style="padding: 10px 10px">Sair</a>
                    <a href="conta.php" style="padding: 10px 10px">Conta</a>
                    <a href="anunciar.php" style="padding: 10px 10px">Anunciar</a> </li>';
                } else { 
                    echo '
                    <a href="login.php" id="entrar"><button>Entrar</button></a>
                    ';
                   }
                    ?>
    </div>
</nav>
