<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guared = [];
    public function department()
    {
        return $this->belongsto(Department::class); 
    }
    public function country() {
        return $this->belongsto(Country::class);
    }
    public function state() {
        return $this->belongsto(state::class);
    }
    public function city() {
        return $this->belongsto(city::class);
    }

}
