<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classrooms extends Model
{
    use HasFactory;

    public function classroom__students()

    {
        return $this->hasMany('App\Models\Classrooms_Students');

    }
}
