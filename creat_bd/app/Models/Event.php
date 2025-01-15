<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function manager() {
        return $this->belongsTo(Manager::class);
    }
    
    public function participants() {
        return $this->belongsToMany(Participant::class, 'event_participants')
                    ->withPivot('presence_status')
                    ->withTimestamps();
    }
    
    public function organisateurs() {
        return $this->hasMany(Organisateur::class);
    }
}
