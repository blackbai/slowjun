<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table  = 'article';

    protected $fillable = [
        'title' ,
        'slug',
        'description',
        'image',
        'content',
        'user_id',
        'comment_count',
        'click_count',
        'is_blocked',
        'is_recommended',
        'is_draft'
    ];

    public function user(){
        return $this->belongsTo('App\User','');
    }
}
