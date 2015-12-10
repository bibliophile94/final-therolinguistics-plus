<!DOCTYPE html>
<html>
    <head>
	<link href='https://fonts.googleapis.com/css?family=Homemade+Apple' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="final.css">
	<meta charset="utf-8">
    <title>The Mossier Tree</title>
    </head>
    <body>
	<div id="before">Text</div>
</div>
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
<div id="content">
    <?php echo $safe_content; ?>
</div>
</div>
<div id="after">Text</div>
<form action="final.php" onSubmit="You defaced another tree">
    <textarea name="content" rows="1" cols="20"><?php

echo "Carve Your Message";

?></textarea>
    <input type="submit" value="Carve">
</form>
<script src="final.js">
		</script>
</body>
</html>