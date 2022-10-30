const boxOne = document.getElementById("boxOne")
const boxTwo= document.getElementById("boxTwo")
const boxThree= document.getElementById("boxThree")

function StyleBoxes () {
    boxOne.style.backgroundColor = "red";
    boxTwo.style.backgroundColor = "blue"
    boxThree.style.backgroundColor = "green"

    boxOne.style.width = "150px"
    boxTwo.style.width = "50px"
    boxThree.style.width = "200px"

    boxOne.style.height = "50px"
    boxTwo.style.height = "200px"
    boxThree.style.height = "150px"

    boxOne.style.borderStyle = "dashed"
    boxTwo.style.borderStyle = "dotted"
    boxThree.style.borderStyle = "double"

    boxOne.style.transition = "all 2s"
    boxTwo.style.transition = "all 2s"
    boxThree.style.transition = "all 2s"
}