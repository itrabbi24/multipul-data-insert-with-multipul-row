<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $fillable=['ProductID','DeviceName','PartsName','PartsID'];
}
