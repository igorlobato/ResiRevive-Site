$(function(){
    
    $('#cadastrar').on('click', function(event){
        console.log('Botão de cadastrar clicado');
        event.preventDefault();

        let dataAtual = new Date();

        let dataOnlineFormatada = dataAtual.toISOString();
        let dataCreationFormatada = dataAtual.toISOString();

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
});