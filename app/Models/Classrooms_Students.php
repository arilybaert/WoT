<?php

namespace App\Models;

use App\Models\Classrooms;
use App\Models\Students;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classrooms_Students extends Model
{
    use HasFactory;



    public function classroom(): BelongsTo
    {
        return $this->belongsTo(Classrooms::class);
    }

    public function student()
    {
        return $this->belongsTo('App\Models\Students', 'student_id', 'nfc_id');
    }

}
