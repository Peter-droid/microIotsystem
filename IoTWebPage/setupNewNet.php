<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>建立新网络</title>
	</head>
	<body>
    <?php 
        session_start();

    ?>
    <div class="net-info">
        <form action="/php/setupAction.php">
            <input type="text" placehloder="网络名称" name="name" >
            <input type="submit" value="创建">
        </form>
    </div>
	</body>
</html>