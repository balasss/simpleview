<?php
/***************************
Created by : 
Date	   : 
File Name  :search.php 
Desc       : 
****************************/
error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);
require_once('MysqliDb.php');
include 'db.php';
	$action=$_REQUEST['action'];
	$id=$_REQUEST['id'];
		$city = $db->where ("Name",$id);
		$result = $db->getOne ("city");

		//implode("<br/> ",$result);
		echo '<br/> ID: '.$result['ID'];
	        echo '<br/> Name: '.$result['Name'];
		echo '<br/> CountryCode: '.$result['CountryCode'];
	        echo '<br/> District: '.$result['District'];
		echo '<br/> Population: '.$result['Population'];
 ?>
