<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>DPRKP2 | Dashboard</title>
  <!-- Custom fonts for this template-->
  <link href="{{ asset('admin_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link href="{{ asset('admin_assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
  <style>
    .hidden {
        display: none;
    }
</style>
</head>
<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
  
    <!-- Sidebar -->
    @include('layout.sidebar')
    <!-- End of Sidebar -->
  
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
  
      <!-- Main Content -->
      <div id="content">
  
        <!-- Topbar -->
        @include('layout.navbar')
        <!-- End of Topbar -->
  
        <!-- Begin Page Content -->
        <div class="container-fluid">
  
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
          </div>
  
          @yield('contents')
  
          <!-- Content Row -->
  
  
        </div>
        <!-- /.container-fluid -->
  
      </div>
      <!-- End of Main Content -->
  
      <!-- Footer -->
      @include('layout.footer')
      @include('sweetalert::alert')
      <!-- End of Footer -->
  
    </div>
    <!-- End of Content Wrapper -->
  
  </div>
  <!-- End of Page Wrapper -->
  
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('admin_assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{ asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <!-- Custom scripts for all pages-->
  <script src="{{ asset('admin_assets/js/sb-admin-2.min.js') }}"></script>
  <!-- Page level plugins -->
  <script src="{{ asset('admin_assets/vendor/chart.js/Chart.min.js') }}"></script>
  
<script src="{{ asset('admin_assets/js/demo/chart-area-demo.js') }}"></script>
  <script src="{{ asset('admin_assets/js/demo/chart-pie-demo.js') }}"></script>
 
 <script src="{{ asset('admin_assets/js/demo/chart-area-demo.js') }}"></script>
  <script src="{{ asset('admin_assets/js/demo/chart-pie-demo.js') }}"></script>
  <script>
    function toggleInput(checkboxId, inputId) {
        var checkbox = document.getElementById(checkboxId);
        var input = document.getElementById(inputId);
        
        // Membuat input dapat diedit saat checkbox dicentang
        checkbox.addEventListener('change', function() {
            input.disabled = !this.checked;
            input.classList.toggle('hidden', !this.checked);
            // input.classList.remove("tes");
            // if (this.checked) {
            //     input.focus();
            // }
        });
    }

    toggleInput('checkbox_lahan_makam', 'input_lahan_makam');
    toggleInput('checkbox_jalan', 'input_jalan');
    toggleInput('checkbox_saluran', 'input_saluran');
    toggleInput('checkbox_rth', 'input_rth');
    toggleInput('checkbox_sarana_peribadatan', 'input_sarana_peribadatan');
    toggleInput('checkbox_pju', 'input_pju');
    toggleInput('checkbox_tps', 'input_tps');
    toggleInput('checkbox_pos_pengamanan', 'input_pos_pengamanan');
    toggleInput('checkbox_subsidi', 'input_subsidi');
    toggleInput('checkbox_non_subsidi', 'input_non_subsidi');
    toggleInput('checkbox_ruko', 'input_ruko');
    
</script>


</body>
</html>