<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggans';
    protected $primaryKey = 'id_user';

    protected $fillable = [
        'id_user',
        'username',
        'password',
        'nama',
        'telp',
        'alamat',
        'jenkel',
        'tanggal_lahir',
    ];

    public function order(){
        return $this->hasMany(Order::class);
    }
}
