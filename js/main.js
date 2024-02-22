$(function(){
    
    $('#cadastrar').on('click', function(event){
        console.log('Button Clicked');
        event.preventDefault();

        let usuario = {
            email: $('#email').val(),
            nome: $('#nome').val(),
            telefone: $('#email').val(),
            senha: $('#nome').val(),
            adm: false,
            nota: 0,
            foto: "",
            online: "",
            token: "",
            creation: "",
            endereco: "",
        };

        $.ajax({
            type: 'POST',
            url: 'http://localhost:3000/usuarios',
            contentType: "application/json; charset=utf-8",
            dateType: "json",
            data: JSON.stringify(usuario),
            success: function(newUsuario) {
                let userData = '<p>email: ' + usuario.email + ', nome: ' + usuario.nome + ', telefone: ' + usuario.telefone +
                    ', senha: ' + usuario.senha + ', adm: ' + usuario.adm + ', nota: ' + usuario.nota + ', foto: ' + usuario.foto +
                    ', online: ' + usuario.online + ', token: ' + usuario.token + ', creation: ' + usuario.creation + 
                    ', endereco: ' + usuario.endereco +'</p>';
                $('#dados-usuario-cadastrado').html(userData);
            },
            error: function() {
                alert('Erro ao cadastrar usuário');
            }
        });
    });
});