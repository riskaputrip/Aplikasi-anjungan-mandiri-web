<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cetak Antrian</title>
  </head>
  <body>
    <h1 align="center">SELAMAT DATANG</h1>
    <h2 align="center">Di Puskesmas Kecamatan Kebon Jeruk</h2>
    <h3 align="center">Jl. Raya Kb. Jeruk No.02, RW.01, Kb.Jeruk, Kec. Kb.Jeruk, Kota Jakarta Barat</h3>
    
    <div class="text" align="center" style= "font-size: 20px; font-weight: bolder;">
    <?= $tanggal ; ?></h3> <br>
     <hr> <br>
</div>
    <style>
  .bordered {
    margin-left: 180px;
    width: 600px;
    height: 350px;
    padding: 10px;
    border: 10px double black;
  }
</style>

<div class="bordered" align = "center">
<h2>NOMOR ANTRIAN</h2> <hr>
<h1><?= $no_antrian ;?>1</h1>
<h3><?= $poli ; ?>(Poli Umum)</h3> <hr>
<h3>Mohon Menunggu, Anda akan dipanggil sesuai nomor antrian anda</h3>
<h3>TERIMA KASIH</h3>
<h4>(KEMENTERIAN KESEHATAN REPUBLIK INDONESIA)</h4>
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