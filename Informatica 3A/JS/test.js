let btn = document.getElementById("btn")
let text = document.getElementById("text")
let contador = 0
let clicks = 0
let enabled = false

function aumentar(){
    if (enabled == true){
    contador=contador+1
    console.log(contador)
    btn.innerHTML = contador
    }
}

function enable (){
    enabled = true
}

function resetear(){
    contador=0
    btn.innerHTML = contador
}

function myFunction() {
    enabled = false
    console.log(contador);
    clicks = contador/5
    contador = 0
    btn.innerHTML = contador
    text.innerHTML = "Haces " + clicks + " clicks por segundo"
}