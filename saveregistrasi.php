<?php 
include 'koneksi.php';
$jenis_pendaftaran = $_POST['jenis_pendaftaran'];
$tgl_masuk = $_POST['tgl_masuk'];
$nis = $_POST['nis'];
$no_peserta_ujian = $_POST['no_peserta_ujian'];
$pernah_paud = $_POST['pernah_paud'];
$pernah_tk = $_POST['pernah_tk'];
$no_skhun = $_POST['no_skhun'];
$no_ijazah = $_POST['no_ijazah'];
$hobi = $_POST['hobi'];
$cita_cita = $_POST['cita_cita'];

// Menyimpan ke database
$sql = mysqli_query($koneksi, "INSERT INTO registrasi (jenis_pendaftaran, tgl_masuk, nis, no_peserta_ujian, pernah_paud, pernah_tk, no_skhun, no_ijazah, hobi, cita_cita) 
VALUES ('$jenis_pendaftaran', '$tgl_masuk', '$nis', '$no_peserta_ujian', '$pernah_paud', '$pernah_tk', '$no_skhun', '$no_ijazah', '$hobi', '$cita_cita')");
if ($sql) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Keseluruhan Berhasil Disimpan!'); window.location.href='formregistrasi.php'</script>"; 
} else {
    // pesan jika data gagal disimpan
    echo "alert('Data Registrasi Gagal Ditambahkan!!');";
}
?>
