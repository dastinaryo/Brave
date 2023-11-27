<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the form
    require 'connection.php';

    $id_konsul = $_POST["id_konsul"];
    $is_read = $_POST["is_read"];

    // Perform database insertion for login information
    // "UPDATE tb_siswa SET nis=$nis, nama='$nama', kelas='$kelas' WHERE id=$id";
    $readKonsulSql = "UPDATE konsultasi SET is_read='$is_read'  WHERE id_konsul='$id_konsul'"; //(hak, username, password) VALUES ('user', '$username', '$password')";
    $result_read_konsul = mysqli_query($koneksi, $readKonsulSql);

    if ($result_read_konsul) {
        echo "Read konsul succesfully.";
    } else {
        echo "Error read konsul information: " . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
} else {
    echo "Invalid request!";
}
header("Location: ../konsultasi-inbox-admin.php");
?>
