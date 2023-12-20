@extends('layout.app')

@section('contents')
    <h2 class=" text-gray-900">DATA PROFIL PERUMAHAN</h2>
    <hr />

    <div class="">
        <div class="card shadow mb-4">
            <div class="card-body">
                <table class="text-gray-800">
                    <tbody>
                        <tr class="font-weight-bold">
                            <td>PERUMAHAN :</td>
                        </tr>
                    </tbody>
                </table>
                <table class="text-gray-900">
                    <tbody>
                        <tr>
                            <td width="20">1. </td>
                            <td width="275">NAMA PERUMAHAN </td>
                            <td width="10">:</td>
                            <td><strong>{{ $perumahan->nama_perumahan }}</strong></td>
                        </tr>
                        <tr>
                            <td width="20">2. </td>
                            <td width="275">PENGEMBANG </td>
                            <td width="10">:</td>
                            <td>{{ $perumahan->name }}</td>
                        </tr>
                        <tr>
                            <td width="20">3. </td>
                            <td width="275">ALAMAT PERUMAHAN </td>
                            <td width="10">:</td>
                            <td>{{ $perumahan->alamat }}</td>
                        </tr>
                        <tr>
                            <td width="20">4. </td>
                            <td width="275">JENIS PERUMAHAN </td>
                            <td width="10">:</td>
                            <td>
                                @if ($perumahan->jenis == 'subsidi')
                                    Subsidi
                                @elseif($perumahan->jenis == 'non_subsidi')
                                    Non subsidi
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td width="20">5. </td>
                            <td width="275">TAHUN PEMBANGUNAN </td>
                            <td width="10">:</td>
                            <td>{{ $perumahan->tahun_pembangunan }}</td>
                        </tr>
                        <tr>
                            <td width="20">6. </td>
                            <td width="275">NO HP PENANGGUNG JAWAB </td>
                            <td width="10">:</td>
                            <td>{{ $perumahan->no_hp_pj }}</td>
                        </tr>
                        <tr>
                            <td width="20">7. </td>
                            <td width="275">STATUS </td>
                            <td width="10">:</td>
                            <td>
                                <span
                                    class="badge text-white
                        @if ($perumahan->status == 'lengkapi_data') bg-info
                            @elseif($perumahan->status == 'ditolak') bg-danger
                                @elseif($perumahan->status == 'diterima')bg-success 
                                @elseif($perumahan->status == 'proses_verifikasi')bg-info @endif">
                                    @if ($perumahan->status == 'lengkapi_data')
                                        Data belum diserahkan
                                    @elseif($perumahan->status == 'proses_verifikasi')
                                        Proses verifikasi
                                    @else
                                        {{ $perumahan->status }}
                                    @endif
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td width="20">8. </td>
                            <td width="275">Jenis PSU </td>
                            <td width="10">:</td>
                            <td>
                                <ul>
                                    {{-- Loop untuk menampilkan setiap elemen dalam array --}}
                                    @foreach (explode(',', $perumahan->jenis_psu) as $data)
                                        <li>{{ str_replace('_', ' ', $data) }}</li>
                                    @endforeach
                                </ul>


                            </td>
                        </tr>


                    </tbody>

                </table>
                <br>
                <table class="text-gray-800">
                    <tbody>
                        <tr class="font-weight-bold">
                            <td>PERUSAHAAN :</td>
                        </tr>
                    </tbody>
                </table>
                <table class="text-gray-900">
                    <tbody>
                        <tr>
                            <td width="20">1. </td>
                            <td width="275">NAMA PERUSAHAAN </td>
                            <td width="10">:</td>
                            <td>{{ $perumahan->nama_badan_usaha }}</td>
                        </tr>
                        <tr>
                            <td width="20">2. </td>
                            <td width="275">ALAMAT PERUSAHAAN </td>
                            <td width="10">:</td>
                            <td>{{ $perumahan->alamat_perusahaan }}</td>
                        </tr>
                        <tr>
                            <td width="20">3. </td>
                            <td width="275">NAMA PEMILIK </td>
                            <td width="10">:</td>
                            <td>{{ $perumahan->nama_pemilik }}</td>
                        </tr>
                        <tr>
                            <td width="20">4. </td>
                            <td width="275">NIK PEMILIK </td>
                            <td width="10">:</td>
                            <td>{{ $perumahan->nik_pemilik }}</td>
                        </tr>
                        <tr>
                            <td width="20">5. </td>
                            <td width="275">NO HP PEMILIK </td>
                            <td width="10">:</td>
                            <td>{{ $perumahan->no_hp_pemilik }}</td>
                        </tr>
                        <tr>
                            <td width="20">6. </td>
                            <td width="275">NPWP PERUSAHAAN </td>
                            <td width="10">:</td>
                            <td>{{ $perumahan->npwp_perusahaan }}</td>
                        </tr>
                        <tr>
                            <td width="20">7. </td>
                            <td width="275">NIB </td>
                            <td width="10">:</td>
                            <td>{{ $perumahan->nib }}</td>
                        </tr>

                    </tbody>
                </table>
                <br>
                <table>
                    <tr class="align-middle">

                        @if ($perumahan->status == 'proses_verifikasi')
                            <td>
                                <div class="col">

                                    <a href="" type="button" class="btn btn-success" data-toggle="modal"
                                        data-target="#diterimauploadbast"><i class="fas fa-check-circle"></i> Terima
                                        data</a>

                                </div>
                            </td>
                            <td>
                                <div class="">

                                    <form action="{{ route('perumahan.ditolak', $perumahan->id_perumahan) }}"
                                        method="post">
                                        @csrf
                                        @method('post')
                                        <button type="submit" class="btn btn-danger"><i class="	fas fa-window-close"></i>
                                            Tolak data</button>
                                    </form>
                                </div>
                            </td>
                        @elseif($perumahan->status == 'lengkapi_data')

                        @elseif($perumahan->status == 'diterima')
                            <button class="btn btn-success">Data diterima</button>
                        @elseif($perumahan->status == 'ditolak')
                            <button class="btn btn-danger">Data ditolak</button>
                        @endif

                    </tr>

                </table>


            </div>
        </div>
    </div>


    <div class="modal fade" id="diterimauploadbast"+ tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload BAST</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body text-gray-900">
                        <form action="{{ route('perumahan.updatebast', $perumahan->id_perumahan) }}" method="POST"
                            enctype="multipart/form-data">
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
