var initialX = Math.floor(Math.random()*screen.width);
var initialY = Math.floor(Math.random()*screen.height);
var lastX = initialX;
var lastY = initialY;
var texts = document.getElementById("Wrapping");
var height = (texts.clientHeight)+1;
var width = (texts.clientWidth)+1;
document.getElementById("Wrapping").style.visibility = "visible";
console.log(height);
console.log(width);
var leftBound = window.innerWidth/2-(width/2);
var rightBound = window.innerWidth/2+(width/2);
var upperBound = window.innerHeight/2+(height/2);
var lowerBound = window.innerHeight/2-(height/2);
console.log(leftBound + " " + rightBound);
console.log(upperBound + " " + lowerBound);
var done = false;
	setInterval(
	function(){
	var img = document.createElement('img');
	img.style.position = "fixed";
	var x = lastX-10+Math.floor(Math.random()*20);
	lastX = x;
	if (lastX<0 || lastX>screen.width)
	{
		lastX = initialX;
		lastY = initialY;
	}
	img.style.top = y + "px";
	var y = lastY-10+Math.floor(Math.random()*20);
	lastY = y;
	if (lastY<0 || lastY>screen.height)
	{
		lastX = initialX;
		lastY = initialY;
	}
	img.style.left = x + "px";
	img.setAttribute("src", "dots.png");
	img.style.top = y + "px";
	if (done == false)
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
	document.body.appendChild(img);
	},100);
