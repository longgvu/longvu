<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    use HasFactory;
    protected $fillable = [
        'state_id',
        'name'
    ];
    public function state()
    {
        return $this->belongsto(State::class); 
    }
    public function employees(): BelongsTo
    {
        return $this->belongsto(Employee::class); 
    }
}
