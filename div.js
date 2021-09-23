const canvas = document.getElementById("div");
const ctx = canvas.getContext('2d');

const user = {
    x : 0, 
    y : 0,
    width : 20,
    height : 20,
    color : "RED"
}
function drawrect(x, y, w, h, color)
{
    ctx.fillStyle = color;
    ctx.fillRect(x, y, w, h);
}
function render(){
    
    drawrect(0, 600, width,height, "FF000");
    drawrect(0, 0, width,height, "FF000");   
    drawrect(600, 0, width,height, "FF000");
    drawrect(600,600, width,height, "FF000");
}
function move(){
    render();
}
let framePerSecond = 50;
let loop = setInterval(move,1000/framePerSecond);







// ctx.beginPath();
// ctx.lineWidth = "6";
// ctx.strokeStyle = "red";
// ctx.rect(5, 5, 290, 140);
// ctx.stroke();
