<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Perumahan;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;


class PengembangController extends Controller
{
    
    public function create()
    {
        return view('pengembang/perumahan.create');
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
        $perumahan = Perumahan::join('users', 'perumahans.user_id', '=', 'users.id')->findOrFail($id);
  
        return view('pengembang/perumahan.show', compact('perumahan'));
    }

    public function edit(string $id)
    {
        $perumahan = Perumahan::findOrFail($id);
  
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
            'nama_perumahan'     => 'required',
            'alamat' => 'required',
            'jenis' => 'required',
            'tahun_pembangunan' => 'required',
            'no_hp_pj' => 'required',
            
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
                    'nama_perumahan' => $request->nama_perumahan,
                    'alamat'   => $request->alamat,
                    'jenis'   => $request->jenis,
                    'tahun_pembangunan'   => $request->tahun_pembangunan,
                    'no_hp_pj' => $request->no_hp_pj,
                    
        
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
                'nama_perumahan' => $request->nama_perumahan,
                'alamat'   => $request->alamat,
                'jenis'   => $request->jenis,
                'tahun_pembangunan'   => $request->tahun_pembangunan,
                'no_hp_pj' => $request->no_hp_pj,
                
    
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
                'nama_perumahan' => $request->nama_perumahan,
                'alamat'   => $request->alamat,
                'jenis'   => $request->jenis,
                'tahun_pembangunan'   => $request->tahun_pembangunan,
                'no_hp_pj' => $request->no_hp_pj,
                
    
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
                'nama_perumahan' => $request->nama_perumahan,
                'alamat'   => $request->alamat,
                'jenis'   => $request->jenis,
                'tahun_pembangunan'   => $request->tahun_pembangunan,
                'no_hp_pj' => $request->no_hp_pj,
                
    
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
                'nama_perumahan' => $request->nama_perumahan,
                'alamat'   => $request->alamat,
                'jenis'   => $request->jenis,
                'tahun_pembangunan'   => $request->tahun_pembangunan,
                'no_hp_pj' => $request->no_hp_pj,
                
    
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
                'nama_perumahan' => $request->nama_perumahan,
                'alamat'   => $request->alamat,
                'jenis'   => $request->jenis,
                'tahun_pembangunan'   => $request->tahun_pembangunan,
                'no_hp_pj' => $request->no_hp_pj,
                
    
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
                'nama_perumahan' => $request->nama_perumahan,
                'alamat'   => $request->alamat,
                'jenis'   => $request->jenis,
                'tahun_pembangunan'   => $request->tahun_pembangunan,
                'no_hp_pj' => $request->no_hp_pj,
                
    
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
                'nama_perumahan' => $request->nama_perumahan,
                'alamat'   => $request->alamat,
                'jenis'   => $request->jenis,
                'tahun_pembangunan'   => $request->tahun_pembangunan,
                'no_hp_pj' => $request->no_hp_pj,
                
    
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
                'nama_perumahan' => $request->nama_perumahan,
                'alamat'   => $request->alamat,
                'jenis'   => $request->jenis,
                'tahun_pembangunan'   => $request->tahun_pembangunan,
                'no_hp_pj' => $request->no_hp_pj,
                
    
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
                'nama_perumahan' => $request->nama_perumahan,
                'alamat'   => $request->alamat,
                'jenis'   => $request->jenis,
                'tahun_pembangunan'   => $request->tahun_pembangunan,
                'no_hp_pj' => $request->no_hp_pj,
                
    
                'mou_tps' => $namasuratmoutps,
                
            ]);
        
        }
        else{
            $perumahan->update([
                    'nama_perumahan' => $request->nama_perumahan,
                    'alamat'   => $request->alamat,
                    'jenis'   => $request->jenis,
                    'tahun_pembangunan'   => $request->tahun_pembangunan,
                    'no_hp_pj' => $request->no_hp_pj,
                    
                    
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
