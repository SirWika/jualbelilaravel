<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diskon extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table = 'diskons';

    protected $primaryKey = 'id_diskon';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_diskon',
        'deskripsi',
        'status',
        'jumlah',
        'harga',
    ];

    public function order(){
        return $this->hasMany(Order::class);
    }
}
