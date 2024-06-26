


@extends('layout.app')
  <div class="container">

  </div>
 
@section('contents')
<h3 class="text-gray-900">Persyaratan Data Administrasi Penyerahan Prasarana, Sarana Dan Utilitas Umum (PSU) Perumahan</h3>
<div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('perumahan.editsurat', $perumahan->id_perumahan) }}" type="button" class="btn btn-warning"><i class="fas fa-upload"></i> Upload</a>
                        </div>
<hr>


<div class="card shadow mb-4">
    <div class="card-body">
        
<table class="table table-hover">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Syarat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody class="text-gray-800">
       
                <tr>
                    <td class="align-middle">1.</td>
                    <td class="align-middle">Surat Permohonan Penyerahan PSU kepada Bupati Mojokerto (tembusan ke DPRKP2)</td>
                    <td>
                        {{-- {{ $pr->jenis }} --}}
                        @if ($perumahan->surat_psu == '')
                        <button class="btn bg-danger text-white">Silahkan upload terlebih dulu</button>
                    
                    @else()
                    
                        <a href="" type="button"
                        class="btn btn-secondary" data-toggle="modal" data-target="#lihatsuratpsu">Lihat surat</a>
                        
                              
                        @endif

                    </td>
                   
                </tr>
                <tr>
                    <td class="align-middle">2.</td>
                    <td class="align-middle">Dokumen Rencana Tapak/Site Plan</td>
                    <td>
                        {{-- {{ $pr->jenis }} --}}
                        @if ($perumahan->dokumen_tapak == '')
                        <button class="btn bg-danger text-white">Silahkan upload terlebih dulu</button>
                    
                    @else()
                    
                    <a href="" type="button"
                    class="btn btn-secondary" data-toggle="modal" data-target="#lihatdokumentapak">Lihat surat</a>
                    
                        @endif
                    </td>

                </tr>
                <tr>
                    <td class="align-middle">3.</td>
                    <td class="align-middle">IMB/PBG/SLF</td>
                    <td>
                        @if ($perumahan->imb == '')
                        <button class="btn bg-danger text-white">Silahkan upload terlebih dulu</button>
                    
                    @else()
                    
                    <a href="" type="button"
                    class="btn btn-secondary" data-toggle="modal" data-target="#lihatsuratimb">Lihat surat</a>
                    
                        @endif
                    </td>
                   
                </tr>
                <tr>
                    <td class="align-middle">4.</td>
                    <td class="align-middle">Surat Ijin Lokasi</td>
                    <td>
                        @if ($perumahan->ijin_lokasi == '')
                        <button class="btn bg-danger text-white">Silahkan upload terlebih dulu</button>
                    
                    @else()
                    
                    <a href="" type="button"
                    class="btn btn-secondary" data-toggle="modal" data-target="#lihatsuratijinlokasi">Lihat surat</a>
                    
                        @endif
                    </td>
                   
                </tr>
                <tr>
                    <td class="align-middle">5.</td>
                    <td class="align-middle">NJOP</td>
                    <td>
                        @if ($perumahan->njop == '')
                        <button class="btn bg-danger text-white">Silahkan upload terlebih dulu</button>
                    
                    @else()
                    
                    <a href="" type="button"
                    class="btn btn-secondary" data-toggle="modal" data-target="#lihatnjop">Lihat surat</a>
                    
                        @endif
                    </td>
                   
                </tr>
                <tr>
                    <td class="align-middle">6.</td>
                    <td class="align-middle">Sertifikat Fasum yang akan di serahkan</td>
                    <td>
                        @if ($perumahan->sertifikat_fasum == '')
                        <button class="btn bg-danger text-white">Silahkan upload terlebih dulu</button>
                    
                    @else()
                    
                    <a href="" type="button"
                    class="btn btn-secondary" data-toggle="modal" data-target="#lihatsertifikatfasum">Lihat surat</a>
                    
                        @endif
                    </td>
                   
                </tr>
                <tr>
                    <td class="align-middle">7.</td>
                    <td class="align-middle">Surat Pelepasan Hak Tanah Akta Notaris</td>
                    <td>
                        @if ($perumahan->surat_pelepasan_tanah == '')
                        <button class="btn bg-danger text-white">Silahkan upload terlebih dulu</button>
                    
                    @else()
                    
                    <a href="" type="button"
                    class="btn btn-secondary" data-toggle="modal" data-target="#lihatsuratpelepasantanah">Lihat surat</a>
                    
                        @endif
                    </td>
                   
                </tr>
                <tr>
                    <td class="align-middle">8.</td>
                    <td class="align-middle">Sertifikat Kepemilikan Lahan TPU</td>
                    <td>
                        @if ($perumahan->sertifikat_tpu == '')
                        <button class="btn bg-danger text-white">Silahkan upload terlebih dulu</button>
                    
                    @else()
                    
                    <a href="" type="button"
                    class="btn btn-secondary" data-toggle="modal" data-target="#lihatsertifikattpu">Lihat surat</a>
                    
                        @endif
                    </td>
                   
                </tr>
                <tr>
                    <td class="align-middle">9.</td>
                    <td class="align-middle">Surat Perjanjian/MOU Lahan Makam</td>
                    <td>
                        @if ($perumahan->mou_tpu == '')
                        <button class="btn bg-danger text-white">Silahkan upload terlebih dulu</button>
                    
                    @else()
                    
                    <a href="" type="button"
                    class="btn btn-secondary" data-toggle="modal" data-target="#lihatmoutpu">Lihat surat</a>
                    
                        @endif
                    </td>
                   
                </tr>
                <tr>
                    <td class="align-middle">10.</td>
                    <td class="align-middle">MOU terkait pengelolaan Tempat Pembuangan Sampah (TPS)</td>
                    <td>
                        @if ($perumahan->mou_tps == '')
                        <button class="btn bg-danger text-white">Silahkan upload terlebih dulu</button>
                    
                    @else()
                    
                    <a href="" type="button"
                    class="btn btn-secondary" data-toggle="modal" data-target="#lihatmoutps">Lihat surat</a>
                    
                        @endif
                    </td>
                   
                </tr>

            
         
 
    </tbody>
