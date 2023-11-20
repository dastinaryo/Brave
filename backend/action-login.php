<?php

session_start();

// Connect to the database
require 'connection.php';

// Get the username and password from the form
$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);

// Query the database for the user
$sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
$result = mysqli_query($koneksi, $sql);

// Check if the user exists
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['role'] = $row['role'];

    if ($row['role'] == 'admin') {
        header("Location: admin_dashboard.php");
    } else {
        header("Location: /page/index.php");
    }
    exit();
}


// User does not exist or password is incorrect, set error message and redirect to login3.php
$_SESSION['error'] = 'Username atau Password salah';
header("Location: /page/login3.php");
mysqli_close($koneksi);
?>