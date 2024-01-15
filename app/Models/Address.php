<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getFUllNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function getFUllAddressAttribute()
    {
        return "{$this->address_1}, {$this->city}, {$this->state}, {$this->country}";
    }
}
