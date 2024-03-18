@extends('layout.app')


@section('contents')
    <div class="card shadow mb-4">
        <div class="card-body table-responsive">

            <h2>Profile pengembang perumahan</h2>
            <br>
            <table class="text-gray-900">
                <tbody>
                    <tr>
                        <td width="20">1. </td>
                        <td width="275">NAMA PENANGGUNG JAWAB </td>
                        <td width="10">:</td>
                        <td><strong>{{ auth()->user()->name }}</strong></td>
                    </tr>
                    <tr>
                        <td width="20">2. </td>
                        <td width="275">EMAIL</td>
                        <td width="10">:</td>
                        <td>{{ auth()->user()->email }}</td>
                    </tr>
                    <tr>
                        <td width="20">3. </td>
                        <td width="275">NAMA BADAN USAHA</td>
                        <td width="10">:</td>
                        <td>{{ auth()->user()->nama_badan_usaha }}</td>
                    </tr>
                    <tr>
                        <td width="20">4. </td>
                        <td width="275">NAMA PEMILIK </td>
                        <td width="10">:</td>
                        <td>
                            {{ auth()->user()->nama_pemilik }}
                        </td>

                    </tr>
                    <tr>
                        <td width="20">5. </td>
                        <td width="275">NIK PEMILIK</td>
                        <td width="10">:</td>
                        <td>{{ auth()->user()->nik_pemilik }}</td>
                    </tr>
                    <tr>
                        <td width="20">6. </td>
                        <td width="275">NO HP PEMILIK </td>
                        <td width="10">:</td>
                        <td>{{ auth()->user()->no_hp_pemilik }}</td>
                    </tr>
                    <tr>
                        <td width="20">7. </td>
                        <td width="275">ALAMAT PERUSAHAAN </td>
                        <td width="10">:</td>
                        <td>
                            {{ auth()->user()->alamat_perusahaan }}
                        </td>
                    </tr>

                    <tr>
                        <td width="20">8. </td>
                        <td width="275">NOMOR INDUK BERUSAHA</td>
                        <td width="10">:</td>
                        <td>
                            {{ auth()->user()->nib }}
                        </td>
                    </tr>

                    <tr>
                        <td width="20">9. </td>
                        <td width="275">AKTA PENDIRI</td>
                        <td width="10">:</td>
                        <td>
                            <a href="{{ route('profile.showsurat', ['jenisSurat' => 'akta_pendiri']) }}"
                                data-toggle="modal" data-target="#lihataktapendiri">Lihat surat</a>

                        </td>
                    </tr>

                    <tr>
                        <td width="20">10. </td>
                        <td width="275">NPWP PERUSAHAAN</td>
                        <td width="10">:</td>
                        <td>
                            <a href="{{ route('profile.showsurat', ['jenisSurat' => 'npwp_perusahaan']) }}"
                                data-toggle="modal" data-target="#lihatnpwpperusahaan">Lihat surat</a>

                        </td>
                    </tr>

                    <tr>
                        <td width="20">11. </td>
                        <td width="275">KTP PENDIRI PERUSAHAAN</td>
                        <td width="10">:</td>
                        <td>

                            <a href="{{ route('profile.showsurat', ['jenisSurat' => 'ktp_pendiri']) }}"
                                data-toggle="modal" data-target="#lihatktppendiri">Lihat surat</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                        </td>
                        <td>
                          <br>
                          <a href="{{ route('profile.editprofile') }}" class="btn btn-warning">
                            <i class="fas fa-pen"></i>
                                Edit data
                          </a>
                        
                        </td>
                        <td>
                        </td>
                      
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

    <div class="modal fade" id="lihataktapendiri" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">AKTA Pendiri perusahaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <embed src="{{ route('profile.showsurat', ['jenisSurat' => 'akta_pendiri']) }}" type="application/pdf"
                        width="100%" height="500px">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="lihatnpwpperusahaan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">NPWP Perusahaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <embed src="{{ route('profile.showsurat', ['jenisSurat' => 'npwp_perusahaan']) }}"
                        type="application/pdf" width="100%" height="500px">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="lihatktppendiri" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">KTP Pendiri</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <embed src="{{ route('profile.showsurat', ['jenisSurat' => 'ktp_pendiri']) }}"
                        type="application/pdf" width="100%" height="500px">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
