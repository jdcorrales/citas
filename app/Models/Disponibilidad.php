<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Disponibilidad extends Model
{
	use SoftDeletes;

    protected $table = 'disponibilidades';
}
