const object = document.getElementById("object")
const destination = document.getElementById("destination")
const start = document.getElementById("start")

object.addEventListener('dragstart',() => {
    object.classList.add("dragging")
})

object.addEventListener('dragend',() => {
    object.classList.remove("dragging")
})

destination.addEventListener('dragover',() =>{
    console.log("over destination")
    destination.appendChild(object)
    destination.style.borderColor = "green"
    destination.style.transition = "all 1s"
})

start.addEventListener('dragover', () =>{
    start.appendChild(object)
    destination.style.borderColor = "red"
    destination.style.transition = "all 1s"
})

