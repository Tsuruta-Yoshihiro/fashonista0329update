<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinations extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
    'user_id' => 'required',
    'body' => 'required',
    'image_path' => 'required',
    'item1' => 'required',
    'item2' => 'required',
    'item3' => 'required',
    'item4' => 'required',
    'item5' => 'required',
    'item6' => 'required',
    );
}
