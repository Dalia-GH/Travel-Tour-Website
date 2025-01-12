<?php

include '../db.php';

$username = $_POST['username'];
$password = $_POST['password'];
$role     = 'user';
$photo    = $_FILES['photo'];

if (empty($username) || empty($password) ||  empty($photo['name'])) {
    header("Location: ../register.php?error=Please fill all fields");
    exit;
}


$hashedPassword = password_hash($password, PASSWORD_DEFAULT);


$photoName  = time() . '_' . $photo['name'];
$targetDir  = "../uploads/";
$targetFile = $targetDir . $photoName;

if (move_uploaded_file($photo['tmp_name'], $targetFile)) {

    $sql = "INSERT INTO users(username, password, role, photo) 
            VALUES ('$username', '$hashedPassword', '$role', '$photoName')";
    
    if ($conn->query($sql) === TRUE) {
        die("Registration Successfull");
    } else {
        header("Location: ../register.php?error=" . $conn->error);
        exit;
    }
} else {
    header("Location: ../register.php?error=Failed to upload photo");
    exit;
}
