@extends('layout.app')
  
@section('title', 'Create Perumahan')
  
@section('contents')
    <h1 class="mb-0">Add Perumahan</h1>
    <hr />
    <form action="{{ route('perumahan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="container-fluid">
            
        <div class="card shadow">
            <div class="card-body">

        <div class="row mb-3">
            <div class="col">
                <label for="nama_perumahan" class= "text-gray-800"><h5>Nama perumahan :</h5></label>
                <input type="text" name="nama_perumahan" class="form-control" placeholder="Nama perumahan...">
            </div>
            <div class="col">
                <label for="" class= "text-gray-800"><h5>Pengembang :</h5></label>
                <input type="hidden" name="user_id" class="form-control" value="{{ auth()->user()->id }}" readonly >
                <input type="text"  class="form-control" value="{{ auth()->user()->name }}" readonly >
            </div>
     
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="alamat" class= "text-gray-800"><h5>Alamat :</h5></label>
                <input type="text" name="alamat" class="form-control" placeholder="Masukkan alamat...">
            </div>
            
            <div class="col">
                <label for="jenis" class= "text-gray-800"><h5>Jenis perumahan :</h5></label>

                <select class="form-control" name="jenis">
                    <option value="">-pilih jenis perumahan-</option>
                    <option value="subsidi">Subsidi</option>
                    <option value="non_subsidi">Non subsidi</option>
                </select>
            </div>
     
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="tahun_pembangunan" class= "text-gray-800"><h5>Tahun pembangunan :</h5></label>
                <input type="number" name="tahun_pembangunan" class="form-control" placeholder="Masukkan tahun pembangunan...">
            </div>
            <div class="col">
                <label for="no_hp_pj" class= "text-gray-800"><h5>Nomor HP Penanggung jawab:</h5></label>
                <input type="number" name="no_hp_pj" class="form-control" placeholder="Masukkan Nomor HP Penanggung Jawab">
            </div> 
        </div>
      
        <div class="row mb-3">
            <div class="col">
                <label for="jenis_psu" class= "text-gray-800"><h5>Jenis PSU :</h5></label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="jenis_psu[]" value="lahan_makam" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Lahan Makam
                    </label>
                  </div> 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="jenis_psu[]" value="jalan" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Jalan
                    </label>
                  </div>  
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="jenis_psu[]" value="saluran" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Saluran
                    </label>
                  </div>  
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="jenis_psu[]" value="rth" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      RTH
                    </label>
                  </div>  
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="jenis_psu[]" value="sarana_peribadatan" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Sarana Peribadatan
                    </label>
                  </div>  
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="jenis_psu[]" value="pju" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      PJU
                    </label>
                  </div>  
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="jenis_psu[]" value="tps" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      TPS
                    </label>
                  </div>  
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="jenis_psu[]" value="pos_pengamanan" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Pos Pengamanan
                    </label>
                  </div>     
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

            </div>
     
        </div>
    </div>

    </form>
@endsection