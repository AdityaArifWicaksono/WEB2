<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu</title>
</head>
<body>

<h2>Form Buku Tamu</h2>

<form action="simpan.php" method="POST">

    Nama : <br>
    <input type="text" name="nama" required>
    <br><br>

    Email : <br>
    <input type="email" name="email" required>
    <br><br>

    Pesan : <br>
    <textarea name="pesan" required></textarea>
    <br><br>

    <button type="submit">Simpan</button>

</form>

<br>
<a href="tampil.php">Lihat Buku Tamu</a>

</body>
</html>