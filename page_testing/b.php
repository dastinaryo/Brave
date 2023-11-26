<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Latihan PHP </title>
</head>
<body>
    <?php
        echo "Hardcode <br>";
        $x = 1;

        while($x <= 10) {
            echo "$x. Tekkom 2020<br>";
            $x++;
        } 
    ?>

    <!-- <form id="form-aja"> -->
        <form id="namaMhsForm" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <br><a>Menggunakan Input</a><br>
            Loop: <input type="text" name="looping" value=""><br>
            Teks: <input type="text" name="teks_input" value=""><br>
            Select: <select id="nama-mahasiswa-select" name="nama-mahasiswa-select" onclick="click_name()">
                        <option value="option1" ><a>Tidak Ada</a></option>
                        <option value="option2" ><a>Ada</a></option>
                    </select>
            <!-- <input type="submit" value="Generate"> -->
        </form>
    <!-- </form> -->


    <script>
        function click_name(){
            var element = document.getElementById("namaMhsForm").submit();
            // console.log(element.innerHTML);
        }
    </script>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $x = 1;
        $looping = $_POST['looping'];
        $teks_input = $_POST['teks_input'];
        $test = $_POST['nama-mahasiswa-select'];
        echo "$looping";
        echo "$test";

        // while($x <= $looping) {
        //     echo "$x. $teks_input <br>";
        //     $x++;
        // } 
    }
    ?>
</body>
</html>

form id="namaMhsForm" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
									<div class="form-group row">
											<?php
												$sql_user = "SELECT * FROM users ORDER BY nama ASC";
												$result_user = mysqli_query($koneksi, $sql_user);
												echo '
													<label for="nama-mahasiswa-selected" class="col-form-label col-md-1" > <a >Nama</a></label>
													<div class="col-md-11">
														<select class="form-control" id="nama-mahasiswa-selected" name="nama-mahasiswa-selected" onclick="click_name()">
												';
																if (mysqli_num_rows($result_user) > 0) {
																	// Loop through each row and display the messages
																	while ($row_user = mysqli_fetch_assoc($result_user)) {
																		echo '<option id="' . $row_user['nim'] . '" value="option1" >' . $row_user['nama'] . '</option>';
																	}
																}else{
																	echo '<option value="option1">Tidak Ada</option>';
																}
												echo '
														</select>
													</div>
												';
											?>
										
									</div>
								</form>
								<script>
									function click_name(){
										var element = document.getElementById("namaMhsForm").submit();
										console.log(element.innerHTML);
									}
								</script>