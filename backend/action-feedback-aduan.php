<?php
    include "connection.php";

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $randomString;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Usage: Generate a random string of length 8
        $id_feedback = generateRandomString(50);

            
        $id_pengaduan = $_POST["id_pengaduan"];
        $nama = $_POST["nama"];
        $nim = $_POST["nim"];
        $tgl_feedback = date("Y-m-d H:i:s");//date("Y-m-d");
        $alasan = $_POST["alasan"];

        // Perform database insertion for user information
        $feedbackSql = "INSERT INTO feedback (id_feedback, id_pengaduan, nama, nim, tgl_feedback, alasan) VALUES ('$id_feedback', '$id_pengaduan', '$nama', '$nim', '$tgl_feedback', '$alasan')";
        $result_feedback = mysqli_query($koneksi, $feedbackSql);

        if ($result_feedback) {
            echo "Feedback added successfully!";
        } else {
            echo "Error added feedback information: " . mysqli_error($koneksi);
        }

        mysqli_close($koneksi);
    } else {
        echo "Invalid request!";
    }
    header("Location: ../list-aduan-admin.php")
?>