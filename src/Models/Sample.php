<?php

namespace ProcessMaker\Package\Webentry\Models;

use ProcessMaker\Models\ProcessMakerModel;

class Sample extends ProcessMakerModel
{
    protected $table = 'samples';

    protected $fillable = [
        'id', 'name', 'status',
    ];
}
