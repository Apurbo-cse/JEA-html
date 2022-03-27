<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    const ACTIVE_STATUS = 'active';
    const INACTIVE_STATUS = 'inactive';
    protected $fillable = [
        'sub_title',
        'title',
        'description',
        'mission',
        'vission',
        'history',
        'status',
        'image',
    ];
}
