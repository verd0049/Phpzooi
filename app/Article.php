<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    public function path() {
        return route('article.blog', $this);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
