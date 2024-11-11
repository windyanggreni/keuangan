<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $fillable = [
        'nama',
        'kategori_id',
        'tanggal',
        'jumlah',
    ];

    public function kategori(){
       return $this-> belongsTo(KategoriPengeluaran::class);
    }
}
