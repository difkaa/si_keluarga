<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;

    public function anggotaKeluargas()
    {
        return $this->hasMany(AnggotaKeluarga::class);
    }

    public function rumahTangga()
    {
        return $this->belongsTo(RumahTangga::class);
    }
}
