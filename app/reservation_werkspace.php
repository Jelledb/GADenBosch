<?php

namespace App;

class reservation_werkspace extends BaseModel
{
    protected $table = "reservation_workspace";
    protected $fillable = ['reservation_id', 'workspace_id'];
}
