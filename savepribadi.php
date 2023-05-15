<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nisn = $_POST['nisn'];
$nik = $_POST['nik'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$agama = $_POST['agama'];
$berkebutuhan_khusus = $_POST['berkebutuhan_khusus'];
$alamat = $_POST['alamat'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$dusun = $_POST['dusun'];
$kelurahan = $_POST['kelurahan'];
$kecamatan = $_POST['kecamatan'];
$kode_pos = $_POST['kode_pos'];
$tempat_tinggal = $_POST['tempat_tinggal'];
$moda_transportasi = $_POST['moda_transportasi'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$kip = $_POST['kip'];
$no_kip = $_POST['no_kip'];
$kewarganegaraan = $_POST['kewarganegaraan'];
$negara = $_POST['negara'];

// Menyimpan ke database
$sql = mysqli_query($koneksi, "INSERT INTO pribadi (nama, jenis_kelamin, nisn, nik, tempat_lahir, tanggal_lahir, agama, berkebutuhan_khusus, alamat, rt, rw, dusun, kelurahan, kecamatan, kode_pos, tempat_tinggal, moda_transportasi, no_hp, email, kip, no_kip, kewarganegaraan, negara) 
VALUES ('$nama', '$jenis_kelamin', '$nisn', '$nik', '$tempat_lahir', '$tanggal_lahir', '$agama', '$berkebutuhan_khusus', '$alamat', '$rt', '$rw', '$dusun', '$kelurahan', '$kecamatan', '$kode_pos', '$tempat_tinggal', '$moda_transportasi', '$no_hp', '$email', '$kip', '$no_kip', '$kewarganegaraan', '$negara')");
if ($sql) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Pribadi Berhasil Disimpan!'); window.location.href='formregistrasi.php'</script>"; 
} else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Pribadi Gagal Ditambahkan!!')</script>";
}
?>
