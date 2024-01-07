<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Staff extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'staff';
    protected $primaryKey = 'id_staff';

    protected $fillable = [
        'id_staff',
        'nama',
        'jenkel',
        'tanggal_lahir',
        'jabatan',
        'username',
        'password',
        'foto',
    ];
    protected $hidden = [
        'password',
    ];

    public function detail_transaksi(){
        return $this->hasMany(Detail_transaksi::class);
    }
}
