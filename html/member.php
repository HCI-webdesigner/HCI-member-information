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
		    	include '../html/connect_member.php';
		    	//13级成员信息
		    	$result=mysql_query("select ID,name,grade,long_phone,
		    		short_phone,department from member where grade=13");
		    	echo "<table cellspacing=\"0\">
		    		<caption>13级成员信息</caption>";
		    		include '../html/member_th.php';	
		    	echo "</table>";
                //12级成员信息
		    	$result=mysql_query("select ID,name,grade,long_phone,
		    		short_phone,department from member where grade=12");
		    	echo "<table cellspacing=\"0\">
		    		<caption>12级成员信息</caption>";
		    		include '../html/member_th.php';
		    	echo "</table>";
                //11级成员信息
                $result=mysql_query("select ID,name,grade,long_phone,
		    		short_phone,department from member where grade=11");
		    	echo "<table cellspacing=\"0\">
		    		<caption>11级成员信息</caption>";
		    		include '../html/member_th.php';
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
		    	include '../html/connect_member.php';
		    	if(isset($_POST['name'])) {
		    		$name=$_POST['name'];	
		    	$result=mysql_query("select name,grade,long_phone,short_phone,department
		    		from member where name='$name'");
		    	if (!$result) {
		    		echo "Could not run query: ".mysql_error();
		    		exit();
		    	}
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