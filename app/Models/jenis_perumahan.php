<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_perumahan extends Model
{
    use HasFactory;
    
    protected $table = 'jenis_perumahan';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'subsidi',
        'non_subsidi',
        'ruko'
    ];
}
