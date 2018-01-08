
 <?php
	
	session_name("signup");
	session_start();
  if (isset($_SESSION['sign'])) {


   echo "<div id='myModal' class='modal hide fade' role='dialog' style='height:800px;width:800px;margin-left:270px;margin-top:110px;'>";
 echo "<div class='modal-dialog'>";

   
   echo "<div class='modal-content'>";
     
     echo "<div class='modal-body' style='margin-top:-150px;margin-bottom:50px;'>";
       echo "<div align='center'  style='margin-top: 200px; font-size: 25px;'>";
    echo "<table>";
      echo "<tr>hi!".$_SESSION['username'] . "<br></tr>";
      echo "<tr><b><img src='haath.png' height='35px' width='35px' > thank you</b>";
      echo "<td align='center'>for signing up with us <br>hope we will hava a great experiance together<img src='smili.png' height='35px' width='35px'></td></tr>";
    echo "</table>";
    
 echo "</div>";

     echo "</div>";
      
       echo "<button type='button' class='btn btn-danger' data-dismiss='modal'>Dismiss</button>";
     
   echo "</div>";

 echo "</div>";
echo "</div>";
  }
$var=$_SESSION['email'];

  $con= mysqli_connect("localhost","root","","fi");


  //$s=mysqli_query($con,"SELECT*from signup where signup.email='$x'");
    //$su=mysqli_fetch_array($s);
    $u=mysqli_query($con,"SELECT * from users_info where users_info.email='$var'");
    $r=mysqli_num_rows($u);
    $n=mysqli_num_fields($u);

    $counter=1;
    /*while($counter)
    {

    }*/
    if ($r>0) {
       $ut=mysqli_fetch_array($u);
       $message= "<div class=' text-muted username'><b style='margin-right: 20px\;'>Username:  </b>".$ut['name'] ."</div><br>";
    
   $message= "<div class=' text-muted email'><b style='margin-right: 20px\;'>Email:  </b>".$ut['email']."</div><br>";
    
   $message.= "<div class=' text-muted dob'><b style='margin-right: 20px\;'>Date of Birth:  </b>".$ut['dob']."</div><br>";
   $message.= "<div class=' text-muted gender'><b style='margin-right: 20px\;'>Gender:  </b>".$ut['gender']."</div><br>";
    $message.= "<div class=' text-muted email'><b style='margin-right: 20px\;'>age:  </b>".$ut['age']."</div><br>";
     $message.= "<div class=' text-muted email'><b style='margin-right: 20px\;'>address:  </b>".$ut['address']."</div><br>";
      $message.= "<div class=' text-muted email'><b style='margin-right: 20px\;'>number:  </b>".$ut['number']."</div><br>";
       $message.= "<div class=' text-muted email'><b style='margin-right: 20px\;'>disease:  </b>".$ut['disease']."</div><br>";
        $message.= "<div class=' text-muted email'><b style='margin-right: 20px\;'>doctor:  </b>".$ut['doctor']."</div><br>";
         $message.= "<div class=' text-muted email'><b style='margin-right: 20px\;'>allergies:  </b>".$ut['allergies']."</div><br>";

    
   
    //$d=mysqli_query($con,"SELECT*from signup where signup.email='$x'");
    
}
else
{
  $message= "<div class='username text-bold'><b style='margin-right: 20px\;'>no registrations yet</div><br>";
}

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
<body background=#f7f3ad;>
<header>

