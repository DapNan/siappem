@extends('layout.app')
  
@section('title', 'Daftar Perusahaan')
  
@section('contents')
    
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <form action="{{ route('admin.userpengembang') }}" method="GET">

        <div class="d-flex justify-content-between align-items-center">

        <div class="input-group">
            <div class="form-outline" data-mdb-input-init>
                <input type="text" class="form-control" placeholder="cari..." name="search" />
              </div>
            <button  type="submit" class="btn btn-primary"><i class="fas fa-search"></i> search</button>
          </div>
      </div>
    </form>
    <br>
    <div class="table-responsive">
        <div class="card">
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <div class="text-white">
                                <th>#</th>
                                <th width="200">Nama Perusahaan</th>
                                <th>Penanggung Jawab</th>
                                <th>NIK/NIB/NPWP</th>
                                <th>Telp</th>
                                <th>Lokasi usaha</th>
                                <th>Aksi</th>
                            </div>
    
                        </tr>
                    </thead>
                    <tbody>
    
                        @if ($userpengembang->count() > 0)
                        @foreach ($userpengembang as $up)
                                <tr class="text-gray-900">
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $up->nama_badan_usaha }}</td>
                                    <td class="align-middle">{{ $up->name }}</td>
                                    <td class="align-middle">{{ $up->nik_pemilik }}/{{ $up->nib }}/{{ $up->npwp_perusahaan }}</td>
                                    <td class="align-middle">{{ $up->no_hp_pemilik }}</td>
                                    
                                    <td class="align-middle">{{ $up->alamat_perusahaan }}</td>
                                    {{-- <td class="align-middle">{{ $pr->status }}</td>   --}}
                                    <td>
                                        <a href="{{ route('perumahan.perumahanbyuser', $up->id) }}" type="button" class="btn btn-warning"><i class="fas fa-eye"></i> Lihat</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                        <tr>
                            <td class="text-center" colspan="8">Pengembang not found</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    {{ $userpengembang->appends(request()->input())->links('vendor.pagination') }}
    
 

@endsection