<?php
	session_start();
	require_once("db_conn.php");
	//Getting Data from the form
	$name= mysql_real_escape_string(ucfirst($_POST['name']));
	$c_id = mysql_real_escape_string($_POST['c_id']);
	$q = mysql_query("INSERT INTO `categories` (`id`, `name`, `company_id`) VALUES ('NULL', '{$name}', '{$c_id}')");
	if($q){
		echo "success";
	}else{
		echo "failed";
	}
?>