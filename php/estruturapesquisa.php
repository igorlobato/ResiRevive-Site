<?php

	include_once("conexao.php");
	if(!isset($_SESSION)){
		session_start();
	}
?>

<nav class="barralateralconta">
    <ul>
        <li id="termoPesquisado"></li> <!-- Aqui será inserido o termo pesquisado -->
        <li>Brasil &gt; PA &gt; Santarém</li> <!-- Localização -->
        <li>
            Mudar Categoria <!-- Dropdown menu de mudança de categoria -->
            <ul>
                <!-- Opções do dropdown -->
            </ul>
        </li>
        <li><hr style="width: 90%;"></li> <!-- Barra preta -->
        <li>
            Condição <!-- Texto Condição -->
            <ul>
                <!-- Opções de condição -->
                <li><input type="checkbox" id="condicao1"><label for="condicao1">Opção 1</label></li>
                <li><input type="checkbox" id="condicao2"><label for="condicao2">Opção 2</label></li>
                <!-- Adicione mais opções conforme necessário -->
            </ul>
        </li>
        <li><hr style="width: 90%;"></li> <!-- Outra barra preta -->
        <li>
            Cor <!-- Texto Cor -->
            <ul>
                <!-- Opções de cor -->
                <li><input type="checkbox" id="cor1"><label for="cor1">Opção 1</label></li>
                <li><input type="checkbox" id="cor2"><label for="cor2">Opção 2</label></li>
                <!-- Adicione mais opções conforme necessário -->
            </ul>
        </li>
        <li><hr style="width: 90%;"></li> <!-- Mais uma barra preta -->
        <li>
            Preço <!-- Texto Preço -->
            <ul>
                <li>
                    Min <input type="text" id="minPrice" style="display: inline-block;"> <!-- Campo para valor mínimo -->
                    Max <input type="text" id="maxPrice" style="display: inline-block;"> <!-- Campo para valor máximo -->
                    <button id="filtro">Filtrar</button> <!-- Botão de filtragem -->
                </li>
            </ul>
        </li>
    </ul>
</nav>
