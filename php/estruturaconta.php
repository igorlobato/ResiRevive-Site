<?php

	include_once("conexao.php");
	if(!isset($_SESSION)){
		session_start();
	}
?>

<nav class="barralateralconta">
    <ul>
        <li><a class="palavrasbarralateral" href="conta.php">Meus Dados</a></li>
        <li><a class="palavrasbarralateral" href="meusprodutos.php">Meus Produtos</a></li>
        <li><a class="palavrasbarralateral" href="compras.php">Compras</a></li>
        <li><a class="palavrasbarralateral" href="venda.php">Vendas</a></li>
    </ul>
</nav>