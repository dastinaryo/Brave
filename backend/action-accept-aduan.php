<?php
    include "connection.php";
        
    // Define the data you want to insert
    $id  = $_GET["id"];

    echo $_GET["id"];

    // Create an SQL INSERT statement
    // $loginSql = "UPDATE login SET username='$username'  WHERE password='$password'";
    $sql_aduan = "UPDATE pengaduan SET status='process'  WHERE id_pengaduan='$id'";
    $result_aduan = mysqli_query($koneksi, $sql_aduan);

    // Execute the SQL query
    if ($result_aduan) {
        echo "Aduan accepted.";
    } else {
        echo "Error: " . $sql_aduan . "<br>" . mysqli_error($koneksi);
    }
    header("Location: ../list-aduan-admin.php")
?>