<?php
session_name('login');
session_start();

	$ii=$_POST['logname'];
	//$p=strtolower($_POST['name']);

	$kk=($_POST['logpass']);

 $_SESSION['ps']=$kk;

$_SESSION['em']=$ii;

$con= mysqli_connect("localhost","root","","fi");


// 	$num=mysqli_num_rows($q);
// 	echo $num;
// 	if ($num=1) {
// 		$value=mysqli_query($con,"SELECT*from signup,users_info where signup.name='$ii' and signup.pass='$kk' and signup.email=users_info.email");
// 		echo"sameer selected";
// 			$ele=mysqli_num_fields($value);
// 			echo $ele;
// $row=mysqli_fetch_array($value);

// while ($ro = mysqli_fetch_array($value)) {
// 	echo $ro['tosub'],$ro['age'];
// 	echo"<br>";
// }







$_SESSION['but']=$_POST['test'];



	
if(isset($_POST['test']))
{
	// $value=$_POST['logname'];
	// $pass=$_POST['logpass'];
	$q=mysqli_query($con,"SELECT email,pass FROM signup WHERE email='$ii' AND pass='$kk'");

$num=mysqli_num_rows($q);

	if($num>=1)
	{
		if (isset($_POST['remember'])) {
			
			setcookie('hop',$ii,time()+7*24*60*60);
		//	echo"cookie is set";
			
 			header('Location: after_login.php');
		}
	}
	else
	{
		echo "cna treturn";
	}
	



}




















	// date_default_timezone_set('Asia/Kolkata');
	// $o=getdate();
	// $d=$o['year']."-".$o["mon"]."-".$o["mday"];
	// $t=$o['hours'].":".$o["minutes"].":".$o["seconds"];
	//echo $t;
	//echo ("name: ".$i);
	//echo ("<br>");
	//echo ("email: ".$j."<br><br>");
	//print_r($_POST);
	
// echo "<br>";
// 			if ($row) echo 'set';
// 			else echo 'not set';

// echo "<br>";
// echo $row('email');
// 			for ($jj=0; $jj <$ele ; $jj++) { 
// 				//echo $row[][$jj];
// 				echo "<br>";
// 			}



	// 	header('Location: trying_popup.php');
	// exit;
		
		// echo "<script type=\"javascript\">";
	// echo "alert(\"thank you <br> your response has been submitted with us\")";
	// echo "<\/script>";
	//mysqli_query($con,"SELECT * FROM info");
	//$p=mysql_query("SELECT*FROM info WHERE name="Aman Parmar"");


	//mysql_fetch_row($p);

// $query=mysqli_query($con,"SELECT*FROM signup WHERE password=\"shivi\"");
// 	$e=mysqli_fetch_row($query);
// printf("<br>welcome %s",$e[0]);







// session_name("signup");
// session_start();


// 	$_SESSION['username']=$i;

// 	$_SESSION['email']=$j;

// 	$_SESSION['pass']=$k;

// 	$_SESSION['dob']=$l;
// 	$_SESSION['gender']=$m;











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




// header('Location: trying_popup.php');
// 	exit;



?>
