<?php
session_start();
 $session = array();
 
	session_destroy();
	if ( isset( $_COOKIE[session_name()] ) )
    setcookie( session_name(), “”, time()-3600, “/” );
	header("location: ../index.php");
	exit;
 ?>