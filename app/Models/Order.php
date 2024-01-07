<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'id_order';

    protected $fillable = [
        'id_user',
        'id_produk',
        'jumlah',
        'totalharga',
        'status',
        'foto',
    ];

    public function pelanggan(){
        return $this->belongsTo(Pelanggan::class, 'id_user');
    }

    public function produk(){
        return $this->belongsTo(Produk::class, 'id_produk');
    }

    public function detail_transaksi(){
        return $this->hasMany(Detail_transaksi::class);
    }

}
