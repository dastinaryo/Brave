<?php
    include "connection.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Usage: Generate a random string of length 8
        $id_feedback = $_POST["id_feedback"];
        $alasan = $_POST["alasan"];

        // Perform database insertion for login information
        // "INSERT INTO login (hak, username, password) VALUES ('user', '$username', '$password')";
        $editFeedbackSql = "UPDATE feedback SET alasan='$alasan'  WHERE id_feedback='$id_feedback'"; //(hak, username, password) VALUES ('user', '$username', '$password')";
        $result_editFeedback = mysqli_query($koneksi, $editFeedbackSql);

        if ($result_editFeedback) {
            // Perform database insertion for user information
            echo "Feedback edit successfully!";
        } else {
            echo "Error Feedback edit information: " . mysqli_error($koneksi);
        }

        mysqli_close($koneksi);
    } else {
        echo "Invalid request!";
    }
    header("Location: ../feedback-inbox-admin.php")
?>