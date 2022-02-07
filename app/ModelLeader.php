<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelLeader extends Model
{
    protected $guarded = [];

    protected $table = 'leaders';
    protected $primaryKey = 'ldr_id';
}

