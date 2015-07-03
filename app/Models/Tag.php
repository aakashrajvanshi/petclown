<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['tag'];
    public $timestamps = false;

    public function petitions()
    {
        return $this->belongsToMany('App\Models\Petition');
    }
}
