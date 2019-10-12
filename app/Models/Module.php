<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion', 'name', 'parent', 'title', 'url', 'icon', 'class', 'badge', 'wrapper', 'variant', 'attributes', 'divider',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function getAttributesAttribute($value)
    {
        return $value? json_decode($value) : json_decode('{}');
    }

    public function getBadgeAttribute($value)
    {
        return json_decode($value);
    }

    public function getWrapperAttribute($value)
    {
        return json_decode($value);
    }
}
