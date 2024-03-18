@extends('layout.app')

@section('title', 'Perumahan')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Perumahan</h1>
        
       
    </div>
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <form action="{{ route('perumahan') }}" method="GET">

        <div class="d-flex justify-content-between align-items-center">

        <div class="input-group">
            <div class="form-outline" data-mdb-input-init>
                <input type="text" class="form-control" placeholder="cari nama perumahan..." name="search" />
              </div>
            <button  type="submit" class="btn btn-primary"><i class="fas fa-search"></i> search</button>
            
          </div>
         

      </div>
      
    </form>
      <br>
   
      <div class="">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th width="200">Nama perumahan</th>
                                        <th>Pengembang</th>
                                        <th>Alamat</th>
                                        <th>Status</th>
                                        <th width="130">Syarat</th>
                                        <th>Tanda terima</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($perumahan->count() > 0)
                                        @foreach ($perumahan as $pr)
                                            <tr>
                                                <td class="align-middle">{{ $loop->iteration }}</td>
                                                <td class="align-middle">{{ $pr->nama_perumahan }}</td>
                                                <td class="align-middle">{{ $pr->name }}</td>
                                                <td class="align-middle">{{ $pr->alamat }}</td>
                                               
                                                <td class="align-middle">
                                                    <span class="badge text-white
                                                    @if ($pr->status == 'lengkapi_data') bg-warning
                                                 
                                                    @elseif($pr->status == 'ditolak') bg-danger
                                                        @elseif($pr->status == 'diterima')bg-success 
                                                        @elseif($pr->status == 'proses_verifikasi')bg-info @endif">
                                                
                                                    @if ($pr->status == 'lengkapi_data')
                                                        Data belum diserahkan
                                                    @elseif($pr->status == 'proses_verifikasi')
                                                    Proses verifikasi
                                                    @else    
                                                    {{ $pr->status }}
                                                    @endif
                                                    </span>
                                                </td>
                                               
                                                
                                                <td class="align-middle">
                                                    <a href="{{ route('perumahan.lihatsyarat', $pr->id_perumahan) }}">Lihat syarat</a>
                                                </td>
                                                <td class="align-middle">
                                                    @if ($pr->status == 'diterima')
                                                    <a href="{{ route('perumahan.surattandaterima',$pr->id_perumahan) }}">Lihat</a>
                                                    @elseif ($pr->status == 'ditolak')
                                                    <span class="badge bg-danger text-white">
                                                       Data ditolak
                                                     </span>
                                                 @else()
                                                     <span class="badge bg-warning text-white">
                                                       Data belum diterima
                                                     </span>
                                                 
                                                     @endif

                                                </td>
                                                {{-- <td class="align-middle">{{ $pr->status }}</td>   --}}
                                                <td class="align-middle">
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a href="{{ route('perumahan.lihat', $pr->id_perumahan) }}" type="button"
                                                            class="btn btn-secondary">Detail</a>
                                                        
                                                        <form action="{{ route('perumahan.destroy', $pr->id_perumahan) }}" method="POST"
                                                            type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger m-0">Delete</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        
                                    @else
                                        <tr>
                                            <td class="text-center" colspan="8">Perumahan not found</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
      </div>
  
    <br>
  
@endsection
