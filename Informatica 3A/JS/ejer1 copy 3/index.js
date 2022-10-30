var myCanvas = document.getElementById("myCanvas")
var ctx = myCanvas.getContext("2d");

function drawCircle(){
    ctx.beginPath();
    ctx.arc(95,50,40,0,2*Math.PI);
    ctx.stroke();
}