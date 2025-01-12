<!DOCTYPE html>
<html>

<head>
    <title>Add new uset</title>
    <style>
        body {
            margin: 0;
            padding: 50px;
            background-color: #f4f4f9;
        }

        .container {
            width: 400px;
            margin: auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
        }

        h1 {
            text-align: center;
        }

        form div {
            margin-bottom: 15px;
        }

        input[type="text"],
        input[type="password"],
        input[type="file"],
        select,
        button {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            cursor: pointer;
            background-color:rgb(204, 46, 93);
            color: #fff;
            border: none;
        }

        .error,
        .success {
            text-align: center;
        }

        .error {
            color: red;
            font-size: 0.9em;
        }

        .success {
            color: green;
            font-size: 0.9em;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Add new user</h1>

        <?php if (isset($_GET['error'])) : ?>
            <p class="error"><?php echo htmlspecialchars($_GET['error']); ?></p>
        <?php elseif (isset($_GET['success'])) : ?>
            <p class="success"><?php echo htmlspecialchars($_GET['success']); ?></p>
        <?php endif; ?>

        <form action="handle/create.php" method="POST" enctype="multipart/form-data">
            <div>
                <label for="username">Username</label>
                <input type="text" name="username" required>
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" required>
            </div>

            <div>
                <label for="role">Role</label>
                <select name="role" required>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <div>
                <label for="photo">Photo</label>
                <input type="file" name="photo" required>
            </div>

            <button type="submit">add</button>
        </form>

    
    </div>
</body>

</html>