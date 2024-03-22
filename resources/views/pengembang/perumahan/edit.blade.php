@extends('layout.app')
  
@section('title', 'Create Perumahan')
  
@section('contents')
    <hr />
    <form action="{{ route('perumahan.cobaupdate', $perumahan->id_perumahan) }}" method="POST" >
        @csrf
        @method('PUT')

        <div class="container-fluid">
            
          <div class="card shadow">
              <div class="card-body">
  
          <div class="row mb-3">
              <div class="col">
                  <label for="nama_perumahan" class= "text-gray-800"><h5>Nama perumahan :</h5></label>
                  <input type="text" name="nama_perumahan" class="form-control" placeholder="Nama perumahan..." value="{{ $perumahan->nama_perumahan }}">
              </div>
              
       
          </div>
          <div class="row mb-3">
              <div class="col">
                <label for="alamat" class="text-gray-800"><h5>Alamat :</h5></label>

                <textarea name="alamat" class="form-control" placeholder="Masukkan alamat..." rows="3">{{$perumahan->alamat}}</textarea>              
              </div>
              <div class="col">
                <label for="tahun_pembangunan" class= "text-gray-800"><h5>Tahun pembangunan :</h5></label>
                <input type="number" name="tahun_pembangunan" class="form-control" placeholder="Masukkan tahun pembangunan..." value="{{$perumahan->tahun_pembangunan}}">
            </div>
          </div>
          <div class="row mb-3">
            
          <div class="col">
              <label for="no_hp_pj" class= "text-gray-800"><h5>Nomor HP Penanggung jawab:</h5></label>
              <input type="number" name="no_hp_pj" class="form-control" placeholder="Masukkan Nomor HP Penanggung Jawab" value="{{$perumahan->no_hp_pj}}">
          </div> 
          <div class="col">
            <label for="tahunprt" class= "text-gray-800"><h5>Tahun Pengesahan Rencana Tapak :</h5></label>
            <input type="number" name="tahunprt" class="form-control" placeholder="Masukkan tahun pengesahan rencana tapak..." value="{{$perumahan->tahunprt}}">
        </div>
          </div>
          <div class="row mb-3">
            
              <div class="col-6">
                  <label for="tahunterbit" class= "text-gray-800"><h5>Tahun Terbit IMB/PBG/SLF :</h5></label>
                  <input type="number" name="tahunterbit" class="form-control" placeholder="Masukkan Tahun Terbit IMB/PBG/SLF..." value="{{$perumahan->tahunterbit}}">
              </div> 
              
              <div class="col-6">
                <label for="nama_asosiasi" class= "text-gray-800"><h5>Nama Asosiasi Perumahan : </h5></label><strong>(opsional)</strong>
                <input type="text" name="nama_asosiasi" class="form-control" placeholder="Masukkan Nama Asosiasi Perumahan..." value="{{ $perumahan->nama_asosiasi }}">
            </div> 
          </div>
          <div class="row mb-3">
            <div class="col-6">
              
              <label for="nomor_registrasi" class= "text-gray-800"><h5>Nomor Registrasi Asosiasi Perumahan : </h5></label><strong> (opsional)</strong>
              <input type="text" name="nomor_registrasi" class="form-control" placeholder="Masukkan Nomor Registrasi Asosiasi Perumahan..." value="{{ $perumahan->nomor_registrasi }}">
  
            </div>
            
          </div>
          <div class="row mb-3">
         
            <div class="col">
            
              <label for="jenis_psu" class= "text-gray-800"><h5>Jenis PSU :</h5></label>
  
              <div class="form-check d-flex align-items-center">
                <input type="checkbox" class="form-check-input" id="checkbox_lahan_makam" <?php echo ($perumahan->lahan_makam) ? 'checked' : ''; ?>>
                <label class="form-check-label mr-2" for="checkbox_lahan_makam">Lahan Makam :</label>
              
                    <input type="number" id="input_lahan_makam" name="lahan_makam" class="form-control <?php echo ($perumahan->lahan_makam) ? '' : 'hidden'; ?>" style="width: 100px;" placeholder="m²" value="{{ $perumahan->lahan_makam }}" <?php echo ($perumahan->lahan_makam) ? '' : 'disabled'; ?>> 
               
            </div>
            
            <div class="form-check d-flex align-items-center">
              <input type="checkbox" class="form-check-input" id="checkbox_jalan" <?php echo ($perumahan->jalan) ? 'checked' : ''; ?>>
              <label class="form-check-label mr-2" for="checkbox_jalan">Jalan :</label>
              
                  <input type="number" id="input_jalan" name="jalan" class="form-control <?php echo ($perumahan->jalan) ? '' : 'hidden'; ?>" style="width: 100px;" placeholder="m²" value="{{ $perumahan->jalan }}" <?php echo ($perumahan->jalan) ? '' : 'disabled'; ?>> 
             
          </div>
          
          <div class="form-check d-flex align-items-center">
              <input type="checkbox" class="form-check-input" id="checkbox_saluran" <?php echo ($perumahan->saluran) ? 'checked' : ''; ?>>
              <label class="form-check-label mr-2" for="checkbox_saluran">Saluran :</label>
                  <input type="number" id="input_saluran" name="saluran" class="form-control <?php echo ($perumahan->saluran) ? '' : 'hidden'; ?>" style="width: 100px;" placeholder="m²" value="{{ $perumahan->saluran }}" <?php echo ($perumahan->saluran) ? '' : 'disabled'; ?>> 
          </div>
          
          <div class="form-check d-flex align-items-center">
              <input type="checkbox" class="form-check-input" id="checkbox_rth" <?php echo ($perumahan->rth) ? 'checked' : ''; ?>>
              <label class="form-check-label mr-2" for="checkbox_rth">Ruang Terbuka Hijau :</label>
                  <input type="number" id="input_rth" name="rth" class="form-control <?php echo ($perumahan->rth) ? '' : 'hidden'; ?>" style="width: 100px;" placeholder="m²" value="{{ $perumahan->rth }}" <?php echo ($perumahan->rth) ? '' : 'disabled'; ?>>
          </div>
          
          <div class="form-check d-flex align-items-center">
              <input type="checkbox" class="form-check-input" id="checkbox_sarana_peribadatan" <?php echo ($perumahan->sarana_peribadatan) ? 'checked' : ''; ?>>
              <label class="form-check-label mr-2" for="checkbox_sarana_peribadatan">Sarana Peribadatan :</label>
                  <input type="number" id="input_sarana_peribadatan" name="sarana_peribadatan" class="form-control <?php echo ($perumahan->sarana_peribadatan) ? '' : 'hidden'; ?>" style="width: 100px;" placeholder="m²" value="{{ $perumahan->sarana_peribadatan }}" <?php echo ($perumahan->sarana_peribadatan) ? '' : 'disabled'; ?>> 
         
          </div>
          
          <div class="form-check d-flex align-items-center">
              <input type="checkbox" class="form-check-input" id="checkbox_pju" <?php echo ($perumahan->pju) ? 'checked' : ''; ?>>
              <label class="form-check-label mr-2" for="checkbox_pju">Penerangan Jalan Umum :</label>
                  <input type="number" id="input_pju" name="pju" class="form-control <?php echo ($perumahan->pju) ? '' : 'hidden'; ?>" style="width: 100px;" placeholder="unit" value="{{ $perumahan->pju }}" <?php echo ($perumahan->pju) ? '' : 'disabled'; ?>> 
          </div>
          
          <div class="form-check d-flex align-items-center">
              <input type="checkbox" class="form-check-input" id="checkbox_tps" <?php echo ($perumahan->tps) ? 'checked' : ''; ?>>
              <label class="form-check-label mr-2" for="checkbox_tps">Tempat Pembuangan Sampah :</label>
                  <input type="number" id="input_tps" name="tps" class="form-control <?php echo ($perumahan->tps) ? '' : 'hidden'; ?>" style="width: 100px;" placeholder="m²" value="{{ $perumahan->tps }}" <?php echo ($perumahan->tps) ? '' : 'disabled'; ?>> 
          </div>
          
          <div class="form-check d-flex align-items-center">
              <input type="checkbox" class="form-check-input" id="checkbox_pos_pengamanan" <?php echo ($perumahan->pos_pengamanan) ? 'checked' : ''; ?>>
              <label class="form-check-label mr-2" for="checkbox_pos_pengamanan">Pos Pengamanan :</label>
             
                  <input type="number"  id="input_pos_pengamanan" name="pos_pengamanan" class="form-control <?php echo ($perumahan->pos_pengamanan) ? '' : 'hidden'; ?>" style="width: 100px;" placeholder="m²" value="{{ $perumahan->pos_pengamanan }}" <?php echo ($perumahan->pos_pengamanan) ? '' : 'disabled'; ?>> 
              
          </div>
          
            </div>
            <div class="col">
                <div class="col">
                    <label for="jenis_perumahan" class="text-gray-800"><h5>Jenis Perumahan :</h5> </label>
                    <div class="form-check d-flex align-items-center">
                      <input type="checkbox" class="form-check-input" id="checkbox_subsidi" <?php echo ($perumahan->subsidi) ? 'checked' : ''; ?>>
                      <label class="form-check-label mr-2" for="checkbox_subsidi">Subsidi :</label>
                          <input type="number" id="input_subsidi"  name="subsidi" class="form-control <?php echo ($perumahan->subsidi) ? '' : 'hidden'; ?>" style="width: 100px;" placeholder="... unit" value="{{ $perumahan->subsidi }}" <?php echo ($perumahan->subsidi) ? '' : 'disabled'; ?>> 
                      
                  </div> 
                  <div class="form-check d-flex align-items-center">
                      <input type="checkbox" class="form-check-input" id="checkbox_non_subsidi" <?php echo ($perumahan->non_subsidi) ? 'checked' : ''; ?>>
                      <label class="form-check-label mr-2" for="checkbox_non_subsidi">Non Subsidi :</label>
                          <input type="number" id="input_non_subsidi" name="non_subsidi" class="form-control <?php echo ($perumahan->non_subsidi) ? '' : 'hidden'; ?>" style="width: 100px;" placeholder="... unit" value="{{ $perumahan->non_subsidi }}" <?php echo ($perumahan->non_subsidi) ? '' : 'disabled'; ?>> 
                      
                  </div> 
                  <div class="form-check d-flex align-items-center">
                      <input type="checkbox" class="form-check-input" id="checkbox_ruko" <?php echo ($perumahan->ruko) ? 'checked' : ''; ?>>
                      <label class="form-check-label mr-2" for="checkbox_ruko">Ruko :</label>
                          <input type="number" id="input_ruko"  name="ruko" class="form-control <?php echo ($perumahan->ruko) ? '' : 'hidden'; ?>" style="width: 100px;" placeholder="... unit" value="{{ $perumahan->ruko }}" <?php echo ($perumahan->ruko) ? '' : 'disabled'; ?>> 
                      
                  </div> 
                 
                  </div>
            </div>
          </div>
          <div class="row">
         
          </div>
          <br>
       
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