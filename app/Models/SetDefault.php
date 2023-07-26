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
        'reps_target',
        'weight_target',
        'weight_done',
        '1rm',
    ];

    public function exercises(): HasOne
    {
        return $this->hasOne(Exercise::class);
    }
}
