<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Pembelajaran extends Model
{
    use HasFactory;

    protected $table = 'pembelajaran';

    protected $fillable = [
    	'f2_01','f2_02','f2_03','f2_04','f2_05','f2_06','f2_07','user_id',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    
}

// 