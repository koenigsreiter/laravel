<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{

    protected $fillable = [
        "sateTime", "confirmed", "user"
    ];
    
    public function user() {
        return $this->hasOne(User::class);
    }

}
