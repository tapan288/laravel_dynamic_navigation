<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = [
        'name',
        'status',
        'link'
    ];

    public function submenus()
    {
        return $this->hasMany('App\SubMenuItem', 'menuitem_id')->where('status', 'enabled');
    }
}
