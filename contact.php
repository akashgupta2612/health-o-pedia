

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


	<?php
if (isset($_POST['respd'])) {
	
echo "<div id='myModal' class='modal hide fade' role='dialog' style='height:800px;width:800px;margin-left:270px;margin-top:110px;'>";
  echo "<div class='modal-dialog'>";

    
    echo "<div class='modal-content'>";
     
      echo "<div class='modal-body' style='margin-top:-150px;margin-bottom:50px;'>";
        echo "<div align='center'  style='margin-top: 200px; font-size: 25px;'>";
    echo "<table>";
     
      echo "<tr><b><img src='haath.png' height='35px' width='35px' >thank you</b>";
      echo "<td align='center'>your response has been submitted<img src='smili.png' height='35px' width='35px'></td></tr>";
    echo "</table>";
    
  echo "</div>";

      echo "</div>";
      
        echo "<button type='button' class='btn btn-success' data-dismiss='modal'>dismiss</button>";
     
    echo "</div>";

  echo "</div>";
echo "</div>";


}
?>
<header>
	<h3 align="center" style="background-color: #00acfe;padding-bottom: 40px;padding-top: 40px;"><b>Health-o-Pedia</b></h3>

		<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-top: -15px;">
		 <div class="go">
		  <a class="navbar-brand" href="page.php">home</a>
		  </div>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active go">
		        <a class="nav-link" href="aboutus.htm">about us <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item active go">
		        <a class="nav-link" href="team.htm">team</a>
		      </li>
		      <li class="nav-item active go">
		        <a class="nav-link" href="#">conatct us</a>
		      </li>
		      <li class="nav-item active go">
		        <a class="nav-link" href="lrc.php">Learn</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		  </div>
		</nav>
<h3 align="center" style="padding-top: 40px;margin-bottom: -40px;" >Developed By</h3>
		<div class="i">

			
				
					<img src="anjali.jpg" name="click to know more" tabindex="1" alt="anjali sharma" class="ll" data-toggle="popover" data-class="po"  title="<a href='https://www.facebook.com/cutestuff.me'>Anjali Sharma
					</a>"  data-placement="bottom" data-trigger="focus" data-content="instagram account:<a href='https://www.instagram.com/anjali0801/?hl=en'> anjali0801</a>    <br>  email: <br>anjuanjisharma0801@gmail.com">
					
			
			
			
			
				<img src="akash.jpg" alt="akash gupta" class="ll" tabindex="2" title=" <a href='https://www.facebook.com/akash.gupta.2681'>Akash Gupta</a>" data-toggle="popover" data-class="po"
				  data-trigger="focus"  data-placement="bottom" data-content="instagram account:<a href='https://www.instagram.com/i_clicked_it/?hl=en'> i_clicked_it</a> <br>  email: <br> akashguptastar@gmail.com" >
				
			

			
			
				<img src="aman.jpg" alt="aman parmar" class="ll" tabindex="3" title="<a href='https://www.facebook.com/aman.parmar.142035'>Aman Parmar 
				</a>" data-toggle="popover" data-class="po" data-trigger="focus"   data-placement="bottom" data-content="instagram account:<a href='https://www.instagram.com/aman.parmar17/?hl=en'>aman.parmar17</a>  <br>  email:<br> aman.parmar17@gmail.com">
				
			
		</div>

<div align="center">

		<h4 class="padd" style="padding-top: 150px">Mailing Address: </h4><br><br>
		<p style="font-size: 20px;">Jaypee Institute of Information Technology<br>A-10, industrial area<br>sector 62, Noida</p><br><br>
		<h4>Email address:</h4>
		<br>
		<a href="#"  style="font-size: 20px;">aman.parmar17@gmail.com</a><br><br><br>
		<h4>24x7 customer helpline</h4>
		<br>
		<p  style="font-size: 20px;">1860-xxx-59xx</p><br>
</div>
		<br><br>
		<!-- <div id="maps"></div> -->
<h3 align="center" class="heading">We Care About YOU...<div><img src="para.jpeg" height="30px" width="30px"></div></h3>
	<form action="contact.php"  method='post' class="foz">
	<div >
		<input type="text" class="arr"  size="50px" align="center" name="fname" placeholder="your name" required style="width:785px;border-top:0px;border-left: 0px;
	border-right: 0px;outline: none !important;"><br><br><br>
		</div>
		<div><input type="email" class="arr"  size="50px" align="center" name="email" placeholder="email" required style="width:785px;border-top:0px;border-left: 0px;
	border-right: 0px;outline: none !important;"><br></div><br><br>
		<div><div><input type="text" class="arr"  size="50px" align="center" name="suggest" placeholder="suggestion" required style="width:785px;border-top:0px;border-left: 0px;
	border-right: 0px;outline: none !important;"><br></div><br><br>
		<div><textarea name="comment" id="lk" cols="110" rows="7" placeholder="type your comment here"></textarea><br></div><br><br>
		<input type="submit" id="form_submit" value="submit response" class="btn-warning" name="respd" style="margin-bottom: 30px;width:785px;">
	</form>
	
</div>

	<p style="background-color:#8e8585;color:black;margin-bottom: -10px;" align="center"><img src="copy.png" height="18px" width="18px" style="margin-right: 5px;"> jaypee institute of information technology</p>

	
<?php

if (isset($_POST['respd'])) {
	$i=$_POST['fname'];


	$j=$_POST['email'];
	date_default_timezone_set('Asia/Kolkata');

	$o=getdate();
	$d=$o['year']."-".$o["mon"]."-".$o["mday"];
	$t=$o['hours'].":".$o["minutes"].":".$o["seconds"];
	
$sug=$_POST['suggest'];
$com=$_POST['comment'];

	//print_r($_POST);
	$con= mysqli_connect("localhost","root","","fi");
	if($con){
		//echo "connected";
	}
	echo (mysqli_error($con));
	mysqli_query($con,"INSERT INTO info VALUES('$i','$j','$d','$t','$sug','$com')");
	echo (mysqli_error($con));



$to = 'root@localhost.com';
$subject="response from healthopedia";
$message = 'Hi Jane, will you marry me?'; 
$from = 'peterparker@email.com';
$senderName=" Your creation";
$senderEmail= "urcreation@gmail.com";
$headers = "From: " . $senderName . " <" . $senderEmail . ">";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";






	
	// $suggest="<b>suggestion: </b>".$_POST['suggest'];
	// $comment="<b>comments: </b>".$_POST['comment'];
	// $name="<b>name: </b>".$i;
	// $email="<b>email of sender: </b>".$j;
	// $date="<b>date of submission: </b>".$d;
	// $time="<b>time: </b>".$t;







$message="<h4>the following response suggestion is submitted</h4><br><br>";
$message.="<p>name:<b>".$i."</b></p>";
$message.="<p>email:<b>".$j."</b></p>";
$message.="<p>date of submission:<b>".$d."</b></p>";
$message.="<p>time fo submission:<b>".$t."</b></p>";
$message.="<p>suggestion:<b>".$sug."</b></p>";
$message.="<p>comment:<b>".$com."</b></p>";



mail($to, $subject, $message,$headers);



if(mail($to, $subject, $message,$headers))
{
	echo"bhupp";
}
else
{
	//echo"bhosadivaala";
}
}
// header("location: contact.php");




	?>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyDHKTVbOjSdXI4L0xdrGcPnVdIxrleY6D4"></script>

    <script src="jquery.mapit.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script src="pagejs.js"></script>
</body>
</html> 