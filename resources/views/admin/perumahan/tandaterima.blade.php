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
                <tr>
                    <td class="align-middle">2.</td>
                    <td class="align-middle">Berita Acara Serah Terima (TTD Bupati dan Pengembang)
                    </td>
                    <td>
                        
                    
                    <a href="" type="button" class="btn btn-secondary" data-toggle="modal" data-target="#lihatbast">Lihat surat</a>
                                                
                    </td>
                   
                </tr>
    </tbody>
</table>
    </div>
</div>

<div class="modal fade" id="lihatbast" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Berita Acara Serah Terima (TTD Bupati dan Pengembang)</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Add your modal content here -->
          <embed src="{{ route('perumahan.lihatsurat', ['id' => $perumahan->id_perumahan, 'jenisSurat' => 'bast']) }}" type="application/pdf" width="100%" height="500px"> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection