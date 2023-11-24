<?php
    include "connection.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        body {
            background-color: #4154f1; /* Warna dasar orange */
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .login-container h1 {
            color: #717ff5; /* Warna orange yang lebih cerah */
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .login-container button {
            background-color: #717ff5; /* Warna orange */
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Halaman Login</h1>
        <form action="/php/action_login.php" method="post">
            <input id="username" name="username" type="text" placeholder="Username" required>
            <input id="password" name="password" type="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
