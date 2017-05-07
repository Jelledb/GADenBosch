<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RouteMetaTag extends Model
{
    public $timestamps = false;
    protected $fillable = ['id', 'route', 'title', 'description'];
}
