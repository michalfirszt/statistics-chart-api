<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    protected $guarded = ['id'];

    public function visits()
    {
        return $this->hasMany(Visit::class);
    }
}
