<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Perusahaan;

class KategoriPerusahaan extends Model
{
    use HasFactory;

    protected $table = 'kategori_perusahaan';

    protected $fillable = [
    	'nama_kategori_perusahaan','slug',
    ];

    public function perusahaan()
    {
    	return $this->hasMany(Perusahaan::class,'kategori_perusahaan_id');
    }
}
