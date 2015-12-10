<!DOCTYPE html>
<html>
    <head>
	<link href='https://fonts.googleapis.com/css?family=Homemade+Apple' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="final.css">
        <meta charset="utf-8">
        <title>The Mossier Tree</title>
    </head>
    <body>
	<div id="Wrapping">
	<?php

if (file_exists('final.txt')) {
    $content = file_get_contents('final.txt');
} else {
    $content = '(no content)';
}
if (isset($_GET['content'])) {
    $content = $_GET['content'];
    file_put_contents('final.txt', $content);
}
$safe_content = htmlentities($content);
?>
</div>
<div id="content">
    <?php echo $safe_content; ?>
</div>
<form action="final.php">
    <textarea name="content" rows="1" cols="20"><?php

echo "Carve Your Message";

?></textarea>
    <input type="submit" value="Save">
</form>
<script>
var initialX = Math.floor(Math.random()*screen.width);
var initialY = Math.floor(Math.random()*screen.height);
var texts = document.getElementById("Wrapping");
var height = (texts.clientHeight);
var width = (texts.clientWidth);
document.getElementById("Wrapping").style.color = "red";

document.getElementById("body").style.color = "blue";
console.log(height);
console.log(width);
var leftBound = window.innerWidth/2-(width/2);
var rightBound = window.innerWidth/2+(width/2);
var upperBound = window.innerHeight/2+(height/2);
var lowerBound = window.innerHeight/2-(height/2);
console.log(leftBound + " " + rightBound);
console.log(upperBound + " " + lowerBound);
	setInterval(
	function(){
	var img = document.createElement('img');
	img.style.position = "fixed";
	var x = initialX-10+Math.floor(Math.random()*20);
	initialX = x;
	img.style.top = y + "px";
	console.log(x);
	var y = initialY-10+Math.floor(Math.random()*20);
	initialY = y;
	img.style.left = x + "px";
	console.log(y);
	img.setAttribute("src", "dots.png");
	img.style.top = y + "px";
	if (x<=rightBound && x>=leftBound)
	{
		if (y<=lowerBound && y>=upperBound)
			window.alert("YAAAASSS...the Moss approves");
	}
	document.body.appendChild(img);
	},100);
</script>
</body>
</html>