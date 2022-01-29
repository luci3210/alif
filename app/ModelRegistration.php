<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelRegistration extends Model
{
    protected $guarded = [];

    protected $table = 'registration';
    protected $primaryKey = 'reg_id';
}

