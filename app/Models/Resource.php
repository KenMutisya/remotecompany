<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $fillable = ['title'];

    public function resource()
    {
        return $this->morphTo('resource');
    }
}
