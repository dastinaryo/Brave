<?php
	require '../backend/connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Latihan PHP </title>
</head>
<body>
	<form id="feedbackForm" method="post">
		<div class="form-group row">
			<form id="namaMhsForm" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<?php
					$sql_user = "SELECT * FROM users ORDER BY nama ASC";
					$result_user = mysqli_query($koneksi, $sql_user);
					echo '
						<label for="nama_mahasiswa" class="col-form-label col-md-1" onclick="click_name()">Nama</label>
						<div class="col-md-11">
							<select class="form-control" id="nama-mahasiswa-select" name="nama-mahasiswa-select" >
					';
									if (mysqli_num_rows($result_user) > 0) {
										// Loop through each row and display the messages
										while ($row_user = mysqli_fetch_assoc($result_user)) {
											echo '<option id="' . $row_user['nim'] . '" value="' . $row_user['nim'] . '" >' . $row_user['nama'] . '</option>';
										}
									}else{
										echo '<option value="option1">Tidak Ada</option>';
									}
					echo '
							</select>
						</div>
					';
				?>
			</form>
		</div>

		<script>
			function click_name(){
				var element = document.getElementById("namaMhsForm").submit();
				// console.log(element.innerHTML);
			}
		</script>

		<div class="form-group row">
			<label for="to" class="col-form-label col-md-1">Aduan</label>
			<div class="col-md-11">
				<!-- <select class="form-control" id="to" name="nama_mahasiswa"> -->
					<?php
						if ($_SERVER["REQUEST_METHOD"] == "POST") {
							$nama=$_POST['nama-mahasiswa-select'];
							echo "nama";
							// $sql_pengaduan = "SELECT * FROM pengaduan WHERE nama='$nama' ORDER BY judul ASC";
							// $result_pengaduan = mysqli_query($koneksi, $sql_pengaduan);
							
							// // Check if there are any messages
							// if (mysqli_num_rows($result_pengaduan) > 0) {
							// 	// Loop through each row and display the messages
							// 	while ($row_pengaduan = mysqli_fetch_assoc($result_pengaduan)) {
							// 		echo '<option value="' . $row_pengaduan['judul'] . '">' . $row_pengaduan['judul'] . '</option>';
							// 	}
							// }else{
							// 	echo '<option value="option1">Tidak Ada</option>';
							// }
						}else{
							echo "tidak ada";
							// $sql_pengaduan = "SELECT * FROM pengaduan ORDER BY judul ASC";
							// $result_pengaduan = mysqli_query($koneksi, $sql_pengaduan);
							
							// // Check if there are any messages
							// if (mysqli_num_rows($result_pengaduan) > 0) {
							// 	// Loop through each row and display the messages
							// 	while ($row_pengaduan = mysqli_fetch_assoc($result_pengaduan)) {
							// 		echo '<option value="' . $row_pengaduan['judul'] . '">' . $row_pengaduan['judul'] . '</option>';
							// 	}
							// }else{
							// 	echo '<option value="option1">Tidak Ada</option>';
							// }
						}
					?>
				<!-- </select> -->
			</div>
		</div>

		<div class="form-group row">
			<label for="to" class="col-form-label col-md-1">Tanggal</label>
			<div class="col-md-11">
				<input type="date" class="form-control" id="to" name="tanggal_feedback">
			</div>
		</div>
	</form>
</body>
</html>