<h3 align="center" style="background-color: #00acfe;padding-bottom: 40px;padding-top: 40px;margin-bottom: -10px;"><b>Health-o-Pedia</b></h3>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="go">
		  <a class="navbar-brand" href="page.php">home</a>
		 </div>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active go">
		        <a class="nav-link" href="#">about us <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item active go">
		        <a class="nav-link" href="team.htm">team</a>
		      </li>
		      <li class="nav-item active go"> 
		        <a class="nav-link" href="contact.php">conatct us</a>
		      </li>
		       <li class="nav-item active go">
		        <a class="nav-link" href="#">learn</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
			
		      <button class="btn my-2 my-sm-0" type="button" style="outline:none !important; background-color: #343a40;color:white;margin-right: 20px;"
				data-toggle="popover" data-class="po"  data-placement="bottom" data-trigger="click" data-content="<button class='btn btn-warning' type='button' style='margin-bottom:3px;padding:5px 22px;' data-toggle='modal' data-target='#Modal' tabindex=1>my profile</button><br>

				<button class='btn btn-warning' type='button' style='margin-bottom:3px;padding:5px 17px;' data-toggle='modal' data-target='#MModal' tabindex=2>my account</button><br>
        <a href='form3register2.php'><button class='btn btn-success' type='button' style='margin-bottom:3px;padding:5px 30px;' tabindex=2 data-trigger='click'>register</button></a><br>
				<a href='logout.php'><button class='btn btn-danger' type='button' style='padding:5px 30px;' tabindex=3 name='logout'>LogOut</button></a>"		
				  ><?php print($_SESSION['username']);?></button>
		    </form>
		  </div>
		</nav>


	

<!-- Modal -->





<!-- 

<div>
<h5>consultations</h5>

<div class="username text-muted"><b style="margin-right: 20px;">Username:</b><?php print($_SESSION['name']); ?></div><br>
		
		<div class="email text-muted"><b style="margin-right: 20px;">Email:</b><?php print($_SESSION['age']); ?></div><br>
		
		<div class="dob text-muted"><b style="margin-right: 20px;">Date of Birth:</b><?php print($_SESSION['email']); ?></div><br>
		<div class="gender text-muted"><b style="margin-right: 20px;">Gender:</b><?php print($_SESSION['address']); ?></div><br>

<div class="username text-muted"><b style="margin-right: 20px;">Username:</b><?php print($_SESSION['gender']); ?></div><br>
		
		<div class="email text-muted"><b style="margin-right: 20px;">Email:</b><?php print($_SESSION['disease']); ?></div><br>
		
		<div class="dob text-muted"><b style="margin-right: 20px;">Date of Birth:</b><?php print($_SESSION['allergies']); ?></div><br>
		<div class="gender text-muted"><b style="margin-right: 20px;">Gender:</b><?php print($_SESSION['doctors']); ?></div><br>

<div class="username text-muted"><b style="margin-right: 20px;">Username:</b><?php print($_SESSION['date of birth']); ?></div><br>
		
		<div class="email text-muted"><b style="margin-right: 20px;">Email:</b><?php print($_SESSION['number']); ?></div><br>
		

      </div>
      
        <button type="button" class="btn btn-danger" data-dismiss="modal">Dismiss</button>
      
   



</div>
 -->





   <DIV>
 </-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height:520px;width:700px;margin-left: 330px;margin-top: 5px; margin-right: 0px;display: inline-block;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" style="border-radius: 10px;" src="images/med.jpeg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="border-radius: 10px;" src="images/med3.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="border-radius: 10px;" src="images/med2.jpeg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev";">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</DIV>


<div>
  <div style="display:inline-block;margin-right: 20px;margin-left: 100px;"><hr size="20" style="background-color: #00ACFE"><br><h5 align="center"> MACRA </h5><br><p>MACRA has been, by far,<br> one of the most significant federal <br>legislation in US healthcare space. <br>Physicians and payers alike believe <br>  MACRA to be transformative, overhauling the way <br>providers will get paid in America. <br><a href="http://hitconsultant.net/2017/01/09/7-healthcare-trends-to-watch-in-2017/" style="color:red">for more details..</a></p></div>


  <div style="display:inline-block;margin-right: 20px;margin-left: 20px;"><hr size="20" style="background-color: #00ACFE"><br><h5 align="center">Future of ACA</h5><br><p>Repealing and replacing ACA <br>was one of President-elect Donald <br>Trump’s top priorities. However, as the complete <br>repeal of ACA might not be the best idea due <br>to various reasons. <br><br><a href="http://hitconsultant.net/2017/01/09/7-healthcare-trends-to-watch-in-2017/" style="color:red">for more details..</a></p></div>



  <div style="display:inline-block;margin-right: 20px;margin-left: 20px;"><hr size="20" style="background-color: #00ACFE"><br><h5 align="center">Technological Advacements</h5><br><p>Till date finding gaps in care is <br>a tedious task and many providers face <br>challenges in identifying them. Clinical data <br>analysis has helped providers plan carefully,<br> set benchmarks and monitor their performance.<br><br><a href="http://hitconsultant.net/2017/01/09/7-healthcare-trends-to-watch-in-2017/" style="color:red">for more details..</a></p></div>


