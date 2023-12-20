<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SURAT TANDA TERIMA</title>
    <style type="text/css">
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #ccc
        }

        .rangkasurat {
            width: 1000px;
            margin: 0 auto;
            background-color: #fff;
            height: 1000px;
            padding: 40px;
        }

        table {
            border-bottom: 2px solid #b7b6b6;
            padding: 2px
        }

        .tengah {
            text-align: center;
            line-height: 5px;
        }
    </style>
</head>

<body>
    <div class="rangkasurat">
        <table width="100%">
            <tr>
                <td><img src="{{ URL::asset('/img/normal_kab_Mojokerto.png') }}" width="140px" alt=""></td>
                <td class="tengah">
                    <h2>PEMERINTAH KABUPATEN MOJOKERTO</h2>
                    <h2>DINAS PERUMAHAN RAKYAT, KAWASAN PERMUKIMAN DAN
                    </h2>
                    <h2>PERHUBUNGAN</h2>
                    <p>Jl. Brawijaya No. 231 Pungging Mojokerto, Kode Pos 61318 Jawa Timur</p>
                    <p>Telp. ( 0321 ) 390211 Fax. ( 0321 ) 390210</p>
                    <p>Website : http://dprkp2.mojokertokab.go.id</p>
                </td>
            </tr>
        </table>
        <br>
        <table width="100%">
            <tr>
                <td class="tengah">
                    <h4>TANDA TERIMA ELEKTRONIK</h4>
                    <p>Sistem Informasi Aplikasi
                        Penyediaan Dan Penyerahan Prasarana, Sarana Dan Utilitas Umum
                        Perumahan</p>
                    <p>(SIAPPEM )</p>
                    <br>
                </td>
            </tr>
        </table>
        <br>
        <table width="100%">
            <tbody>
                <tr>
                    <td width="150">Nama Pengembang </td>
                    <td width="10">:</td>
                    <td><strong>{{ $perumahan->name }}</strong></td>
                </tr>
                <tr>
                    <td width="150">Nama Perumahan </td>
                    <td width="10">:</td>
                    <td><strong>{{ $perumahan->nama_perumahan }}</strong></td>
                </tr>
                <tr>
                    <td width="150">Alamat Perusahaan </td>
                    <td width="10">:</td>
                    <td><strong>{{ $perumahan->alamat_perusahaan }}</strong></td>

                </tr>
            </tbody>

        </table>
        <table width="100%">
            <tr>
                <td class="tengah">
                    <h3>DOKUMEN SUDAH DITERIMA</h3>
                </td>
            </tr>
        </table>
        <table width="100%">
            <tr>
                <td class="tengah" width="150">
                    <img src="{{ URL::asset('/img/Screenshot 2023-12-05 084553.png') }}" width="100px" alt="">
                </td>
                <td class="tengah" width="300">
                    <h3>Dokumen ini sah, diterbitkan secara elektronik melalui SIAPPEM DPRKP2</h3>
                    <h3>Kabupaten Mojokerto sehingga
                        tidak memerlukan cap dan tanda tangan basah.</h3>

                </td>

            </tr>
        </table>
        <table width="100%">
            <tr>
                <td class="tengah">
                    <p>Terima kasih telah mengirimkan kelengkapan dokumen penyerahan PSU Perumahan</p>
                </td>
            </tr>
        </table>
    </div>
</body>

<script type="text/javascript">
window.print();

</script>
</html>
