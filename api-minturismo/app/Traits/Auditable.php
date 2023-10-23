<?php

namespace App\Traits;

trait Auditable
{
    protected static $logAttributes = ['*'];

    protected static $logOnlyDirty = true;
}
