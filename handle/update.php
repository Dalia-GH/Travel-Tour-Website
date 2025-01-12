<?php

session_start();
include '../db.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php?error=Unauthorized");
    exit;
}

$id       = $_POST['id'];
$username = $_POST['username'];
$role     = $_POST['role'];
$password = $_POST['password'];
$photo    = $_FILES['photo'];

$updateParts = [];


$updateParts[] = "username = '$username'";
$updateParts[] = "role = '$role'";


if (!empty($password)) {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $updateParts[]  = "password = '$hashedPassword'";
}


if (!empty($photo['name'])) {
    $photoName  = time() . '_' . $photo['name'];
    $targetDir  = "../uploads/";
    $targetFile = $targetDir . $photoName;
    
    if (!move_uploaded_file($photo['tmp_name'], $targetFile)) {
        header("Location: ../dashboard.php?error=Failed to upload photo");
        exit;
    }
    $updateParts[] = "photo = '$photoName'";
}

$setClause = implode(", ", $updateParts);
$sql       = "UPDATE users SET $setClause WHERE id = $id";


if ($conn->query($sql) === TRUE) {
    header("Location: ../dashboard.php?success=User updated");
    exit;
} else {
    header("Location: ../dashboard.php?error=" . $conn->error);
    exit;
}
