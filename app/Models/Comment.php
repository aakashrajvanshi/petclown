<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['petition_id', 'user_id', 'comment', 'anon','ip_addr','approved'];

    public function petition()
    {
        return $this->belongsTo('App\Models\Petition');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function likedBy()
    {
        return $this->belongsToMany('App\Models\User','user_like_comment')->withTimestamps();
    }

    public function scopeApproved($query){
        return $query->where('approved',1);
    }
    public function scopeDisapproved($query){
        return $query->where('approved',0);
    }

}
