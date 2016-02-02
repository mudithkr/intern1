<?php
	
	$p=mysqli_connect('localhost','','');
	$qq=mysqli_select_db($p,'');
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  $data = mysql_real_escape_string($data);
	  return $data;
	}
?>