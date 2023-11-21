<?php
include "connection.php";

// Check if 'login_id' is set in the $_GET array
if (isset($_GET['login_id'])) {
    // Sanitize the input to prevent SQL injection
    $id = mysqli_real_escape_string($koneksi, $_GET['login_id']);

    $deleteLoginSQL = "DELETE FROM login WHERE user_id='$id'";
    $deleteUsersSQL = "DELETE FROM users WHERE login_id='$id'";

    $resultUsers = mysqli_query($koneksi, $deleteUsersSQL);

    if ($resultUsers) {
        $resultLogin = mysqli_query($koneksi, $deleteLoginSQL);
        if ($resultLogin) {
            echo "Data deleted successfully from both login and users tables.";
        } else {
            echo "Error deleting from users table: " . $deleteLoginSQL . "<br>" . mysqli_error($koneksi);
        }
    } else {
        echo "Error deleting from login table: " . $deleteUsersSQL . "<br>" . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);

    header("Location: ../list-user-admin.php");
    exit();
} else {
    echo "Error: 'login_id' not set in the URL.";
}
?>
