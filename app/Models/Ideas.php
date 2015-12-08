<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ideas extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['user_id', 'petition_to', 'heading', 'content','image','image_thumb','slug','published','ip_address'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
