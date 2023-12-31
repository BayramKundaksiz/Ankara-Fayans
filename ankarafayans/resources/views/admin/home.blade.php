<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yönetim</title>
    <link rel="shortcut icon" type="image/png" href="admin/assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="admin/assets/css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="./index.html" class="text-nowrap logo-img">
                        <img src="images/sukrugiris.png" width="180" alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                @include('admin.navbar')
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            @include('admin.header')
            <!--  Header End -->
            <div class="container-fluid">
                <!--  Row 1 -->
                <div class="container-fluid">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    @foreach ($mesaj as $gelenmesaj)
                                        <div class="col-md-4">
                                            <div class="card">
                                                <img src="images/gondericigorselleri/{{ $gelenmesaj->gonderici_gorseli }}"
                                                    style="height: 300px;" class="card-img-top" alt="admin.">
                                                <div class="card-body">
                                                    <h5 class="card-title">
                                                        {{ $gelenmesaj->gonderici_adi . ' ' . $gelenmesaj->gonderici_soyadi }}
                                                    </h5>
                                                    <p class="card-text">{{ $gelenmesaj->gonderici_mesaji }}</p>
                                                    <p class="card-text">E posta: {{ $gelenmesaj->gonderici_email }}</p>
                                                    <a href="#" class="btn btn-primary">Sil</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="admin/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="admin/assets/js/sidebarmenu.js"></script>
    <script src="admin/assets/js/app.min.js"></script>
    <script src="admin/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="admin/assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="admin/assets/js/dashboard.js"></script>
</body>

</html>
