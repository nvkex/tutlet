<?php

    $id = $_POST['colid'];
	$pass = md5($_POST['pass']);
	$myfile = fopen("../.data" , "r");
	$str = fread($myfile,filesize("../.data"));
	if((substr_count($str,$id) > 0) && (substr_count($str, $pass) > 0)){
		$session = fopen("../.session" , "w");
		fwrite($session, $id);
		header ('Location:afterlog.html');
	}
	else{
		echo "Wrong username and password";
	}
	fclose($myfile);

?>