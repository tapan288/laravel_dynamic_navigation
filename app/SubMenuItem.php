<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubMenuItem extends Model
{
    protected $fillable = [
        'menuitem_id',
        'name',
        'status',
        'link'
    ];
}
