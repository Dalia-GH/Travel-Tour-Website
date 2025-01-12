<?php

include '../db.php';

$username = $_POST['username'];
$password = $_POST['password'];
$role     = $_POST['role'];
$photo    = $_FILES['photo'];

if (empty($username) || empty($password) || empty($role) || empty($photo['name'])) {
    header("Location: ../create.php?error=Please fill all fields");
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
        header("Location: ../dashboard.php?success=Registration successful!");
        exit;
    } else {
        header("Location: ../create.php?error=" . $conn->error);
        exit;
    }
} else {
    header("Location: ../create.php?error=Failed to upload photo");
    exit;
}
