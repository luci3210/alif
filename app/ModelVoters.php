<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelVoters extends Model
{
    protected $guarded = [];

    protected $table = 'voters';
    protected $primaryKey = 'vtr_id';
}

