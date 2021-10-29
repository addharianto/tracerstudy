<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Pekerjaan extends Model
{
    use HasFactory;

    protected $table = 'pekerjaan';

    protected $fillable = [
    	'f3_01','f3_02','f3_03','f4_01','f4_02','f4_03','f4_04','f4_05','f4_06','f4_07','f4_08','f4_09','f4_10','f4_11','f4_12','f4_13','f4_14','f4_15','f4_16','f6','f7','f8','user_id',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    
}