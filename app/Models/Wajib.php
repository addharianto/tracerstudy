<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Wajib extends Model
{
    use HasFactory;

    protected $table = 'wajib';

    protected $fillable = [
    	'f5_01','f5_02','f5_03','f8','f14','f15','f13_01','f13_02','f13_02','user_id',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    
}

// 