<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the form
    require 'connection.php';
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $fakultas = $_POST["fakultas"];
    $program_studi = $_POST["program_studi"];
    $angkatan_mahasiswa = $_POST["angkatan_mahasiswa"];

    $username = $nama;
    $password = $nim;

    // Perform database insertion for login information
    $loginSql = "INSERT INTO login (username, password, role) VALUES ('$username', '$password', 'user')";

    if (mysqli_query($koneksi, $loginSql)) {
        // Get the login_id of the newly inserted login information
        $loginId = mysqli_insert_id($koneksi);

        // Perform database insertion for user information
        $userSql = "INSERT INTO users (login_id, nim, nama, fakultas, program_studi, angkatan_mahasiswa) VALUES ('$loginId', '$nim', '$nama', '$fakultas', '$program_studi', '$angkatan_mahasiswa')";

        if (mysqli_query($koneksi, $userSql)) {
            echo "User added successfully!";
        } else {
            echo "Error inserting user information: " . mysqli_error($koneksi);
        }
    } else {
        echo "Error inserting login information: " . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
} else {
    echo "Invalid request!";
}
header("Location: ../list-user-admin.php");
?>
