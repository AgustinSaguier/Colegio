let cajas = document.getElementsByClassName("cajas")
console.log(cajas)
for (let index = 0; index < cajas.length; index++) {
    cajas[index].style.width = "50px"
    cajas[index].style.height = "50px"
    cajas[index].style.backgroundColor = "green"
    
}
