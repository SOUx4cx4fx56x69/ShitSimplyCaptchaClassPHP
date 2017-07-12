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
	body{
		text-align:center;
	}form input[type="textarea"]{
		width:220px;
	}form input[type="textarea"]:focus{
		border:2px groove aqua;
	}
	</style>
	<script>
	function changeCaptcha(){
		var captcha = document.getElementById("captcha");
		captcha.src="test_get.php";
	}
	</script>
</head>
<body>
<form action="test_page.php" method=GET>
<img id=captcha src="test_get.php" alt="captcha"><br>
<input type="textarea" name=captcha placeholder="Write what you see on picture."><br>
<input type=submit value=check>
</form>
<button onclick=changeCaptcha()>unreadable</button>

</body>
</html>
