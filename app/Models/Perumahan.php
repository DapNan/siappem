<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perumahan extends Model
{
    use HasFactory;
    
    protected $table = 'perumahans';
    protected $primaryKey = 'id_perumahan';
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'nama_perumahan',
        'gambar',
        'alamat',
        'jenis',
        'tahun_pembangunan',
        'no_hp_pj',
        'status',
        'jenis_psu',
        'surat_psu',
        'dokumen_tapak',
        'imb',
        'ijin_lokasi',
        'njop',
        'sertifikat_fasum',
        'surat_pelepasan_tanah',
        'sertifikat_tpu',
        'mou_tpu',
        'mou_tps',
        'dok_diterima',
        'bast'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
