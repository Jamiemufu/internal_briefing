<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'client_name', 'brief_date', 'brief_in_by', 'client_email', 'job_number', 'campaign_name', 'budget', 'budget_type', 'start_date', 'end_date',
    ];

    public $timestamps = false;

    public function social()
    {
        return $this->hasOne('App\Social', 'id', 'social_id');
    }

    public function ppc()
    {
        return $this->hasOne('App\PPC', 'id', 'ppc_id');
    }
}
