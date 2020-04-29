<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
      'name' => 'required',
      'email' => 'required',
      'password' => 'required',
      'password_confirmation' => 'required',
      'gender' => 'required',
      'height' => 'required',
      'birthday' => 'required',
      );
}
