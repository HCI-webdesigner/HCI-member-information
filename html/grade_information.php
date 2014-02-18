<?php 
$j=0;
$i=0;
while ($row=mysql_fetch_array($result)) {
	echo "<span>".$row['name']."(".$row['short_phone'].")</span>";
	$j++;
	$i++;
	if ($j==2) {
		echo "<br>";
		$j=0;
	}
	if ($i==8) {
		break;
	}
}
echo "<p><a href=\"html/member.php\">read more>></a></p>";
 ?>