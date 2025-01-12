<?php

session_start();
include 'db.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php?error=Unauthorized");
    exit;
}

if (!isset($_GET['id'])) {
    header("Location: ./dashboard.php?error=No user ID");
    exit;
}

$id = $_GET['id'];


$sql    = "SELECT * FROM users WHERE id = $id";
$result = $conn->query($sql);
$user   = $result->fetch_assoc();

if (!$user) {
    header("Location: ./dashboard.php?error=User not found");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update User</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background-color: #f4f4f9; }
        .container { width: 400px; margin: auto; background: #fff; padding: 20px; border-radius: 8px; }
        h1 { text-align: center; }
        form div { margin-bottom: 15px; }
        input[type="text"], input[type="password"], select, button {
            width: 100%; padding: 10px; margin-top: 5px; 
            border: 1px solid #ccc; border-radius: 4px;
        }
        button { cursor: pointer; background-color: #3498db; color: #fff; border: none; }
        .btn-cancel { background-color: #7f8c8d; margin-top: 10px; }
    </style>
</head>
<body>
<div class="container">
    <h1>Update User</h1>
    <form action="handle/update.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        
        <div>
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $user['username']; ?>" required>
        </div>
        
        <div>
            <label>Role</label>
            <select name="role" required>
                <option value="user"  <?php if($user['role'] == 'user')  echo 'selected'; ?>>User</option>
                <option value="admin" <?php if($user['role'] == 'admin') echo 'selected'; ?>>Admin</option>
            </select>
        </div>
        
        <div>
            <label>New Password (leave blank to keep current)</label>
            <input type="password" name="password" placeholder="New password...">
        </div>
        
        <div>
            <label>Update Photo (optional)</label>
            <input type="file" name="photo">
        </div>
        
        <button type="submit">Update</button>
        <a href="../dashboard.php" class="btn-cancel" style="text-decoration:none; color:#fff; padding:8px 16px; border-radius:4px;">Cancel</a>
    </form>
</div>
</body>
</html>
