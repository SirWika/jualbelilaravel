<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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
    protected $hidden = [
        'password',
    ];

    public function order(){
        return $this->hasMany(Order::class);
    }
}
