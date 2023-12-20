<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Perumahan;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class PerumahanController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();

        if($user->type === 'admin'){

        $perumahan = Perumahan::join('users', 'perumahans.user_id', '=', 'users.id');

        // if ($request->has('status')) {
        //     $status = $request->input('status');
        //     $perumahan->where('status', $status);
        // }
    
            if ($request->has('search')) {
                $searchTerm = $request->input('search');
                $perumahan->where('nama_perumahan', 'like', '%' . $searchTerm . '%')
                        ->orWhere('alamat', 'like', '%' . $searchTerm . '%');
            }
           
         
        $perumahan = $perumahan->paginate(10);

        
        $data = [
            'title' => 'perumahan',
        ];

        return view('admin/perumahan.index',['perumahan' => $perumahan],$data);

        }else{
            $perumahanjoin = Perumahan::join('users', 'perumahans.user_id', '=', 'users.id')
            ->where('perumahans.user_id',$user->id)
            ->get();
    
            $user = Auth::user();

            $perumahanuser = $user->perumahans;
            
            $perumahans = $perumahanuser->merge($perumahanjoin) ;

            if ($request->has('search')) {
                $searchTerm = $request->input('search');
                // Tambahkan kondisi pencarian ke query
                $perumahans = $perumahans->filter(function ($perumahan) use ($searchTerm) {
                    return stripos($perumahan->nama_perumahan, $searchTerm) !== false ||
                           stripos($perumahan->alamat, $searchTerm) !== false;
                });
            }
            

        $data = [
            'title' => 'perumahan',
        ];
    
            return view('pengembang/perumahan.index',compact('perumahans'),$data);
        }   
    }
    
}
