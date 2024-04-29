<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Awal</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
   <!-- icheck bootstrap -->
   <link rel="stylesheet" href="{{ asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/summernote/summernote-bs4.min.css') }}">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
      <div class="register-logo">
        <a href="{{ route('register') }}">Registrasi E-Permission</a>
      </div>

      <div class="card">
        <div class="card-body register-card-body">
          <p class="login-box-msg">Isi Data yang Dibutuhkan</p>

          <form action="{{ route('register-proses') }}" method="post">
            @csrf
            <div class="input-group mb-3">
                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="{{ old('nama') }}">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
            </div>
            @error('nama')
            <small>{{ $message }}</small>
          @enderror

          <div class="input-group mb-3">
            <input type="text" name="nis" class="form-control" placeholder="Nomor NISN"  value="{{ old('nis') }}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
        </div>
        @error('nis')
        <small>{{ $message }}</small>
      @enderror

      <div class="input-group mb-3">
        <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>
      @error('email')
          <small>{{ $message }}</small>
        @enderror

      <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password" >
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      @error('password')
      <small>{{ $message }}</small>
    @enderror
  <div class="row">
    <!-- /.col -->
    <div class="col-12">
      <button type="submit" class="btn btn-primary btn-block">Buat Akun</button>
    </div>
              <!-- /.col -->
            </div>
          </form>

        </div>
        <!-- /.form-box -->
      </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

<!-- jQuery -->
<script src="{{ asset('lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('lte/dist/js/adminlte.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if($message = Session::get('failed'))
<script>
    Swal.fire('{{$message }}');
</script>
@endif

@if($message = Session::get('success'))
<script>
    Swal.fire('{{$message }}');
</script>
@endif
</body>
</html>



