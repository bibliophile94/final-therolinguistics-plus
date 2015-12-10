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
	setInterval(
	function(){
	var img = document.createElement('img');
	img.style.position = "fixed";
	var x = Math.floor(Math.random()*screen.width);
	img.style.top = y;
	console.log(x);
	var y = Math.floor(Math.random()*screen.height);
	img.style.left = x + "px";
	console.log(y);
	img.setAttribute("src", "dots.png");
	img.style.top = y + "px";
	document.body.appendChild(img);
	},100);
</script>
</body>
</html>