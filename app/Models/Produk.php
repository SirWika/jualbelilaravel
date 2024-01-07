<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produks';
    protected $primaryKey = 'id_produk';

    protected $fillable = [
        'id_produk',
        'nama',
        'deskripsi',
        'kategori',
        'stok',
        'harga',
        'foto',
    ];

    public function order(){
        return $this->hasMany(Order::class);
    }
}
