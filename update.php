<?php


















$db = new PDO('mysql:host=localhost;dbname=php67;charset=utf8mb4', 'root', '');
$_POST['hobby'] = implode(', ',$_POST['hobby']);

$_POST['image_name'] = $_FILES['image']['name'];
$_POST['dob'] = $_POST['day'].'-'.$_POST['month'].'-'.$_POST['year'];


$query = "UPDATE `php67`.`user_info` SET `name` = '".$_POST['name']."', `email` = '".$_POST['email']."', `password` = '".$_POST['password']."', `address` = '".$_POST['address']."', `mobile` = '".$_POST['mobile']."', `gender` = '".$_POST['gender']."', `hobby` = '".$_POST['hobby']."', `image_name` = '".$_POST['image_name']."', `dob` = '".$_POST['dob']."' WHERE `user_info`.`id` = ".$_POST['id'];

$result = $db->exec($query);

if($result == true){

    header('location: all_data.php');
}






























