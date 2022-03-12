<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@600&family=Secular+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/peserta_bpjs.css'); ?>">

    <title>Peserta BPJS</title>
</head>

<body>
    <a href="<?= base_url('/console_box'); ?>" class="btn btn-dark" style="margin-left: 92%; margin-top:1%;">Kembali</a>
    <div class="signupSection" style="border-radius: 20px;" align="rihght;">

        <div class="info" style="border-radius: 20px 0px 0px 20px;">

            <img src="/img/logo_kemenkes.png" id="image1" alt="image 1" style="width:230px;height:100px; margin-top: 100px; margin-left: 20px; margin-right: 20px;" align="center">
            <i class="icon" aria-hidden="true"></i>
            <hr width="60%" style="color: black; margin-left: 60px;" />
            <p style="font-family: 'Archivo Narrow', sans-serif; color: #043F84;">Silahkan mengisi formulir disamping!</p>
        </div>

        <div class="container">
            <div id="wrapper">
                <div class="photoprofile">

                    <img src="/img/user.png" class="imgprofile" style="width:50px;height:50px; margin-top: 30px;"></img>
                    <h5 style="color: black; margin-top: 10px; font-weight: bold; font-family: 'Archivo Narrow', sans-serif;">PESERTA BPJS</h5>

                    <hr width="50%" style="color: black; margin-left: 120px;">
                </div>
                <div class="dataprofile"></div>
            </div>
            <form role="form" method="post" action="/console_box/form_bpjs">
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="" class="col-form-label" style="color: black; margin-top: 20px; margin-left: 35px; font-weight: bold; font-family: 'Archivo Narrow', sans-serif;">NIK/NO.BPJS :</label>
                    </div>
                    <div class="col-auto" style="margin-top: 35px; margin-left: 32px;">
                        <input style="width:250px;" type="text" name="no_bpjs" class="form-control" placeholder="Masukkan Nomor BPJS Anda">
                    </div>
                    <span id="nikHelpInline" class="form-text" style="margin-bottom: 10px;">
                        *NIK harus 16 digit.
                    </span>
                </div>
                <div class="form-group row">
                    <label for="inputPoli" class="col-sm-3 col-form-label" style="color: black; margin-left: 17px; font-weight: bold; font-family: 'Archivo Narrow', sans-serif;">Pilih Poli :</label>
                    <div class="col-sm-6" style="margin-left: 27px;">
                        <select class="form-select" name="poli" aria-label="Default select example" style="font-weight: bolder;">
                            <option>-- Pilih Poli --</option>
                            <option value="POLI UMUM">POLI UMUM</option>
                            <option value="POLI GIGI & MULUT">POLI GIGI & MULUT</option>
                            <option value="POLI KIA">POLI KIA</option>
                            <option value="LABORATORIUM">LABORATORIUM</option>
                            <option value="POLI KB">POLI KB</option>
                            <option value="POLI REFRAKSI">POLI REFRAKSI</option>
                            <option value="POLI PERSALINAN">POLI PERSALINAN</option>
                        </select>
                    </div>
                </div>
                <button type="submit" style="width:100px; margin-top: 25px;" class="btn btn-primary" style="margin-top: 30px;" name="cari">Cari</button>
        </div>

    </div>
    </form>
    <?php
    if (isset($_POST['cari'])) {
        $no_bpjs = $_POST["no_bpjs"];
        $ambil = $koneksi->query("SELECT * FROM peserta_bpjs WHERE no_bpjs='$no_bpjs'");
        $nobpjsyangcocok = $ambil->num_rows;
        if ($nobpjsyangcocok == 1) {
            $no_bpjs = $ambil->fetch_assoc();
            $_SESSION['peserta_bpjs'] = $no_bpjs;
            echo "<script>alert ('Nomor BPJS Anda Telah terdaftar');</script>";
            echo "<script>location='datadiri.php';</script>";
        } else {
            echo "<script>alert ('No BPJS Anda tidak ditemukan');</script>";
            echo "<script>location='peserta_bpjs.php';</script>";
        }
    }
    ?>
    </div>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  -->
</body>

</html>