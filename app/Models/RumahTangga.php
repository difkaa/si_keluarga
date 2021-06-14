<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RumahTangga extends Model
{
    use HasFactory;

    protected $fillable = [
        'provinsi','kabupaten','kecamatan','desa','alamat','nm_kepala_rt'
    ];
    public function keluarga()
    {
        return $this->hasOne(Keluarga::class);
    }
}
