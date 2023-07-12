<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Training extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'number',
        'date',
        'muscles',
        'program_id',
    ];

    public function program() : BelongsTo
    {
        return $this->belongsTo(Program::class);
    }

    public function exercise() : BelongsToMany
    {
        return $this->belongsToMany(exercise::class);
    }
}
