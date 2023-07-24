<?php

$db = new PDO('mysql:host=localhost;dbname=php67;charset=utf8mb4', 'root', '');

$query = "DELETE FROM `php67`.`user_info` WHERE `user_info`.`id` =".$_GET['single'];
$stmt = $db->exec($query);
if($stmt == true){
   header('location: all_data.php');
}


