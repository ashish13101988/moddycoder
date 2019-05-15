<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guestquery extends Model
{
    protected $fillable = ['name','email','phone','subject','description','created_at','updated_at'];
}
