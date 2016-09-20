<!DOCTYPE html>
<html>
<head></head>
<body>
	<h1> Contador de visitas </h1>
<?php
	$file="contador.txt";
	if (file_exists($file)){
		$fcount = fopen($file, "r+");
		$line = fread($fcount, filesize($file));
		fclose($fcount);
		$fcount = fopen($file,"w");
		$count = (int)$line +1;
		$line = fwrite($fcount,$count);
		fclose($fcount);
	}
	echo "<h3>Ud. es el visitante numero  $count</h3>";
?>
</body>
</html>
