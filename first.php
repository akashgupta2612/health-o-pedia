<?php
	echo 'NAME: '.$_POST["fname"];
	echo '<br>';
	echo 'EMAIL: '.$_POST["email"];


	//$u=mysql.default_user();
	//$p=mysql.default_password()
	$e=mysql_connect("localhost",'aman','aman');
	if (!$e) {
    die('Not connected : ' . mysql_error());
	}
	$t=mysql_select_db("fi",$e);
	if (!$t) {
    die ('Can\'t use foo : ' . mysql_error());
	}
	else{

	mysql_query("INSERT INTO one VALUES("$_POST["fname"],$_POST["email"]")");
	}
?>