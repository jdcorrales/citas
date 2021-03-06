<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Prestacion extends Model
{
    use SoftDeletes;

    protected $table = "prestaciones";

    public function disponibilidad()
    {
    	return $this->hasMany(Disponibilidad::class);
    }

    public function sede()
    {
    	return $this->belongsTo(Sede::class);
    }
}
