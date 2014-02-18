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
		    	include '../html/connect_member.php';
		    	//前端成员信息
		    	$result=mysql_query("select ID,name,grade,long_phone,
		    		short_phone,department,times from member where department='前端'");
		    	echo"<table cellspacing=\"0\">
		    		<caption>前端</caption>";
		    		include '../html/history_th.php';
		    		echo "</table>";
		    		$result=mysql_query("select ID,name,grade,long_phone,
		    		short_phone,department,times from member where department='后台'");
		    		echo"<table cellspacing=\"0\">
		    		<caption>后台</caption>";
		    		include '../html/history_th.php';
		    		echo "</table>";
		    		$result=mysql_query("select ID,name,grade,long_phone,
		    		short_phone,department,times from member where department='移动'");
		    		echo"<table cellspacing=\"0\">
		    		<caption>移动</caption>";
		    		include '../html/history_th.php';
		    		echo "</table>";
		    		$result=mysql_query("select ID,name,grade,long_phone,
		    		short_phone,department,times from member where department='系统'");
		    		echo"<table cellspacing=\"0\">
		    		<caption>系统</caption>";
		    		include '../html/history_th.php';
		    		echo "</table>";		    	
		    	 ?>
		    </div>
		    <div class="search">
		    	<form action="" method="post">
		    		<input type="text" placeholder="输入搜索内容  如张三" class="text" name="name">
		    		<input type="submit" value="GO" class="submit">
		    	</form>
		    	<?php 
		    	include '../html/connect_member.php';
		    	if (isset($_POST['name'])) {
		    		$name=$_POST['name'];
		    	$result=mysql_query("select name,grade,department,times
		    		from member where name='$name'");
		    	if (!$result) {
		    		echo "Could not run query: ".mysql_error();
		    		exit();
		    	}
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