<?php  session_start(); ?>
<?php
//login check function 

function loggedin()
{
	if(isset($_SESSION['username']) || isset($_COOKIE['username']))
	{
		$loggedin = TRUE;
		return $loggedin;
		
	}
	
	
	
}


	
?>