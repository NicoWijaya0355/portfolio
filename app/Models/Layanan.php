<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $table='layanans';
    protected $primaryKey='id';
    public $timestamps=true;
    protected $fillable=[
        'nama_lembaga',
        'nama_layanan',
        'senin_kamis',
        'kamis',
        'jumat',
        'jumat2',
        'jenis_lembaga',
        'gambar1',
        'denah'
        
        
        
    ];
   
}
