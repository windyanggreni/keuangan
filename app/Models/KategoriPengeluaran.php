<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriPengeluaran extends Model
{
    protected $fillable = [
        'kategori_pengeluaran'
    ];

    public function pengeluaran(){
        return $this->hasMany(Pengeluaran::class);
    }
}
