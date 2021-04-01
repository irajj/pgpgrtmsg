
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>php greeting message</title>
	<!--internal css-->
	<style rel="stylesheet" type="text/css">
		@font-face
		{
			font-family:clock;
			src: url(./font/digital-7.ttf);
		}
		#time
		{
			font-family:clock;
		}
		p
		{
			font-weight :normal ;
		}
		body
		{
			background:linear-gradient(90deg,rgb(4 192 236 / 60%),rgb(0 149 255 / 103%));
		}
		.box
		{
			height:70%;
			width:70%;
			
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			margin:200px 180px;
		}
		.box input[type=text]
		{
			border:none;
			outline:none;
			background:none;
			border-bottom:1px solid black;
			margin:10px 0;
		}
		
	

	</style>
	<script src="./jquery-3.5.1.js"></script>
	<!--<script src="./pra2.1.js"></script>-->
	<script>
	$(document).ready(function(){
	setInterval(function(){
		$('#time').load('time.php')
	},1000);

});
	</script>
</head>
<body>
<form action="" method="POST">

		<div class="grt">
		<?php			
	//variable for store msfg and username
	$user = "";
	$grtmsg ="";
	//set the current timezone as it here i set the timezone of asia
	date_default_timezone_set("Asia/Kolkata");	
	//store current time	
	$time = date("H");	
	
	
	echo "your greeting msg will print here";
	
	
	
	//greeting msg reckoning
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{		
		echo "<BR>";
		//this msg for good morning 12>=
		if($time < 12)
		{
			$grtmsg = "Good morning";
		}
	 //this msg for good afternoon 12> <4
		else if($time >= 12 && $time < 17)
		{
			$grtmsg = "Good afternoon ";
		}
	 //this msg for good evening 4>= <7
		else if($time >= 17 && $time <19)
		{
			$grtmsg = "Good evening ";
		}
	 //this msg for good night 7>
		else if($time >= 19)
		{
			$grtmsg = "Good night";
		}	 	
		if(isset($_POST['submit']))
		{
			$user = $_POST["un"];
			if(empty($user))
			{
				echo "<script>alert('please enter user name')</script>";
			}
		}
		
		
		
		if(!empty($user))
		{
		if(isset($_POST['submit']))
		{
			$user = $_POST["un"];
		}
		echo "Hello " . "<BR>" . $grtmsg . "<BR>"  . $user ;	
		}
		
		
	}	
?>
		</div>
	<div class="box">
		<div id="time">
			<p>
			00:00:00 PM
			</p>
		</div>
		please Enter Your name
		<input type="text" name="un" id="un">
		<input type="submit" value="submit" name="submit">
	</div>
	</form>	
</body>
</html>
