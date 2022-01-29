<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModeHasRole extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * 

     */
    public $timestamps = false;

    protected $table = 'model_has_roles';
    protected $fillable = ['role_id','model_type','model_id'];
}
