@extends('layout.app')
  
@section('title', 'Upload Surat ')
  
@section('contents')
    <hr/>
    <form action="{{ route('perumahan.updatesurat', $perumahan->id_perumahan) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="card shadow">
            <div class="card-body">
                
        <br>    
        <div class="row mb-3">
            <div class="col">
                <label  class="form-label text-gray-900">Surat Permohonan Penyerahan PSU kepada Bupati Mojokerto : </label>
                <input type="file" class="form-control" name="surat_psu">
            </div>
            <div class="col">
                <label for="dokumen_tapak" class="form-label text-gray-900">Dokumen Rencana Tapak/Site Plan : </label>
                <input class="form-control" type="file" id="formFile" name="dokumen_tapak">
            </div>
        </div>
          
        <div class="row mb-3">
            <div class="col">
                <label for="imb" class="form-label text-gray-900">Surat Ijin Membangun Bangunan : </label>
                <input class="form-control" type="file" id="formFile" name="imb">
              
            </div>
            <div class="col">
                <label for="ijin_lokasi" class="form-label text-gray-900">Surat Ijin Lokasi : </label>
                <input class="form-control" type="file" id="formFile" name="ijin_lokasi">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="njop" class="form-label text-gray-900">Nilai Jual Objek Pajak : </label>
                <input class="form-control" type="file" id="formFile" name="njop">
              
            </div>
            <div class="col">
                <label for="sertifikat_fasum" class="form-label text-gray-900">Sertifikat Fasum yang akan di serahkan : </label>
                <input class="form-control" type="file" id="formFile" name="sertifikat_fasum">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="surat_pelepasan_tanah" class="form-label text-gray-900">Surat Pelepasan Tanah : </label>
                <input class="form-control" type="file" id="formFile" name="surat_pelepasan_tanah">
            </div>
            <div class="col">
                <label for="sertifikat_tpu" class="form-label text-gray-900">Sertifikat Kepemilikan Lahan TPU : </label>
                <input class="form-control" type="file" id="formFile" name="sertifikat_tpu">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="mou_tpu" class="form-label text-gray-900">Surat Perjanjian/MOU Lahan Makam : </label>
                <input class="form-control" type="file" id="formFile" name="mou_tpu">
            </div>
            <div class="col">
                <label for="mou_tps" class="form-label text-gray-900">MOU terkait pengelolaan Tempat Pembuangan Sampah (TPS) : </label>
                <input class="form-control" type="file" id="formFile" name="mou_tps">
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