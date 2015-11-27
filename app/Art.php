<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Art extends Model
{
    public static $create_rules = [
        'name' => ['required', 'min:3'],
        'image' => ['required', 'image'],
        'width' => ['required', 'numeric'],
        'height' => ['required', 'numeric'],
    ];
    
    public static $edit_rules = [
        'name' => ['required', 'min:3'],
        'width' => ['required', 'numeric'],
        'height' => ['required', 'numeric'],
    ];
    
    
    protected $guarded = ['active'];

}
