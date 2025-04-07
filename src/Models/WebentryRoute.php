<?php

namespace ProcessMaker\Package\WebEntry\Models;

use ProcessMaker\Models\ProcessMakerModel;

class WebEntryRoute extends ProcessMakerModel
{
    protected $table = 'webentry_routes';

    protected $fillable = [
        'id', 'destination', 'status',
    ];
}
