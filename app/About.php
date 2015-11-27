<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    public static $rules = [
        
        'header' => ['required', 'min:3'],
        'paragraph' => ['required', 'min:10'],
        
    ];
    protected $guarded = ['active'];
}
