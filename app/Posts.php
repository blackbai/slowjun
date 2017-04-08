<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    public $table='posts';

    protected $fillable = [
        'title',
        'user_id',
        'content'
    ];

    public function user(){
        return $this->belongsTo('App\Users');
    }
}
