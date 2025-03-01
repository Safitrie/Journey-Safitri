<!DOCTYPE html>
<html lang="en">
  <head>
    @include('components.meta')
  </head>

  <body id="page-top">
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
          <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800">Tambah Data Tempat</h1>
            <p class="mb-4">
              Tambah Data Daftar Tempat yang Pernah Safitri Kunjungi</a>.
            </p>
            <!-- Begin Page Content -->
          <form method="POST" action="/save" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="nama_tempat" style="color: black">Nama Tempat</label>
              <input type="text" class="form-control" id="nama_tempat" name="nama_tempat" aria-describedby="emailHelp" placeholder="nama tempat">
            </div>
            <div class="form-group">
              <label for="alamat" style="color: black">Alamat</label>
              <input type="text" name="alamat" class="form-control" id="alamat" placeholder="alamat">
            </div>
            <div class="form-group">
                <label for="image" style="color: black">Gambar Tempat</label>
                <input type="file" class="form-control-file" name="image" id="image">
              </div>
            <button type="submit" style="border: 2px solid #eb52a4; text-decoration: none; padding: 5px; border-radius: 20px; color: white; font-size: 15px; background-color: #eb52a4;">Submit</button>
            <a href="/place" style="border: 2px solid red; text-decoration: none; padding: 5px; border-radius: 20px; color: white; font-size: 15px; background-color: red;">Back</a>
          </form>
          </div>

          
            </div>
          </div>
          <!-- /.container-fluid -->
        </div>
        
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Your Website 2020</span>
            </div>
          </div>
        </footer>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    <script src="dashboard/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="dashboard/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="dashboard/js/demo/datatables-demo.js"></script>
  </body>
</html>
