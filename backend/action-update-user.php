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
    // "UPDATE tb_siswa SET nis=$nis, nama='$nama', kelas='$kelas' WHERE id=$id";
    $loginSql = "UPDATE login SET username='$username'  WHERE password='$password'"; //(hak, username, password) VALUES ('user', '$username', '$password')";
    $result_edit_login = mysqli_query($koneksi, $loginSql);

    if ($result_edit_login) {
        // Get the login_id of the newly inserted login information
        $loginId = mysqli_insert_id($koneksi);

        // Perform database insertion for user information
        $userSql = "UPDATE users SET nama='$nama', fakultas='$fakultas', prodi='$program_studi', angkatan='$angkatan_mahasiswa' WHERE nim='$nim'"; //(nim, nama, fakultas, prodi, angkatan) VALUES ('$nim', '$nama', '$fakultas', '$program_studi', '$angkatan_mahasiswa')";
        $result_edit_user = mysqli_query($koneksi, $userSql);

        if ($result_edit_user) {
            echo "User edit successfully!";
        } else {
            echo "Error edit user information: " . mysqli_error($koneksi);
        }
    } else {
        echo "Error edit login information: " . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
} else {
    echo "Invalid request!";
}
header("Location: ../list-user-admin.php");
?>
