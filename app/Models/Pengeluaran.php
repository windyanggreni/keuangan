<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $fillable = [
        'nama',
        'kategori_id',
<<<<<<< HEAD
        'jumlah',
    ];

    protected $dates = ['tanggal'];

=======
        'tanggal',
        'jumlah',
    ];

>>>>>>> 052574911cde4b2ea421ba5bce97e228800aa398
    public function kategori(){
       return $this-> belongsTo(KategoriPengeluaran::class);
    }
}
