<?php
    include "connection.php";
        
    // Define the data you want to insert
    $id  = $_GET["id"];

    echo $_GET["id"];

    // Create an SQL INSERT statement
    $sql_feedback = "DELETE FROM feedback WHERE id_feedback='$id'";
    $result_feedback = mysqli_query($koneksi, $sql_feedback);


    // Execute the SQL query
    if ($result_feedback) {
        echo "Data deleted successfully.";
    } else {
        echo "Error: " . $sql_feedback . "<br>" . mysqli_error($koneksi);
    }
    header("Location: ../feedback-inbox-admin.php")
?>