<?php 
$j=0;
$i=0;
while ($row=mysql_fetch_array($result)) {
	echo "<span>".$row['name']."(".$row['times'].")</span>";
	$j++;
	$i++;
	if ($j==3) {
		echo "<br>";
		$j=0;
	}
	if ($i==8) {
		break;
	}
}
echo "<p><a href=\"html/history.php\">read more>></a></p>";
 ?>