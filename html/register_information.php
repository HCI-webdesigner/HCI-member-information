<?php 
$i=0;

while ($row=mysql_fetch_array($result)) {
	echo "<span>".$row['name']."</span>";
	$i++;
	if ($i==4) {
		echo "<br>";
		$i=0;
	}
}
 ?>