@extends('layout.app')

@section('title', 'Upload Berita Acara Serah Terima')

@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Berita acara serah terima </h6>
    </div>
    
    <div class="card-body text-gray-900">
    <form action="{{ route('perumahan.updatebast', $perumahan->id_perumahan) }}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('PUT')

       <label for="bast">Berita Acara Serah Terima (BAST) :</label>
       <input type="file" class="form-control" name="bast">
       <br>
       <div class="d-grid">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
    </div>
</div>
@endsection