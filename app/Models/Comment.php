<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['petition_id', 'user_id', 'comment', 'anon','approved'];

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

    public function scopeNotReviewed($query){
        $query->whereNull('approved');
    }
    public function scopeApproved($query){
        $query->where('approved','=',TRUE);
    }
    public function scopeDisapproved($query){
        $query->where('approved','=',FALSE);
    }

}
