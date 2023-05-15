<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit();
}
?>

<?php
    include 'koneksi.php';
?>
<html>

<head>
    <title>FORMULIR PESERTA DIDIK</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>

    <?php
    $error_jenis_pendaftaran = "";
    $error_tgl_masuk = "";
    $error_nis = "";
    $error_no_peserta_ujian = "";
    $error_pernah_paud = "";
    $error_pernah_tk = "";
    $error_no_skhun = "";
    $error_no_ijazah = "";
    $error_hobi = "";
    $error_cita_cita = "";

    $jenis_pendaftaran = "";
    $tgl_masuk = "";
    $nis = "";
    $no_peserta_ujian = "";
    $pernah_paud = "";
    $pernah_tk = "";
    $no_skhun = "";
    $no_ijazah = "";
    $hobi = "";
    $cita_cita = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["nis"])) {
            $error_nis = "NIS Tidak Boleh Kosong";
        } else {
            $nis = cek_input($_POST["nis"]);
            if (!is_numeric($nis)) {
                $error_nis = "NIS Hanya Boleh Angka";
            }
        }

        if (empty($_POST["no_peserta_ujian"])) {
            $error_no_peserta_ujian = "No Peserta Ujian Tidak Boleh Kosong";
        } else {
            $no_peserta_ujian = cek_input($_POST["no_peserta_ujian"]);
            if (!is_numeric($no_peserta_ujian)) {
                $error_no_peserta_ujian = "Nomor Peserta Ujian Hanya Boleh Angka";
            }
        }

        if (empty($_POST["no_skhun"])) {
            $error_no_skhun = "Nomor Seri SKHUN Tidak Boleh Kosong";
        } else {
            $no_skhun = cek_input($_POST["no_skhun"]);
            if (!is_numeric($no_skhun)) {
                $error_no_skhun = "Nomor Seri SKHUN Hanya Boleh Angka";
            }
        }

        if (empty($_POST["no_ijazah"])) {
            $error_no_ijazah = "No Seri Ijazah Tidak Boleh Kosong";
        } else {
            $no_ijazah = cek_input($_POST["no_ijazah"]);
            if (!is_numeric($no_ijazah)) {
                $error_no_ijazah = "Nomor Seri Ijazah Hanya Boleh Angka";
            }
        }

    }

    function cek_input($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <br>
    <h1 class="text-center">FORMULIR PESERTA DIDIK</h1><br>
    <div class="card">
        <p>Tanggal : <?php echo date('d F Y'); ?></p>
        <div class="card-header bg-primary text-white">
            REGISTRASI PESERTA DIDIK
        </div>
        <div class="card-body">
            <form method="post" action="formpribadi.php">

                <div class="form-group row">
                    <label for="jenis_pendaftaran" class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
                    <div class="col-sm-10">
                        <input type="radio" name="jenis_pendaftaran" value="Siswa Baru">Siswa Baru</label>
                        <input type="radio" name="jenis_pendaftaran" value="Pindahan">Pindahan</label>
                        <span class="warning"><?php echo $error_jenis_pendaftaran; ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgl_masuk" class="col-sm-2 col-form-label">Tanggal Masuk Sekolah</label>
                    <div class="col-sm-10">
                        <td>
                            <input type="date" name="tgl_masuk">
                        </td>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                    <div class="col-sm-10">
                        <input type="text" name="nis" id="nis"
                            class="form-control <?php echo ($error_nis !="" ? "is-invalid" : ""); ?>"
                            placeholder="Nomor Induk Siswa" value="<?php echo $nis; ?>"> <span
                            class="warning"><?php echo $error_nis ?></span>
                    </div>
                </div> <br>

                <div class="form-group row">
                    <label for="no_peserta_ujian" class="col-sm-2 col-form-label">Nomor Peserta Ujian</label>
                    <div class="col-sm-10">
                        <input type="text" name="no_peserta_ujian" id="no_peserta_ujian"
                            class="form-control <?php echo ($error_no_peserta_ujian !="" ? "is-invalid" : ""); ?>"
                            placeholder="No Peserta Ujian" value="<?php echo $no_peserta_ujian; ?>"> <span
                            class="warning"><?php echo $error_no_peserta_ujian ?></span>
                    </div>
                </div>

                <br>
                <div class="form-group row">
                    <label for="pernah_paud" class="col-sm-2 col-form-label">Apakah Pernah Paud</label>
                    <div class="col-sm-10">
                        <input type="radio" name="pernah_paud" value="Ya">Ya</label>
                        <input type="radio" name="pernah_paud" value="Tidak">Tidak</label>
                        <span class="warning"><?php echo $error_pernah_paud; ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pernah_tk" class="col-sm-2 col-form-label">Apakah Pernah TK</label>
                    <div class="col-sm-10">
                        <input type="radio" name="pernah_tk" value="Ya">Ya</label>
                        <input type="radio" name="pernah_tk" value="Tidak">Tidak</label>
                        <span class="warning"><?php echo $error_pernah_tk; ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="no_skhun" class="col-sm-2 col-form-label">No. Seri SKHUN</label>
                    <div class="col-sm-10">
                        <input type="text" name="no_skhun" id="no_skhun"
                            class="form-control <?php echo ($error_no_skhun !="" ? "is-invalid" : ""); ?>"
                            placeholder="SKHUN Sebelumnya" value="<?php echo $no_skhun; ?>"> <span
                            class="warning"><?php echo $error_no_skhun ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="no_ijazah" class="col-sm-2 col-form-label">No. Seri Ijazah</label>
                    <div class="col-sm-10">
                        <input type="text" name="no_ijazah" id="no_ijazah"
                            class="form-control <?php echo ($error_no_ijazah !="" ? "is-invalid" : ""); ?>"
                            placeholder="Seri Ijazah Sebelumnya" value="<?php echo $no_ijazah; ?>"> <span
                            class="warning"><?php echo $error_no_ijazah ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="hobi" class="col-sm-2 col-form-label "> Hobi </label>
                <div class="col-sm-10">
                        <select class="form-control" name="hobi">
                            <option value=""></option>
                            <option value="Olahraga"> Olahraga </option>
                            <option value="Kesenian"> Kesenian</option>
                            <option value="Membaca"> Membaca</option>
                            <option value="Menulis"> Menulis </option>
                            <option value="Traveling"> Traveling </option>
                            <option value="Lainnya"> Lainnya </option>
                        </select>
                        <span class="warning"><?php echo $error_hobi; ?></span>
                    </div>
                </div>

                <br>
                <div class="form-group row">
                    <label for="cita_cita" class="col-sm-2 col-form-label "> Cita-Cita </label>
                    <div class="col-sm-10">
                        <select class="form-control" name="cita_cita">
                            <option value=""></option>
                            <option value="PNS"> PNS </option>
                            <option value="TNI/POLRI"> TNI/POLRI</option>
                            <option value="Guru/Dosen"> Guru/Dosen</option>
                            <option value="Dokter"> Dokter </option>
                            <option value="Politikus"> Politikus </option>
                            <option value="Wiraswasta"> Wiraswasta </option>
                            <option value="Seni/Lukis/Artis/Sejenis"> Seni/Lukis/Artis/Sejenis </option>
                            <option value="Lainnya"> Lainnya </option>
                        </select>
                        <span class="warning"><?php echo $error_cita_cita; ?></span>
                    </div>
                </div>

                <br>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" name="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>