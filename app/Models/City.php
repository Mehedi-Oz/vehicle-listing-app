<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'state_id',
        'name',
    ];

    public $timestamps = false;

        public function state(): belongsTo
    {
        return $this->belongsTo(State::class);
    }

        public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }
}
