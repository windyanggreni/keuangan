<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriPemasukan extends Model
{
    protected $fillable = [
        'kategori_pemasukan'
    ];

    public function pemasukan(){
        return $this->hasMany(Pemasukan::class);
    }
}
