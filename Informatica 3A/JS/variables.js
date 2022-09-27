let numero = 5
console.log("numero", numero)

let palabra = "palabra"
console.log("palabra", palabra)

let boolean = true
console.log("boolean", boolean)

let colores = ["rojo", "amarillo", boolean, numero]
console.log(colores)

const car = {type:"Fiat", model:"500", color:"white"};
console.log(car)

let caja = document.getElementById("caja")
console.log("caja ", caja)

caja.style.width  = "100px"
caja.style.height = "100px"
caja.style.backgroundColor = "blue"

let cajas = document.getElementsByClassName("cajas")
console.log(cajas)
for (let index = 0; index < cajas.length; index++) {
    cajas[index].style.width = "50px"
    cajas[index].style.height = "50px"
    cajas[index].style.backgroundColor = "green"
    
}

function changeColor(){
    
}