</div>

<!-- Modal -->
<!-- <div id="mmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
   <!--  <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" style="padding-left: 180px">Log In</h4>
      </div>
      


      	 <form name="login" id="form2" class="modal-content"  action="login_php.php" method="post"> 
      	 	<div class="container">
      	 		
       <input type="text" class="manage"  placeholder="Enter registered email" name="logname" required>
	<br><br>
 <input id="pas" type="password" class="manage"  placeholder="Enter Password" name="logpass" required>
	<br><br>
     
     <input type="checkbox" name="remember">Remember me</input>
     <br><br>
        
     <button type="submit" name="test" class="btn btn-outline-success" style="margin-bottom: 30px;">login</button><br/>
    </div>
</form>
  </div>
</div>
 </div> --> 
			<!-- <div id="con2">
				<p id="con3" align="center" class="col-sm-3 col-lg-12"><b>Health-o-Pedia</b></p></div>
 -->



<!-- Modal -->
  <!-- <div class="modal fade modal_locate" id="modal" role="dialog">
    <div class="modal-dialog" style="margin:20px auto;">
     -->
      <!-- Modal content-->
    <!--   <div class="modal-content" style="height:600px;">
        <div class="modal-header" style="padding:25px"> -->
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          <!-- <h4 class="modal-title" style="padding-left: 180px;">Sign Up</h4>
        </div>
       
<div class="modal-body">
           <form name="signin" id="form2" class="modal-content animate"  action="action_page.php" method="post"> 
    <div class="container" style="height:500px;width:500px;margin-left: -465px;">

      <input type="text" class="manage"  placeholder="Enter Name" name="name" required>
	<br><br>
     
      <input type="email" class="manage"  placeholder="Enter Email" name="email" required>
	<br><br>

      <input id="pass" type="password" class="manage"  placeholder="Enter Password" name="pas" required>
	<br><br>
      <input id="rpass" type="password" class="manage"  placeholder="Repeat Password" name="rpas" required >
	  	<br><br>
	  	<label ><b>date of birth</b></label>
	  <input id="dateofbirth" type="Date" class="manage"  placeholder="date of birth" name="dob" onmouseover="return validatePass()" required>





	  	<br><br>




	  <label><b>Gender</b></label><br>
	  <input type="radio" name="gender" value="male" checked> Male<br>
      <input type="radio" name="gender" value="female"> Female<br>
      <input type="radio" name="gender" value="other"> Other <br><br>
      <input type="checkbox" checked="checked" name='remember2'> Remember me
      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

     
       
        <button type="submit" class="signupbtn btn-success round w-100" name='test2'>Sign Up</button>
     </div>
   	
  </form>
        		
        
        </div>
      </div>
      
    </div></div>
 -->
 <!--    <script type="text/javascript">
      var t=document.querySelector("#signupbtn")
      t.addEventListener("click",function re(){
        document.queryselector("#form2").reset();
      })
    </script> -->
  <br> <br><br><br><br>

<pre style="border: none; background-color: white;">
 



<h2 class="scrol" style="margin-top: -85px;"><center>Learning Resource Center</center></h2>

</pre>

