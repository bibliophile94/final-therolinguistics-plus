<!DOCTYPE html>
<html>
    <head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="final.css">
	<meta charset="utf-8">
    <title>The Mossier Tree</title>
    </head>
    <body>
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