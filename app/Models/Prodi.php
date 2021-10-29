<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Prodi;

class Prodi extends Model
{
    use HasFactory;

    protected $table = 'prodi';

    protected $fillable = [
    	'nama',
    ];

    public function prodi()
    {
    	return $this->hasMany(Prodi::class,'prodi_id');
    }
}
