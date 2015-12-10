<!DOCTYPE html>
<html>
    <head>
	<link rel="stylesheet" type="text/css" href="final.css">
        <meta charset="utf-8">
        <title>The Mossier Tree</title>
    </head>
    <body>
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
<div id="content">
    <?php echo $safe_content; ?>
</div>
<form action="final.php">
    <textarea name="content" rows="1" cols="20"><?php

echo $safe_content;

?></textarea>
    <input type="submit" value="Save">
</form>
<script>
var initialX = Math.floor(Math.random()*screen.width);
var initialY = Math.floor(Math.random()*screen.height);
	setInterval(
	function(){
	var img = document.createElement('img');
	img.style.position = "fixed";
	var x = initialX-50+Math.floor(Math.random()*100);
	initialX = x;
	img.style.top = y + "px";
	console.log(x);
	var y = initialY-50+Math.floor(Math.random()*100);
	initialY = y;
	img.style.left = x + "px";
	console.log(y);
	img.setAttribute("src", "dots.png");
	img.style.top = y + "px";
	document.body.appendChild(img);
	},100);
</script>
</body>
</html>