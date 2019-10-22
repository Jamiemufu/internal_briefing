<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class EstimateApproved extends AbstractAction
{
    public function getTitle()
    {
        return 'Mark as Approved';
    }

    public function getIcon()
    {
        return 'voyager-check';
    }

    public function getPolicy()
    {
        return 'browse';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-danger pull-right',
            'style' => 'margin: 5px; padding: 7px;',
        ];
    }

    public function getDefaultRoute()
    {
        // change route need to update
        return route('estimateApproved', array("id"=>$this->data->{$this->data->getKeyName()}));
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'briefs';
    }
}