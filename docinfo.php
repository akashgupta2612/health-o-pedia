<?php

$con= mysqli_connect("localhost","root","","fi");




		$i=$_POST['name'];
	
			$a=$_POST['age'];
	
	
		$m=$_POST['gender'];
	

	
		$k=($_POST['disease']);
	
			$p=$_POST['pin'];
	
	
		$j=$_POST['email'];
	
		$l=$_POST['dob'];
	
	
		$add=$_POST['address'];
	

		$num=$_POST['number'];
	
	
	
		$doc=$_POST['doctor'];
		
		$_SESSION['docin']=$doc;
	
	
		$all=$_POST['allergies'];
	
		$loc=$_POST['pas'];
	
	




$o=getdate();
	$d=$o['year']."-".$o["mon"]."-".$o["mday"];
		


$to = 'root@localhost.com';
$subject = 'Someone just registered';
//$message = 'Hi Jane, will you marry me?'; 
$from = 'peterparker@email.com';
$senderName=" Your creation";
$senderEmail= "urcreation@gmail.com";
$headers = "From: " . $senderName . " <" . $senderEmail . ">";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";


$message="<p align='center' style='font-size='40px\;color:green'><b>new registration...</b>";


$message.="<p>patient name:<b>".$_POST['name']."</b></p>";
$message.="<p>age:<b>".$_POST['age']."</b></p>";
$message.="<p>sex:<b>".$_POST['gender']."</b></p>";
$message.="<p>address:<b>".$_POST['address']."</b></p>";
$message.="<p>pin:<b>".$_POST['pin']."</b></p>";
$message.="<p>email:<b>".$_POST['email']."</b></p>";
$message.="<p>contact number:<b>".$_POST['number']."</b></p>";
$message.="<p>disease to be diagnosed:<b>".$_POST['disease']."</b></p>";
$message.="<p>doctor selected:<b>".$_POST['doctor']."</b></p>";
$message.="<p>allergic to:<b>".$_POST['allergies']."</b></p>";
$message.="<p>location:<b>".$_POST['pas']."</b></p>";
$message.="<p>dob:<b>".$_POST['dob']."</b></p>";

$message.="</p>";





mail($to, $subject, $message,$headers);


 
// Sending email
if(mail($to, $subject, $message,$headers)){
   // echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}





	echo (mysqli_error($con));
	mysqli_query($con,"INSERT INTO users_info VALUES('$i','$a','$m','$add','$j','$num','$k','$doc','$all','$l')");
	echo (mysqli_error($con));







    $doctab=mysqli_query($con,"SELECT*from doc_det where doc_det.name='$doc'");
    $su=mysqli_fetch_array($doctab);



echo "<div id=\"myModal\" class=\"modal hide fade\" role=\"dialog\" style=\"height\:800px\;width:800px\;margin-left\:270px\;margin-top\:110px\;\">";
  echo "<div class=\"modal-dialog\">";

   
    echo "<div class=\"modal-content\">";
     
      echo "<div class=\"modal-body\" style=\"margin-top\:-150px\;margin-bottom\:50px\;\">";
        echo "<div align=\"center\"  style=\"margin-top\: 200px\; font-size\: 25px\;\">";
echo"		<table>";
			echo"<tr>hi!<br></tr>";
			echo"<tr><b><img src=\"haath.png\" height=\"35px\" width=\"35px\" > thank you</b>";
			echo"<td align=\"center\">for registering <br>we will try to provide the best service possible.<img src=\"smili.png\" height=\"35px\" width=\"35px\"></td></tr>";
		echo"</table>";
		
	echo"</div>";

      echo"</div>";
      
       echo" <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Dismiss</button>";
     
    echo"</div>";

  echo"</div>";
echo"</div>";




?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>healthcare world</title>
	<link rel="shortcut icon" href="heart-.ico"/>
    <link rel="stylesheet" href="pagecss.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

</head>
<body>
<header>




<h3 align="center" style="background-color: #00acfe;padding-bottom: 40px;padding-top: 40px;"><b>Health-o-Pedia</b></h3>
		<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark " style="margin-top: -15px;">
		<div >
		  <a class="navbar-brand go" href="page.php">Home</a>
		  </div>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active go">
		        <a class="nav-link" href="aboutus.htm">About Us <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item active go">
		        <a class="nav-link" href="team.htm">Team</a>
		      </li>
		      <li class="nav-item active go">
		        <a class="nav-link" href="contact.php">Contact Us</a>
		      </li>
		      <li class="nav-item active go">
		        <a class="nav-link" href="lrc.php">Learn</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
			  <button class="btn btn-outline-danger my-2 my-sm-0  but do"  data-toggle="modal" data-target="#modal" type="button" style="margin-right: 15px;">Signup</button>		      
		      <button class="btn btn-outline-success my-2 my-sm-0 do" type="button" data-toggle="modal" data-target="#mmodal" >Login</button>
		    </form>
		  </div>
		</nav>






 -->

	<h3 align="center" style="padding-top: 30px;margin-bottom: -40px; background-color: #343A40; margin-top: -10px;color:white;padding-bottom: 30px;" >choosen doctor</h3>


<div style="margin-top: 80px;margin-bottom: 10px; border:0px; border-color: white;" align="center">

<img src="doc.jpeg" align="center" height="200px" width="200px"><br><br>

<div align="center"><b class="text-muted" class="text-muted">name: </b><?php print($su['name']); ?></div><br>           
<div align="center"><b class="text-muted">age: </b><?php print($su['age']); ?></div><br>

<div align="center"><b class="text-muted">experience: </b><?php print($su['eperience']); ?>yrs</div><br>           
<div align="center"><b class="text-muted">speciality: </b><?php print($su['speciality']); ?></div><br>

<div align="center"><b class="text-muted">currently working at: </b><?php print($su['currently']); ?></div><br>           
<div align="center"><b class="text-muted">consultation fee: </b><?php print($su['fee']); ?> rupees</div><br>

<div align="center"><b class="text-muted">average respond time: </b><?php print($su['respond']); ?>hrs</div><br>  
<div align="center"><b class="text-muted">contact info: </b><?php print($su['email']); ?></div><br>           

        		</div>



<div align="center" style="margin-bottom: 10px;">
<a href="after_login.php"> <button type="submit" class="signupbtn btn-info round w-50" name="regbut"">Return</button></a>
</div>






<p style="background-color:#8e8585;color:black;margin-bottom: -10px;" align="center"><img src="copy.png" height="18px" width="18px" style="margin-right: 5px;"> jaypee institute of information technology</p>


  <script src="jquery-3.2.1.min"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script src="pagejs.js"></script>
	<script>
	// var e=document.querySelector("#myModal") 
	// 	e.on('hide.bs.modal', '#form2', function() {
	// 		this.reset();/* Act on the event */
	// 	});
</script>

</body>
</html>