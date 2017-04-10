<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workspace_Type extends Model
{
    //
    protected $table = 'workspace_type';

    public function workspaces() {
        return $this->belongsTo('Workspace');
    }
}
