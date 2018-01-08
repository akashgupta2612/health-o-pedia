<?php

// 	$i=$_POST['name'];
// 	//$p=strtolower($_POST['name']);
// 	$a=$_POST['age'];
// 	$m=$_POST['gender'];
// 	$add=$_POST['address'];
// 	$j=$_POST['email'];
// $num=$_POST['number'];
// 	$k=($_POST['disease']);
// 	$doc=$_POST['doctor'];
// 	$all=$_POST['allergies'];

// 	$l=$_POST['dob'];




	// date_default_timezone_set('Asia/Kolkata');
	// $o=getdate();
	// $d=$o['year']."-".$o["mon"]."-".$o["mday"];
	// $t=$o['hours'].":".$o["minutes"].":".$o["seconds"];
	// //echo $t;
	//echo ("name: ".$i);
	//echo ("<br>");
	//echo ("email: ".$j."<br><br>");
	//print_r($_POST);
	$con= mysqli_connect("localhost","root","","fi");
	if($con){
		echo "connected";
	}
	echo (mysqli_error($con));
	// mysqli_query($con,"INSERT INTO users_info VALUES('$i','$a','$m','$add','$j','$num','$k','$doc','$all','$l')");
	// echo (mysqli_error($con));
	// echo "<script type=\"javascript\">";
	// echo "alert(\"thank you <br> your response has been submitted with us\")";
	// echo "<\/script>";
	//mysqli_query($con,"SELECT * FROM info");
	//$p=mysql_query("SELECT*FROM info WHERE name="Aman Parmar"");
	//mysql_fetch_row($p);
echo "hello";
// $query=mysqli_query($con,"SELECT*FROM users info WHERE password=\"shivi\"");
// 	$e=mysqli_fetch_row($query);
// printf("<br>welcome %s",$e[0]);

session_name("register");
session_start();
		
		$que=mysqli_query($con,"SELECT*FROM users_info,signup WHERE users_info.email=signup.email and users_info.name='sameer'");
		$num=mysqli_num_rows($que);
		echo "<br>".$num;
		echo "hi aman";

		$x=mysqli_fetch_array($que[0]);
		printf("%s",$x[0]);


		// for ($i=0; $i < $num; $i++) { 
		// 	$x=mysqli_fetch_row($que[$i])
		// 	for ($j=0; $j <18 ; $j++) { 
		// 		print($que[$i][$j]);
		// 	}
		// }

	$_SESSION['name']=$i;

	$_SESSION['age']=$a;

	$_SESSION['gender']=$m;

	$_SESSION['address']=$add;
	$_SESSION['email']=$j;
$_SESSION['number']=$num;

	$_SESSION['disease']=$k;

	$_SESSION['doctors']=$doc;

	$_SESSION['allergies']=$all;
	$_SESSION['date of birth']=$l;


// 	$logname=$_POST['logname'];
// 	echo"<br>".$logname;
// 	$elogname=strtolower($logname);
// 	echo"<br>".$elogname;
// 	$logpass=$_POST['logpass'];
// 	$que=mysqli_query($con,"SELECT name,password FROM signup WHERE lname='".$elogname."'");
// 	$num=mysqli_num_rows($que);
// 	echo "<br>".$num;
// 	echo "hi aman";
// 	if($num!=0)
// 	{	$_SESSION['message']="sorry username already exists";
// 		echo $_SESSION['message'];
// 	}

// // echo "                 the session is  ".session_id();
// // echo strtolower($_SESSION['username']);
// header('Location: trying_popup.php');
// 	exit;


?>
