<?php           session_start();
                error_reporting(0);
		include 'functions.php';
		include 'checkloggedin.php';
	
		if(!loggedin())
			
			{	
				
				header ("location: index.php");
				exit();
			}	
		
		
	?>	


<!DOCTYPE html>

<html>

<head>
		<title>Twistedpedia</title>
		<meta name = "vieport" content = "width=device-width, initial-scale=1.0">
		<link href = "css/bootstrap.min.css" rel = "stylesheet">
		<link href = "css/bob.css" rel = "stylesheet">
                <script src="ckeditor/ckeditor.js"></script>
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
															<li class = "active"><a href = "postjoke.php">post joke </a></li>
															<li><a href = "#">pics</a></li>		
															<li><a href = "login.php">log in</a></li>
													</ul>							
			
							</div>
					</div>
		
				</div>
		</div>
		
		
	<h1> you have logged in!</h1>
		
		
		
	<!-- FORM FILL IN -->

<div class="formsection">
	
	
<form action="submitjoke.php" method="post" />

<!--<p>joke_uploader <br/> <input type = "text" name="joke_uploader" /></p> -->
<p>joke <br/><textarea name = "joke" id="joke" style = "width:50%;height:150px;">  </textarea><p>
           <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'joke' );
                CKEDITOR.on('instanceLoaded', function(e) {e.editor.resize(700, 350)} );
            </script>
<input type = "submit" name = "login" value="submit" />
</form>
</br> </br> </br> </br>
 
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

<!-- this is my first site -->

