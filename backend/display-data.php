<?php
function displayResults($result)
{
    echo "<table class='table'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>NIM</th>";
    echo "<th>NAMA LENGKAP</th>";
    echo "<th>FAKULTAS</th>";
    echo "<th>PROGRAM STUDI</th>";
    echo "<th>ANGKATAN MAHASISWA</th>";
    echo "<th>ACTION</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['login_id'] . "</td>";
        echo "<td>" . $row['nim'] . "</td>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['fakultas'] . "</td>";
        echo "<td>" . $row['program_studi'] . "</td>";
        echo "<td>" . $row['angkatan_mahasiswa'] . "</td>";
        echo "<td>";
        echo "<a href='edit.php?bmi_id=" . $row['login_id'] . "' class='btn btn-primary'>Edit</a>";
        echo "<a href='delete.php?bmi_id=" . $row['login_id'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('Ingin hapus?')\">Delete</a>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
}
?>