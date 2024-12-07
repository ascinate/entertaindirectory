<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'ad_title', 
        'ad_size',
        'ad_position',
        'ad_page',
        'image',
        'ad_price',
        'ad_duration',
        'description'
    ];
    
    public function campaign()
    {
        return $this->belongsTo(Campaign::class, 'campaign_id', 'id');
    }

    public function orders()
    {
        return $this->hasMany(AdOrder::class, 'ad_id', 'id');
    }
}
