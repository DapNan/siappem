@extends('layout.app')
  
@section('title', 'Tambah Perumahan')
  
@section('contents')
    <hr />
    <form action="{{ route('perumahan.cobastore') }}" method="POST" enctype="multipart/form-data">
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
              <label for="alamat" class="text-gray-800"><h5>Alamat :</h5></label>
              <textarea name="alamat" class="form-control" placeholder="Masukkan alamat..." rows="3"></textarea>              
            </div>
            <div class="col">
              <label for="tahun_pembangunan" class= "text-gray-800"><h5>Tahun pembangunan :</h5></label>
              <input type="number" name="tahun_pembangunan" class="form-control" placeholder="Masukkan tahun pembangunan...">
          </div>
        </div>
        <div class="row mb-3">
          
        <div class="col">
            <label for="no_hp_pj" class= "text-gray-800"><h5>Nomor HP Penanggung jawab:</h5></label>
            <input type="number" name="no_hp_pj" class="form-control" placeholder="Masukkan Nomor HP Penanggung Jawab">
        </div> 
        <div class="col">
          <label for="tahunprt" class= "text-gray-800"><h5>Tahun Pengesahan Rencana Tapak :</h5></label>
          <input type="number" name="tahunprt" class="form-control" placeholder="Masukkan tahun pengesahan rencana tapak...">
      </div>
        </div>
        <div class="row mb-3">
          
            <div class="col-6">
                <label for="tahunterbit" class= "text-gray-800"><h5>Tahun Terbit IMB/PBG/SLF :</h5></label>
                <input type="number" name="tahunterbit" class="form-control" placeholder="Masukkan Tahun Terbit IMB/PBG/SLF...">
            </div> 
            
            <div class="col-6">
              <label for="nama_asosiasi" class= "text-gray-800"><h5>Nama Asosiasi Perumahan : </h5></label><strong>(opsional)</strong>
              <input type="text" name="nama_asosiasi" class="form-control" placeholder="Masukkan Nama Asosiasi Perumahan...">
          </div> 
        </div>
        
        <div class="row mb-3">
          <div class="col-6">
            
            <label for="nomor_registrasi" class= "text-gray-800"><h5>Nomor Registrasi Asosiasi Perumahan : </h5></label><strong> (opsional)</strong>
            <input type="text" name="nomor_registrasi" class="form-control" placeholder="Masukkan Nomor Registrasi Asosiasi Perumahan...">

          </div>
          <div class="col-6">
          
          </div>
          
           
         
        </div>
        <div class="row mb-3">
          
          <div class="col">
          
            <label for="jenis_psu" class= "text-gray-800"><h5>Jenis PSU :</h5></label>

            <div class="form-check d-flex aligns-items-center">
              <input type="checkbox" class="form-check-input" id="checkbox_lahan_makam">
              <label class="form-check-label mr-2" for="checkbox_lahan_makam">Lahan Makam :</label>
                <input type="number" id="input_lahan_makam" name="lahan_makam" class="form-control hidden" style="width: 100px;" placeholder="m²" disabled>  
            </div>

           <div class="form-check d-flex align-items-center">
            <input type="checkbox" class="form-check-input" id="checkbox_jalan">
            <label class="form-check-label mr-2" for="checkbox_jalan">Jalan : </label>
                <input type="number" id="input_jalan" name="jalan" class="form-control hidden" style="width: 100px;" placeholder="m²" disabled> 
           </div>
           
           <div class="form-check d-flex align-items-center">
            <input type="checkbox" class="form-check-input" id="checkbox_saluran">
            <label class="form-check-label mr-2" for="checkbox_saluran">Saluran : </label>
                <input type="number" id="input_saluran" name="saluran" class="form-control hidden" style="width: 100px;" placeholder="m²" disabled> 
        </div>
                
        <div class="form-check d-flex align-items-center">
          <input type="checkbox" class="form-check-input" id="checkbox_rth">
          <label class="form-check-label mr-2" for="checkbox_rth">Ruang Terbuka Hijau :</label>
              <input type="number" id="input_rth" name="rth" class="form-control hidden" style="width: 100px;" placeholder="m²" disabled> 
          </div>
          
  
        <div class="form-check d-flex align-items-center">
          <input type="checkbox" class="form-check-input" id="checkbox_sarana_peribadatan">
          <label class="form-check-label mr-2" for="checkbox_sarana_peribadatan">Sarana Peribadatan</label>
              <input type="number" id="input_sarana_peribadatan" name="sarana_peribadatan" class="form-control hidden" style="width: 100px;" placeholder="m²" disabled> 
        </div>
           
        <div class="form-check d-flex align-items-center">
          <input type="checkbox" class="form-check-input" id="checkbox_pju">
          <label class="form-check-label mr-2" for="checkbox_pju">Penerangan Jalan Umum</label>
              <input type="number" id="input_pju" name="pju" class="form-control hidden" style="width: 100px;" placeholder="m²" disabled> 
        </div>
      
        <div class="form-check d-flex align-items-center">
          <input type="checkbox" class="form-check-input" id="checkbox_tps">
          <label class="form-check-label mr-2" for="checkbox_tps">Tempat Pembuangan Sampah</label>
              <input type="number" id="input_tps" name="tps" class="form-control hidden" style="width: 100px;" placeholder="m²" disabled> 
         </div>
          
        <div class="form-check d-flex align-items-center">
          <input type="checkbox" class="form-check-input" id="checkbox_pos_pengamanan">
          <label class="form-check-label mr-2" for="checkbox_pos_pengamanan">Pos Pengamanan</label>
              <input type="number" id="input_pos_pengamanan" name="pos_pengamanan" class="form-control hidden" style="width: 100px;" placeholder="m²" disabled> 
        </div>
          </div>
          <div class="col">
            <label for="jenis_perumahan" class="text-gray-800"><h5>Jenis Perumahan :</h5> </label>
            
            <div class="form-check d-flex aligns-items-center">
              <input type="checkbox" class="form-check-input" id="checkbox_subsidi">
              <label class="form-check-label mr-2" for="checkbox_subsidi">Subsidi :</label>
              
                <input type="number" id="input_subsidi" name="subsidi" class="form-control hidden" style="width: 100px;" placeholder="... unit" disabled> 
            
            </div>
            
            <div class="form-check d-flex aligns-items-center">
              <input type="checkbox" class="form-check-input" id="checkbox_non_subsidi">
              <label class="form-check-label mr-2" for="checkbox_non_subsidi">Non Subsidi :</label>
            
                <input type="number" id="input_non_subsidi" name="non_subsidi" class="form-control hidden" style="width: 100px;" placeholder="... unit" disabled> 
            </div>

            
            <div class="form-check d-flex aligns-items-center">
              <input type="checkbox" class="form-check-input" id="checkbox_ruko">
              <label class="form-check-label mr-2" for="checkbox_ruko">Ruko :</label>
   
                <input type="number" id="input_ruko" name="ruko" class="form-control hidden" style="width: 100px;" placeholder="... unit" disabled> 
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
    </div>

    </form>
@endsection