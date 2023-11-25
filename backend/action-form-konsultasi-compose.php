<?php

    include 'connection.php';
    
    // menangkap data yang di kirim dari form
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $jdl = $_POST['jdl'];    
    $psn = $_POST['psn'];
    
    function generateRandomId($length = 4) {
        $prefix = "konsultasi_";
        $characters = 'abcd0123456789';
        
        $randomId = $prefix;
        for ($i = 0; $i < $length; $i++) {
            $randomId .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomId;
    }
    $randomId = generateRandomId();
    
    $id_konsul = $randomId;
    $today = date("Y-m-d");

    // menginput data ke database
    $sql = "INSERT INTO konsultasi(id_konsul, pengirim, nama, judul, pesan, tgl_konsultasi) values
                        ('$id_konsul','$user_id','$username', '$jdl', '$psn', '$today')";
    

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