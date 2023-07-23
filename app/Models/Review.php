<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'local_id',
        'title',
        'description',
        'rating'
    ];

    public function user() {
        return $this-> belongsTo(User::class);
    }
    public function local() {
        return $this-> belongsTo(Local::class);
    }
}
