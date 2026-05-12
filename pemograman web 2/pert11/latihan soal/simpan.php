<?php

include "koneksi.php";

$nama  = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$sql = "INSERT INTO tbl_bukutamu(nama,email,pesan)
        VALUES('$nama','$email','$pesan')";

$query = mysqli_query($conn,$sql);

if($query){
    echo "Data berhasil disimpan <br>";
    echo "<a href='form.php'>Kembali</a>";
}else{
    echo "Data gagal disimpan";
}

?>