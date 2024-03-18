@extends('layout.app')
@section('contents')
    <div class="card shadow mb-4">
        <div class="card-body table-responsive">
            <h2>Edit profil</h2><br>
            <form method="POST" action="{{ route('profile.updateprofile') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <div class="col">
                        <div class="form-group">
                            <label for="name">Nama penanggung jawab:</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $user->name }}">
                        </div>
                    </div>
                    <div class="col">

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ $user->email }}">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="form-group">
                            <label for="nama_badan_usaha">Nama badan usaha:</label>
                            <input type="text" class="form-control" id="nama_badan_usaha" name="nama_badan_usaha"
                                value="{{ $user->nama_badan_usaha }}">
                        </div>
                    </div>
                    <div class="col">

                        <div class="form-group">
                            <label for="nama_pemilik">Nama pemilik:</label>
                            <input type="nama_pemilik" class="form-control" id="nama_pemilik" name="nama_pemilik"
                                value="{{ $user->nama_pemilik }}">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <div class="form-group">
                            <label for="nik_pemilik">NIK pemilik :</label>
                            <input type="number" class="form-control" id="nik_pemilik" name="nik_pemilik"
                                value="{{ $user->nik_pemilik }}">
                        </div>
                    </div>
                    <div class="col">

                        <div class="form-group">
                            <label for="no_hp_pemilik">NO HP pemilik :</label>
                            <input type="number" class="form-control" id="no_hp_pemilik" name="no_hp_pemilik"
                                value="{{ $user->no_hp_pemilik }}">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <div class="form-group">
                            <label for="nib">Nomor induk berusaha:</label>
                            <input type="number" class="form-control" id="nib" name="nib"
                                value="{{ $user->nib }}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="alamat_perusahaan">Alamat perusahaan :</label>
                            <textarea name="alamat_perusahaan" class="form-control" id="" cols="30" rows="2">{{ $user->alamat_perusahaan }}
                </textarea>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
<div class="col">
    
    <div class="form-group">
        <label for="ktp_pendiri">KTP Pendiri:</label>
        <input type="file" class="form-control" id="ktp_pendiri" name="ktp_pendiri">
    </div>
</div>
<div class="col">
    <div class="form-group">
        <label for="akta_pendiri">Akta Pendiri:</label>
        <input type="file" class="form-control" id="akta_pendiri" name="akta_pendiri">
    </div>
</div>
                </div>
              
            
              <div class="row mb-3">
                <div class="col-6">

                    <div class="form-group">
                        <label for="npwp_perusahaan">NPWP Perusahaan:</label>
                        <input type="file" class="form-control" id="npwp_perusahaan" name="npwp_perusahaan">
                    </div>
                    
                </div>
              </div>
            
    <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>  
@endsection
