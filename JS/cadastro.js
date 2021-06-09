$('#cadastroform').submit(function(e){
    e.preventDefault();

    var nome = $('#campo_nome').val().trim();
    var telefone = $('#campo_telefone').val().trim();
    var cpf = $('#campo_cpf').val().trim();
    var email = $('#campo_email').val().trim();
    var senha = $('#campo_senha').val().trim();
    var senhaconfirmar = $('#campo_senha_confirmar').val().trim();

    $.ajax({
        url: './PHPConsultas/cadastroacao.php',
        method: 'POST',
        data: {'nome': nome, 'telefone': telefone, 'cpf': cpf, 'email': email, 'senha': senha, 'senhaconfirmar': senhaconfirmar},
        success: function(data){
            console.log(data);
        }
    })

})