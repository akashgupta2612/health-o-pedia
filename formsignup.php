		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>healthcare world</title>
	<link rel="shortcut icon" href="heart.ico"/>
	<link rel="stylesheet" href="pagecss.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="go">
		  <a class="navbar-brand" href="page.htm">home</a>
		  </div>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-tarPOST="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
		        <a class="nav-link" href="contact.htm">conatct us</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		  </div>
		</nav>

		
		<br><br>
		<form action="baad_mein.php"  method='post' class="foz">
	<div >
		<input type="text" id="arr" size="50px" align="center" name="fname" placeholder="your name" required><br><br><br>
		</div>
		<div><input type="email" id="arr" size="50px" align="center" name="email" placeholder="email" required><br></div><br><br>
		<div><div><input type="text" id="arr" size="50px" align="center" name="suggest" placeholder="suggestion" required><br></div><br><br>
		<div><textarea name="comment" id="lk" cols="110" rows="7" placeholder="type your comment here"></textarea><br></div><br><br>
		<input type="submit" id="form_submit" value="submit" class="btn-success">
	</form>
	
	<!--<div>
		<br>
		<p>
		<?php include 'baad mein.php';
			echo ("WELCOME...".$i."<br");
			echo ("we found out that your email address is ".$j."<br>");
			echo ("<b>is this true</b><br>");
		?>
		<br>
		<input type="submit" value="yeah"> or <input type="button" name="no" value="no! its not">
		</p>
	</div>
-->


	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="pagejs.js"></script>


	
</body>
<script type="text/javascript">
	function click()
	{
		var t=document.getElementById("form_submit");
		t.alert("Form has been submitted");
	}
</script>
</html>