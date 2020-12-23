<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logbook extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'student_id',
        'notified_on',
        'created_at',
        'updated_at',
    ];

    public function student()
    {
        return $this->belongsTo('App\Models\Students', 'student_id', 'nfc_id');
    }
}
