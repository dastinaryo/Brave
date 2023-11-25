<?php

    include 'connection.php';
    
    // menangkap data yang di kirim dari form
    $nim = $_POST['user_id'];
    $jdl = $_POST['jdl'];
    $tgl = $_POST['tgl'];    
    $plk = $_POST['plk'];
    $det = $_POST['det'];

    // Mendapatkan informasi file
    $nama_file = $_FILES['file']['name'];
    $ukuran_file = $_FILES['file']['size'];
    $tipe_file = $_FILES['file']['type'];
    $tmp_file = $_FILES['file']['tmp_name'];

    // Lokasi folder untuk menyimpan file yang diunggah
    $folder_tujuan = "upload_files/";

    // Membuat path lengkap file tujuan
    $path_tujuan = $folder_tujuan . $nama_file;
    
    function generateRandomId($length = 4) {
        $prefix = "pengaduan_";
        $characters = 'abcd0123456789';
        
        $randomId = $prefix;
        for ($i = 0; $i < $length; $i++) {
            $randomId .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomId;
    }
    $randomId = generateRandomId();
    
    $id_pengaduan = $randomId;

    // menginput data ke database
    $sql = "INSERT INTO pengaduan(id_pengaduan, nim, judul, tgl_kejadian, pesan_aduan, pelaku, bukti, status) values
                        ('$id_pengaduan','$nim','$jdl', '$tgl', '$det', '$plk', '$nama_file', 'pending')";
    
    // Memindahkan file ke folder tujuan
    if (move_uploaded_file($tmp_file, $path_tujuan)) {
        echo "File berhasil diunggah.";
    }
    
    // mengalihkan halaman kembali ke index.php
    if(mysqli_query($koneksi, $sql)){
        echo "<script> alert('Pengaduan berhasil ditambah')</script>";
        echo "<script> window.location.href = '../pengaduan.php'</script>";
    }else{
        echo "<script> alert('Akun gagal ditambah')</script>";
        echo "<script> window.location.href = '../pengaduan.php'</script>";
    }
    $koneksi->close();

?>