<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelBarangay extends Model
{
    protected $guarded = [];

    protected $table = 'philippine_barangays';
    protected $primaryKey = 'id';
}

