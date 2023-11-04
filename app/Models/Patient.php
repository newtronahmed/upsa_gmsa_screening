<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getLevelAttribute($value)
    {
        return str_replace('_', ' ', $value);
    }
    public function getRouteKeyName()
    {
        return 'path_no';
    }
}
