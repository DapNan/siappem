<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerumahanController;
use App\Http\Controllers\PengembangController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();


Route::get('profile', [ProfileController::class, 'profile'])->name('profile.profile');
Route::get('profile/editprofile', [ProfileController::class, 'editprofile'])->name('profile.editprofile');
Route::put('profile/updateprofile',[ProfileController::class,'updateprofile'])->name('profile.updateprofile');
Route::get('showsurat/{jenisSurat}', [ProfileController::class, 'showsurat'])->name('profile.showsurat');

Route::get('profile/changepassword', [ProfileController::class, 'changePassword'])->name('profile.changepassword');
Route::post('profile/updatepassword', [ProfileController::class, 'updatePassword'])->name('profile.updatepassword');

Route::view('/notfound', 'errors.notfound');

//Normal Users Routes List
Route::middleware(['auth', 'user-access:pengembang'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    
    Route::controller(PerumahanController::class)->prefix('perumahan')->group(function () {
        Route::get('pengembang', 'index')->name('perumahanhome');
        
        // Route::get('pengembang/syarat/{id}', 'syarat')->name('perumahan.syarat');
    });

    Route::controller(PengembangController::class)->prefix('perumahan')->group(function () {

        Route::get('create', 'create')->name('perumahan.create');
        Route::post('store', 'store')->name('perumahan.store');
        Route::post('cobastore', 'cobaStore')->name('perumahan.cobastore');
        Route::get('pengembang/show/{id}', 'show')->name('perumahan.show');
        Route::get('edit/{id}', 'edit')->name('perumahan.edit');
        
        Route::put('cobaupdate/{id}', 'cobaUpdate')->name('perumahan.cobaupdate');

        Route::put('edit/{id}', 'update')->name('perumahan.update');
        Route::delete('/hapus/{id}', 'hapus')->name('perumahan.hapus');
        
        Route::get('pengembang/syarat/{id}', 'syarat')->name('perumahan.syarat');
        Route::get('pengembang/editsurat/{id}', 'editsurat')->name('perumahan.editsurat');
        Route::put('pengembang/editsurat/{id}', 'updatesurat')->name('perumahan.updatesurat');
        Route::get('pengembang/viewsuratpsu/{id}', 'viewsuratpsu')->name('perumahan.filesuratpsu');
        Route::get('viewsurat/{id}/{jenisSurat}', 'viewsurat')->name('perumahan.viewsurat');
        
    Route::get('dokumentandaterima/{id}', 'dokumentandaterima')->name('perumahan.dokumentandaterima');
    Route::get('pengembangcetaktandaterima/{id}', 'pengembangcetaktandaterima')->name('perumahan.pengembangcetaktandaterima');

    Route::post('/status/diserahkan/{id}', 'diserahkan')->name('perumahan.diserahkan');
    
    });
});
   
//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/user',[HomeController::class, 'getpengembang'])->name('admin.userpengembang');

    Route::controller(PerumahanController::class)->prefix('perumahan')->group(function () {
    Route::get('', 'index')->name('perumahan');
    });

    Route::controller(AdminController::class)->prefix('perumahan')->group(function () {
    Route::get('detailprofile/{id}', 'detailprofile')->name('user.detailprofile');
    Route::get('tampilsurat/{id}/{jenisSurat}', 'tampilsurat')->name('user.tampilsurat');
    // Route::get('create', 'create')->name('perumahan.create');
    // Route::post('store', 'store')->name('perumahan.store');
    Route::get('show/{id}', 'show')->name('perumahan.lihat');
    Route::get('pengembang/{id}', 'lihatuser')->name('perumahan.perumahanbyuser');
    // Route::get('edit/{id}', 'edit')->name('perumahan.edit');
    // Route::put('edit/{id}', 'update')->name('perumahan.update');
    Route::put('updatebast/{id}', 'updatebast')->name('perumahan.updatebast');
    
    Route::post('/status/diterima/{id}', 'diterima')->name('perumahan.diterima');
    Route::post('/status/ditolak/{id}', 'ditolak')->name('perumahan.ditolak');
    Route::delete('destroy/{id}', 'destroy')->name('perumahan.destroy');
    
    Route::get('syarat/{id}', 'syarat')->name('perumahan.lihatsyarat');
    Route::get('tandaterima/{id}', 'surattandaterima')->name('perumahan.surattandaterima');
    Route::get('cetaktandaterima/{id}', 'cetaksurattandaterima')->name('perumahan.cetaksurattandaterima');
    
    Route::get('lihatsurat/{id}/{jenisSurat}', 'lihatsurat')->name('perumahan.lihatsurat');
    
    Route::put('updateditolak/{id}', 'updateditolak')->name('perumahan.updateditolak');

    });

});