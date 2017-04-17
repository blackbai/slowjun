<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'setting';

    protected $fillable = [
        'site_title',
        'site_email',
        'site_phone',
        'site_info',
        'site_name',
        'site_icon'
    ];

}
