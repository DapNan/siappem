@extends('layout.app')

@section('title', 'Daftar Pengajuan PSU Perumahan')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h3 class="mb-0">Perumahan</h3>
    
            <a href="{{ route('perumahan.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah perumahan</a>
          
    </div>
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <form action="{{ route('perumahanhome') }}" method="GET">

        <div class="input-group">
            <div class="form-outline" data-mdb-input-init>
                <input type="text" class="form-control" placeholder="cari..." name="search" />
              </div>
              
            <button  type="submit" class="btn btn-primary"><i class="fas fa-search"></i> search</button>
            
            

      </div>
      
    </form>
    
   
    
    <br>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <div class="text-white">
                            <th>#</th>
                            <th width="200">Nama perumahan</th>
                            <th>Alamat</th>
                            <th>Jenis</th>
                            <th>Status</th>
                            <th>Syarat</th>
                            <th>Tanda Terima</th>
                            <th>Aksi</th>
                        </div>

                    </tr>
                </thead>
                <tbody>
                    @if ($perumahans->count() > 0)
                        @foreach ($perumahans as $pr)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $pr->nama_perumahan }}</td>

                                <td class="align-middle">{{ $pr->alamat }}</td>
                                <td class="align-middle">
                                    @if ($pr->jenis == 'subsidi')
                                    Subsidi
                                    @elseif($pr->jenis == 'non_subsidi')
                                        Non subsidi
                                    @endif
                                </td>
                                <td class="align-middle">
                                    <span
                                        class="badge text-white
                                        @if ($pr->status == 'lengkapi_data') bg-warning
                                     
                                            @elseif($pr->status == 'ditolak') bg-danger
                                                @elseif($pr->status == 'diterima')bg-success 
                                                @elseif($pr->status == 'proses_verifikasi')bg-info @endif">
                                        
                                            @if ($pr->status == 'lengkapi_data')
                                                Lengkapi data
                                            @elseif($pr->status == 'proses_verifikasi')
                                            Proses verifikasi
                                            @else    
                                            {{ $pr->status }}
                                            @endif
                                    </span>
                                </td>

                                <td class="align-middle"><a href="{{ route('perumahan.syarat', $pr->id_perumahan) }}">Klik
                                        untuk mengupload dan melihat syarat</a></td>

                              
                                <td class="align-middle">
                                    @if ($pr->status == 'diterima')
                                        <a href="{{ route('perumahan.dokumentandaterima', $pr->id_perumahan) }}">Lihat</a>
                                    @elseif($pr->status == 'lengkapi_data')
                                    <span class="badge bg-warning text-white">
                                    Lengkapi data dan serahkan 
                                    </span>
                                    @elseif($pr->status == 'proses_verifikasi')
                                    <span class="badge bg-warning text-white">
                                    Data belum diterima    
                                    </span>
                                    @else()
                                    <span class="badge bg-danger text-white">
                                        Data ditolak
                                    </span>
                                  
                                    @endif
                                </td>
                                {{-- <td class="align-middle">{{ $pr->status }}</td>   --}}
                                <td class="align-middle">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('perumahan.show',$pr->id_perumahan) }}" type="button"
                                            class="btn btn-secondary" >Detail</a>
                                        <a href="{{ route('perumahan.edit', $pr->id_perumahan) }}" type="button"
                                            class="btn btn-warning">Edit</a>
                                        <form action="{{ route('perumahan.hapus', $pr->id_perumahan) }}" method="POST"
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
{{--         
        {{ $pr->appends(request()->input())->links('vendor.pagination') }} --}}
    </div>
    
</div>

@endsection

