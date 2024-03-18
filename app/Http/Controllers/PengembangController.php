<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Perumahan;
use App\Models\jenis_psu;
use App\Models\jenis_perumahan;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;


class PengembangController extends Controller
{
  
    
    public function create()
    {
        return view('pengembang/perumahan.create');
    }

    public function cobaStore(Request $request): RedirectResponse
    {
        $request->validate([
            'user_id'   => 'required',
            'nama_perumahan'     => 'required',
            'alamat' => 'required',
            'tahun_pembangunan' => 'required',
            'no_hp_pj' => 'required',
            'status' => "lengkapi_data",
            'tahunprt' => 'required',
            'tahunterbit' => 'required',
            'nama_asosiasi' => 'nullable|string',
            'nomor_registrasi' => 'nullable|string',

            'lahan_makam' =>'string',
            'jalan' => 'string',
            'saluran' => 'string',
            'rth' => 'string',
            'sarana_peribadatan' => 'string',
            'pju'  => 'string',
            'tps'  => 'string',
            'pos_pengamanan' => 'string',

            'subsidi' => 'string',
            'non_subsidi' => 'string',
            'ruko'  => 'string',
        ]);

        $jenisPsu = jenis_psu::create([
            'lahan_makam' => $request->lahan_makam,
            'jalan' => $request->jalan,
            'saluran' => $request->saluran,
            'rth' => $request->rth,
            'sarana_peribadatan' => $request->sarana_peribadatan,
            'pju' => $request->pju,
            'tps' => $request->tps,
            'pos_pengamanan' => $request->pos_pengamanan,
        ]);

        $jenisPerumahan = jenis_perumahan::create([
            'subsidi' => $request->subsidi,
            'non_subsidi' => $request->non_subsidi,
            'ruko' => $request->ruko,
        ]);

        $perumahan = Perumahan::create([
            'user_id' => $request->user_id,
            'id_jenis_psu' => $jenisPsu->id,
            'id_jenis_perumahan' => $jenisPerumahan->id,
            'nama_perumahan' => $request->nama_perumahan,
            'alamat' => $request->alamat,
            'tahun_pembangunan' => $request->tahun_pembangunan,
            'no_hp_pj' => $request->no_hp_pj,
            'status' => "lengkapi_data", // Jika status selalu "lengkapi_data"
            'tahunprt' => $request->tahunprt,
            'tahunterbit' => $request->tahunterbit,
            'nama_asosiasi' => $request->nama_asosiasi,
            'nomor_registrasi' => $request->nomor_registrasi,
        ]);
        
        return redirect()->route('perumahanhome')->with('toast_success', 'Perumahan berhasil ditambahkan');
    }
        
