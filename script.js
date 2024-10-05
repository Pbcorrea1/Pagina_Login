const close = document.getElementById("close");
const tela = document.querySelector(".box");
const login = document.querySelector(".btn");
const container = document.querySelector(".container")
    
login.addEventListener("click", ()=>{
    tela.classList.remove("ativo")
})

login.addEventListener("click", ()=>{
    container.classList.add("login")
    container.classList.remove("btn-close")
})

close.addEventListener("click", ()=>{
    container.classList.add("btn-close")
    container.classList.remove("login")
})

