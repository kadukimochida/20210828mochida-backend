<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'user_id' => 'required',
        'content' => 'required',
    );

    public function comments() {
        return $this->hasMany('App\Models\Comment');
    }

}