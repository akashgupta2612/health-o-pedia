<?php

	$i=$_POST['name'];
	$p=strtolower($_POST['name']);
	$j=$_POST['email'];

	$k=($_POST['pas']);

	$l=$_POST['dob'];
	$m=$_POST['gender'];



	date_default_timezone_set('Asia/Kolkata');
	$o=getdate();
	$d=$o['year']."-".$o["mon"]."-".$o["mday"];
	$t=$o['hours'].":".$o["minutes"].":".$o["seconds"];
	//echo $t;
	//echo ("name: ".$i);
	//echo ("<br>");k
	//echo ("email: ".$j."<br><br>");
	//print_r($_POST);
	$con= mysqli_connect("localhost","root","","fi");
	if($con){
		echo "connected";
	}
	echo (mysqli_error($con));
	mysqli_query($con,"INSERT INTO signup VALUES('$i','$j','$k','$l','$m','$d','$t','$p')");
	echo (mysqli_error($con));
	// echo "<script type=\"javascript\">";
	// echo "alert(\"thank you <br> your response has been submitted with us\")";
	// echo "<\/script>";
	//mysqli_query($con,"SELECT * FROM info");
	//$p=mysql_query("SELECT*FROM info WHERE name="Aman Parmar"");
	//mysql_fetch_row($p);
// echo "hello";
// $query=mysqli_query($con,"SELECT*FROM signup WHERE password=\"shivi\"");
// 	$e=mysqli_fetch_row($query);
// printf("<br>welcome %s",$e[0]);

session_name("signup");
session_start();
echo session_id();

	$_SESSION['username']=$i;

	$_SESSION['email']=$j;

	$_SESSION['pass']=$k;

	$_SESSION['dob']=$l;
	$_SESSION['gender']=$m;

	$_SESSION['sign']=$_POST['test2'];

	// $logname=$_POST['logname'];
	// echo"<br>".$logname;
	// $elogname=strtolower($logname);
	// echo"<br>".$elogname;
	// $logpass=$_POST['logpass'];
	// $que=mysqli_query($con,"SELECT name,password FROM signup WHERE lname='".$elogname."'");
	// $num=mysqli_num_rows($que);
	// echo "<br>".$num;
	// echo "hi aman";
	// if($num!=0)
	// {	$_SESSION['message']="sorry username already exists";
	// 	echo $_SESSION['message'];
	// }

// echo "                 the session is  ".session_id();
// echo strtolower($_SESSION['username']);
//session_write_close();
header('Location: trying_popup.php');
	die();


?>
