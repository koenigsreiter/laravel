<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{

    protected $fillable = [
        "dateTime", "confirmed", "user_id"
    ];
    
    public function user() {
        return $this->hasOne(User::class);
    }

}
