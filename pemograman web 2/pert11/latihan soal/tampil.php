<?php

include "koneksi.php";

// pagination
$batas = 5;

$halaman = isset($_GET['halaman']) ? $_GET['halaman'] : 1;

$awal = ($halaman - 1) * $batas;

// ambil data
$data = mysqli_query($conn,
"SELECT * FROM tbl_bukutamu ORDER BY id DESC LIMIT $awal, $batas");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Buku Tamu</title>
</head>
<body>

<h2>Data Buku Tamu</h2>

<table border="1" cellpadding="10">

<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Pesan</th>
    <th>Tanggal</th>
</tr>

<?php
$no = $awal + 1;

while($d = mysqli_fetch_array($data)){
?>

<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $d['nama']; ?></td>
    <td><?php echo $d['email']; ?></td>
    <td><?php echo $d['pesan']; ?></td>
    <td><?php echo $d['tanggal']; ?></td>
</tr>

<?php } ?>

</table>

<br>

<?php

$total = mysqli_query($conn,"SELECT * FROM tbl_bukutamu");

$total_data = mysqli_num_rows($total);

$total_halaman = ceil($total_data / $batas);

for($i=1; $i<=$total_halaman; $i++){

    echo "<a href='tampil.php?halaman=$i'>$i </a>";
}

?>

<br><br>

<a href="form.php">Kembali ke Form</a>

</body>
</html>