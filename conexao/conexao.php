<?php
	$db_name = "letsplay";
	$mysql_user = "root";
	$mysql_pass = "root";
	$server_name = "localhost";

	$con = mysqli_connect($server_name, $mysql_user, $mysql_pass, $db_name);
	$mysqli = new mysqli($server_name, $mysql_user, $mysql_pass, $db_name);
	
	if(!$con) {
		echo "Erro na conex�o: ".mysqli_connect_error();
	} else {
		mysqli_query($con, "SET NAMES 'utf8'");
		mysqli_query($con, "SET character_set_connection=utf8");
		mysqli_query($con, "SET character_set_client=utf8");
		mysqli_query($con, "SET character_set_results=utf8");
	}
?>
