<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Petition extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['user_id', 'petition_to', 'heading', 'content','excerpt','image','image_thumb','slug','published'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function comment()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function supportedby()
    {
        return $this->belongsToMany('App\Models\User','user_support_petition')->withTimestamps();
    }

    public function category()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    public function scopePublished($query){
        return $query->where('published','=',true);
    }
}
