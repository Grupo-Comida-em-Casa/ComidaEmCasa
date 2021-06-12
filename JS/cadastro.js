$('#cadastroform').submit(function(e){
    e.preventDefault();

    var nome = $('#campo_nome').val().trim();
    var telefone = $('#campo_telefone').val().trim();
    var cpf = $('#campo_cpf').val().trim();
    var email = $('#campo_email').val().trim();
    var senha = $('#campo_senha').val().trim();
    var senhaconfirmar = $('#campo_senha_confirmar').val().trim();

    var podeCadastrar = true;

    if (telefone.length != 13){
        alert("telefone invalido" + telefone.length)
        podeCadastrar = false;
    }else{
        podeCadastrar = true;
    }
    if (podeCadastrar){
        $.ajax({
            url: '../PHPConsultas/cadastro_acao.php',
            method: 'POST',
            data: {'nome': nome, 'telefone': telefone, 'cpf': cpf, 'email': email, 'senha': senha, 'senhaconfirmar': senhaconfirmar},
            success: function(data){
                console.log(data)
                if(data === "email ja existe"){
                    $('#campo_email').css({'outline': '3px solid red'});
                }else if(data === "ok"){
                    const modal = document.getElementById("modal_reg");
                    modal.classList.remove("mostrar");
                    window.location.href = "index.php";
                    
                }
            }
        })
    }
    
    $.ajax({
        url: '../PHPConsultas/cadastro_acao.php',
        method: 'POST',
        data: {'nome': nome, 'telefone': telefone, 'cpf': cpf, 'email': email, 'senha': senha, 'senhaconfirmar': senhaconfirmar},
        success: function(data){
            console.log(data)
            if(data === "email ja existe"){
                $('#campo_email').css({'outline': '3px solid red'});
            }else if(data === "ok"){
                const modal = document.getElementById("modal_reg");
                modal.classList.remove("mostrar");
                window.location.href = "index.php";

            }
        }
    })


})