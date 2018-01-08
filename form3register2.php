

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>healthcare world</title>
	<link rel="shortcut icon" href="heart-.ico"/>
    <link rel="stylesheet" href="pagecss.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

</head>
<body style="border:0px;" >


	

		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="go">
		  <a class="navbar-brand" href="after_login.php">home</a>
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
		        <a class="nav-link" href="contact.php">conatct us</a>
		      </li>
		      <li class="nav-item active go">
		        <a class="nav-link" href="#">learn</a>
		      </li>
		    </ul>
		   <!--  <form class="form-inline my-2 my-lg-0">
			  <button class="btn btn-outline-danger my-2 my-sm-0  but do"  data-toggle="modal" data-target="#modal" type="button">Signup</button>		      
		      <button class="btn btn-outline-success my-2 my-sm-0 do" type="button" data-toggle="modal" data-target="#mmodal" >Login</button>
		    </form> -->
		  </div>
		</nav>

		<h3 align="center" style="padding-top: 50px;margin-bottom: -40px;" >Please Register here</h3>


<div style="margin-top: 80px;margin-bottom: 10px; border:0px; border-color: white;" align="center">


           <form name="signin" id="form2" class="animate"  action="docinfo2.php" method="post"> 


      <input type="text" autofocus="autofocus" class="manage" style="padding-left:10px;" style="margin-top:20px; " placeholder="Name of the patient*" name="name" required>
	<br><br>

	<input  type="number" class="manage" style="padding-left:10px;" max="90" placeholder="Age *" name="age" required>
	<br><br>

      <label style="margin-left: -410px;" class="text-muted">Sex</label><br>
      <div style="margin-left: -20px;">
	  <input type="radio" name="gender" value="male" checked > Male
      <input type="radio" name="gender" value="female"> Female
      <input type="radio" name="gender" value="other"> Other 
     </div> 
<br><br>

      <input  type="text" class="manage" style="padding-left:10px;" size="300" placeholder="address *" name="address" required><br><br>
      <input  type="number" maxlength="6" class="manage" style="padding-left:10px;"  placeholder="pin" name="pin"><br><br>      

      <input type="email" class="manage" style="padding-left:10px;"  placeholder="Enter Email*" name="email" required>
	<br><br>



<div style="display:inline-block;">
	<label class="text-muted" name="as" required style="margin-left:-10px ;padding-right: 7px;">+91</label>
<input  type="number" maxlength="10" class="m"  placeholder="contact number" name="number" required style="width:399px;padding-left:10px;">
</div>
	<br><br>

      <input type="text" class="manage" style="padding-left:10px;"  placeholder="disease to be diagnosed" name="disease" required >
<br><br>
<div>
	  <!-- <input type="checkbox" list="" class="manage" style="padding-left:10px;"  placeholder="doctor" name="rpas" required >	 -->
		
	<!-- 	 <input list="doctors" class="manage" style="padding-left:10px;"  placeholder="doctor" required >
  <datalist id="docs">
    <option value="A">
    <option value="B">
    <option value="C">
    <option value="D">
    <option value="E">
  </datalist>
 -->

<div class="text-muted">
<select name="doctor" id="docs"  class="manage" style="padding-left:10px;" required class="text-muted">
<option value="" >which doctor you would like to choose</option>
<option value="devi prasad shetty">devi prasad shetty</option>
<option value="naresh trehan">naresh trehan</option>
<option value="deepak chopra">deepak chopra</option>
<option value="aamod roa">aamod roa</option>
<option value="sanjay borude">sanjay borude</option>
<option value="ramneek mahajan">ramneek mahajan</option>
</select></div>
</div>


	  	<br><br>
	  	<input  type="text" class="manage" style="padding-left:10px;"  placeholder="allergic to any medicine" name="allergies" required>
	<br><br>
	<input  type="text" class="manage" style="padding-left:10px;"  placeholder="location" name="pas" required>
	<br><br>
	
	<br><br>
	
	  	<label style="margin-left: -340px;" class="text-muted">date of birth</label><br>
	  <input id="dateofbirth" type="Date" class="manage" style="padding-left:10px;"  placeholder="date of birth" name="dob" required>





	  	<br><br>


     
       
        <button type="submit" class="signupbtn btn-success round w-100" name="regbut" >Register</button>
     
   	
  </form>
        		</div>



<p style="font"></p>



<p style="background-color:#8e8585;color:black;margin-bottom: -20px;" align="center"><img src="copy.png" height="18px" width="18px" style="margin-right: 5px;"> jaypee institute of information technology</p>



	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script src="pagejs.js"></script>
	

</body>
</html>