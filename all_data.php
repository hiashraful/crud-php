<?php

$db = new PDO('mysql:host=localhost;dbname=php67;charset=utf8mb4', 'root', '12345');

$query = "SELECT * FROM `user_info`";
$stmt = $db->query($query);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration form</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>SL</td>
                <td>Name</td>
                <td>Email</td>
                <td>Password</td>
                <td>Address</td>
                <td>Mobile</td>
                <td>Gender</td>
                <td>Hobby</td>
                <td>Image</td>
                <td>Date of Birth</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
        <?php
        $sl = 1;
        foreach ($results as $user){
        ?>
            <tr>
                <td><?php echo $sl++?></td>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['password'] ?></td>
                <td><?php echo $user['address'] ?></td>
                <td><?php echo $user['mobile'] ?></td>
                <td><?php echo $user['gender'] ?></td>
                <td><?php echo $user['hobby'] ?></td>
                <td>
                    <img src="uploads/<?php echo $user['image_name'] ?>" alt="">
                </td>
                <td><?php echo $user['dob'] ?></td>

                <td>
                    <a href="view.php?single=<?php echo $user['id'] ?>">View</a>
                    <a class="text-danger" href="delete.php?single=<?php echo $user['id'] ?>">Delete</a>
                    <a href="edit.php?single=<?php echo $user['id'] ?>">Edit</a>
                </td>
            </tr>

        <?php }?>
        </tbody>
    </table>
</div>

</body>
</html>
