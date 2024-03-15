$(function(){

    var $produtos = $('#produtos');
    var urlParams = new URLSearchParams(window.location.search);
    var produtosId = urlParams.get('id');

    
    $('#cadastrar').on('click', function(event){
        console.log('Botão de cadastrar clicado');
        event.preventDefault();

        let dataAtual = new Date();

        let dataOnlineFormatada = dataAtual.toLocaleDateString();
        let dataCreationFormatada = dataAtual.toLocaleTimeString();

        let usuario = {
            email: $('#email').val(),
            nome: $('#nome').val(),
            telefone: $('#telefone').val(),
            senha: $('#senha').val(),
            adm: false,
            nota: 0,
            foto: "",
            online: dataOnlineFormatada,
            token: "",
            creation: dataCreationFormatada,
            endereco: $('#endereco').val(),
        };

        $.ajax({
            type: 'POST',
            url: 'http://localhost:3000/usuarios',
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            data: JSON.stringify(usuario),
            success: function(newUsuario) {
                let userData = '<p>email: ' + usuario.email + ', nome: ' + usuario.nome + ', telefone: ' + usuario.telefone +
                    ', senha: ' + usuario.senha + ', adm: ' + usuario.adm + ', nota: ' + usuario.nota + ', foto: ' + usuario.foto +
                    ', online: ' + usuario.online + ', token: ' + usuario.token + ', creation: ' + usuario.creation + 
                    ', endereco: ' + usuario.endereco +'</p>';
                $('#dados-usuario-cadastrado').html(userData);
                alert('Usuário cadastrado com sucesso.');
                window.location.href = "../php/login.php";
            },
            error: function() {
                alert('Erro ao cadastrar usuário');
            }
        });
    });

    $('#envioanuncio').on('click', function(event){
        console.log('Botão de cadastrar produto clicado');
        event.preventDefault();

        let dataAtual = new Date();

        let dataOnlineFormatada = dataAtual.toLocaleDateString(); // Ajuste para formatar a data
        let dataCreationFormatada = dataAtual.toLocaleTimeString();

        let precoString = $('#preco').val();
        precoString = precoString.replace(',', '.');
        let preco = parseFloat(precoString);

        let tipoSelecionado = $('.dropdown #tipo').text().trim();
        let condicaoSelecionada = $('.dropdown #condicao').text().trim();
        let corSelecionada = $('.dropdown #cor').text().trim();

        
        

        let produto = {
            tipo: tipoSelecionado,
            titulo: $('#titulo').val(),
            descricao: $('#descricao').val(),
            data: dataOnlineFormatada,
            hora: dataCreationFormatada,
            condicao: condicaoSelecionada,
            cor: corSelecionada,
            preco: preco,
            local: userLocal,
            foto1: $('#imagem1').val(),
            foto2: $('#imagem2').val(),
            foto3: $('#imagem3').val(),
            foto4: $('#imagem4').val(),
            foto5: $('#imagem5').val(),
            id_dono: userId,
        };

        $.ajax({
            type: 'POST',
            url: 'http://localhost:3000/produtos',
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            data: JSON.stringify(produto),
            success: function(newProduto) {
                let userData = '<p>tipo: ' + produto.tipo + ', titulo: ' + produto.titulo + ', descricao: ' + produto.descricao +
                    ', data: ' + produto.data + ', hora: ' + produto.hora + ', condicao: ' + produto.condicao + ', cor: ' + produto.cor +
                    ', preco: ' + produto.preco + ', local: ' + produto.local + ', foto1: ' + produto.imagem1 + 
                    ', foto2: ' + produto.imagem2 + ', foto3: ' + produto.imagem3 +', foto4: ' + produto.imagem4 +
                    ', foto5: ' + produto.imagem5 + '. id_dono: ' + produto.id_dono + '</p>';
                $('#dados-produtos-cadastrado').html(userData);
                alert('Produto cadastrado com sucesso.');
                window.location.href = "../php/index.php";
            },
            error: function() {
                alert('Erro ao cadastrar produto');
            }
        });
    });

    if (produtosId) {
        $.ajax({
            type: 'GET',
            url: 'http://localhost:3000/posts/' + produto.id,
            success: function(produto) {
                $produto.append('<li>Tipo: ' + produto.tipo +
                    '<br>Titulo: ' + produto.titulo +
                    '<br><br><img src="' + produto.foto1 + '" alt="Imagem" class="foto"><br>' +
                    '<br>Data: ' + produto.data +
                    '<br>Hora: ' + produto.hora +
                    '<br>Hora: ' + produto.condicao +
                    '<br>Postador: ' + produto.id_dono +
                    '<br></li>');
            },
            error: function() {
                alert('Erro ao carregar o post');
            }
        });
    } else {
            $.ajax({
                type: 'GET',
                url: 'http://localhost:3000/produtos',
                success: function(produtos) {
                    $.each(produtos, function(i, produto) {
                        if (produto.id_dono === userId) {
                            $.ajax({
                                type: 'GET',
                                url: 'http://localhost:3000/produtos/' + produto.id,
                                success: function(listaprodutos) {
                                    var precoFormatado = produto.preco.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
                                    $produtos.append(
                                    '<div class="produto"><div class="fotoproduto"><img src="' + produto.foto1 + '" alt="Imagem" class="foto"></div><br>' +
                                    '<div class="conteudodireita"><div class="titulo">Titulo: ' + produto.titulo +
                                    '</div><div class="preco">Preço: ' + precoFormatado +
                                    '</div>Tipo: ' + produto.tipo +
                                    '<br>Data: ' + produto.data +
                                    ' às ' + produto.hora +
                                    '<br>Condição: ' + produto.condicao +
                                    '<br></div></div><br>');
                                },
                            });
                        }})
                },
                    error: function() {
                        alert('Erro ao carregar produtos');
                    }
                });
            }
});