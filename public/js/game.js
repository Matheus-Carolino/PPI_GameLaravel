let cenario = document.getElementById("cenario");
let area = document.getElementById("area-jogo");
let ctx = area.getContext("2d");

let btn_start = document.getElementById('btn-start');
let blur_start = document.getElementById('blur-start');

let audio_go = new Audio('sons/go.mp3');

btn_start.addEventListener('click', function(){
    blur_start.classList.add('hidden');
    cenario.classList.remove('blur-sm');
    blur_start.classList.remove('z-30');
    condicao = true;
    if(pokebolas <= 0){
        pokebolas = 3;
        pontos = 0;
        document.querySelector('#pokebolas').innerText = pokebolas;
        document.querySelector('#pontos').innerText = pontos;
    }
    audio_go.play();
    resizeCanvas();
});

window.onresize = function(){
    resizeCanvas();
}

function resizeCanvas(){
    area.width = cenario.clientWidth;
    area.height = cenario.clientHeight;
    console.log(cenario.width)
}

let x;
let y;
let sorteio;
let pokebolas = 3;
let pontos = 0;
let condicao = false;
let erros = 0;

function limpatela(){
    ctx.clearRect(0, 0 , area.width, area.height)
}

function aleatorio(max){
    return Math.floor(Math.random() * max);
}

function sortiar(){
    numero = aleatorio(4);
    if(numero == 1){
        sorteio = 'bulbasaur.png'
    }else if(numero == 2){
        sorteio = 'charmander.png'
    }else if(numero == 3){
        sorteio = 'pikachu.png'
    }else{
        sorteio = 'squirtle.png'
    }
}

function posicao(){
    if(condicao){
        limpatela();
        x = aleatorio(area.width);
        y = aleatorio(area.height);
        desenha(x,y);

        setTimeout(endGame, 20000);
    }
}

let spawn = setInterval(posicao, 1000);
let user_form = document.getElementById('user-form');

function endGame(){
    condicao = false;
    user_form.classList.remove('hidden');
    cenario.classList.add('blur-sm');
}

function desenha(x,y){
    sortiar();
    let pokemon = new Image()
    pokemon.src = "img/pokemons/" + sorteio;
    pokemon.onload=()=>{
        ctx.drawImage(pokemon,x,y, 100, 100);
    }
}

function disparar(evento){
    let xClick = evento.pageX - area.offsetLeft;
    let yClick = (evento.pageY - area.offsetTop) - 600;
    if(condicao){
        if((xClick >= x && xClick <= x + 100) && (yClick >= y && yClick <= y + 100)){
            pontos++
            document.querySelector('#pontos').innerText = pontos;
            document.getElementById('acertos').value = pontos;
        }else{
            erros++
            document.getElementById('erros').value = erros;
            document.getElementById('erros-pontos').innerText = erros;
        }
    }
}

area.onclick = disparar



