<?php
	session_start();
	require_once("db_conn.php");
	//Getting Data from the form
        $first_name = mysql_real_escape_string(ucfirst($_POST['first_name']));
        $middle_name = mysql_real_escape_string(ucfirst($_POST['middle_name']));
        $last_name = mysql_real_escape_string(ucfirst($_POST['last_name']));
        $post = mysql_real_escape_string(ucfirst($_POST['post']));
        $department = mysql_real_escape_string(ucfirst($_POST['department']));
	$q = mysql_query("INSERT INTO `employees` (`id` ,`first_name` ,`middle_name` ,`last_name` ,`post_id` ,`department_id`)
                                            VALUES (NULL, '$first_name', '$middle_name', '$last_name', '$post', '$department')");
	if($q){
		echo "success";
	}else{
		echo "failed";
	}
?>