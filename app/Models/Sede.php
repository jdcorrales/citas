<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    use SoftDeletes;

    public function prestacion()
    {
    	return $this->hasMany(Prestacion::class);
    }
}
