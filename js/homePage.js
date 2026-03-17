const elementos = document.querySelectorAll('.double-image, .double-image2');

function mostrarAnimacao(){
    const alturaTela = window.innerHeight;

    elementos.forEach(el => {
        const distancia = el.getBoundingClientRect().top;

        if(distancia < alturaTela - 100){
            el.classList.add("mostrar");
        }
    });
}

window.addEventListener("scroll", mostrarAnimacao); 

function mostrarLogin(){
    document.getElementById("login").style.display = "block";
    document.getElementById("cadastro").style.display = "none";
    document.getElementById("overlay").style.display = "block";
} 

function mostrarCadastro(){
    document.getElementById("login").style.display = "none";
    document.getElementById("cadastro").style.display = "block";
    document.getElementById("overlay").style.display = "block";
}

function fecharLogin(){
    document.getElementById("overlay").style.display = "none";
    document.getElementById("login-container").style.display = "none";
}

function abrirLogin(){
    document.getElementById("overlay").style.display = "block";
    document.getElementById("login-container").style.display = "block";
}

const loginBtn = document.getElementById("loginBtn");
const cadastroBtn = document.getElementById("cadastroBtn");

function ativarLogin(){
    loginBtn.classList.add("ativo");
    cadastroBtn.classList.remove("ativo");
}

function ativarCadastro(){
    cadastroBtn.classList.add("ativo");
    loginBtn.classList.remove("ativo")
}