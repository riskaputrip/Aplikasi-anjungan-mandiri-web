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
    <link rel="shortcut icon" href="assets/img/logo_puskesmas" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

    <!-- Custom Style -->
    <link rel="stylesheet" href="<?= base_url("css/style.css"); ?>">
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <div class="container pt-3">
            <!-- tampilkan pesan selamat datang -->
            <div class="alert alert-light d-flex align-items-center mb-5 " style="background-color: #C7DAF6;" role="alert">
                <i class="bi bi-house-door-fill"></i>
                <div>
                    <strong style="margin-left: 20px;">DASHBOARD</strong>
                </div>
            </div>

            <div class="row gx-4">
                <!-- link halaman nomor antrian -->
                <div class="col-lg-4 mb-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-5" style="text-align: center;">
                            <div class="feature-icon-1 bg-primary bg-gradient mb-4">
                                <i class="bi-people"></i>
                            </div>
                            <h3>Console Box</h3>
                            <a style="margin-top: 15px;" href="<?= base_url('/console_box'); ?>" class="btn btn-primary rounded-pill px-4 py-2">
                                Tampilkan <i class="bi-chevron-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- petugas panggil -->
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-5" style="text-align: center;">
                            <div class="feature-icon-1 bg-primary bg-gradient mb-4">
                                <i class="bi bi-headset"></i>
                            </div>
                            <h3>Petugas Panggil</h3>
                            <a style="margin-top: 15px;" href="<?= base_url('/petugas_panggil'); ?>" class="btn btn-primary rounded-pill px-4 py-2">
                                Tampilkan <i class="bi-chevron-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- display -->
                <div class="col-lg-4 mb-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-5" style="text-align: center;">
                            <div class="feature-icon-1 bg-primary bg-gradient mb-4">
                                <i class="bi bi-display"></i>
                            </div>
                            <h3>Display</h3>
                            <a style="margin-top: 15px;" href="<?= base_url('/display'); ?>" class="btn btn-primary rounded-pill px-4 py-2">
                                Tampilkan <i class="bi-chevron-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-2">

            </div>
    </main>

    <!-- Footer -->
    <footer class="footer mt-auto py-4">
        <div class="container-fluid">
            <!-- copyright -->
            <div class="copyright text-center mb-2 mb-md-0">
                &copy; 2022 - <a href="https://www.kemkes.go.id/" target="_blank" class="text-danger text-decoration-none">Kementerian Kesehatan Republik Indonesia</a>.
            </div>
        </div>
    </footer>

    <!-- Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>