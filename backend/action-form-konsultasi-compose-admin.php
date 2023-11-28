<?php
    include 'connection.php';
    
    // menangkap data yang di kirim dari form
    $pengirim  = 'admin';
    $penerima = $_POST['penerima'];
    $jdl = $_POST['judul'];    
    $psn = $_POST['pesan'];
    
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
                        ('$id_konsul','$pengirim','$penerima', '$jdl', '$psn', '$today', '$is_read')";
    

    // mengalihkan halaman kembali
    if(mysqli_query($koneksi, $sql)){
        echo "<script> window.location.href = '../konsultasi-compose-admin.php'</script>";
    }else{
        echo "<script> window.location.href = '../konsultasi-compose-admin.php'</script>";
    }
    $koneksi->close();

?>