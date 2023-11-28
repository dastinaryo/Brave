<?php
    include "connection.php";
        
    // Define the data you want to insert
    $id  = $_GET["id"];

    echo $_GET["id"];

    // Create an SQL INSERT statement
    $sql_konsultasi = "DELETE FROM konsultasi WHERE id_konsul='$id'";
    $result_konsultasi = mysqli_query($koneksi, $sql_konsultasi);


    // Execute the SQL query
    if ($result_konsultasi) {
        echo "Data deleted successfully.";
    } else {
        echo "Error: " . $sql_feedback . "<br>" . mysqli_error($koneksi);
    }
    header("Location: ../konsultasi-inbox-admin.php")
?>