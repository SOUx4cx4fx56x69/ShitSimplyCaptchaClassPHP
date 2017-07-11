<?php
session_start();
if(isset($_GET['captcha'])){
 if(hash("sha256",$_GET['captcha']) == $_SESSION['SCAPTCHA'])print("<script>alert('Equal')</script>");	
 else print("<script>alert('do not equal')</script>");	
}

?>
<!doctype html>
<html>
<head>
	<title>Check shitcode</title>
	<style>
		/*One shitcodes one love*/
	form{
		text-align:center;
	}form input[type="textarea"]{
		width:220px;
	}form input[type="textarea"]:focus{
		border:2px groove aqua;
	}
	</style>
</head>
<body>
<form action="test_page.php" method=GET>
<img src="test_get.php" alt="captcha"><br>
<input type="textarea" name=captcha placeholder="Write what you see on picture."><br>
<input type=submit value=check>
</form>
</body>
</html>
