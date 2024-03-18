@extends('layout.app')
  <div class="container">

  </div>
 
@section('contents')
<h3 class="text-gray-900">Surat Tanda Terima Penyerahan Prasarana, Sarana Dan Utilitas Umum (PSU) Perumahan</h3>
<hr>

<div class="card shadow mb-4">
    <div class="card-body">
        
<table class="table table-hover">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Surat</th>
            <th>Aksi</th>
            
        </tr>
    </thead>
    <tbody class="text-gray-800">
       
                <tr>
                    <td class="align-middle">1.</td>
                    <td class="align-middle">Surat Tanda Terima </td>
                    <td>
                        <a href="{{ route('perumahan.cetaksurattandaterima', $perumahan->id_perumahan) }}" class="btn btn-warning"><i class="fas fa-print"></i> Cetak</a>
                    </td>
                 
                  
                </tr>
               
    </tbody>
</table>
    </div>
</div>

@endsection