<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log as Gelf;

class Log extends Model
{
    public function logCreate($message)
    {
        Gelf::alert($message);
    }

}
