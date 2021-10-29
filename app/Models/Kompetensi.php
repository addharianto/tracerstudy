<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Kompetensi extends Model
{
    use HasFactory;

    protected $table = 'kompetensi';

    protected $fillable = [
        'f17a_1','f17a_3','f17a_5','f17a_5a','f17a_7','f17a_9','f17a_11',
        'f17a_13','f17a_15','f17a_17','f17a_19','f17a_21','f17a_23','f17a_25',
        'f17a_27','f17a_29','f17a_31','f17a_33','f17a_35','f17b_2b','f17b_4b',
        'f17b_6b','f17b_6ba','f17b_8b','f17b_10b','f17b_12b',
        'f17b_14b','f17b_16b','f17b_18b','f17b_20b','f17b_22b','f17b_24b',
        'f17b_26b','f17b_28b','f17b_30b','f17b_32b','f17b_34b','f17b_36b',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    
}