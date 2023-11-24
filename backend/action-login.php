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
    $_SESSION['username'] = $row['username'];
    $_SESSION['user_id'] = $row['password'];
    $_SESSION['hak'] = $row['hak'];

    if ($row['hak'] == 'admin') {
        header("Location: ../dashboard-admin.php");
    } else {
        header("Location: /dashboard.php");
    }
    exit();
}else{
    // User does not exist or password is incorrect, set error message and redirect to login3.php
    $_SESSION['error'] = 'Username atau Password salah';
    header("Location: ../login.php");
    mysqli_close($koneksi);
}
?>