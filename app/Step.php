<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    protected $fillable = ['order', 'title', 'body', 'uuid'];

    public static function boot()
    {
        parent::boot();

        static::creating(function (Step $step) {

            $step->uuid = Str::uuid();
        });
    }
}
