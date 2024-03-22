<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Perumahan;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    public function detailprofile(string $id)
    {
        $user = User::where('id',$id)->first();
        return view('admin/user.detailprofile',compact('user'));
    }

    public function tampilsurat(string $id, $jenisSurat)
    {
        $user = User::where('id',$id)->first();
        return view('admin/user.tampilsurat',compact('user'),['jenisSurat' => $jenisSurat]);
    }

    public function show(string $id)
    {
        $perumahan = Perumahan::join('users', 'perumahans.user_id', '=', 'users.id')
        ->join('jenis_perumahan', 'perumahans.id_jenis_perumahan', '=', 'jenis_perumahan.id')
        ->join('jenis_psu', 'perumahans.id_jenis_psu', '=', 'jenis_perumahan.id')
        ->findOrFail($id);
  
        return view('admin/perumahan.show', compact('perumahan'));
    }

    public function lihatuser(string $id)
    {
        $perumahan = Perumahan::where('user_id',$id)->join('users', 'perumahans.user_id', '=', 'users.id')->get();

        return view('admin/user.perumahanbyuser', compact('perumahan'));
    }

    public function diterima($id)
    {
        $perumahan = Perumahan::find($id);

        $perumahan->update(['status' => 'diterima']);

        return redirect()->route('perumahan')->with('toast_success', 'update status diterima');
    }

    public function ditolak($id)
    {
        $perumahan = Perumahan::find($id);

        $perumahan->update(['status' => 'ditolak']);

        return redirect()->route('perumahan')->with('toast_success', 'update status ditolak');
    }
    
    public function destroy(string $id)
    {
        $perumahan = Perumahan::findOrFail($id);
        $perumahan->delete();
  
        return redirect()->route('perumahan')->with('toast_success', 'perumahan deleted successfully');
    }

    public function syarat($id)
    {
        $perumahan=Perumahan::findOrFail($id);
 
        return view('admin/perumahan.syarat',compact('perumahan'));
    }

    public function lihatsurat($id,$jenisSurat)
    {
        $perumahan=Perumahan::find($id);

        $namaFileSurat = $perumahan->{$jenisSurat};

        return view('admin/perumahan.lihatsurat', compact('namaFileSurat'),['jenisSurat' => $jenisSurat]);
    }
    

    public function surattandaterima($id)
    {
        $perumahan=Perumahan::findOrFail($id);
 
        return view('admin/perumahan.tandaterima',compact('perumahan'));
    }

    public function cetaksurattandaterima($id)
    {
        $perumahan = Perumahan::join('users', 'perumahans.user_id', '=', 'users.id')->findOrFail($id);
        return view('admin/perumahan.cetaksurattandaterima',compact('perumahan'));
    }
    public function uploadbast($id)
    {
        $perumahan = Perumahan::find($id);
        return view('admin/perumahan.uploadbast',compact('perumahan'));
    }
    public function updatebast(Request $request, string $id): RedirectResponse
    { 
        
        $this->validate($request, [
            'basta' => 'mimes:pdf',
            'bahpl' => 'mimes:pdf',
            'bahvl' => 'mimes:pdf',
            'bastf' => 'mimes:pdf',
            'bastb' => 'mimes:pdf',
            'status' => "diterima"

        ]);
        $perumahan = Perumahan::find($id);

        if($request->hasFile('basta')){
            
            $basta = $request->file('basta') ;
            $namabasta = 'basta_' . $basta->hashName();
            $basta->storeAs('public/basta', $namabasta);

            if ($perumahan->basta) {
                Storage::delete('public/basta/' . $perumahan->basta);
            }

            $perumahan->update([
                    'basta' => $namabasta,
                    'status' => "diterima"
                ]);
        }

        if($request->hasFile('bahpl')){
            
            $bahpl = $request->file('bahpl') ;
            $namabahpl = 'bahpl_' . $bahpl->hashName();
            $bahpl->storeAs('public/bahpl', $namabahpl);

            if ($perumahan->bahpl) {
                Storage::delete('public/bahpl/' . $perumahan->bahpl);
            }

            $perumahan->update([
                    'bahpl' => $namabahpl,
                    'status' => "diterima"
                ]);
        }

        if($request->hasFile('bahvl')){
            
            $bahvl = $request->file('bahvl') ;
            $namabahvl = 'bahvl_' . $bahvl->hashName();
            $bahvl->storeAs('public/bahvl', $namabahvl);

            if ($perumahan->bahvl) {
                Storage::delete('public/bahvl/' . $perumahan->bahvl);
            }

            $perumahan->update([
                    'bahvl' => $namabahvl,
                    'status' => "diterima"
                ]);
        }

        if($request->hasFile('bastf')){
            
            $bastf = $request->file('bastf') ;
            $namabastf = 'bastf_' . $bastf->hashName();
            $bastf->storeAs('public/bastf', $namabastf);

            if ($perumahan->bastf) {
                Storage::delete('public/bastf/' . $perumahan->bastf);
            }

            $perumahan->update([
                    'bastf' => $namabastf,
                    'status' => "diterima"
                ]);
        }
        if($request->hasFile('bastb')){
            
            $bastb = $request->file('bastb') ;
            $namabastb = 'bastb_' . $bastb->hashName();
            $bastb->storeAs('public/bastb', $namabastb);

            if ($perumahan->bastb) {
                Storage::delete('public/bastb/' . $perumahan->bastb);
            }

            $perumahan->update([
                    'bastb' => $namabastb,
                    'status' => "diterima"
                ]);
        }

        return redirect()->route('perumahan')->with('toast_success', 'perumahan updated successfully');
    }

    public function updateditolak(Request $request, string $id)
    {
        
        $this->validate($request, [
            'alasan_ditolak' => 'required|string',
        ]);
        
        $perumahan = Perumahan::findOrFail($id);

        $perumahan->status = 'ditolak';
        $perumahan->alasan_ditolak = $request->alasan_ditolak;

        $perumahan->save();
    
    return redirect()->route('perumahan')->with('toast_success', 'perumahan ditolak');
    }
    
}
