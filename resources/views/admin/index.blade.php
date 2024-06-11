<!DOCTYPE html>
<html lang="en">

<head>

    @include('components.meta')

</head>

<body id="page-top">
    @if(session('message'))
        <div class="alert alert-success">
         {{ session('message') }}
        </div>
    @endif

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('components.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('components.header')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-center text-center mb-4">
                        <h1 class="h3 mb-0 text-gray-800 text-center">Selamat Datang di Safitri Journey</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->

                        <div class="col-lg-12 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Notebook</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-8 text-center">
                                            <p class="px-3 px-sm-4" style="margin-top: 70px; color: black;">Website ini berisi tentang informasi katalog tempat yang perna aku kunjungi sebagai mahasiswa sekaligus perantau di kota Yogyakarta. Untuk lebih jelas tentang tempat mana aja yang perna aku kunjungi di Jogja, silahkan ke menu Lokasi di sebelah kiri dan mulai petualangan kamu bersamaku. Selamat menikmati.</p>
                                        </div>
                                        <div class="col-lg-4 text-center">
                                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 15rem;"
                                                src="dashboard/img/kartun.png" alt="...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('components.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="dashboard/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="dashboard/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="dashboard/js/demo/chart-area-demo.js"></script>
    <script src="dashboard/js/demo/chart-pie-demo.js"></script>

</body>

</html>