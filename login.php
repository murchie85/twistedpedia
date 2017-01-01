<?php  session_start(); ?>
<?php
/*  DATABASE CONNECT */	
include 'functions.php';


/*-- CREDENTIALS--*/
$username = $_POST['username'];
$password = $_POST['password'];	
$rememberme = $_POST['rememberme'];	
	
		
$postname = $_POST['username'];
if (isset($_POST['username'])){
	

$sql = "SELECT  * from user_table WHERE username='".$username."' AND password='".$password."'LIMIT 1";
$res = mysqli_query($sql_con,$sql);
if (mysqli_num_rows($res) == 1) 
{
	   $success = 1;
	   if ($rememberme=="on"){
	   setcookie("username",$username, time() +7200);} // cookie doesn't expire for ages
		else if($rememberme==""){
		$_SESSION['username']=$username;}//isset$_session... means did they reach this line and logged i   
		//echo '<br> <br> <br>  <br>  <br>';
		header("location: postjoke.php");
		// use this for storing logged in name echo $_SESSION['username'];
		//$_SESSION['username']) || isset($_COOKIE['username']
		echo '<h1><a style=color:black; href = "postjoke.php">Cick here to post a joke - scumbag</a></h1>';
		
        exit();	}
        
        else{
	//echo '<br> <br>  <br>';
	echo "invalid login";
        $success = 0;
	echo '<li><a href = "index.php">Home</a></li>';
	exit();
}
}





if ($success == 1)
{
	header("location: postjoke.php");
}
	



/*-- PASSWORD CHECK--*/		
		
		
/*		
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
			header("location: success.php");			
		}
		
		if (isset($_POST['username']) && isset($_POST['password'])){
			if ($_POST['username'] == $username && $_POST['password'] == $password)
			{
			$_SESSION['logged_in'] = true;
			header("location: success.php");
			}
			
		}
			
*/

?>
	
<!DOCTYPE html>
<html>

<head>
		<title>Twistedpedia</title>
		<meta name = "vieport" content = "width=device-width, initial-scale=1.0">
		<link href = "css/bootstrap.min.css" rel = "stylesheet">
		<link href = "css/bob.css" rel = "stylesheet">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>


 
<body>

		<div class = "navbar navbar-inverse navbar-static-top" >

			<div class = "container">
					<h3 class="navhead"><a class = "personal"href = "#"></a></h3>
			   <div class = "">
					<a href = "#" class = "navbar-brand"> </a>		
					<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
					<span class = "icon-bar"> </span>
					<span class = "icon-bar"> </span>
					<span class = "icon-bar"> </span>					
					</button>
				
							<div class ="collapse navbar-collapse navHeaderCollapse">
								 			
													<ul  class = "nav navbar-nav navbar-right">
													</br>
														    <li><a href = "index.php">Home</a></li>
															<li	><a href = "postjoke.php">post joke </a></li>
															<li><a href = "#">pics</a></li>		
															<li class = "active" ><a href = "login.php">log in</a></li>
													</ul>							
			
							</div>
					</div>
		
				</div>
		</div>
		
		
		
		
		
		
	<!-- FORM FILL IN -->

<div class="formsection">
	
	





		<body>	
		<div class = "fillform">
				<form method = "post" action = "login.php">
					<h3 style=color:white>username:</h3> 
					<input type="text" name = "username"> <br/>
					<h3 style=color:white>password:</h3> 
					<input type = "password" name= "password"><br/>
					<input type = "checkbox"  name = "rememberme"> remember me <br/>
					<input type="submit" value= "login">
				</form> 
		</div>
		</body>
		 
	


		
</div>


</body>

<footer>

			<p> copyright &copy; probably bored 2016 <br /> fuck your mum 
			<a style=color:black href = "logout.php">log out</a></li></p>
			
			
<script src = "http://ajax.googleapis.com/ajax/libs/1.10.2/jquery.min.js"></script> 
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>﻿
<script type="text/javascript" src="js/bootstrap.min.js"></script>﻿	
<script src = "js/bootstrap.js"></script> 	

</footer>
</html>
