<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class Questions extends AbstractAction
{
    public function getTitle()
    {
        return 'Mark Questions Sent';
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
            'class' => 'btn btn-sm btn-warning pull-right',
            'style' => 'margin: 5px; padding: 7px;',
        ];
    }

    public function getDefaultRoute()
    {
        return route('questions', array("id"=>$this->data->{$this->data->getKeyName()}));
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'briefs';
    }
}