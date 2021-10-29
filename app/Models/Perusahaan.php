<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\KategoriPerusahaan;

class Perusahaan extends Model
{
    use HasFactory;

    protected $table = 'perusahaan';

    protected $fillable = [
    	'nama','alamat','deskripsi','user_id','kategori_perusahaan_id',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function kategoriPerusahaan()
    {
    	return $this->belongsTo(KategoriPerusahaan::class);
    }

    // public function getThumbnail()
    // {
    // 	return 'uploads/img/perusahaan/'.$this->thumbnail;
    // }
}
