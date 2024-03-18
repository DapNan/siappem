@extends('layout.app')

@section('contents')
    <h2 class=" text-gray-900">DATA PROFIL PERUMAHAN</h2>
    <hr />

    <div class="">
        <div class="card shadow mb-4">
            <div class="card-body table-responsive">
                @if ($perumahan->status == 'ditolak')
                    <div class="card shadow mb-4 bg-gradient-danger">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button"
                            aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 font-weight-bold text-danger">DATA DITOLAK</h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="collapseCardExample">
                            <div class="card-body text-white">
                                Alasan : {{ $perumahan->alasan_ditolak }}
                            </div>
                        </div>
                    </div>
                @endif



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
                            <td width="275">TAHUN PEMBANGUNAN </td>
                            <td width="10">:</td>
                            <td>{{ $perumahan->tahun_pembangunan }}</td>
                        </tr>
                        <tr>
                            <td width="20">5. </td>
                            <td width="275">NO HP PENANGGUNG JAWAB </td>
                            <td width="10">:</td>
                            <td>{{ $perumahan->no_hp_pj }}</td>
                        </tr>
                        <tr>
                            <td width="20">6. </td>
                            <td width="275">TAHUN PENGESAHAN SITEPLAN </td>
                            <td width="10">:</td>
                            <td>{{ $perumahan->tahunprt }}</td>
                        </tr>
                        <tr>
                            <td width="20">7. </td>
                            <td width="275">TAHUN TERBIT IMB/PBG/SLF </td>
                            <td width="10">:</td>
                            <td>{{ $perumahan->tahunterbit }}</td>
                        </tr>
                        <tr>
                            <td width="20">8. </td>
                            <td width="275">JENIS PERUMAHAN </td>
                            <td width="10">:</td>
                            <td>
                                @if ($perumahan->subsidi > 0)
                                    <li>

                                        Subsidi : {{ $perumahan->subsidi }} unit</li>
                                @endif
                                @if ($perumahan->non_subsidi > 0)
                                    <li>Non subsidi : {{ $perumahan->non_subsidi }} unit</li>
                                @endif
                                @if ($perumahan->ruko > 0)
                                    <li>Ruko : {{ $perumahan->ruko }} unit</li>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td width="20">9. </td>
                            <td width="275">NAMA ASOSIASI PERUMAHAN </td>
                            <td width="10">:</td>
                            <td>
                                @if ($perumahan->nama_asosiasi != null)
                                    <strong>{{ $perumahan->nama_asosiasi }}</strong>
                                @else
                                    <strong>
                                        Belum di isi
                                    </strong>
                                    *opsional
                                @endif
                            </td>

                        </tr>
                        <tr>
                            <td width="20">10. </td>
                            <td width="375">NOMOR REGISTRASI ASOSIASI PERUMAHAN </td>
                            <td width="10">:</td>
                            <td>
                                @if ($perumahan->nomor_registrasi != null)
                                    <strong>{{ $perumahan->nomor_registrasi }}</strong>
                                @else
                                    <strong>
                                        Belum di isi
                                    </strong>
                                    *opsional
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td width="30">11. </td>
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
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td width="20">12. </td>
                            <td width="275">Jenis PSU </td>
                            <td width="10">:</td>
                            <td>
                                @if ($perumahan->lahan_makam > 0)
                                    <li>
                                        Lahan Makam : <strong>{{ $perumahan->lahan_makam }} m<sup>2</sup></strong></li>
                                @endif
                                @if ($perumahan->jalan > 0)
                                    <li>Jalan : <strong>{{ $perumahan->jalan }} m<sup>2</sup></strong></li>
                                @endif
                                @if ($perumahan->saluran > 0)
                                    <li>Saluran : <strong>{{ $perumahan->saluran }} m<sup>2</sup></strong></li>
                                @endif
                                @if ($perumahan->rth > 0)
                                    <li>Ruang terbuka hijau : <strong>{{ $perumahan->rth }} m<sup>2</sup></strong></li>
                                @endif
                                @if ($perumahan->sarana_peribadatan > 0)
                                    <li>Sarana Peribadatan : <strong>{{ $perumahan->sarana_peribadatan }}
                                            m<sup>2</sup></strong></li>
                                @endif
                                @if ($perumahan->pju > 0)
                                    <li>Penerangan Jalan Umum : <strong>{{ $perumahan->pju }} m<sup>2</sup></strong></li>
                                @endif
                                @if ($perumahan->tps > 0)
                                    <li>Tempat Pengolahan Sampah : <strong>{{ $perumahan->tps }} m<sup>2</sup></strong>
                                    </li>
                                @endif
                                @if ($perumahan->pos_pengamanan > 0)
                                    <li>Pos pengamanan : <strong>{{ $perumahan->pos_pengamanan }} m<sup>2</sup></strong>
                                    </li>
                                @endif
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
                            <td width="275">NOMOR INDUK BERUSAHA </td>
                            <td width="10">:</td>
                            <td>{{ $perumahan->nib }}</td>
                        </tr>

                    </tbody>
                </table>
                <br>




            </div>
        </div>
    </div>
@endsection
