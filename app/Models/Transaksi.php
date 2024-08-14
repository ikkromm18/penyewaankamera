<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'name',
        'nohp',
        'jenis_acara',
        'alamat',
        'waktu',
        'drone',
        'jimijib',
        'total_harga',
    ];
}
