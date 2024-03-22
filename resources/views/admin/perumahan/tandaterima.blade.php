@extends('layout.app')
<div class="container">

</div>

@section('contents')
    <h3 class="text-gray-900">Surat Tanda Terima Penyerahan Prasarana, Sarana Dan Utilitas Umum (PSU) Perumahan</h3>
    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#diterima">
            <i class="fas fa-upload"></i> Upload
        </button>
     
    </div>
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
                        <td class="align-middle">SURAT TANDA TERIMA </td>
                        <td>
                            <a href="{{ route('perumahan.cetaksurattandaterima', $perumahan->id_perumahan) }}"
                                class="btn btn-warning"><i class="fas fa-print"></i> Cetak</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">2.</td>
                        <td class="align-middle">BERITA ACARA SERAH TERIMA ADMINISTRASI (PSU)
                        </td>
                        <td>
                            <a href="" class="btn btn-secondary" data-toggle="modal" data-target="#lihatbasta"><i class="fas fa-eye"></i> Lihat</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">3.</td>
                        <td class="align-middle">BERITA ACARA HASIL PEMERIKSAAN LAPANGAN (PSU)
                        </td>
                        <td>
                            <a href="" class="btn btn-secondary" data-toggle="modal" data-target="#lihatbahpl"><i class="fas fa-eye"></i> Lihat</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">4.</td>
                        <td class="align-middle">BERITA ACARA HASIL VERIFIKASI KELAYAKAN (PSU)
                        </td>
                        <td>
                            <a href="" class="btn btn-secondary" data-toggle="modal" data-target="#lihatbahvl"><i class="fas fa-eye"></i> Lihat</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">5.</td>
                        <td class="align-middle">BERITA ACARA SERAH TERIMA FISIK (PSU)
                        </td>
                        <td>
                            <a href="" class="btn btn-secondary" data-toggle="modal" data-target="#lihatbastf"><i class="fas fa-eye"></i> Lihat</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">6.</td>
                        <td class="align-middle">BERITA ACARA SERAH TERIMA dengan BUPATI (PSU)
                        </td>
                        <td>
                            <a href="" class="btn btn-secondary" data-toggle="modal" data-target="#lihatbastb"><i class="fas fa-eye"></i> Lihat</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="lihatbasta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Berita acara serah terima administrasi (PSU)
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Add your modal content here -->
                    <embed
                        src="{{ route('perumahan.lihatsurat', ['id' => $perumahan->id_perumahan, 'jenisSurat' => 'basta']) }}"
                        type="application/pdf" width="100%" height="500px">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="lihatbahpl" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Berita acara hasil pemeriksaan lapangan (PSU)
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Add your modal content here -->
                    <embed
                        src="{{ route('perumahan.lihatsurat', ['id' => $perumahan->id_perumahan, 'jenisSurat' => 'bahpl']) }}"
                        type="application/pdf" width="100%" height="500px">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="lihatbahvl" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Berita acara hasil verifikasi kelayakan (PSU)
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Add your modal content here -->
                    <embed
                        src="{{ route('perumahan.lihatsurat', ['id' => $perumahan->id_perumahan, 'jenisSurat' => 'bahvl']) }}"
                        type="application/pdf" width="100%" height="500px">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="lihatbastf" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Berita acara serah terima fisik (PSU)
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Add your modal content here -->
                    <embed
                        src="{{ route('perumahan.lihatsurat', ['id' => $perumahan->id_perumahan, 'jenisSurat' => 'bastf']) }}"
                        type="application/pdf" width="100%" height="500px">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="lihatbastb" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Berita acara serah terima dengan Bupati (PSU)
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Add your modal content here -->
                    <embed
                        src="{{ route('perumahan.lihatsurat', ['id' => $perumahan->id_perumahan, 'jenisSurat' => 'bastb']) }}"
                        type="application/pdf" width="100%" height="500px">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    
  <div class="modal fade" id="diterima"+ tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">UPLOAD BAST PSU</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body text-gray-900">
                  <form action="{{ route('perumahan.updatebast', $perumahan->id_perumahan) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                <label  class="form-label text-gray-900">BERITA ACARA SERAH TERIMA ADMINISTRASI : </label>
                    <input class="form-control" type="file" id="formFile" name="basta">
                    <br>
                    
                <label  class="form-label text-gray-900">BERITA ACARA HASIL PEMERIKSAAN LAPANGAN : </label>
                    <input class="form-control" type="file" id="formFile" name="bahpl">
                    <br>
                <label  class="form-label text-gray-900">BERITA ACARA HASIL VERIFIKASI KELAYAKAN : </label>
                    <input class="form-control" type="file" id="formFile" name="bahvl">
                    <br>
                    
                <label  class="form-label text-gray-900">BERITA ACARA SERAH TERIMA FISIK : </label>
                    <input class="form-control" type="file" id="formFile" name="bastf">
                    <br>
                    
                <label  class="form-label text-gray-900">BERITA ACARA SERAH TERIMA dengan BUPATI : </label>
                <input class="form-control" type="file" id="formFile" name="bastb">
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
