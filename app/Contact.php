<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public static $rules = [];
    protected $guarded =['active'];
}
