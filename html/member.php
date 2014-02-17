<html>
	<head>
		<meta charset="utf-8" />
		<title>HCI成员信息</title>
		<link rel="stylesheet" href="../css/head.css">
		<link rel="stylesheet" href="../css/member.css" />
	</head>
	<body>
		<div class="all-content">
			<header>
			    <?php include '../html/head.php'; ?>
		    </header>
		    <div class="memberinfo">
		    	<h2>
		    		<a href="../index.php">return>></a>
		    	</h2>
		    	<?php 
		    	$con=@mysql_connect("localhost","root","root");
		    	if (!$con) {
		    		die('Could not connect: '.mysql_error());
		    	}
		    	mysql_select_db("hcichart",$con);
		    	//13级成员信息
		    	$result=mysql_query("select ID,name,grade,long_phone,
		    		short_phone,department from member where grade=13");
		    	echo "<table cellspacing=\"0\">
		    		<caption>13级成员信息</caption>
		    		<tr>
		    			<th>ID</th>
		    			<th>name</th>
		    			<th>grade</th>
		    			<th>long-phone</th>
		    			<th>short-phone</th>
		    			<th>department</th>
		    		</tr>";
		    		while ($row=mysql_fetch_array($result)) {
		    			echo "<tr>";
		    			echo "<td>".$row['ID']."</td>";
		    			echo "<td>".$row['name']."</td>";
		    			echo "<td>".$row['grade']."</td>";
		    			echo "<td>".$row['long_phone']."</td>";
		    			echo "<td>".$row['short_phone']."</td>";
		    			echo "<td>".$row['department']."</td>";
		    			echo "</tr>";
		    		}
		    	echo "</table>";
                //12级成员信息
		    	$result=mysql_query("select ID,name,grade,long_phone,
		    		short_phone,department from member where grade=12");
		    	echo "<table cellspacing=\"0\">
		    		<caption>12级成员信息</caption>
		    		<tr>
		    			<th>ID</th>
		    			<th>name</th>
		    			<th>grade</th>
		    			<th>long-phone</th>
		    			<th>short-phone</th>
		    			<th>department</th>
		    		</tr>";
		    		while ($row=mysql_fetch_array($result)) {
		    			echo "<tr>";
		    			echo "<td>".$row['ID']."</td>";
		    			echo "<td>".$row['name']."</td>";
		    			echo "<td>".$row['grade']."</td>";
		    			echo "<td>".$row['long_phone']."</td>";
		    			echo "<td>".$row['short_phone']."</td>";
		    			echo "<td>".$row['department']."</td>";
		    			echo "</tr>";
		    		}
		    	echo "</table>";
                //11级成员信息
                $result=mysql_query("select ID,name,grade,long_phone,
		    		short_phone,department from member where grade=11");
		    	echo "<table cellspacing=\"0\">
		    		<caption>11级成员信息</caption>
		    		<tr>
		    			<th>ID</th>
		    			<th>name</th>
		    			<th>grade</th>
		    			<th>long-phone</th>
		    			<th>short-phone</th>
		    			<th>department</th>
		    		</tr>";
		    		while ($row=mysql_fetch_array($result)) {
		    			echo "<tr>";
		    			echo "<td>".$row['ID']."</td>";
		    			echo "<td>".$row['name']."</td>";
		    			echo "<td>".$row['grade']."</td>";
		    			echo "<td>".$row['long_phone']."</td>";
		    			echo "<td>".$row['short_phone']."</td>";
		    			echo "<td>".$row['department']."</td>";
		    			echo "</tr>";
		    		}
		    	echo "</table>";
		    	mysql_close($con);
		    	 ?>
		    </div>
		    <div class="search">
		    	<form action="" method="post">
		    		<input type="text" placeholder="输入搜索内容   如张三" class="text" name="name">
		    		<input type="submit" value="GO" class="submit">
		    	</form>
		    	<?php
		    	$con=@mysql_connect("localhost","root","root");
		    	if (!$con) {
		    		die('Could not connect: '.mysql_error());
		    	}
		    	if(isset($_POST['name'])) {
		    		$name=$_POST['name'];
		    	
		    	
		    	mysql_select_db("hcichart",$con);
		    	$result=mysql_query("select name,grade,long_phone,short_phone,department
		    		from member where name='$name'");//搜索出现问题
		    	// echo $_POST['name'];
		    	$row = mysql_fetch_array($result);
		    	echo "<div class=\"search_member\">";
		    	echo "<p>姓名：".$row['name']."</p>";
		    	echo "<p>年级：".$row['grade']."</p>";
		    	echo "<p>长号：".$row['long_phone']."</p>";
		        echo "<p>短号：".$row['short_phone']."</p>";
		    	echo "<p>部门：".$row['department']."</p>";
		    	echo "</div>";
		    	mysql_close($con);
		    	}
		    	 ?>
		    </div>
		</div>
	</body>
</html>