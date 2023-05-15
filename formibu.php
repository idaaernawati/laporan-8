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
    $error_nama_ibu = "";
    $error_tahun_lahir = "";
    $error_pendidikan = "";
    $error_pekerjaan = "";
    $error_penghasilan_bulan = "";
    $error_berkebutuhan_khusus = "";
    
    $nama_ibu = "";
    $tahun_lahir = "";
    $pendidikan = "";
    $pekerjaan = "";
    $penghasilan_bulan = "";
    $berkebutuhan_khusus = "";
    
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
            DATA IBU KANDUNG
        </div>
        <div class="card-body">
            <form method="post" action="readform.php">

            <div class="form-group row">
                    <label for="nama_ibu" class="col-sm-2 col-form-label">Nama Ibu</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_ibu" id="nama_ibu"
                            class="form-control <?php echo ($error_nama_ibu !="" ? "is-invalid" : ""); ?>"
                            placeholder="Nama Ibu" value="<?php echo $nama_ibu; ?>"> <span
                            class="warning"><?php echo $error_nama_ibu ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tahun_lahir" class="col-sm-2 col-form-label">Tahun Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" name="tahun_lahir" id="tahun_lahir"
                            class="form-control <?php echo ($error_tahun_lahir !="" ? "is-invalid" : ""); ?>"
                            placeholder="Tahun Lahir Ibu" value="<?php echo $tahun_lahir; ?>"> <span
                            class="warning"><?php echo $error_tahun_lahir ?></span>
                    </div>
                </div>
            
                <div class="form-group row">
                    <label for="pendidikan" class="col-sm-2 col-form-label "> Pendidikan </label>
                    <div class="col-sm-10">
                        <select class="form-control" name="pendidikan">
                            <option value=""></option>
                            <option value="Tidak Sekolah"> Tidak Sekolah </option>
                            <option value="Putus SD"> Putus SD</option>
                            <option value="SD Sederajat"> SD Sederajat</option>
                            <option value="SMP Sederajat"> SMP Sederajat </option>
                            <option value="SMA Sederajat"> SMA Sederajat </option>
                            <option value="D1"> D1 </option>
                            <option value="D2"> D2 </option>
                            <option value="D3"> D3 </option>
                            <option value="D4/S1"> D4/S1 </option>
                            <option value="S2"> S2 </option>
                            <option value="S3"> S3 </option>
                        </select>
                        <span class="warning"><?php echo $error_pendidikan; ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pekerjaan" class="col-sm-2 col-form-label "> Pekerjaan </label>
                    <div class="col-sm-10">
                        <select class="form-control" name="pekerjaan">
                            <option value=""></option>
                            <option value="Tidak bekerja"> Tidak Bekerja </option>
                            <option value="Nelayan"> Nelayan</option>
                            <option value="Petani"> Petani</option>
                            <option value="Peternak"> Peternak </option>
                            <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                            <option value="Karyawan Swasta"> Karyawan Swasta</option>
                            <option value="Pedagang Kecil">Pedagang Kecil</option>
                            <option value="Pedagang Besar">Pedagang Besar</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Wirausaha">Wirausaha</option>
                            <option value="Buruh">Buruh</option>
                            <option value="Pensiunan">Pensiunan</option>
                            <option value="Lain-Lain">Lain-Lain</option>
                        </select>
                        <span class="warning"><?php echo $error_pekerjaan; ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="penghasilan_bulan" class="col-sm-2 col-form-label "> Penghasilan </label>
                    <div class="col-sm-10">
                        <select class="form-control" name="penghasilan_bulan">
                            <option value=""></option>
                            <option value="Kurang dari 500.000"> Kurang dari 500.000 </option>
                            <option value="500.000 - 999.9999">500.000 - 999.9999</option>
                            <option value="1.000.000 - 1.999.999">1.000.000 - 1.999.999</option>
                            <option value="2 juta - 4.999.999">2 juta - 4.999.999</option>
                            <option value="5 juta - 20 juta">5 juta - 20 juta</option>
                            <option value="lebih dari 20 juta">lebh dari 20 juta</option>
                        </select>
                        <span class="warning"><?php echo $error_penghasilan_bulan; ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="berkebutuhan_khusus" class="col-sm-2 col-form-label "> Berkebutuhan Khusus </label>
                    <div class="col-sm-10">
                        <select class="form-control" name="berkebutuhan_khusus">
                            <option value=""></option>
                            <option value="Tidak"> Tidak </option>
                            <option value="Netra">Netra</option>
                            <option value="Rungu">Rungu</option>
                            <option value="Grahita Ringan">Grahita Ringan</option>
                            <option value="Grahita Sedang">Grahita Sedang</option>
                            <option value="Daksa Ringan">Daksa Ringan</option>
                            <option value="Daksa Sedang">Daksa Sedang</option>
                            <option value="Laras">Laras</option>
                            <option value="Wicara">Wicara</option>
                            <option value="Tuna Ganda">Tuna Ganda</option>
                            <option value="Hiper Aktif">Hiper Aktif</option>
                            <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                            <option value="Bakat Istimewa">Bakat Istimewa</option>
                            <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                            <option value="Indigo">Indigo</option>
                            <option value="Down Sindrome">Down Sindrome</option>
                            <option value="Autis">Autis</option>
                        </select>
                        <span class="warning"><?php echo $error_berkebutuhan_khusus; ?></span>
                    </div>
                </div>

                <br>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>