<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class State extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'name'
    ];
    public function country(): BelongsTo
    {
        return $this->belongsto(Country::class); 
    }
    public function cities(): BelongsTo
    {
        return $this->belongsto(City::class); 
    }
    public function employees(): BelongsTo
    {
        return $this->belongsto(Employee::class); 
    }

}