</table>
    @if ($perumahan->status == 'lengkapi_data')
    <td>
        <div class="col">
            <form action="{{ route('perumahan.diserahkan', $perumahan->id_perumahan) }}" method="post">
                @csrf
                @method('post')
                <button type="submit" class="btn btn-info">Serahkan data</button>
            </form>
        </div>
    </td>
    @elseif($perumahan->status == 'ditolak')
    <td>
      <div class="col">
          <form action="{{ route('perumahan.diserahkan', $perumahan->id_perumahan) }}" method="post">
              @csrf
              @method('post')
              <button type="submit" class="btn btn-info">Perbarui data</button>
          </form>
      </div>
  </td>
    @endif
    </div>
</div>

{{-- modal lihat surat --}}
<div class="modal fade" id="lihatsuratpsu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Surat Permohonan Penyerahan PSU kepada Bupati Mojokerto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Add your modal content here -->
          <embed src="{{ route('perumahan.viewsurat', ['id' => $perumahan->id_perumahan, 'jenisSurat' => 'surat_psu']) }}" type="application/pdf" width="100%" height="500px"> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
<div class="modal fade" id="lihatdokumentapak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Dokumen Rencana Tapak/Site Plan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Add your modal content here -->
          <embed src="{{ route('perumahan.viewsurat', ['id' => $perumahan->id_perumahan, 'jenisSurat' => 'dokumen_tapak']) }}" type="application/pdf" width="100%" height="500px"> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
<div class="modal fade" id="lihatsuratimb" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Surat Ijin Membangun Bangunan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Add your modal content here -->
          <embed src="{{ route('perumahan.viewsurat', ['id' => $perumahan->id_perumahan, 'jenisSurat' => 'imb']) }}" type="application/pdf" width="100%" height="500px"> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
<div class="modal fade" id="lihatsuratijinlokasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Surat Ijin Lokasi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Add your modal content here -->
          <embed src="{{ route('perumahan.viewsurat', ['id' => $perumahan->id_perumahan, 'jenisSurat' => 'ijin_lokasi']) }}" type="application/pdf" width="100%" height="500px"> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
<div class="modal fade" id="lihatnjop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">NJOP</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Add your modal content here -->
          <embed src="{{ route('perumahan.viewsurat', ['id' => $perumahan->id_perumahan, 'jenisSurat' => 'njop']) }}" type="application/pdf" width="100%" height="500px"> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
<div class="modal fade" id="lihatsertifikatfasum" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sertifikat Fasum yang akan di serahkan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Add your modal content here -->
          <embed src="{{ route('perumahan.viewsurat', ['id' => $perumahan->id_perumahan, 'jenisSurat' => 'sertifikat_fasum']) }}" type="application/pdf" width="100%" height="500px"> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
<div class="modal fade" id="lihatsuratpelepasantanah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Surat Pelepasan Tanah</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Add your modal content here -->
          <embed src="{{ route('perumahan.viewsurat', ['id' => $perumahan->id_perumahan, 'jenisSurat' => 'surat_pelepasan_tanah']) }}" type="application/pdf" width="100%" height="500px"> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="lihatsertifikattpu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sertifikat Kepemilikan Lahan TPU</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Add your modal content here -->
          <embed src="{{ route('perumahan.viewsurat', ['id' => $perumahan->id_perumahan, 'jenisSurat' => 'sertifikat_tpu']) }}" type="application/pdf" width="100%" height="500px"> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="lihatmoutpu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Surat Perjanjian/MOU Lahan Makam</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Add your modal content here -->
          <embed src="{{ route('perumahan.viewsurat', ['id' => $perumahan->id_perumahan, 'jenisSurat' => 'mou_tpu']) }}" type="application/pdf" width="100%" height="500px"> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="lihatmoutps" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">MOU terkait pengelolaan Tempat Pembuangan Sampah (TPS)</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Add your modal content here -->
          <embed src="{{ route('perumahan.viewsurat', ['id' => $perumahan->id_perumahan, 'jenisSurat' => 'mou_tps']) }}" type="application/pdf" width="100%" height="500px"> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


@endsection
