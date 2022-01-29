<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelCity extends Model
{
    protected $guarded = [];

    protected $table = 'philippine_cities';
    protected $primaryKey = 'id';
}

