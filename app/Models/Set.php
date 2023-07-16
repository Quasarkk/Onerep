<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Set extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'number',
        'reps_previous',
        'reps_done',
        'weight_previous',
        'weight_done',
        '1rm',
        '1rm_reps',
        '1rm_weight',
    ];

    public function exercises(): HasOne
    {
        return $this->hasOne(Exercise::class);
    }
}
