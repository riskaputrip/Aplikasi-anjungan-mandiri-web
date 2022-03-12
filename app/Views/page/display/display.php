<!doctype html>
<html lang="en" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Aplikasi Antrian Berbasis Web">


    <!-- Title -->
    <title>Aplikasi Antrian Berbasis Web</title>

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/logo_puskesmas" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

    <!-- Custom Style -->
    <link rel="stylesheet" href="<?= base_url("css/display.css"); ?>">
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <div class="container pt-3">
            <!-- tampilkan pesan selamat datang -->
            <div class="alert alert-light d-flex align-items-center mb-5 " style="background-color: #C7DAF6;" role="alert">
                <i class="bi bi-house-door-fill"></i>
                <div>
                    <strong style="margin-left: 20px;">DISPLAY</strong>
                </div>
            </div>

            <div class="row gx-4">
                <!-- link halaman nomor antrian poli -->
                <div class="col-lg-4 mb-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4" style="text-align: center;">
                            <div class="feature-icon-1 bg-primary bg-gradient mb-4">
                                <i class="bi bi-tv"></i>
                            </div>
                            <h3>Poli Umum</h3>
                            <a style="margin-top: 15px;" href="<?= base_url('/display/display_poli_umum'); ?>" class="btn btn-primary rounded-pill px-4 py-2">
                                Buka<i class="bi-chevron-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Poli Gigi & Mulut -->
                <div class="col-lg-4 mb-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4" style="text-align: center;">
                            <div class="feature-icon-1 bg-primary bg-gradient mb-4">
                                <i class="bi bi-tv"></i>
                            </div>
                            <h3>Poli Gigi & Mulut</h3>
                            <a style="margin-top: 15px;" href="<?= base_url('/display/display_poli_gigi_mulut'); ?>" class="btn btn-primary rounded-pill px-4 py-2">
                                Buka <i class="bi-chevron-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Poli KIA -->
                <div class="col-lg-4 mb-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4" style="text-align: center;">
                            <div class="feature-icon-1 bg-primary bg-gradient mb-4">
                                <i class="bi bi-tv"></i>
                            </div>
                            <h3>Poli KIA</h3>
                            <a style="margin-top: 15px;" href="<?= base_url('/display/display_poli_kia'); ?>" class="btn btn-primary rounded-pill px-4 py-2">
                                Buka <i class="bi-chevron-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Laboratorium -->
                <div class="col-lg-4 mb-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4" style="text-align: center;">
                            <div class="feature-icon-1 bg-primary bg-gradient mb-4">
                                <i class="bi bi-tv"></i>
                            </div>
                            <h3>Laboratorium</h3>
                            <a style="margin-top: 15px;" href="<?= base_url('/display/display_laboratorium'); ?>" class="btn btn-primary rounded-pill px-4 py-2">
                                Buka <i class="bi-chevron-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Poli KB -->
                <div class="col-lg-4 mb-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4" style="text-align: center;">
                            <div class="feature-icon-1 bg-primary bg-gradient mb-4">
                                <i class="bi bi-tv"></i>
                            </div>
                            <h3>Poli KB</h3>
                            <a style="margin-top: 15px;" href="<?= base_url('/display/display_poli_kb'); ?>" class="btn btn-primary rounded-pill px-4 py-2">
                                Buka <i class="bi-chevron-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Poli Refraksi -->
                <div class="col-lg-4 mb-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4" style="text-align: center;">
                            <div class="feature-icon-1 bg-primary bg-gradient mb-4">
                                <i class="bi bi-tv"></i>
                            </div>
                            <h3>Poli Refraksi</h3>
                            <a style="margin-top: 15px;" href="<?= base_url('/display/display_poli_refraksi'); ?>" class="btn btn-primary rounded-pill px-4 py-2">
                                Buka <i class="bi-chevron-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Poli Persalinan -->
                <div class="col-lg-4 mb-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4" style="text-align: center;">
                            <div class="feature-icon-1 bg-primary bg-gradient mb-4">
                                <i class="bi bi-tv"></i>
                            </div>
                            <h3>Poli Persalinan</h3>
                            <a style="margin-top: 15px;" href="<?= base_url('/display/display_poli_persalinan'); ?>" class="btn btn-primary rounded-pill px-4 py-2">
                                Buka <i class="bi-chevron-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="footer mt-auto py-4">
        <div class="container-fluid">
            <!-- copyright -->
            <div class="copyright text-center mb-2 mb-md-0">
                &copy; 2022 - <a href="https://www.kemkes.go.id/" target="_blank" class="text-danger text-decoration-none">Riska</a>.
            </div>
        </div>
    </footer>

    <!-- Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>