<?php
include 'koneksi.php';
$nama_ayah = $_POST['nama_ayah'];
$tahun_lahir = $_POST['tahun_lahir'];
$pendidikan = $_POST['pendidikan'];
$pekerjaan = $_POST['pekerjaan'];
$penghasilan_bulan = $_POST['penghasilan_bulan'];
$berkebutuhan_khusus = $_POST['berkebutuhan_khusus'];

// Menyimpan ke database
$sql = mysqli_query($koneksi, "INSERT INTO ayah (nama_ayah, tahun_lahir, pendidikan, pekerjaan, penghasilan_bulan, berkebutuhan_khusus) 
VALUES ('$nama_ayah', '$tahun_lahir', '$pendidikan', '$pekerjaan', '$penghasilan_bulan', '$berkebutuhan_khusus')");
if ($sql) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Ayah Berhasil Disimpan!'); window.location.href='formregistrasi.php'</script>"; 
} else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Ayah Gagal Ditambahkan!!')</script>";
}
?>
