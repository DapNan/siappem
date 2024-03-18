<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Perumahan;
use App\Models\jenis_perumahan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();

        $jumlahData = Perumahan::where('user_id', $user->id)
            ->count();

        $jumlahDataProses = Perumahan::where('status', 'proses_verifikasi')
            ->where('user_id', $user->id)
            ->count();
        
        $jumlahDataDiterima = Perumahan::where('status', 'diterima')
            ->where('user_id', $user->id)
            ->count();

        $jumlahDataDitolak = Perumahan::where('status', 'ditolak')
            ->where('user_id', $user->id)
            ->count();
        
            
        $data = [
            'title' => 'dashboard',
        ];

        return view('pengembang/pengembangHome',compact('jumlahData','jumlahDataProses','jumlahDataDiterima','jumlahDataDitolak'),$data);
    }
    
      /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $user = auth()->user();

        $jumlahDataUser = User::where('type', 'pengembang')
            ->count();

        $jumlahDataPerumahan = Perumahan::count();

        $jumlahDataProses = Perumahan::where('status', 'proses_verifikasi')
            ->count();
        
        $jumlahDataDiterima = Perumahan::where('status', 'diterima')
            ->count();
        
        $jumlahJenisSubsidi = jenis_perumahan::sum('subsidi');
        
        $jumlahJenisNonSubsidi = jenis_perumahan::sum('non_subsidi');

        $jumlahJenisRuko = jenis_perumahan::sum('ruko');

        $data = [
            'title' => 'dashboard',
        ];

        return view('admin/adminHome', compact('jumlahDataUser','jumlahDataPerumahan','jumlahDataProses','jumlahDataDiterima','jumlahJenisSubsidi','jumlahJenisNonSubsidi','jumlahJenisRuko'), $data );
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    

    public function getpengembang(Request $request)
    {
        $userpengembang = User::where('type','pengembang');
                        // Cek jika ada parameter pencarian
            if ($request->has('search')) {
                $searchTerm = $request->input('search');
                // Tambahkan kondisi pencarian ke query
                $userpengembang->where('nama_badan_usaha', 'like', '%' . $searchTerm . '%')
                               ->orWhere('name', 'like', '%' . $searchTerm . '%');
            }
                //  $perPage = $request->input('paginate', 1);


        $userpengembang = $userpengembang->paginate(10);

        $data = [
            'title' => 'user',
        ];
            return view('admin/user.userpengembang', compact('userpengembang'),$data);
    }
}
