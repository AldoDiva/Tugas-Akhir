<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Situs extends Model
{
    
    use HasFactory;
    protected $fillable=[
        'nama', 'alamat', 'keterangan', 'lati', 'longi', 'gambar1', 'gambar2', 'gambar3','gambar4','gambar5',
    ];

}
