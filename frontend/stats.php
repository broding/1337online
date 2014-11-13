<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Stats</title>
	</head>
	<body>
		<a href="/..">home</a>
		<h1>Stats
<?php
		if (isset($name)) {
			echo ' of '.$name;
		}
?>
		</h1>

		<p>
			your personal stats will appear here.
		</p>
	</body>
</html>
