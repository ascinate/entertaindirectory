<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdOrder extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ads_order';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ad_id',
        'user_id',
        'start_date',
        'end_date',
        'amount',
        'ad_image',
        'ad_url',
        'payment_status',
        'status',
    ];

    /**
     * Relationships with the Ad model.
     */
    public function ad()
    {
        return $this->belongsTo(Ad::class);
    }

    /**
     * Relationship with the User model.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

