<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'begin_date',
        'end_date',
        'user_id',
    ];
}
