<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PPC extends Model
{
    /**
     * mass assignable fields
     *
     * @var string
     */
    protected $fillable = [
        'website_url', 'url_destination', 'ad_type', 'number_of_ads', 'analytics', 'format', 'objectives', 'assets', 'main_offer', 'headline_1', 'headline_2', 'headline_3', 'desc_1', 'desc_2', 'cta', 'site_extensions', 
    ];

     /**
     * disable timestamps
     *
     * @var string
     */
    public $timestamps = false;

    public function brief()
    {
        return $this->belongsTo('App\Brief');
    }
   
}
