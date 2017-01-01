<?php

session_start();

//destroy ();
session_destroy();
//unset cookies

setcookie("username", "", time()-7200);

header("location: index.php");

?>