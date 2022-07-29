<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LinkResource extends Model
{

    protected $casts = [
        'openinnewtab' => 'boolean',
    ];
}
