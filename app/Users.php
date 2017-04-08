<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model
{
    use SoftDeletes;
    public $table = 'users';

    protected $fillable = [
        'name',
        'user_id'
    ];

    public function account()
    {
        return $this->hasOne('App\Accounts');
    }

    public function posts(){
        return $this->hasMany('App\Posts');
    }
}
