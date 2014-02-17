<html>
	<head>
		<title>会议历史记录</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../css/head.css">
		<link rel="stylesheet" href="../css/member.css" />
	</head>
	<body>
		<div class="all-content">
			<header>
			<?php include '../html/head.php' ?>
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
		    	//前端成员信息
		    	$result=mysql_query("select ID,name,grade,long_phone,
		    		short_phone,department,times from member where department='前端'");
		    	echo"<table cellspacing=\"0\">
		    		<caption>前端</caption>
		    		<tr>
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
		    		$result=mysql_query("select ID,name,grade,long_phone,
		    		short_phone,department,times from member where department='后台'");
		    		echo"<table cellspacing=\"0\">
		    		<caption>后台</caption>
		    		<tr>
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
		    		$result=mysql_query("select ID,name,grade,long_phone,
		    		short_phone,department,times from member where department='移动'");
		    		echo"<table cellspacing=\"0\">
		    		<caption>移动</caption>
		    		<tr>
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
		    		$result=mysql_query("select ID,name,grade,long_phone,
		    		short_phone,department,times from member where department='系统'");
		    		echo"<table cellspacing=\"0\">
		    		<caption>系统</caption>
		    		<tr>
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
		    		echo "</table>";		    	
		    	 ?>
		    </div>
		    <div class="search">
		    	<form action="" method="post">
		    		<input type="text" placeholder="输入搜索内容  如张三" class="text" name="name">
		    		<input type="submit" value="GO" class="submit">
		    	</form>
		    	<?php 
		    	$con=@mysql_connect("localhost","root","root");
		    	if (!$con) {
		    		die('Could not connect:'. mysql_error());
		    	}
		    	if (isset($_POST['name'])) {
		    		$name=$_POST['name'];
		    	mysql_select_db("hcichart",$con);
		    	$result=mysql_query("select name,grade,department,times
		    		from member where name='$name'");
		    	$row=mysql_fetch_array($result);
		    	echo "<div class=\"search_member\">";
		    	echo "<p>姓名：".$row['name']."</p>";
		    	echo "<p>年级：".$row['grade']."</p>";
		    	echo "<p>部门：".$row['department']."</p>";
		    	echo "<p>次数：".$row['times']."</p>";
		    	echo "</div>";
		    	}
		    	mysql_close($con);
		    	 ?>
		    </div>
		</div>
	</body>
</html>