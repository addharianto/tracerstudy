<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Perusahaan;

class Lowongan extends Model
{
    use HasFactory;

    protected $table = 'lowongan';

    protected $fillable = [
    	'judul','posisi','jumlah','deskripsi','perusahaan_id','tgl','tglMulai','tglBerakhir','slug','user_id',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function perusahaan()
    {
    	return $this->belongsTo(Perusahaan::class);
    }

    // public function getThumbnail()
    // {
    // 	return 'uploads/img/lowongan/'.$this->thumbnail;
    // }
}
