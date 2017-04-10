<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workspace_Size extends Model
{
    protected $table = 'workspace_size';

    public function workspace() {
        $this->belongsToMany('Workspace');
    }
}
