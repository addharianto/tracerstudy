<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Sikon extends Model
{
    use HasFactory;

    protected $table = 'sikon';

    protected $fillable = [
        'f9_01','f9_02','f9_03','f9_04','f9_05','f9_06','f10_01','f11_01','f16_01','f16_02', 'f16_03','f16_04','f16_05', 'f16_06','f16_07','f16_08','f16_09','f16_10', 'f16_11','f16_12', 'f16_13','f16_14','user_id',
        ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    
}