<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'email',
        'nama',
        'nomor_telepon',
        'alamat',
        'kategori',
        'jadwal_booking',
        'biaya'
    ];
}
