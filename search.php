<?php
/***************************
Created by : 
Date	   : 
File Name  :search.php 
Desc       : 
****************************/

require_once('MysqliDb.php');
include 'db.php';
	$action=$_REQUEST['action'];
	$id=$_REQUEST['id'];
		$city = $db->where ("Name",$id);
		$city = $db->get ("city", null);
		$result=print_r ($city);
//echo implode(",",$result);
 
?>
