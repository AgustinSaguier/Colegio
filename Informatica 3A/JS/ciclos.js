let cajas = document.getElementsByClassName("cajas")
console.log(cajas)
for (let index = 0; index < cajas.length; index++) {
    cajas[index].style.display = "inline-block"
    cajas[index].style.margin = "10px"
    cajas[index].style.width = "50px"
    cajas[index].style.height = "50px"
    cajas[index].style.backgroundColor = `rgb(${index*14+30},${index*30+1},${index*21+2})`
}
