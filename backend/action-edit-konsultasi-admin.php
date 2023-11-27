<?php
    include "connection.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Usage: Generate a random string of length 8
        $id_konsul = $_POST["id_konsul"];
        $pesan = $_POST["pesan"];

        // Perform database insertion for login information
        // "INSERT INTO login (hak, username, password) VALUES ('user', '$username', '$password')";
        $editKonsultasiSql = "UPDATE konsultasi SET pesan='$pesan'  WHERE id_konsul='$id_konsul'"; //(hak, username, password) VALUES ('user', '$username', '$password')";
        $result_editKonsultasi = mysqli_query($koneksi, $editKonsultasiSql);

        if ($result_editKonsultasi) {
            // Perform database insertion for user information
            echo "Konsultasi edit successfully!";
        } else {
            echo "Error Konsultasi edit information: " . mysqli_error($koneksi);
        }

        mysqli_close($koneksi);
    } else {
        echo "Invalid request!";
    }
    header("Location: ../konsultasi-sent-admin.php")
?>