<div class="vid" style="display:inline-block;">
  <div class="inVid" style="display:inline-block;margin-bottom: 10px;">
    <iframe class="frame" style="margin:30px 50px;height: 250px;width:350px;"
    src="https://www.youtube.com/embed/UQH3GWsCmr8?autoplay=0" >
    </iframe><br><center><i>Tooth Decay Treatment Procedure</i></center>
  </div>

  <div class="inVid" style="display:inline-block;margin-bottom: 10px;">
    <iframe class="frame" style="margin:30px 30px;height: 250px;width:350px;"
    src="https://www.youtube.com/embed/-irQU1L08fo?autoplay=0" ">
    </iframe><br><center> <i>Brief documentary on Dengue Awareness</i></center>
  </div>
  
  <div class="inVid" style="display:inline-block;margin-bottom: 10px;">
    <iframe class="frame" style="margin:30px 50px;height: 250px;width:350px;"
    src="https://www.youtube.com/embed/SGaQ0WwZ_0I?autoplay=0" >
    </iframe><br><center><i>Hers's what you need to know about Cancer</i></center>
  </div>
</div>


<p style="background-color:#8e8585;color:black;margin-bottom: -10px;" align="center"><img src="copy.png" height="18px" width="18px" style="margin-right: 5px;"> jaypee institute of information technology</p>






<div id="Modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       
       <div style="background-color: #dba913;margin:-15px -45px -15px -15px;padding:10px 183px 10px 185px;"><h3 style="color:white; font-weight: 7px;">my profile</h3></div>
      </div>
      <div class="modal-body">
<div class="username text-muted"><b style="margin-right: 20px;">Username:</b><?php print($_SESSION['username']); ?></div><br>
		
		<div class="email text-muted"><b style="margin-right: 20px;">Email:</b><?php print($_SESSION['email']); ?></div><br>
		
		<div class="dob text-muted"><b style="margin-right: 20px;">Date of Birth:</b><?php print($_SESSION['dob']); ?></div><br>
		<div class="gender text-muted"><b style="margin-right: 20px;">Gender:</b><?php print($_SESSION['gender']); ?></div><br>


      </div>
      
        <button type="button" class="btn btn-danger" data-dismiss="modal">Dismiss</button>
      
    </div>

  </div>
</div>


<?
	session_name('signup');
	session_write_close();
?>

<? session_name('login');
session_start();
?>


<div id="MModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       
       <div style="background-color: #dba913;margin:-15px -45px -15px -15px;padding:10px 108px 10px 185px;"><h3 style="color:white; font-weight: 7px;">my registrations</h3></div>
      </div>
      <div class="modal-body">
<!-- 
<div class="username text-bold"><b style="margin-right: 20px;">consultations:</b></div><br>
<div class="username text-muted"><b style="margin-right: 20px;">Username:</b><?php print($_SESSION['username']); ?></div><br>
<div class="username text-muted"><b style="margin-right: 20px;">Username:</b><?php print($_SESSION['username']); ?></div><br>

<div class="username text-muted"><b style="margin-right: 20px;">Username:</b><?php print($_SESSION['username']); ?></div><br>
<div class="username text-muted"><b style="margin-right: 20px;">Username:</b><?php print($_SESSION['username']); ?></div><br>



<div class="username text-muted"><b style="margin-right: 20px;">Username:</b><?php print($_SESSION['username']); ?></div><br>
		
		<div class="email text-muted"><b style="margin-right: 20px;">Email:</b><?php print($_SESSION['email']); ?></div><br>
		
		<div class="dob text-muted"><b style="margin-right: 20px;">Date of Birth:</b><?php print($_SESSION['dob']); ?></div><br>
		<div class="gender text-muted"><b style="margin-right: 20px;">Gender:</b><?php print($_SESSION['gender']); ?></div><br>


      </div> -->
      <?php






























































      ?>
  <p align="center" style="font-size: 20px;"><b>no registration done yet</b></p>
        <button type="button" class="btn btn-danger" data-dismiss="modal" style="padding:10px 210px 10px 190px">Dismiss</button>
      
    </div>

  </div>

</div>





	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script src="pagejs.js"></script>

</body>
</html>