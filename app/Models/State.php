<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = [
        'state_id',
        'state_name'
    ];

    public function lgas()
    {
        return $this->hasMany('App\Lgas');
    }
}
