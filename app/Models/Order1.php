<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order1 extends Model
{
    protected $table = "orders";
    protected $primarykey = "id_order";
    protected $fillable = [
        'id_order','id_user','id_produk','jumlah','status','totalharga','foto','created_at','updated_at'];
}
