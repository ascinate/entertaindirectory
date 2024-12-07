<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'buyer_id',
        'ad_id',
        'position_id',
        'total_amount',
        'start_date',
        'end_date',
        'payment_status',
    ];


}
