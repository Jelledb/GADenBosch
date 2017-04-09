<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsItem extends Model
{
    //
    public $timestamps = false;
    protected $fillable = ['id', 'titel', 'beschrijving', 'tekst', 'zichtbaar', 'aangemaakt', 'foto'];
}
