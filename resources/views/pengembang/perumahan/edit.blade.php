@extends('layout.app')
  
@section('title', 'Create Perumahan')
  
@section('contents')
    <hr />
    <form action="{{ route('perumahan.update', $perumahan->id_perumahan) }}" method="POST" >
        @csrf
        @method('PUT')

        <div class="card shadow">
            <div class="card-body">
                
        <div class="row mb-3">
            <div class="col">
                <label for="nama_perumahan" class= "text-gray-800"><h5>Nama perumahan :</h5></label>
                <input type="text" name="nama_perumahan" class="form-control" placeholder="Nama perumahan..." value="{{ $perumahan->nama_perumahan }}">
            </div>
            <div class="col">
                <label for="jenis" class= "text-gray-800"><h5>Jenis perumahan :</h5></label>

                <select class="form-control" name="jenis">
                    <option value="{{ $perumahan->jenis }}">{{ $perumahan->jenis }}</option>
                    <option value="subsidi">Subsidi</option>
                    <option value="non_subsidi">Non subsidi</option>
                </select>
            </div>
           
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="alamat" class= "text-gray-800"><h5>Alamat :</h5></label>
                 <textarea class="form-control" placeholder="Masukkan alamat..." value="{{ $perumahan->alamat }}" name="alamat" rows="3">{{ $perumahan->alamat }}</textarea>
            </div>
            
           
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="tahun_pembangunan" class= "text-gray-800"><h5>Tahun pembangunan :</h5></label>
                <input type="number" name="tahun_pembangunan" class="form-control" placeholder="Masukkan tahun pembangunan..." value="{{ $perumahan->tahun_pembangunan }}">
            </div>
            <div class="col">
                <label for="no_hp_pj" class= "text-gray-800"><h5>Nomor HP Penanggung jawab:</h5></label>
                <input type="number" name="no_hp_pj" class="form-control" placeholder="Masukkan Nomor HP Penanggung Jawab" value="{{ $perumahan->no_hp_pj }}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="jenis_psu" class= "text-gray-800"><h5>Jenis PSU :</h5></label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="jenis_psu[]" value="lahan_makam" id="flexCheckDefault" 
                    {{ in_array('lahan_makam', explode(',', $perumahan->jenis_psu)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexCheckDefault">
                      Lahan Makam
                    </label>
                  </div> 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="jenis_psu[]" value="jalan" id="flexCheckDefault" 
                    {{ in_array('jalan', explode(',', $perumahan->jenis_psu)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexCheckDefault">
                      Jalan
                    </label>
                  </div>  
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="jenis_psu[]" value="saluran" id="flexCheckDefault" 
                    {{ in_array('saluran', explode(',', $perumahan->jenis_psu)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexCheckDefault">
                      Saluran
                    </label>
                  </div>  
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="jenis_psu[]" value="rth" id="flexCheckDefault" 
                    {{ in_array('rth', explode(',', $perumahan->jenis_psu)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexCheckDefault">
                      RTH
                    </label>
                  </div>  
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="jenis_psu[]" value="sarana_peribadatan" id="flexCheckDefault"
                     {{ in_array('sarana_peribadatan', explode(',', $perumahan->jenis_psu)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexCheckDefault">
                      Sarana Peribadatan
                    </label>
                  </div>  
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="jenis_psu[]" value="pju" id="flexCheckDefault" 
                    {{ in_array('pju', explode(',', $perumahan->jenis_psu)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexCheckDefault">
                      PJU
                    </label>
                  </div>  
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="jenis_psu[]" value="tps" id="flexCheckDefault"
                    {{ in_array('tps', explode(',', $perumahan->jenis_psu)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexCheckDefault">
                      TPS
                    </label>
                  </div>  
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="jenis_psu[]" value="pos_pengamanan" id="flexCheckDefault"
                    {{ in_array('pos_pengamanan', explode(',', $perumahan->jenis_psu)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexCheckDefault">
                    Pos Pengamanan
                    </label>
                  </div>     
            </div>
        </div>
      
        <div class="">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

            </div>
        </div>

    </form>
@endsection