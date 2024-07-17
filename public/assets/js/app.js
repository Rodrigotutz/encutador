const mensagemSucesso = document.getElementById("message-success")
const closeMensagemSucesso = document.getElementById("close-message-success")

if(mensagemSucesso){
    closeMensagemSucesso.addEventListener("click", function(){
        mensagemSucesso.style.display = "none"
    })
}

var send = document.querySelector("#send")
var containerLoading = document.querySelector("#containerLoading")

send.addEventListener("click", () => {
    containerLoading.classList.remove("d-none")
    containerLoading.classList.add("d-flex")
})