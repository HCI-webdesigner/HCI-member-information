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
				    	学号：<input type="text" placeholder="201130720228" name="student-number">
				    </p>
				    <div class="commit">
				        <input type="submit" value="submit" >
				        <input type="reset" value="reset">
				    </div>
				</form>

				
				<?php //插入还没搞定
				$con=mysql_connect("localhost","root","root");
				if (!$con) {
					die('Could not connect: '.mysql_error());
				}	
				if (isset($_POST['name'])) {
					$name=$_POST['name'];
					mysql_select_db("hcichart",$con);
				    mysql_query("update times set times++ where name='$name'");
				    mysql_close($con);    
				}
				
				 ?>
			</div>
			<div class="left-side">
			    <h2>各年级人员名单</h2>
			    <?php 
			    $con=mysql_connect("localhost","root","root");
			    if (!$con) {
			    	die('Could not connect: '.mysql_error());
			    }
			    mysql_select_db("hcichart",$con);
			    $result=mysql_query("select name,short_phone from member where grade=13");
			    if (!$result) {
		    		echo "Could not run query: ".mysql_error();
		    		exit();
		    	}
		    	echo "<div class=\"grade\">";
		    	echo "<h2>13级</h2>";
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
		    	echo "</div>";
		    	$result=mysql_query("select name,short_phone from member where grade=12");
			    if (!$result) {
		    		echo "Could not run query: ".mysql_error();
		    		exit();
		    	}
		    	echo "<div class=\"grade\">";
		    	echo "<h2>12级</h2>";
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
		    	echo "</div>";
		    	$result=mysql_query("select name,short_phone from member where grade=11");
			    if (!$result) {
		    		echo "Could not run query: ".mysql_error();
		    		exit();
		    	}
		    	echo "<div class=\"grade\">";
		    	echo "<h2>11级</h2>";
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
		    	echo "</div>";
		    	mysql_close($con);
			     ?>
			</div>
			<div class="right-side">
				<h2>已签到人员</h2>
				<?php
				$name=array(); 
				$k=0;
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
				$con=mysql_connect("localhost","root","root");
				if (!$con) {
				 	die("Could not connect: ".mysql_error());
				}
				mysql_select_db("hcichart",$con);
				$result=mysql_query("select name,department,times from member where department='前端' order by times desc ");
				if (!$result) {
				 	echo "Could not run query: ".mysql_error();
				 	exit();
				} 
				echo "<div class=\"grade\">";
		    	echo "<h2>前端</h2>";
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
		    	echo "</div>";

		    	$result=mysql_query("select name,department,times from member where department='后台' order by times desc ");
				if (!$result) {
				 	echo "Could not run query: ".mysql_error();
				 	exit();
				} 
				echo "<div class=\"grade\">";
		    	echo "<h2>后台</h2>";
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
		    	echo "</div>";

		    	$result=mysql_query("select name,department,times from member where department='移动' order by times desc ");
				if (!$result) {
				 	echo "Could not run query: ".mysql_error();
				 	exit();
				} 
				echo "<div class=\"grade\">";
		    	echo "<h2>移动</h2>";
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
		    	echo "</div>";
		    	$result=mysql_query("select name,department,times from member where department='系统' order by times desc ");
				if (!$result) {
				 	echo "Could not run query: ".mysql_error();
				 	exit();
				} 
				echo "<div class=\"grade\">";
		    	echo "<h2>系统</h2>";
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
		    	echo "</div>";
		    	mysql_close($con);
				 ?>
			</div>
		</div>
	</body>
</html>
