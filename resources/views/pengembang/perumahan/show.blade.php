@extends('layout.app')

@section('contents')
    <h2 class=" text-gray-900">DATA PROFIL PERUMAHAN</h2>
    <hr />

    <div class="">
        <div class="card shadow mb-4">
            <div class="card-body table-responsive">

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
                        @if ($perumahan->status == 'lengkapi_data') bg-warning
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
                @else()
                @endif


            </div>
        </div>
    </div>
@endsection
