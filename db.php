<?php
/***************************
Created by : 
Date	   : 
File Name  : db.php
Desc       : 
****************************/

$db = new MysqliDb (Array (
                'host' => 'localhost',
                'username' => 'root', 
                'password' => '',
                'db'=> 'world'));
				$mysqli = new mysqli ('localhost', 'root', '', 'world');
				$db = new MysqliDb ($mysqli);



?>
