<?php

if (isset($_GET['controller']) ) {	
	include_once('conn.php');
	session_start();
	include_once('lib/helper.php');	
	require_once('controllers/'.$_GET['controller'].".php");
	// Close the connection
	pg_close($conn);	
	
}else{
	require_once('controllers/login.php');		
}

?>
