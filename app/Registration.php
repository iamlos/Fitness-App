<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'transaction_no',
        'no_id',
        'card_id',
        'payment_id',
        'total',
        'discount',
        'transaction_desc',
    ];
}
