<?php
    include "connection.php";
        
    // Define the data you want to insert
    $id  = $_GET["id"];

    echo $_GET["id"];

    // Create an SQL INSERT statement
    $sql_login = "DELETE FROM login WHERE password='$id'";
    $result_login = mysqli_query($koneksi, $sql_login);

    $sql_user = "DELETE FROM users WHERE nim='$id'";
    $result_user = mysqli_query($koneksi, $sql_user);

    // Execute the SQL query
    if ($result_login && $result_user) {
        echo "Data deleted successfully.";
    } else {
        echo "Error: " . $sql_login . " or " . $sql_user . " <br>" . mysqli_error($koneksi);
    }
    header("Location: ../list-user-admin.php")
?>