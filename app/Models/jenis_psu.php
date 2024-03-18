<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_psu extends Model
{
    use HasFactory;
    
    protected $table = 'jenis_psu';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'lahan_makam',
        'jalan',
        'saluran',
        'rth',
        'sarana_peribadatan',
        'pju',
        'tps',
        'pos_pengamanan'
    ];
}
