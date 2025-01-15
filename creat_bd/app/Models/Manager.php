<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    public function events() {
        return $this->hasMany(Event::class);
    }
}
