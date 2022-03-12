<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@600&family=Secular+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url("css/console.css"); ?>">

    <title> Anjungan Mandiri </title>
</head>
<body">
    <!-- Navbar -->
    <nav class="navbar shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="img/logo_puskesmas.png" alt="" width="35" height="" class="">
            </a>
            <p class="text">PUSKESMAS KECAMATAN KEBON JERUK</p>
            
        </div>
    </nav>

    <!-- Container -->
    <main class="container border" style="background-color: #CDDEFF; border-radius: 20px; width: 1200px; height: 484px;">
        <div class="row">
            <div class="col-md-7 py-8">
                <div class="container">
                    <h2 style="color: black;"> SELAMAT DATANG! </h2>
                    <hr width="85%" />
                    <h2 style="color: black;"> Di Puskesmas </h2>
                    <h2 style="color: black;"> Kecamatan Kebon Jeruk </h2>
                    <img src="<?= base_url('img/image3.png'); ?>" alt="image 1" style="width:430px;height:268px;">
                </div>

            </div>
            <div class="col-md-4 py-5">
                <p class="" id="rcorners1" align="center">Silahkan memilih menu dibawah!</p>
                <style>
                    #rcorners1 {
                        border-radius: 15px;
                        background: linear-gradient(45deg, lightblue, lightgreen);
                        padding: 20px;
                        width: 400px;
                        height: 70px;
                        margin-left: 0%;
                        margin-top: 0%;
                    }
                </style>

                <div class="" id="rcorners2" align="center">
                    <h3 class="text1"> PESERTA BPJS </h3>
                    <a href="<?= base_url('/console_box/peserta_bpjs'); ?>" class="btn btn-warning">BPJS</a>
                </div>
                <style>
                    #rcorners2 {
                        border-top-left-radius: 15px;
                        border-top-right-radius: 15px;
                        border-bottom-right-radius: 0px;
                        border-bottom-left-radius: 0px;
                        border: solid black;
                        background: #98ACF8;
                        padding: 20px;
                        width: 400px;
                        height: 160px;
                        margin-right: 20%;
                    }
                </style>
                <div class="" id="rcorners3" align="center">
                    <h3 class="text2"> PESERTA NON BPJS </h3>
                    <a href="<?= base_url('/console_box/peserta_nonbpjs'); ?>" class="btn btn-danger">NON BPJS</a>
                </div>
                <style>
                    #rcorners3 {
                        border: solid black;
                        border-top-left-radius: 0px;
                        border-top-right-radius: 0px;
                        border-bottom-right-radius: 15px;
                        border-bottom-left-radius: 15px;
                        background: #98ACF8;
                        padding: 20px;
                        width: 400px;
                        height: 160px;
                        margin-right: 20%;
                    }
                </style>
            </div>
        </div>
        </div>
        </div>
    </main>



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