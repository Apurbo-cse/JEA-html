<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    const ACTIVE_STATUS = 'active';
    const INACTIVE_STATUS = 'inactive';
    protected $fillable = [
        'sub_title',
        'title',
        'description',
        'status',
        'image',
    ];
}
