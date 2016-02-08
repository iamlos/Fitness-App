<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'card_name',
        'price',
        'admin_cost',
        'active_periode'
    ];
    public $timestamps = false;
}
