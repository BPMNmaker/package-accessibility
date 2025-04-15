<?php

namespace ProcessMaker\Package\Accessibitiy\Models;

use ProcessMaker\Models\ProcessMakerModel;

class AccessibitiyRoute extends ProcessMakerModel
{
    protected $table = 'accessibitiy_routes';

    protected $fillable = [
        'id', 'destination', 'status',
    ];
}
