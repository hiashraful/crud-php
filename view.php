<?php


$db = new PDO('mysql:host=localhost;dbname=php67;charset=utf8mb4', 'root', '12345');

$query = "SELECT * FROM `user_info` where id = ".$_GET['single'];
$stmt = $db->query($query);
$results = $stmt->fetch(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration form</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/style.css">

    <style>
        label{
            display: block;
            border-bottom: 2px solid #ccc;
            padding: 7px 5px;

        }


    </style>
</head>

<body>



	<div class="area">
		<h3>Your Information Show</h3>
		<hr>
		<label for="">Your Name: <i><?php echo $results['name']?></i></label>
		
		<label for="">Your Email:<i><?php echo $results['email']?></i></label>

		<label for="">Your Password:<i><?php echo $results['password']?></i></label>
		
		<label for="">Your Address:<i><?php echo $results['address']?></i></label>

		<label for="">Your Mobile:<i><?php echo $results['mobile']?></i></label>

		<label for="">Your Gender:<i><?php echo $results['gender']?></i></label>

		<label for="">Your Hobbies:<i><?php echo $results['hobby']?></i></label>

		<label for="">Your Profile Pic: 
			<img class="img-responsive" src="images/<?php echo $results['image_name']?>">
		</label>

		<label for="">Your DOB:<i><?php echo $results['dob']?></i></label>
	</div>






</body>
</html>