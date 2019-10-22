<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $fillable = [
        'social_type', 'page_name', 'cta', 'ad_type', 'url_destination', 'targeting', 'main_copy', 'headline', 'links', 'assets', 'objective', 
    ];

    public $timestamps = false;

    public function brief()
    {
        return $this->belongsTo('App\Brief');
    }
}
