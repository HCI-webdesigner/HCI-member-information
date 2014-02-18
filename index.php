<html>
	<head>
		<meta charset="utf-8" />
		<title>HCI签到管理</title>
		<link rel="stylesheet" href="css/head.css">
		<link rel="stylesheet" href="css/index.css" />
	</head>
	<body>
		<div class="all-content">
			<header>
			    <?php include 'html/head.php'; ?>
			</header>
			<div class="middle">
				<div class="middle-metting">
				    <h2>会议室:</h2>
				</div>
				<div class="middle-login">
					<h2>登记处</h2>
				</div>
				<form action="" method="post">
				    <p class="name">
				    	姓名：<input type="text" placeholder="张三" name="name">
				    </p>
				    <p class="student-number">
				    	学号：<input type="text" placeholder="只写姓名即可" name="student-number">
				    </p>
				    <div class="commit">
				        <input type="submit" value="submit" >
				        <input type="reset" value="reset">
				    </div>
				</form>

				
				<?php 
				include 'html/connect_member.php';	
				if (isset($_POST['name'])) {
					$name=$_POST['name'];
					$result=mysql_query("select times from member where name='$name'");
					$row=mysql_fetch_array($result);
					$new_times=$row['times']+1;
				    mysql_query("update member set times='$new_times' where name='$name'");
				    mysql_close($con);    
				}		
				 ?>
			</div>
			<div class="left-side">
			    <h2>各年级人员名单</h2>
			    <?php 
			    include 'html/connect_member.php';
			    //13级
			    $result=mysql_query("select name,short_phone from member where grade=13");
			    if (!$result) {
		    		echo "Could not run query: ".mysql_error();
		    		exit();
		    	}
		    	echo "<div class=\"grade\">";
		    	echo "<h2>13级</h2>";
		    	include 'html/grade_information.php';
		    	echo "</div>";
		    	//12级
		    	$result=mysql_query("select name,short_phone from member where grade=12");
			    if (!$result) {
		    		echo "Could not run query: ".mysql_error();
		    		exit();
		    	}
		    	echo "<div class=\"grade\">";
		    	echo "<h2>12级</h2>";
		    	include 'html/grade_information.php';
		    	echo "</div>";
		    	//11级
		    	$result=mysql_query("select name,short_phone from member where grade=11");
			    if (!$result) {
		    		echo "Could not run query: ".mysql_error();
		    		exit();
		    	}
		    	echo "<div class=\"grade\">";
		    	echo "<h2>11级</h2>";
		    	include 'html/grade_information.php';
		    	echo "</div>";
		    	mysql_close($con);
			     ?>
			</div>
			<div class="right-side">
				<h2>已签到人员</h2>
				<?php
				// $name=array(); 
				// $k=0;
				//怎样实现数组接受完所有的输入，而后一个一个遍历
				// while (isset($_POST['name'])) {
				// 	$name[$k]=$_POST['name'];
				// 	$k++;
				// }
				// for ($i=0; $i <$k; $i++) { 
				// 	echo $name[$i];
				// }
				 ?>
				<h2>签到历史</h2>
				<?php
				include 'html/connect_member.php';
				//前端
				$result=mysql_query("select name,department,times from member where department='前端' order by times desc ");
				if (!$result) {
				 	echo "Could not run query: ".mysql_error();
				 	exit();
				} 
				echo "<div class=\"grade\">";
		    	echo "<h2>前端</h2>";
		    	include 'html/department_information.php';
		    	echo "</div>";
                //后台
		    	$result=mysql_query("select name,department,times from member where department='后台' order by times desc ");
				if (!$result) {
				 	echo "Could not run query: ".mysql_error();
				 	exit();
				} 
				echo "<div class=\"grade\">";
		    	echo "<h2>后台</h2>";
		    	include 'html/department_information.php';
		    	echo "</div>";
                //移动
		    	$result=mysql_query("select name,department,times from member where department='移动' order by times desc ");
				if (!$result) {
				 	echo "Could not run query: ".mysql_error();
				 	exit();
				} 
				echo "<div class=\"grade\">";
		    	echo "<h2>移动</h2>";
		    	include 'html/department_information.php';
		    	echo "</div>";
		    	//系统
		    	$result=mysql_query("select name,department,times from member where department='系统' order by times desc ");
				if (!$result) {
				 	echo "Could not run query: ".mysql_error();
				 	exit();
				} 
				echo "<div class=\"grade\">";
		    	echo "<h2>系统</h2>";
		    	include 'html/department_information.php';
		    	echo "</div>";
		    	mysql_close($con);
				 ?>
			</div>
		</div>
	</body>
</html>
