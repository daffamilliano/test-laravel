<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NamaBarang extends Model
{
    use HasFactory;

    protected $visible = ['nama_barang', 'jenis_barang_id'];
    protected $fillable = ['nama_barang', 'jenis_barang_id'];

    public function jenisbarang()
    {
        return $this->belongsTo('App\Models\JenisBarang', 'jenis_barang_id');
    }

}
