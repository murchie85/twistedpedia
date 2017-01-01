<?php
include 'functions.php';

$sql = "SELECT  * from new_jokes ORDER BY joke_index DESC";

$output = mysqli_query($sql_con, $sql);
	
if (!$output) {	
	
	die('Invalid Query: ' . mysql_error());
}
	
	

	
	
/*print_r($output);*/
/*var_dump($output);*/



for($x = 0;$x < 21; $x++){
$result = mysqli_fetch_array($output);
$joke1[$x] = $result['joke'];
$uploader[$x] = $result['joke_uploader'];
$joke_date[$x] = $result['joke_date'];
$joke_index[$x] = $result['joke_index'];
}


	
	

	
mysqli_close($sql_con);
?>