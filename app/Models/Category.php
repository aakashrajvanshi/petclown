<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category', 'desc'];
    public $timestamps = false;
    public function petitions()
    {
        return $this->belongsToMany('App\Models\Petition');
    }
}
