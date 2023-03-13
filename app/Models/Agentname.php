<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agentname extends Model
{
    protected $fillable = [
        'name_id',
        'firstname',
        'lastname',
        'email',
        'phone',
        'pollingunit_uniqueid',
    ];
}
