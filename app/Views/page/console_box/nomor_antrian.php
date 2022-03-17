<!doctype html>
<html lang="en" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Aplikasi Antrian Berbasis Web">


    <!-- Title -->
    <title>Aplikasi Anjungan Mandiri Berbasis Web</title>

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="img/logo_puskesmas.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

    <!-- Custom Style -->
    <link rel="stylesheet" href="style.css">
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <div class="container pt-2" style= "margin-bottom:20px;">
            <div class="row justify-content-lg-center">
            <div class="col-lg-5 mb-4">
                    <div class="px-4 py-3 mb-4 bg-white rounded-2 shadow-sm">
                        <!-- judul halaman -->
                        <div class="d-flex align-items-center me-md-auto">
                            <i class="bi-people-fill text-primary me-3 fs-3"></i>
                            <h1 class="h5 pt-2">Nomor Antrian</h1>
                            <a href="<?= base_url('/console_box'); ?>" class="btn btn-dark" style="margin-left: 40%; ">Kembali</a>
                        </div>
                        
                    </div>

                    <div class="card border-0 shadow-sm">
                        <div class="card-body text-center d-grid p-5">
                            <div class="border border-primary rounded-2 py-2 mb-5">
                                <h3 class="pt-4">ANTRIAN</h3>
                                <!-- menampilkan informasi jumlah antrian -->
                                <h1 id="antrian" class="display-1 fw-bold text-primary text-center lh-1 pb-2"><?= $jumlah_antrian; ?></h1>
                                <input type="hidden" id="poli" value="<?= $poli; ?>">
                            </div>
                            <!-- button pengambilan nomor antrian -->
                            <a id="insert" class="btn btn-primary btn-block rounded-pill fs-5 px-5 py-4 mb-2">
                                <i class="bi-person-plus fs-4 me-2"></i> Ambil Nomor
                            </a>
                            <a href="<?= base_url('/ConsoleBox/ambil_antrian'); ?>" class="btn btn-primary btn-block rounded-pill fs-5 px-5 py-4 mb-2">
                                <i class="bi-person-plus fs-4 me-2"></i> Cetak Antrian
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer mt-auto py-4">
        <div class="container">
            <!-- copyright -->
            <div class="copyright text-center mb-20 mb-md-0">
                &copy; 2022 - <a href="https://www.kemkes.go.id/" target="_blank" class="text-danger text-decoration-none">Kementerian Kesehatan RepubliK Indonesia</a>.
            </div>
        </div>
    </footer>

    <!-- jQuery Core -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            // tampilkan jumlah antrian
            currentAntrian = $('#antrian').text()
            currentAntrianInt = parseInt(currentAntrian)

            poli = $('#poli').val()

            // proses insert data
            $('#insert').on('click', function() {
                antrian = 1 + currentAntrianInt++
                $('#antrian').text(antrian)

                $.ajax({
                    type: 'POST', // mengirim data dengan method POST
                    url: '<?= base_url('/console_box/ambil_antrian'); ?>', // url file proses insert data 
                    data: {
                        antrian: antrian,
                        poli: poli,
                    },
                    success: function(result) { // ketika proses insert data selesai
                        // jika berhasil
                    },
                });
            });
        });
    </script>
</body>

</html>