    public function cobaUpdate(Request $request, $id_perumahan): RedirectResponse
    {
        $request->validate([
            'nama_perumahan'     => 'required',
            'alamat' => 'required',
            'tahun_pembangunan' => 'required',
            'no_hp_pj' => 'required',
            'tahunprt' => 'required',
            'tahunterbit' => 'required',
            'nama_asosiasi' => 'nullable|string',
            'nomor_registrasi' => 'nullable|string',

            'lahan_makam' =>'string',
            'jalan' => 'string',
            'saluran' => 'string',
            'rth' => 'string',
            'sarana_peribadatan' => 'string',
            'pju'  => 'string',
            'tps'  => 'string',
            'pos_pengamanan' => 'string',

            'subsidi' => 'string',
            'non_subsidi' => 'string',
            'ruko'  => 'string',
        ]);

        $perumahan = Perumahan::findOrFail($id_perumahan);

        $jenisPsu = jenis_psu::findOrFail($perumahan->id_jenis_psu);
        $jenisPsu->update([
            'lahan_makam' => $request->lahan_makam,
            'jalan' => $request->jalan,
            'saluran' => $request->saluran,
            'rth' => $request->rth,
            'sarana_peribadatan' => $request->sarana_peribadatan,
            'pju' => $request->pju,
            'tps' => $request->tps,
            'pos_pengamanan' => $request->pos_pengamanan,
        ]);

        $jenisPerumahan = jenis_perumahan::findOrFail($perumahan->id_jenis_perumahan);
        $jenisPerumahan->update([
            'subsidi' => $request->subsidi,
            'non_subsidi' => $request->non_subsidi,
            'ruko' => $request->ruko,
        ]);

        $perumahan->update([
            'nama_perumahan' => $request->nama_perumahan,
            'alamat' => $request->alamat,
            'tahun_pembangunan' => $request->tahun_pembangunan,
            'no_hp_pj' => $request->no_hp_pj,
            'tahunprt' => $request->tahunprt,
            'tahunterbit' => $request->tahunterbit,
            'nama_asosiasi' => $request->nama_asosiasi,
            'nomor_registrasi' => $request->nomor_registrasi,
        ]);

        return redirect()->route('perumahanhome')->with('toast_success', 'Perumahan berhasil diperbarui');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'nama_perumahan'     => 'required',
            'user_id'   => 'required',
            'alamat' => 'required',
            'jenis' => 'required',
            'tahun_pembangunan' => 'required',
            'no_hp_pj' => 'required',
            'status' => "lengkapi_data",
            'jenis_psu' => 'required',

        ]);

        Perumahan::create([
            'nama_perumahan'     => $request->nama_perumahan,
            'user_id'   => $request->user_id,
            'alamat'   => $request->alamat,
            'jenis'   => $request->jenis,
            'tahun_pembangunan'   => $request->tahun_pembangunan,
            'no_hp_pj' => $request->no_hp_pj,
            'status' => "lengkapi_data",
            'jenis_psu' => implode(',', $request->jenis_psu)
        ]);

        return redirect()->route('perumahanhome')->with('toast_success', 'Perumahan added successfully');

    }
    public function show(string $id)
    {
        $perumahan = Perumahan::join('users', 'perumahans.user_id', '=', 'users.id')
        ->join('jenis_perumahan', 'perumahans.id_jenis_perumahan', '=', 'jenis_perumahan.id')
        ->join('jenis_psu', 'perumahans.id_jenis_psu', '=', 'jenis_psu.id')
        ->findOrFail($id);
  
        return view('pengembang/perumahan.show', compact('perumahan'));
    }

    public function edit(string $id)
    {
        $perumahan = Perumahan::join('users', 'perumahans.user_id', '=', 'users.id')
        ->join('jenis_perumahan', 'perumahans.id_jenis_perumahan', '=', 'jenis_perumahan.id')
        ->join('jenis_psu', 'perumahans.id_jenis_psu', '=', 'jenis_psu.id')
        ->findOrFail($id);
  
        return view('pengembang/perumahan.edit', compact('perumahan'));
    }

    public function update(Request $request, string $id)
    {
        
        $perumahan = Perumahan::find($id);

        $this->validate($request, [
            'nama_perumahan'     => 'required',
            'alamat' => 'required',
            'jenis' => 'required',
            'tahun_pembangunan' => 'required',
            'no_hp_pj' => 'required',
            'jenis_psu' => 'required',

        ]);

        $perumahan->update([
            'nama_perumahan'     => $request->nama_perumahan,
            'alamat'   => $request->alamat,
            'jenis'   => $request->jenis,
            'tahun_pembangunan'   => $request->tahun_pembangunan,
            'no_hp_pj' => $request->no_hp_pj,
            'jenis_psu' => implode(',', $request->jenis_psu)
        ]);
  
        return redirect()->route('perumahanhome')->with('toast_success', 'perumahan updated successfully');
    }

    public function editsurat(string $id)
    {
        $perumahan = Perumahan::findOrFail($id);
  
        return view('pengembang/perumahan.editsurat', compact('perumahan'));
    }

    public function updatesurat(Request $request, string $id): RedirectResponse
    { 
        

        $this->validate($request, [
          
            'surat_psu' => 'mimes:pdf',
            'dokumen_tapak' => 'mimes:pdf',
            'imb' => 'mimes:pdf',
            'ijin_lokasi' => 'mimes:pdf',
            'njop' => 'mimes:pdf',
            'sertifikat_fasum' => 'mimes:pdf',
            'surat_pelepasan_tanah' => 'mimes:pdf',
            'sertifikat_tpu' => 'mimes:pdf',
            'mou_tpu' => 'mimes:pdf',
            'mou_tps' => 'mimes:pdf',

        ]);
        $perumahan = Perumahan::find($id);

        if($request->hasFile('surat_psu')){
            
            $surat_psu = $request->file('surat_psu') ;
            $namasuratpsu = 'surat_psu_' . $surat_psu->hashName();
            $surat_psu->storeAs('public/surat_psu', $namasuratpsu);

            if ($perumahan->surat_psu) {
                Storage::delete('public/surat_psu/' . $perumahan->surat_psu);
            }

            $perumahan->update([
             
                    'surat_psu' => $namasuratpsu,
                    
                ]);
        }

        if($request->hasFile('dokumen_tapak')){
            $dokumen_tapak = $request->file('dokumen_tapak') ;
            $namadokumentapak = 'dokumen_tapak' . $dokumen_tapak->hashName();
            $dokumen_tapak->storeAs('public/dokumen_tapak', $namadokumentapak);
            Storage::delete('public/dokumen_tapak/'.$perumahan->dokumen_tapak);

            if ($perumahan->dokumen_tapak) {
            Storage::delete('public/dokumen_tapak/'.$perumahan->dokumen_tapak);
            }
            $perumahan->update([
           
                'dokumen_tapak' => $namadokumentapak,
                
            ]);
        }
        if($request->hasFile('imb')){
            
            $imb = $request->file('imb') ;
            $namasuratimb = 'imb_' . $imb->hashName();
            $imb->storeAs('public/imb', $namasuratimb);
            
            Storage::delete('public/imb/'.$perumahan->imb);
            if ($perumahan->imb) {
                Storage::delete('public/imb/'.$perumahan->imb);
            }
            $perumahan->update([
    
                'imb' => $namasuratimb,
                
            ]);
        }
        if($request->hasFile('ijin_lokasi')){
            
            $ijin_lokasi = $request->file('ijin_lokasi') ;
            $namasuratijinlokasi = 'surat_ijin_lokasi_' . $ijin_lokasi->hashName();
            $ijin_lokasi->storeAs('public/ijin_lokasi', $namasuratijinlokasi);
            if ($perumahan->ijin_lokasi) {
            Storage::delete('public/ijin_lokasi/'.$perumahan->ijin_lokasi);
            }

            $perumahan->update([
               
                'ijin_lokasi' => $namasuratijinlokasi,
                
            ]);
        }
        if($request->hasFile('njop')){
            
            $njop = $request->file('njop') ;
            $namasuratnjop = 'njop_' . $njop->hashName();
            $njop->storeAs('public/njop', $namasuratnjop);
            if($perumahan->njop){
                Storage::delete('public/njop/'.$perumahan->njop);
            }

            $perumahan->update([
              
                'njop' => $namasuratnjop,
                
            ]);
        }
        if($request->hasFile('sertifikat_fasum')){
            
            $sertifikat_fasum = $request->file('sertifikat_fasum');
            $namasertifikatfasum = 'sertifikat_fasum_' . $sertifikat_fasum->hashName();
            $sertifikat_fasum->storeAs('public/sertifikat_fasum', $namasertifikatfasum);
            if($perumahan->sertifikat_fasum){
                Storage::delete('public/sertifikat_fasum/'.$perumahan->sertifikat_fasum);
            }
            $perumahan->update([
                
                'sertifikat_fasum' => $namasertifikatfasum,
                
            ]);
        }
        if($request->hasFile('surat_pelepasan_tanah')){
            
            $surat_pelepasan_tanah = $request->file('surat_pelepasan_tanah') ;
            $namasuratpelapasantanah = 'surat_pelepasan_tanah' . $surat_pelepasan_tanah->hashName();
            $surat_pelepasan_tanah->storeAs('public/surat_pelepasan_tanah', $namasuratpelapasantanah);
            if($perumahan->surat_pelepasan_tanah){
                Storage::delete('public/surat_pelepasan__tanah/'.$perumahan->surat_pelepasan_tanah);
            }
            $perumahan->update([
                
                'surat_pelepasan_tanah' => $namasuratpelapasantanah,
                
            ]);
        }
        if($request->hasFile('sertifikat_tpu')){
            
            $sertifikat_tpu = $request->file('sertifikat_tpu') ;
            $namasertifikattpu = 'sertifikat_tpu_' . $sertifikat_tpu->hashName();
            $sertifikat_tpu->storeAs('public/sertifikat_tpu', $namasertifikattpu);
            if($perumahan->sertifikat_tpu){
                Storage::delete('public/sertifikat_tpu/'.$perumahan->sertifikat_tpu);
            }
            $perumahan->update([
                
                'sertifikat_tpu' => $namasertifikattpu,
             
           ]);
        
        }
        if($request->hasFile('mou_tpu')){
            
            $mou_tpu = $request->file('mou_tpu') ;
            $namasuratmoutpu = 'mou_tpu' . $mou_tpu->hashName();
            $mou_tpu->storeAs('public/mou_tpu', $namasuratmoutpu);
            if($perumahan->mou_tpu){
                Storage::delete('public/mou_tpu/'.$perumahan->mou_tpu);
            }
            $perumahan->update([
                
                'mou_tpu' => $namasuratmoutpu,
                
            ]);
        
        }
        if($request->hasFile('mou_tps')){
            
            $mou_tps = $request->file('mou_tps') ;
            $namasuratmoutps = 'mou_tps' . $mou_tps->hashName();
            $mou_tps->storeAs('public/mou_tps', $namasuratmoutps);
            if($perumahan->mou_tps){
                Storage::delete('public/mou_tps/'.$perumahan->mou_tps);
            }
            $perumahan->update([
                
                'mou_tps' => $namasuratmoutps,
                
            ]);
        
        }
  
  
        return redirect()->route('perumahanhome')->with('toast_success', 'perumahan updated successfully');
    }

   

    
    public function hapus(string $id)
    {
        $perumahan = Perumahan::findOrFail($id);
    
        $perumahan->delete();
  
        return redirect()->route('perumahanhome')->with('toast_success', 'perumahan deleted successfully');
    }


    public function syarat($id)
    {
        $perumahan = Perumahan::findOrFail($id);
 
        return view('pengembang/perumahan.syarat',compact('perumahan'));
    }

    
    
    public function viewsurat($id,$jenisSurat)
    {
        $perumahan=Perumahan::find($id);

        $namaFileSurat = $perumahan->{$jenisSurat};

        return view('pengembang/perumahan.viewsurat', compact('namaFileSurat'),['jenisSurat' => $jenisSurat]);

    }

    
    public function dokumentandaterima($id)
    {
        $perumahan=Perumahan::findOrFail($id);
 
        return view('pengembang/perumahan.dokumentandaterima',compact('perumahan'));
    }

    public function pengembangcetaktandaterima($id)
    {
        $perumahan = Perumahan::join('users', 'perumahans.user_id', '=', 'users.id')->findOrFail($id);
        return view('pengembang/perumahan.cetaktandaterima',compact('perumahan'));
    }

    public function viewbast($id)
    {
        $perumahan = Perumahan::find($id);
        return view('pengembang/perumahan.uploadbast',compact('perumahan'));
    }

    public function diserahkan($id)
    {
        $perumahan = Perumahan::find($id);

        $perumahan->update(['status' => 'proses_verifikasi']);

        return redirect()->route('perumahanhome')->with('toast_success', 'update status diserahkan');
    }
}
