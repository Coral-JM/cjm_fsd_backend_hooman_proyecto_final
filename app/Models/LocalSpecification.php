<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalSpecification extends Model
{
    use HasFactory;

    public function local() {
        return $this-> belongsTo(Local::class);
    }
    public function specification() {
        return $this-> belongsTo(Specification::class);
    }
}
