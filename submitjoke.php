<?php session_start();
include 'functions.php';



if(isset($_SESSION['username'])){
	
$value1 = $_SESSION['username'];
}
if(isset($_COOKIE['username'])){
	
$value1 = $_COOKIE['username'];
}



$value2 = $_POST['joke'];
//$value2 = mysqli_real_escape_string($sql_con,$valueq); alternative way of removing quotes

$sql ="INSERT INTO new_jokes (joke_uploader,joke) VALUES ('$value1', '$value2' )";
if (!mysqli_query($sql_con, $sql)) {
	
	die('Error: ' . mysql_error());
}
mysqli_close($sql_con);
header("location: index.php");
echo 'Joke submitted, cretin';
?>
<!DOCTYPE html>
<li><a href = "index.php">Home</a></li>
</html>

