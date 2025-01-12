<?php

session_start();
include '../db.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php?error=Unauthorized");
    exit;
}

$id = $_POST['id'];


$sql = "DELETE FROM users WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: ../dashboard.php");
    exit;
} else {
    echo "Error deleting user: " . $conn->error;
}
