<?php
$ip = $_SERVER['REMOTE_ADDR'];
$file = 'log.txt';
$current = file_get_contents($file);
$current .= $ip . "\n";
file_put_contents($file, $current);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Your Page Title Here</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Add any other meta tags, stylesheets, or scripts you need here -->
</head>
<body>
	<!-- Add the content of your page here -->
</body>
</html>
