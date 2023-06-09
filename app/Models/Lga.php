<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
    use HasFactory;
    protected $guarded  = ['id'];
    protected $fillable = [
        'uniqueid',
        'lga_id',
        'lga_name',
        'state_id',
        'lga_description',
        'entered_by_user',
        'date_entered',
        'user_ip_address'
    ];

    public function state(){

        return $this->belongsTo('App\State');
    }
}
