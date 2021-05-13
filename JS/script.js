function iniciaModal(modalID) {
  const modal = document.getElementById(modalID);

  modal.classList.add("mostrar");
  modal.addEventListener("click", (evento) => {
              //fora da tela                          classe fechar
    if (evento.target.id == modalID || evento.target.className == "fechar") {
      modal.classList.remove("mostrar"); // remove a função 
    }
  });
}

const ativar = document.querySelector(".ativar");

ativar.addEventListener("click", () => iniciaModal("modal-login"));

/* Form Registro */

function iniciaModalRegistro(modalRegistroID) {
  const modal = document.getElementById(modalRegistroID);

  modal.classList.add("mostrar");
  modal.addEventListener("click", (eventoRegistro) => {
    if (
      eventoRegistro.target.id == modalRegistroID ||
      eventoRegistro.target.className == "fechar"
    ) {
      modal.classList.remove("mostrar");
    }
  });
}

const ativar_registro = document.querySelector(".ativar_registro");

ativar_registro.addEventListener("click", () =>
  iniciaModalRegistro("modal_reg"),
);

/*botao cadastrar, dentro do login (Doar)*/

const botaoCadastro = document.querySelector("#botaoCadastro");

botaoCadastro.addEventListener("click", (event) =>{
  event.preventDefault()
  iniciaModalRegistro("modal_reg")
});


