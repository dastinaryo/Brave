<?php

    include 'connection.php';
    
    // menangkap data yang di kirim dari form
    $user_id = $_POST['user_id'];
    $penerima = 'admin';
    $jdl = $_POST['jdl'];    
    $psn = $_POST['psn'];
    
    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $randomString;
    }

    $randomId = generateRandomString(50);
    
    $id_konsul = $randomId;
    $today = date("Y-m-d H:i:s");
    $is_read = 'unread';

    // menginput data ke database
    $sql = "INSERT INTO konsultasi(id_konsul, pengirim, penerima, judul, pesan, tgl_konsultasi, is_read) values
                        ('$id_konsul','$user_id','$penerima', '$jdl', '$psn', '$today', '$is_read')";
    

    // mengalihkan halaman kembali
    if(mysqli_query($koneksi, $sql)){
        echo "<script> alert('Konsultasi berhasil dikirim')</script>";
        echo "<script> window.location.href = '../konsultasi-compose.php'</script>";
    }else{
        echo "<script> alert('Konsultasi gagal dikirim')</script>";
        echo "<script> window.location.href = '../konsultasi-compose.php'</script>";
    }
    $koneksi->close();

?>