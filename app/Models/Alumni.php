<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Prodi;

class Alumni extends Model
{
    use HasFactory;

    protected $table = 'alumni';

    protected $fillable = [
    	'kode_pt','npm','tahun_lulus','nomor_hp','photo','prodi_id','user_id',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function prodi()
    {
    	return $this->belongsTo(Prodi::class);
    }

    public function getPhoto()
    {
    	return 'uploads/alumni/'.$this->photo;
    }
    
}

// 