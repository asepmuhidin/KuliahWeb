<html>
  <head>
     <title>Methode GET </title>
  </head>

<body>
<?php
	
	$loop=$_GET["a"];

	$i=1;
	while ($i<=$loop){
		echo "$i.Hello <br>";
		$i++;
	}
?>
</body>

</html>
