<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class PDF extends AbstractAction
{
    public function getTitle()
    {
        return 'Download PDF';
    }

    public function getIcon()
    {
        return 'voyager-eye';
    }

    public function getPolicy()
    {
        return 'browse';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-success pull-right',
            'style' => 'margin: 5px; padding: 7px;',
        ];
    }

    public function getDefaultRoute()
    {
        return route('pdf', array("id"=>$this->data->{$this->data->getKeyName()}));
    }

    public function shouldActionDisplayOnDataType()
{
    return $this->dataType->slug == 'briefs';
}
}