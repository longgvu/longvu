<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Country extends Model
{
    use HasFactory;
    protected $fillable = [
        'state_id',
        'name',
        'code',
        'phonecode'
    ];
    public function states(): BelongsTo
    {
        return $this->belongsto(State::class); 
    }
    public function employees()
    {
        return $this->belongsto(Employee::class); 
    }
}
