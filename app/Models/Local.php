<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'direction',
        'url',
        'phone',
        'schedule',
        'type',
        'rating',
        'image'
    ];

    public function review() {
        return $this-> hasMany(Review::class);
    }
    public function localSpecification() {
        return $this-> hasMany(LocalSpecification::class);
    }
}
