<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    
    use HasFactory;
    protected $fillable=[
        'nama', 'alamat', 'keterangan','no_telp', 'lati', 'longi', 'gambar1', 'gambar2', 'gambar3'
    ];

}