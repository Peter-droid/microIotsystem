<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>传感网目录</title>
	</head>
	<?php 
		    session_start();
		    $username = $_SESSION['user'];
		    $uid = $_SESSION['uid'];
			$con = mysqli_connect("localhost", "iotdb", "yTprtAspAFRs5cXC");
			if(!$con){
				die('Could not connect : '. mysqli_error());
			}
			mysqli_select_db($con, "iotdb");
			$handle = "SELECT * FROM net_info WHERE net_id = '$uid'";
			$result = mysqli_query($con, $handle) or die(mysqli_error($con));
			$row = mysqli_fetch_assoc($result);
			$nums = mysqli_num_rows($result);
		?>
	<body>
		<div class="common-info">
			<p>您好，
				<span><?php echo($username); ?></span>
				<span>, 今日日期：<?php echo(date("Y/m/d")); ?></span>
		</p>
		</div>
		<div class="net-info" >
			<p>
			<?php 
				if($nums == 0){
					echo("你还没有任何一个传感器网络！请建立");
				}
				else{
				    echo("<ol>");
					for($nums; $nums > 0; $nums--){
					    echo("<li>");
					    echo("<a href="">%s</a>", $row['net_name']);
					    echo("</li>\n");
					}
					echo("</ol>");
				}
			?>
			</p>

		</div>
		<div class="setup-net">
			<form action="setupNewNet.php" method="POST"> 
				<input type="submit" name="setup" value="建立新网络"> 
		</form>
		</div>
	</body>
</html>
