<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * Created by PhpStorm.
 * User: Tim van Zal
 * Date: 9-5-2017
 * Time: 17:30
 */
class Educatie extends Model
{
    public $timestamps = false;
    protected $fillable = ['id', 'title', 'content_left', 'content_right'];
}