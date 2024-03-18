<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>DPRKP2 - Register</title>
    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin_assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body class="bg-gradient-dark">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create akun pengembang</h1>
                            </div>
                            <form action="{{ route('register') }}" method="POST" class="user" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input name="name" type="text"
                                        class="form-control form-control-user @error('name')is-invalid @enderror"
                                        id="exampleInputName" placeholder="Nama penanggung jawab..."
                                        value="{{ old('name') }}" required>
                                    @error('name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email"
                                        class="form-control form-control-user @error('email')is-invalid @enderror"
                                        id="exampleInputEmail" placeholder="Email Address" value="{{ old('email') }}"
                                        required>
                                    @error('email')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="password" type="password"
                                            class="form-control form-control-user @error('password')is-invalid @enderror"
                                            id="exampleInputPassword" placeholder="Password"
                                            value="{{ old('password') }}" required>
                                        @error('password')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="password-confirm" type="password"
                                            class="form-control form-control-user" name="password_confirmation" required
                                            autocomplete="new-password" placeholder="Password confirmation">
                                        @error('password_confirmation')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input name="nama_badan_usaha" type="text"
                                        class="form-control form-control-user @error('nama_badan_usaha')is-invalid @enderror"
                                        placeholder="Nama badan usaha..." value="{{ old('nama_badan_usaha') }}"
                                        required>
                                    @error('nama_badan_usaha')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input name="alamat_perusahaan" type="text"
                                        class="form-control form-control-user @error('alamat_perusahaan')is-invalid @enderror"
                                        placeholder="Alamat perusahaan" value="{{ old('alamat_perusahaan') }}"
                                        required>
                                    @error('alamat_perusahaan')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input name="nama_pemilik" type="text"
                                        class="form-control form-control-user @error('nama_pemilik')is-invalid @enderror"
                                        placeholder="Nama pemilik..." value="{{ old('nama_pemilik') }}" required>
                                    @error('nama_pemilik')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="nik_pemilik" type="number"
                                            class="form-control form-control-user @error('nik_pemilik')is-invalid @enderror"
                                            placeholder="NIK pemilik..." value="{{ old('nik_pemilik') }}" required>
                                        @error('nik_pemilik')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="no_hp_pemilik" type="number"
                                            class="form-control form-control-user @error('no_hp_pemilik')is-invalid @enderror"
                                            placeholder="Nomor HP pemilik/penaanggung jawab..."
                                            value="{{ old('no_hp_pemilik') }}" required>
                                        @error('no_hp_pemilik')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">

                                    
                                    <div class="col-sm-6">
                                        <input name="nib" type="number"
                                            class="form-control form-control-user @error('nib')is-invalid @enderror"
                                            placeholder="NIB..." value="{{ old('nib') }}" required>
                                        @error('nib')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label style="color:black">NPWP perusahaan :</label>
                                        <input name="npwp_perusahaan" type="file"
                                            class="form-control @error('npwp_perusahaan')is-invalid @enderror"
                                            placeholder="NPWP perusahaan..." id="formFile"
                                            value="{{ old('npwp_perusahaan') }}" required>
                                        @error('npwp_perusahaan')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <label style="color:black">AKTA Pendiri Perusahaan :</label>
                                        <input name="akta_pendiri" type="file"
                                            class="form-control @error('akta_pendiri')is-invalid @enderror"
                                            placeholder="AKTA Pendiri perusahaan..." id="formFile"
                                            value="{{ old('akta_pendiri') }}" required>
                                        @error('akta_pendiri')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">

                                  <div class="col-sm-6 mb-3 mb-sm-0">
                                      <label style="color:black">KTP Pendiri perusahaan :</label>
                                      <input name="ktp_pendiri" type="file"
                                          class="form-control @error('ktp_pendiri')is-invalid @enderror"
                                          placeholder="KTP Pendiri perusahaan..." id="formFile"
                                          value="{{ old('ktp_pendiri') }}" required>
                                      @error('ktp_pendiri')
                                          <span class="invalid-feedback">{{ $message }}</span>
                                      @enderror
                                  </div>
                                
                              </div>


                                <button type="submit" class="btn btn-primary btn-user btn-block">Register
                                    Account</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('admin_assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin_assets/js/sb-admin-2.min.js') }}"></script>
</body>

</html>
