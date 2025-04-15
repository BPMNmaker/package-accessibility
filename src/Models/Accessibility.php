<?php

namespace ProcessMaker\Package\Accessibility\Models;

use ProcessMaker\Models\ProcessMakerModel;

class AccessibilityRoute extends ProcessMakerModel
{
    protected $table = 'accessibility_routes';

    protected $fillable = [
        'id', 'destination', 'status',
    ];
}
