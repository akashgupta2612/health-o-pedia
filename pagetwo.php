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

</script>

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
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
			  <button class="btn btn-outline-danger my-2 my-sm-0  but"  data-toggle="modal" data-target="#myModal" type="button">Sign_Out</button>		      
		      <a href="" class="nav-link" style="font-size: 20px;color:#faff00;align-content: center;">hi aman</a>
		    </form>
		  </div>
		</nav>

		<img src="final.jpeg" class="d-block w-100 nyasty" id="con1">

			<div id="con2">
				<p id="con3" align="center" class="col-sm-3 col-lg-12"><b>Health-o-Pedia</b></p></div>






<script> 
		function re(){

			document.querySelector("#form2").reset();
		}
</script>

<!-- Modal -->

  <div class="modal fade modal_locate" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          <h4 class="modal-title" style="padding-left: 180px">Sign Up</h4>
        </div>
        <div class="modal-body">

           <form name="signin" id="form2" class="modal-content animate"  action="action_page.php" method="post"> 
    <div class="container" onblur="re()">

      <input type="text" class="manage"  placeholder="Enter Full Name" name="name" required>
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
      <input type="checkbox" checked="checked"> Remember me
      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn btn-danger round">Cancel</button>
        <button type="submit" class="signupbtn btn-success round" >Sign Up</button>
      </div>
    </div>
  </form>
        		
        	</div>
        </div>
      </div>
      
    </div>
  </div>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script src="pagejs.js"></script>

</body>
</html>