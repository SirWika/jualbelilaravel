<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_transaksi extends Model
{
    use HasFactory;
    protected $table = 'detail_transaksis';
    protected $primaryKey = 'id_transaksi';

    protected $fillable = [
        'id_order',
        'totalsetelah',
        'metode',
        'status',
        'id_diskon',
        'id_staff',
    ];

    public function order(){
        return $this->belongsTo(Order::class, 'id_order');
    }
    public function staff(){
        return $this->belongsTo(Diskon::class, 'id_staff');
    }
    public function diskon(){
        return $this->belongsTo(Diskon::class, 'id_diskon');
    }
}
