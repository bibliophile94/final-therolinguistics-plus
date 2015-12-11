var initialX = Math.floor(Math.random()*window.innerWidth);
var initialY = Math.floor(Math.random()*window.innerHeight);
var lastX = initialX;
var lastY = initialY;
var texts = document.getElementById("Wrapping");
var height = (texts.clientHeight);
var width = (texts.clientWidth);
texts.style.visibility = "visible";
console.log(height);
console.log(width);
var leftBound = window.innerWidth/2-(width/2);
var rightBound = window.innerWidth/2+(width/2);
var upperBound = window.innerHeight/2+(height/2);
var lowerBound = window.innerHeight/2-(height/2);
texts.style.top = upperBound + "px";
texts.style.left = leftBound + "px"
console.log(leftBound + " " + rightBound);
console.log(upperBound + " " + lowerBound);
var done = false;
	setInterval(
	function(){
	var img = document.createElement('img');
	img.style.position = "fixed";
	var x = lastX-25+Math.floor(Math.random()*50);
	lastX = x;
	img.style.top = y + "px";
	var y = lastY-25+Math.floor(Math.random()*50);
	lastY = y;
	checkBounds(x,y);
	img.style.left = x + "px";
	img.setAttribute("src", "dots.png");
	img.style.top = y + "px";
	if (done == false)
	isOverlapping();
	document.body.appendChild(img);
	},100);
function initialMoss()
{
	
}
function isOverlapping(x,y)
{
		if (x<=rightBound && x>=leftBound)
	{
		if (y>=lowerBound && y<=upperBound)
		{
			var elem = document.getElementById("Wrapping");
			elem.color = "green";
			window.alert("YAAAASSS...the Moss approves");
			done = true;
			
		}
	}
}
function checkBounds()
{
	if (lastX<0 || lastX>screen.width)
	{
		lastX = initialX;
		lastY = initialY;
	}
	if (lastY<0 || lastY>screen.height)
	{
		lastX = initialX;
		lastY = initialY;
	}
	
}