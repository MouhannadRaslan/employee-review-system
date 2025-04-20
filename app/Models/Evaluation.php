<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $fillable = [
        'user_id',
        'type',
        'score',
        'note',
        'evaluation_date',
    ];
}
