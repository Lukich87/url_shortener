<DOCTYPE html>
<html>
<head>

<title>Сокращатель ссылок</title>

</head>
<body>

<form action="" method="post">
<input type="url" required placeholder="Введите ссылку..." autocomplete="off" name="url">
<input type="submit" name="submit" value="Сгенерировать">
</form>

<?php
$h = "QqWwEeRrTtYyUuIiOoPpAaSsDdFfGgHhJjKkLlZzXxCcVvBbNnMm1234567890";
$rand = substr(str_shuffle($h), 0, 5); 
$site = "http://lukich.co.nf/"; 
$url = $_POST['url'];

if ($_POST['submit']) {
	echo "<a href='$site$rand' target='_blank'>$site$rand</a>"; 
	$f = fopen("a/$rand.php", "w"); 
	fwrite($f, "<?php header('Location: $url') ?>"); 
	fclose($f); 

	$fh = fopen(".htaccess", "a"); 
	fwrite($fh, "
	RewriteRule ^$rand$ /a/$rand.php");
}
?>

</body>
</html>