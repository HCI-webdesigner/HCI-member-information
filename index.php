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
				<form action="" method="gets">
				    <p class="name">
				    	姓名：<input type="text" placeholder="张三">
				    </p>
				    <p class="student-number">
				    	学号：<input type="text" placeholder="201130720228">
				    </p>
				    <div class="commit">
				        <input type="submit" value="submit" >
				        <input type="reset" value="reset">
				    </div>
				</form>
			</div>
			<div class="left-side">
			    <h2>各年级人员名单</h2>
			    <!-- <table>
			    	<caption>HCI重要人物</caption>
			    	<tr>
			    		<td>办公室主任：王海英</td>
			    	</tr>
			    	<tr>
		                <td>办公室负责人：叶志良</td>
			    	</tr>
			    	<tr>
			    		<td>移动开发部长：黄旭辉</td>
			    	</tr>
			    	<tr>
			    		<td>系统测试部长：邱传旭</td>
			    	</tr>
			    	<tr>
			    		<td>后台开发部长：钟煜</td>
			    	</tr>
			    	<tr>
			    		<td>前端开发部长：方思霓 严思雯</td>
			    	</tr>
			    </table> -->
				<table >
					<caption>13级</caption>
					<tr>
						<td>张三小(62000)</td>
						<td>whylzm(6465181)</td>
					</tr>
					<tr>
						<td>xiaoli(678678)</td>
						<td>xiaowang(67800)</td>
					</tr>
					<tr>
						<td><a href="html/member.php">read more >></a></td>
					</tr>
				</table>
				<table>
					<caption>12级</caption>
					<tr>
						<td>womou(1234) limou(345566)</td>
					</tr>
					<tr>
						<td><a href="html/member.php">read more >></a></td>
					</tr>
				</table>
				<table>
					<caption>11级</caption>
					<tr>
						<td>wangmo(12345)limou(26278)</td>
					</tr>
					<tr>
						<td><a href="html/member.php">read more >></a></td>
					</tr>
				</table>
			</div>
			<div class="right-side">
				<h2>已签到人员</h2>
				<table>
					<tr>
						<td>小李</td>
						<td>夏丽</td>
						<td>小李</td>
						<td>夏丽</td>
						<td>小李</td>
						<td>夏丽</td>
					</tr>
					<tr>
						<td>小李</td>
						<td>夏丽</td>
						<td>小李</td>
						<td>夏丽</td>
						<td>小李</td>
						<td>夏丽</td>
					</tr>
				</table>
				<div class="history-memory">
				<h2>签到历史</h2>
				<table>
					<caption>前端</caption>
					<tr>
						<td>小李（2）</td>
						<td>小王(3)</td>
						<td>小兰（5）</td>
					</tr>
					<tr>
						<td colspan="2"><a href="html/history.php">read more >></a></td>
					</tr>
				</table>
				<table>
					<caption>后台</caption>
					<tr>
						<td>小康(3)</td>
						<td>小牛(4)</td>
						<td>小康(2)</td>
					</tr>
					<tr>
						<td colspan="2"><a href="html/history.php">read more >></a></td>
					</tr>
				</table>
				<table>
					<caption>移动</caption>
					<tr>
						<td>小白(2)</td>
						<td>小妹(2)</td>
						<td>小白(2)</td>
					</tr>
					<tr>
						<td colspan="2"><a href="html/history.php">read more >></a></td>
					</tr>
				</table>
				<table>
					<caption>系统</caption>
					<tr>
						<td>小猪(2)</td>
						<td>小屋(2)</td>
						<td>小猪(2)</td>
					</tr>
					<tr>
						<td colspan="2"><a href="html/history.php">read more >></a></td>
					</tr>
				</table>
				</div>
			</div>
		</div>
	</body>
</html>
