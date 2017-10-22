<?PHP
  $a=38;$b=56;
  $c=$a & $b;
  echo "Nlai \$a & \$b=$c";
  echo "<br>";

  	$a=38 ;$b=56;
	$c=($a>$b) ? 10:20;
	$d=($c>$a);
	if ($d)
		$c +=$b;
	else
		$c -=$b;

  echo "Nlai \$a =$a <br>";
  echo "Nlai \$b =$b <br>";
  echo "Nlai \$c =$c <br>";
  echo "Nlai \$d =$d <br>";

?>