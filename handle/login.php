<?php

session_start();
include '../db.php';

$username = $_POST['username'];
$password = $_POST['password'];


$sql    = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    
    if (password_verify($password, $user['password'])) {
     
        $_SESSION['user_id']  = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role']     = $user['role'];
        
        if ($user['role'] === 'admin') {
            header("Location: ../dashboard.php");
        } else {
            header("Location: ../login.php?=loginsuccessful");
        }
        exit;
    } else {
        header("Location: ../login.php?error=Invalid password");
        exit;
    }
} else {
    header("Location: ../login.php?error=User not found");
    exit;
}
