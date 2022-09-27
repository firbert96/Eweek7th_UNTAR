<?php
	session_start();
	
	session_destroy();
	setcookie("fullname", "", time() - 1200);
	
	header ("Location: .");
	exit();

?>