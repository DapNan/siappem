<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\UploadedFile;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'nama_badan_usaha' => ['required', 'string', 'max:255'],
            'nama_pemilik' => ['required', 'string', 'max:255'],
            'nik_pemilik' => ['required', 'string', 'max:255'],
            'no_hp_pemilik' => ['required', 'string', 'max:255'],
            'alamat_perusahaan' => ['required', 'string', 'max:255'],
            'nib' => ['required', 'string', 'max:255'],

            'npwp_perusahaan' => ['required', 'file'],
            'akta_pendiri' => ['required', 'file'],
            'ktp_pendiri' => ['required', 'file'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $aktaPendiri = $data['akta_pendiri'];
        $ktpPendiri = $data['ktp_pendiri'];
        $npwpPerusahaan = $data['npwp_perusahaan'];

        $aktaPendiriPath = $aktaPendiri->store('public/akta_pendiri');
        $ktpPendiriPath = $ktpPendiri->store('public/ktp_pendiri');
        $npwpPerusahaanPath = $npwpPerusahaan->store('public/npwp_perusahaan');

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'nama_badan_usaha' => $data['nama_badan_usaha'],
            'nama_pemilik' => $data['nama_pemilik'],
            'nik_pemilik' => $data['nik_pemilik'],
            'no_hp_pemilik' => $data['no_hp_pemilik'],
            'alamat_perusahaan' => $data['alamat_perusahaan'],
            'nib' => $data['nib'],
            
            'npwp_perusahaan' => $npwpPerusahaanPath,
            'ktp_pendiri' => $ktpPendiriPath,
            'akta_pendiri' => $aktaPendiriPath,
        ]);
    }
}
