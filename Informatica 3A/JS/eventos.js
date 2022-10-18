let img = document.getElementById("img")
let container = document.getElementById("container")

img.ondragstart = function () {
    console.log("Hello World")
}

img.addEventListener("dragstart",startMovement)
function startMovement (){
    console.log("Movement detected")
}