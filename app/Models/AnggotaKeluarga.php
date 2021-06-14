<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaKeluarga extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_keluarga','nik','nama','hubungan_keluarga','tgl_lahir','jenis_kelamin'
    ];

    public function keluarga()
    {
        return $this->belongsTo(RumahTangga::class);
    }
}
