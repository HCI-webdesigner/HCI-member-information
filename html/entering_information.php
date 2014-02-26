<html>
	<head>
		<title>录入数据库信息</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../css/entering_information.css" />
	</head>
	<body>
		<div class="content">
			<div class="meeting_room">
			    <h2>录入会议</h2>
				<form action="" method="post">
					<p>
					   会议室：<input type="text" placeholder="537" name="meeting_room" />
					</p>
					<p>
					   例会数：<input type="text" placeholder="第一次例会" name="meeting" />
				    </p>
				    <p>
		              <input type="submit" value="submit" name="submit"/>
				    </p>
				</form>
				<?php 
				include '../html/connect_member.php';
				if (isset($_POST['meeting_room'])&&isset($_POST['meeting'])) {
			       mysql_query("insert into meeting_information (meeting_room,meeting) values 
			       	('$_POST[meeting_room]','$_POST[meeting]')");
				}
				 ?>
				
			</div>
			
			<div class="member_information">
			    <h2>录入人员信息</h2>	
			    <form action="" method="post">
			    	<p>姓名：<input type="text" placeholder="张三" name="name" /></p>
			    	<p>年级：<input type="text" placeholder="11" name="grade" /></p>
			    	<p>长号：<input type="text" placeholder="18820000000" name="long_phone" /></p>
			    	<p>短号：<input type="text" placeholder="64555" name="short_phone" /></p>
			    	<p>部门：<input type="text" placeholder="前端" name="department" /></p>
			    	<p><input type="submit" value="submit" /></p>
			    </form>
			    <?php 
			    include '../html/connect_member.php';
			    if (isset($_POST['name']) && isset($_POST['grade']) && isset($_POST['long_phone']) && isset($_POST['department']) && isset($_POST['short_phone'])) {
			        if (($_POST['name']!=null && $_POST['grade']!=null && $_POST['long_phone']!=null)|| $_POST['short_phone']!=null) {
			    	    mysql_query("insert into member (name,grade,long_phone,short_phone,department) 
			    	    	values ('$_POST[name]','$_POST[grade]', '$_POST[long_phone]','$_POST[short_phone]','$_POST[department]')");
			    	    echo "insert into member (name,grade,long_phone,short_phone,department) 
			    	    	values ('$_POST[name]','$_POST[grade]', '$_POST[long_phone]','$_POST[short_phone]','$_POST[department]')";
			        }
			    }
			    mysql_close($con);
			     ?>
			</div>
			<div class="minister_information">
			    <h2>录入部长信息</h2>
				<form action="" method="post">
			    	<p>学号：<input type="text" placeholder="2011222222" name="student_ID"/></p>
			    	<p>部门：<input type="text" placeholder="前端" name="department" /></p>
			    	<p>姓名：<input type="text"placeholder="小王" name="m_name" /></p>
			    	<p>专业：<input type="text" placeholder="软工" name="major" /></p>
			    	<p>年级：<input type="text" placeholder="11" name="grade" /></p>
			    	<p>长号：<input type="text" placeholder="18820000000" name="long_phone" /></p>
			    	<p>短号：<input type="text" placeholder="6555" name="short_phone" /></p>
			    	<p><input type="submit" value="submit" /></p>
			    </form>
			    <?php 
			    include '../html/connect_member.php';
			    if (isset($_POST['student_ID']) && isset($_POST['department']) && isset($_POST['m_name']) && 
			   	isset($_POST['major']) && isset($_POST['grade'])&&isset($_POST['long_phone']) && isset($_POST['short_phone'])) {
			        if (($_POST['student_ID']!=null && $_POST['department']!=null && $_POST['m_name']!=null &&$_POST['major']!=null &&
			        	$_POST['grade']!=null && $_POST['long_phone']!=null)|| $_POST['short_phone']!=null) {
			    	    mysql_query("insert into minister_information (student_ID,department,name,major,grade,long_phone,short_phone) 
			    	    	values ('$_POST[student_ID]','$_POST[department]','$_POST[m_name]','$_POST[major]','$_POST[grade]',
			    	    		'$_POST[long_phone]','$_POST[short_phone]')");
			    	    echo "insert into minister_information (student_ID,department,name,major,grade,long_phone,short_phone) 
			    	    	values ('$_POST[student_ID]','$_POST[department]','$_POST[m_name]','$_POST[major]','$_POST[grade]',
			    	    		'$_POST[long_phone]','$_POST[short_phone]')";
			        }
			    }
			    mysql_close($con);
			     ?>
			</div>
		</div>
	</body>
</html>
