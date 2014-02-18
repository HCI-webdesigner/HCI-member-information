<?php 
echo "<tr>
		<th>ID</th>
		<th>name</th>
		<th>grade</th>
		<th>long-phone</th>
		<th>short-phone</th>
		<th>department</th>
		<th>times</th>
	</tr>";
while ($row=mysql_fetch_array($result)) {
	echo "<tr>";
	echo "<td>".$row['ID']."</td>";
	echo "<td>".$row['name']."</td>";
	echo "<td>".$row['grade']."</td>";
	echo "<td>".$row['long_phone']."</td>";
	echo "<td>".$row['short_phone']."</td>";
	echo "<td>".$row['department']."</td>";
	echo "<td>".$row['times']."</td>";
	echo "</tr>";
}
 ?>