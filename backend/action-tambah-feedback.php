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
        $sql_pengaduan = "SELECT * FROM pengaduan WHERE id_pengaduan='$id_pengaduan'";
        $result_pengaduan = mysqli_query($koneksi, $sql_pengaduan);
        $row_pengaduan = mysqli_fetch_assoc($result_pengaduan);
        
        $nama = $row_pengaduan["nama"];
        $nim = $row_pengaduan["nim"];
        $tgl_feedback = date("Y-m-d H:i:s");
        $alasan = $_POST["alasan"];

        // Perform database insertion for login information
        // "INSERT INTO login (hak, username, password) VALUES ('user', '$username', '$password')";
        $feedbackSql = "INSERT INTO feedback (id_feedback, id_pengaduan, nama, nim, tgl_feedback, alasan) VALUES ('$id_feedback', '$id_pengaduan', '$nama', '$nim', '$tgl_feedback', '$alasan')"; // "UPDATE pengaduan SET status='decline'  WHERE id_pengaduan='$id_pengaduan'"
        $result_add_feedback = mysqli_query($koneksi, $feedbackSql);

        if ($result_feedback) {
            echo "Feedback added successfully!";
        } else {
            echo "Error added feedback information: " . mysqli_error($koneksi);
        }
        
        mysqli_close($koneksi);
    } else {
        echo "Invalid request!";
    }
    header("Location: ../feedback-compose-admin.php")
?>