<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = auth()->user();

        return view('auth/profile',compact('user'));
    }

    public function editprofile()
    {
        $user = auth()->user();
        return view('auth/editprofile',compact('user'));
    }
    public function updateprofile(Request $request)
    {
      
        $request->validate([
            'ktp_pendiri' => 'nullable|mimes:jpg,jpeg,png,pdf|max:2048',
            'akta_pendiri' => 'nullable|mimes:jpg,jpeg,png,pdf|max:2048',
            'npwp_perusahaan' => 'nullable|mimes:jpg,jpeg,png,pdf|max:2048',
            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);

        $user = auth::user();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->nama_badan_usaha = $request->input('nama_badan_usaha');
        $user->nama_pemilik = $request->input('nama_pemilik');
        $user->nik_pemilik = $request->input('nik_pemilik');
        $user->no_hp_pemilik = $request->input('no_hp_pemilik');
        $user->nib = $request->input('nib');
        $user->alamat_perusahaan = $request->input('alamat_perusahaan');
        
        if ($request->hasFile('ktp_pendiri')) {
            $ktpPath = $request->file('ktp_pendiri')->store('public/ktp_pendiri');
            $user->ktp_pendiri = $ktpPath;
        }
    
        if ($request->hasFile('akta_pendiri')) {
            $aktaPath = $request->file('akta_pendiri')->store('public/akta_pendiri');
            $user->akta_pendiri = $aktaPath;
        }
    
        if ($request->hasFile('npwp_perusahaan')) {
            $npwpPath = $request->file('npwp_perusahaan')->store('public/npwp_perusahaan');
            $user->npwp_perusahaan = $npwpPath;
        }
      
        $user->save();

        return redirect()->route('profile.profile')->with('toast_success', 'Profil berhasil diperbarui.');
    }
    public function showsurat($jenisSurat)
    {
        $user = auth()->user();

        return view('auth/showsurat',compact('user'),['jenisSurat' => $jenisSurat]);
    }
    public function changePassword()
    {
        return view('auth/changepassword');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->input('current_password'), $user->password)) {
            return back()->withErrors(['current_password' => 'Kata sandi saat ini tidak cocok.']);
        }

        $user->password = Hash::make($request->input('password'));
        $user->save();
        
        return back()->with('success', 'Kata sandi berhasil diperbarui');
    }
}
