<?php

session_start();
include 'db.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php?error=Unauthorized access");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color:rgb(112, 112, 126);
        }

        .container {
            margin: auto;
            width: 80%;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ccc;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
        }

        .btn {
            padding: 8px 16px;
            margin: 2px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-delete {
            background-color:rgb(177, 60, 231);
            color: white;
        }

        .btn-update {
            background-color:rgb(52, 219, 52);
            color: white;
        }

        .logout {
            float: right;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome Admin, <?php echo $_SESSION['username']; ?></h1>

        <form action="handle/logout.php" method="POST" class="logout">
            <button class="btn" type="submit">Logout</button>
        </form>

        <h2>All Users</h2>
        <div class="">
            <form action='create.php' method='POST' style='display:inline;'>
            
                <button class='btn btn-outline-primary' type='submit'>Add user</button>
            </form>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Photo</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $users = $conn->query("SELECT * FROM users");
                while ($user = $users->fetch_assoc()) {
                    echo "<tr>
                        <td>{$user['id']}</td>
                        <td>{$user['username']}</td>
                        <td>{$user['role']}</td>
                        <td><img src='uploads/{$user['photo']}' alt='Photo' width='50'></td>
                        <td>
                            <form action='handle/delete_user.php' method='POST' style='display:inline;'>
                                <input type='hidden' name='id' value='{$user['id']}'>
                                <button class='btn btn-delete' type='submit'>Delete</button>
                            </form>
                            <form action='update.php' method='GET' style='display:inline;'>
                                <input type='hidden' name='id' value='{$user['id']}'>
                                <button class='btn btn-update' type='submit'>Update</button>
                            </form>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>