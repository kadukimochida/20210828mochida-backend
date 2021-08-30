<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'post_id' => 'required',
        'comment' => 'required',
    );
    public function post(){
        return $this.belongsTo('App\Models\Post');
    }
}
