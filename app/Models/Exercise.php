<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Exercise extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'type',
        '1rm',
        'muscles',
        'icon_url',
    ];

    public function sets(): HasMany
    {
        return $this->hasMany(Set::class);
    }


    public function trainings() : BelongsToMany
    {
        return $this->belongsToMany(Training::class);
    }
}
