<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    public $table='user_accounts';


    public function user(){
        return $this->belongsTo('App\Users','users_id');
    }
}
