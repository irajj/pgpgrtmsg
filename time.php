<?php			
	//variable for store msfg and username
	$user = "";
	$grtmsg ="";
	//set the current timezone as it here i set the timezone of asia
	date_default_timezone_set("Asia/Kolkata");	
	//store current time
	$ctime = date("H:i:s a");	
	echo  "<font face='Comic sans MS' size='6' color='red'>" . "Current time is =>  "  . date("h : i : s a ") ."</font>" ;		
	//PTR-: time is 24 hours
	$time = date("H");	
	//echo " Current time is  " . "<b>" .$ctime . "</b>";
	//store username
	
	//greeting msg reckoning
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{	
	
		echo "<BR>";
		//this msg for good morning 12>=
		if($time >= 12)
		{
			$grtmsg = "Good morning ";
		}
	 //this msg for good afternoon 12> <4
		else if($time > 12 && $time < 4)
		{
			$grtmsg = "Good afternoon ";
		}
	 //this msg for good evening 4>= <7
		else if($time >= 4 && $time <7)
		{
			$grtmsg = "Good evening ";
		}
	 //this msg for good night 7>
		else
		{
			$grtmsg = "Good night";
		}	 	
		if(isset($_POST["submit"]))
	{
		$user = $_POST["un"];
	}
		echo "Hello " . "<BR>" . $grtmsg . "<BR>"  . $user ;
	}	
?>