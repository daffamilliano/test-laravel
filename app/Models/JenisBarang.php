<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisBarang extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_barang',
        'deskripsi'
    ];

    public function namabarang()
    {
        return $this->hasMany('App\Models\NamaBarang', 'jenis_barang_id');
    }
}