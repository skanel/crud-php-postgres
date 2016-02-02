<?php
function locked(){ 
	if(empty($_SESSION)) {
		header("Location: index.php");
		exit();
	}
}

?>
