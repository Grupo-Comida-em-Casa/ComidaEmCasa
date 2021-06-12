$('#login-form').submit(function(e){
    e.preventDefault();
   
    var email = $('#l-email').val().trim();
    var senha = $('#l-senha').val().trim();

    $.ajax({
        url: '../PHPConsultas/login-action.php',
        method: 'POST',
        data: {'email': email, 'senha': senha},
        success: function(data){
            if(data === "erro"){
                alert("Email ou senha errados")
            }else if(data === "ok"){
                const modal = document.getElementById("modal-login");
                modal.classList.remove("mostrar");
                window.location.href = "index.php";
                
            }
        }
    })
})
    