<?php
/***************************
Created by : 
Date	   : 
File Name  : view.php
Desc       : 
****************************/

require_once('MysqliDb.php');
include 'db.php';

	$cols = Array ("Name");
	$city = $db->get ("city", null, $cols);
	if ($db->count > 0)
    foreach ($city as $city) { 
			print_r ($city);
		echo "</br>";
		
    }

?>
